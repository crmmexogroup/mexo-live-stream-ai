const fs = require('fs');
const https = require('https');
const path = require('path');

const fontsDir = path.join(__dirname, 'assets', 'fonts');
const cssPath = path.join(fontsDir, 'fonts.css');

// The Google Fonts URL from header.php
const googleFontsUrl = 'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700;800;900&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap';
const materialIconsUrl = 'https://fonts.googleapis.com/icon?family=Material+Icons';

async function downloadFile(url, dest) {
    return new Promise((resolve, reject) => {
        const file = fs.createWriteStream(dest);
        https.get(url, (response) => {
            response.pipe(file);
            file.on('finish', () => {
                file.close(resolve);
            });
        }).on('error', (err) => {
            fs.unlink(dest, () => { }); // Delete the file async. (But we don't check the result)
            reject(err);
        });
    });
}

async function fetchCss(url) {
    return new Promise((resolve, reject) => {
        https.get(url, { headers: { 'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36' } }, (res) => {
            let data = '';
            res.on('data', (chunk) => data += chunk);
            res.on('end', () => resolve(data));
        }).on('error', reject);
    });
}

async function processFonts() {
    console.log('Downloading CSS...');
    let cssContent = await fetchCss(googleFontsUrl);
    let iconsCss = await fetchCss(materialIconsUrl);

    cssContent += '\n' + iconsCss;

    const fontUrlRegex = /url\((https:\/\/fonts\.gstatic\.com\/[^)]+)\)/g;
    let match;
    let newCss = cssContent;
    let downloadMap = new Map();

    while ((match = fontUrlRegex.exec(cssContent)) !== null) {
        const fullUrl = match[1];
        const filename = path.basename(fullUrl);
        const localPath = path.join(fontsDir, filename);

        downloadMap.set(fullUrl, filename);
    }

    console.log(`Found ${downloadMap.size} font files to download.`);

    for (const [url, filename] of downloadMap) {
        console.log(`Downloading ${filename}...`);
        await downloadFile(url, path.join(fontsDir, filename));
        // Replace URL in CSS
        // Escape specific regex chars in url is hard, simpler to just replace str
        newCss = newCss.split(url).join('./' + filename);
    }

    fs.writeFileSync(cssPath, newCss);
    console.log('Fonts downloaded and CSS saved to assets/fonts/fonts.css');
}

processFonts();

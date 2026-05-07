<?php
add_action('wp_head', function () {
    $font_base = get_stylesheet_directory_uri() . '/assets/fonts/be-vietnam-pro';
    ?>
    <script id="mexo-font-loading-start">document.documentElement.classList.add('fonts-loading');</script>
    <link rel="preload" as="font" type="font/woff2" href="<?php echo esc_url($font_base . '/be-vietnam-pro-800-vietnamese.woff2'); ?>" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="<?php echo esc_url($font_base . '/be-vietnam-pro-800-latin.woff2'); ?>" crossorigin>
    <style id="mexo_font_loading_fix">
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-300-vietnamese.woff2'); ?>') format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-300-latin.woff2'); ?>') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-400-vietnamese.woff2'); ?>') format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-400-latin.woff2'); ?>') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-500-vietnamese.woff2'); ?>') format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-500-latin.woff2'); ?>') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-600-vietnamese.woff2'); ?>') format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-600-latin.woff2'); ?>') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-700-vietnamese.woff2'); ?>') format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-700-latin.woff2'); ?>') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-800-vietnamese.woff2'); ?>') format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url('<?php echo esc_url($font_base . '/be-vietnam-pro-800-latin.woff2'); ?>') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        html,
        body,
        .font-display {
            font-family: 'Be Vietnam Pro', Arial, 'Helvetica Neue', sans-serif;
        }

        html.fonts-loading *,
        html.fonts-loading *::before,
        html.fonts-loading *::after {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform !important;
        }
    </style>
    <?php
}, 1);

add_action('wp_footer', function () {
    ?>
    <script id="mexo-font-loading-end">
        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.finally(function () {
                document.documentElement.classList.remove('fonts-loading');
            });
        } else {
            window.addEventListener('load', function () {
                document.documentElement.classList.remove('fonts-loading');
            });
        }
    </script>
    <?php
}, 99);
?>

<?php get_header(); ?>

<section class="mexo-home-hero relative pt-8 pb-16 lg:pt-12 lg:pb-24 overflow-hidden">

<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
<div class="inline-flex items-center px-4 py-2 rounded-full bg-white dark:bg-slate-800 shadow-md border border-slate-100 dark:border-slate-700 text-primary text-2xl font-bold mb-8 animate-float cursor-default">
<span class="flex h-2.5 w-2.5 relative mr-2.5">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary"></span>
</span>
                Đối tác tăng trưởng số 1 Việt Nam
            </div>
<h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-normal text-slate-900 dark:text-white mb-8" style="line-height: 1.24; letter-spacing: 0;">
  Giải pháp <br class="mexo-mobile-only-break"/> tăng trưởng <br class="hidden lg:block"/>
  <span class="text-gradient drop-shadow-sm inline-block px-2 py-1">Thương Mại <br class="mexo-mobile-only-break"/> Điện Tử</span> <br/>
  cho doanh nghiệp <br class="mexo-mobile-only-break"/> Việt
</h1>
<p class="mt-4 max-w-2xl mx-auto text-xl text-slate-600 dark:text-slate-300 mb-10 font-medium leading-relaxed">
                Tối ưu hóa vận hành, bứt phá doanh thu và xây dựng thương hiệu bền vững trên nền tảng số cùng hệ sinh thái giải pháp toàn diện.
            </p>
<div class="flex flex-col sm:flex-row justify-center gap-5">
<button
    type="button"
    onclick="window.location.href='/lien-he/';"
    class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-bold rounded-full text-white bg-gradient-to-r from-cta-orange to-cta-red shadow-lg shadow-cta-orange/30 hover:shadow-xl hover:shadow-cta-orange/40 transition-all transform hover:-translate-y-1 hover:scale-105">
    <span class="material-icons mr-2 text-xl">rocket_launch</span>
    Hành động ngay
</button>

<button
    type="button"
    onclick="window.location.href='/lien-he/';"
    class="inline-flex items-center justify-center px-8 py-4 border border-slate-200 dark:border-slate-700 text-base font-bold rounded-full text-slate-700 dark:text-white bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 hover:border-primary/50 shadow-sm hover:shadow-md transition-all transform hover:-translate-y-1">
    Nhận tư vấn chiến lược
    <span class="material-icons ml-2 text-xl">arrow_forward</span>
</button>

</div>
<div class="hidden lg:block absolute top-1/2 left-0 transform -translate-y-1/2 ml-4 xl:ml-0 animate-float-delayed">
<div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-md p-4 rounded-2xl shadow-xl border border-slate-100 dark:border-slate-700 flex items-center gap-3 w-56 hover:scale-105 transition-transform">
<div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center text-green-600 shadow-inner">
<span class="material-icons text-2xl">trending_up</span>
</div>
<div>
<div class="text-xs text-slate-500 font-bold uppercase tracking-wider">Tăng trưởng</div>
<div class="text-xl font-black text-slate-900 dark:text-white">+200%</div>
</div>
</div>
</div>
<div class="hidden lg:block absolute top-1/3 right-0 transform translate-y-1/2 mr-4 xl:mr-0 animate-float">
<div class="bg-white/80 dark:bg-slate-800/80 backdrop-blur-md p-4 rounded-2xl shadow-xl border border-slate-100 dark:border-slate-700 flex items-center gap-3 w-60 hover:scale-105 transition-transform">
<div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-primary shadow-inner">
<span class="material-icons text-2xl">groups</span>
</div>
<div>
<div class="text-xs text-slate-500 font-bold uppercase tracking-wider">Khách hàng</div>
<div class="text-xl font-black text-slate-900 dark:text-white">500+ Partner</div>
</div>
</div>
</div>
<div class="mt-20 pt-10 border-t border-slate-200 dark:border-slate-800/50 grid grid-cols-2 md:grid-cols-4 gap-8 relative z-10">
<div class="hover:transform hover:-translate-y-1 transition-transform duration-300">
<div class="text-4xl lg:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-dark">500+</div>
<div class="text-sm font-bold text-slate-600 dark:text-slate-400 mt-2 uppercase tracking-wide">Doanh nghiệp hợp tác</div>
</div>
<div class="hover:transform hover:-translate-y-1 transition-transform duration-300">
<div class="text-4xl lg:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-dark">200%</div>
<div class="text-sm font-bold text-slate-600 dark:text-slate-400 mt-2 uppercase tracking-wide">Tăng trưởng TB</div>
</div>
<div class="hover:transform hover:-translate-y-1 transition-transform duration-300">
<div class="text-4xl lg:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-dark">7+</div>
<div class="text-sm font-bold text-slate-600 dark:text-slate-400 mt-2 uppercase tracking-wide">Năm kinh nghiệm</div>
</div>
<div class="hover:transform hover:-translate-y-1 transition-transform duration-300">
<div class="text-4xl lg:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-dark">24/7</div>
<div class="text-sm font-bold text-slate-600 dark:text-slate-400 mt-2 uppercase tracking-wide">Hỗ trợ kỹ thuật</div>
</div>
</div>
</div>
</section>
<div class="py-12 bg-white dark:bg-slate-900/50 border-y border-slate-100 dark:border-slate-800">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<p class="text-center text-xs font-bold text-slate-400 uppercase tracking-[0.25em] mb-10">Được tin tưởng bởi các thương hiệu hàng đầu</p>
<div class="flex flex-wrap justify-center items-center gap-10 md:gap-24 opacity-70 dark:opacity-90 grayscale hover:grayscale-0 transition-all duration-700">
<div class="text-xl md:text-2xl font-black text-slate-800 dark:text-white">Vingroup</div>
<div class="text-xl md:text-2xl font-black text-slate-800 dark:text-white">Sunhouse</div>
<div class="text-xl md:text-2xl font-black text-slate-800 dark:text-white">Viettel</div>
<div class="text-xl md:text-2xl font-black text-slate-800 dark:text-white">FPT Retail</div>
<div class="text-xl md:text-2xl font-black text-slate-800 dark:text-white">Tiki</div>
</div>
</div>
</div>
<section class="py-16 bg-background-light dark:bg-background-dark relative">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row items-center justify-between gap-8 mb-10">
<div>
<h2 class="text-primary font-bold tracking-wide uppercase text-sm mb-2 flex items-center gap-2">
<span class="w-6 h-px bg-primary"></span>Điểm nhấn truyền thông
                    </h2>
<h3 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white">Dấu ấn &amp; Sự ghi nhận</h3>
</div>
<a class="text-slate-500 hover:text-primary font-semibold text-sm flex items-center transition-colors group" href="#about">
                    Xem thêm về chúng tôi <span class="material-icons ml-1 text-base group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="grid md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 flex items-start gap-4 hover:shadow-card hover:-translate-y-1 transition-all duration-300">
<div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-yellow-600 flex-shrink-0 shadow-sm">
<span class="material-icons text-3xl">emoji_events</span>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white mb-2 text-lg">Top 10 Agency TMĐT</h4>
<p class="text-sm text-slate-500 leading-relaxed font-medium">Vinh danh bởi Hiệp hội TMĐT Việt Nam (VECOM) năm 2023.</p>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 flex items-start gap-4 hover:shadow-card hover:-translate-y-1 transition-all duration-300">
<div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-primary flex-shrink-0 shadow-sm">
<span class="material-icons text-3xl">handshake</span>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white mb-2 text-lg">Đối tác chiến lược</h4>
<p class="text-sm text-slate-500 leading-relaxed font-medium">Đối tác cấp cao của Shopee Premium, TikTok Shop &amp; Lazada.</p>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-soft border border-slate-100 dark:border-slate-700 flex items-start gap-4 hover:shadow-card hover:-translate-y-1 transition-all duration-300">
<div class="w-14 h-14 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-600 flex-shrink-0 shadow-sm">
<span class="material-icons text-3xl">newspaper</span>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white mb-2 text-lg">Được đưa tin trên</h4>
<p class="text-sm text-slate-500 leading-relaxed font-medium">VnExpress, CafeF, Brands Vietnam và các báo uy tín.</p>
</div>
</div>
</div>
</div>
</section>
<section class="py-24 bg-white dark:bg-slate-900 overflow-hidden" id="about">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="lg:grid lg:grid-cols-2 lg:gap-20 items-center">
<div class="relative mb-12 lg:mb-0 group">
<div class="absolute -top-10 -left-10 w-72 h-72 bg-primary/20 rounded-full blur-3xl mix-blend-multiply filter animate-float opacity-70"></div>
<div class="absolute -bottom-10 -right-10 w-72 h-72 bg-cyan-400/20 rounded-full blur-3xl mix-blend-multiply filter animate-float-delayed opacity-70"></div>
<div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white dark:border-slate-800 transform group-hover:rotate-1 transition-transform duration-500">
<img class="w-full h-full object-cover transform scale-105 group-hover:scale-110 transition-transform duration-700" data-alt="E-commerce logistics center" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCljdO38cZef-VPJAsD6HHof8425JR74zjvmrQlxK1sBhfc2goYmsJLrTGcvK_2iXJoR_iXHU4mTqx5FvFJCNVbCwg4VyCmEReZ7VlFAuYWcoyEfDsFmOumUlHfhE3H5N3AziCipjiO9rnVZ4rMRUno4t-CyJm9yjShoBrRCOGByi_d4AvgceBHwyh_9Pk_gx2xmR2RVsZ_nonqflO9f6GBLIQmLGo_KFsIZLNhclqNLvMD5rI5gonZRyepkK8aQkzdRRmPHG-YAA0"/>
</div>
<div class="absolute -bottom-8 -right-8 bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-xl border border-slate-100 dark:border-slate-700 max-w-xs hidden md:block">
<div class="flex items-start gap-4">
<span class="material-icons text-4xl text-primary/30">format_quote</span>
<div>
<p class="text-slate-700 dark:text-slate-300 text-sm font-bold italic mb-3">
                                    "Biến thách thức thành cơ hội tăng trưởng."
                                </p>
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-primary"></div>
<span class="text-xs font-bold uppercase text-slate-400 tracking-wider">CEO MEXO GROUP</span>
</div>
</div>
</div>
</div>
</div>
<div>
<h2 class="text-primary font-bold tracking-wide uppercase text-sm mb-3 flex items-center gap-2">
<span class="w-8 h-px bg-primary"></span> Về MEXO GROUP
                    </h2>
<h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-6 leading-tight">
                        Định hình tương lai <br/> <span class="text-primary">thương mại điện tử</span> Việt Nam
                    </h3>
<div class="space-y-6 text-lg text-slate-600 dark:text-slate-300 font-medium leading-relaxed">
<p>
                            Tại MEXO GROUP, chúng tôi không chỉ cung cấp dịch vụ, chúng tôi cung cấp giải pháp. Với sự am hiểu sâu sắc thị trường nội địa và cập nhật liên tục các xu hướng toàn cầu, chúng tôi cam kết đồng hành cùng doanh nghiệp Việt trên con đường chinh phục kỷ nguyên số.
                        </p>
<p>
                            Sứ mệnh của chúng tôi là biến những thách thức trong vận hành và marketing trở thành cơ hội tăng trưởng đột phá, giúp doanh nghiệp tối ưu chi phí và tối đa hóa lợi nhuận.
                        </p>
</div>
<div class="mt-10 flex gap-4">
<a class="px-8 py-3 bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white font-bold rounded-full hover:bg-primary hover:text-white transition-all duration-300 shadow-sm" href="#">
                            Văn hóa doanh nghiệp
</a> <button type="button"
    onclick="window.location.href='/gioi-thieu/';"
<a class="px-8 py-3 text-primary font-bold hover:text-primary-dark inline-flex items-center transition-colors group" href="#">
                            Xem hồ sơ năng lực <span class="material-icons ml-2 text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>
<section class="py-24 bg-background-light dark:bg-background-dark relative overflow-hidden" id="services">
<div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-white/50 to-transparent pointer-events-none"></div>
<div class="absolute bottom-0 left-0 w-96 h-96 bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
<div class="text-center max-w-3xl mx-auto mb-16">
<h2 class="text-primary font-bold tracking-wide uppercase text-sm mb-3">Dịch vụ của chúng tôi</h2>
<h3 class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-8 py-2" style="line-height: 1.2;">
  GIẢI PHÁP KINH DOANH TMĐT <br/>
  <span class="text-gradient inline-block pt-2 pb-1">TOÀN DIỆN CỦA MEXO GROUP</span>
</h3>
<p class="text-slate-600 dark:text-slate-400 text-lg font-medium">
                    Hệ sinh thái dịch vụ được "may đo" để doanh nghiệp vận hành trơn tru và tăng trưởng bền vững.
                </p>
</div>
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-soft border border-slate-100 dark:border-slate-700 hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-blue-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
<div class="mb-6 relative">
<div class="w-20 h-20 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center text-blue-600 dark:text-blue-400 mb-4 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm">
<span class="material-icons text-4xl">psychology</span>
</div>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-blue-600 transition-colors">Tư vấn chiến lược TMĐT</h4>
<p class="text-slate-600 dark:text-slate-400 mb-6 font-medium leading-relaxed">
                        Xây dựng lộ trình phát triển dài hạn, phân tích thị trường và đối thủ cạnh tranh để đưa ra quyết định chính xác.
                    </p>
<a class="inline-flex items-center text-sm font-bold text-blue-600 dark:text-blue-400 group-hover:underline" href="#">
                        Tìm hiểu thêm <span class="material-icons text-sm ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-soft border border-slate-100 dark:border-slate-700 hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-500 to-orange-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
<div class="mb-6 relative">
<div class="w-20 h-20 bg-orange-50 dark:bg-orange-900/20 rounded-2xl flex items-center justify-center text-orange-600 dark:text-orange-400 mb-4 group-hover:scale-110 group-hover:bg-orange-600 group-hover:text-white transition-all duration-300 shadow-sm">
<span class="material-icons text-4xl">campaign</span>
</div>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-orange-600 transition-colors">Marketing &amp; Quảng cáo</h4>
<p class="text-slate-600 dark:text-slate-400 mb-6 font-medium leading-relaxed">
                        Triển khai các chiến dịch đa kênh, tối ưu chi phí quảng cáo (Ads) và tăng tỷ lệ chuyển đổi (CR) vượt trội.
                    </p>
<a class="inline-flex items-center text-sm font-bold text-orange-600 dark:text-orange-400 group-hover:underline" href="#">
                        Tìm hiểu thêm <span class="material-icons text-sm ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-soft border border-slate-100 dark:border-slate-700 hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-green-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
<div class="mb-6 relative">
<div class="w-20 h-20 bg-green-50 dark:bg-green-900/20 rounded-2xl flex items-center justify-center text-green-600 dark:text-green-400 mb-4 group-hover:scale-110 group-hover:bg-green-600 group-hover:text-white transition-all duration-300 shadow-sm">
<span class="material-icons text-4xl">storefront</span>
</div>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-green-600 transition-colors">Vận hành gian hàng</h4>
<p class="text-slate-600 dark:text-slate-400 mb-6 font-medium leading-relaxed">
                        Quản lý toàn diện các sàn TMĐT (Shopee,TikTok Shop) từ xây dựng đăng sản phẩm đến CSKH và xử lý đơn.
                    </p>
<a class="inline-flex items-center text-sm font-bold text-green-600 dark:text-green-400 group-hover:underline" href="#">
                        Tìm hiểu thêm <span class="material-icons text-sm ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-soft border border-slate-100 dark:border-slate-700 hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-500 to-purple-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
<div class="mb-6 relative">
<div class="w-20 h-20 bg-purple-50 dark:bg-purple-900/20 rounded-2xl flex items-center justify-center text-purple-600 dark:text-purple-400 mb-4 group-hover:scale-110 group-hover:bg-purple-600 group-hover:text-white transition-all duration-300 shadow-sm">
<span class="material-icons text-4xl">design_services</span>
</div>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-purple-600 transition-colors">Thiết kế &amp; Branding</h4>
<p class="text-slate-600 dark:text-slate-400 mb-6 font-medium leading-relaxed">
                        Xây dựng nhận diện thương hiệu chuyên nghiệp, thiết kế trang đích (Landing Page) và hình ảnh sản phẩm thu hút.
                    </p>
<a class="inline-flex items-center text-sm font-bold text-purple-600 dark:text-purple-400 group-hover:underline" href="#">
                        Tìm hiểu thêm <span class="material-icons text-sm ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-soft border border-slate-100 dark:border-slate-700 hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-red-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
<div class="mb-6 relative">
<div class="w-20 h-20 bg-red-50 dark:bg-red-900/20 rounded-2xl flex items-center justify-center text-red-600 dark:text-red-400 mb-4 group-hover:scale-110 group-hover:bg-red-600 group-hover:text-white transition-all duration-300 shadow-sm">
<span class="material-icons text-4xl">school</span>
</div>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-red-600 transition-colors">Đào tạo nhân sự</h4>
<p class="text-slate-600 dark:text-slate-400 mb-6 font-medium leading-relaxed">
                        Các khóa học thực chiến về TMĐT cho đội ngũ in-house, giúp doanh nghiệp tự chủ trong vận hành.
                    </p>
<a class="inline-flex items-center text-sm font-bold text-red-600 dark:text-red-400 group-hover:underline" href="#">
                        Tìm hiểu thêm <span class="material-icons text-sm ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="group relative bg-white dark:bg-slate-800 rounded-3xl p-8 shadow-soft border border-slate-100 dark:border-slate-700 hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-teal-500 to-teal-300 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
<div class="mb-6 relative">
<div class="w-20 h-20 bg-teal-50 dark:bg-teal-900/20 rounded-2xl flex items-center justify-center text-teal-600 dark:text-teal-400 mb-4 group-hover:scale-110 group-hover:bg-teal-600 group-hover:text-white transition-all duration-300 shadow-sm">
<span class="material-icons text-4xl">hub</span>
</div>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-teal-600 transition-colors">Giải pháp công nghệ</h4>
<p class="text-slate-600 dark:text-slate-400 mb-6 font-medium leading-relaxed">
                        Cung cấp các công cụ phần mềm quản lý kho, bán hàng và CRM để tối ưu hóa quy trình.
                    </p>
<a class="inline-flex items-center text-sm font-bold text-teal-600 dark:text-teal-400 group-hover:underline" href="#">
                        Tìm hiểu thêm <span class="material-icons text-sm ml-1 group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
<section class="py-16 bg-gradient-to-r from-primary to-primary-dark relative overflow-hidden shadow-2xl z-20">
<div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-cyan-400/20 rounded-full blur-3xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
<div class="flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
<div class="flex-1">
<h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 leading-tight">
                        Doanh nghiệp bạn cần chiến lược riêng biệt?
                    </h2>
<p class="text-blue-100 text-lg max-w-2xl font-medium leading-relaxed">
                        Đừng áp dụng khuôn mẫu. Hãy để MEXO GROUP phân tích và tư vấn giải pháp "may đo" phù hợp nhất với nguồn lực và mục tiêu của bạn.
                    </p>
</div>
<div class="flex flex-col sm:flex-row gap-4 shrink-0">
<button  type="button" onclick="window.location.href='/lien-he/';" 
class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary text-lg font-bold rounded-full hover:bg-blue-50 transition-all shadow-lg transform hover:-translate-y-1">
                        Đăng ký nhận tư vấn ngay
                    </button>
<button type="button" onclick="window.location.href='/lien-he/';" class="inline-flex items-center justify-center px-8 py-4 border border-white/40 bg-white/5 text-white text-lg font-bold rounded-full hover:bg-white/10 transition-all backdrop-blur-sm">
                        Xem tất cả dịch vụ
                    </button>
</div>
</div>
</div>
</section>
<section class="py-24 bg-white dark:bg-slate-900 relative overflow-hidden" id="why-us">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
<div class="text-center max-w-3xl mx-auto mb-16">
<h2 class="text-primary font-bold tracking-wide uppercase text-sm mb-3">Lý do chọn chúng tôi</h2>
<h3 class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-6 py-2" style="line-height: 1.2;">
  VÌ SAO DOANH NGHIỆP <br/>
  LỰA CHỌN <span class="text-primary inline-block pt-1 pb-1">MEXO GROUP?</span>
</h3>
</div>
<div class="grid lg:grid-cols-3 gap-8">
<div class="bg-background-light dark:bg-slate-800/50 p-8 rounded-3xl text-center group border border-transparent hover:border-primary/20 hover:shadow-card transition-all duration-300">
<div class="w-24 h-24 mx-auto bg-white dark:bg-slate-800 rounded-full flex items-center justify-center mb-8 shadow-soft border border-slate-100 dark:border-slate-700 group-hover:scale-110 transition-transform duration-300 group-hover:border-primary/30">
<span class="material-icons text-5xl text-primary group-hover:animate-pulse-slow">psychology</span>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Tư duy chiến lược chuyên sâu</h4>
<p class="text-slate-600 dark:text-slate-400 font-medium leading-relaxed">
                        Chúng tôi không áp dụng rập khuôn. Mỗi doanh nghiệp đều có một chiến lược "may đo" riêng biệt để phù hợp với nguồn lực và mục tiêu.
                    </p>
</div>
<div class="bg-background-light dark:bg-slate-800/50 p-8 rounded-3xl text-center group border border-transparent hover:border-primary/20 hover:shadow-card transition-all duration-300 relative transform lg:-translate-y-4">
<div class="absolute inset-0 bg-primary/5 rounded-3xl pointer-events-none border border-primary/10"></div>
<div class="relative z-10">
<div class="w-24 h-24 mx-auto bg-primary rounded-full flex items-center justify-center mb-8 shadow-lg shadow-primary/30 group-hover:scale-110 transition-transform duration-300">
<span class="material-icons text-5xl text-white group-hover:animate-pulse-slow">trending_up</span>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Cam kết hiệu quả bằng số liệu</h4>
<p class="text-slate-600 dark:text-slate-400 font-medium leading-relaxed">
                            Mọi hoạt động đều minh bạch và hướng tới kết quả cuối cùng: Doanh số, Lợi nhuận và Thị phần. Báo cáo định kỳ rõ ràng.
                        </p>
</div>
</div>
<div class="bg-background-light dark:bg-slate-800/50 p-8 rounded-3xl text-center group border border-transparent hover:border-primary/20 hover:shadow-card transition-all duration-300">
<div class="w-24 h-24 mx-auto bg-white dark:bg-slate-800 rounded-full flex items-center justify-center mb-8 shadow-soft border border-slate-100 dark:border-slate-700 group-hover:scale-110 transition-transform duration-300 group-hover:border-primary/30">
<span class="material-icons text-5xl text-primary group-hover:animate-pulse-slow">groups</span>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-4">Đội ngũ chuyên gia thực chiến</h4>
<p class="text-slate-600 dark:text-slate-400 font-medium leading-relaxed">
                        Nhân sự của MEXO GROUP là những chuyên gia đã từng chinh chiến tại các sàn TMĐT lớn và các tập đoàn bán lẻ hàng đầu.
                    </p>
</div>
</div>
<div class="mexo-growth-partnership mt-16 relative max-w-6xl mx-auto">
<div class="absolute -inset-6 bg-gradient-to-br from-primary/10 via-cyan-400/10 to-cta-orange/10 rounded-[2rem] blur-2xl pointer-events-none"></div>
<div class="relative grid lg:grid-cols-[0.82fr_1.18fr] gap-0 overflow-hidden rounded-[2rem] bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-2xl">
<div class="p-7 md:p-10 lg:p-12 flex flex-col justify-center bg-slate-950 text-white">
<p class="text-sm font-extrabold uppercase tracking-[0.22em] text-cyan-300 mb-4">Hợp tác cùng phát triển</p>
<h4 class="text-3xl md:text-4xl font-extrabold leading-tight mb-5">Đồng hành thực chiến cùng đối tác tăng trưởng TMĐT</h4>
<p class="text-slate-300 font-medium leading-relaxed mb-7">MEXO GROUP xây dựng quan hệ hợp tác dựa trên hiệu quả thật: cùng phân tích thị trường, tối ưu vận hành và mở rộng doanh thu bền vững.</p>
<div class="grid grid-cols-2 gap-3">
<div class="rounded-2xl border border-white/10 bg-white/10 p-4">
<div class="text-2xl font-black text-white">500+</div>
<div class="text-xs font-bold uppercase tracking-wide text-slate-300 mt-1">Đối tác đồng hành</div>
</div>
<div class="rounded-2xl border border-white/10 bg-white/10 p-4">
<div class="text-2xl font-black text-white">7+ năm</div>
<div class="text-xs font-bold uppercase tracking-wide text-slate-300 mt-1">Kinh nghiệm TMĐT</div>
</div>
</div>
</div>
<div class="relative min-h-[360px] lg:min-h-[520px] bg-slate-100 dark:bg-slate-800">
<img class="mexo-growth-partnership-image absolute inset-0 w-full h-full object-cover" data-alt="Đội ngũ MEXO GROUP và đối tác trong buổi hợp tác phát triển" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hop-tac-cung-phat-trien.jpg' ); ?>"/>
<div class="absolute inset-x-0 bottom-0 p-5 md:p-7 bg-gradient-to-t from-slate-950/86 via-slate-950/30 to-transparent">
<div class="inline-flex items-center gap-2 rounded-full bg-white/95 text-slate-900 px-4 py-2 shadow-lg">
<span class="material-icons text-primary text-lg">verified</span>
<span class="text-sm font-extrabold">Tin cậy - thực chiến - tăng trưởng</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="py-24 bg-background-light dark:bg-background-dark relative overflow-hidden" id="testimonials">
<div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
<div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
<div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-400/5 rounded-full blur-3xl"></div>
</div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
<div class="text-center max-w-3xl mx-auto mb-16">
<h2 class="text-primary font-bold tracking-wide uppercase text-sm mb-3">Câu chuyện thành công</h2>
<h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">
                    KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI?
                </h3>
<p class="text-slate-600 dark:text-slate-400 text-lg font-medium">
                    Những kết quả thực tế và đánh giá chân thực từ các đối tác doanh nghiệp đã đồng hành cùng MEXO GROUP.
                </p>
</div>
<div class="grid md:grid-cols-3 gap-8">
<div class="group flex flex-col bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-100 dark:border-slate-700 hover:border-primary/30 dark:hover:border-primary/30 hover:shadow-card transition-all duration-300 relative">
<div class="flex items-center justify-between mb-6">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm shadow-md">
                                EF
                            </div>
<div>
<div class="font-bold text-slate-900 dark:text-white leading-tight">Eva Fashion</div>
<div class="text-xs text-slate-500 font-medium">Thời trang nữ</div>
</div>
</div>
<span class="material-icons text-5xl text-slate-100 dark:text-slate-700 absolute top-6 right-6 opacity-50 group-hover:opacity-100 transition-opacity">format_quote</span>
</div>
<div class="mb-6 relative z-10">
<span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold mb-4">
<span class="material-icons text-xs mr-1">trending_up</span> Tăng 250% Doanh thu
                        </span>
<p class="text-slate-600 dark:text-slate-300 italic text-base leading-relaxed font-medium">
                            "Giải pháp Livestream và chiến lược giá của MEXO giúp chúng tôi tiếp cận hàng ngàn khách hàng mới mỗi phiên live. Doanh số tháng này đã vượt KPI cả quý."
                        </p>
</div>
<div class="mt-auto pt-6 border-t border-slate-200 dark:border-slate-700/50 flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center overflow-hidden border-2 border-white dark:border-slate-600">
<span class="material-icons text-slate-400">person</span>
</div>
<div>
<div class="font-bold text-sm text-slate-900 dark:text-white">Ms. Thu Hà</div>
<div class="text-xs text-slate-500 font-semibold">Founder</div>
</div>
<div class="ml-auto flex gap-0.5">
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
</div>
</div>
</div>
<div class="group flex flex-col bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-100 dark:border-slate-700 hover:border-primary/30 dark:hover:border-primary/30 hover:shadow-card transition-all duration-300 relative">
<div class="flex items-center justify-between mb-6">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-xl bg-cta-orange text-white flex items-center justify-center font-bold text-sm shadow-md">
                                HD
                            </div>
<div>
<div class="font-bold text-slate-900 dark:text-white leading-tight">HomeDecor VN</div>
<div class="text-xs text-slate-500 font-medium">Nhà cửa &amp; Đời sống</div>
</div>
</div>
<span class="material-icons text-5xl text-slate-100 dark:text-slate-700 absolute top-6 right-6 opacity-50 group-hover:opacity-100 transition-opacity">format_quote</span>
</div>
<div class="mb-6 relative z-10">
<span class="inline-flex items-center px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-xs font-bold mb-4">
<span class="material-icons text-xs mr-1">inventory_2</span> Giảm 80% Hoàn hàng
                        </span>
<p class="text-slate-600 dark:text-slate-300 italic text-base leading-relaxed font-medium">
                            "Hệ thống quản lý kho vận chuyên nghiệp giúp giảm tỷ lệ hoàn hàng xuống mức thấp kỷ lục. Khách hàng rất hài lòng về tốc độ giao hàng."
                        </p>
</div>
<div class="mt-auto pt-6 border-t border-slate-200 dark:border-slate-700/50 flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center overflow-hidden border-2 border-white dark:border-slate-600">
<span class="material-icons text-slate-400">person</span>
</div>
<div>
<div class="font-bold text-sm text-slate-900 dark:text-white">Mr. Tuấn Anh</div>
<div class="text-xs text-slate-500 font-semibold">Giám đốc Vận hành</div>
</div>
<div class="ml-auto flex gap-0.5">
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
</div>
</div>
</div>
<div class="group flex flex-col bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-100 dark:border-slate-700 hover:border-primary/30 dark:hover:border-primary/30 hover:shadow-card transition-all duration-300 relative">
<div class="flex items-center justify-between mb-6">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center font-bold text-sm shadow-md">
                                TL
                            </div>
<div>
<div class="font-bold text-slate-900 dark:text-white leading-tight">TechLife Store</div>
<div class="text-xs text-slate-500 font-medium">Thiết bị điện tử</div>
</div>
</div>
<span class="material-icons text-5xl text-slate-100 dark:text-slate-700 absolute top-6 right-6 opacity-50 group-hover:opacity-100 transition-opacity">format_quote</span>
</div>
<div class="mb-6 relative z-10">
<span class="inline-flex items-center px-3 py-1 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-400 text-xs font-bold mb-4">
<span class="material-icons text-xs mr-1">ads_click</span> ROI Ads 1:15
                        </span>
<p class="text-slate-600 dark:text-slate-300 italic text-base leading-relaxed font-medium">
                            "Chi phí quảng cáo giảm 40% nhưng hiệu quả đơn hàng tăng gấp đôi nhờ tối ưu đúng đối tượng mục tiêu. Một đối tác thực sự am hiểu thị trường."
                        </p>
</div>
<div class="mt-auto pt-6 border-t border-slate-200 dark:border-slate-700/50 flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center overflow-hidden border-2 border-white dark:border-slate-600">
<span class="material-icons text-slate-400">person</span>
</div>
<div>
<div class="font-bold text-sm text-slate-900 dark:text-white">Mr. Hoàng Long</div>
<div class="text-xs text-slate-500 font-semibold">Marketing Manager</div>
</div>
<div class="ml-auto flex gap-0.5">
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star</span>
<span class="material-icons text-yellow-400 text-sm">star_half</span>
</div>
</div>
</div>
</div>
<div class="mt-12 text-center">
<a class="inline-flex items-center justify-center px-8 py-3 border border-slate-300 dark:border-slate-600 shadow-sm text-base font-bold rounded-full text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all hover:-translate-y-1" href="#">
                    Xem thêm các Case Study khác
                    <span class="material-icons ml-2 text-sm">arrow_forward</span>
</a>
</div>
</div>
</section>
<section class="py-20 bg-white dark:bg-slate-900 border-y border-slate-100 dark:border-slate-800">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-12">
<h2 class="text-primary font-bold tracking-wide uppercase text-sm mb-3">Mạng lưới kết nối</h2>
<h3 class="text-3xl font-extrabold text-slate-900 dark:text-white">
                    ĐỐI TÁC CỦA CHÚNG TÔI
                </h3>
</div>
<div class="flex flex-wrap justify-center items-center gap-6 md:gap-10">
<div class="px-8 py-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-primary/20 transition-all duration-300 cursor-pointer">
<span class="font-bold text-2xl text-orange-500">Shopee</span>
</div>
<div class="px-8 py-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-primary/20 transition-all duration-300 cursor-pointer">
<span class="font-bold text-2xl text-blue-900 dark:text-blue-300">Lazada</span>
</div>
<div class="px-8 py-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-primary/20 transition-all duration-300 cursor-pointer">
<span class="font-bold text-2xl text-black dark:text-white">TikTok <span class="text-teal-400">Shop</span></span>
</div>
<div class="px-8 py-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-primary/20 transition-all duration-300 cursor-pointer">
<span class="font-bold text-2xl text-green-600">GrabExpress</span>
</div>
<div class="px-8 py-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-primary/20 transition-all duration-300 cursor-pointer">
<span class="font-bold text-2xl text-red-600">J&amp;T Express</span>
</div>
<div class="px-8 py-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-primary/20 transition-all duration-300 cursor-pointer">
<span class="font-bold text-2xl text-blue-600">Meta</span>
</div>
<div class="px-8 py-5 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-lg hover:border-primary/20 transition-all duration-300 cursor-pointer">
<span class="font-bold text-2xl text-slate-700 dark:text-slate-200">Taobao</span>
</div>
</div>
</div>
</section>
<section class="py-24 bg-background-light dark:bg-background-dark" id="blog">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-3xl mx-auto mb-16">
<h2 class="text-primary font-bold tracking-wide uppercase text-sm mb-3">Góc nhìn chuyên gia</h2>
<h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">
                    KIẾN THỨC &amp; TIN TỨC
                </h3>
<p class="text-slate-600 dark:text-slate-400 text-lg font-medium">
                    Cập nhật xu hướng thị trường, chiến lược kinh doanh và những bài học thực chiến từ đội ngũ chuyên gia của MEXO GROUP.
                </p>
</div>
<div class="grid md:grid-cols-3 gap-8">
<?php
                $homepage_posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'ignore_sticky_posts' => 1
                ));

                if ($homepage_posts->have_posts()) :
                    while ($homepage_posts->have_posts()) : $homepage_posts->the_post();
                        // Get the first category
                        $categories = get_the_category();
                        $category_name = !empty($categories) ? $categories[0]->name : 'Tin tức';
                        
                        // Calculate reading time
                        $content = get_post_field('post_content', $post->ID);
                        $word_count = str_word_count(strip_tags($content));
                        $reading_time = ceil($word_count / 250);
                ?>
<article class="flex flex-col bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-700 hover:shadow-2xl hover:border-primary/30 transition-all duration-300 group hover:-translate-y-1">
<div class="relative h-56 overflow-hidden">
    <?php if (has_post_thumbnail()) : ?>
        <img alt="<?php the_title(); ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" src="<?php the_post_thumbnail_url('large'); ?>">
    <?php else : ?>
        <img alt="<?php the_title(); ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" src="https://via.placeholder.com/600x400?text=MEXO+Group">
    <?php endif; ?>
<div class="absolute top-4 left-4 bg-primary/90 backdrop-blur-md text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow-sm">
                            <?php echo esc_html($category_name); ?>
                        </div>
</div>
<div class="p-6 flex-1 flex flex-col">
<div class="flex items-center gap-4 text-xs font-semibold text-slate-400 dark:text-slate-500 mb-3 uppercase tracking-wide">
<span class="flex items-center"><span class="material-icons text-sm mr-1">calendar_today</span> <?php echo get_the_date('d.m.Y'); ?></span>
<span class="flex items-center"><span class="material-icons text-sm mr-1">schedule</span> <?php echo $reading_time; ?> phút đọc</span>
</div>
<h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3 line-clamp-2 group-hover:text-primary transition-colors">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
<p class="text-slate-600 dark:text-slate-400 mb-6 line-clamp-3 text-sm flex-1 leading-relaxed font-medium">
                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                        </p>
<a class="inline-flex items-center text-primary font-bold hover:text-primary-dark transition-colors mt-auto text-sm uppercase tracking-wide" href="<?php the_permalink(); ?>">
                            Đọc tiếp <span class="material-icons ml-1 text-base group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
</article>
<?php 
                    endwhile;
                    wp_reset_postdata();
                endif; 
?>
</div>
</div>
</section>
<?php echo mexo_render_faq_accordion( 'Câu hỏi thường gặp về giải pháp TMĐT', mexo_default_faq_items() ); ?>
<section class="py-24 bg-gradient-to-br from-primary to-primary-dark relative overflow-hidden">
<div class="absolute inset-0 opacity-10">
<svg class="h-full w-full" preserveAspectRatio="none" viewBox="0 0 100 100">
<path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
<path d="M0 0 L100 0 L100 100 Z" fill="rgba(255,255,255,0.05)"></path>
</svg>
</div>
<div class="absolute inset-0 bg-pattern opacity-10"></div>
<div class="max-w-4xl mx-auto px-4 text-center relative z-10">
<h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">Bạn đã sẵn sàng bùng nổ doanh số?</h2>
<p class="text-blue-100 text-lg md:text-xl mb-12 max-w-2xl mx-auto font-medium leading-relaxed">
                Đừng để đối thủ bỏ xa bạn. Hãy để MEXO GROUP giúp bạn xây dựng đế chế thương mại điện tử ngay hôm nay.
            </p>
<div class="flex flex-col sm:flex-row justify-center gap-5">
	
	
<button type="button"
    onclick="window.location.href='/lien-he/';" class="px-10 py-4 bg-white text-primary font-bold rounded-full shadow-2xl hover:bg-slate-50 transition-all transform hover:-translate-y-1 hover:scale-105 text-lg flex items-center justify-center">
                    Nhận tư vấn chiến lược <span class="material-icons ml-2">trending_up</span>
</button>
<button type="button"
    onclick="window.location.href='/lien-he/';" class="px-10 py-4 bg-transparent border-2 border-white/30 text-white font-bold rounded-full hover:bg-white/10 hover:border-white transition-all text-lg backdrop-blur-sm">
                    Liên hệ ngay
                </button>
</div>
</div>
</section>

<?php get_footer(); ?>

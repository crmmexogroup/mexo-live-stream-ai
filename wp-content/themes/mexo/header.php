<!DOCTYPE html>
<html <?php language_attributes(); ?> class="light">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script id="mexo-theme-init">
(function () {
    try {
        var savedTheme = localStorage.getItem('mexo-theme');
        var systemDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        var theme = savedTheme || (systemDark ? 'dark' : 'light');
        document.documentElement.classList.remove('light', 'dark');
        document.documentElement.classList.add(theme);
        document.documentElement.style.colorScheme = theme;
    } catch (error) {
        document.documentElement.classList.add('light');
        document.documentElement.style.colorScheme = 'light';
    }
})();
</script>
<?php wp_head(); ?>
<style id="mexo-dark-mode-polish">
    .mexo-site-header {
        background: rgba(255, 255, 255, 0.9) !important;
        border-color: rgba(226, 232, 240, 0.9) !important;
    }

    html.dark .mexo-site-header {
        background: rgba(15, 23, 42, 0.96) !important;
        border-color: rgba(51, 65, 85, 0.95) !important;
    }

    html.dark .mexo-site-header a,
    html.dark .mexo-site-header button:not(.mexo-theme-toggle):not(#mobile-menu-btn) {
        color: #e5e7eb !important;
    }

    html.dark .mexo-site-header a:hover,
    html.dark .mexo-site-header button:not(.mexo-theme-toggle):not(#mobile-menu-btn):hover {
        color: #60a5fa !important;
    }

    html.dark img.custom-logo,
    html.dark .mexo-site-header img[alt] {
        filter: brightness(0) invert(1);
    }

    .mexo-theme-toggle {
        width: 30px;
        height: 30px;
        align-items: center;
        justify-content: center;
        border-radius: 9999px;
        border: 1px solid rgba(203, 213, 225, 0.85);
        background: rgba(248, 250, 252, 0.9);
        color: #475569;
        box-shadow: 0 4px 14px rgba(15, 23, 42, 0.08);
        transition: background-color .2s ease, color .2s ease, border-color .2s ease, transform .2s ease, box-shadow .2s ease;
    }

    .mexo-theme-toggle:hover {
        color: #0057ff;
        border-color: rgba(0, 87, 255, 0.35);
        box-shadow: 0 8px 22px rgba(0, 87, 255, 0.12);
        transform: translateY(-1px);
    }

    html.dark .mexo-theme-toggle {
        background: rgba(30, 41, 59, 0.95);
        border-color: rgba(71, 85, 105, 0.95);
        color: #fbbf24;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.22);
    }

    html.dark .mexo-theme-toggle:hover {
        color: #fde68a;
        border-color: rgba(251, 191, 36, 0.45);
    }

    .mexo-theme-icon {
        display: none !important;
        font-size: 16px !important;
        line-height: 1 !important;
    }

    html:not(.dark) .mexo-theme-moon,
    html.dark .mexo-theme-sun {
        display: inline-flex !important;
    }

    .mexo-mobile-theme-toggle {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        padding: 0.75rem 1rem;
        border-radius: 0.75rem;
        color: #0f172a;
        font-size: 1rem;
        font-weight: 700;
        transition: background-color .2s ease, color .2s ease;
    }

    .mexo-mobile-theme-toggle:hover {
        background: #f8fafc;
    }

    html.dark .mexo-mobile-theme-toggle {
        color: #fff;
    }

    html.dark .mexo-mobile-theme-toggle:hover {
        background: #1e293b;
    }

    .mexo-mobile-theme-icon {
        display: inline-flex;
        width: 28px;
        height: 28px;
        align-items: center;
        justify-content: center;
        border-radius: 9999px;
        border: 1px solid rgba(203, 213, 225, 0.85);
        color: #475569;
        background: #fff;
    }

    html.dark .mexo-mobile-theme-icon {
        color: #fbbf24;
        background: #1e293b;
        border-color: #475569;
    }

    .mexo-back-to-top {
        position: fixed;
        right: 1rem;
        bottom: 6.25rem;
        z-index: 60;
        width: 44px;
        height: 44px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 9999px;
        color: #fff;
        background: linear-gradient(135deg, #0057ff, #00b8d9);
        box-shadow: 0 18px 42px rgba(0, 87, 255, 0.28);
        opacity: 0;
        pointer-events: none;
        transform: translateY(12px);
        transition: opacity .22s ease, transform .22s ease, box-shadow .22s ease;
    }

    .mexo-back-to-top.is-visible {
        opacity: 1;
        pointer-events: auto;
        transform: translateY(0);
    }

    .mexo-back-to-top:hover {
        box-shadow: 0 22px 52px rgba(0, 87, 255, 0.36);
        transform: translateY(-2px);
    }

    @media (min-width: 768px) {
        .mexo-back-to-top {
            right: 1.5rem;
            bottom: 1.5rem;
        }
    }

    @media (max-width: 767px) {
        .mexo-site-header {
            position: sticky;
        }

        .mexo-header-inner {
            position: relative;
        }

        .mexo-site-header > div,
        .mexo-header-inner {
            max-width: 100vw !important;
            width: 100% !important;
            overflow: hidden;
        }

        .mexo-header-actions {
            position: fixed !important;
            right: auto !important;
            left: calc(100vw - 6.5rem) !important;
            top: .95rem !important;
            transform: none !important;
            width: 5.25rem !important;
            display: flex !important;
            justify-content: flex-end !important;
            flex-shrink: 0 !important;
            margin-left: auto !important;
            z-index: 70 !important;
            gap: .5rem !important;
        }

        .mexo-header-actions > a {
            display: none !important;
        }

        .mexo-site-header img[alt] {
            max-width: 150px;
            height: auto !important;
        }
    }
</style>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">
</head>
<body <?php body_class("bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-100 font-display transition-colors duration-300 selection:bg-cta-orange selection:text-white"); ?>>
<nav class="mexo-site-header sticky top-0 w-full bg-white/80 dark:bg-background-dark/90 backdrop-blur-md border-b border-gray-100 dark:border-slate-800 z-50 transition-colors duration-300">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="mexo-header-inner flex justify-between items-center h-16 md:h-20">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mexo-header-logo flex-shrink-0 flex items-center cursor-pointer group">
    <?php 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo_url = 'https://mexo.vn/wp-content/uploads/logo-1.png'; // Default
    
    if ( $custom_logo_id ) {
        $logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( $logo_data ) {
            $logo_url = $logo_data[0];
        }
    }
    ?>
    <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="h-8 md:h-12 w-auto transition-all duration-300 dark:brightness-0 dark:invert">
</a>
<div class="hidden lg:flex items-center space-x-8">
<a class="text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary font-semibold transition-colors relative" href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a>
<a class="text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary font-semibold transition-colors" href="/gioi-thieu">Giới thiệu</a>
<div class="relative group">
<button class="text-slate-700 dark:text-slate-200 group-hover:text-primary dark:hover:text-primary font-semibold transition-colors flex items-center gap-1 focus:outline-none">
                            Giải pháp
                            <span class="material-icons text-2xl transition-transform duration-300 group-hover:rotate-180">expand_more</span>
</button>
<div class="absolute left-0 mt-2 w-[800px] bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 p-6 z-50 grid grid-cols-3 gap-6">
<div>
<div class="flex items-center gap-2 mb-3 pb-2 border-b border-slate-100 dark:border-slate-700">
<span class="text-orange-500 font-bold text-lg">Shopee</span>
</div>
<ul class="space-y-2">
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="/dich-vu-van-hanh-shopee">Vận Hành Shopee</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="/xay-dung-shop-shopee">Xây Shop Shopee</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="/livestream-auto-24-7/">Livestream Auto 24/7</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="/len-mall-shopee/">Lên Mall Shopee</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="/trang-tri-gian-hang/">Trang Trí &amp; Tối Ưu Shop</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="/dich-vu-tang-follow">Tăng Follow &amp; Kháng Vi Phạm</a></li>
</ul>
</div>
<div>
<div class="flex items-center gap-2 mb-3 pb-2 border-b border-slate-100 dark:border-slate-700">
<span class="text-black dark:text-white font-bold text-lg">TikTok</span>
</div>
<ul class="space-y-2">
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="#">Vận Hành TikTok Shop</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="#">Xây Dựng TikTok Shop</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="#">Livestream Auto 24/7</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="#">Booking KOL</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="#">Tăng Follow &amp; Kháng Vi Phạm</a></li>
</ul>
</div>
<div>
<div class="flex items-center gap-2 mb-3 pb-2 border-b border-slate-100 dark:border-slate-700">
<span class="text-blue-600 font-bold text-lg">Mexo AI</span>
</div>
<ul class="space-y-2">
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="#">Media AI</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="#">Booking KOL</a></li>
<li><a class="block text-sm text-slate-600 dark:text-slate-300 hover:text-primary hover:translate-x-1 transition-all" href="#">Công Cụ &amp; Phần Mềm Hỗ Trợ</a></li>
</ul>
</div>
</div>
</div>
<div class="relative group">
<button class="text-slate-700 dark:text-slate-200 group-hover:text-primary dark:hover:text-primary font-semibold transition-colors flex items-center gap-1 focus:outline-none">
                            Đào tạo
                            <span class="material-icons text-2xl transition-transform duration-300 group-hover:rotate-180">expand_more</span>
</button>
<div class="absolute left-0 mt-2 w-56 bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 p-3 z-50">
<a class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-all" href="/dao-tao-shopee">Đào Tạo Shopee</a>
<a class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-all" href="#">Đào Tạo TikTok</a>
<a class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-primary hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-all" href="#">Đào Tạo AI</a>
</div>
</div>
<a class="text-slate-700 dark:text-slate-200 hover:text-primary dark:hover:text-primary font-semibold transition-colors" href="blog">Blog</a>
</div>
<div class="mexo-header-actions flex items-center gap-2 md:gap-4">
<button id="theme-toggle" type="button" aria-label="Đổi chế độ sáng tối" class="mexo-theme-toggle inline-flex">
    <span class="material-icons mexo-theme-icon mexo-theme-moon">dark_mode</span>
    <span class="material-icons mexo-theme-icon mexo-theme-sun">light_mode</span>
</button>
<a href="/lien-he/" class="hidden md:inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-sm font-bold rounded-full text-white bg-cta-orange hover:bg-cta-orange/90 hover:shadow-lg hover:shadow-cta-orange/30 transition-all transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cta-orange">
                        Đăng ký tư vấn
                    </a>
    <button id="mobile-menu-btn" class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 focus:outline-none" type="button">
        <span class="material-icons">menu</span>
    </button>
</div>
</div>
</div>

<!-- Mobile Menu Dropdown -->
<div id="mobile-menu" class="absolute top-full left-0 w-full bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-slate-800 shadow-xl lg:hidden hidden overflow-y-auto max-h-[80vh]">
    <div class="flex flex-col py-4">
        <div class="space-y-1 px-4">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block px-4 py-3 text-lg font-bold text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">Trang chủ</a>
            <a href="/gioi-thieu" class="block px-4 py-3 text-lg font-bold text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">Giới thiệu</a>
            
            <!-- Mobile Solutions Accordion -->
            <div class="space-y-1">
                <div class="w-full flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">
                    <a href="/giai-phap" class="flex-grow px-4 py-3 text-lg font-bold text-slate-900 dark:text-white">Giải pháp</a>
                    <button id="mobile-solutions-toggle" class="px-5 py-4 group">
                        <span class="material-icons text-slate-400 transition-transform duration-200 group-aria-expanded:rotate-180">expand_more</span>
                    </button>
                </div>
                <div id="mobile-solutions-content" class="hidden px-4 space-y-1 bg-slate-50/50 dark:bg-slate-800/50 rounded-xl mx-2">
                    <div class="py-2">
                        <span class="text-xs font-bold text-orange-500 uppercase tracking-wider block px-4 mb-2">Shopee</span>
                        <a href="/dich-vu-van-hanh-shopee" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Vận Hành Shopee</a>
                        <a href="/xay-dung-shop-shopee" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Xây Shop Shopee</a>
                        <a href="/len-mall-shopee/" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Lên Mall Shopee</a>
                        <a href="/livestream-auto-24-7" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Livestream Auto 24/7</a>
                        <a href="/trang-tri-gian-hang" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Trang Trí &amp; Tối Ưu Shop</a>
						<a href="/dich-vu-tang-follow" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Tăng Follow &amp; Kháng Vi Phạm</a>
                    </div>
                     <div class="py-2 border-t border-slate-200 dark:border-slate-700">
                        <span class="text-xs font-bold text-black dark:text-white uppercase tracking-wider block px-4 mb-2 mt-2">TikTok</span>
                        <a href="#" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Vận Hành TikTok Shop</a>
                        <a href="#" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Xây Dựng TikTok Shop</a>
						<a href="#" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Booking KOL</a>
						<a href="/dich-vu-tang-follow" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Tăng Follow &amp; Kháng Vi Phạm</a>
                    </div>
					                     <div class="py-2 border-t border-slate-200 dark:border-slate-700">
                        <span class="text-xs font-bold text-blue-500 uppercase tracking-wider block px-4 mb-2">Mexo AI</span>
                        <a href="#" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Media AI</a>
                        <a href="#" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Booking KOL</a>
                </div> 
            </div> 

             <!-- Mobile Training Accordion -->
            <div class="space-y-1">
                <button id="mobile-training-toggle" class="w-full flex items-center justify-between px-5 py-4 text-lg font-bold text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors group">
                    <span>Đào tạo</span>
                    <span class="material-icons text-slate-400 transition-transform duration-200 group-aria-expanded:rotate-180">expand_more</span>
                </button>
                <div id="mobile-training-content" class="hidden px-4 space-y-1 bg-slate-50/50 dark:bg-slate-800/50 rounded-xl mx-2 pb-2">
                    <a href="https://mexo.vn/dao-tao-shopee/" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Đào tạo Shopee</a>
                    <a href="#" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Đào tạo TikTok</a>
                    <a href="#" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Đào tạo AI</a>
                </div>
            </div>

            <a href="/blog" class="block px-4 py-3 text-lg font-bold text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">Blog</a>
        </div>
        <div class="p-4 mt-2 border-t border-slate-100 dark:border-slate-800">
            <a href="/lien-he/" class="flex items-center justify-center w-full px-6 py-3.5 text-base font-bold rounded-full text-white bg-cta-orange hover:bg-cta-orange/90 transition-all shadow-lg shadow-cta-orange/20">
                Đăng ký tư vấn
            </a>
        </div>
    </div>
</div>
</nav>
<button id="mexo-back-to-top" type="button" class="mexo-back-to-top" aria-label="Quay lên đầu trang">
    <span class="material-icons text-xl">keyboard_arrow_up</span>
</button>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const headerActions = document.querySelector('.mexo-header-actions');

    function alignMobileHeaderActions() {
        if(!headerActions) return;

        if(window.matchMedia('(max-width: 767px)').matches) {
            const viewportCandidates = [
                window.visualViewport && window.visualViewport.width,
                window.innerWidth,
                document.documentElement && document.documentElement.clientWidth
            ].filter(Boolean);
            const viewportWidth = Math.min.apply(Math, viewportCandidates);
            const actionWidth = headerActions.offsetWidth || 84;
            headerActions.style.left = Math.max(12, viewportWidth - actionWidth - 16) + 'px';
            headerActions.style.right = 'auto';
        } else {
            headerActions.style.left = '';
            headerActions.style.right = '';
        }
    }

    alignMobileHeaderActions();
    window.addEventListener('resize', alignMobileHeaderActions);
    window.addEventListener('orientationchange', alignMobileHeaderActions);
    if(window.visualViewport) {
        window.visualViewport.addEventListener('resize', alignMobileHeaderActions);
    }

    function toggleMenu() {
        if(!mobileMenu) return;
        const isHidden = mobileMenu.classList.contains('hidden');
        if (isHidden) {
            mobileMenu.classList.remove('hidden');
            // Optional: Add basic animation class logic here if needed
        } else {
            mobileMenu.classList.add('hidden');
        }
    }

    if(mobileBtn) mobileBtn.addEventListener('click', toggleMenu);

    // Accordion Logic
    function setupAccordion(toggleId, contentId) {
        const toggle = document.getElementById(toggleId);
        const content = document.getElementById(contentId);
        if(!toggle || !content) return;

        toggle.addEventListener('click', function() {
            const isHidden = content.classList.contains('hidden');
            if(isHidden) {
                content.classList.remove('hidden');
                toggle.querySelector('.material-icons').classList.add('rotate-180');
                toggle.setAttribute('aria-expanded', 'true');
            } else {
                content.classList.add('hidden');
                 toggle.querySelector('.material-icons').classList.remove('rotate-180');
                 toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    setupAccordion('mobile-solutions-toggle', 'mobile-solutions-content');
    setupAccordion('mobile-training-toggle', 'mobile-training-content');
    // Light/Dark mode toggle
    const themeButtons = [document.getElementById('theme-toggle'), document.getElementById('mobile-theme-toggle')].filter(Boolean);

    function setTheme(theme) {
        document.documentElement.classList.remove('light', 'dark');
        document.documentElement.classList.add(theme);
        document.documentElement.style.colorScheme = theme;
        try {
            localStorage.setItem('mexo-theme', theme);
        } catch (error) {}
    }

    themeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const nextTheme = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
            setTheme(nextTheme);
        });
    });

    const backToTop = document.getElementById('mexo-back-to-top');
    if(backToTop) {
        const toggleBackToTop = function() {
            backToTop.classList.toggle('is-visible', window.scrollY > 420);
        };
        toggleBackToTop();
        window.addEventListener('scroll', toggleBackToTop, { passive: true });
        backToTop.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
</script>

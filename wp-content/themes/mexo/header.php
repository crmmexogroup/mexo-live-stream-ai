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

    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    img,
    video,
    iframe {
        max-width: 100%;
    }

    img:not([class*="h-"]):not([height]) {
        height: auto;
    }

    .mexo-site-header img[alt] {
        aspect-ratio: 240 / 64;
        object-fit: contain;
    }

    html.dark body {
        background: #071225 !important;
        color: #e5efff !important;
    }

    html.dark main,
    html.dark section {
        background-color: #071225 !important;
    }

    html.dark main,
    html.dark section[class*="dark:bg-background-dark"],
    html.dark section[class*="dark:bg-slate-950"],
    html.dark section[class*="dark:bg-slate-900"],
    html.dark section[class*="dark:bg-gray-950"],
    html.dark section[class*="dark:bg-gray-900"],
    html.dark div[class*="dark:bg-background-dark"] {
        background-color: #071225 !important;
    }

    html.dark section[class*="dark:bg-slate-900/50"],
    html.dark div[class*="dark:bg-slate-900/50"],
    html.dark div[class*="dark:bg-gray-900/50"] {
        background-color: rgba(7, 18, 37, 0.92) !important;
    }

    html.dark [class*="dark:bg-slate-800"],
    html.dark [class*="dark:bg-gray-800"],
    html.dark [class*="dark:bg-card-dark"],
    html.dark [class*="dark:bg-[#151c2a]"],
    html.dark [class*="dark:bg-[#1e2736]"] {
        background-color: #0f1b33 !important;
    }

    html.dark [class*="dark:bg-slate-800/50"],
    html.dark [class*="dark:bg-gray-800/50"],
    html.dark [class*="dark:bg-card-dark/50"] {
        background-color: rgba(15, 27, 51, 0.78) !important;
    }

    html.dark [class*="dark:border-slate-800"],
    html.dark [class*="dark:border-slate-700"],
    html.dark [class*="dark:border-gray-700"],
    html.dark [class*="dark:border-gray-600"] {
        border-color: rgba(96, 165, 250, 0.22) !important;
    }

    html.dark [class*="dark:text-white"],
    html.dark h1,
    html.dark h2,
    html.dark h3,
    html.dark h4 {
        color: #f8fafc !important;
    }

    html.dark [class*="dark:text-slate-200"],
    html.dark [class*="dark:text-gray-200"] {
        color: #e5efff !important;
    }

    html.dark [class*="dark:text-slate-300"],
    html.dark [class*="dark:text-slate-400"],
    html.dark [class*="dark:text-gray-300"],
    html.dark [class*="dark:text-gray-400"] {
        color: #dbeafe !important;
    }

    html.dark [class*="text-primary"],
    html.dark [class*="text-blue-600"],
    html.dark [class*="text-blue-700"],
    html.dark [class*="text-indigo-600"],
    html.dark [class*="text-text-sub"] {
        color: #93c5fd !important;
    }

    html.dark [class*="border-primary"],
    html.dark [class*="border-blue-"],
    html.dark [class*="dark:border-gray-700"] {
        border-color: rgba(96, 165, 250, 0.38) !important;
    }

    html.dark .text-gradient {
        background-image: linear-gradient(90deg, #60a5fa 0%, #22d3ee 58%, #38bdf8 100%) !important;
        color: transparent !important;
        -webkit-background-clip: text !important;
        background-clip: text !important;
    }

    html.dark section[class*="from-primary"],
    html.dark div[class*="from-primary"][class*="to-primary-dark"] {
        background-image: linear-gradient(135deg, #0057ff 0%, #0747c8 100%) !important;
    }

    html.dark section[class*="from-primary"] h1,
    html.dark section[class*="from-primary"] h2,
    html.dark section[class*="from-primary"] h3,
    html.dark section[class*="from-primary"] p,
    html.dark section[class*="from-primary"] span,
    html.dark section[class*="from-primary"] a:not([class*="bg-white"]),
    html.dark section[class*="from-primary"] button:not([class*="bg-white"]),
    html.dark div[class*="from-primary"][class*="to-primary-dark"] h1,
    html.dark div[class*="from-primary"][class*="to-primary-dark"] h2,
    html.dark div[class*="from-primary"][class*="to-primary-dark"] h3,
    html.dark div[class*="from-primary"][class*="to-primary-dark"] p,
    html.dark div[class*="from-primary"][class*="to-primary-dark"] span,
    html.dark div[class*="from-primary"][class*="to-primary-dark"] a:not([class*="bg-white"]),
    html.dark div[class*="from-primary"][class*="to-primary-dark"] button:not([class*="bg-white"]) {
        color: #ffffff !important;
    }

    html.dark section[class*="from-primary"] a[class*="bg-white"],
    html.dark section[class*="from-primary"] button[class*="bg-white"],
    html.dark div[class*="from-primary"][class*="to-primary-dark"] a[class*="bg-white"],
    html.dark div[class*="from-primary"][class*="to-primary-dark"] button[class*="bg-white"] {
        color: #0f3fbd !important;
    }

    html.dark a[class*="bg-white"][class*="dark:bg-"]:not([class*="from-primary"]),
    html.dark button[class*="bg-white"][class*="dark:bg-"]:not([class*="from-primary"]) {
        color: #f8fafc !important;
    }

    html.dark a[class*="bg-white"]:not([class*="dark:bg-"]),
    html.dark button[class*="bg-white"]:not([class*="dark:bg-"]) {
        color: #0f3fbd !important;
    }

    html.dark a[class*="border-"]:not([class*="bg-white"]):not([class*="bg-primary"]):not([class*="bg-cta-orange"]),
    html.dark button[class*="border-"]:not([class*="bg-white"]):not([class*="bg-primary"]):not([class*="bg-cta-orange"]) {
        color: #f8fafc !important;
        border-color: rgba(96, 165, 250, 0.42) !important;
    }

    html.dark a[class*="border-"]:not([class*="bg-white"]):not([class*="bg-primary"]):not([class*="bg-cta-orange"]):hover,
    html.dark button[class*="border-"]:not([class*="bg-white"]):not([class*="bg-primary"]):not([class*="bg-cta-orange"]):hover {
        color: #ffffff !important;
        border-color: rgba(147, 197, 253, 0.72) !important;
        background-color: rgba(59, 130, 246, 0.10) !important;
    }

    html.dark #ws247-aio-ct-button-show-all-container {
        contain: layout paint;
        width: 64px !important;
    }

    html.dark #phonering-alo-phoneIcon {
        contain: layout paint;
        width: 96px !important;
        height: 96px !important;
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
            right: .75rem !important;
            left: auto !important;
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

        #mobile-menu {
            position: fixed !important;
            inset: 4rem 0 auto 0 !important;
            width: 100vw !important;
            max-width: 100vw !important;
            max-height: calc(100dvh - 4rem) !important;
            overflow-y: auto !important;
            overscroll-behavior: contain;
            padding-bottom: calc(6rem + env(safe-area-inset-bottom));
            border-radius: 0 0 1.25rem 1.25rem;
            -webkit-overflow-scrolling: touch;
        }

        #mobile-menu > div {
            padding-top: .75rem !important;
            padding-bottom: 1.25rem !important;
        }

        #mobile-menu > div > .space-y-1 {
            padding-left: .75rem !important;
            padding-right: .75rem !important;
        }

        #mobile-menu a,
        #mobile-menu button {
            max-width: 100%;
            white-space: normal;
            word-break: keep-all;
            line-height: 1.35 !important;
        }

        #mobile-menu .mexo-mobile-nav-link,
        #mobile-menu .mexo-mobile-nav-row {
            display: flex !important;
            align-items: center !important;
            width: 100% !important;
            min-height: 3.35rem !important;
            padding: 0 1rem !important;
            font-size: 1.08rem !important;
            font-weight: 800 !important;
            text-align: left !important;
        }

        #mobile-menu .mexo-mobile-nav-section {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        #mobile-menu .mexo-mobile-nav-row {
            display: grid !important;
            grid-template-columns: minmax(0, 1fr) 3.35rem !important;
            align-items: center !important;
            gap: 0 !important;
            padding: 0 !important;
        }

        #mobile-menu .mexo-mobile-nav-row > a,
        #mobile-menu .mexo-mobile-nav-row > .mexo-mobile-nav-label {
            min-width: 0 !important;
            padding: 0 1rem !important;
            font-size: 1.08rem !important;
            font-weight: 800 !important;
            line-height: 1.2 !important;
            text-align: left !important;
        }

        #mobile-menu .mexo-mobile-nav-toggle,
        #mobile-menu .mexo-mobile-nav-toggle .material-icons,
        #mobile-menu .mexo-mobile-nav-row > span.material-icons {
            width: 3.35rem !important;
            height: 3.35rem !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        #mobile-solutions-content,
        #mobile-training-content {
            margin-left: 0 !important;
            margin-right: 0 !important;
            padding-left: .6rem !important;
            padding-right: .6rem !important;
            max-height: 52dvh;
            overflow-y: auto;
            border: 1px solid rgba(148, 163, 184, .18);
            -webkit-overflow-scrolling: touch;
        }

        #mobile-solutions-content a,
        #mobile-training-content a {
            font-size: .94rem !important;
            padding-top: .55rem !important;
            padding-bottom: .55rem !important;
        }

        #mobile-solutions-content span,
        #mobile-training-content span {
            font-size: .72rem !important;
        }

        body {
            overflow-x: hidden;
        }

        section {
            max-width: 100vw;
            overflow-x: hidden;
        }

        section:first-of-type {
            text-align: center;
        }

        section:first-of-type h1 {
            max-width: min(100%, 24rem);
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            line-height: 1.14 !important;
        }

        section:first-of-type p {
            max-width: 22rem;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            font-size: 1rem !important;
            line-height: 1.62 !important;
        }

        section:first-of-type a[class*="rounded-full"],
        section:first-of-type button[class*="rounded-full"],
        section:first-of-type a[class*="rounded-2xl"],
        section:first-of-type button[class*="rounded-2xl"] {
            width: calc(100% - 2rem) !important;
            max-width: 21rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            justify-content: center !important;
            text-align: center;
            font-size: .98rem !important;
        }

        body.mexo-mobile-menu-open #ws247-aio-ct-button-show-all-container,
        body.mexo-mobile-menu-open #phonering-alo-phoneIcon,
        body.mexo-mobile-menu-open .aio-fixed-bt-mb,
        body.mexo-mobile-menu-open #mexo-back-to-top {
            display: none !important;
            pointer-events: none !important;
        }
    }

    html.dark section[class*="dark:from-"]:not([class*="from-primary"]):not([class*="from-cta"]),
    html.dark section[class*="dark:via-"]:not([class*="from-primary"]):not([class*="from-cta"]),
    html.dark section[class*="dark:to-"]:not([class*="from-primary"]):not([class*="from-cta"]) {
        --tw-gradient-from: #071225 !important;
        --tw-gradient-to: #071225 !important;
        --tw-gradient-stops: #071225, #071225 !important;
        background-image: none !important;
        background-color: #071225 !important;
    }

    html.dark section > .absolute[class*="bg-gradient"]:not([class*="from-primary"]):not([class*="from-cta"]),
    html.dark section > .absolute[class*="radial-gradient"]:not([class*="from-primary"]):not([class*="from-cta"]) {
        opacity: .16 !important;
        background-image: none !important;
        background-color: #071225 !important;
    }

    html.dark div[class*="dark:from-gray-"],
    html.dark div[class*="dark:from-slate-"],
    html.dark div[class*="dark:to-card-dark"],
    html.dark div[class*="dark:to-gray-"],
    html.dark div[class*="dark:to-slate-"] {
        --tw-gradient-from: #0f1b33 !important;
        --tw-gradient-to: #0f1b33 !important;
        --tw-gradient-stops: #0f1b33, #0f1b33 !important;
        background-color: #0f1b33 !important;
    }

    html.dark a[class*="dark:bg-transparent"],
    html.dark button[class*="dark:bg-transparent"],
    html.dark a[class*="bg-transparent"],
    html.dark button[class*="bg-transparent"],
    html.dark a[class*="border-2"],
    html.dark button[class*="border-2"] {
        color: #f8fafc !important;
        border-color: rgba(147, 197, 253, 0.48) !important;
    }

    html.dark a[class*="dark:bg-transparent"] *,
    html.dark button[class*="dark:bg-transparent"] *,
    html.dark a[class*="bg-transparent"] *,
    html.dark button[class*="bg-transparent"] *,
    html.dark a[class*="border-2"] *,
    html.dark button[class*="border-2"] * {
        color: #f8fafc !important;
    }

    html.dark a[class*="text-primary"]:not([class*="bg-white"]),
    html.dark button[class*="text-primary"]:not([class*="bg-white"]),
    html.dark a[class*="text-blue-600"]:not([class*="bg-white"]),
    html.dark button[class*="text-blue-600"]:not([class*="bg-white"]) {
        color: #93c5fd !important;
    }

    html.dark [class*="text-slate-500"],
    html.dark [class*="text-slate-600"],
    html.dark [class*="text-gray-500"],
    html.dark [class*="text-gray-600"] {
        color: #cbd5e1 !important;
    }

    html.dark section [class*="opacity-70"],
    html.dark section [class*="opacity-60"],
    html.dark section [class*="opacity-50"] {
        opacity: .96 !important;
    }

    html.dark body,
    html.dark main,
    html.dark footer {
        background-color: #071225 !important;
        background-image: none !important;
    }

    html.dark section:not([class*="from-primary"]):not([class*="from-cta"]):not([class*="to-primary-dark"]) {
        background: #071225 !important;
        background-color: #071225 !important;
        background-image: none !important;
        border-color: #071225 !important;
    }

    html.dark section:not([class*="from-primary"]):not([class*="from-cta"]):not([class*="to-primary-dark"])::before,
    html.dark section:not([class*="from-primary"]):not([class*="from-cta"]):not([class*="to-primary-dark"])::after {
        background-image: none !important;
    }

    html.dark section:not([class*="from-primary"]):not([class*="from-cta"]):not([class*="to-primary-dark"]) > .absolute.inset-0,
    html.dark section:not([class*="from-primary"]):not([class*="from-cta"]):not([class*="to-primary-dark"]) > div.absolute.inset-0,
    html.dark section:not([class*="from-primary"]):not([class*="from-cta"]):not([class*="to-primary-dark"]) > [class*="absolute"][class*="inset-"] {
        background: transparent !important;
        background-image: none !important;
        opacity: 0 !important;
    }

    html.dark section[class*="bg-slate-"],
    html.dark section[class*="bg-gray-"],
    html.dark section[class*="bg-[#"],
    html.dark section[class*="from-slate-"],
    html.dark section[class*="from-gray-"],
    html.dark section[class*="to-slate-"],
    html.dark section[class*="to-gray-"],
    html.dark section[class*="via-slate-"],
    html.dark section[class*="via-gray-"] {
        background: #071225 !important;
        background-color: #071225 !important;
        background-image: none !important;
        border-color: #071225 !important;
    }

    html.dark section[class*="border-y"],
    html.dark section[class*="border-b"],
    html.dark section[class*="border-t"] {
        border-color: #071225 !important;
    }

    html.dark .mexo-site-header,
    html.dark #mobile-menu {
        background-color: rgba(7, 18, 37, 0.96) !important;
    }

    html.dark section[class*="from-primary"],
    html.dark section[class*="to-primary-dark"],
    html.dark section[class*="bg-primary"],
    html.dark section[class*="bg-gradient-to-"] {
        --tw-gradient-from: #071225 !important;
        --tw-gradient-to: #071225 !important;
        --tw-gradient-stops: #071225, #071225 !important;
        background: #071225 !important;
        background-color: #071225 !important;
        background-image: none !important;
        border-color: #071225 !important;
    }

    html.dark section[class*="from-primary"] > .absolute,
    html.dark section[class*="to-primary-dark"] > .absolute,
    html.dark section[class*="bg-primary"] > .absolute,
    html.dark section[class*="bg-gradient-to-"] > .absolute {
        background: transparent !important;
        background-image: none !important;
        opacity: 0 !important;
    }

    html.dark div[class*="bg-primary"]:not([class*="bg-primary/"]),
    html.dark div[class*="from-primary"][class*="to-primary-dark"],
    html.dark div[class*="bg-gradient-to-br"][class*="from-primary"],
    html.dark div[class*="bg-gradient-to-r"][class*="from-primary"] {
        --tw-gradient-from: #0f1b33 !important;
        --tw-gradient-to: #0f1b33 !important;
        --tw-gradient-stops: #0f1b33, #0f1b33 !important;
        background: #0f1b33 !important;
        background-color: #0f1b33 !important;
        background-image: none !important;
        border: 1px solid rgba(96, 165, 250, 0.30) !important;
    }

    html.dark div[class*="bg-primary"]:not([class*="bg-primary/"]) > .absolute,
    html.dark div[class*="from-primary"][class*="to-primary-dark"] > .absolute,
    html.dark div[class*="bg-gradient-to-br"][class*="from-primary"] > .absolute,
    html.dark div[class*="bg-gradient-to-r"][class*="from-primary"] > .absolute {
        background: transparent !important;
        background-image: none !important;
        opacity: 0 !important;
    }

    html.dark div[class*="bg-primary"]:not([class*="bg-primary/"]) a:not([class*="bg-white"]),
    html.dark div[class*="bg-primary"]:not([class*="bg-primary/"]) button:not([class*="bg-white"]),
    html.dark div[class*="from-primary"][class*="to-primary-dark"] a:not([class*="bg-white"]),
    html.dark div[class*="from-primary"][class*="to-primary-dark"] button:not([class*="bg-white"]) {
        color: #f8fafc !important;
        border-color: rgba(147, 197, 253, 0.48) !important;
    }

    html.dark section[class*="from-primary"] a:not([class*="bg-white"]),
    html.dark section[class*="from-primary"] button:not([class*="bg-white"]),
    html.dark section[class*="to-primary-dark"] a:not([class*="bg-white"]),
    html.dark section[class*="to-primary-dark"] button:not([class*="bg-white"]),
    html.dark section[class*="bg-gradient-to-"] a:not([class*="bg-white"]),
    html.dark section[class*="bg-gradient-to-"] button:not([class*="bg-white"]) {
        color: #f8fafc !important;
        border-color: rgba(147, 197, 253, 0.48) !important;
    }

    .mexo-site-header {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        z-index: 1000 !important;
        isolation: isolate;
        box-shadow: 0 1px 0 rgba(148, 163, 184, .14);
    }

    body {
        padding-top: 80px;
    }

    body.admin-bar .mexo-site-header {
        top: 32px !important;
    }

    body.admin-bar {
        padding-top: 112px;
    }

    html.dark .mexo-site-header {
        background: rgba(7, 18, 37, .94) !important;
        border-color: rgba(96, 165, 250, .20) !important;
        box-shadow: 0 12px 34px rgba(0, 0, 0, .24), 0 1px 0 rgba(96, 165, 250, .16);
    }

    html.dark .mexo-site-header .hidden.lg\:flex > a,
    html.dark .mexo-site-header .hidden.lg\:flex > .relative > button {
        color: #f8fafc !important;
    }

    html.dark .mexo-site-header .hidden.lg\:flex > a:hover,
    html.dark .mexo-site-header .hidden.lg\:flex > .relative > button:hover,
    html.dark .mexo-site-header .hidden.lg\:flex > a.mexo-is-active,
    html.dark .mexo-site-header .hidden.lg\:flex > .relative > button.mexo-is-active {
        color: #60a5fa !important;
    }

    html.dark .mexo-site-header .hidden.lg\:flex > a.mexo-is-active::after,
    html.dark .mexo-site-header .hidden.lg\:flex > .relative > button.mexo-is-active::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -1.65rem;
        width: 1.6rem;
        height: 3px;
        border-radius: 999px;
        transform: translateX(-50%);
        background: #60a5fa;
        box-shadow: 0 0 18px rgba(96, 165, 250, .55);
    }

    html.dark .mexo-site-header .hidden.lg\:flex > .relative > button {
        position: relative;
    }

    html.dark div.text-transparent.bg-clip-text[class*="from-primary"],
    html.dark div.text-transparent.bg-clip-text[class*="to-primary-dark"],
    html.dark span.text-transparent.bg-clip-text[class*="from-primary"],
    html.dark span.text-transparent.bg-clip-text[class*="to-primary-dark"],
    html.dark .text-gradient {
        background: linear-gradient(90deg, #60a5fa 0%, #22d3ee 58%, #38bdf8 100%) !important;
        background-image: linear-gradient(90deg, #60a5fa 0%, #22d3ee 58%, #38bdf8 100%) !important;
        border: 0 !important;
        box-shadow: none !important;
        color: transparent !important;
        -webkit-background-clip: text !important;
        background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
    }

    html.dark section:first-of-type .grid > div {
        background: transparent !important;
        border: 0 !important;
        box-shadow: none !important;
    }

    html.dark section:first-of-type .grid {
        border-color: rgba(96, 165, 250, .22) !important;
    }

    .mexo-primary-cta,
    a[class*="bg-cta-orange"],
    button[class*="bg-cta-orange"],
    a[class*="from-cta-orange"],
    button[class*="from-cta-orange"] {
        background: linear-gradient(135deg, #ff6a2a 0%, #ef4444 100%) !important;
        color: #ffffff !important;
        border-color: transparent !important;
        box-shadow: 0 18px 44px rgba(255, 91, 42, .32), 0 0 38px rgba(239, 68, 68, .22) !important;
    }

    .mexo-primary-cta:hover,
    a[class*="bg-cta-orange"]:hover,
    button[class*="bg-cta-orange"]:hover,
    a[class*="from-cta-orange"]:hover,
    button[class*="from-cta-orange"]:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 24px 58px rgba(255, 91, 42, .42), 0 0 52px rgba(239, 68, 68, .30) !important;
    }

    .mexo-secondary-cta,
    html.dark a[class*="border-"]:not([class*="bg-white"]):not([class*="bg-cta-orange"]):not([class*="from-cta-orange"]),
    html.dark button[class*="border-"]:not([class*="bg-white"]):not([class*="bg-cta-orange"]):not([class*="from-cta-orange"]) {
        background: rgba(7, 18, 37, .42) !important;
        color: #f8fafc !important;
        border-color: rgba(148, 163, 184, .45) !important;
        box-shadow: 0 14px 36px rgba(15, 23, 42, .22), 0 0 28px rgba(96, 165, 250, .08) !important;
    }

    .mexo-secondary-cta:hover,
    html.dark a[class*="border-"]:not([class*="bg-white"]):not([class*="bg-cta-orange"]):not([class*="from-cta-orange"]):hover,
    html.dark button[class*="border-"]:not([class*="bg-white"]):not([class*="bg-cta-orange"]):not([class*="from-cta-orange"]):hover {
        background: rgba(15, 27, 51, .86) !important;
        color: #ffffff !important;
        border-color: rgba(147, 197, 253, .70) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 20px 46px rgba(15, 23, 42, .32), 0 0 42px rgba(96, 165, 250, .16) !important;
    }

    html.dark section[class*="from-primary"] a[class*="bg-white"],
    html.dark section[class*="from-primary"] button[class*="bg-white"],
    html.dark section[class*="to-primary-dark"] a[class*="bg-white"],
    html.dark section[class*="to-primary-dark"] button[class*="bg-white"] {
        background: linear-gradient(135deg, #ff6a2a 0%, #ef4444 100%) !important;
        color: #ffffff !important;
        box-shadow: 0 18px 44px rgba(255, 91, 42, .32), 0 0 38px rgba(239, 68, 68, .22) !important;
    }

    html.dark .mexo-secondary-cta,
    html.dark section[class*="from-primary"] .mexo-secondary-cta,
    html.dark section[class*="to-primary-dark"] .mexo-secondary-cta,
    html.dark div[class*="from-primary"] .mexo-secondary-cta,
    html.dark div[class*="to-primary-dark"] .mexo-secondary-cta {
        background: rgba(7, 18, 37, .42) !important;
        background-image: none !important;
        color: #f8fafc !important;
        border-color: rgba(148, 163, 184, .48) !important;
        box-shadow: 0 14px 36px rgba(15, 23, 42, .22), 0 0 28px rgba(96, 165, 250, .08) !important;
    }

    html.dark .mexo-primary-cta,
    html.dark section[class*="from-primary"] .mexo-primary-cta,
    html.dark section[class*="to-primary-dark"] .mexo-primary-cta,
    html.dark div[class*="from-primary"] .mexo-primary-cta,
    html.dark div[class*="to-primary-dark"] .mexo-primary-cta {
        background: linear-gradient(135deg, #ff6a2a 0%, #ef4444 100%) !important;
        color: #ffffff !important;
        border-color: transparent !important;
        box-shadow: 0 18px 44px rgba(255, 91, 42, .32), 0 0 38px rgba(239, 68, 68, .22) !important;
    }

    html.dark section[class*="from-primary"] a.mexo-secondary-cta[class],
    html.dark section[class*="from-primary"] button.mexo-secondary-cta[class],
    html.dark section[class*="to-primary-dark"] a.mexo-secondary-cta[class],
    html.dark section[class*="to-primary-dark"] button.mexo-secondary-cta[class],
    html.dark div[class*="from-primary"] a.mexo-secondary-cta[class],
    html.dark div[class*="from-primary"] button.mexo-secondary-cta[class],
    html.dark div[class*="to-primary-dark"] a.mexo-secondary-cta[class],
    html.dark div[class*="to-primary-dark"] button.mexo-secondary-cta[class] {
        background: rgba(7, 18, 37, .42) !important;
        background-image: none !important;
        color: #f8fafc !important;
        border-color: rgba(148, 163, 184, .48) !important;
        box-shadow: 0 14px 36px rgba(15, 23, 42, .22), 0 0 28px rgba(96, 165, 250, .08) !important;
    }

    @media (max-width: 767px) {
        .mexo-site-header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
        }

        body {
            padding-top: 64px;
        }

        body.admin-bar .mexo-site-header {
            top: 46px !important;
        }

        body.admin-bar {
            padding-top: 110px;
        }
    }

    html.dark .mexo-primary-cta,
    html.dark a.mexo-primary-cta,
    html.dark button.mexo-primary-cta,
    html.dark a[class*="bg-cta-orange"],
    html.dark button[class*="bg-cta-orange"],
    html.dark a[class*="from-cta-orange"],
    html.dark button[class*="from-cta-orange"] {
        color: #ffffff !important;
        border: 1.5px solid rgba(255, 255, 255, .74) !important;
        box-shadow: 0 18px 44px rgba(255, 91, 42, .36), 0 0 42px rgba(239, 68, 68, .26), inset 0 1px 0 rgba(255, 255, 255, .24) !important;
    }

    html.dark .mexo-primary-cta *,
    html.dark a.mexo-primary-cta *,
    html.dark button.mexo-primary-cta *,
    html.dark a[class*="bg-cta-orange"] *,
    html.dark button[class*="bg-cta-orange"] *,
    html.dark a[class*="from-cta-orange"] *,
    html.dark button[class*="from-cta-orange"] * {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    html.dark .mexo-secondary-cta,
    html.dark a.mexo-secondary-cta,
    html.dark button.mexo-secondary-cta {
        color: #ffffff !important;
    }

    html.dark .mexo-secondary-cta *,
    html.dark a.mexo-secondary-cta *,
    html.dark button.mexo-secondary-cta * {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    html.dark section[class*="from-primary"] .mexo-primary-cta,
    html.dark section[class*="to-primary-dark"] .mexo-primary-cta,
    html.dark div[class*="from-primary"] .mexo-primary-cta,
    html.dark div[class*="to-primary-dark"] .mexo-primary-cta {
        border-color: rgba(255, 255, 255, .78) !important;
        color: #ffffff !important;
    }

    html.dark section[class*="from-primary"] .mexo-secondary-cta,
    html.dark section[class*="to-primary-dark"] .mexo-secondary-cta,
    html.dark div[class*="from-primary"] .mexo-secondary-cta,
    html.dark div[class*="to-primary-dark"] .mexo-secondary-cta {
        color: #ffffff !important;
    }

    html.dark .mexo-primary-cta[class],
    html.dark a.mexo-primary-cta[class],
    html.dark button.mexo-primary-cta[class],
    html.dark header a.mexo-primary-cta[class],
    html.dark nav a.mexo-primary-cta[class],
    html.dark section a.mexo-primary-cta[class],
    html.dark section button.mexo-primary-cta[class] {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
        border-width: 1.5px !important;
        border-style: solid !important;
        border-color: rgba(255, 255, 255, .78) !important;
    }

    html.dark .mexo-primary-cta[class] *,
    html.dark a.mexo-primary-cta[class] *,
    html.dark button.mexo-primary-cta[class] * {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    html.dark .mexo-secondary-cta[class],
    html.dark a.mexo-secondary-cta[class],
    html.dark button.mexo-secondary-cta[class],
    html.dark section a.mexo-secondary-cta[class],
    html.dark section button.mexo-secondary-cta[class] {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
        border-width: 1px !important;
        border-style: solid !important;
        border-color: rgba(148, 163, 184, .52) !important;
    }

    html.dark .mexo-secondary-cta[class] *,
    html.dark a.mexo-secondary-cta[class] *,
    html.dark button.mexo-secondary-cta[class] * {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    html:not(.dark) .mexo-secondary-cta[class],
    html:not(.dark) a.mexo-secondary-cta[class],
    html:not(.dark) button.mexo-secondary-cta[class],
    html:not(.dark) section a.mexo-secondary-cta[class],
    html:not(.dark) section button.mexo-secondary-cta[class] {
        background: rgba(255, 255, 255, .92) !important;
        background-image: none !important;
        color: #1f2937 !important;
        -webkit-text-fill-color: #1f2937 !important;
        border-color: rgba(148, 163, 184, .55) !important;
    }

    html:not(.dark) .mexo-secondary-cta[class] *,
    html:not(.dark) a.mexo-secondary-cta[class] *,
    html:not(.dark) button.mexo-secondary-cta[class] * {
        color: #1f2937 !important;
        -webkit-text-fill-color: #1f2937 !important;
    }

    @media (min-width: 1024px) {
        html.dark .mexo-site-header .hidden[class*="lg:flex"] .group > div[class*="absolute"] {
            background: rgba(15, 27, 51, 0.98) !important;
            border-color: rgba(96, 165, 250, 0.34) !important;
            box-shadow: 0 24px 70px rgba(0, 0, 0, 0.36), 0 0 40px rgba(96, 165, 250, 0.08) !important;
        }

        html.dark .mexo-site-header .hidden[class*="lg:flex"] .group > div[class*="absolute"] a {
            color: #eaf6ff !important;
            -webkit-text-fill-color: #eaf6ff !important;
            font-size: 1rem !important;
            font-weight: 800 !important;
            line-height: 1.65 !important;
        }

        html.dark .mexo-site-header .hidden[class*="lg:flex"] .group > div[class*="absolute"] a:hover {
            color: #ffb86b !important;
            -webkit-text-fill-color: #ffb86b !important;
        }

        html.dark .mexo-site-header .hidden[class*="lg:flex"] .group > div[class*="absolute"] span {
            color: #f8fafc !important;
        }

        html.dark .mexo-site-header .hidden[class*="lg:flex"] .group > div[class*="absolute"] span.text-orange-500 {
            color: #ff8a3d !important;
        }

        html.dark .mexo-site-header .hidden[class*="lg:flex"] .group > div[class*="absolute"] span.text-blue-600 {
            color: #7dd3fc !important;
        }
    }

    html.dark #mobile-menu [id$="-content"] a {
        color: #eaf6ff !important;
        -webkit-text-fill-color: #eaf6ff !important;
        font-weight: 700 !important;
    }

    html.dark #mobile-menu [id$="-content"] a:hover {
        color: #ffb86b !important;
        -webkit-text-fill-color: #ffb86b !important;
    }

    body .mexo-hero-pill,
    body .mexo-hero-badge {
        color: #f05a28 !important;
        -webkit-text-fill-color: #f05a28 !important;
        font-size: clamp(1.15rem, 1.45vw, 1.65rem) !important;
        font-weight: 900 !important;
    }

    html.dark body .mexo-hero-pill,
    html.dark body .mexo-hero-badge {
        color: #ffb86b !important;
        -webkit-text-fill-color: #ffb86b !important;
        font-size: clamp(1.15rem, 1.45vw, 1.65rem) !important;
        font-weight: 900 !important;
    }

    body .mexo-hero-pill > span:not([class*="h-"]):not([class*="w-"]),
    body .mexo-hero-badge > span:not([class*="h-"]):not([class*="w-"]),
    html.dark body .mexo-hero-pill > span:not([class*="h-"]):not([class*="w-"]),
    html.dark body .mexo-hero-badge > span:not([class*="h-"]):not([class*="w-"]) {
        color: inherit !important;
        -webkit-text-fill-color: currentColor !important;
    }

    @media (min-width: 1024px) {
        html.dark .mexo-site-header .relative.group > .absolute,
        html.dark .mexo-site-header .relative.group > div[class*="absolute"] {
            background: rgba(15, 27, 51, 0.98) !important;
            border-color: rgba(96, 165, 250, 0.34) !important;
        }

        html.dark .mexo-site-header .relative.group > .absolute a,
        html.dark .mexo-site-header .relative.group > div[class*="absolute"] a {
            color: #f8fafc !important;
            -webkit-text-fill-color: #f8fafc !important;
            font-size: 1rem !important;
            font-weight: 800 !important;
            line-height: 1.65 !important;
        }

        html.dark .mexo-site-header .relative.group > .absolute a:hover,
        html.dark .mexo-site-header .relative.group > div[class*="absolute"] a:hover {
            color: #ffb86b !important;
            -webkit-text-fill-color: #ffb86b !important;
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
    <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="240" height="64" loading="eager" decoding="async" fetchpriority="high" class="h-8 md:h-12 w-auto transition-all duration-300 dark:brightness-0 dark:invert">
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
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="/dich-vu-van-hanh-shopee">Vận Hành Shopee</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="/xay-dung-shop-shopee">Xây Shop Shopee</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="/livestream-auto-24-7/">Livestream Auto 24/7</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="/len-mall-shopee/">Lên Mall Shopee</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="/trang-tri-gian-hang/">Trang Trí &amp; Tối Ưu Shop</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="/dich-vu-tang-follow">Tăng Follow &amp; Kháng Vi Phạm</a></li>
</ul>
</div>
<div>
<div class="flex items-center gap-2 mb-3 pb-2 border-b border-slate-100 dark:border-slate-700">
<span class="text-black dark:text-white font-bold text-lg">TikTok</span>
</div>
<ul class="space-y-2">
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="#">Vận Hành TikTok Shop</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="#">Xây Dựng TikTok Shop</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="#">Livestream Auto 24/7</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="#">Booking KOL</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="#">Tăng Follow &amp; Kháng Vi Phạm</a></li>
</ul>
</div>
<div>
<div class="flex items-center gap-2 mb-3 pb-2 border-b border-slate-100 dark:border-slate-700">
<span class="text-blue-600 font-bold text-lg">Mexo AI</span>
</div>
<ul class="space-y-2">
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="#">Media AI</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="#">Booking KOL</a></li>
<li><a class="mexo-mega-link block hover:translate-x-1 transition-all" href="#">Công Cụ &amp; Phần Mềm Hỗ Trợ</a></li>
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
<a class="mexo-mega-link block px-4 py-2.5 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-all" href="/dao-tao-shopee">Đào Tạo Shopee</a>
<a class="mexo-mega-link block px-4 py-2.5 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-all" href="#">Đào Tạo TikTok</a>
<a class="mexo-mega-link block px-4 py-2.5 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-all" href="#">Đào Tạo AI</a>
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
        <div class="mexo-mobile-nav-list space-y-1 px-4">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mexo-mobile-nav-link block px-4 py-3 text-lg font-bold text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">Trang chủ</a>
            <a href="/gioi-thieu" class="mexo-mobile-nav-link block px-4 py-3 text-lg font-bold text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">Giới thiệu</a>
            
            <!-- Mobile Solutions Accordion -->
            <div class="mexo-mobile-nav-section space-y-1">
                <div class="mexo-mobile-nav-row w-full flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">
                    <a href="/giai-phap" class="flex-grow px-4 py-3 text-lg font-bold text-slate-900 dark:text-white">Giải pháp</a>
                    <button id="mobile-solutions-toggle" class="mexo-mobile-nav-toggle px-5 py-4 group">
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
            <div class="mexo-mobile-nav-section space-y-1">
                <button id="mobile-training-toggle" class="mexo-mobile-nav-row w-full flex items-center justify-between px-5 py-4 text-lg font-bold text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors group">
                    <span class="mexo-mobile-nav-label">Đào tạo</span>
                    <span class="material-icons text-slate-400 transition-transform duration-200 group-aria-expanded:rotate-180">expand_more</span>
                </button>
                <div id="mobile-training-content" class="hidden px-4 space-y-1 bg-slate-50/50 dark:bg-slate-800/50 rounded-xl mx-2 pb-2">
                    <a href="https://mexo.vn/dao-tao-shopee/" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Đào tạo Shopee</a>
                    <a href="#" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Đào tạo TikTok</a>
                    <a href="#" class="block px-4 py-2 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">Đào tạo AI</a>
                </div>
            </div>

            <a href="/blog" class="mexo-mobile-nav-link block px-4 py-3 text-lg font-bold text-slate-900 dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">Blog</a>
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
            const rightOffset = 12;
            headerActions.style.setProperty('left', Math.max(12, viewportWidth - actionWidth - rightOffset) + 'px', 'important');
            headerActions.style.setProperty('right', 'auto', 'important');
            headerActions.style.setProperty('top', '.95rem', 'important');
        } else {
            headerActions.style.removeProperty('left');
            headerActions.style.removeProperty('right');
            headerActions.style.removeProperty('top');
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
            document.body.classList.add('mexo-mobile-menu-open');
            // Optional: Add basic animation class logic here if needed
        } else {
            mobileMenu.classList.add('hidden');
            document.body.classList.remove('mexo-mobile-menu-open');
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
        if (typeof window.mexoApplyCtaTheme === 'function') {
            window.mexoApplyCtaTheme();
        }
    }

    themeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const nextTheme = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
            setTheme(nextTheme);
        });
    });

    (function markActiveNavigation() {
        const path = window.location.pathname.replace(/\/+$/, '') || '/';
        const solutionPaths = [
            '/giai-phap',
            '/dich-vu-van-hanh-shopee',
            '/xay-dung-shop-shopee',
            '/livestream-auto-24-7',
            '/len-mall-shopee',
            '/trang-tri-gian-hang',
            '/dich-vu-tang-follow'
        ];
        const trainingPaths = ['/dao-tao-shopee'];

        function samePath(href) {
            try {
                if (!href || href === '#' || href.indexOf('#') === 0 || href.indexOf('javascript:') === 0) {
                    return false;
                }
                const url = new URL(href, window.location.origin);
                return (url.pathname.replace(/\/+$/, '') || '/') === path;
            } catch (error) {
                return false;
            }
        }

        document.querySelectorAll('.mexo-site-header a[href]').forEach(function(link) {
            if (samePath(link.getAttribute('href'))) {
                link.classList.add('mexo-is-active');
            }
        });

        if (solutionPaths.indexOf(path) !== -1) {
            document.querySelectorAll('.mexo-site-header .hidden.lg\\:flex > .relative:nth-of-type(1) > button, #mobile-menu a[href="/giai-phap"]').forEach(function(item) {
                item.classList.add('mexo-is-active');
            });
        }

        if (trainingPaths.indexOf(path) !== -1) {
            document.querySelectorAll('.mexo-site-header .hidden.lg\\:flex > .relative:nth-of-type(2) > button, #mobile-training-toggle').forEach(function(item) {
                item.classList.add('mexo-is-active');
            });
        }
    })();

    (function normalizeCtaButtons() {
        const secondaryTerms = [
            'nhận tư vấn chiến lược',
            'xem tất cả dịch vụ',
            'khám phá chi tiết',
            'liên hệ hotline',
            'liên hệ ngay'
        ];
        const primaryTerms = [
            'hành động ngay',
            'đăng ký tư vấn',
            'đăng ký nhận tư vấn',
            'đăng ký tư vấn miễn phí',
            'chọn gói này'
        ];

        function applyButtonTheme(item, type) {
            const isDark = document.documentElement.classList.contains('dark');

            if (type === 'secondary') {
                const textColor = isDark ? '#ffffff' : '#1f2937';
                item.style.setProperty('color', textColor, 'important');
                item.style.setProperty('-webkit-text-fill-color', textColor, 'important');
                item.style.setProperty('border-width', '1px', 'important');
                item.style.setProperty('border-style', 'solid', 'important');
                item.style.setProperty('border-color', isDark ? 'rgba(148, 163, 184, .52)' : 'rgba(148, 163, 184, .55)', 'important');
                return;
            }

            item.style.setProperty('color', '#ffffff', 'important');
            item.style.setProperty('-webkit-text-fill-color', '#ffffff', 'important');
            item.style.setProperty('border-width', '1.5px', 'important');
            item.style.setProperty('border-style', 'solid', 'important');
            item.style.setProperty('border-color', 'rgba(255, 255, 255, .78)', 'important');
        }

        window.mexoApplyCtaTheme = function() {
            document.querySelectorAll('.mexo-secondary-cta').forEach(function(item) {
                applyButtonTheme(item, 'secondary');
            });

            document.querySelectorAll('.mexo-primary-cta').forEach(function(item) {
                applyButtonTheme(item, 'primary');
            });
        };

        document.querySelectorAll('a, button').forEach(function(item) {
            const label = (item.textContent || '').toLowerCase().replace(/\s+/g, ' ').trim();
            if (!label) return;

            if (secondaryTerms.some(function(term) { return label.indexOf(term) !== -1; })) {
                item.classList.add('mexo-secondary-cta');
                item.classList.remove('mexo-primary-cta');
                applyButtonTheme(item, 'secondary');
                return;
            }

            if (primaryTerms.some(function(term) { return label.indexOf(term) !== -1; })) {
                item.classList.add('mexo-primary-cta');
                applyButtonTheme(item, 'primary');
            }
        });
    })();

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

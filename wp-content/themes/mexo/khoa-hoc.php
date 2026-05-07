<?php
/*
Template Name: Khóa Học
*/
get_header(); ?>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#FF5722", // Shopee Orange
                        "primary-dark": "#E64A19",
                        "secondary": "#2563EB", // Adjusted to a more vibrant Royal Blue to match Red
                        "secondary-dark": "#1E40AF",
                        "accent-red": "#DC2626", // New Red for the Courses section
                        "background-light": "#FAFAFA",
                        "background-dark": "#0f172a",
                        "card-light": "#ffffff",
                        "card-dark": "#1e293b",
                        "text-main": "#1e293b",
                        "text-sub": "#64748b",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                    }
                },
            },
        }
    </script>
<style>
        body {
            font-feature-settings: "cv11", "ss01";
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }
        .dark .glass-effect {
            background: rgba(30, 41, 59, 0.7);
        }
        .material-symbols-outlined {
          font-family: 'Material Symbols Outlined';
          font-weight: normal;
          font-style: normal;
          font-size: 24px;  /* Preferred icon size */
          display: inline-block;
          line-height: 1;
          text-transform: none;
          letter-spacing: normal;
          word-wrap: normal;
          white-space: nowrap;
          direction: ltr;
          
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        .icon-filled {
          font-variation-settings:
          'FILL' 1,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        .blob {
            position: absolute;
            filter: blur(60px);
            z-index: -1;
            opacity: 0.5;
        }

        /* Fix for Gradient Text */
        .text-transparent {
            color: transparent !important;
        }
        .bg-clip-text {
            -webkit-background-clip: text !important;
            background-clip: text !important;
        }
        .bg-gradient-to-r {
            background-image: linear-gradient(to right, var(--tw-gradient-stops)) !important;
        }
        .from-primary {
            --tw-gradient-from: #FF5722 !important;
            --tw-gradient-to: rgb(255 87 34 / 0) !important;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important;
        }
        .to-orange-500 {
            --tw-gradient-to: #f97316 !important;
        }

        /* Prevent Gradient Text Wrapping + Ensure Block Display if needed */
        .gradient-text-nowrap {
            white-space: nowrap !important;
            display: inline-block !important;
        }

        /* Fix for Background Gradients */
        .bg-gradient-to-br {
             background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)) !important;
        }
        /* Secondary Color Gradient Fix */
        .from-secondary {
            --tw-gradient-from: #2563EB !important;
            --tw-gradient-to: rgb(37 99 235 / 0) !important;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important;
        }
        .to-blue-800 {
            --tw-gradient-to: #1e40af !important;
        }
    </style>
<main>
<section class="relative overflow-hidden pt-16 pb-20 lg:pt-24 lg:pb-32">
<div class="blob bg-blue-200/40 dark:bg-primary/20 w-96 h-96 rounded-full top-0 left-0 -translate-x-1/3 -translate-y-1/3"></div>
<div class="blob bg-blue-200/40 dark:bg-secondary/20 w-[35rem] h-[35rem] rounded-full bottom-0 right-0 translate-x-1/4 translate-y-1/4"></div>
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
<div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
<div class="lg:col-span-7 space-y-8 text-center lg:text-left">
<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 text-primary border border-blue-100 dark:bg-blue-900/30 dark:text-blue-400 dark:border-blue-800 text-sm font-semibold mb-2">
<span class="relative flex h-2.5 w-2.5">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary"></span>
</span>
                        Khóa học Hot nhất 2026
                    </div>
<h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-text-main dark:text-white leading-[1.05] tracking-tight">
<span class="bg-gradient-to-r from-primary to-orange-500 bg-clip-text text-transparent gradient-text-nowrap">Đào Tạo Shopee</span><br/>
                        Vận Hành Thực Chiến AI
                    </h1>
<p class="text-lg md:text-xl text-text-sub dark:text-gray-300 font-medium leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Chương trình đào tạo chuyên sâu "Cầm tay chỉ việc", trang bị kiến thức toàn diện từ xây dựng shop, vận hành đến tối ưu quảng cáo và ứng dụng AI để bứt phá doanh số trên sàn TMĐT lớn nhất Việt Nam.
                    </p>
<div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
<button type="button"
    onclick="window.location.href='/lien-he/';" class="flex items-center justify-center gap-2 rounded-2xl bg-primary px-8 py-4 text-base font-bold text-white shadow-xl shadow-primary/30 transition-all hover:bg-primary-dark hover:-translate-y-1">
<span class="material-symbols-outlined">how_to_reg</span>
                            Đăng ký ngay
                        </button>
<button class="flex items-center justify-center gap-2 rounded-2xl bg-white border border-gray-200 px-8 py-4 text-base font-bold text-text-main hover:bg-gray-50 dark:bg-white/5 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 transition-all">
<span class="material-symbols-outlined">play_circle</span>
                            Xem lộ trình
                        </button>
</div>
<div class="pt-8 border-t border-gray-100 dark:border-gray-800 flex flex-wrap gap-x-8 gap-y-4 justify-center lg:justify-start">
<div class="flex items-center gap-2">
<div class="bg-green-100 dark:bg-green-900/30 p-1 rounded-full text-green-600 dark:text-green-400">
<span class="material-symbols-outlined text-xl">verified</span>
</div>
<span class="text-sm font-bold text-text-main dark:text-white">Thực chiến 100%</span>
</div>
<div class="flex items-center gap-2">
<div class="bg-blue-100 dark:bg-blue-900/30 p-1 rounded-full text-secondary dark:text-blue-400">
<span class="material-symbols-outlined text-xl">groups</span>
</div>
<span class="text-sm font-bold text-text-main dark:text-white">Support 1-1 Trọn đời</span>
</div>
<div class="flex items-center gap-2">
<div class="bg-purple-100 dark:bg-purple-900/30 p-1 rounded-full text-purple-600 dark:text-purple-400">
<span class="material-symbols-outlined text-xl">auto_awesome</span>
</div>
<span class="text-sm font-bold text-text-main dark:text-white">Ứng dụng AI mới nhất</span>
</div>
</div>
</div>
<div class="lg:col-span-5 relative lg:block hidden">
<div class="relative rounded-[2rem] overflow-hidden shadow-2xl border-[6px] border-white dark:border-gray-800 bg-white dark:bg-gray-800 transform rotate-2 hover:rotate-0 transition-transform duration-500">
<div class="absolute top-6 right-6 z-10 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-xl shadow-lg border border-gray-100 dark:border-gray-700 dark:bg-card-dark/95">
<div class="flex items-center gap-2">
<span class="relative flex h-3 w-3">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent-red opacity-75"></span>
<span class="relative inline-flex rounded-full h-3 w-3 bg-accent-red"></span>
</span>
<span class="text-xs font-black tracking-wide text-gray-900 dark:text-white">LIVE TRAINING</span>
</div>
</div>
<img alt="Shopee Training Growth" class="w-full h-auto object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuClDUfK_xJJWTfqHVPjM8R9PKWslilM3BuCL_SFZ9eCFRfRJy3m60A1L7teypim6UTjSW373E39W0vtEhdmAUat7ZVmxLnCMzj76i63WoU_brqDTiBXiav85Le7VNWQI4Vl_IBqH6KZTg9JR9X0-GnRaWINcKCLFIyobmjjQ1hZvPBpDSIDtrvxO938C8z3h8F01csDAixu3wu47nhc84mL24-vQX8mCXeLqhnI3ZJdaWNeJRd4Qzd42QqJ05Yn4SdE4AuIvgAoLJE"/>
</div>
<div class="absolute -bottom-10 -left-10 bg-white dark:bg-card-dark p-5 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-gray-100 dark:border-gray-700 w-56 animate-bounce" style="animation-duration: 4s;">
<div class="flex items-center justify-between mb-3">
<div class="bg-green-50 text-green-600 p-2.5 rounded-xl">
<span class="material-symbols-outlined text-2xl">trending_up</span>
</div>
<span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-lg">+250%</span>
</div>
<p class="text-xs text-text-sub dark:text-gray-400 font-semibold mb-1">Tăng trưởng doanh thu</p>
<p class="text-2xl font-black text-text-main dark:text-white">Gấp 3 Lần</p>
</div>
</div>
</div>
</div>
</section>
<section class="py-24 bg-white dark:bg-card-dark relative">
<div class="absolute top-0 right-0 w-1/3 h-full bg-gray-50 dark:bg-gray-800/30 skew-x-12 translate-x-32 -z-1"></div>
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
<div class="grid lg:grid-cols-2 gap-16 lg:gap-24">
<div>
<div class="mb-10">
<span class="text-secondary font-bold tracking-widest uppercase text-xl mb-2 block">Đối tượng tham gia</span>
<h3 class="text-3xl md:text-4xl font-black text-text-main dark:text-white leading-tight">KHÓA HỌC NÀY<br/>DÀNH CHO AI?</h3>
</div>
<div class="space-y-6">
<div class="group flex gap-5 p-6 rounded-2xl bg-gray-50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 dark:hover:border-gray-700">
<div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-secondary dark:text-blue-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl">storefront</span>
</div>
<div>
<h4 class="font-bold text-lg text-text-main dark:text-white mb-2">Chủ doanh nghiêp, chủ xưởng, tổng kho</h4>
<p class="text-text-sub dark:text-gray-400 text-sm leading-relaxed">Muốn mở rộng kênh bán hàng trên Shopee, đa dạng hóa nguồn thu, giảm phụ thuộc vào một kênh.</p>
</div>
</div>
<div class="group flex gap-5 p-6 rounded-2xl bg-gray-50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 dark:hover:border-gray-700">
<div class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl">campaign</span>
</div>
<div>
<h4 class="font-bold text-lg text-text-main dark:text-white mb-2">Chủ Shop đang "Gồng lỗ" Mất traffic</h4>
<p class="text-text-sub dark:text-gray-400 text-sm leading-relaxed">Đang "đốt tiền" chạy Ads nhưng đơn không ổn định, traffic giảm shop cũ bị phạt, mất tương tác tự nhiên cần tìm giải pháp vực dậy doanh số.</p>
</div>
</div>
<div class="group flex gap-5 p-6 rounded-2xl bg-gray-50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 dark:hover:border-gray-700">
<div class="w-12 h-12 rounded-xl bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl">rocket_launch</span>
</div>
<div>
<h4 class="font-bold text-lg text-text-main dark:text-white mb-2">Người mới khởi nghiệp Shopee</h4>
<p class="text-text-sub dark:text-gray-400 text-sm leading-relaxed">Người mới bắt đầu kinh doanh Online, chưa biết bắt đầu từ đâu, cần lộ trình bài bản tránh rủi ro.</p>
</div>
</div>
</div>
</div>
<div class="relative">
<div class="absolute inset-0 bg-gradient-to-br from-primary to-orange-600 rounded-[2.5rem] transform rotate-3 opacity-10"></div>
<div class="bg-gradient-to-br from-white to-orange-50 dark:from-gray-800 dark:to-gray-900 rounded-[2.5rem] p-8 lg:p-10 border border-orange-100 dark:border-gray-700 relative shadow-2xl overflow-hidden h-full">
<div class="absolute top-0 right-0 w-64 h-64 bg-orange-200/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
<div class="relative z-10">
<div class="flex items-center gap-4 mb-8">
<div class="p-3 bg-primary/10 rounded-2xl text-primary">
<span class="material-symbols-outlined text-3xl">target</span>
</div>
<h3 class="text-2xl font-black text-text-main dark:text-white uppercase">Mục tiêu đạt được</h3>
</div>
<div class="grid gap-6">
<div class="bg-white dark:bg-card-dark p-5 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex gap-4 transition-transform hover:-translate-y-1">
<div class="bg-orange-50 dark:bg-orange-900/20 w-10 h-10 rounded-lg flex items-center justify-center shrink-0 text-primary">
<span class="material-symbols-outlined text-xl">lightbulb</span>
</div>
<div>
<h4 class="font-bold text-text-main dark:text-white mb-1">Tư duy vận hành chuẩn</h4>
<p class="text-sm text-text-sub dark:text-gray-400">Biết tính chi phí, xây thương hiệu, hiểu thuật toán Shopee, xây chiến lược sản phẩm, giá &amp; quản lý vận hành.</p>
</div>
</div>
<div class="bg-white dark:bg-card-dark p-5 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex gap-4 transition-transform hover:-translate-y-1">
<div class="bg-blue-50 dark:bg-blue-900/20 w-10 h-10 rounded-lg flex items-center justify-center shrink-0 text-secondary">
<span class="material-symbols-outlined text-xl">search</span>
</div>
<div>
<h4 class="font-bold text-text-main dark:text-white mb-1">Tự xây dựng shop, sản phẩm chuẩn SEO</h4>
<p class="text-sm text-text-sub dark:text-gray-400">Biết tự xây shop từ làm banner, hình ảnh, video xây được 1 shop chuẩn SEO.</p>
</div>
</div>
<div class="bg-white dark:bg-card-dark p-5 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex gap-4 transition-transform hover:-translate-y-1">
<div class="bg-red-50 dark:bg-red-900/20 w-10 h-10 rounded-lg flex items-center justify-center shrink-0 text-accent-red">
<span class="material-symbols-outlined text-xl">ads_click</span>
</div>
<div>
<h4 class="font-bold text-text-main dark:text-white mb-1">Làm chủ Quảng cáo</h4>
<p class="text-sm text-text-sub dark:text-gray-400">Biết tự chạy quảng cáo hiệu quả, đọc chỉ số, tối ưu chi phí (CIR) và lợi nhuận.</p>
</div>
</div>
<div class="bg-white dark:bg-card-dark p-5 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 flex gap-4 transition-transform hover:-translate-y-1">
<div class="bg-purple-50 dark:bg-purple-900/20 w-10 h-10 rounded-lg flex items-center justify-center shrink-0 text-purple-500">
<span class="material-symbols-outlined text-xl">robot_2</span>
</div>
<div>
<h4 class="font-bold text-text-main dark:text-white mb-1">Ứng dụng AI thực chiến</h4>
<p class="text-sm text-text-sub dark:text-gray-400">Dùng AI tối ưu sản phẩm, content, làm hình ảnh, video &amp; tối ưu quảng cáo..</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="py-24 bg-background-light dark:bg-background-dark overflow-hidden">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="flex flex-col lg:flex-row gap-12">
<div class="lg:w-[58%] bg-white dark:bg-card-dark rounded-[2.5rem] p-8 md:p-10 shadow-xl border border-gray-100 dark:border-gray-700 relative overflow-hidden group">
<div class="absolute -right-20 -top-20 w-80 h-80 bg-orange-100 dark:bg-orange-900/20 rounded-full blur-3xl group-hover:bg-orange-200 dark:group-hover:bg-orange-900/30 transition-colors duration-500"></div>
<div class="relative z-10">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-400 text-xs font-bold uppercase tracking-wider mb-8">
<span class="material-symbols-outlined text-lg">school</span>
            Giảng viên phụ trách
        </div>
<div class="flex flex-col md:flex-row gap-8 items-start">
<div class="w-full md:w-5/12 shrink-0 flex flex-col gap-5">
<div class="relative aspect-[3/4] rounded-2xl overflow-hidden shadow-2xl border-4 border-white dark:border-gray-600">
<img alt="Mr. Bùi Phúc - CEO Mexo Group" class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-700" src="https://mexo.vn/wp-content/uploads/480285247_1371094447253285_1932876413270114603_n-1.jpg"/>
</div>
<div class="flex justify-between items-center gap-2 bg-gray-50 dark:bg-gray-800 p-3 rounded-xl border border-gray-100 dark:border-gray-700">
<a class="flex items-center justify-center p-2 text-blue-700 hover:bg-blue-600 hover:text-white rounded-lg transition-all" href="https://www.facebook.com/buiphuc59535" target="_blank" title="Facebook">
<svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" fill-rule="evenodd"></path></svg>
</a>
<a class="flex items-center justify-center p-2 text-black dark:text-white hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black rounded-lg transition-all" href="https://www.tiktok.com/@phucthucchien" target="_blank" title="TikTok">
<svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path></svg>
</a>
<a class="flex items-center justify-center p-2 text-red-600 hover:bg-red-600 hover:text-white rounded-lg transition-all" href="https://www.youtube.com/@buiphucmexogroup" target="_blank" title="YouTube">
<svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path clip-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" fill-rule="evenodd"></path></svg>
</a>
</div>
<div class="grid gap-3">
<a class="flex items-center gap-3 text-secondary font-bold text-sm bg-blue-50 dark:bg-blue-900/20 px-4 py-3 rounded-xl hover:bg-secondary hover:text-white transition-all border border-blue-100 dark:border-blue-900 shadow-sm" href="https://www.facebook.com/groups/881621835206943" target="_blank" rel="noopener">
<span class="material-symbols-outlined icon-filled text-xl">groups</span>
<span class="leading-snug">Admin Group Shopee Người Bán Việt Nam</span>
<span class="material-symbols-outlined text-base ml-auto">open_in_new</span>
                </a>
<a class="flex items-center gap-3 text-secondary font-bold text-sm bg-blue-50 dark:bg-blue-900/20 px-4 py-3 rounded-xl hover:bg-secondary hover:text-white transition-all border border-blue-100 dark:border-blue-900 shadow-sm" href="https://www.facebook.com/groups/groupnguoibanshopee" target="_blank" rel="noopener">
<span class="material-symbols-outlined icon-filled text-xl">forum</span>
<span class="leading-snug">Shopee Group - Cộng đồng Shopee Việt Nam</span>
<span class="material-symbols-outlined text-base ml-auto">open_in_new</span>
                </a>
<a class="flex items-center gap-3 text-secondary font-bold text-sm bg-blue-50 dark:bg-blue-900/20 px-4 py-3 rounded-xl hover:bg-secondary hover:text-white transition-all border border-blue-100 dark:border-blue-900 shadow-sm" href="https://www.facebook.com/groups/1627376667376085" target="_blank" rel="noopener">
<span class="material-symbols-outlined icon-filled text-xl">campaign</span>
<span class="leading-snug">Cộng đồng Affiliate Shopee Việt Nam</span>
<span class="material-symbols-outlined text-base ml-auto">open_in_new</span>
                </a>
</div>
</div>
<div class="w-full md:w-7/12 space-y-6">
<div>
<h3 class="text-4xl lg:text-5xl font-black text-primary mb-2">Mr. BÙI PHÚC</h3>
<p class="text-lg font-bold text-secondary dark:text-secondary-dark tracking-wide flex items-center gap-2">
                        CEO MEXO GROUP
                        <span class="material-symbols-outlined text-secondary text-xl icon-filled">verified</span>
</p>
</div>
<p class="text-base text-text-sub dark:text-gray-300 leading-relaxed">
COACH vận hành Shopee với 7+ năm kinh nghiệm thực chiến.
Trực tiếp đào tạo, phân tích và cá nhân hóa chiến lược theo từng mô hình shop, giúp học viên hiểu bản chất, làm đúng ngay từ nền tảng và phát triển bền vững.
Hiện là Admin cộng đồng “SHOPEE NGƯỜI BÁN - Cộng đồng Shopee Việt Nam”, nơi quy tụ hàng chục nghìn nhà bán hàng trên toàn quốc.
                </p>
<div class="grid grid-cols-2 gap-4 pt-4">
<div class="p-4 rounded-2xl bg-white dark:bg-gray-800 shadow-lg shadow-gray-100 dark:shadow-none border border-gray-100 dark:border-gray-700 relative overflow-hidden group hover:-translate-y-1 transition-transform">
<div class="absolute right-0 top-0 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-bl-full -mr-4 -mt-4 z-0"></div>
<div class="relative z-10">
<span class="block text-4xl font-black text-text-main dark:text-white mb-1 group-hover:text-secondary transition-colors">7+</span>
<span class="text-[10px] font-bold text-text-sub dark:text-gray-400 uppercase tracking-wider block">Năm Kinh nghiệm</span>
</div>
</div>
<div class="p-4 rounded-2xl bg-white dark:bg-gray-800 shadow-lg shadow-gray-100 dark:shadow-none border border-gray-100 dark:border-gray-700 relative overflow-hidden group hover:-translate-y-1 transition-transform">
<div class="absolute right-0 top-0 w-16 h-16 bg-orange-50 dark:bg-orange-900/20 rounded-bl-full -mr-4 -mt-4 z-0"></div>
<div class="relative z-10">
<span class="block text-4xl font-black text-text-main dark:text-white mb-1 group-hover:text-primary transition-colors">100+</span>
<span class="text-[10px] font-bold text-text-sub dark:text-gray-400 uppercase tracking-wider block">Học viên thành công</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="lg:w-[42%] flex flex-col gap-5">
<div class="bg-accent-red dark:bg-red-900 rounded-[2rem] p-6 shadow-xl border border-red-500 dark:border-red-800 relative overflow-hidden group">
<div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
<div class="absolute bottom-0 left-0 w-32 h-32 bg-black/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
<div class="relative z-10">
<h3 class="text-2xl font-black text-white uppercase mb-5 text-center tracking-tight">Các khóa đào tạo</h3>
<div class="grid gap-3">
<div class="flex items-center gap-3 bg-white/12 dark:bg-black/20 p-3 rounded-2xl backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all cursor-default">
<div class="w-11 h-11 rounded-xl bg-white text-accent-red flex items-center justify-center shrink-0 shadow-lg">
<span class="material-symbols-outlined text-xl">person_celebrate</span>
</div>
<div>
<span class="block text-base font-black text-white">Coaching 1-1</span>
<span class="block text-xs text-white/75 font-semibold">Kèm sát theo mô hình shop</span>
</div>
</div>
<div class="flex items-center gap-3 bg-white/12 dark:bg-black/20 p-3 rounded-2xl backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all cursor-default">
<div class="w-11 h-11 rounded-xl bg-white text-accent-red flex items-center justify-center shrink-0 shadow-lg">
<span class="material-symbols-outlined text-xl">diversity_3</span>
</div>
<div>
<span class="block text-base font-black text-white">Nhóm 3-10 người</span>
<span class="block text-xs text-white/75 font-semibold">Tương tác nhiều, tối ưu chi phí</span>
</div>
</div>
<div class="flex items-center gap-3 bg-white/12 dark:bg-black/20 p-3 rounded-2xl backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all cursor-default">
<div class="w-11 h-11 rounded-xl bg-white text-accent-red flex items-center justify-center shrink-0 shadow-lg">
<span class="material-symbols-outlined text-xl">play_lesson</span>
</div>
<div>
<span class="block text-base font-black text-white">Video online 24/7</span>
<span class="block text-xs text-white/75 font-semibold">Chủ động học lại trọn đời</span>
</div>
</div>
</div>
<div class="mt-5 pt-5 border-t border-white/20">
<p class="text-sm text-white/90 font-semibold leading-relaxed">
<span class="font-bold bg-white text-accent-red px-2 py-0.5 rounded text-xs uppercase mr-1">Lưu ý</span>
                    Nội dung học giống nhau, chỉ khác hình thức học để phù hợp thời gian và nhu cầu từng học viên.
                </p>
</div>
</div>
</div>
<div class="grid gap-4 md:grid-cols-2">
<div class="bg-gradient-to-br from-secondary to-blue-800 text-white p-5 rounded-[2rem] shadow-xl relative overflow-hidden group transition-all hover:-translate-y-1">
<div class="absolute right-0 bottom-0 opacity-10 transform translate-x-1/4 translate-y-1/4 group-hover:scale-110 transition-transform duration-500">
<span class="material-symbols-outlined text-[12rem]">apartment</span>
</div>
<div class="relative z-10 h-full flex flex-col justify-between">
<div>
<div class="w-12 h-12 rounded-2xl bg-white/20 flex items-center justify-center mb-5 backdrop-blur-sm">
<span class="material-symbols-outlined text-3xl">store</span>
</div>
<h4 class="text-lg font-black mb-3 uppercase">Hình thức offline</h4>
<p class="text-blue-100 text-sm leading-relaxed font-medium">Học trực tiếp tại văn phòng Hà Nội, được cầm tay chỉ việc và hỗ trợ sát trong buổi học.</p>
</div>
</div>
</div>
<div class="bg-white dark:bg-card-dark p-5 rounded-[2rem] shadow-lg border border-gray-100 dark:border-gray-700 relative overflow-hidden group transition-all hover:-translate-y-1 hover:border-purple-200">
<div class="absolute right-0 bottom-0 opacity-5 transform translate-x-1/4 translate-y-1/4 group-hover:scale-110 transition-transform duration-500">
<span class="material-symbols-outlined text-[12rem] text-purple-900 dark:text-purple-100">videocam</span>
</div>
<div class="relative z-10 h-full flex flex-col justify-between">
<div>
<div class="w-12 h-12 rounded-2xl bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 flex items-center justify-center mb-5">
<span class="material-symbols-outlined text-3xl">videocam</span>
</div>
<h4 class="text-lg font-black text-text-main dark:text-white mb-3 uppercase">Hình thức online</h4>
<p class="text-text-sub dark:text-gray-400 text-sm leading-relaxed">Học qua Zoom chất lượng cao, phù hợp học viên ở xa và có video để xem lại.</p>
</div>
</div>
</div>
</div>
<a class="inline-flex items-center justify-center gap-2 w-full rounded-2xl bg-primary px-6 py-4 text-white text-base font-black shadow-xl shadow-orange-500/20 hover:bg-primary-dark hover:-translate-y-1 transition-all" href="#xc-custom-form">
                    Đăng ký ngay <span class="material-symbols-outlined text-xl">arrow_downward</span>
                </a>
</div>
</div>
</div>
</section>
<section class="py-20 bg-background-light dark:bg-background-dark relative">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="bg-white dark:bg-card-dark rounded-[2.5rem] p-8 lg:p-12 shadow-xl border border-gray-100 dark:border-gray-700 relative overflow-hidden">
<div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
<div class="text-center mb-12 relative z-10">
<span class="text-primary font-bold tracking-widest uppercase text-sm mb-2 block">Giá trị mang lại</span>
<h2 class="text-3xl md:text-4xl font-black text-text-main dark:text-white uppercase">BẠN NHẬN ĐƯỢC GÌ SAU KHÓA HỌC</h2>
<div class="w-24 h-1.5 bg-gradient-to-r from-primary to-orange-400 mx-auto rounded-full mt-4"></div>
</div>
<div class="grid md:grid-cols-2 gap-8 lg:gap-x-16 lg:gap-y-10 relative z-10">
<div class="flex gap-4 items-start">
<div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-1">
<span class="material-symbols-outlined text-xl font-bold">check</span>
</div>
<div>
<p class="text-text-main dark:text-white font-medium leading-relaxed">
                                Dạy dễ hiểu, thực tế, thực chiến, gỡ rối cái mọi người đang cần, cập nhật sát với chính sách mới nhất của Shopee, không dạy kiến thức chung chung.
                             </p>
</div>
</div>
<div class="flex gap-4 items-start">
<div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-1">
<span class="material-symbols-outlined text-xl font-bold">check</span>
</div>
<div>
<p class="text-text-main dark:text-white font-medium leading-relaxed">
                                Cá nhân hóa theo mô hình từng học viên, đây là khoá COACHING, không cam kết doanh số hay ra đơn như nhiều nơi khác. Mục tiêu là giúp học viên hiểu bản chất có kiến thức để xây shop chuẩn, có tư duy đúng đi lâu dài.
                             </p>
</div>
</div>
<div class="flex gap-4 items-start">
<div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-1">
<span class="material-symbols-outlined text-xl font-bold">check</span>
</div>
<div>
<p class="text-text-main dark:text-white font-medium leading-relaxed">
                                Tham gia nhóm các chủ xưởng chủ shop cùng nhau bán hàng hiệu quả. Cộng đồng học viên hỗ trợ nhau bán hàng hiệu quả, cập nhật liên tục.
                             </p>
</div>
</div>
<div class="flex gap-4 items-start">
<div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-1">
<span class="material-symbols-outlined text-xl font-bold">check</span>
</div>
<div>
<p class="text-text-main dark:text-white font-medium leading-relaxed">
                                Hỗ trợ lâu dài khi làm bị quên bị vướng chưa làm được sau khóa học không phải học xong là xong. Bị vướng, chưa làm được, bên em vẫn hỗ trợ 1-1 để kèm lại.
                             </p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="py-24 bg-white dark:bg-card-dark relative">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-3xl mx-auto mb-20">
<span class="bg-primary/10 text-primary px-4 py-1.5 rounded-full text-sm font-bold uppercase tracking-wider mb-4 inline-block">Lộ trình 4 buổi</span>
<h2 class="text-4xl md:text-5xl font-black text-text-main dark:text-white mb-6">
                    NỘI DUNG ĐÀO TẠO CHUYÊN SÂU
                </h2>
<p class="text-lg text-text-sub dark:text-gray-400">Giáo trình được thiết kế bài bản, đi từ tư duy đến công cụ, đảm bảo học viên làm được ngay tại lớp.</p>
</div>
<div class="grid md:grid-cols-2 gap-8 lg:gap-12 relative">
<div class="hidden md:block absolute top-12 left-1/2 bottom-12 w-0.5 bg-gradient-to-b from-blue-200 via-purple-200 to-green-200 dark:from-blue-900 dark:via-purple-900 dark:to-green-900 -translate-x-1/2 rounded-full z-0"></div>
<div class="group relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-gray-100 dark:border-gray-700 hover:-translate-y-2 transition-all duration-300 z-10 md:mr-6">
<div class="absolute top-0 left-0 w-2 h-full bg-secondary rounded-l-3xl"></div>
<div class="flex items-start justify-between mb-6 pl-4">
<div>
<span class="inline-block px-3 py-1 bg-blue-100 text-secondary dark:bg-blue-900/30 dark:text-blue-300 rounded-lg text-xs font-black mb-2">BUỔI 1</span>
<h3 class="text-2xl font-bold text-text-main dark:text-white">Tổng quan &amp; Nghiên cứu</h3>
</div>
<div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/20 rounded-full flex items-center justify-center text-secondary dark:text-blue-400">
<span class="material-symbols-outlined text-2xl">travel_explore</span>
</div>
</div>
<ul class="space-y-4 mb-6 pl-4">
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-secondary text-lg shrink-0">check_circle</span>
                            Xác định mô hình kinh doanh, nghiên cứu thị trường, phân tích đối thủ cạnh tranh.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-secondary text-lg shrink-0">check_circle</span>
                            Tính toán chi phí, điểm hòa vốn &amp; lợi nhuận bằng AI.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-secondary text-lg shrink-0">check_circle</span>
                            Xác định 3 sản phẩm chiến lược theo từng giai đoạn phát triển.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-secondary text-lg shrink-0">check_circle</span>
                            Xây dựng thương hiệu, chân dung &amp; insight khách hàng mục tiêu.
                        </li>
</ul>
<div class="bg-gray-50 dark:bg-gray-700/30 p-4 rounded-xl border border-dashed border-gray-300 dark:border-gray-600 ml-4">
<p class="text-sm font-bold text-text-main dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-orange-500">fitness_center</span>
                            Thực hành: <span class="font-normal text-text-sub dark:text-gray-400">Biết bán sản phẩm nào - giá bao nhiêu - bán cho ai.</span>
</p>
</div>
</div>
<div class="group relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-gray-100 dark:border-gray-700 hover:-translate-y-2 transition-all duration-300 z-10 md:mt-16 md:ml-6">
<div class="absolute top-0 left-0 w-2 h-full bg-purple-500 rounded-l-3xl"></div>
<div class="flex items-start justify-between mb-6 pl-4">
<div>
<span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300 rounded-lg text-xs font-black mb-2">BUỔI 2</span>
<h3 class="text-2xl font-bold text-text-main dark:text-white">Xây Shop &amp; Ứng dụng AI</h3>
</div>
<div class="w-12 h-12 bg-purple-50 dark:bg-purple-900/20 rounded-full flex items-center justify-center text-purple-600 dark:text-purple-400">
<span class="material-symbols-outlined text-2xl">store_mall_directory</span>
</div>
</div>
<ul class="space-y-4 mb-6 pl-4">
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-purple-500 text-lg shrink-0">check_circle</span>
                            Quy trình đăng ký &amp; Thiết lập Shop chuẩn SEO.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-purple-500 text-lg shrink-0">check_circle</span>
                            Thực hành tối ưu tiêu đề, mô tả, hình ảnh chuẩn thuật toán hiển thị.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300 font-bold text-purple-600 dark:text-purple-400">
<span class="material-symbols-outlined text-lg shrink-0">auto_awesome</span>
                            Ứng dụng AI viết content &amp; thiết kế ảnh tự động 100%.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-purple-500 text-lg shrink-0">check_circle</span>
                            Trang trí Shop chuyên nghiệp tăng tỷ lệ chuyển đổi.
                        </li>
</ul>
<div class="bg-gray-50 dark:bg-gray-700/30 p-4 rounded-xl border border-dashed border-gray-300 dark:border-gray-600 ml-4">
<p class="text-sm font-bold text-text-main dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-orange-500">fitness_center</span>
                            Thực hành: <span class="font-normal text-text-sub dark:text-gray-400">Xây dựng 01 gian hàng chuẩn SEO tại lớp.</span>
</p>
</div>
</div>
<div class="group relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-gray-100 dark:border-gray-700 hover:-translate-y-2 transition-all duration-300 z-10 md:mr-6">
<div class="absolute top-0 left-0 w-2 h-full bg-orange-500 rounded-l-3xl"></div>
<div class="flex items-start justify-between mb-6 pl-4">
<div>
<span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-300 rounded-lg text-xs font-black mb-2">BUỔI 3</span>
<h3 class="text-2xl font-bold text-text-main dark:text-white">Vận hành - Chăm sóc Shop</h3>
</div>
<div class="w-12 h-12 bg-orange-50 dark:bg-orange-900/20 rounded-full flex items-center justify-center text-orange-600 dark:text-orange-400">
<span class="material-symbols-outlined text-2xl">settings_suggest</span>
</div>
</div>
<ul class="space-y-4 mb-6 pl-4">
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-orange-500 text-lg shrink-0">check_circle</span>
                            Công cụ Marketing nội sàn,  (Mã giảm giá, Flash Sale...). Xây dựng đa kênh ngoại sàn phù hợp.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-orange-500 text-lg shrink-0">check_circle</span>
                            Quy trình xử lý đơn &amp; đóng gói để giảm hoàn – tránh tạ shop.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-orange-500 text-lg shrink-0">check_circle</span>
                            CSKH chuẩn 5 sao, xử lý đánh giá xấu &amp; cách khiếu nại thành công.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-orange-500 text-lg shrink-0">check_circle</span>
                            Xử lý hoàn hàng nâng cao, khiếu nại THHT - tráo hàng.
                        </li>
</ul>
<div class="bg-gray-50 dark:bg-gray-700/30 p-4 rounded-xl border border-dashed border-gray-300 dark:border-gray-600 ml-4">
<p class="text-sm font-bold text-text-main dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-orange-500">fitness_center</span>
                            Thực hành: <span class="font-normal text-text-sub dark:text-gray-400">Xử lý tình huống hoàn hàng &amp; xây kịch bản khuyến mãi.</span>
</p>
</div>
</div>
<div class="group relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-gray-100 dark:border-gray-700 hover:-translate-y-2 transition-all duration-300 z-10 md:mt-16 md:ml-6">
<div class="absolute top-0 left-0 w-2 h-full bg-green-500 rounded-l-3xl"></div>
<div class="flex items-start justify-between mb-6 pl-4">
<div>
<span class="inline-block px-3 py-1 bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300 rounded-lg text-xs font-black mb-2">BUỔI 4</span>
<h3 class="text-2xl font-bold text-text-main dark:text-white">Quảng cáo Shopee - Tối ưu chi phí</h3>
</div>
<div class="w-12 h-12 bg-green-50 dark:bg-green-900/20 rounded-full flex items-center justify-center text-green-600 dark:text-green-400">
<span class="material-symbols-outlined text-2xl">campaign</span>
</div>
</div>
<ul class="space-y-4 mb-6 pl-4">
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-lg shrink-0">check_circle</span>
                            Tổng quan các hình thức quảng cáo Shopee.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-lg shrink-0">check_circle</span>
                            Chọn sản phẩm &amp; thiết lập Ads theo ngân sách thật.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-lg shrink-0">check_circle</span>
                            Đọc chỉ số CTR – CR – ROAS – ACOS – GMV.
                        </li>
<li class="flex gap-3 text-sm text-text-sub dark:text-gray-300">
<span class="material-symbols-outlined text-green-500 text-lg shrink-0">check_circle</span>
                            Tối ưu quảng cáo theo từng giai đoạn &amp; kế hoạch dài hạn.
                        </li>
</ul>
<div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-xl border border-dashed border-green-200 dark:border-green-700 ml-4">
<p class="text-sm font-bold text-green-800 dark:text-green-300 flex items-center gap-2">
<span class="material-symbols-outlined">school</span>
                            Thực hành: <span class="font-normal">Setup Ads &amp; phân tích báo cáo tối ưu.</span>
</p>
</div>
</div>
</div>
</div>
</section>
<section class="py-20 bg-background-light dark:bg-background-dark">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="bg-white dark:bg-card-dark rounded-[2rem] p-8 lg:p-14 shadow-lg border border-gray-100 dark:border-gray-700">
<div class="text-center mb-12">
<h3 class="text-3xl font-black text-text-main dark:text-white uppercase tracking-tight">CAM KẾT CHẤT LƯỢNG</h3>
<div class="w-20 h-1.5 bg-primary mx-auto rounded-full mt-4"></div>
</div>
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 divide-y sm:divide-y-0 sm:divide-x divide-gray-100 dark:divide-gray-700">
<div class="text-center px-4 pt-4 sm:pt-0">
<div class="w-16 h-16 mx-auto bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mb-5 shadow-sm">
<span class="material-symbols-outlined text-3xl">support_agent</span>
</div>
<h4 class="font-bold text-lg text-text-main dark:text-white mb-2">Support 1-1 Trọn đời</h4>
<p class="text-sm text-text-sub dark:text-gray-400">Giải đáp thắc mắc 24/7 ngay cả khi khóa học đã kết thúc.</p>
</div>
<div class="text-center px-4 pt-8 sm:pt-0">
<div class="w-16 h-16 mx-auto bg-blue-50 text-secondary rounded-2xl flex items-center justify-center mb-5 shadow-sm">
<span class="material-symbols-outlined text-3xl">update</span>
</div>
<h4 class="font-bold text-lg text-text-main dark:text-white mb-2">Update Kiến thức</h4>
<p class="text-sm text-text-sub dark:text-gray-400">Cập nhật liên tục thay đổi thuật toán và chính sách mới nhất.</p>
</div>
<div class="text-center px-4 pt-8 lg:pt-0">
<div class="w-16 h-16 mx-auto bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-5 shadow-sm">
<span class="material-symbols-outlined text-3xl">verified_user</span>
</div>
<h4 class="font-bold text-lg text-text-main dark:text-white mb-2">Cam kết Hoàn tiền</h4>
<p class="text-sm text-text-sub dark:text-gray-400">Hoàn 100% học phí nếu không hài lòng về chất lượng buổi 1.</p>
</div>
<div class="text-center px-4 pt-8 lg:pt-0">
<div class="w-16 h-16 mx-auto bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-5 shadow-sm">
<span class="material-symbols-outlined text-3xl">inventory_2</span>
</div>
<h4 class="font-bold text-lg text-text-main dark:text-white mb-2">Bộ Công cụ Ecom</h4>
<p class="text-sm text-text-sub dark:text-gray-400">Tặng tài khoản dùng thử các phần mềm hỗ trợ bán hàng &amp; tài nguyên.</p>
</div>
</div>
</div>
</div>
</section>
<section class="py-20 bg-white dark:bg-card-dark">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
<div class="max-w-2xl">
<span class="text-primary font-bold tracking-widest uppercase text-sm mb-2 block">Thư viện ảnh</span>
<h2 class="text-3xl font-black text-text-main dark:text-white mb-4">
                        HÌNH ẢNH HỌC VIÊN
                    </h2>
<p class="text-text-sub dark:text-gray-400 text-lg">
                        Những khoảnh khắc học tập sôi nổi và kết quả thực tế của các học viên sau khi tham gia khóa học tại MEXO GROUP.
                    </p>
</div>
<a class="hidden md:flex items-center gap-2 text-primary font-bold hover:gap-3 transition-all px-4 py-2 rounded-lg hover:bg-primary/5" href="#">
                    Xem tất cả <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="group relative overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-800 aspect-[4/3] shadow-md hover:shadow-2xl transition-all duration-500 cursor-pointer">
<div class="absolute inset-0 flex items-center justify-center text-gray-300 group-hover:scale-110 transition-transform duration-700 bg-gray-200 dark:bg-gray-700">
<span class="material-symbols-outlined text-5xl opacity-50">image</span>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
<div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
<p class="text-white text-base font-bold">Lớp học Offline Hà Nội</p>
<p class="text-gray-300 text-xs mt-1">Sôi nổi và nhiệt huyết</p>
</div>
</div>
</div>
<div class="group relative overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-800 aspect-[4/3] shadow-md hover:shadow-2xl transition-all duration-500 cursor-pointer">
<div class="absolute inset-0 flex items-center justify-center text-gray-300 group-hover:scale-110 transition-transform duration-700 bg-gray-200 dark:bg-gray-700">
<span class="material-symbols-outlined text-5xl opacity-50">image</span>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
<div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
<p class="text-white text-base font-bold">Hỗ trợ 1-1 tại lớp</p>
<p class="text-gray-300 text-xs mt-1">Cầm tay chỉ việc tận tình</p>
</div>
</div>
</div>
<div class="group relative overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-800 aspect-[4/3] shadow-md hover:shadow-2xl transition-all duration-500 cursor-pointer">
<div class="absolute inset-0 flex items-center justify-center text-gray-300 group-hover:scale-110 transition-transform duration-700 bg-gray-200 dark:bg-gray-700">
<span class="material-symbols-outlined text-5xl opacity-50">image</span>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
<div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
<p class="text-white text-base font-bold">Thực hành Livestream</p>
<p class="text-gray-300 text-xs mt-1">Setup bối cảnh thực tế</p>
</div>
</div>
</div>
<div class="group relative overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-800 aspect-[4/3] shadow-md hover:shadow-2xl transition-all duration-500 cursor-pointer">
<div class="absolute inset-0 flex items-center justify-center text-gray-300 group-hover:scale-110 transition-transform duration-700 bg-gray-200 dark:bg-gray-700">
<span class="material-symbols-outlined text-5xl opacity-50">image</span>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
<div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
<p class="text-white text-base font-bold">Trao chứng chỉ</p>
<p class="text-gray-300 text-xs mt-1">Hoàn thành khóa học xuất sắc</p>
</div>
</div>
</div>
</div>
<div class="mt-8 text-center md:hidden">
<a class="inline-flex items-center gap-2 text-primary font-bold" href="#">
                    Xem tất cả hình ảnh <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
</div>
</section>
<section class="py-24 px-4 bg-background-light dark:bg-background-dark">
<div class="mx-auto max-w-7xl relative">
<div class="absolute -inset-4 bg-gradient-to-r from-secondary to-primary opacity-30 blur-3xl rounded-[3rem] -z-10 animate-pulse"></div>
<div class="bg-white dark:bg-gray-900 rounded-[3rem] overflow-hidden shadow-2xl relative border border-white/20">
<div class="absolute top-0 right-0 w-96 h-96 bg-primary/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
<div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
<div class="grid lg:grid-cols-2">
<div class="p-10 lg:p-20 flex flex-col justify-center relative z-10">
<div class="inline-flex items-center gap-2 mb-6">
<span class="text-secondary font-bold tracking-widest uppercase text-sm block">TƯ DUY &amp; GIẢI PHÁP TĂNG TRƯỞNG THỰC CHIẾN SHOPEE</span>
</div>
<h2 class="text-4xl md:text-5xl font-black text-text-main dark:text-white leading-tight mb-6">
                            Đồng hành cùng<br/>
<span class="text-secondary">sự phát triển của bạn</span>
</h2>
<p class="text-lg text-text-sub dark:text-gray-300 mb-10 leading-relaxed font-medium">
                            Điền thông tin để kết nối với chuyên gia của MEXO GROUP. Chúng tôi cung cấp kiến thức chuyên sâu, bộ công cụ tối ưu và tư duy vận hành chuẩn giúp bạn tự tin làm chủ gian hàng Shopee và bứt phá doanh số bền vững.
                        </p>
<div class="space-y-6">
<div class="bg-blue-50 dark:bg-blue-900/10 p-6 rounded-2xl border border-blue-100 dark:border-blue-800">
<h4 class="font-bold text-lg text-secondary mb-4 flex items-center gap-2">
<span class="material-symbols-outlined icon-filled">star</span>
            Đặc quyền khi hợp tác
        </h4>
<div class="space-y-4">
<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center text-secondary shadow-sm shrink-0">
<span class="material-symbols-outlined text-xl icon-filled">verified_user</span>
</div>
<div>
<h5 class="font-bold text-text-main dark:text-white text-sm">Bảo mật thông tin 100%</h5>
<p class="text-xs text-text-sub dark:text-gray-400 mt-0.5">Dữ liệu và chiến lược kinh doanh được cam kết bảo mật tuyệt đối.</p>
</div>
</div>
<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center text-green-500 shadow-sm shrink-0">
<span class="material-symbols-outlined text-xl icon-filled">bolt</span>
</div>
<div>
<h5 class="font-bold text-text-main dark:text-white text-sm">Tư vấn nhanh chóng</h5>
<p class="text-xs text-text-sub dark:text-gray-400 mt-0.5">Đội ngũ chuyên gia phản hồi và đề xuất giải pháp trong 24h.</p>
</div>
</div>
<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center text-purple-500 shadow-sm shrink-0">
<span class="material-symbols-outlined text-xl icon-filled">monitoring</span>
</div>
<div>
<h5 class="font-bold text-text-main dark:text-white text-sm">Hiệu quả thực tế</h5>
<p class="text-xs text-text-sub dark:text-gray-400 mt-0.5">Cam kết tăng trưởng dựa trên KPIs rõ ràng và minh bạch.</p>
</div>
</div>
<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center text-orange-500 shadow-sm shrink-0">
<span class="material-symbols-outlined text-xl icon-filled">group_add</span>
</div>
<div>
<h5 class="font-bold text-text-main dark:text-white text-sm">Đồng hành dài hạn</h5>
<p class="text-xs text-text-sub dark:text-gray-400 mt-0.5">Hỗ trợ 1-1 trong suốt quá trình triển khai và vận hành.</p>
</div>
</div>
</div>
</div>
<div class="relative overflow-hidden rounded-2xl">
<div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent z-10"></div>
<img alt="Consulting Team" class="w-full h-48 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDquTcdCH0rJFJayPpprMLQg_hQEigplYTFi2XUpFTpQRVbScE9ygJuWhpAan9dZAw3YC2XIV3TjxvIVvCVxqWgvJHToGYb0JIJJUmIuEh5lFPxDzgOyLT1HvRXg16M2qJIf0CONuyuDgGkoicDNxNnWnY0_oGjIazdOxRtfRfj3aeG_cBivnjZZIcM0ymz_yVHnHIfQN_SUsk_VYZK3fSLElK11QFwML6olPDkP5PNf0wNydZ5qLqoO6wh9xqCCyYh4l-lRDv2UFEY"/>
<div class="absolute bottom-4 left-4 z-20 text-white">
<div class="flex gap-1 text-yellow-400 mb-1">
<span class="material-symbols-outlined text-sm icon-filled">star</span>
<span class="material-symbols-outlined text-sm icon-filled">star</span>
<span class="material-symbols-outlined text-sm icon-filled">star</span>
<span class="material-symbols-outlined text-sm icon-filled">star</span>
<span class="material-symbols-outlined text-sm icon-filled">star</span>
</div>
<p class="text-sm font-medium">"Giải pháp của MEXO giúp chúng tôi tối ưu 40% chi phí vận hành chỉ trong quý đầu tiên."</p>
</div>
</div>
</div>
</div>
<div class="bg-white dark:bg-card-dark p-8 lg:p-12 border-t lg:border-t-0 lg:border-l border-gray-100 dark:border-gray-700 backdrop-blur-sm">
<div class="w-full h-full flex flex-col justify-center">
<div class="mb-8">
<h3 class="font-bold text-xl text-text-main dark:text-white flex items-center gap-2 mb-6">
<div class="w-8 h-8 rounded-full bg-blue-100 text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-lg icon-filled">person</span>
</div>
            Thông tin liên hệ
        </h3>
<form id="xc-custom-form" class="space-y-5">
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<div>
<label class="text-sm font-medium text-text-sub dark:text-gray-300 mb-1 block" for="name">Họ và tên <span class="text-red-500">*</span></label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">badge</span>
</div>
<input name="fullname" class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all text-sm" id="name" placeholder="Nhập họ tên của bạn" required="" type="text"/>
</div>
</div>
<div>
<label class="text-sm font-medium text-text-sub dark:text-gray-300 mb-1 block" for="phone">Số điện thoại <span class="text-red-500">*</span></label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">call</span>
</div>
<input name="phone" class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all text-sm" id="phone" placeholder="Nhập SĐT liên hệ" required="" type="tel"/>
</div>
</div>
</div>
<div>
<label class="text-sm font-medium text-text-sub dark:text-gray-300 mb-1 block" for="email">Email công việc <span class="text-red-500">*</span></label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">mail</span>
</div>
<input name="email" class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all text-sm" id="email" placeholder="name@company.com" required="" type="email"/>
</div>
</div>
<h3 class="font-bold text-xl text-text-main dark:text-white flex items-center gap-2 pt-6 mb-2">
<div class="w-8 h-8 rounded-full bg-blue-100 text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-lg icon-filled">store</span>
</div>
                Thông tin doanh nghiệp
            </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<div>
<label class="text-sm font-medium text-text-sub dark:text-gray-300 mb-1 block">Mô hình kinh doanh</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">category</span>
</div>
<select name="business_model" class="w-full pl-10 pr-8 py-3 rounded-xl border border-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all appearance-none text-sm bg-none">
<option value="">Chọn mô hình</option>
<option value="Doanh nghiệp B2B">Doanh nghiệp B2B</option>
<option value="Doanh nghiệp B2C">Doanh nghiệp B2C</option>
<option value="Hộ kinh doanh cá thể">Hộ kinh doanh cá thể</option>
<option value="Khác">Khác</option>
</select>
<div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">expand_more</span>
</div>
</div>
</div>
<div>
<label class="text-sm font-medium text-text-sub dark:text-gray-300 mb-1 block">Ngành hàng</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">shopping_bag</span>
</div>
<input name="industry" class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all text-sm" placeholder="VD: Thời trang, Mỹ phẩm..." type="text"/>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
<div>
<label class="text-sm font-medium text-text-sub dark:text-gray-300 mb-1 block">Nền tảng quan tâm</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">layers</span>
</div>
<select name="platform" class="w-full pl-10 pr-8 py-3 rounded-xl border border-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all appearance-none text-sm bg-none">
<option value="">Chọn nền tảng</option>
<option value="Shopee">Shopee</option>
<option value="TikTok Shop">TikTok Shop</option>
<option value="Lazada">Lazada</option>
<option value="Đa kênh">Đa kênh</option>
</select>
<div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">expand_more</span>
</div>
</div>
</div>
<div>
<label class="text-sm font-medium text-text-sub dark:text-gray-300 mb-1 block">Ngân sách Marketing / tháng</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">attach_money</span>
</div>
<select name="budget" class="w-full pl-10 pr-8 py-3 rounded-xl border border-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-secondary focus:border-transparent outline-none transition-all appearance-none text-sm bg-none">
<option value="">Chọn mức ngân sách</option>
<option value="Dưới 10 triệu">Dưới 10 triệu</option>
<option value="10 - 50 triệu">10 - 50 triệu</option>
<option value="50 - 100 triệu">50 - 100 triệu</option>
<option value="Trên 100 triệu">Trên 100 triệu</option>
</select>
<div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-400">
<span class="material-symbols-outlined text-lg">expand_more</span>
</div>
</div>
</div>
</div>
<h3 class="font-bold text-xl text-text-main dark:text-white flex items-center gap-2 pt-6 mb-2">
<div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
<span class="material-symbols-outlined text-lg icon-filled">rocket_launch</span>
</div>
                Mục tiêu hỗ trợ
            </h3>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<label class="flex items-start gap-3 p-3 border border-gray-200 dark:border-gray-700 rounded-xl cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
<input name="goals[]" value="Tư vấn chiến lược" class="w-5 h-5 rounded border-gray-300 text-secondary focus:ring-secondary mt-0.5" type="checkbox"/>
<div>
<span class="block font-bold text-sm text-text-main dark:text-white">Tư vấn chiến lược</span>
<span class="block text-xs text-text-sub dark:text-gray-400">Phân tích &amp; lập kế hoạch</span>
</div>
</label>
<label class="flex items-start gap-3 p-3 border border-gray-200 dark:border-gray-700 rounded-xl cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
<input name="goals[]" value="Setup & Vận hành" class="w-5 h-5 rounded border-gray-300 text-secondary focus:ring-secondary mt-0.5" type="checkbox"/>
<div>
<span class="block font-bold text-sm text-text-main dark:text-white">Setup &amp; Vận hành</span>
<span class="block text-xs text-text-sub dark:text-gray-400">Xây dựng gian hàng chuẩn SEO</span>
</div>
</label>
<label class="flex items-start gap-3 p-3 border border-gray-200 dark:border-gray-700 rounded-xl cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
<input name="goals[]" value="Quảng cáo (Ads)" class="w-5 h-5 rounded border-gray-300 text-secondary focus:ring-secondary mt-0.5" type="checkbox"/>
<div>
<span class="block font-bold text-sm text-text-main dark:text-white">Quảng cáo (Ads)</span>
<span class="block text-xs text-text-sub dark:text-gray-400">Tối ưu chi phí &amp; tăng chuyển đổi</span>
</div>
</label>
<label class="flex items-start gap-3 p-3 border border-gray-200 dark:border-gray-700 rounded-xl cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
<input name="goals[]" value="Booking & Media" class="w-5 h-5 rounded border-gray-300 text-secondary focus:ring-secondary mt-0.5" type="checkbox"/>
<div>
<span class="block font-bold text-sm text-text-main dark:text-white">Booking &amp; Media</span>
<span class="block text-xs text-text-sub dark:text-gray-400">KOLs/KOCs &amp; Livestream</span>
</div>
</label>
<label class="flex items-start gap-3 p-3 border border-gray-200 dark:border-gray-700 rounded-xl cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
<input name="goals[]" value="Đào tạo nhân sự" class="w-5 h-5 rounded border-gray-300 text-secondary focus:ring-secondary mt-0.5" type="checkbox"/>
<div>
<span class="block font-bold text-sm text-text-main dark:text-white">Đào tạo nhân sự</span>
<span class="block text-xs text-text-sub dark:text-gray-400">Xây dựng đội ngũ in-house</span>
</div>
</label>
<label class="flex items-start gap-3 p-3 border border-gray-200 dark:border-gray-700 rounded-xl cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
<input name="goals[]" value="Khác" class="w-5 h-5 rounded border-gray-300 text-secondary focus:ring-secondary mt-0.5" type="checkbox"/>
<div>
<span class="block font-bold text-sm text-text-main dark:text-white">Khác</span>
<span class="block text-xs text-text-sub dark:text-gray-400">Nhu cầu cụ thể khác</span>
</div>
</label>
</div>
<button id="xc-submit-btn" class="w-full bg-secondary text-white font-bold py-4 px-6 rounded-xl hover:bg-secondary-dark transition-colors shadow-lg shadow-secondary/20 hover:-translate-y-0.5 text-lg flex items-center justify-center gap-2 mt-6" type="button">
                Nhận tư vấn miễn phí ngay
                <span class="material-symbols-outlined">arrow_forward</span>
</button>
</form>
<p class="text-xs text-center text-gray-400 mt-4">
            Bằng việc đăng ký, bạn đồng ý với <a class="underline hover:text-secondary" href="#">Điều khoản</a> và <a class="underline hover:text-secondary" href="#">Chính sách bảo mật</a> của chúng tôi.
        </p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<?php 
/* Hidden CF7 Form for submission handling */
echo '<div class="xc-hidden-cf7" style="display:none !important;">' . do_shortcode('[contact-form-7 id="e49f7e9" title="Form liên hệ"]') . '</div>';
?>

<!-- Custom Script to handle Form Submission -->
<script>
(function() {
    // Wait for DOM
    document.addEventListener('DOMContentLoaded', function() {
        const customSubmitBtn = document.getElementById('xc-submit-btn');
        const form = document.getElementById('xc-custom-form');

        if(customSubmitBtn && form) {
            // Clone button to ensure clean event listener
            const newBtn = customSubmitBtn.cloneNode(true);
            customSubmitBtn.parentNode.replaceChild(newBtn, customSubmitBtn);

            newBtn.addEventListener('click', function(e) {
                e.preventDefault();

                // 1. Collect Data
                // Note: We use querySelector with name attribute which we will add to the HTML inputs shortly
                const nameInput = form.querySelector('[name="fullname"]');
                const phoneInput = form.querySelector('[name="phone"]');
                const emailInput = form.querySelector('[name="email"]');
                
                const name = nameInput ? nameInput.value : '';
                const phone = phoneInput ? phoneInput.value : '';
                const email = emailInput ? emailInput.value : '';
                
                const modelInput = form.querySelector('[name="business_model"]');
                const model = modelInput ? modelInput.value : '';
                
                const industryInput = form.querySelector('[name="industry"]');
                const industry = industryInput ? industryInput.value : '';
                
                const platformInput = form.querySelector('[name="platform"]');
                const platform = platformInput ? platformInput.value : '';
                
                const budgetInput = form.querySelector('[name="budget"]');
                const budget = budgetInput ? budgetInput.value : '';
                
                let goals = [];
                form.querySelectorAll('input[name="goals[]"]:checked').forEach(function(checkbox) {
                    goals.push(checkbox.value);
                });

                // 2. Validate Required Fields
                if(!name || !phone || !email) {
                    alert('Vui lòng điền đầy đủ các thông tin bắt buộc (*): Họ tên, SĐT, Email');
                    return;
                }

                // 3. Populate Hidden CF7 Fields
                // Helper to set value safely
                const setVal = (fieldName, val) => {
                    const el = document.querySelector(`.xc-hidden-cf7 input[name="${fieldName}"], .xc-hidden-cf7 textarea[name="${fieldName}"]`);
                    if(el) el.value = val;
                };

                setVal('your-name', name);
                setVal('your-phone', phone);
                setVal('your-email', email);
                // Map custom fields if your CF7 supports them, generic mapping below:
                setVal('business-model', model);
                setVal('industry', industry);
                setVal('platform', platform);
                setVal('budget', budget);
                setVal('goals', goals.join(', '));
                
                // 4. Submit
                const cf7Submit = document.querySelector('.xc-hidden-cf7 input[type="submit"]');
                
                if(cf7Submit) {
                    // UI Feedback
                    const originalText = newBtn.innerHTML;
                    newBtn.innerHTML = '<span class="flex items-center justify-center gap-2"><span class="animate-spin h-4 w-4 border-2 border-white rounded-full border-t-transparent"></span> Đang gửi...</span>';
                    newBtn.disabled = true;
                    newBtn.classList.add('opacity-75', 'cursor-not-allowed');

                    const cf7Form = document.querySelector('.xc-hidden-cf7 form');
                    if(cf7Form) {
                        const handleSuccess = function(event) {
                            newBtn.innerHTML = originalText;
                            newBtn.disabled = false;
                            newBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                            alert('Gửi thông tin thành công! Chúng tôi sẽ liên hệ lại sớm.');
                            form.reset();
                        };
                        const handleFail = function(event) {
                             newBtn.innerHTML = originalText;
                            newBtn.disabled = false;
                            newBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                            alert('Có lỗi xảy ra. Vui lòng thử lại sau.');
                        };

                        // CF7 custom events
                        cf7Form.addEventListener('wpcf7mailsent', handleSuccess, {once: true});
                        cf7Form.addEventListener('wpcf7invalid', handleFail, {once: true});
                        cf7Form.addEventListener('wpcf7spam', handleFail, {once: true});
                        cf7Form.addEventListener('wpcf7mailfailed', handleFail, {once: true});
                    }

                    // Trigger click
                    setTimeout(() => cf7Submit.click(), 100);
                } else {
                    alert('Lỗi: Không tìm thấy form gửi đi.');
                }
            });
        }
    });
})();
</script>

<?php get_footer(); ?>

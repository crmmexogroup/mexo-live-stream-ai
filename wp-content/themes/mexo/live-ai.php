<?php
/*
Template Name: Live Stream AI
*/
get_header(); ?>
<style>
        .service-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }.tab-button.active {
             border-color: var(--primary);
             color: var(--primary);
             background-color: var(--primary-light);}
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        :root {
            --primary-light: #e0edfe;}
        .dark .tab-button.active {
            background-color: #0d59f21a;}.material-symbols-outlined.icon-filled {
                                               font-variation-settings:
                                                   'FILL' 1,
                                                   'wght' 400,
                                                   'GRAD' 0,
                                                   'opsz' 24
                                           }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
    </style>
<section class="mexo-service-hero relative overflow-hidden pt-24 pb-16 lg:pt-28 lg:pb-24 bg-gradient-to-b from-orange-50/80 to-white dark:from-background-dark dark:to-background-dark">
<div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center relative z-10">
<div class="mexo-hero-pill inline-flex w-fit items-center rounded-full bg-orange-100 border border-orange-200 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-orange-600 dark:bg-orange-900/30 dark:border-orange-800 dark:text-orange-400 shadow-sm mb-6">
<span class="relative flex h-2.5 w-2.5 mr-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-orange-500"></span>
</span>
                    Giải pháp Bán hàng Tự động
                </div>
<h1 class="text-4xl font-black leading-tight tracking-tight text-text-main dark:text-white sm:text-5xl lg:text-6xl mb-6">
                    Bứt Phá Doanh Thu <br/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">Cùng Livestream Tự Động 24/7</span>
</h1>
<p class="text-lg text-text-sub dark:text-gray-400 max-w-2xl leading-relaxed mx-auto mb-8">
                    Giải pháp livestream thông minh giúp gian hàng của bạn hoạt động bền bỉ 24/24. Tăng trưởng doanh thu bền vững, tiếp cận khách hàng tự nhiên và tối ưu chi phí vận hành xuống mức thấp nhất.
                </p>
<div class="grid grid-cols-3 gap-6 py-6 my-4 border-y border-orange-100 dark:border-gray-800 w-full max-w-2xl">
<div class="group flex flex-col items-center gap-2">
<div class="flex items-center justify-center gap-2">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400">
<span class="material-symbols-outlined">schedule</span>
</div>
<span class="text-2xl font-black text-text-main dark:text-white">24/7</span>
</div>
<p class="text-sm text-text-sub dark:text-gray-400 font-medium">Live không mệt mỏi</p>
</div>
<div class="group flex flex-col items-center gap-2">
<div class="flex items-center justify-center gap-2">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-green-50 text-green-600 dark:bg-green-900/20 dark:text-green-400">
<span class="material-symbols-outlined">savings</span>
</div>
<span class="text-2xl font-black text-text-main dark:text-white">95%</span>
</div>
<p class="text-sm text-text-sub dark:text-gray-400 font-medium">Tiết kiệm chi phí</p>
</div>
<div class="group flex flex-col items-center gap-2">
<div class="flex items-center justify-center gap-2">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-purple-50 text-purple-600 dark:bg-purple-900/20 dark:text-purple-400">
<span class="material-symbols-outlined">forum</span>
</div>
<span class="text-2xl font-black text-text-main dark:text-white">Real</span>
</div>
<p class="text-sm text-text-sub dark:text-gray-400 font-medium">Tương tác tự động</p>
</div>
</div>
<div class="flex flex-col sm:flex-row gap-4 pt-4 justify-center">
<a class="flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-orange-500 to-red-600 px-8 py-4 text-base font-bold text-white shadow-lg shadow-orange-500/25 hover:shadow-orange-500/40 hover:-translate-y-0.5 transition-all" href="#register-section">
                        Đăng ký tư vấn ngay
                        <span class="material-symbols-outlined text-xl">arrow_forward</span>
</a>
<a class="flex items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white px-8 py-4 text-base font-bold text-text-main shadow-sm hover:bg-gray-50 hover:border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 transition-all" href="#demo">
                        Trải nghiệm demo AI
                    </a>
</div>
</div>
</section>
<section class="mexo-features py-20 bg-white dark:bg-background-dark border-t border-orange-100 dark:border-gray-800">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-3xl mx-auto mb-16">
<h2 class="text-3xl font-black text-text-main dark:text-white sm:text-4xl">
                    Tại Sao Nên Chọn <span class="text-orange-500">Livestream AI</span> Của MEXO?
                </h2>
<p class="mt-4 text-lg text-text-sub dark:text-gray-400">
                    Giải pháp tối ưu hóa doanh số và nguồn lực cho các chủ shop kinh doanh online hiện đại.
                </p>
</div>
<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
<div class="service-card flex flex-col p-6 rounded-2xl bg-orange-50/50 border border-orange-100 dark:bg-gray-800/50 dark:border-gray-700">
<div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-500 text-white mb-6 shadow-md shadow-orange-500/20">
<span class="material-symbols-outlined text-2xl">schedule</span>
</div>
<h3 class="text-xl font-bold text-text-main dark:text-white mb-2">Vận Hành 24/7</h3>
<p class="text-text-sub dark:text-gray-400 text-sm leading-relaxed">
                    Livestream liên tục không ngừng nghỉ, tiếp cận khách hàng ở mọi khung giờ vàng mà không phụ thuộc vào sức khỏe con người.
                </p>
</div>
<div class="service-card flex flex-col p-6 rounded-2xl bg-orange-50/50 border border-orange-100 dark:bg-gray-800/50 dark:border-gray-700">
<div class="flex h-12 w-12 items-center justify-center rounded-xl bg-red-500 text-white mb-6 shadow-md shadow-red-500/20">
<span class="material-symbols-outlined text-2xl">attach_money</span>
</div>
<h3 class="text-xl font-bold text-text-main dark:text-white mb-2">Tối Ưu Chi Phí</h3>
<p class="text-text-sub dark:text-gray-400 text-sm leading-relaxed">
                    Cắt giảm tới 95% chi phí thuê Streamer, thiết bị phòng live đắt đỏ, nhân sự kỹ thuật và mặt bằng vận hành.
                </p>
</div>
<div class="service-card flex flex-col p-6 rounded-2xl bg-orange-50/50 border border-orange-100 dark:bg-gray-800/50 dark:border-gray-700">
<div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500 text-white mb-6 shadow-md shadow-blue-500/20">
<span class="material-symbols-outlined text-2xl">chat</span>
</div>
<h3 class="text-xl font-bold text-text-main dark:text-white mb-2">Tương Tác Thông Minh</h3>
<p class="text-text-sub dark:text-gray-400 text-sm leading-relaxed">
                    Hệ thống tự động đọc comment, trả lời thắc mắc của khách hàng theo kịch bản chuẩn xác và chốt đơn tức thì.
                </p>
</div>
<div class="service-card flex flex-col p-6 rounded-2xl bg-orange-50/50 border border-orange-100 dark:bg-gray-800/50 dark:border-gray-700">
<div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-500 text-white mb-6 shadow-md shadow-green-500/20">
<span class="material-symbols-outlined text-2xl">analytics</span>
</div>
<h3 class="text-xl font-bold text-text-main dark:text-white mb-2">Đa Dạng Nền Tảng</h3>
<p class="text-text-sub dark:text-gray-400 text-sm leading-relaxed">
                    Đồng bộ phát livestream trên Shopee, TikTok Shop, Facebook, Lazada giúp tăng tối đa độ phủ thương hiệu.
                </p>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>

<?php
/*
Template Name: Vận Hành
*/
get_header();
?>
<style>
        .service-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        .tab-button.active {
            border-color: var(--primary);
            color: var(--primary);
            background-color: var(--primary-light);
            font-weight: 700;
        }
        .tab-content {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
        .tab-content.active {
            display: block;
            opacity: 1;
            animation: fadeIn 0.5s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        :root {
            --primary-light: #e0edfe;
        }
        .dark .tab-button.active {
            background-color: #0d59f21a;
            color: #60a5fa;
            border-color: #0d59f2;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .gradient-text-shopee {
            background-image: linear-gradient(to right, #FF7043, #EE4D2D, #CC3B21);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .process-line {
            background-image: linear-gradient(to right, #E0E7FF, #E0E7FF 50%, #9DA6BD 50%, #9DA6BD);
            background-size: 200% 100%;
            transition: background-position 0.5s ease-in-out;
        }
        .process-line.active {
            background-position: -100% 0;
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        }
        .accordion-content.active {
            max-height: 1000px;padding-top: 1.5rem;padding-bottom: 1.5rem;}
        .mexo-case-carousel {
            position: relative;
            height: 32rem;
            min-height: 32rem;
        }
        .mexo-case-card {
            position: absolute;
            inset: 0;
            opacity: 0;
            transform: translateY(18px) scale(0.98);
            animation: mexoCaseRotate 30s infinite;
            pointer-events: none;
        }
        .mexo-case-card > .relative {
            height: 100%;
        }
        .mexo-case-card > .relative > .relative {
            height: 100%;
        }
        .mexo-case-card .grid.lg\:grid-cols-2 {
            min-height: 100%;
        }
        .mexo-case-card .grid.lg\:grid-cols-2 > .flex.flex-col {
            min-height: 100%;
            justify-content: center;
        }
        .mexo-case-card .grid.grid-cols-3 {
            padding-bottom: .25rem;
        }
        .mexo-case-shop-button {
            position: absolute;
            top: -3.5rem;
            left: 50%;
            z-index: 4;
            display: inline-flex;
            transform: translateX(-50%);
            align-items: center;
            justify-content: center;
            gap: .5rem;
            border-radius: 999px;
            border: 1px solid rgba(147,197,253,.45);
            background: rgba(15,23,42,.86);
            padding: .7rem 1.25rem;
            color: #fff;
            font-size: .9rem;
            font-weight: 800;
            box-shadow: 0 16px 42px rgba(59,130,246,.24);
            white-space: nowrap;
        }
        .mexo-case-shop-button:hover {
            background: rgba(37,99,235,.95);
            border-color: rgba(191,219,254,.75);
        }
        .mexo-case-card button {
            width: 100%;
        }
        .mexo-case-card button > span.block {
            width: 100%;
        }
        .mexo-case-card .relative.flex.items-center.justify-center {
            flex-direction: column;
        }
        .mexo-case-card:nth-child(2) {
            animation-delay: 6s;
        }
        .mexo-case-card:nth-child(3) {
            animation-delay: 12s;
        }
        .mexo-case-card:nth-child(4) {
            animation-delay: 18s;
        }
        .mexo-case-card:nth-child(5) {
            animation-delay: 24s;
        }
        .mexo-case-carousel:hover .mexo-case-card {
            animation-play-state: paused;
        }
        @keyframes mexoCaseRotate {
            0%, 16% {
                opacity: 1;
                transform: translateY(0) scale(1);
                z-index: 3;
                pointer-events: auto;
            }
            20%, 100% {
                opacity: 0;
                transform: translateY(-12px) scale(0.96);
                z-index: 1;
                pointer-events: none;
            }
        }
        @media (max-width: 1023px) {
            .mexo-case-carousel {
                height: 55rem;
                min-height: 55rem;
            }
            .mexo-case-shop-button {
                position: relative;
                top: auto;
                left: auto;
                transform: none;
                margin: 0 auto 1rem;
            }
        }
        @media (max-width: 640px) {
            .mexo-case-carousel {
                height: 64rem;
                min-height: 64rem;
            }
        }
        .mexo-case-lightbox {
            display: none;
            position: fixed !important;
            inset: 0 !important;
            z-index: 2147483647 !important;
            align-items: center;
            justify-content: center;
            padding: 4rem 1rem 1rem;
            background: rgba(2, 6, 23, 0.88);
            backdrop-filter: blur(10px);
        }
        .mexo-case-lightbox.is-open {
            display: flex !important;
        }
        .mexo-case-lightbox img {
            display: block;
            width: auto !important;
            height: auto !important;
            max-width: min(92vw, 1280px) !important;
            max-height: 78vh !important;
            object-fit: contain !important;
            border-radius: 1rem;
            border: 1px solid rgba(255,255,255,0.18);
            box-shadow: 0 30px 90px rgba(0,0,0,0.45);
        }
        .mexo-case-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            display: flex;
            width: 3rem;
            height: 3rem;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
            border: 1px solid rgba(255,255,255,0.25);
            background: rgba(15,23,42,0.88);
            color: #fff;
            transition: background .2s ease, transform .2s ease;
        }
        .mexo-case-close:hover {
            background: rgba(30,41,59,0.98);
            transform: scale(1.04);
        }
        .dark .mexo-van-hanh-price,
        .dark .mexo-van-hanh-process-link,
        .dark .mexo-van-hanh-policy-title {
            color: #fff !important;
            -webkit-text-fill-color: #fff !important;
        }
    </style>
<div class="text-text-main dark:text-white">


<section class="mexo-service-hero relative pt-8 pb-12 lg:pt-12 lg:pb-16 bg-gradient-to-br from-blue-50 to-purple-50 dark:from-background-dark dark:to-background-dark">
<div class="absolute inset-0 opacity-50 dark:opacity-10">
<div class="w-full h-full bg-cover bg-center" style="background-image: url('data:image/svg+xml;utf8,&lt;svg width=&quot;100%&quot; height=&quot;100%&quot; viewBox=&quot;0 0 1200 800&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;&lt;defs&gt;&lt;filter id=&quot;f1&quot; x=&quot;-20%&quot; y=&quot;-20%&quot; width=&quot;140%&quot; height=&quot;140%&quot;&gt;&lt;feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.8&quot; numOctaves=&quot;3&quot; seed=&quot;0&quot; result=&quot;noise&quot;/&gt;&lt;feDiffuseLighting in=&quot;noise&quot; lightingColor=&quot;#a0d9ff&quot; surfaceScale=&quot;5&quot;&gt;&lt;feDistantLight azimuth=&quot;235&quot; elevation=&quot;50&quot;/&gt;&lt;/feDiffuseLighting&gt;&lt;/filter&gt;&lt;/defs&gt;&lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#f0f8ff&quot;/&gt;&lt;rect width=&quot;100%&quot; height=&quot;100%&quot; filter=&quot;url(%23f1)&quot; opacity=&quot;0.2&quot; /&gt;&lt;/svg&gt;');"></div>
</div>
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
<div class="relative overflow-hidden rounded-[2.5rem] bg-white/90 backdrop-blur-xl border border-gray-100 dark:bg-card-dark dark:border-gray-800 shadow-xl ring-1 ring-white/10 p-6 sm:p-10 lg:p-14">
<div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/3 w-[800px] h-[800px] bg-red-400/10 blur-[100px] rounded-full pointer-events-none dark:bg-shopee-primary/20"></div>
<div class="absolute bottom-0 left-0 translate-y-1/3 -translate-x-1/3 w-[600px] h-[600px] bg-yellow-400/10 blur-[100px] rounded-full pointer-events-none dark:bg-yellow-500/10"></div>
<div class="relative z-10">
<div class="flex flex-col lg:flex-row items-center lg:items-start gap-12 lg:gap-20">
<div class="flex-1 space-y-6 text-center lg:text-left">
<div class="mexo-hero-pill inline-flex items-center gap-2 rounded-full bg-shopee-light px-4 py-2 text-sm font-bold text-shopee-primary border border-shopee-primary/30 shadow-md">
<span class="material-symbols-outlined text-sm text-shopee-dark fill-current">star</span>
<span>Dịch vụ Vận hành Gian hàng Shopee trọn gói</span>
</div>
<h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight tracking-tight text-text-main dark:text-white">
                            Vận Hành Gian Hàng Shopee Chuyên Nghiệp
</h1>
<p class="text-lg md:text-xl text-text-sub dark:text-gray-400 leading-relaxed max-w-2xl font-light mx-auto lg:mx-0">
                            Giải pháp vận hành giúp doanh nghiệp của bạn tối ưu chi phí, tăng trưởng doanh số và phát triển bền vững.
                        </p>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-4">
<div class="group bg-shopee-light/50 backdrop-blur-sm rounded-2xl p-5 border border-shopee-primary/20 hover:bg-shopee-light transition-all duration-300 dark:bg-shopee-primary/10 dark:border-shopee-primary/40">
<div class="flex items-center gap-3 mb-2">
<div class="p-2 rounded-lg bg-green-100 text-green-600 dark:bg-green-900/20 dark:text-green-400">
<span class="material-symbols-outlined text-2xl">trending_up</span>
</div>
<span class="text-3xl font-black text-text-main dark:text-white group-hover:scale-110 transition-transform origin-left">300%</span>
</div>
<p class="text-sm font-medium text-text-sub dark:text-gray-400">Tăng trưởng doanh thu trung bình</p>
</div>
<div class="group bg-shopee-light/50 backdrop-blur-sm rounded-2xl p-5 border border-shopee-primary/20 hover:bg-shopee-light transition-all duration-300 dark:bg-shopee-primary/10 dark:border-shopee-primary/40">
<div class="flex items-center gap-3 mb-2">
<div class="p-2 rounded-lg bg-yellow-100 text-yellow-600 dark:bg-yellow-900/20 dark:text-yellow-400">
<span class="material-symbols-outlined text-2xl">savings</span>
</div>
<span class="text-3xl font-black text-text-main dark:text-white group-hover:scale-110 transition-transform origin-left">&lt; 10%</span>
</div>
<p class="text-sm font-medium text-text-sub dark:text-gray-400">Tối ưu chi phí quảng cáo (CIR)</p>
</div>
<div class="group bg-shopee-light/50 backdrop-blur-sm rounded-2xl p-5 border border-shopee-primary/20 hover:bg-shopee-light transition-all duration-300 dark:bg-shopee-primary/10 dark:border-shopee-primary/40">
<div class="flex items-center gap-3 mb-2">
<div class="p-2 rounded-lg bg-blue-100 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400">
<span class="material-symbols-outlined text-2xl">group_add</span>
</div>
<span class="text-3xl font-black text-text-main dark:text-white group-hover:scale-110 transition-transform origin-left">7+ Năm</span>
</div>
<p class="text-sm font-medium text-text-sub dark:text-gray-400">Kinh nghiệm thực chiến</p>
</div>
</div>
<div class="flex flex-wrap gap-4 pt-6 justify-center lg:justify-start">
<a class="inline-flex items-center justify-center h-14 px-8 rounded-xl bg-shopee-primary text-white font-bold text-lg hover:bg-shopee-dark transition-all shadow-lg shadow-shopee-primary/30 hover:scale-105" href="#consultation">
                                Yêu cầu tư vấn ngay
                                <span class="material-symbols-outlined ml-2 text-xl">arrow_forward</span>
</a>
<a class="mexo-van-hanh-process-link inline-flex items-center justify-center h-14 px-8 rounded-xl border-2 border-shopee-primary/30 text-shopee-primary font-bold text-lg hover:bg-shopee-light transition-all backdrop-blur-sm hover:border-shopee-primary/50 dark:text-white dark:border-white/20 dark:hover:bg-white/10" href="#process">
                                Xem quy trình chi tiết
                            </a>
</div>
</div>
<div class="hidden lg:block w-1/3 relative">
<div class="relative z-10 w-full aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl border border-gray-200 dark:border-gray-700 transform rotate-3 hover:rotate-0 transition-all duration-500">
<img alt="Shopee Growth Dashboard" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBegtbQpsZBUL8qzgU-ysh6OHmIEmOSEsMMUHbL3xMVlvoC3ONbb02dZep4aPg-i6h-5nc_b1-ZXQkgCgWSFggKzwGXrt_LG4zslCA38nhH5IxQOuJ7vt2x0Vj3L5irMYzMimNVQrEr_GFHiVC4ZNP2IEzbhquTNY1QSLeuNo-jAmez8MsO8oIaEuPDEQyYn5tAH-FuzJMikTolGdPAL1OEUBeKfT7b0g6RyG4AYt0xKriXaen8IVbrJrXDvR87D-btrnS-3drRCUA"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6">
<div class="bg-white/90 backdrop-blur-md rounded-xl p-4 border border-gray-200 dark:bg-card-dark/80 dark:border-gray-700">
<div class="flex items-center gap-3 mb-2">
<span class="flex h-3 w-3 relative">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
</span>
<span class="text-sm font-bold text-text-main uppercase tracking-wider dark:text-white">Hiệu quả thực tế</span>
</div>
<p class="text-xs text-text-sub dark:text-gray-300">Dữ liệu tăng trưởng liên tục được cập nhật từ các gian hàng đối tác.</p>
</div>
</div>
</div>
<div class="absolute -top-6 -right-6 w-full h-full rounded-3xl border-2 border-dashed border-gray-300 -z-10 rotate-6 dark:border-gray-600"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="bg-white pb-12 dark:bg-background-dark border-t border-gray-100 dark:border-gray-800" id="services">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="flex flex-col gap-10 mt-12">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<div class="lg:col-span-5 space-y-6">
<div class="bg-red-50 dark:bg-red-900/10 rounded-2xl p-8 border border-red-100 dark:border-red-900/30 h-full">
<h4 class="text-xl font-bold text-red-600 dark:text-red-400 mb-6 flex items-center gap-2 uppercase">
<span class="material-symbols-outlined">warning</span>
                        VẤN ĐỀ NHIỀU SHOP ĐANG GẶP
                    </h4>
<ul class="space-y-4">
<li class="flex gap-3">
<span class="material-symbols-outlined text-red-400 flex-shrink-0">close</span>
<span class="text-text-main dark:text-gray-300">Không có nhân sự chuyên môn sâu về sàn TMĐT.</span>
</li>
<li class="flex gap-3">
<span class="material-symbols-outlined text-red-400 flex-shrink-0">close</span>
<span class="text-text-main dark:text-gray-300">Chi phí quảng cáo (Ads) cao nhưng không ra đơn (ROI thấp).</span>
</li>
<li class="flex gap-3">
<span class="material-symbols-outlined text-red-400 flex-shrink-0">close</span>
<span class="text-text-main dark:text-gray-300">Gian hàng thiếu chuyên nghiệp, tỉ lệ chuyển đổi thấp.</span>
</li>
<li class="flex gap-3">
<span class="material-symbols-outlined text-red-400 flex-shrink-0">close</span>
<span class="text-text-main dark:text-gray-300">Bị phạt sao quả tạ, khóa shop do vi phạm chính sách mà không rõ lý do.</span>
</li>
</ul>
</div>
</div>
<div class="lg:col-span-7 space-y-6">
<div class="bg-green-50 dark:bg-green-900/10 rounded-2xl p-8 border border-green-100 dark:border-green-900/30 h-full">
<h4 class="text-xl font-bold text-green-600 dark:text-green-400 mb-6 flex items-center gap-2 uppercase">
<span class="material-symbols-outlined">check_circle</span>
                        MEXO GROUP GIÚP SHOP BẠN ĐƯỢC GÌ?
                    </h4>
<div class="grid sm:grid-cols-2 gap-6">
<div>
<h5 class="font-bold text-text-main dark:text-white mb-2">Đội ngũ Expert</h5>
<p class="text-sm text-text-sub dark:text-gray-400">Team vận hành &gt;5 năm kinh nghiệm thực chiến đa ngành hàng.</p>
</div>
<div>
<h5 class="font-bold text-text-main dark:text-white mb-2">Tối ưu chi phí</h5>
<p class="text-sm text-text-sub dark:text-gray-400">Giảm thiểu chi phí nhân sự in-house, tối ưu ngân sách Ads.</p>
</div>
<div>
<h5 class="font-bold text-text-main dark:text-white mb-2">Quy trình chuẩn</h5>
<p class="text-sm text-text-sub dark:text-gray-400">Vận hành bài bản 11 bước, báo cáo minh bạch realtime.</p>
</div>
<div>
<h5 class="font-bold text-text-main dark:text-white mb-2">Cam kết KPI</h5>
<p class="text-sm text-text-sub dark:text-gray-400">Cam kết doanh số và tăng trưởng traffic rõ ràng trong hợp đồng.</p>
</div>
</div>
</div>
</div>
</div>
<div class="rounded-2xl border border-gray-100 dark:border-gray-800 p-8 bg-white dark:bg-card-dark shadow-sm">
<div class="text-center mb-8">
<h4 class="text-2xl font-bold text-text-main dark:text-white uppercase">Dành cho:</h4>
</div>
<div class="grid md:grid-cols-3 gap-6">
<div class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-transparent hover:border-primary/30 transition-all text-center">
<div class="mx-auto w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mb-4">
<span class="material-symbols-outlined">store</span>
</div>
<h5 class="font-bold text-lg mb-2 dark:text-white">Shop mới (Starters)</h5>
<p class="text-sm text-text-sub dark:text-gray-400">Doanh nghiệp mới bắt đầu tham gia sàn, cần xây dựng nền tảng chuẩn SEO từ đầu.</p>
</div>
<div class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-transparent hover:border-primary/30 transition-all text-center">
<div class="mx-auto w-12 h-12 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center mb-4">
<span class="material-symbols-outlined">trending_up</span>
</div>
<h5 class="font-bold text-lg mb-2 dark:text-white">Shop cần tăng trưởng</h5>
<p class="text-sm text-text-sub dark:text-gray-400">Đã vận hành nhưng doanh thu lẹt đẹt, cần tối ưu để bứt phá.</p>
</div>
<div class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-transparent hover:border-primary/30 transition-all text-center">
<div class="mx-auto w-12 h-12 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mb-4">
<span class="material-symbols-outlined">apartment</span>
</div>
<h5 class="font-bold text-lg mb-2 dark:text-white">Thương hiệu (Mall)</h5>
<p class="text-sm text-text-sub dark:text-gray-400">Các Brand lớn muốn chuyên nghiệp hóa hình ảnh và vận hành Shopee Mall.</p>
</div>
</div>
</div>
<div class="relative py-8 lg:py-16" id="process">
<div class="text-center mb-10">
<span class="text-shopee-primary font-bold tracking-wider uppercase text-sm">QUY TRÌNH LÀM VIỆC CHUYÊN NGHIỆP</span>
<h3 class="text-3xl font-bold mt-2 text-text-main dark:text-white uppercase">12 MODULE VẬN HÀNH SHOPEE THỰC CHIẾN - MEXO GROUP</h3>
<p class="text-text-sub dark:text-gray-400 mt-2">Hệ thống quản trị và vận hành toàn diện mọi điểm chạm trên Shopee</p>
</div>
<div class="relative max-w-3xl mx-auto">
<div class="absolute left-6 top-0 bottom-0 w-0.5 bg-gray-200 dark:bg-gray-700"></div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            01
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                NGHIÊN CỨU THỊ TRƯỜNG
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Định hướng chiến lược kinh doanh chuẩn xác dựa trên dữ liệu thị trường.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Nghiên cứu từ khóa &amp; Dung lượng thị trường.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Phân tích đối thủ cạnh tranh (Giá, USP, Traffic, MKT).</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Xây dựng bảng P&amp;L (Profit &amp; Loss) &amp; Roadmap.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">verified</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Giúp doanh nghiệp đi đúng hướng, tối ưu dòng tiền và giảm rủi ro.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            02
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                THIẾT LẬP GIAN HÀNG
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Thiết lập nền tảng kỹ thuật chuẩn SEO và vận hành không lỗi.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Khởi tạo &amp; Cấu hình gian hàng (Vận chuyển, Thanh toán).</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Đăng ký Shop Yêu Thích / Mall (nếu đủ điều kiện).</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Audit sức khỏe gian hàng (Sao quả tạ, Tỉ lệ phản hồi).</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">verified</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Đảm bảo gian hàng vận hành trơn tru, tăng độ uy tín với sàn.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            03
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                TRANG TRÍ XÂY DỰNG SHOP
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Nâng tầm hình ảnh thương hiệu, tối ưu trải nghiệm thị giác.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Thiết kế bộ nhận diện gian hàng (Banner PC/Mobile).</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Thiết kế khung ảnh sản phẩm, ảnh bìa &amp; Template mô tả.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Cập nhật giao diện theo mùa &amp; Campaign sàn.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">auto_graph</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Tăng tỉ lệ Click (CTR), giữ chân khách hàng và tỉ lệ chuyển đổi.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            04
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                NỘI DUNG &amp; TỐI ƯU SEO SẢN PHẨM
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Tối ưu hóa khả năng hiển thị tự nhiên (Organic Visibility).</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Tối ưu tiêu đề sản phẩm chuẩn SEO theo bộ từ khóa.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Viết mô tả chuẩn SEO rõ USP, đầy đủ thông số kỹ thuật & Hashtag.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Tư vấn hỗ trợ Seeding đánh giá 5 sao xây dựng uy tín sản phẩm.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">trending_up</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Giúp khách hàng dễ tìm thấy sản phẩm, tăng Traffic tự nhiên.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            05
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                CHIẾN LƯỢC GIÁ &amp; KHUYẾN MÃI
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Chiến lược giá cạnh tranh, tối đa hóa biên lợi nhuận.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Thiết lập ma trận giá: Giá niêm yết &amp; Giá bán lẻ.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Xây dựng phễu sản phẩm: Mồi - Chủ lực - Lợi nhuận.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Chiến lược định giá tâm lý &amp; Quản lý biên độ giảm giá.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">monetization_on</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Tăng khả năng cạnh tranh về giá mà vẫn đảm bảo lợi nhuận.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            06
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                CÔNG CỤ MARKETING SHOPEE
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Kích thích hành vi mua hàng, tăng giá trị đơn (AOV).</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Setup khuyến mãi: Voucher, Mua kèm deal sốc, Combo.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Tạo chương trình Flash Sale của Shop khung giờ vàng.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Game tương tác &amp; Livestream bán hàng cơ bản.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">shopping_cart</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Tối ưu GMV, khuyến khích khách mua nhiều hơn và quay lại.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            07
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                TỐI ƯU QUẢNG CÁO SHOPEE
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Tiếp cận đúng khách hàng mục tiêu, mở rộng doanh số.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Thiết lập quảng cáo tự động tối đa doanh thu.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Điều chỉnh ngân sách phù hợp theo từng chiến dịch.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Theo dõi &amp; Tối ưu chỉ số CPC, CTR, CR, ROAS/ACOS... hàng ngày.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">rocket_launch</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Tăng trưởng doanh thu nhanh, kiểm soát chi phí hiệu quả.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            08
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                LÀM VIỆC VỚI BD & KAM NGÀNH
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Bùng nổ doanh số trong các đợt Mega Sale của sàn.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Đề xuất &amp; đăng ký cổng khuyến mãi: Ngày đôi, Payday, Spike Day.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Đề xuất &amp; Booking slot Flash Sale hiển thị độc quyền.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Phối hợp với BD/KAM ngành, chuẩn bị tồn kho, nhân sự để tối đa hiệu quả Campaign.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">celebration</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Tận dụng Traffic khủng từ sàn, đạt đỉnh doanh thu ngắn hạn.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            09
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                CHĂM SÓC KHÁCH HÀNG
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Nâng cao trải nghiệm khách hàng, gia tăng tỉ lệ chốt đơn.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Trực Chat 24/7, phản hồi nhanh dưới 15 phút.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Kịch bản tư vấn chốt sales &amp; Xử lý khiếu nại chuyên nghiệp.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Chăm sóc sau bán (Post-purchase), gửi tin nhắn CRM.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">thumb_up</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Tăng tỉ lệ chuyển đổi, nhận đánh giá 5 sao và khách trung thành.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            10
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                KÉO TRAFFIC NGOÀI SÀN
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Đa dạng hóa nguồn Traffic, giảm phụ thuộc vào sàn.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Kéo Traffic từ Social (Facebook CPAS, TikTok, Youtube).</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Booking KOL/KOC &amp; Chiến dịch Affiliate Marketing.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Xây dựng cộng đồng khách hàng để nuôi dưỡng tệp fan.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">public</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Mở rộng phễu khách hàng tiềm năng, tăng nhận diện thương hiệu.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative mb-8 group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            11
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                VẬN HÀNH &amp; XỬ LÝ ĐƠN HÀNG
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Vận hành kho vận chính xác, tối ưu chi phí hậu cần.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Quản lý &amp; Đồng bộ tồn kho đa kênh.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Quy trình xử lý đơn hàng, đóng gói chuẩn &amp; bàn giao.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Đối soát công nợ, dòng tiền &amp; Xử lý hoàn/hủy.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">check_circle</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Giảm tỉ lệ hoàn hàng, thất thoát và kiểm soát dòng tiền tốt.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="relative group accord-item">
<div class="flex items-start">
<button class="flex-shrink-0 size-12 flex items-center justify-center rounded-full bg-shopee-primary text-white font-bold text-xl shadow-lg border-2 border-white dark:border-background-dark transition-all duration-300 group-hover:scale-110 relative z-10 accord-trigger">
                            12
                        </button>
<div class="ml-6 flex-1 bg-white dark:bg-card-dark rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm transition-all duration-300 group-hover:shadow-xl group-hover:border-shopee-primary/50">
<h5 class="mb-4 min-h-[1.5rem] text-xl font-bold uppercase text-text-main dark:text-white flex justify-between items-center accord-header">
                                BÁO CÁO HIỆU SUẤT &amp; CHIẾN LƯỢC TĂNG TRƯỞNG
                                <span class="material-symbols-outlined text-shopee-primary accord-icon transition-transform">expand_more</span>
</h5>
<div class="accordion-content">
<div class="space-y-5">
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-primary dark:bg-blue-900/40">M</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Mục tiêu</span>
</div>
<p class="text-sm leading-relaxed text-text-main dark:text-gray-300">Quản trị doanh nghiệp dựa trên dữ liệu thực tế.</p>
</div>
<div>
<div class="mb-2 flex items-center gap-2">
<span class="flex size-6 items-center justify-center rounded-full bg-orange-100 text-xs font-bold text-orange-600 dark:bg-orange-900/40">H</span>
<span class="text-xs font-bold uppercase tracking-wider text-text-sub dark:text-gray-400">Hoạt động</span>
</div>
<ul class="space-y-2 text-sm text-text-main dark:text-gray-300">
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Báo cáo hiệu quả kinh doanh (Weekly/Monthly Dashboard).</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Phân tích hành vi khách hàng &amp; Xu hướng thị trường.</span>
</li>
<li class="flex items-start gap-2.5">
<span class="material-symbols-outlined mt-0.5 text-base text-primary">check_small</span>
<span>Đề xuất chiến lược cải tiến &amp; Kế hoạch Scale-up.</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 rounded-xl bg-green-50 p-4 dark:bg-green-900/10">
<div class="flex gap-3">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">insights</span>
<p class="text-sm font-semibold text-green-700 dark:text-green-300">Tăng trưởng bền vững, minh bạch hiệu quả và tối ưu lợi nhuận.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="scroll-mt-24" id="packages">
<div class="text-center mb-10 pt-16">
<h3 class="text-3xl font-bold text-text-main dark:text-white uppercase">Bảng Giá Dịch Vụ Vận Hành Shopee</h3>
<p class="text-text-sub dark:text-gray-400 mt-2">Đồng hành cùng doanh nghiệp bứt phá doanh thu</p>
</div>
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
<div class="rounded-2xl border-2 border-primary bg-white dark:bg-card-dark p-8 md:p-10 flex flex-col md:flex-row gap-8 shadow-2xl relative overflow-hidden group items-stretch" id="consultation">
<div class="absolute top-0 right-0 left-0 bg-primary text-white text-xs font-bold text-center py-1.5 uppercase tracking-wide z-20">Gói Dịch Vụ Duy Nhất</div>
<div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity z-10">
<span class="material-symbols-outlined text-9xl">diamond</span>
</div>
<div class="w-full md:w-5/12 flex flex-col items-center justify-center text-center border-b md:border-b-0 md:border-r border-gray-100 dark:border-gray-700 pb-6 md:pb-0 md:pr-8">
<div class="mb-4 mt-2">
<span class="inline-block px-4 py-1.5 rounded-full bg-blue-100 text-blue-700 text-sm font-bold uppercase tracking-wider dark:bg-blue-900/30 dark:text-white">All-in-One</span>
</div>
<h4 class="text-2xl font-bold text-text-main dark:text-white mb-3 uppercase">Gói Tăng Tốc</h4>
<div class="flex flex-col items-center mb-6 space-y-1">
<span class="mexo-van-hanh-price text-5xl lg:text-6xl font-black text-primary dark:text-white tracking-tight">24.000.000</span>
<span class="text-xl text-gray-500 font-medium">VNĐ / 3 tháng</span>
<span class="text-sm text-text-sub dark:text-gray-400 mt-2">(Chưa bao gồm VAT: 1.920.000 VNĐ)</span>
</div>
<button type="button"
    onclick="window.location.href='/lien-he/';" class="w-full py-4 rounded-xl bg-primary text-white font-bold hover:bg-primary-dark transition-all shadow-lg shadow-primary/30 text-lg">Đăng ký ngay</button>
</div>
<div class="w-full md:w-7/12 flex-1 flex flex-col justify-center pl-0 md:pl-4">
<h5 class="font-bold text-lg text-text-main dark:text-white mb-6 border-b border-gray-100 dark:border-gray-700 pb-2 inline-block w-full">Quyền lợi toàn diện bao gồm:</h5>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-5">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 flex-shrink-0">check_circle</span>
<span class="text-sm text-text-main dark:text-gray-200"><strong>Thời gian:</strong> 3 tháng đồng hành liên tục.</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 flex-shrink-0">check_circle</span>
<span class="text-sm text-text-main dark:text-gray-200"><strong>Nhân sự:</strong> Team chuyên môn vận hành A-Z.</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 flex-shrink-0">check_circle</span>
<span class="text-sm text-text-main dark:text-gray-200"><strong>Setup &amp; Decor:</strong> Tối ưu chuẩn SEO &amp; Giao diện.</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 flex-shrink-0">check_circle</span>
<span class="text-sm text-text-main dark:text-gray-200"><strong>Ads &amp; MKT:</strong> Chiến lược quảng cáo hiệu quả cao.</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 flex-shrink-0">check_circle</span>
<span class="text-sm text-text-main dark:text-gray-200"><strong>CSKH:</strong> Hỗ trợ trực chat &amp; xử lý đơn hàng.</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 flex-shrink-0">check_circle</span>
<span class="text-sm text-text-main dark:text-gray-200"><strong>Báo cáo:</strong> Minh bạch số liệu định kỳ.</span>
</div>
</div>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
<div class="bg-blue-50 dark:bg-blue-900/10 rounded-2xl p-6 md:p-8 border border-blue-100 dark:border-blue-900/30 flex flex-col h-full">
<h4 class="mexo-van-hanh-policy-title text-lg font-bold text-primary dark:text-white mb-6 flex items-start gap-3 uppercase">
<span class="material-symbols-outlined flex-shrink-0">verified_user</span>
<span>Chính sách phí doanh thu – Minh bạch &amp; Rõ ràng</span>
</h4>
<div class="space-y-6 flex-1">
<div>
<h5 class="font-bold text-text-main dark:text-white mb-2 text-sm uppercase tracking-wide">1. Giai đoạn Setup &amp; Tối ưu (Tháng đầu tiên):</h5>
<p class="text-sm text-text-sub dark:text-gray-300 mb-3">Áp dụng mức phí % linh hoạt dựa trên doanh thu thực tế:</p>
<ul class="space-y-2 pl-1">
<li class="flex items-start gap-2 text-sm text-text-main dark:text-gray-300">
<span class="mt-2 w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>
<span>Shop mới doanh số từ 50 triệu: <strong>2%</strong>.</span>
</li>
<li class="flex items-start gap-2 text-sm text-text-main dark:text-gray-300">
<span class="mt-2 w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>
<span>Shop cũ đã có doanh số: <strong>2%</strong> của doanh số đạt được - doanh số tháng gần nhất.</span>
</li>
</ul>
</div>
<div>
<h5 class="font-bold text-text-main dark:text-white mb-2 text-sm uppercase tracking-wide">2. Giai đoạn Tăng trưởng (Từ tháng thứ 2):</h5>
<p class="text-sm text-text-sub dark:text-gray-300 mb-3">Áp dụng mức phí % linh hoạt dựa trên doanh thu thực tế:</p>
<ul class="space-y-2 pl-1">
<li class="flex items-start gap-2 text-sm text-text-main dark:text-gray-300">
<span class="mt-2 w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>
<span>Đạt từ 70% KPI doanh số cam kết: Thu phí <strong>1%</strong> doanh thu.</span>
</li>
<li class="flex items-start gap-2 text-sm text-text-main dark:text-gray-300">
<span class="mt-2 w-1.5 h-1.5 rounded-full bg-blue-400 flex-shrink-0"></span>
<span>Đạt 100% KPI doanh số cam kết: Thu phí <strong>2%</strong> doanh thu.</span>
</li>
</ul>
</div>
</div>
</div>
<div class="bg-gray-50 dark:bg-gray-800/50 rounded-2xl p-6 md:p-8 border border-gray-200 dark:border-gray-700 flex flex-col h-full">
<h4 class="text-lg font-bold text-text-main dark:text-white mb-6 flex items-start gap-3 uppercase">
<span class="material-symbols-outlined flex-shrink-0">gavel</span>
<span>Nguyên tắc thu phí của MEXO GROUP</span>
</h4>
<ul class="space-y-5 flex-1">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary flex-shrink-0 mt-0.5">check_box</span>
<div class="text-sm text-text-main dark:text-gray-300">
<strong>Không phát sinh phí ẩn:</strong> Mọi khoản chi phí đều được liệt kê rõ ràng trong hợp đồng và báo cáo hàng tháng.
</div>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary flex-shrink-0 mt-0.5">check_box</span>
<div class="text-sm text-text-main dark:text-gray-300">
<strong>Win-Win:</strong> Phí dịch vụ gắn liền với hiệu quả kinh doanh. Chúng tôi chỉ thành công khi bạn bán được hàng.
</div>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary flex-shrink-0 mt-0.5">check_box</span>
<div class="text-sm text-text-main dark:text-gray-300">
<strong>Linh hoạt theo thời điểm:</strong> Hỗ trợ điều chỉnh chính sách phí trong các giai đoạn khó khăn hoặc các chiến dịch đặc biệt (cần thỏa thuận trước).
</div>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary flex-shrink-0 mt-0.5">check_box</span>
<div class="text-sm text-text-main dark:text-gray-300">
<strong>Thanh toán minh bạch:</strong> Có đầy đủ hóa đơn VAT và chứng từ hợp lệ cho doanh nghiệp.
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-12 mb-12">
<div class="mexo-case-carousel">
<div class="mexo-case-card">
<div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-r from-[#0F172A] to-[#1E293B] shadow-2xl ring-1 ring-white/10 isolate">
<div class="absolute top-0 right-0 -z-10 h-[600px] w-[600px] -translate-y-1/2 translate-x-1/2 rounded-full bg-blue-600/10 blur-[120px]"></div>
<div class="relative grid lg:grid-cols-2 gap-12 p-8 sm:p-12 lg:p-16 items-center">
<div class="flex flex-col gap-8">
<div class="inline-flex w-fit items-center gap-2 rounded-full bg-blue-900/30 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-white backdrop-blur-md border border-blue-800/50">
<span class="relative flex h-2 w-2"><span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-400 opacity-75"></span><span class="relative inline-flex h-2 w-2 rounded-full bg-blue-500"></span></span>
                            CASE STUDY 1
                        </div>
<div class="space-y-4">
<h3 class="text-3xl sm:text-4xl font-black text-white leading-tight">
<a class="inline-flex items-center gap-2 text-white hover:text-blue-200 transition-colors" href="https://shopee.vn/ladyes.design" target="_blank" rel="noopener">
                                Thời Trang Nữ Lady’s Design
<span class="material-symbols-outlined text-[0.9em]">open_in_new</span>
</a><br class="hidden sm:block"/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 via-white to-blue-200">Bùng nổ doanh số</span>
</h3>
<p class="text-lg font-light text-slate-300 leading-relaxed">Sau 3 tháng hợp tác cùng MEXO GROUP, shop Lady’s Design được tối ưu vận hành, tăng trưởng doanh thu lên hơn 800tr và kiểm soát chi phí quảng cáo dưới 4%.</p>
</div>
<div class="grid grid-cols-3 gap-6 pt-6 border-t border-slate-700/50">
<div><div class="text-3xl font-black text-white mb-1 flex items-baseline gap-1">877<span class="text-lg text-blue-400">tr</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Doanh thu</div></div>
<div><div class="text-3xl font-black text-white mb-1 flex items-baseline gap-1">5<span class="text-lg text-green-400">%</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Chi phí Ads</div></div>
<div><div class="text-3xl font-black text-white mb-1 flex items-baseline gap-1">4.9<span class="text-lg text-yellow-400 material-symbols-outlined text-[1em]">star</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Đánh giá Shop</div></div>
</div>
</div>
<div class="relative flex items-center justify-center">
<div class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-blue-600/20 to-indigo-600/20 blur-2xl"></div>
<a class="mexo-case-shop-button" href="https://shopee.vn/ladyes.design" target="_blank" rel="noopener">
<span class="material-symbols-outlined text-[1em]">storefront</span>
                            Xem shop Shopee
</a>
<button type="button" class="relative w-full max-w-2xl group cursor-zoom-in text-left" data-case-image="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-lady-2.png' ); ?>">
<span class="block overflow-hidden rounded-2xl border border-slate-700 bg-slate-900 shadow-2xl">
<span class="flex h-8 items-center gap-2 border-b border-slate-700 bg-slate-950 px-4"><span class="h-2.5 w-2.5 rounded-full bg-red-500"></span><span class="h-2.5 w-2.5 rounded-full bg-yellow-500"></span><span class="h-2.5 w-2.5 rounded-full bg-green-500"></span></span>
<span class="relative block aspect-video overflow-hidden">
<img class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-lady-2.png' ); ?>" alt="Dashboard doanh thu Thời Trang Nữ Lady’s Design"/>
<span class="absolute inset-0 bg-gradient-to-t from-slate-950/55 via-transparent to-transparent"></span>
<span class="absolute bottom-4 left-4 right-4"><span class="mb-1 block text-xs font-bold uppercase tracking-wider text-blue-100">Thời Trang Nữ Lady’s Design</span><span class="block text-lg font-black text-white">Click vào ảnh để xem lớn hơn</span></span>
</span>
</span>
</button>
</div>
</div>
</div>
</div>
<div class="mexo-case-card">
<div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-r from-[#0F172A] to-[#1E293B] shadow-2xl ring-1 ring-white/10 isolate">
<div class="relative grid lg:grid-cols-2 gap-12 p-8 sm:p-12 lg:p-16 items-center">
<div class="flex flex-col gap-8">
<div class="inline-flex w-fit items-center gap-2 rounded-full bg-blue-900/30 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-white border border-blue-800/50"><span class="h-2 w-2 rounded-full bg-blue-500"></span>CASE STUDY 2</div>
<div class="space-y-4"><h3 class="text-3xl sm:text-4xl font-black text-white leading-tight"><a class="inline-flex items-center gap-2 text-white hover:text-blue-200 transition-colors" href="https://shopee.vn/mitoi_petshop" target="_blank" rel="noopener">Mít Ơi Pet Shop<span class="material-symbols-outlined text-[0.9em]">open_in_new</span></a><br class="hidden sm:block"/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 via-white to-blue-200">Tăng trưởng x10 từ 30tr lên hơn 300tr</span></h3><p class="text-lg font-light text-slate-300 leading-relaxed">Sau 3 tháng hợp tác cùng MEXO GROUP, shop tăng trưởng doanh thu từ 30tr lên 300tr giữ doanh số ổn định.</p></div>
<div class="grid grid-cols-3 gap-6 pt-6 border-t border-slate-700/50"><div><div class="text-3xl font-black text-white mb-1">X10</div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Doanh thu</div></div><div><div class="text-3xl font-black text-white mb-1">4<span class="text-lg text-green-400">%</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Chi phí Ads</div></div><div><div class="text-3xl font-black text-white mb-1">5.0<span class="text-lg text-yellow-400 material-symbols-outlined text-[1em]">star</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Đánh giá Shop</div></div></div>
</div>
<div class="relative flex items-center justify-center"><a class="mexo-case-shop-button" href="https://shopee.vn/mitoi_petshop" target="_blank" rel="noopener"><span class="material-symbols-outlined text-[1em]">storefront</span>Xem shop Shopee</a><button type="button" class="relative w-full max-w-2xl group cursor-zoom-in text-left" data-case-image="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-mit-oi-petshop.png' ); ?>"><span class="block overflow-hidden rounded-2xl border border-slate-700 bg-slate-900 shadow-2xl"><span class="flex h-8 items-center gap-2 border-b border-slate-700 bg-slate-950 px-4"><span class="h-2.5 w-2.5 rounded-full bg-red-500"></span><span class="h-2.5 w-2.5 rounded-full bg-yellow-500"></span><span class="h-2.5 w-2.5 rounded-full bg-green-500"></span></span><span class="relative block aspect-video overflow-hidden"><img class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-mit-oi-petshop.png' ); ?>" alt="Dashboard doanh thu Mít Ơi Pet Shop"/><span class="absolute inset-0 bg-gradient-to-t from-slate-950/65 via-transparent to-transparent"></span><span class="absolute bottom-4 left-4 right-4"><span class="mb-1 block text-xs font-bold uppercase tracking-wider text-blue-100">Mít Ơi Pet Shop</span><span class="block text-lg font-black text-white">Click vào ảnh để xem lớn hơn</span></span></span></span></button></div>
</div>
</div>
</div>
<div class="mexo-case-card">
<div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-r from-[#0F172A] to-[#1E293B] shadow-2xl ring-1 ring-white/10 isolate">
<div class="relative grid lg:grid-cols-2 gap-12 p-8 sm:p-12 lg:p-16 items-center">
<div class="flex flex-col gap-8"><div class="inline-flex w-fit items-center gap-2 rounded-full bg-blue-900/30 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-white border border-blue-800/50"><span class="h-2 w-2 rounded-full bg-blue-500"></span>CASE STUDY 3</div><div class="space-y-4"><h3 class="text-3xl sm:text-4xl font-black text-white leading-tight"><a class="inline-flex items-center gap-2 text-white hover:text-blue-200 transition-colors" href="https://shopee.vn/miestore8" target="_blank" rel="noopener">Thời Trang Nữ MIE. STORE<span class="material-symbols-outlined text-[0.9em]">open_in_new</span></a><br class="hidden sm:block"/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 via-white to-blue-200">Bùng nổ doanh số ROAS &gt;40</span></h3><p class="text-lg font-light text-slate-300 leading-relaxed">Sau 1 tháng hợp tác cùng MEXO GROUP, shop được tối ưu quảng cáo, tăng trưởng doanh thu lên hơn 300tr và chỉ số ROAS lên &gt;40 vượt mức mong muốn của chị Hằng chủ shop.</p></div><div class="grid grid-cols-3 gap-6 pt-6 border-t border-slate-700/50"><div><div class="text-3xl font-black text-white mb-1">&gt;300<span class="text-lg text-blue-400">tr</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Doanh thu</div></div><div><div class="text-3xl font-black text-white mb-1">3<span class="text-lg text-green-400">%</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Chi phí Ads</div></div><div><div class="text-3xl font-black text-white mb-1">4.8<span class="text-lg text-yellow-400 material-symbols-outlined text-[1em]">star</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Đánh giá Shop</div></div></div></div>
<div class="relative flex items-center justify-center"><a class="mexo-case-shop-button" href="https://shopee.vn/miestore8" target="_blank" rel="noopener"><span class="material-symbols-outlined text-[1em]">storefront</span>Xem shop Shopee</a><button type="button" class="relative w-full max-w-2xl group cursor-zoom-in text-left" data-case-image="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-mie-store.png' ); ?>"><span class="block overflow-hidden rounded-2xl border border-slate-700 bg-slate-900 shadow-2xl"><span class="flex h-8 items-center gap-2 border-b border-slate-700 bg-slate-950 px-4"><span class="h-2.5 w-2.5 rounded-full bg-red-500"></span><span class="h-2.5 w-2.5 rounded-full bg-yellow-500"></span><span class="h-2.5 w-2.5 rounded-full bg-green-500"></span></span><span class="relative block aspect-video overflow-hidden"><img class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-mie-store.png' ); ?>" alt="Dashboard doanh thu Thời Trang Nữ MIE. STORE"/><span class="absolute inset-0 bg-gradient-to-t from-slate-950/65 via-transparent to-transparent"></span><span class="absolute bottom-4 left-4 right-4"><span class="mb-1 block text-xs font-bold uppercase tracking-wider text-blue-100">Thời Trang Nữ MIE. STORE</span><span class="block text-lg font-black text-white">Click vào ảnh để xem lớn hơn</span></span></span></span></button></div>
</div>
</div>
</div>
<div class="mexo-case-card">
<div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-r from-[#0F172A] to-[#1E293B] shadow-2xl ring-1 ring-white/10 isolate">
<div class="relative grid lg:grid-cols-2 gap-12 p-8 sm:p-12 lg:p-16 items-center">
<div class="flex flex-col gap-8"><div class="inline-flex w-fit items-center gap-2 rounded-full bg-blue-900/30 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-white border border-blue-800/50"><span class="h-2 w-2 rounded-full bg-blue-500"></span>CASE STUDY HIGHLIGHT</div><div class="space-y-4"><h3 class="text-3xl sm:text-4xl font-black text-white leading-tight">Hana Beauty Official<br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 via-white to-blue-200">Bứt phá doanh số campaign</span></h3><p class="text-lg font-light text-slate-300 leading-relaxed">Tái cấu trúc gian hàng, tối ưu combo sản phẩm và phân bổ ngân sách quảng cáo theo hiệu quả thực tế.</p></div><div class="grid grid-cols-3 gap-6 pt-6 border-t border-slate-700/50"><div><div class="text-3xl font-black text-white mb-1">+195<span class="text-lg text-blue-400">%</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Doanh thu</div></div><div><div class="text-3xl font-black text-white mb-1">-35<span class="text-lg text-green-400">%</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Chi phí Ads</div></div><div><div class="text-3xl font-black text-white mb-1">4.9<span class="text-lg text-yellow-400 material-symbols-outlined text-[1em]">star</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Đánh giá Shop</div></div></div></div>
<div class="relative flex items-center justify-center"><a class="mexo-case-shop-button" href="https://shopee.vn/ladyes.design" target="_blank" rel="noopener"><span class="material-symbols-outlined text-[1em]">storefront</span>Xem shop Shopee</a><button type="button" class="relative w-full max-w-2xl group cursor-zoom-in text-left" data-case-image="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-ladyes-dashboard.png' ); ?>"><span class="block overflow-hidden rounded-2xl border border-slate-700 bg-slate-900 shadow-2xl"><span class="flex h-8 items-center gap-2 border-b border-slate-700 bg-slate-950 px-4"><span class="h-2.5 w-2.5 rounded-full bg-red-500"></span><span class="h-2.5 w-2.5 rounded-full bg-yellow-500"></span><span class="h-2.5 w-2.5 rounded-full bg-green-500"></span></span><span class="relative block aspect-video overflow-hidden"><img class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-ladyes-dashboard.png' ); ?>" alt="Case study Hana Beauty Official"/><span class="absolute inset-0 bg-gradient-to-t from-slate-950/65 via-transparent to-transparent"></span><span class="absolute bottom-4 left-4 right-4"><span class="mb-1 block text-xs font-bold uppercase tracking-wider text-blue-100">Hana Beauty Official</span><span class="block text-lg font-black text-white">Tối ưu chiến dịch bán hàng</span></span></span></span></button></div>
</div>
</div>
</div>
<div class="mexo-case-card">
<div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-r from-[#0F172A] to-[#1E293B] shadow-2xl ring-1 ring-white/10 isolate">
<div class="relative grid lg:grid-cols-2 gap-12 p-8 sm:p-12 lg:p-16 items-center">
<div class="flex flex-col gap-8"><div class="inline-flex w-fit items-center gap-2 rounded-full bg-blue-900/30 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-white border border-blue-800/50"><span class="h-2 w-2 rounded-full bg-blue-500"></span>CASE STUDY HIGHLIGHT</div><div class="space-y-4"><h3 class="text-3xl sm:text-4xl font-black text-white leading-tight">An Phúc Decor<br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 via-white to-blue-200">Ổn định vận hành A-Z</span></h3><p class="text-lg font-light text-slate-300 leading-relaxed">Đồng bộ quy trình đăng sản phẩm, chăm sóc khách hàng và báo cáo doanh thu để shop vận hành bền vững hơn.</p></div><div class="grid grid-cols-3 gap-6 pt-6 border-t border-slate-700/50"><div><div class="text-3xl font-black text-white mb-1">+165<span class="text-lg text-blue-400">%</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Doanh thu</div></div><div><div class="text-3xl font-black text-white mb-1">-30<span class="text-lg text-green-400">%</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Chi phí Ads</div></div><div><div class="text-3xl font-black text-white mb-1">4.8<span class="text-lg text-yellow-400 material-symbols-outlined text-[1em]">star</span></div><div class="text-xs font-bold uppercase tracking-wider text-slate-400">Đánh giá Shop</div></div></div></div>
<div class="relative flex items-center justify-center"><a class="mexo-case-shop-button" href="https://shopee.vn/ladyes.design" target="_blank" rel="noopener"><span class="material-symbols-outlined text-[1em]">storefront</span>Xem shop Shopee</a><button type="button" class="relative w-full max-w-2xl group cursor-zoom-in text-left" data-case-image="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-ladyes-dashboard.png' ); ?>"><span class="block overflow-hidden rounded-2xl border border-slate-700 bg-slate-900 shadow-2xl"><span class="flex h-8 items-center gap-2 border-b border-slate-700 bg-slate-950 px-4"><span class="h-2.5 w-2.5 rounded-full bg-red-500"></span><span class="h-2.5 w-2.5 rounded-full bg-yellow-500"></span><span class="h-2.5 w-2.5 rounded-full bg-green-500"></span></span><span class="relative block aspect-video overflow-hidden"><img class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/case-study-ladyes-dashboard.png' ); ?>" alt="Case study An Phúc Decor"/><span class="absolute inset-0 bg-gradient-to-t from-slate-950/65 via-transparent to-transparent"></span><span class="absolute bottom-4 left-4 right-4"><span class="mb-1 block text-xs font-bold uppercase tracking-wider text-blue-100">An Phúc Decor</span><span class="block text-lg font-black text-white">Chuẩn hóa vận hành gian hàng</span></span></span></span></button></div>
</div>
</div>
</div>
</div>
</div>
<div id="mexo-case-lightbox" class="mexo-case-lightbox fixed inset-0 z-[9999] items-center justify-center bg-slate-950/90 p-4 backdrop-blur-sm">
<button type="button" class="mexo-case-close" data-case-close aria-label="Đóng ảnh case study">
<span class="material-symbols-outlined">close</span>
</button>
<img id="mexo-case-lightbox-img" src="" alt="Ảnh case study phóng to"/>
</div>
<section class="bg-white py-10 dark:bg-background-dark">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="rounded-2xl bg-primary p-8 text-center md:p-16 relative overflow-hidden">
<div class="absolute top-0 right-0 -mt-10 -mr-10 h-64 w-64 rounded-full bg-white/10 blur-3xl"></div>
<div class="absolute bottom-0 left-0 -mb-10 -ml-10 h-64 w-64 rounded-full bg-white/10 blur-3xl"></div>
<h2 class="relative z-10 mx-auto max-w-3xl text-3xl font-bold text-white sm:text-4xl">Sẵn sàng bứt phá doanh thu cùng MEXO GROUP?</h2>
<p class="relative z-10 mx-auto mt-4 max-w-2xl text-lg text-blue-100">Hãy để lại thông tin, chuyên gia của chúng tôi sẽ liên hệ tư vấn chiến lược phù hợp nhất cho doanh nghiệp của bạn.</p>
<div class="relative z-10 mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
<button type="button"
    onclick="window.location.href='/lien-he/';" class="w-full rounded-xl bg-white px-8 py-3.5 text-base font-bold text-primary shadow-lg transition-transform hover:scale-105 sm:w-auto">
                    Đăng ký tư vấn miễn phí
                </button>
<button class="w-full rounded-xl border border-blue-300 bg-transparent px-8 py-3.5 text-base font-bold text-white transition-colors hover:bg-white/10 sm:w-auto">
                    Liên hệ Hotline: 0855.761.555
                </button>
</div>
</div>
</div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');
        function activateTab(tabId) {
            tabButtons.forEach(button => {
                if (button.dataset.tab === tabId) {
                    button.classList.add('active');
                } else {
                    button.classList.remove('active');
                }
            });
            tabContents.forEach(content => {
                if (content.id === tabId) {
                    content.classList.add('active');
                } else {
                    content.classList.remove('active');
                }
            });
        }
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                activateTab(button.dataset.tab);
            });
        });
        // Set initial active tab
        activateTab('shopee');
        // Accordion functionality for the vertical process tracker
        const accordions = document.querySelectorAll('.accord-item');
        accordions.forEach(item => {
            const header = item.querySelector('.accord-header');
            const trigger = item.querySelector('.accord-trigger');
            const content = item.querySelector('.accordion-content');
            const icon = item.querySelector('.accord-icon');
            const toggleAccordion = () => {
                const isActive = content.classList.contains('active');
                // Close all other accordions and reset their icons
                accordions.forEach(otherItem => {
                    const otherContent = otherItem.querySelector('.accordion-content');
                    const otherIcon = otherItem.querySelector('.accord-icon');
                    if (otherItem !== item && otherContent.classList.contains('active')) {
                        otherContent.classList.remove('active');
                        otherIcon.classList.remove('rotate-180');
                    }
                });
                // Toggle current accordion
                if (isActive) {
                    content.classList.remove('active');
                    icon.classList.remove('rotate-180');
                } else {
                    content.classList.add('active');
                    icon.classList.add('rotate-180');
                }
            };
            // Attach event listeners to both the header and the number button
            header.addEventListener('click', toggleAccordion);
            trigger.addEventListener('click', toggleAccordion);
        });
        // Open the first accordion by default
        if (accordions.length > 0) {
            accordions[0].querySelector('.accordion-content').classList.add('active');
            accordions[0].querySelector('.accord-icon').classList.add('rotate-180');
        }

        const caseLightbox = document.getElementById('mexo-case-lightbox');
        const caseLightboxImg = document.getElementById('mexo-case-lightbox-img');
        document.querySelectorAll('[data-case-image]').forEach(button => {
            button.addEventListener('click', () => {
                if (!caseLightbox || !caseLightboxImg) return;
                caseLightboxImg.src = button.dataset.caseImage;
                caseLightbox.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            });
        });
        const closeCaseLightbox = () => {
            if (!caseLightbox || !caseLightboxImg) return;
            caseLightbox.classList.remove('is-open');
            caseLightboxImg.src = '';
            document.body.style.overflow = '';
        };
        document.querySelectorAll('[data-case-close]').forEach(button => {
            button.addEventListener('click', closeCaseLightbox);
        });
        if (caseLightbox) {
            caseLightbox.addEventListener('click', event => {
                if (event.target === caseLightbox) closeCaseLightbox();
            });
        }
        document.addEventListener('keydown', event => {
            if (event.key === 'Escape') closeCaseLightbox();
        });
    });
</script>
</div>

</div>
<?php get_footer(); ?>

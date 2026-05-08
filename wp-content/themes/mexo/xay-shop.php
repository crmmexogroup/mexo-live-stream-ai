<?php
/* Template Name: Xây Shop */
get_header();
?>
<style>
        .service-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }@keyframes borderPulse {
            0% { box-shadow: 0 0 0 0px rgba(13, 89, 242, 0.4); }
            50% { box-shadow: 0 0 0 4px rgba(13, 89, 242, 0.2); }
            100% { box-shadow: 0 0 0 0px rgba(13, 89, 242, 0); }
        }
        .tab-button.active {
            border-color: var(--primary);
            color: var(--primary);
            background-color: var(--primary-light);
            animation: borderPulse 0.6s ease-out;
        }.tab-button.active .tab-icon-wrapper {box-shadow: 0 8px 20px -4px rgba(13, 89, 242, 0.5) !important;
            transform: scale(1.05);
            transition: all 0.3s ease;
        }@keyframes fadeSlideUp {
            0% { 
                opacity: 0; 
                transform: translateY(15px); 
            }
            100% { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
            animation: fadeSlideUp 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        :root {
            --primary-light: #e0edfe;
        }
        .dark .tab-button.active {
            background-color: #0d59f21a;
        }
        .page-template-xay-shop .tab-button {
            min-height: 4.9rem;
            background: #ffffff !important;
            border-color: #e2e8f0 !important;
            color: #0f172a !important;
            box-shadow: 0 14px 34px rgba(15, 23, 42, 0.06) !important;
        }
        .page-template-xay-shop .tab-button:not(.active) {
            background: #ffffff !important;
            border-color: #e2e8f0 !important;
            color: #0f172a !important;
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.045) !important;
        }
        .page-template-xay-shop .tab-button:not(.active) .tab-icon-wrapper {
            box-shadow: none !important;
            transform: none !important;
            opacity: 0.88;
            filter: saturate(0.86);
        }
        .page-template-xay-shop .tab-button.active {
            background: #eaf3ff !important;
            border-color: #0d59f2 !important;
            color: #0f172a !important;
            box-shadow: 0 18px 44px rgba(13, 89, 242, 0.18) !important;
        }
        .page-template-xay-shop .tab-button.active .tab-icon-wrapper {
            opacity: 1;
            filter: saturate(1);
            box-shadow: 0 14px 32px rgba(13, 89, 242, 0.28) !important;
        }
        html.dark .page-template-xay-shop .tab-button {
            background: rgba(16, 28, 49, 0.78) !important;
            border-color: rgba(96, 165, 250, 0.28) !important;
            color: #f8fafc !important;
            box-shadow: none !important;
        }
        html.dark .page-template-xay-shop .tab-button:not(.active) {
            background: rgba(16, 28, 49, 0.68) !important;
            border-color: rgba(96, 165, 250, 0.18) !important;
            color: #e2e8f0 !important;
            box-shadow: none !important;
        }
        html.dark .page-template-xay-shop .tab-button.active {
            background: rgba(13, 89, 242, 0.20) !important;
            border-color: rgba(147, 197, 253, 0.72) !important;
            color: #ffffff !important;
            box-shadow: 0 0 36px rgba(59, 130, 246, 0.22) !important;
        }
        html.dark .page-template-xay-shop .tab-button.active .tab-icon-wrapper {
            box-shadow: 0 0 28px rgba(96, 165, 250, 0.36) !important;
        }
        html.dark body.page-template-xay-shop.page-template-xay-shop-php button.tab-button[class*="border-"] {
            background: rgba(16, 28, 49, 0.78) !important;
            border-color: rgba(96, 165, 250, 0.28) !important;
            color: #f8fafc !important;
            box-shadow: none !important;
        }
        html.dark body.page-template-xay-shop.page-template-xay-shop-php button.tab-button[class*="border-"]:not(.active) {
            background: rgba(16, 28, 49, 0.68) !important;
            border-color: rgba(96, 165, 250, 0.18) !important;
            color: #e2e8f0 !important;
            box-shadow: none !important;
        }
        html.dark body.page-template-xay-shop.page-template-xay-shop-php button.tab-button.active[class*="border-"] {
            background: rgba(13, 89, 242, 0.20) !important;
            border-color: rgba(147, 197, 253, 0.72) !important;
            color: #ffffff !important;
            box-shadow: 0 0 36px rgba(59, 130, 246, 0.22) !important;
        }
        .material-symbols-outlined.icon-filled {
          font-variation-settings:
          'FILL' 1,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        .process-list-item {
            counter-increment: process-counter;
        }
        @media (min-width: 1024px) {
            .tab-content [class*="lg:col-span-2"] > .rounded-3xl:first-child {
                max-width: 100%;
                min-width: 0;
                min-height: 0;
                padding: 1.15rem 1.45rem !important;
                border-radius: 1.25rem !important;
            }
            .tab-content [class*="lg:col-span-2"] > .rounded-3xl:first-child .space-y-6 {
                gap: 0.62rem !important;
            }
            .tab-content [class*="lg:col-span-2"] > .rounded-3xl:first-child .inline-flex {
                padding: 0.35rem 0.75rem !important;
                font-size: 0.72rem !important;
            }
            .tab-content [class*="lg:col-span-2"] > .rounded-3xl:first-child h3 {
                font-size: 1.58rem !important;
                line-height: 1.12 !important;
                letter-spacing: -0.02em;
            }
            .tab-content [class*="lg:col-span-2"] > .rounded-3xl:first-child p {
                font-size: 0.76rem !important;
                line-height: 1.48 !important;
                max-width: 32rem !important;
            }
            .tab-content [class*="lg:col-span-2"] > .rounded-3xl:first-child .flex.flex-col.sm\:flex-row {
                flex-direction: row !important;
                align-items: center !important;
                gap: 0.85rem !important;
            }
            .tab-content [class*="lg:col-span-2"] > .rounded-3xl:first-child button {
                padding: 0.52rem 1rem !important;
                font-size: 0.74rem !important;
                min-height: 2.15rem;
                min-width: 10rem;
            }
            .tab-content [class*="lg:col-span-2"] > .rounded-3xl:first-child button .material-symbols-outlined {
                font-size: 1rem !important;
            }
        }
        .mexo-case-study-frame {
            cursor: zoom-in;
        }
        .mexo-case-study-frame::after {
            content: "Bấm để phóng to";
            position: absolute;
            right: 0.75rem;
            top: 0.75rem;
            z-index: 30;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.72);
            color: #fff;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 0.3rem 0.55rem;
            opacity: 0;
            transition: opacity 0.2s ease;
            pointer-events: none;
        }
        .mexo-case-study-frame:hover::after {
            opacity: 1;
        }
        .mexo-case-lightbox {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background: rgba(2, 6, 23, 0.86);
            backdrop-filter: blur(10px);
        }
        .mexo-case-lightbox.is-open {
            display: flex;
        }
        .mexo-case-lightbox img {
            max-width: min(96vw, 1280px);
            max-height: 88vh;
            border-radius: 1rem;
            box-shadow: 0 30px 90px rgba(0,0,0,0.45);
            background: #fff;
        }
        .mexo-case-lightbox button {
            position: absolute;
            right: 1.25rem;
            top: 1.25rem;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 999px;
            background: rgba(255,255,255,0.14);
            color: #fff;
            font-size: 1.5rem;
            line-height: 1;
        }
    </style>

<section class="relative overflow-hidden pt-24 pb-20 lg:pt-28 lg:pb-32 bg-white dark:bg-background-dark">
<div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-100 via-transparent to-transparent opacity-60 dark:from-blue-900/30"></div>
<div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-white/80 to-transparent dark:from-background-dark/80"></div>
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
<div class="grid gap-16 lg:grid-cols-12 items-center">
<div class="lg:col-span-7 flex flex-col gap-8">
<div class="inline-flex w-fit items-center rounded-full bg-orange-50 border border-orange-100 px-4 py-1.5 text-sm font-bold text-orange-600 dark:bg-orange-500/10 dark:border-orange-500/20 dark:text-orange-400 shadow-sm">
<span class="material-symbols-outlined mr-2 text-[20px] icon-filled animate-bounce">local_fire_department</span>
                    Giải pháp bán hàng đột phá 2026
                </div>
<h1 class="text-5xl font-black leading-[1.1] tracking-tight text-text-main dark:text-white sm:text-6xl lg:text-7xl">
                    XÂY DỰNG GIAN HÀNG <br/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">SHOPEE TRỌN GÓI</span>
</h1>
<p class="text-xl text-text-sub dark:text-gray-300 max-w-2xl leading-relaxed">
                    Giải pháp khởi tạo và vận hành chuyên nghiệp từ A-Z. Tối ưu hiển thị, bùng nổ doanh số và xây dựng thương hiệu bền vững trên sàn thương mại điện tử lớn nhất Việt Nam.
                </p>
<div class="flex flex-col sm:flex-row gap-5 pt-4">
<button
    type="button"
    onclick="window.location.href='/lien-he/';"
    class="flex h-14 items-center justify-center rounded-xl bg-primary px-10 text-lg font-bold text-white transition-all hover:bg-primary-dark shadow-xl shadow-primary/30 hover:-translate-y-1">
    Đăng ký tư vấn ngay
    <span class="material-symbols-outlined ml-2">arrow_forward</span>
</button>

<button type="button"
    onclick="window.location.href='/lien-he/';" class="flex h-14 items-center justify-center rounded-xl border-2 border-gray-200 bg-white px-8 text-lg font-bold text-text-main transition-all hover:border-primary hover:text-primary dark:bg-transparent dark:border-gray-700 dark:text-white dark:hover:border-primary hover:-translate-y-1">
                        Khám phá chi tiết
                    </button>
</div>
<div class="flex items-center gap-8 pt-4 text-sm font-medium text-text-sub dark:text-gray-400">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-green-500 icon-filled">check_circle</span>
                        Cam kết doanh số
                    </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-green-500 icon-filled">check_circle</span>
                        Hỗ trợ 1-1 trọn đời
                    </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-green-500 icon-filled">check_circle</span>
                        Bàn giao sau 7 ngày
                    </div>
</div>
</div>
<div class="lg:col-span-5 relative">
<div class="relative z-10 w-full rounded-3xl bg-gradient-to-br from-gray-100 to-white p-2 shadow-2xl dark:from-gray-800 dark:to-card-dark border border-white/50 dark:border-gray-700/50">
<div class="aspect-[4/5] w-full overflow-hidden rounded-2xl relative">
<div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent z-10"></div>
<div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCKgbkQrNVf9YLWFAKcOarjVJe8O65kdd1OvGqj-Sx5gyb2Ia2Vm5-SYMKmHDu7F1x8dbu3bkbrsYFIdFDSKIcXbqZ2Z2TNGwMcSi53EUM08DHWQA78JQiKmi6Vu-vEh3KOzN-dhO91kZZBC_XqKE85w45p1UwMYkxHZJdKs83iS8ldY6qwd4Ii28wrEIxPHQrr7OccI7ZIEzJEV8oz_I_1rh_KWxlcJnF1WrOpYLPDJ3hrdrO-hwYXX2y9oyOCX31qutmVv4nj4Ns");'></div>
<div class="absolute bottom-6 left-6 right-6 z-20">
<div class="bg-white/95 backdrop-blur-sm p-4 rounded-xl shadow-lg border border-gray-100 dark:bg-card-dark/95 dark:border-gray-700">
<div class="flex items-center justify-between mb-3">
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-full bg-orange-100 flex items-center justify-center text-orange-600">
<span class="material-symbols-outlined">shopping_bag</span>
</div>
<div>
<p class="text-xs text-gray-500 dark:text-gray-400 font-semibold uppercase">Tăng trưởng tháng</p>
<p class="text-lg font-black text-text-main dark:text-white">+350%</p>
</div>
</div>
<span class="text-green-500 text-sm font-bold flex items-center bg-green-50 px-2 py-1 rounded dark:bg-green-900/20">+15.2k Follower</span>
</div>
<div class="w-full bg-gray-100 rounded-full h-1.5 dark:bg-gray-700">
<div class="bg-primary h-1.5 rounded-full" style="width: 85%"></div>
</div>
</div>
</div>
</div>
</div>
<div class="absolute -top-10 -right-10 -z-10 h-72 w-72 rounded-full bg-blue-400/20 blur-3xl dark:bg-blue-600/20"></div>
<div class="absolute -bottom-10 -left-10 -z-10 h-72 w-72 rounded-full bg-orange-400/20 blur-3xl dark:bg-orange-600/20"></div>
</div>
</div>
</div>
</section>
<div class="bg-white py-12 dark:bg-background-dark border-t border-gray-100 dark:border-gray-800">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl font-bold tracking-tight text-text-main dark:text-white sm:text-4xl">Tổng Quan Giải Pháp Doanh Nghiệp</h2>
<p class="mx-auto mt-4 max-w-2xl text-lg text-text-sub dark:text-gray-400">
                Khám phá các giải pháp thương mại điện tử chuyên sâu, được thiết kế để tối ưu hóa hiệu suất và thúc đẩy tăng trưởng cho doanh nghiệp của bạn.
            </p>
</div>
<div class="flex flex-wrap justify-center gap-4 mb-10">
<button class="tab-button active flex items-center gap-3 rounded-xl border border-gray-200 px-6 py-4 text-base font-bold text-text-main transition-all hover:border-orange-500 hover:text-orange-600 hover:shadow-lg hover:-translate-y-1 dark:border-gray-700 dark:text-gray-200 dark:hover:border-orange-500 dark:hover:text-orange-500 bg-[var(--primary-light)] dark:bg-[var(--primary-light)]/10" data-tab="tab1">
<div class="tab-icon-wrapper flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-[#FF4500] to-[#F53D2D] text-white shadow-lg shadow-[#FF4500]/30 ring-2 ring-white/50 ring-offset-2 ring-offset-transparent dark:ring-white/10 transition-colors">
<span class="material-symbols-outlined text-2xl icon-filled">storefront</span>
</div>
<span>Gói 1</span>
</button>
<button class="tab-button flex items-center gap-3 rounded-xl border border-gray-200 px-6 py-4 text-base font-bold text-text-main transition-all hover:border-green-500 hover:text-green-600 hover:shadow-lg hover:-translate-y-1 dark:border-gray-700 dark:text-gray-200 dark:hover:border-green-500 dark:hover:text-green-500" data-tab="tab2">
<div class="tab-icon-wrapper flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-[#22c55e] to-[#16a34a] text-white shadow-lg shadow-[#22c55e]/30 ring-2 ring-white/50 ring-offset-2 ring-offset-transparent dark:ring-white/10 transition-colors">
<span class="material-symbols-outlined text-2xl icon-filled">storefront</span>
</div>
<span>Gói 2</span>
</button>
<button class="tab-button flex items-center gap-3 rounded-xl border border-gray-200 px-6 py-4 text-base font-bold text-text-main transition-all hover:border-purple-500 hover:text-purple-600 hover:shadow-lg hover:-translate-y-1 dark:border-gray-700 dark:text-gray-200 dark:hover:border-purple-500 dark:hover:text-purple-500" data-tab="tab3">
<div class="tab-icon-wrapper flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-[#a855f7] to-[#9333ea] text-white shadow-lg shadow-[#a855f7]/30 ring-2 ring-white/50 ring-offset-2 ring-offset-transparent dark:ring-white/10 transition-colors">
<span class="material-symbols-outlined text-2xl icon-filled">storefront</span>
</div>
<span>Gói 3</span>
</button>
<button class="tab-button flex items-center gap-3 rounded-xl border border-gray-200 px-6 py-4 text-base font-bold text-text-main transition-all hover:border-amber-500 hover:text-amber-600 hover:shadow-lg hover:-translate-y-1 dark:border-gray-700 dark:text-gray-200 dark:hover:border-amber-500 dark:hover:text-amber-500" data-tab="tab4">
<div class="tab-icon-wrapper flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-[#f59e0b] to-[#d97706] text-white shadow-lg shadow-[#f59e0b]/30 ring-2 ring-white/50 ring-offset-2 ring-offset-transparent dark:ring-white/10 transition-colors">
<span class="material-symbols-outlined text-2xl icon-filled">storefront</span>
</div>
<span>Gói 4</span>
</button>
</div>
<div class="tab-content active" id="tab1">
<div class="p-8 rounded-2xl bg-card-light dark:bg-card-dark shadow-lg border border-gray-100 dark:border-gray-800">
<div class="grid lg:grid-cols-3 gap-10 items-start">
<div class="lg:col-span-2 space-y-8">
<div class="rounded-3xl bg-blue-50/50 dark:bg-blue-900/10 border border-blue-100 dark:border-blue-900/30 p-8 lg:p-10 relative overflow-hidden group">
<div class="absolute inset-0 bg-gradient-to-br from-blue-100/30 to-white/0 dark:from-blue-900/20 pointer-events-none"></div>
<div class="relative z-10 space-y-6">
<div class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-sm font-bold text-orange-600 dark:bg-orange-900/20 dark:border-orange-500/30 dark:text-orange-400">
<span class="material-symbols-outlined text-[18px] icon-filled">local_fire_department</span>
                                    Dịch vụ HOT nhất
                                </div>
<div class="space-y-2">
<h3 class="text-4xl lg:text-5xl font-black tracking-tight text-primary dark:text-white uppercase leading-tight">
                                        XÂY DỰNG GIAN HÀNG<br/>
                                        SHOPEE TRỌN GÓI 1
                                    </h3>
</div>
<p class="max-w-3xl text-lg text-text-sub dark:text-gray-300 leading-relaxed font-medium">
                                    Khởi tạo và vận hành chuyên nghiệp từ A-Z. Giải pháp tối ưu giúp bạn tiết kiệm thời gian, tối đa hóa doanh thu và xây dựng nền móng vững chắc trên sàn TMĐT số 1 Việt Nam.
                                </p>
<div class="flex flex-col sm:flex-row gap-4 pt-2">
<button type="button"
    onclick="window.location.href='/lien-he/';" class="flex items-center justify-center gap-2 rounded-full bg-primary px-8 py-4 text-base font-bold text-white shadow-lg shadow-primary/25 transition-all hover:bg-primary-dark hover:-translate-y-1">
                                        Chọn gói này
                                        <span class="material-symbols-outlined text-xl">arrow_forward</span>
</button>
<button type="button"
    onclick="window.location.href='/lien-he/';" class="flex items-center justify-center gap-2 rounded-full border-2 border-white bg-white px-8 py-4 text-base font-bold text-text-main shadow-sm transition-all hover:bg-gray-50 hover:-translate-y-1 dark:bg-transparent dark:border-gray-700 dark:text-white dark:hover:bg-white/5">
                                        2.500.000 (Chưa bao gồm VAT)
                                    </button>
</div>
</div>
</div>
<div class="rounded-xl border border-gray-100 bg-gray-50/50 p-6 dark:border-gray-800 dark:bg-card-dark/30 mt-8">
<div class="flex items-center gap-3 mb-6">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100 text-primary dark:bg-blue-900/30">
<span class="material-symbols-outlined">checklist</span>
</div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Quy trình triển khai chi tiết</h4>
</div>
<ul class="space-y-4">
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">1</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tư vấn đăng ký - thiết lập định danh gian hàng mới</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">2</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết lập các chương trình marketing nội sàn</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">3</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Đăng <b>20 sản phẩm</b> chuẩn SEO</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">4</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết kế đồng bộ (1 ảnh bìa và 3 ảnh phụ) theo đúng insight khách hàng </span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">5</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết kế 02 banner trang trí shop chuyên nghiệp </span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">6</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tặng checklist bán hàng chuẩn chuyên sâu</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">7</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tặng 15 ngày livestream tự động (30 phiên livestream)</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">8</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tăng chỉ số follow - theo dõi cho shop(1000 follow)</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">9</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Đồng hành hỗ trợ trọn đời trong quá trình bán hàng</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-red-500 text-sm font-bold text-white shadow-lg shadow-red-500/20">10</span><span class="text-[20px] font-black leading-loose text-red-500 dark:text-red-400">&#10005;</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-red-500 text-sm font-bold text-white shadow-lg shadow-red-500/20">11</span><span class="text-[20px] font-black leading-loose text-red-500 dark:text-red-400">&#10005;</span></li>
</ul>
</div>
<div class="rounded-xl border border-blue-100 bg-blue-50/30 p-5 dark:border-blue-900/30 dark:bg-blue-900/10">
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
<span class="text-sm font-bold text-primary uppercase whitespace-nowrap">GHI CHÚ</span>
<div class="flex flex-wrap gap-x-6 gap-y-3">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Hoàn thành trong 7–15 ngày</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Có xuất VAT</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Làm ưng mới chốt</span>
</div>
</div>
</div>
</div>
</div>
<div class="space-y-6 lg:col-span-1 bg-background-light dark:bg-card-dark/50 p-6 rounded-xl border border-gray-100 dark:border-gray-700 h-fit sticky top-24">
<h4 class="text-xl font-semibold text-text-main dark:text-white">Các Gói Giải Pháp &amp; Case Study</h4>
<p class="text-text-sub dark:text-gray-400">Chúng tôi cung cấp các gói dịch vụ linh hoạt, phù hợp với mọi quy mô và mục tiêu kinh doanh. Liên hệ để nhận tư vấn gói phù hợp nhất.</p>
<div class="grid grid-cols-1 gap-4">
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">GÓI 1 – KHỞI ĐỘNG</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">Phù hợp cho các shop mới hoặc muốn tối ưu cơ bản.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Người mới bắt đầu bán Shopee</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Shop chưa có kinh nghiệm vận hành</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Muốn test sản phẩm – test thị trường</span></li>
</ul>
</div>
</div>
<div class="mexo-case-study-frame relative w-full aspect-video rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<img alt="Shopee case study dashboard" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBegtbQpsZBUL8qzgU-ysh6OHmIEmOSEsMMUHbL3xMVlvoC3ONbb02dZep4aPg-i6h-5nc_b1-ZXQkgCgWSFggKzwGXrt_LG4zslCA38nhH5IxQOuJ7vt2x0Vj3L5irMYzMimNVQrEr_GFHiVC4ZNP2IEzbhquTNY1QSLeuNo-jAmez8MsO8oIaEuPDEQyYn5tAH-FuzJMikTolGdPAL1OEUBeKfT7b0g6RyG4AYt0xKriXaen8IVbrJrXDvR87D-btrnS-3drRCUA"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-4">
<p class="text-white text-sm">Case Study: Tăng trưởng 250% doanh thu cho thương hiệu thời trang X.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-content" id="tab2">
<div class="p-8 rounded-2xl bg-card-light dark:bg-card-dark shadow-lg border border-gray-100 dark:border-gray-800">
<div class="grid lg:grid-cols-3 gap-10 items-start">
<div class="lg:col-span-2 space-y-8">
<div class="rounded-3xl bg-blue-50/50 dark:bg-blue-900/10 border border-blue-100 dark:border-blue-900/30 p-8 lg:p-10 relative overflow-hidden group">
<div class="absolute inset-0 bg-gradient-to-br from-blue-100/30 to-white/0 dark:from-blue-900/20 pointer-events-none"></div>
<div class="relative z-10 space-y-6">
<div class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-sm font-bold text-orange-600 dark:bg-orange-900/20 dark:border-orange-500/30 dark:text-orange-400">
<span class="material-symbols-outlined text-[18px] icon-filled">local_fire_department</span>
                                    Dịch vụ HOT nhất
                                </div>
<div class="space-y-2">
<h3 class="text-4xl lg:text-5xl font-black tracking-tight text-primary dark:text-white uppercase leading-tight">
                                        XÂY DỰNG GIAN HÀNG<br/>
                                        SHOPEE TRỌN GÓI 2
                                    </h3>
</div>
<p class="max-w-3xl text-lg text-text-sub dark:text-gray-300 leading-relaxed font-medium">
                                    Khởi tạo và vận hành chuyên nghiệp từ A-Z. Giải pháp tối ưu giúp bạn tiết kiệm thời gian, tối đa hóa doanh thu và xây dựng nền móng vững chắc trên sàn TMĐT số 1 Việt Nam.
                                </p>
<div class="flex flex-col sm:flex-row gap-4 pt-2">
<button type="button"
    onclick="window.location.href='/lien-he/';" class="flex items-center justify-center gap-2 rounded-full bg-primary px-8 py-4 text-base font-bold text-white shadow-lg shadow-primary/25 transition-all hover:bg-primary-dark hover:-translate-y-1">
                                        Chọn gói này
                                        <span class="material-symbols-outlined text-xl">arrow_forward</span>
</button>
<button class="flex items-center justify-center gap-2 rounded-full border-2 border-white bg-white px-8 py-4 text-base font-bold text-text-main shadow-sm transition-all hover:bg-gray-50 hover:-translate-y-1 dark:bg-transparent dark:border-gray-700 dark:text-white dark:hover:bg-white/5">
                                        4.000.000 (Chưa bao gồm VAT)
                                    </button>
</div>
</div>
</div>
<div class="rounded-xl border border-gray-100 bg-gray-50/50 p-6 dark:border-gray-800 dark:bg-card-dark/30 mt-8">
<div class="flex items-center gap-3 mb-6">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100 text-primary dark:bg-blue-900/30">
<span class="material-symbols-outlined">checklist</span>
</div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Quy trình triển khai chi tiết</h4>
</div>
<ul class="space-y-4">
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">1</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tư vấn đăng ký - thiết lập định danh gian hàng mới</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">2</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết lập các chương trình marketing nội sàn</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">3</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Đăng <b>45 sản phẩm</b> chuẩn SEO</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">4</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết kế đồng bộ (1 ảnh bìa và 3 ảnh phụ) theo đúng insight khách hàng</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">5</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết kế 04 banner trang trí shop chuyên nghiệp</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">6</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tặng checklist bán hàng chuẩn chuyên sâu</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">7</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tặng 30 ngày livestream tự động (60 phiên livestream)</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">8</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tăng chỉ số follow - theo dõi cho shop(3000 follow)</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">9</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Đồng hành hỗ trợ trọn đời trong quá trình bán hàng</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">10</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Hướng dẫn vận hành kinh doan sàn TMĐT 1:1 online hoặc offline</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-red-500 text-sm font-bold text-white shadow-lg shadow-red-500/20">11</span><span class="text-[20px] font-black leading-loose text-red-500 dark:text-red-400">&#10005;</span></li>
</ul>
</div>
<div class="rounded-xl border border-blue-100 bg-blue-50/30 p-5 dark:border-blue-900/30 dark:bg-blue-900/10">
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
<span class="text-sm font-bold text-primary uppercase whitespace-nowrap">GHI CHÚ</span>
<div class="flex flex-wrap gap-x-6 gap-y-3">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Hoàn thành trong 7–15 ngày</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Có xuất VAT</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Làm ưng mới chốt</span>
</div>
</div>
</div>
</div>
</div>
<div class="space-y-6 lg:col-span-1 bg-background-light dark:bg-card-dark/50 p-6 rounded-xl border border-gray-100 dark:border-gray-700 h-fit sticky top-24">
<h4 class="text-xl font-semibold text-text-main dark:text-white">Các Gói Giải Pháp &amp; Case Study</h4>
<p class="text-text-sub dark:text-gray-400">Chúng tôi cung cấp các gói dịch vụ linh hoạt, phù hợp với mọi quy mô và mục tiêu kinh doanh. Liên hệ để nhận tư vấn gói phù hợp nhất.</p>
<div class="grid grid-cols-1 gap-4">
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">GÓI 2 – TỐI ƯU CƠ BẢN</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">👉 Phù hợp cho shop đang bán nhưng cần tối ưu vận hành &amp; chi phí.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Shop đã có đơn nhưng chưa ổn định</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Chủ shop tự làm nhưng hiệu quả thấp</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Muốn tối ưu gian hàng &amp; chi phí</span></li>
</ul>
</div>
</div>
<div class="mexo-case-study-frame relative w-full aspect-video rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<img alt="Shopee case study dashboard" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBegtbQpsZBUL8qzgU-ysh6OHmIEmOSEsMMUHbL3xMVlvoC3ONbb02dZep4aPg-i6h-5nc_b1-ZXQkgCgWSFggKzwGXrt_LG4zslCA38nhH5IxQOuJ7vt2x0Vj3L5irMYzMimNVQrEr_GFHiVC4ZNP2IEzbhquTNY1QSLeuNo-jAmez8MsO8oIaEuPDEQyYn5tAH-FuzJMikTolGdPAL1OEUBeKfT7b0g6RyG4AYt0xKriXaen8IVbrJrXDvR87D-btrnS-3drRCUA"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-4">
<p class="text-white text-sm">Case Study: Tăng trưởng 250% doanh thu cho thương hiệu thời trang X.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-content" id="tab3">
<div class="p-8 rounded-2xl bg-card-light dark:bg-card-dark shadow-lg border border-gray-100 dark:border-gray-800">
<div class="grid lg:grid-cols-3 gap-10 items-start">
<div class="lg:col-span-2 space-y-8">
<div class="rounded-3xl bg-blue-50/50 dark:bg-blue-900/10 border border-blue-100 dark:border-blue-900/30 p-8 lg:p-10 relative overflow-hidden group">
<div class="absolute inset-0 bg-gradient-to-br from-blue-100/30 to-white/0 dark:from-blue-900/20 pointer-events-none"></div>
<div class="relative z-10 space-y-6">
<div class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-sm font-bold text-orange-600 dark:bg-orange-900/20 dark:border-orange-500/30 dark:text-orange-400">
<span class="material-symbols-outlined text-[18px] icon-filled">local_fire_department</span>
                                    Dịch vụ HOT nhất
                                </div>
<div class="space-y-2">
<h3 class="text-4xl lg:text-5xl font-black tracking-tight text-primary dark:text-white uppercase leading-tight">
                                        XÂY DỰNG GIAN HÀNG<br/>
                                        SHOPEE TRỌN GÓI 3
                                    </h3>
</div>
<p class="max-w-3xl text-lg text-text-sub dark:text-gray-300 leading-relaxed font-medium">
                                    Khởi tạo và vận hành chuyên nghiệp từ A-Z. Giải pháp tối ưu giúp bạn tiết kiệm thời gian, tối đa hóa doanh thu và xây dựng nền móng vững chắc trên sàn TMĐT số 1 Việt Nam.
                                </p>
<div class="flex flex-col sm:flex-row gap-4 pt-2">
<button type="button"
    onclick="window.location.href='/lien-he/';" class="flex items-center justify-center gap-2 rounded-full bg-primary px-8 py-4 text-base font-bold text-white shadow-lg shadow-primary/25 transition-all hover:bg-primary-dark hover:-translate-y-1">
                                        Chọn gói này
                                        <span class="material-symbols-outlined text-xl">arrow_forward</span>
</button>
<button class="flex items-center justify-center gap-2 rounded-full border-2 border-white bg-white px-8 py-4 text-base font-bold text-text-main shadow-sm transition-all hover:bg-gray-50 hover:-translate-y-1 dark:bg-transparent dark:border-gray-700 dark:text-white dark:hover:bg-white/5">
                                        6.800.000 (Chưa bao gồm VAT)
                                    </button>
</div>
</div>
</div>
<div class="rounded-xl border border-gray-100 bg-gray-50/50 p-6 dark:border-gray-800 dark:bg-card-dark/30 mt-8">
<div class="flex items-center gap-3 mb-6">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100 text-primary dark:bg-blue-900/30">
<span class="material-symbols-outlined">checklist</span>
</div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Quy trình triển khai chi tiết</h4>
</div>
<ul class="space-y-4">
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">1</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tư vấn đăng ký - thiết lập định danh gian hàng mới</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">2</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết lập các chương trình marketing nội sàn</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">3</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Đăng <b>65 sản phẩm</b> chuẩn SEO</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">4</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết kế đồng bộ (1 ảnh bìa và 3 ảnh phụ) theo đúng insight khách hàng</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">5</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết kế 04 banner trang trí shop chuyên nghiệp</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">6</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tặng checklist bán hàng chuẩn chuyên sâu</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">7</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tặng 45 ngày livestream tự động (90 phiên livestream)</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">8</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tăng chỉ số follow - theo dõi cho shop(5000 follow)</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">9</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Đồng hành hỗ trợ trọn đời trong quá trình bán hàng</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">10</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Hướng dẫn vận hành kinh doan sàn TMĐT 1:1 online hoặc offline</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">11</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Cài đặt và tối ưu chiến dịch quảng cáo để tiếp cận và chuyển đổi</span></li>
</ul>
</div>
<div class="rounded-xl border border-blue-100 bg-blue-50/30 p-5 dark:border-blue-900/30 dark:bg-blue-900/10">
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
<span class="text-sm font-bold text-primary uppercase whitespace-nowrap">GHI CHÚ</span>
<div class="flex flex-wrap gap-x-6 gap-y-3">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Hoàn thành trong 7–15 ngày</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Có xuất VAT</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Làm ưng mới chốt</span>
</div>
</div>
</div>
</div>
</div>
<div class="space-y-6 lg:col-span-1 bg-background-light dark:bg-card-dark/50 p-6 rounded-xl border border-gray-100 dark:border-gray-700 h-fit sticky top-24">
<h4 class="text-xl font-semibold text-text-main dark:text-white">Các Gói Giải Pháp &amp; Case Study</h4>
<p class="text-text-sub dark:text-gray-400">Chúng tôi cung cấp các gói dịch vụ linh hoạt, phù hợp với mọi quy mô và mục tiêu kinh doanh. Liên hệ để nhận tư vấn gói phù hợp nhất.</p>
<div class="grid grid-cols-1 gap-4">
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">GÓI 3 – TĂNG TRƯỞNG</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">👉 Phù hợp cho shop muốn tăng đơn, mở rộng doanh thu.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Shop đang bán tốt, muốn scale</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Chủ shop không có thời gian tự vận hành</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Cần đội ngũ chuyên nghiệp quản lý</span></li>
</ul>
</div>
</div>
<div class="mexo-case-study-frame relative w-full aspect-video rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<img alt="Shopee case study dashboard" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBegtbQpsZBUL8qzgU-ysh6OHmIEmOSEsMMUHbL3xMVlvoC3ONbb02dZep4aPg-i6h-5nc_b1-ZXQkgCgWSFggKzwGXrt_LG4zslCA38nhH5IxQOuJ7vt2x0Vj3L5irMYzMimNVQrEr_GFHiVC4ZNP2IEzbhquTNY1QSLeuNo-jAmez8MsO8oIaEuPDEQyYn5tAH-FuzJMikTolGdPAL1OEUBeKfT7b0g6RyG4AYt0xKriXaen8IVbrJrXDvR87D-btrnS-3drRCUA"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-4">
<p class="text-white text-sm">Case Study: Tăng trưởng 250% doanh thu cho thương hiệu thời trang X.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-content" id="tab4">
<div class="p-8 rounded-2xl bg-card-light dark:bg-card-dark shadow-lg border border-gray-100 dark:border-gray-800">
<div class="grid lg:grid-cols-3 gap-10 items-start">
<div class="lg:col-span-2 space-y-8">
<div class="rounded-3xl bg-blue-50/50 dark:bg-blue-900/10 border border-blue-100 dark:border-blue-900/30 p-8 lg:p-10 relative overflow-hidden group">
<div class="absolute inset-0 bg-gradient-to-br from-blue-100/30 to-white/0 dark:from-blue-900/20 pointer-events-none"></div>
<div class="relative z-10 space-y-6">
<div class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-sm font-bold text-orange-600 dark:bg-orange-900/20 dark:border-orange-500/30 dark:text-orange-400">
<span class="material-symbols-outlined text-[18px] icon-filled">local_fire_department</span>
                                    Dịch vụ HOT nhất
                                </div>
<div class="space-y-2">
<h3 class="text-4xl lg:text-5xl font-black tracking-tight text-primary dark:text-white uppercase leading-tight">
                                        XÂY DỰNG GIAN HÀNG<br/>
                                        SHOPEE TRỌN GÓI 4
                                    </h3>
</div>
<p class="max-w-3xl text-lg text-text-sub dark:text-gray-300 leading-relaxed font-medium">
                                    Khởi tạo và vận hành chuyên nghiệp từ A-Z. Giải pháp tối ưu giúp bạn tiết kiệm thời gian, tối đa hóa doanh thu và xây dựng nền móng vững chắc trên sàn TMĐT số 1 Việt Nam.
                                </p>
<div class="flex flex-col sm:flex-row gap-4 pt-2">
<button type="button"
    onclick="window.location.href='/lien-he/';" class="flex items-center justify-center gap-2 rounded-full bg-primary px-8 py-4 text-base font-bold text-white shadow-lg shadow-primary/25 transition-all hover:bg-primary-dark hover:-translate-y-1">
                                        Chọn gói này
                                        <span class="material-symbols-outlined text-xl">arrow_forward</span>
</button>
<button class="flex items-center justify-center gap-2 rounded-full border-2 border-white bg-white px-8 py-4 text-base font-bold text-text-main shadow-sm transition-all hover:bg-gray-50 hover:-translate-y-1 dark:bg-transparent dark:border-gray-700 dark:text-white dark:hover:bg-white/5">
                                        10.000.000 (Chưa bao gồm VAT)
                                    </button>
</div>
</div>
</div>
<div class="rounded-xl border border-gray-100 bg-gray-50/50 p-6 dark:border-gray-800 dark:bg-card-dark/30 mt-8">
<div class="flex items-center gap-3 mb-6">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100 text-primary dark:bg-blue-900/30">
<span class="material-symbols-outlined">checklist</span>
</div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Quy trình triển khai chi tiết</h4>
</div>
<ul class="space-y-4">
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">1</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tư vấn đăng ký - thiết lập định danh gian hàng mới</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">2</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết lập các chương trình marketing nội sàn</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">3</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Đăng <b>90 sản phẩm</b> chuẩn SEO</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">4</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết kế đồng bộ (1 ảnh bìa và 3 ảnh phụ) theo đúng insight khách hàng</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">5</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Thiết kế 05 banner trang trí shop chuyên nghiệp</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">6</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tặng checklist bán hàng chuẩn chuyên sâu</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">7</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tặng 60 ngày livestream tự động (120 phiên livestream)</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">8</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Tăng chỉ số follow - theo dõi cho shop(7000 follow)</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">9</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Đồng hành hỗ trợ trọn đời trong quá trình bán hàng</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">10</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Hướng dẫn vận hành kinh doan sàn TMĐT 1:1 online hoặc offline</span></li>
<li class="flex items-start gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-white shadow-lg shadow-blue-500/20">11</span><span class="text-[15px] font-medium leading-loose text-text-main dark:text-gray-200">Cài đặt và tối ưu chiến dịch quảng cáo để tiếp cận và chuyển đổi</span></li>
</ul>
</div>
<div class="rounded-xl border border-blue-100 bg-blue-50/30 p-5 dark:border-blue-900/30 dark:bg-blue-900/10">
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
<span class="text-sm font-bold text-primary uppercase whitespace-nowrap">GHI CHÚ</span>
<div class="flex flex-wrap gap-x-6 gap-y-3">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Hoàn thành trong 15–25 ngày</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Có xuất VAT</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] text-[#22c55e] icon-filled">check_circle</span>
<span class="text-sm font-semibold text-text-main dark:text-gray-200">Làm ưng mới chốt</span>
</div>
</div>
</div>
</div>
</div>
<div class="space-y-6 lg:col-span-1 bg-background-light dark:bg-card-dark/50 p-6 rounded-xl border border-gray-100 dark:border-gray-700 h-fit sticky top-24">
<h4 class="text-xl font-semibold text-text-main dark:text-white">Các Gói Giải Pháp &amp; Case Study</h4>
<p class="text-text-sub dark:text-gray-400">Chúng tôi cung cấp các gói dịch vụ linh hoạt, phù hợp với mọi quy mô và mục tiêu kinh doanh. Liên hệ để nhận tư vấn gói phù hợp nhất.</p>
<div class="grid grid-cols-1 gap-4">
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">Gói 4 – BỨT PHÁ</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">👉 Phù hợp cho doanh nghiệp cần vận hành chuyên nghiệp A–Z.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Doanh nghiệp / thương hiệu bán dài hạn</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Muốn quản lý A–Z – làm bài bản</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Mục tiêu bứt phá &amp; dẫn đầu ngành</span></li>
</ul>
</div>
</div>
<div class="mexo-case-study-frame relative w-full aspect-video rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<img alt="Shopee case study dashboard" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBegtbQpsZBUL8qzgU-ysh6OHmIEmOSEsMMUHbL3xMVlvoC3ONbb02dZep4aPg-i6h-5nc_b1-ZXQkgCgWSFggKzwGXrt_LG4zslCA38nhH5IxQOuJ7vt2x0Vj3L5irMYzMimNVQrEr_GFHiVC4ZNP2IEzbhquTNY1QSLeuNo-jAmez8MsO8oIaEuPDEQyYn5tAH-FuzJMikTolGdPAL1OEUBeKfT7b0g6RyG4AYt0xKriXaen8IVbrJrXDvR87D-btrnS-3drRCUA"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-4">
<p class="text-white text-sm">Case Study: Tăng trưởng 250% doanh thu cho thương hiệu thời trang X.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="bg-background-light dark:bg-background-dark py-16">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<h3 class="text-2xl font-black text-center text-text-main dark:text-white uppercase mb-10">
            DỊCH VỤ NÀY PHÙ HỢP VỚI AI?
        </h3>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="group relative flex flex-col gap-6 rounded-2xl bg-white p-6 shadow-sm border border-gray-100 transition-all hover:shadow-lg hover:-translate-y-1 dark:bg-card-dark dark:border-gray-700 h-full">
<div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 dark:bg-blue-900/20 rounded-bl-[100px] rounded-tr-2xl -z-0 transition-transform group-hover:scale-110 origin-top-right"></div>
<div class="relative z-10 flex-shrink-0">
<div class="inline-flex h-14 w-14 items-center justify-center rounded-xl bg-blue-100 text-blue-600 shadow-md shadow-blue-500/20 dark:bg-blue-600/20 dark:text-blue-400">
<span class="material-symbols-outlined text-3xl icon-filled">rocket_launch</span>
</div>
</div>
<div class="relative z-10 flex flex-col flex-grow">
<h4 class="mb-3 text-lg font-bold text-text-main dark:text-white uppercase">Start-up</h4>
<p class="text-sm text-text-sub leading-relaxed dark:text-gray-400 mb-4 flex-grow">
                        Người mới bắt đầu kinh doanh, chưa có kinh nghiệm, loay hoay trong việc tạo gian hàng và vận hành ban đầu.
                    </p>
<div class="mt-auto flex items-center text-xs font-bold text-primary dark:text-blue-400">
<span class="material-symbols-outlined mr-1 text-base icon-filled text-[#22c55e]">check_circle</span>
                        Giải pháp trọn gói A-Z
                    </div>
</div>
</div>
<div class="group relative flex flex-col gap-6 rounded-2xl bg-white p-6 shadow-sm border border-gray-100 transition-all hover:shadow-lg hover:-translate-y-1 dark:bg-card-dark dark:border-gray-700 h-full">
<div class="absolute top-0 right-0 w-24 h-24 bg-orange-50 dark:bg-orange-900/20 rounded-bl-[100px] rounded-tr-2xl -z-0 transition-transform group-hover:scale-110 origin-top-right"></div>
<div class="relative z-10 flex-shrink-0">
<div class="inline-flex h-14 w-14 items-center justify-center rounded-xl bg-orange-100 text-orange-600 shadow-md shadow-orange-500/20 dark:bg-orange-600/20 dark:text-orange-400">
<span class="material-symbols-outlined text-3xl icon-filled">storefront</span>
</div>
</div>
<div class="relative z-10 flex flex-col flex-grow">
<h4 class="mb-3 text-lg font-bold text-text-main dark:text-white uppercase">Chủ Shop Offline</h4>
<p class="text-sm text-text-sub leading-relaxed dark:text-gray-400 mb-4 flex-grow">
                        Muốn chuyển đổi số, mở rộng kênh phân phối online để tiếp cận hàng triệu khách hàng tiềm năng trên Shopee.
                    </p>
<div class="mt-auto flex items-center text-xs font-bold text-primary dark:text-blue-400">
<span class="material-symbols-outlined mr-1 text-base icon-filled text-[#22c55e]">check_circle</span>
                        Chuyển đổi số dễ dàng
                    </div>
</div>
</div>
<div class="group relative flex flex-col gap-6 rounded-2xl bg-white p-6 shadow-sm border border-gray-100 transition-all hover:shadow-lg hover:-translate-y-1 dark:bg-card-dark dark:border-gray-700 h-full">
<div class="absolute top-0 right-0 w-24 h-24 bg-red-50 dark:bg-red-900/20 rounded-bl-[100px] rounded-tr-2xl -z-0 transition-transform group-hover:scale-110 origin-top-right"></div>
<div class="relative z-10 flex-shrink-0">
<div class="inline-flex h-14 w-14 items-center justify-center rounded-xl bg-red-100 text-red-600 shadow-md shadow-red-500/20 dark:bg-red-600/20 dark:text-red-400">
<span class="material-symbols-outlined text-3xl icon-filled">trending_down</span>
</div>
</div>
<div class="relative z-10 flex flex-col flex-grow">
<h4 class="mb-3 text-lg font-bold text-text-main dark:text-white uppercase">Shop Kém Hiệu Quả</h4>
<p class="text-sm text-text-sub leading-relaxed dark:text-gray-400 mb-4 flex-grow">
                        Gian hàng vắng khách, tỷ lệ chuyển đổi thấp, hình ảnh thiếu chuyên nghiệp hoặc vi phạm chính sách của sàn.
                    </p>
<div class="mt-auto flex items-center text-xs font-bold text-primary dark:text-blue-400">
<span class="material-symbols-outlined mr-1 text-base icon-filled text-[#22c55e]">check_circle</span>
                        Tối ưu &amp; Khôi phục Shop
                    </div>
</div>
</div>
<div class="group relative flex flex-col gap-6 rounded-2xl bg-white p-6 shadow-sm border border-gray-100 transition-all hover:shadow-lg hover:-translate-y-1 dark:bg-card-dark dark:border-gray-700 h-full">
<div class="absolute top-0 right-0 w-24 h-24 bg-purple-50 dark:bg-purple-900/20 rounded-bl-[100px] rounded-tr-2xl -z-0 transition-transform group-hover:scale-110 origin-top-right"></div>
<div class="relative z-10 flex-shrink-0">
<div class="inline-flex h-14 w-14 items-center justify-center rounded-xl bg-purple-100 text-purple-600 shadow-md shadow-purple-500/20 dark:bg-purple-600/20 dark:text-purple-400">
<span class="material-symbols-outlined text-3xl icon-filled">business_center</span>
</div>
</div>
<div class="relative z-10 flex flex-col flex-grow">
<h4 class="mb-3 text-lg font-bold text-text-main dark:text-white uppercase">Doanh Nghiệp Bận Rộn</h4>
<p class="text-sm text-text-sub leading-relaxed dark:text-gray-400 mb-4 flex-grow">
                        Không có thời gian tự mày mò, cần một đơn vị chuyên nghiệp setup trọn gói từ A-Z để bàn giao vận hành.
                    </p>
<div class="mt-auto flex items-center text-xs font-bold text-primary dark:text-blue-400">
<span class="material-symbols-outlined mr-1 text-base icon-filled text-[#22c55e]">check_circle</span>
                        Tiết kiệm thời gian
                    </div>
</div>
</div>
</div>
</div>
</div>
<div class="bg-white dark:bg-background-dark py-12">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<h3 class="text-2xl font-black text-center text-text-main dark:text-white uppercase mb-10">
            LỢI ÍCH KHÁCH HÀNG NHẬN ĐƯỢC
        </h3>
<div class="rounded-2xl bg-white p-8 shadow-sm border border-gray-100 dark:bg-card-dark dark:border-gray-700">
<div class="grid md:grid-cols-2 gap-y-6 gap-x-12">
<div class="flex items-start gap-4">
<div class="flex-shrink-0 mt-1">
<span class="material-symbols-outlined text-2xl text-[#22c55e] icon-filled">check_circle</span>
</div>
<div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Sở hữu gian hàng chuẩn SEO</h4>
<p class="text-text-sub dark:text-gray-400 mt-1 text-sm">Tối ưu hóa toàn diện từ hình ảnh đến từ khóa, giúp shop hiển thị top tìm kiếm tự nhiên.</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="flex-shrink-0 mt-1">
<span class="material-symbols-outlined text-2xl text-[#22c55e] icon-filled">check_circle</span>
</div>
<div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Giao diện chuyên nghiệp &amp; thu hút</h4>
<p class="text-text-sub dark:text-gray-400 mt-1 text-sm">Thiết kế đồng bộ nhận diện thương hiệu, tạo ấn tượng mạnh và gia tăng tỷ lệ chuyển đổi.</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="flex-shrink-0 mt-1">
<span class="material-symbols-outlined text-2xl text-[#22c55e] icon-filled">check_circle</span>
</div>
<div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Vận hành bài bản ngay từ đầu</h4>
<p class="text-text-sub dark:text-gray-400 mt-1 text-sm">Hệ thống được thiết lập chuẩn sàn, quy trình rõ ràng giúp doanh nghiệp dễ dàng quản lý.</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="flex-shrink-0 mt-1">
<span class="material-symbols-outlined text-2xl text-[#22c55e] icon-filled">check_circle</span>
</div>
<div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Tiết kiệm thời gian &amp; chi phí</h4>
<p class="text-text-sub dark:text-gray-400 mt-1 text-sm">Rút ngắn thời gian thử nghiệm, tối ưu chi phí nhân sự và hạn chế sai sót không đáng có.</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="flex-shrink-0 mt-1">
<span class="material-symbols-outlined text-2xl text-[#22c55e] icon-filled">check_circle</span>
</div>
<div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Hạn chế rủi ro vi phạm</h4>
<p class="text-text-sub dark:text-gray-400 mt-1 text-sm">Tránh các lỗi khóa shop, xóa sản phẩm nhờ tuân thủ chặt chẽ chính sách của Shopee.</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="flex-shrink-0 mt-1">
<span class="material-symbols-outlined text-2xl text-[#22c55e] icon-filled">check_circle</span>
</div>
<div>
<h4 class="text-lg font-bold text-text-main dark:text-white">Sở hữu tài sản số bền vững</h4>
<p class="text-text-sub dark:text-gray-400 mt-1 text-sm">Gian hàng thuộc quyền sở hữu 100% của doanh nghiệp, là kênh bán hàng sinh lời dài hạn.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<?php echo mexo_render_faq_accordion( 'Câu hỏi thường gặp về xây dựng Shop Shopee', mexo_service_faq_items( 'xay-shop' ) ); ?>
<section class="bg-background-light py-16 dark:bg-background-dark">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="mb-10 text-center">
<h3 class="text-lg font-bold uppercase tracking-wider text-text-sub opacity-70">Đối tác &amp; Hệ sinh thái</h3>
</div>
<div class="grid grid-cols-2 gap-8 md:grid-cols-4 lg:grid-cols-6 items-center opacity-70 grayscale transition-all hover:opacity-100 hover:grayscale-0">
<div class="flex items-center justify-center p-4">
<div class="h-8 w-24 bg-gray-400/50 dark:bg-gray-600/50 rounded mask-image-contain" style="-webkit-mask-image: url('https://placeholder.pics/svg/100x40'); mask-image: url('https://placeholder.pics/svg/100x40'); background-color: currentColor;"></div>
<span class="text-xl font-bold text-gray-500">SHOPEE</span>
</div>
<div class="flex items-center justify-center p-4">
<span class="text-xl font-bold text-gray-500">TIKTOK</span>
</div>
<div class="flex items-center justify-center p-4">
<span class="text-xl font-bold text-gray-500">LAZADA</span>
</div>
<div class="flex items-center justify-center p-4">
<span class="text-xl font-bold text-gray-500">META</span>
</div>
<div class="flex items-center justify-center p-4">
<span class="text-xl font-bold text-gray-500">GOOGLE</span>
</div>
<div class="flex items-center justify-center p-4">
<span class="text-xl font-bold text-gray-500">TAOBAO</span>
</div>
</div>
<div class="mt-16 rounded-2xl bg-primary p-8 text-center md:p-16 relative overflow-hidden">
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

<div class="mexo-case-lightbox" id="mexo-case-lightbox" aria-hidden="true">
    <button type="button" aria-label="Đóng ảnh phóng to">&times;</button>
    <img src="" alt="Ảnh case study Shopee phóng to"/>
</div>

<script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            const caseLightbox = document.getElementById('mexo-case-lightbox');
            const caseLightboxImg = caseLightbox ? caseLightbox.querySelector('img') : null;
            const closeCaseLightbox = () => {
                if (!caseLightbox || !caseLightboxImg) return;
                caseLightbox.classList.remove('is-open');
                caseLightbox.setAttribute('aria-hidden', 'true');
                caseLightboxImg.src = '';
            };

            document.querySelectorAll('.mexo-case-study-frame').forEach(frame => {
                frame.addEventListener('click', () => {
                    const img = frame.querySelector('img');
                    if (!img || !caseLightbox || !caseLightboxImg) return;
                    caseLightboxImg.src = img.currentSrc || img.src;
                    caseLightbox.classList.add('is-open');
                    caseLightbox.setAttribute('aria-hidden', 'false');
                });
            });
            if (caseLightbox) {
                caseLightbox.addEventListener('click', (event) => {
                    if (event.target === caseLightbox || event.target.closest('button')) {
                        closeCaseLightbox();
                    }
                });
            }
            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') closeCaseLightbox();
            });

            function activateTab(tabId) {
                tabButtons.forEach(button => {
                    if (button.dataset.tab === tabId) {
                        button.classList.add('active');
                        button.style.backgroundColor = '';
                        button.style.borderColor = '';
                        button.style.color = '';
                    } else {
                        button.classList.remove('active');
                        button.style.backgroundColor = '';
                        button.style.borderColor = '';
                        button.style.color = '';
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
            activateTab('tab1');
            // Handle dark mode toggle for tab colors
            const darkModeObserver = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.attributeName === 'class') {
                        const activeTabButton = document.querySelector('.tab-button.active');
                        if (activeTabButton) {
                            activeTabButton.style.backgroundColor = '';
                            activeTabButton.style.borderColor = '';
                            activeTabButton.style.color = '';
                        }
                    }
                });
            });
            darkModeObserver.observe(document.documentElement, { attributes: true });
        });
    </script>
<?php get_footer(); ?>

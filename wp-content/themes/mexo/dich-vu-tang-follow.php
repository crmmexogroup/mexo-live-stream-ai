<?php
/* Template Name: Tăng Follow & Kháng Vi Phạm */
get_header();
?>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<script>
    if (tailwind && tailwind.config) {
        tailwind.config.theme = tailwind.config.theme || {};
        tailwind.config.theme.extend = tailwind.config.theme.extend || {};
        tailwind.config.theme.extend.colors = tailwind.config.theme.extend.colors || {};
        tailwind.config.theme.extend.fontFamily = tailwind.config.theme.extend.fontFamily || {};
        tailwind.config.theme.extend.boxShadow = tailwind.config.theme.extend.boxShadow || {};
        tailwind.config.theme.extend.borderRadius = tailwind.config.theme.extend.borderRadius || {};

        tailwind.config.theme.extend.colors.primary = "#0d59f2";
        tailwind.config.theme.extend.colors['primary-dark'] = "#0a47c4";
        tailwind.config.theme.extend.colors.accent = "#ff6b00";
        tailwind.config.theme.extend.colors['background-light'] = "#f8f9fc";
        tailwind.config.theme.extend.colors['background-dark'] = "#101622";
        
        tailwind.config.theme.extend.fontFamily.display = ["Inter", "sans-serif"];
        
        tailwind.config.theme.extend.boxShadow.glow = '0 0 20px rgba(13, 89, 242, 0.15)';
        tailwind.config.theme.extend.boxShadow.card = '0 10px 30px -5px rgba(0, 0, 0, 0.05)';
        tailwind.config.theme.extend.boxShadow['card-hover'] = '0 20px 40px -5px rgba(13, 89, 242, 0.1)';
        tailwind.config.theme.extend.boxShadow.neumorphism = '20px 20px 60px #d1d9e6, -20px -20px 60px #ffffff';

        // Add custom border radius if not conflicting, or just rely on standard tailwind classes where possible, 
        // but for safety we can add them to extend
        Object.assign(tailwind.config.theme.extend.borderRadius, {
            "lg": "1.5rem", "xl": "2rem", "2xl": "2.5rem", "3xl": "3rem"
        });
    }
</script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .gradient-text {
            background: linear-gradient(135deg, #0d59f2 0%, #00c6ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bg-grid-pattern {
            background-image: radial-gradient(#0d59f2 0.5px, transparent 0.5px);
            background-size: 20px 20px;
            opacity: 0.05;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
</style>
<div class="bg-slate-50 dark:bg-background-dark font-display text-[#0d121c] dark:text-white overflow-x-hidden">
<section class="mexo-service-hero relative flex flex-col items-center justify-center px-4 py-20 md:px-10 lg:px-20 xl:px-40 lg:py-28 overflow-hidden bg-gradient-to-b from-white via-blue-50/50 to-white">
<div class="absolute inset-0 bg-grid-pattern pointer-events-none"></div>
<div class="absolute top-10 right-10 w-[300px] h-[300px] bg-cyan-200 rounded-full blur-[100px] opacity-30 -z-10 animate-pulse"></div>
<div class="absolute bottom-10 left-10 w-[400px] h-[400px] bg-blue-200 rounded-full blur-[100px] opacity-30 -z-10 animate-pulse delay-1000"></div>
<div class="layout-content-container flex flex-col max-w-[1280px] w-full z-10">
<div class="flex flex-col-reverse gap-12 lg:flex-row lg:items-center">
<div class="flex flex-1 flex-col gap-8 lg:pr-10">
<div class="mexo-hero-pill inline-flex w-fit items-center gap-2 rounded-full border border-blue-200 bg-white/80 backdrop-blur-sm px-4 py-1.5 shadow-sm hover:shadow-md transition-shadow">
<span class="material-symbols-outlined text-[18px] text-primary">verified_user</span>
<span class="text-xs font-bold uppercase tracking-wide text-primary">Giải pháp Shopee toàn diện 2026</span>
</div>
<h1 class="text-4xl font-black leading-[1.15] tracking-tight text-[#0d121c] dark:text-white md:text-5xl lg:text-6xl">
<span class="gradient-text">TĂNG FOLLOW</span> <br/>
                        &amp; HỖ TRỢ KHÁNG VI PHẠM SHOPEE
                    </h1>
<p class="text-lg text-gray-600 dark:text-gray-300 font-medium leading-relaxed max-w-xl">
                        Giữ an toàn gian hàng – bảo vệ thương hiệu – duy trì tăng trưởng bền vững. MEXO GROUP xử lý triệt để các rủi ro khóa shop, vi phạm chính sách và bảo vệ thương hiệu của bạn.
                    </p>
<div class="glass-card rounded-2xl p-6 shadow-card hover:shadow-card-hover transition-shadow duration-300">
<h3 class="font-bold text-gray-800 dark:text-white flex items-center gap-2 mb-3">
<span class="material-symbols-outlined text-amber-500">warning</span>
                            Bạn đang gặp vấn đề?
                        </h3>
<div class="flex flex-wrap gap-2">
<span class="rounded-lg bg-red-50 border border-red-100 px-3 py-1.5 text-sm font-semibold text-red-600 hover:bg-red-100 transition-colors cursor-default shadow-sm">Bị khóa shop</span>
<span class="rounded-lg bg-red-50 border border-red-100 px-3 py-1.5 text-sm font-semibold text-red-600 hover:bg-red-100 transition-colors cursor-default shadow-sm">Bị report giả mạo</span>
<span class="rounded-lg bg-red-50 border border-red-100 px-3 py-1.5 text-sm font-semibold text-red-600 hover:bg-red-100 transition-colors cursor-default shadow-sm">Điểm tạ cao</span>
<span class="rounded-lg bg-red-50 border border-red-100 px-3 py-1.5 text-sm font-semibold text-red-600 hover:bg-red-100 transition-colors cursor-default shadow-sm">Mất Shop Mall</span>
</div>
</div>
<div class="flex flex-col gap-4 pt-2 sm:flex-row">
<button type="button"
    onclick="window.location.href='/lien-he/';" class="flex h-14 min-w-[180px] cursor-pointer items-center justify-center rounded-full bg-gradient-to-r from-primary to-blue-600 px-8 text-base font-bold text-white shadow-lg shadow-blue-500/30 hover:shadow-blue-500/50 hover:-translate-y-1 transition-all duration-300">
                            Tư vấn giải pháp ngay
                        </button>
<button class="flex h-14 min-w-[180px] cursor-pointer items-center justify-center rounded-full border border-gray-200 bg-white px-8 text-base font-bold text-gray-700 hover:border-primary hover:text-primary hover:bg-blue-50/50 transition-all duration-300 shadow-sm hover:shadow-md">
                            Xem quy trình
                        </button>
</div>
</div>
<div class="flex-1 lg:pl-10">
<div class="relative w-full aspect-square md:aspect-[4/3] lg:aspect-square rounded-[3rem] overflow-hidden shadow-2xl bg-gradient-to-br from-blue-50 to-white dark:from-gray-800 dark:to-gray-900 flex items-center justify-center border-8 border-white/50 ring-1 ring-gray-100" data-alt="Abstract 3D shield protecting a rising growth chart">
<div class="absolute top-[-50%] left-[-50%] w-[200%] h-[200%] bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-blue-100/40 via-transparent to-transparent animate-[spin_20s_linear_infinite]"></div>
<div class="relative z-10 flex flex-col items-center gap-8 p-8 text-center w-full max-w-md">
<div class="relative">
<div class="absolute inset-0 bg-blue-400 blur-3xl opacity-20 rounded-full animate-pulse"></div>
<div class="size-32 rounded-3xl bg-white dark:bg-[#1e2736] shadow-xl flex items-center justify-center text-primary relative z-10 transform transition-transform hover:scale-110 duration-500 border border-blue-50">
<span class="material-symbols-outlined !text-[80px] bg-clip-text text-transparent bg-gradient-to-br from-primary to-blue-400">trending_up</span>
</div>
<div class="absolute -top-4 -right-8 bg-gradient-to-r from-orange-500 to-red-500 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg border-2 border-white transform rotate-12">HỖ TRỢ 24/7</div>
</div>
<div class="grid grid-cols-1 gap-4 w-full">
<div class="bg-white/80 dark:bg-[#1e2736]/90 backdrop-blur-md p-4 rounded-2xl shadow-lg border border-white/60 hover:scale-105 transition-transform duration-300 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="p-2 bg-green-100 rounded-xl text-green-600">
<span class="material-symbols-outlined text-[24px]">verified</span>
</div>
<div class="text-left">
<div class="font-bold text-gray-800 dark:text-white">An toàn tuyệt đối</div>
<div class="text-xs text-gray-500">Giám sát liên tục</div>
</div>
</div>
<div class="radial-progress text-green-500 text-xs font-bold" style="--value:100; --size:2rem;">100%</div>
</div>
<div class="bg-white/80 dark:bg-[#1e2736]/90 backdrop-blur-md p-4 rounded-2xl shadow-lg border border-white/60 hover:scale-105 transition-transform duration-300 translate-x-6 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="p-2 bg-blue-100 rounded-xl text-blue-600">
<span class="material-symbols-outlined text-[24px]">rocket_launch</span>
</div>
<div class="text-left">
<div class="font-bold text-gray-800 dark:text-white">Tăng trưởng nhanh</div>
<div class="text-xs text-gray-500">Hiệu quả dài hạn</div>
</div>
</div>
<span class="material-symbols-outlined text-blue-500">arrow_upward</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="px-4 py-20 md:px-10 lg:px-20 xl:px-40 bg-white dark:bg-background-dark relative">
<div class="layout-content-container mx-auto flex max-w-[1280px] flex-col">
<div class="mb-16 text-center max-w-3xl mx-auto">
<span class="inline-block py-1 px-3 rounded-full bg-blue-50 text-primary font-bold tracking-wider uppercase text-xs mb-3">Dịch vụ chuyên nghiệp</span>
<h2 class="text-3xl font-black tracking-tight text-[#0d121c] dark:text-white md:text-4xl lg:text-5xl">🎯 NHÓM DỊCH VỤ CHÍNH</h2>
<p class="mt-4 text-lg text-gray-500 dark:text-gray-400">Giải pháp chuyên sâu được thiết kế riêng biệt cho từng vấn đề của Shop, đảm bảo hiệu quả tối đa và an toàn tuyệt đối.</p>
</div>
<div class="mb-24 relative">
<div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-[2.5rem] transform rotate-1 opacity-10"></div>
<div class="bg-white dark:bg-[#151c2a] rounded-[2.5rem] p-8 lg:p-12 shadow-2xl border border-blue-100 dark:border-gray-700 relative z-10 overflow-hidden">
<div class="absolute top-0 right-0 p-12 opacity-[0.03] pointer-events-none">
<span class="material-symbols-outlined text-[300px]">group_add</span>
</div>
<div class="grid lg:grid-cols-12 gap-12">
<div class="lg:col-span-5 flex flex-col justify-center gap-8">
<div>
<h3 class="text-3xl font-black text-[#0d121c] dark:text-white mb-2">
<span class="bg-gradient-to-r from-primary to-cyan-500 bg-clip-text text-transparent">DỊCH VỤ TĂNG FOLLOW</span> <br/>
                                    SHOP SHOPEE
                                </h3>
<p class="text-lg text-gray-600 dark:text-gray-300 mt-4 leading-relaxed">
                                    Dịch vụ tăng follow thật, giúp shop mới nhanh chóng có được lòng tin từ khách hàng và hiển thị tốt hơn trên sàn.
                                </p>
</div>
<div class="space-y-4">
<div class="group flex items-start gap-4 p-4 rounded-2xl bg-blue-50/50 hover:bg-blue-50 transition-colors border border-blue-100">
<div class="mt-1 size-10 rounded-full bg-white shadow-sm flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined">rocket_launch</span>
</div>
<div>
<p class="font-bold text-[#0d121c] dark:text-white group-hover:text-primary transition-colors">Dịch vụ này giúp gì?</p>
<p class="text-sm text-gray-500 mt-1">Tăng trust, tăng tỉ lệ chuyển đổi đơn hàng tự nhiên.</p>
</div>
</div>
<div class="group flex items-start gap-4 p-4 rounded-2xl bg-blue-50/50 hover:bg-blue-50 transition-colors border border-blue-100">
<div class="mt-1 size-10 rounded-full bg-white shadow-sm flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined">group</span>
</div>
<div>
<p class="font-bold text-[#0d121c] dark:text-white group-hover:text-primary transition-colors">Phù hợp với:</p>
<p class="text-sm text-gray-500 mt-1">Shop mới tạo, shop cần buff chỉ số để tham gia campaign.</p>
</div>
</div>
<div class="group flex items-start gap-4 p-4 rounded-2xl bg-blue-50/50 hover:bg-blue-50 transition-colors border border-blue-100">
<div class="mt-1 size-10 rounded-full bg-white shadow-sm flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined">ads_click</span>
</div>
<div>
<p class="font-bold text-[#0d121c] dark:text-white group-hover:text-primary transition-colors">Cách triển khai:</p>
<p class="text-sm text-gray-500 mt-1 flex items-center gap-2 font-medium">
<span class="flex items-center gap-1 text-green-600 bg-green-100 px-2 py-0.5 rounded-full text-xs"><span class="material-symbols-outlined text-[14px]">check</span> Seeding</span>
<span class="flex items-center gap-1 text-green-600 bg-green-100 px-2 py-0.5 rounded-full text-xs"><span class="material-symbols-outlined text-[14px]">check</span> Ads nội sàn</span>
</p>
</div>
</div>
</div>
</div>
<div class="lg:col-span-7">
<div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100 dark:border-gray-700 bg-white dark:bg-gray-800">
<div class="bg-gradient-to-r from-primary to-blue-600 p-4 text-white flex justify-between items-center">
<div class="font-bold uppercase tracking-wider text-sm md:text-base pl-4">Số lượng Follow</div>
<div class="font-bold uppercase tracking-wider text-sm md:text-base pr-8">Giá Dịch Vụ</div>
</div>
<div class="flex flex-col text-sm md:text-base">
<div class="flex justify-between items-center p-4 border-b border-gray-100 hover:bg-blue-50 transition-colors">
<div class="pl-4 font-semibold text-gray-700 dark:text-gray-200">1.000 Follow</div>
<div class="pr-4 font-bold text-primary text-lg">150.000 Đ</div>
</div>
<div class="flex justify-between items-center p-4 border-b border-gray-100 bg-gray-50/50 hover:bg-blue-50 transition-colors">
<div class="pl-4 font-semibold text-gray-700 dark:text-gray-200">3.000 Follow</div>
<div class="pr-4 font-bold text-primary text-lg">420.000 Đ</div>
</div>
<div class="flex justify-between items-center p-4 border-b border-gray-100 hover:bg-blue-50 transition-colors">
<div class="pl-4 font-semibold text-gray-700 dark:text-gray-200">4.000 Follow</div>
<div class="pr-4 font-bold text-primary text-lg">550.000 Đ</div>
</div>
<div class="flex justify-between items-center p-4 border-b border-gray-100 bg-gray-50/50 hover:bg-blue-50 transition-colors">
<div class="pl-4 font-semibold text-gray-700 dark:text-gray-200">6.000 Follow</div>
<div class="pr-4 font-bold text-primary text-lg">785.000 Đ</div>
</div>
<div class="flex justify-between items-center p-4 border-b border-gray-100 hover:bg-blue-50 transition-colors">
<div class="pl-4 font-semibold text-gray-700 dark:text-gray-200">10.000 Follow</div>
<div class="pr-4 font-bold text-primary text-lg">1.250.000 Đ</div>
</div>
<div class="flex justify-between items-center p-4 bg-blue-50/30 hover:bg-blue-50 transition-colors">
<div class="pl-4 font-bold text-gray-800 dark:text-white">20.000 Follow</div>
<div class="pr-4 font-black text-orange-500 text-xl">2.350.000 Đ</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
<div class="group relative flex flex-col rounded-3xl bg-white p-6 shadow-card transition-all duration-300 border border-gray-100 dark:bg-[#1e2736] dark:border-gray-700 hover:-translate-y-2 hover:shadow-2xl overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-10 transition-transform group-hover:scale-110 group-hover:rotate-12 duration-500">
<span class="material-symbols-outlined text-[120px] text-blue-500">copyright</span>
</div>
<div class="relative z-10">
<div class="mb-5 flex size-14 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-100 to-blue-200 text-blue-600 shadow-sm group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-[28px]">copyright</span>
</div>
<h3 class="mb-3 text-xl font-bold text-[#0d121c] dark:text-white group-hover:text-primary transition-colors">KHÁNG GIẢ NHÁI</h3>
<p class="mb-6 text-sm text-gray-500 dark:text-gray-300 line-clamp-3 leading-relaxed">Bảo vệ thương hiệu độc quyền, report và xóa bỏ các shop giả mạo, sao chép hình ảnh.</p>
<div class="mt-auto space-y-2 pt-4 border-t border-gray-50 dark:border-gray-700">
<div class="text-xs text-gray-500"><span class="font-bold text-gray-900 dark:text-white">Giúp:</span> Khôi phục link vi phạm..</div>
<div class="text-xs text-gray-500"><span class="font-bold text-gray-900 dark:text-white">Hợp:</span> Brand Owner, shop bị phá.</div>
</div>
</div>
</div>
<div class="group relative flex flex-col rounded-3xl bg-white p-6 shadow-card transition-all duration-300 border border-gray-100 dark:bg-[#1e2736] dark:border-gray-700 hover:-translate-y-2 hover:shadow-2xl overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-10 transition-transform group-hover:scale-110 group-hover:rotate-12 duration-500">
<span class="material-symbols-outlined text-[120px] text-red-500">gavel</span>
</div>
<div class="relative z-10">
<div class="mb-5 flex size-14 items-center justify-center rounded-2xl bg-gradient-to-br from-red-100 to-red-200 text-red-600 shadow-sm group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-[28px]">gavel</span>
</div>
<h3 class="mb-3 text-xl font-bold text-[#0d121c] dark:text-white group-hover:text-red-600 transition-colors">XỬ LÝ VI PHẠM</h3>
<p class="mb-6 text-sm text-gray-500 dark:text-gray-300 line-clamp-3 leading-relaxed">Gỡ gậy, mở khóa shop bị quét vi phạm chính sách, khôi phục quyền bán hàng.</p>
<div class="mt-auto space-y-2 pt-4 border-t border-gray-50 dark:border-gray-700">
<div class="text-xs text-gray-500"><span class="font-bold text-gray-900 dark:text-white">Giúp:</span> Khôi phục hoạt động kinh doanh.</div>
<div class="text-xs text-gray-500"><span class="font-bold text-gray-900 dark:text-white">Hợp:</span> Shop bị khóa, bị giới hạn.</div>
</div>
</div>
</div>
<div class="group relative flex flex-col rounded-3xl bg-white p-6 shadow-card transition-all duration-300 border border-gray-100 dark:bg-[#1e2736] dark:border-gray-700 hover:-translate-y-2 hover:shadow-2xl overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-10 transition-transform group-hover:scale-110 group-hover:rotate-12 duration-500">
<span class="material-symbols-outlined text-[120px] text-orange-500">restart_alt</span>
</div>
<div class="relative z-10">
<div class="mb-5 flex size-14 items-center justify-center rounded-2xl bg-gradient-to-br from-orange-100 to-amber-200 text-orange-600 shadow-sm group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-[28px]">restart_alt</span>
</div>
<h3 class="mb-3 text-xl font-bold text-[#0d121c] dark:text-white group-hover:text-orange-600 transition-colors">GỠ TẠ - KHÔI PHỤC</h3>
<p class="mb-6 text-sm text-gray-500 dark:text-gray-300 line-clamp-3 leading-relaxed">Xóa điểm phạt sao quả tạ do vận hành sai, giúp shop lấy lại hiển thị và tham gia campaign.</p>
<div class="mt-auto space-y-2 pt-4 border-t border-gray-50 dark:border-gray-700">
<div class="text-xs text-gray-500"><span class="font-bold text-gray-900 dark:text-white">Giúp:</span> Hồi phục hiển thị nhanh chóng.</div>
<div class="text-xs text-gray-500"><span class="font-bold text-gray-900 dark:text-white">Hợp:</span> Shop bị phạt vận hành/hủy đơn.</div>
</div>
</div>
</div>
<div class="group relative flex flex-col rounded-3xl bg-white p-6 shadow-card transition-all duration-300 border border-gray-100 dark:bg-[#1e2736] dark:border-gray-700 hover:-translate-y-2 hover:shadow-2xl overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-10 transition-transform group-hover:scale-110 group-hover:rotate-12 duration-500">
<span class="material-symbols-outlined text-[120px] text-purple-500">storefront</span>
</div>
<div class="relative z-10">
<div class="mb-5 flex size-14 items-center justify-center rounded-2xl bg-gradient-to-br from-purple-100 to-indigo-200 text-purple-600 shadow-sm group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-[28px]">storefront</span>
</div>
<h3 class="mb-3 text-xl font-bold text-[#0d121c] dark:text-white group-hover:text-purple-600 transition-colors">BẢO VỆ SHOP MALL</h3>
<p class="mb-6 text-sm text-gray-500 dark:text-gray-300 line-clamp-3 leading-relaxed">Dịch vụ cao cấp duy trì danh hiệu Mall, chống report bẩn từ đối thủ cạnh tranh.</p>
<div class="mt-auto space-y-2 pt-4 border-t border-gray-50 dark:border-gray-700">
<div class="text-xs text-gray-500"><span class="font-bold text-gray-900 dark:text-white">Giúp:</span> Giữ vững danh hiệu cao quý nhất.</div>
<div class="text-xs text-gray-500"><span class="font-bold text-gray-900 dark:text-white">Hợp:</span> Các gian hàng Shopee Mall.</div>
</div>
</div>
</div>
</div>
</div>
</div></section>
<section class="px-4 py-24 md:px-10 lg:px-20 xl:px-40 bg-slate-50 dark:bg-[#0d121c] relative overflow-hidden">
<div class="layout-content-container mx-auto max-w-[1000px] relative z-10">
<h2 class="mb-20 text-center text-3xl font-black text-[#0d121c] dark:text-white md:text-4xl">
<span class="text-primary mr-2">🔁</span>QUY TRÌNH TRIỂN KHAI
            </h2>
<div class="relative">
<div class="absolute left-[39px] lg:left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-200 via-primary to-blue-200 lg:-translate-x-1/2 rounded-full z-0"></div>
<div class="flex flex-col gap-12">
<div class="flex flex-row lg:items-center relative">
<div class="hidden lg:block lg:flex-1 lg:pr-16 lg:text-right">
<div class="group bg-white dark:bg-[#1e2736] p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-primary">
<h3 class="text-xl font-bold text-[#0d121c] dark:text-white mb-2 group-hover:text-primary transition-colors">Bước 1: Tiếp nhận thông tin</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Lắng nghe vấn đề và thu thập dữ liệu shop một cách chi tiết để hiểu rõ tình trạng.</p>
</div>
</div>
<div class="z-10 flex size-20 shrink-0 items-center justify-center rounded-full bg-white border-[6px] border-blue-100 text-primary shadow-lg lg:order-2 lg:mx-auto">
<span class="material-symbols-outlined text-[32px]">assignment</span>
</div>
<div class="flex-1 pl-8 lg:hidden">
<h3 class="text-xl font-bold text-[#0d121c] dark:text-white mb-2">Bước 1: Tiếp nhận thông tin</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Lắng nghe vấn đề và thu thập dữ liệu shop một cách chi tiết để hiểu rõ tình trạng.</p>
</div>
<div class="hidden lg:block lg:flex-1 lg:pl-16">
<span class="text-8xl font-black text-gray-200 select-none">01</span>
</div>
</div>
<div class="flex flex-row lg:items-center relative">
<div class="hidden lg:block lg:flex-1 lg:pr-16 lg:text-right">
<span class="text-8xl font-black text-gray-200 select-none">02</span>
</div>
<div class="z-10 flex size-20 shrink-0 items-center justify-center rounded-full bg-white border-[6px] border-blue-100 text-primary shadow-lg lg:order-2 lg:mx-auto">
<span class="material-symbols-outlined text-[32px]">analytics</span>
</div>
<div class="flex-1 pl-8 lg:pl-16">
<div class="group bg-white dark:bg-[#1e2736] p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 lg:border-l-0 lg:border-r-4 border-primary">
<h3 class="text-xl font-bold text-[#0d121c] dark:text-white mb-2 group-hover:text-primary transition-colors">Bước 2: Phân tích &amp; Đánh giá</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Kiểm tra mức độ vi phạm, phân tích rủi ro và đánh giá khả năng xử lý thành công.</p>
</div>
</div>
</div>
<div class="flex flex-row lg:items-center relative">
<div class="hidden lg:block lg:flex-1 lg:pr-16 lg:text-right">
<div class="group bg-white dark:bg-[#1e2736] p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-primary">
<h3 class="text-xl font-bold text-[#0d121c] dark:text-white mb-2 group-hover:text-primary transition-colors">Bước 3: Đề xuất &amp; Báo giá</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Lên kế hoạch chi tiết, đề xuất giải pháp tối ưu và báo giá minh bạch.</p>
</div>
</div>
<div class="z-10 flex size-20 shrink-0 items-center justify-center rounded-full bg-white border-[6px] border-blue-100 text-primary shadow-lg lg:order-2 lg:mx-auto">
<span class="material-symbols-outlined text-[32px]">signature</span>
</div>
<div class="flex-1 pl-8 lg:hidden">
<h3 class="text-xl font-bold text-[#0d121c] dark:text-white mb-2">Bước 3: Đề xuất &amp; Báo giá</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Lên kế hoạch chi tiết, đề xuất giải pháp tối ưu và báo giá minh bạch.</p>
</div>
<div class="hidden lg:block lg:flex-1 lg:pl-16">
<span class="text-8xl font-black text-gray-200 select-none">03</span>
</div>
</div>
<div class="flex flex-row lg:items-center relative">
<div class="hidden lg:block lg:flex-1 lg:pr-16 lg:text-right">
<span class="text-8xl font-black text-gray-200 select-none">04</span>
</div>
<div class="z-10 flex size-20 shrink-0 items-center justify-center rounded-full bg-white border-[6px] border-blue-100 text-primary shadow-lg lg:order-2 lg:mx-auto">
<span class="material-symbols-outlined text-[32px]">engineering</span>
</div>
<div class="flex-1 pl-8 lg:pl-16">
<div class="group bg-white dark:bg-[#1e2736] p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 lg:border-l-0 lg:border-r-4 border-primary">
<h3 class="text-xl font-bold text-[#0d121c] dark:text-white mb-2 group-hover:text-primary transition-colors">Bước 4: Triển khai xử lý</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Thực hiện các nghiệp vụ chuyên môn, kháng cáo và xử lý vấn đề theo kế hoạch.</p>
</div>
</div>
</div>
<div class="flex flex-row lg:items-center relative">
<div class="hidden lg:block lg:flex-1 lg:pr-16 lg:text-right">
<div class="group bg-white dark:bg-[#1e2736] p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-green-500">
<h3 class="text-xl font-bold text-[#0d121c] dark:text-white mb-2 group-hover:text-green-500 transition-colors">Bước 5: Báo cáo &amp; Nghiệm thu</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Gửi kết quả, bàn giao shop an toàn và chế độ bảo hành dài hạn.</p>
</div>
</div>
<div class="z-10 flex size-20 shrink-0 items-center justify-center rounded-full bg-green-500 border-[6px] border-green-200 text-white shadow-lg lg:order-2 lg:mx-auto animate-bounce">
<span class="material-symbols-outlined text-[32px]">check_circle</span>
</div>
<div class="flex-1 pl-8 lg:hidden">
<h3 class="text-xl font-bold text-[#0d121c] dark:text-white mb-2">Bước 5: Báo cáo &amp; Nghiệm thu</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Gửi kết quả, bàn giao shop an toàn và chế độ bảo hành dài hạn.</p>
</div>
<div class="hidden lg:block lg:flex-1 lg:pl-16">
<span class="text-8xl font-black text-gray-200 select-none">05</span>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="px-4 py-20 md:px-10 lg:px-20 xl:px-40 bg-white dark:bg-background-dark">
<div class="layout-content-container mx-auto flex max-w-[1280px] flex-col gap-10 md:flex-row">
<div class="flex-1 rounded-[2.5rem] bg-amber-50 p-8 lg:p-12 border-2 border-amber-200 relative overflow-hidden group hover:shadow-lg transition-shadow">
<div class="absolute -right-8 -top-8 size-40 rounded-full bg-amber-200 opacity-30 blur-3xl"></div>
<div class="relative z-10 flex flex-col h-full">
<div class="flex items-center gap-4 mb-8">
<div class="p-4 bg-white rounded-full shadow-sm text-amber-500 shrink-0">
<span class="material-symbols-outlined text-[36px]">warning</span>
</div>
<h3 class="text-2xl font-black uppercase text-amber-600">LƯU Ý QUAN TRỌNG</h3>
</div>
<ul class="space-y-6 text-gray-700 font-medium text-lg leading-relaxed flex-1">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-amber-500 mt-1">priority_high</span>
<span>Không có dịch vụ nào cam kết 100% nếu vi phạm quá nặng hoặc cố tình lách luật nhiều lần.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-amber-500 mt-1">schedule</span>
<span>Thời gian xử lý phụ thuộc vào đội ngũ Shopee duyệt (thường 3-7 ngày làm việc).</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-amber-500 mt-1">info</span>
<span>Cần cung cấp thông tin trung thực để Mexo Group có phương án tốt nhất.</span>
</li>
</ul>
</div>
</div>
<div class="flex-1 rounded-[2.5rem] bg-sky-50 p-8 lg:p-12 border-2 border-sky-200 relative overflow-hidden group hover:shadow-lg transition-shadow">
<div class="absolute -right-8 -top-8 size-40 rounded-full bg-sky-200 opacity-30 blur-3xl"></div>
<div class="relative z-10 flex flex-col h-full">
<div class="flex items-center gap-4 mb-8">
<div class="p-4 bg-white rounded-full shadow-sm text-sky-600 shrink-0">
<span class="material-symbols-outlined text-[36px]">verified</span>
</div>
<h3 class="text-2xl font-black uppercase text-sky-700">CAM KẾT CỦA MEXO</h3>
</div>
<ul class="space-y-6 text-gray-700 font-medium text-lg leading-relaxed flex-1">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-1 font-bold">check</span>
<span>Bảo mật tuyệt đối thông tin gian hàng và khách hàng.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-1 font-bold">check</span>
<span>Hoàn tiền 100% nếu không thực hiện được yêu cầu theo thỏa thuận.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-1 font-bold">check</span>
<span>Đồng hành và hỗ trợ tư vấn chiến lược sau khi xử lý xong.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-1 font-bold">check</span>
<span>Quy trình làm việc minh bạch, báo cáo tiến độ rõ ràng.</span>
</li>
</ul>
</div>
</div>
</div>
</section>
<section class="hidden bg-[#f0f2f5] py-20 px-4 md:px-10 lg:px-20 relative">
<div class="max-w-[1200px] mx-auto bg-white rounded-[2rem] shadow-xl overflow-hidden flex flex-col lg:flex-row">
<div class="lg:w-1/2 p-8 lg:p-12 flex flex-col justify-between bg-blue-50/20 relative">
<div class="relative z-10">
<h4 class="text-primary font-bold uppercase text-sm tracking-wider mb-2">TƯ DUY &amp; GIẢI PHÁP TĂNG TRƯỞNG THỰC CHIẾN SHOPEE</h4>
<h2 class="text-4xl lg:text-5xl font-black text-[#0d121c] mb-6 leading-tight">
                    Đồng hành cùng<br/>
<span class="text-primary">sự phát triển của bạn</span>
</h2>
<p class="text-gray-600 mb-10 leading-relaxed">
                    Điền thông tin để nói chuyện với chuyên gia của MEXO GROUP. Chúng tôi cung cấp kiến thức chuyên sâu, bộ công cụ tối ưu và tư duy vận hành giúp bạn tự tin làm chủ gian hàng Shopee và bứt phá doanh số bền vững.
                </p>
<div class="bg-blue-50 rounded-2xl p-6 mb-8 border border-blue-100">
<h5 class="text-primary font-bold text-lg mb-4 flex items-center gap-2">
<span class="material-symbols-outlined">star</span> Đặc quyền khi hợp tác
                    </h5>
<div class="space-y-4">
<div class="flex items-start gap-3">
<div class="bg-white p-1.5 rounded-full shadow-sm text-blue-600 shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[18px]">verified_user</span>
</div>
<div>
<h6 class="font-bold text-[#0d121c] text-sm">Bảo mật thông tin 100%</h6>
<p class="text-xs text-gray-500 mt-0.5">Dữ liệu và chiến lược kinh doanh được cam kết bảo mật tuyệt đối.</p>
</div>
</div>
<div class="flex items-start gap-3">
<div class="bg-white p-1.5 rounded-full shadow-sm text-green-600 shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[18px]">bolt</span>
</div>
<div>
<h6 class="font-bold text-[#0d121c] text-sm">Tư vấn nhanh chóng</h6>
<p class="text-xs text-gray-500 mt-0.5">Đội ngũ chuyên gia phản hồi và đề xuất giải pháp trong 24h.</p>
</div>
</div>
<div class="flex items-start gap-3">
<div class="bg-white p-1.5 rounded-full shadow-sm text-purple-600 shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[18px]">trending_up</span>
</div>
<div>
<h6 class="font-bold text-[#0d121c] text-sm">Hiệu quả thực tế</h6>
<p class="text-xs text-gray-500 mt-0.5">Cam kết tăng trưởng dựa trên KPIs rõ ràng và minh bạch.</p>
</div>
</div>
<div class="flex items-start gap-3">
<div class="bg-white p-1.5 rounded-full shadow-sm text-orange-600 shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[18px]">handshake</span>
</div>
<div>
<h6 class="font-bold text-[#0d121c] text-sm">Đồng hành dài hạn</h6>
<p class="text-xs text-gray-500 mt-0.5">Hỗ trợ 1-1 trong suốt quá trình triển khai và vận hành.</p>
</div>
</div>
</div>
</div>
</div>
<div class="relative mt-8 rounded-2xl overflow-hidden bg-gradient-to-br from-gray-800 to-black text-white p-6 shadow-lg">
<div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&amp;w=2070&amp;auto=format&amp;fit=crop')] bg-cover bg-center"></div>
<div class="relative z-10">
<div class="flex text-yellow-400 mb-2">
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
</div>
<p class="italic text-sm font-medium opacity-90">"Giải pháp của MEXO giúp chúng tôi tối ưu 40% chi phí vận hành chỉ trong quý đầu tiên."</p>
</div>
</div>
</div>
<div class="lg:w-1/2 p-8 lg:p-12 bg-white">
<?php include(locate_template('xc-form.php')); ?>
</div>
</div>
</section>
</div>
<?php get_footer(); ?>

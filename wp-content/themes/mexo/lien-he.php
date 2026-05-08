<?php
/* Template Name: Liên Hệ */
get_header();
?>

<style>
.mexo-contact-mini {
    min-height: 9.5rem;
    border-radius: 1rem;
    overflow: hidden;
    border: 1px solid rgba(226, 232, 240, 0.95);
    background: linear-gradient(135deg, rgba(13,89,242,0.08), rgba(15,23,42,0.04));
    position: relative;
}
html.dark .mexo-contact-mini {
    border-color: rgba(96, 165, 250, 0.26);
    background: linear-gradient(135deg, rgba(30, 41, 59, 0.94), rgba(15, 23, 42, 0.96));
}
.mexo-contact-mini img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.26;
}
.mexo-contact-mini-content {
    position: relative;
    z-index: 1;
    padding: 1rem;
}
.mexo-contact-mini-title {
    font-size: 0.95rem;
    font-weight: 800;
    color: #0f172a;
}
html.dark .mexo-contact-mini-title {
    color: #f8fafc;
}
.mexo-contact-mini-text {
    margin-top: 0.35rem;
    color: #475569;
    font-size: 0.76rem;
    line-height: 1.5;
}
html.dark .mexo-contact-mini-text {
    color: #cbd5e1;
}
.mexo-contact-mini-row {
    margin-top: 0.8rem;
    display: grid;
    gap: 0.45rem;
}
.mexo-contact-mini-row a {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    color: #0d59f2;
    font-size: 0.76rem;
    font-weight: 800;
}
@media (min-width: 1024px) {
    body.page-template-lien-he main {
        max-width: 1160px;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    body.page-template-lien-he main > .text-center {
        display: none;
    }
    body.page-template-lien-he main > .relative.grid {
        gap: 1.35rem;
        padding: 1.25rem;
        border-radius: 1.35rem;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.10);
    }
    html.dark body.page-template-lien-he main > .relative.grid {
        background:
            radial-gradient(circle at 16% 8%, rgba(37, 99, 235, 0.18), transparent 28%),
            linear-gradient(135deg, rgba(15, 23, 42, 0.98), rgba(30, 41, 59, 0.94));
        border-color: rgba(96, 165, 250, 0.22);
        box-shadow: 0 24px 70px rgba(0, 0, 0, 0.34), inset 0 1px 0 rgba(148, 163, 184, 0.10);
    }
    body.page-template-lien-he main > .relative.grid > .hidden.lg\:block {
        top: 1.25rem;
        bottom: 1.25rem;
        left: 33.7%;
        width: 1px;
        background: linear-gradient(180deg, transparent, rgba(148, 163, 184, 0.28) 12%, rgba(37, 99, 235, 0.24) 50%, rgba(148, 163, 184, 0.28) 88%, transparent);
    }
    html.dark body.page-template-lien-he main > .relative.grid > .hidden.lg\:block {
        background: linear-gradient(180deg, transparent, rgba(96, 165, 250, 0.18) 14%, rgba(14, 165, 233, 0.34) 50%, rgba(96, 165, 250, 0.18) 86%, transparent);
    }
    body.page-template-lien-he .mexo-contact-info {
        gap: 1rem;
        padding-right: 0.5rem;
    }
    body.page-template-lien-he .mexo-contact-info .relative.z-10 {
        gap: 0.9rem;
    }
    body.page-template-lien-he .mexo-contact-info h3 {
        font-size: 1.05rem;
        line-height: 1.25;
    }
    html.dark body.page-template-lien-he .mexo-contact-info h3 {
        color: #f8fafc;
    }
    body.page-template-lien-he .mexo-contact-info h3 > span {
        width: 2rem;
        height: 2rem;
        border-radius: 0.7rem;
    }
    body.page-template-lien-he .mexo-contact-info .grid {
        gap: 0.65rem;
    }
    body.page-template-lien-he .mexo-contact-info .group {
        padding: 0.75rem;
        border-radius: 1rem;
    }
    html.dark body.page-template-lien-he .mexo-contact-info .group {
        background: linear-gradient(135deg, rgba(30, 41, 59, 0.86), rgba(15, 23, 42, 0.72));
        border-color: rgba(96, 165, 250, 0.16);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.06), 0 10px 28px rgba(0,0,0,0.12);
    }
    body.page-template-lien-he .mexo-contact-info .flex-shrink-0 {
        width: 2rem;
        height: 2rem;
        border-radius: 0.75rem;
    }
    body.page-template-lien-he .mexo-contact-info .material-symbols-outlined {
        font-size: 1.1rem !important;
    }
    .mexo-contact-info h4 { font-size: 0.875rem; }
    .mexo-contact-info p { font-size: 0.78rem; line-height: 1.55; }
    html.dark body.page-template-lien-he .mexo-contact-info h4 {
        color: #f8fafc;
    }
    html.dark body.page-template-lien-he .mexo-contact-info p {
        color: #cbd5e1;
    }
    body.page-template-lien-he .mexo-contact-info .mt-6 {
        margin-top: 0.9rem;
    }
    body.page-template-lien-he .mexo-contact-info img {
        height: 7.25rem;
    }
    body.page-template-lien-he .mexo-contact-info .absolute.bottom-0 {
        padding: 0.85rem;
    }
    body.page-template-lien-he .mexo-contact-info .absolute.bottom-0 p {
        font-size: 0.72rem;
        line-height: 1.35;
    }
    body.page-template-lien-he .mexo-contact-mini {
        min-height: 9.5rem;
        border-radius: 1rem;
        overflow: hidden;
        border: 1px solid rgba(226, 232, 240, 0.95);
        background: linear-gradient(135deg, rgba(13,89,242,0.08), rgba(15,23,42,0.04));
        position: relative;
    }
    html.dark body.page-template-lien-he .mexo-contact-mini {
        border-color: rgba(96, 165, 250, 0.30);
        background: linear-gradient(135deg, rgba(30, 41, 59, 0.96), rgba(15, 23, 42, 0.98));
        box-shadow: 0 16px 35px rgba(0, 0, 0, 0.20);
    }
    body.page-template-lien-he .mexo-contact-mini img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.26;
    }
    body.page-template-lien-he .mexo-contact-mini-content {
        position: relative;
        z-index: 1;
        padding: 1rem;
    }
    body.page-template-lien-he .mexo-contact-mini-title {
        font-size: 0.95rem;
        font-weight: 800;
        color: #0f172a;
    }
    html.dark body.page-template-lien-he .mexo-contact-mini-title {
        color: #f8fafc;
    }
    body.page-template-lien-he .mexo-contact-mini-text {
        margin-top: 0.35rem;
        color: #475569;
        font-size: 0.76rem;
        line-height: 1.5;
    }
    html.dark body.page-template-lien-he .mexo-contact-mini-text {
        color: #cbd5e1;
    }
    body.page-template-lien-he .mexo-contact-mini-row {
        margin-top: 0.8rem;
        display: grid;
        gap: 0.45rem;
    }
    body.page-template-lien-he .mexo-contact-mini-row a {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        color: #0d59f2;
        font-size: 0.76rem;
        font-weight: 800;
    }
    body.page-template-lien-he #register-form {
        padding-left: 0.65rem;
    }
    body.page-template-lien-he #xc-custom-form {
        padding: 1.25rem !important;
        border-radius: 1.25rem !important;
        box-shadow: none !important;
    }
    html.dark body.page-template-lien-he #xc-custom-form {
        background:
            linear-gradient(180deg, rgba(30, 41, 59, 0.96), rgba(15, 23, 42, 0.92)) !important;
        border-color: rgba(96, 165, 250, 0.24) !important;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.06) !important;
    }
    body.page-template-lien-he #xc-custom-form > .flex {
        gap: 1.05rem !important;
    }
    body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(3) {
        order: 4;
    }
    body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(3) > .flex:first-child {
        display: none;
    }
    body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(4) {
        order: 3;
    }
    body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(5) {
        order: 5;
    }
    body.page-template-lien-he #xc-custom-form .space-y-6 {
        margin-top: 0 !important;
    }
    body.page-template-lien-he #xc-custom-form .space-y-6 > :not([hidden]) ~ :not([hidden]) {
        margin-top: 0.75rem !important;
    }
    body.page-template-lien-he #xc-custom-form .pb-2 {
        padding-bottom: 0.45rem;
    }
    body.page-template-lien-he #xc-custom-form h3 {
        font-size: 1rem;
        line-height: 1.25;
    }
    body.page-template-lien-he #xc-custom-form h3 + .grid,
    body.page-template-lien-he #xc-custom-form .grid {
        gap: 0.75rem;
    }
    body.page-template-lien-he #xc-custom-form .size-10 {
        width: 2rem;
        height: 2rem;
    }
    body.page-template-lien-he #xc-custom-form label {
        font-size: 0.78rem;
        margin-bottom: 0.35rem;
    }
    html.dark body.page-template-lien-he #xc-custom-form label,
    html.dark body.page-template-lien-he #xc-custom-form h3 {
        color: #f8fafc !important;
    }
    body.page-template-lien-he #xc-custom-form input:not([type="checkbox"]):not([type="radio"]),
    body.page-template-lien-he #xc-custom-form select {
        height: 2.55rem;
        border-radius: 999px;
        font-size: 0.88rem;
    }
    html.dark body.page-template-lien-he #xc-custom-form input:not([type="checkbox"]):not([type="radio"]),
    html.dark body.page-template-lien-he #xc-custom-form select {
        color: #f8fafc;
        background: rgba(15, 23, 42, 0.74);
        border-color: rgba(125, 161, 211, 0.46);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.04);
    }
    html.dark body.page-template-lien-he #xc-custom-form input::placeholder {
        color: #94a3b8;
        opacity: 1;
    }
    body.page-template-lien-he #xc-custom-form input[type="checkbox"],
    body.page-template-lien-he #xc-custom-form input[type="radio"] {
        width: 1.15rem;
        height: 1.15rem;
        min-width: 1.15rem;
        border-radius: 0.42rem;
        margin-top: 0;
    }
    body.page-template-lien-he #xc-custom-form textarea {
        height: 2.85rem;
        min-height: 2.85rem;
        border-radius: 999px;
        font-size: 0.88rem;
        overflow: hidden;
    }
    body.page-template-lien-he #xc-custom-form .grid.grid-cols-1.sm\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0.6rem;
    }
    body.page-template-lien-he #xc-custom-form .grid.grid-cols-1.sm\:grid-cols-2 label {
        padding: 0.52rem 0.7rem;
        border-radius: 0.9rem;
        min-height: 3rem;
        align-items: center;
        background: linear-gradient(180deg, rgba(255,255,255,0.98), rgba(248,250,252,0.92));
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.9);
    }
    html.dark body.page-template-lien-he #xc-custom-form .grid.grid-cols-1.sm\:grid-cols-2 label {
        background: linear-gradient(180deg, rgba(22, 34, 53, 0.96), rgba(15, 23, 42, 0.84));
        border-color: rgba(96, 165, 250, 0.22);
        box-shadow: inset 0 1px 0 rgba(148,163,184,0.13);
    }
    html.dark body.page-template-lien-he #xc-custom-form .grid.grid-cols-1.sm\:grid-cols-2 label:hover {
        background: linear-gradient(180deg, rgba(30, 48, 76, 0.98), rgba(15, 23, 42, 0.90));
        border-color: rgba(96, 165, 250, 0.46);
    }
    body.page-template-lien-he #xc-custom-form .grid.grid-cols-1.sm\:grid-cols-2 label > .flex {
        align-items: center;
        height: auto;
        align-self: center;
    }
    body.page-template-lien-he #xc-custom-form .grid.grid-cols-1.sm\:grid-cols-2 .text-sm {
        font-size: 0.78rem;
        line-height: 1.2;
    }
    body.page-template-lien-he #xc-custom-form .grid.grid-cols-1.sm\:grid-cols-2 .text-xs {
        display: block;
        font-size: 0.66rem;
        line-height: 1.18;
        margin-top: 0.06rem;
    }
    body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(3) .input-group {
        display: block;
    }
    body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(3) label {
        display: none;
    }
    body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(3) textarea {
        padding-left: 1.2rem;
        padding-right: 1.2rem;
        color: #0f172a;
        background: #f8fafc;
        border-color: rgba(148, 163, 184, 0.75);
    }
    body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(3) textarea::placeholder {
        color: #64748b;
        opacity: 1;
    }
    html.dark body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(3) textarea {
        color: #f8fafc;
        background: rgba(15, 23, 42, 0.76);
        border-color: rgba(125, 161, 211, 0.52);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.04);
    }
    html.dark body.page-template-lien-he #xc-custom-form > .flex > div:nth-of-type(3) textarea::placeholder {
        color: #e2e8f0;
        opacity: 1;
    }
    body.page-template-lien-he #xc-submit-btn {
        padding: 0.72rem !important;
        border-radius: 1rem !important;
    }
    body.page-template-lien-he #xc-submit-btn span {
        font-size: 0.95rem;
    }
    body.page-template-lien-he #xc-custom-form .mt-4.text-center {
        margin-top: 0.55rem;
        font-size: 0.7rem;
    }
}
</style>


<main class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <div class="mexo-hero-pill inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-900/30 text-primary text-xs font-bold uppercase tracking-wider mb-4 border border-blue-100 dark:border-blue-800">
            <span class="size-2 rounded-full bg-primary animate-pulse"></span>
            Giải pháp tăng trưởng TMĐT
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 dark:text-white tracking-tight mb-6 leading-tight">
            Đồng hành cùng <br class="hidden md:block"/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">sự phát triển của bạn</span>
        </h1>
        <p class="text-lg text-slate-500 dark:text-slate-400 leading-relaxed">
            Điền thông tin để kết nối với chuyên gia của MEXO GROUP. Chúng tôi cung cấp chiến lược thực chiến, tối ưu hóa vận hành và bùng nổ doanh thu.
        </p>
    </div>
    <div class="relative grid lg:grid-cols-12 gap-8 lg:gap-10 items-start bg-white dark:bg-slate-900/70 rounded-[2rem] border border-slate-100 dark:border-slate-800 shadow-xl shadow-slate-200/60 dark:shadow-black/20 p-5 sm:p-6 lg:p-8">
        <div class="hidden lg:block absolute top-8 bottom-8 left-[34.2%] w-px bg-gradient-to-b from-transparent via-slate-200 to-transparent dark:via-slate-700/80"></div>
        <div class="mexo-contact-info lg:col-span-4 flex flex-col gap-6 order-2 lg:order-1 lg:pr-4">
            <div class="relative">
                <div class="absolute -top-8 -left-8 w-48 h-48 bg-blue-200/20 dark:bg-blue-900/10 rounded-full blur-3xl"></div>
                <div class="relative z-10 flex flex-col gap-5">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
                        <span class="flex items-center justify-center size-9 rounded-xl bg-gradient-to-br from-primary to-blue-600 text-white shadow-lg shadow-primary/25">
                            <span class="material-symbols-outlined text-[20px]">star</span>
                        </span>
                        Đặc quyền khi hợp tác
                    </h3>
                    <div class="grid gap-3">
                        <div class="group bg-slate-50/80 dark:bg-slate-800/80 p-4 rounded-2xl border border-slate-100 dark:border-slate-700/80 hover:shadow-md transition-all duration-300">
                            <div class="flex gap-3">
                                <div class="flex-shrink-0 size-9 rounded-xl bg-blue-100 dark:bg-blue-900/40 text-primary flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                    <span class="material-symbols-outlined text-[21px]">shield_lock</span>
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-slate-900 dark:text-white mb-1">Bảo mật thông tin 100%</h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Dữ liệu và chiến lược kinh doanh được cam kết bảo mật tuyệt đối.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group bg-slate-50/80 dark:bg-slate-800/80 p-4 rounded-2xl border border-slate-100 dark:border-slate-700/80 hover:shadow-md transition-all duration-300">
                            <div class="flex gap-3">
                                <div class="flex-shrink-0 size-9 rounded-xl bg-green-100 dark:bg-green-900/40 text-green-600 dark:text-green-400 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                    <span class="material-symbols-outlined text-[21px]">bolt</span>
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-slate-900 dark:text-white mb-1">Tư vấn nhanh chóng</h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Đội ngũ chuyên gia phản hồi và đề xuất giải pháp trong 24h.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group bg-slate-50/80 dark:bg-slate-800/80 p-4 rounded-2xl border border-slate-100 dark:border-slate-700/80 hover:shadow-md transition-all duration-300">
                            <div class="flex gap-3">
                                <div class="flex-shrink-0 size-9 rounded-xl bg-purple-100 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                    <span class="material-symbols-outlined text-[21px]">monitoring</span>
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-slate-900 dark:text-white mb-1">Hiệu quả thực tế</h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Cam kết tăng trưởng dựa trên KPIs rõ ràng và minh bạch.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group bg-slate-50/80 dark:bg-slate-800/80 p-4 rounded-2xl border border-slate-100 dark:border-slate-700/80 hover:shadow-md transition-all duration-300">
                            <div class="flex gap-3">
                                <div class="flex-shrink-0 size-9 rounded-xl bg-orange-100 dark:bg-orange-900/40 text-orange-600 dark:text-orange-400 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                    <span class="material-symbols-outlined text-[21px]">group_add</span>
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-slate-900 dark:text-white mb-1">Đồng hành dài hạn</h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Hỗ trợ 1-1 trong suốt quá trình triển khai và vận hành.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 relative group overflow-hidden rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700">
                    <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/10 transition-colors z-10"></div>
                    <img alt="Business consultation" class="w-full h-40 object-cover transform group-hover:scale-105 transition-transform duration-500" src="<?php echo get_template_directory_uri(); ?>/assets/images/business-consultation.jpg"/>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-slate-900 to-transparent z-20">
                        <div class="flex items-center gap-2 text-white mb-1">
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                        </div>
                        <p class="text-white text-sm font-medium">"Giải pháp của MEXO giúp chúng tôi tối ưu 40% chi phí vận hành chỉ trong quý đầu tiên."</p>
                    </div>
                </div>
                <div class="mexo-contact-mini mt-4">
                    <img alt="MEXO GROUP ecommerce consulting team" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-working.jpg"/>
                    <div class="mexo-contact-mini-content">
                        <div class="mexo-contact-mini-title">Ket noi nhanh voi MEXO GROUP</div>
                        <p class="mexo-contact-mini-text">Tu van nhanh trong gio lam viec, giup ban chon dung giai phap truoc khi trien khai.</p>
                        <div class="mexo-contact-mini-row">
                            <a href="tel:0855761555"><span class="material-symbols-outlined text-[16px]">call</span>0855.761.555</a>
                            <a href="mailto:mexoagency@gmail.com"><span class="material-symbols-outlined text-[16px]">mail</span>mexoagency@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-8 order-1 lg:order-2 lg:pl-2" id="register-form">
            <?php get_template_part('xc-form'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>

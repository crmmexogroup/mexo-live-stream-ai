<?php
/* Template Name: Dịch Vụ Shopee Mall */
get_header();
?>
<!-- Injecting Tailwind CDN and Config to ensure design match without build step -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#0d59f2",
                    "primary-dark": "#0b46c2",
                    "accent": "#F53D2D",
                    "background-light": "#ffffff",
                    "background-off": "#f8fafd",
                    "background-dark": "#0d121c",
                    "shopee": "#ee4d2d",
                },
                fontFamily: {
                    "display": ["Plus Jakarta Sans", "sans-serif"],
                    "body": ["Plus Jakarta Sans", "sans-serif"],
                },
                backgroundImage: {
                    'grid-pattern': "linear-gradient(to right, #e2e8f0 1px, transparent 1px), linear-gradient(to bottom, #e2e8f0 1px, transparent 1px)",
                },
                boxShadow: {
                    'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)',
                    'hero-card': '0 25px 50px -12px rgba(0, 0, 0, 0.15)',
                    'card-hover': '0 0 0 1px rgba(0,0,0,0.03), 0 20px 40px -10px rgba(0,0,0,0.08)',
                }
            },
        },
    }
</script>
<style>
    .text-gradient {
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .bg-grid-size {
        background-size: 50px 50px;
    }
    .mask-gradient-to-b {
        mask-image: linear-gradient(to bottom, black 0%, transparent 100%);
        -webkit-mask-image: linear-gradient(to bottom, black 80%, transparent 100%);
    }
    .card-perspective {
        perspective: 1000px;
    }
    .card-rotate {
        transform: rotateY(-5deg) rotateX(2deg);
        transform-style: preserve-3d;
    }
    .text-accent {
        --tw-text-opacity: 1;
        color: rgb(245 61 45 / var(--tw-text-opacity, 1));
    }
</style>

<div class="bg-background-light font-body text-[#1e293b] antialiased scroll-smooth">
    <section class="mexo-service-hero relative w-full overflow-hidden pt-12 pb-24 lg:pt-20 lg:pb-36">
        <div class="absolute inset-0 bg-white pointer-events-none"></div>
        <div class="absolute inset-0 bg-grid-pattern bg-grid-size opacity-[0.6] pointer-events-none"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50/80 via-white/40 to-white/80 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-white to-transparent z-10"></div>
        <div class="absolute -top-[5%] right-[5%] w-[400px] h-[400px] bg-blue-100/40 rounded-full blur-[80px] pointer-events-none"></div>
        <div class="absolute top-[20%] -left-[5%] w-[500px] h-[500px] bg-indigo-50/50 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="mx-auto flex max-w-[1280px] flex-col lg:flex-row items-center gap-12 lg:gap-8 px-6 lg:px-10 relative z-20">
            <div class="flex flex-1 flex-col items-start gap-8 pt-4 lg:pt-8 max-w-[620px]">
                <div class="mexo-hero-pill inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 border border-blue-100/50 shadow-sm">
                    <div class="w-2 h-2 rounded-full bg-primary"></div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-primary">GIẢI PHÁP SHOPEE MALL TOÀN DIỆN</span>
                </div>
                <h1 class="font-display text-[42px] lg:text-[64px] font-extrabold leading-[1.1] tracking-tight text-slate-900">
                    Nâng tầm thương hiệu với <br/>
                    <span class="text-accent">Shopee Mall</span>
                </h1>
                <p class="text-[17px] leading-relaxed text-gray-500 font-medium max-w-lg">
                    Giải pháp tăng trưởng thương mại điện tử toàn diện cho doanh nghiệp Việt. Xây dựng hồ sơ năng lực uy tín, tối ưu hiển thị và gia tăng doanh số bền vững.
                </p>
                <div class="flex flex-wrap items-center gap-4 mt-2">
                    <button type="button"
    onclick="window.location.href='/lien-he/';" class="flex h-[52px] items-center justify-center gap-2 rounded-full bg-primary px-8 text-[14px] font-bold text-white shadow-lg shadow-blue-600/30 transition-all hover:bg-primary-dark hover:-translate-y-1">
                        ĐĂNG KÝ TƯ VẤN NGAY
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                    <button type="button"
    onclick="window.location.href='/gioi-thieu/';" class="flex h-[52px] items-center justify-center gap-2 rounded-full border border-gray-200 bg-white px-6 text-[14px] font-bold text-slate-600 shadow-sm transition-all hover:border-gray-300 hover:shadow-md hover:text-slate-900">
                        <span class="material-symbols-outlined text-[18px]">description</span>
                        Xem hồ sơ năng lực
                    </button>
                </div>
                <div class="mt-8 flex items-center gap-4">
                    <div class="flex -space-x-3">
                        <div class="h-10 w-10 rounded-full border-[3px] border-white bg-gray-100 flex items-center justify-center text-xs font-bold text-gray-600">A</div>
                        <div class="h-10 w-10 rounded-full border-[3px] border-white bg-blue-100 flex items-center justify-center text-xs font-bold text-blue-600">B</div>
                        <div class="h-10 w-10 rounded-full border-[3px] border-white bg-green-100 flex items-center justify-center text-xs font-bold text-green-600">C</div>
                        <div class="flex h-10 w-10 items-center justify-center rounded-full border-[3px] border-white bg-gray-50 text-[10px] font-bold text-gray-500">+500</div>
                    </div>
                    <p class="text-[13px] font-medium text-gray-500">Doanh nghiệp đã tin tưởng</p>
                </div>
            </div>
            <div class="relative flex-1 w-full lg:h-[600px] flex items-center justify-center lg:justify-end perspective-[2000px]">
                <div class="relative w-full max-w-[520px] bg-white rounded-[2rem] shadow-hero-card p-2 border border-white/50 z-10 transition-transform duration-500 hover:scale-[1.01]">
                    <div class="bg-slate-50/50 rounded-[1.8rem] w-full h-full overflow-hidden border border-slate-100">
                        <div class="px-6 py-5 flex gap-2">
                            <div class="w-3 h-3 rounded-full bg-[#FF5F57]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#FEBC2E]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#28C840]"></div>
                        </div>
                        <div class="flex flex-col items-center px-8 pb-10">
                            <div class="w-28 h-28 bg-[#fff5f4] rounded-full flex items-center justify-center mb-6 shadow-sm border border-red-50">
                                <div class="w-14 h-14 bg-[#ee4d2d] rounded-xl flex items-center justify-center shadow-lg shadow-red-500/20">
                                    <span class="material-symbols-outlined text-white text-[32px]">shopping_bag</span>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Shopee Mall</h3>
                            <div class="flex gap-3 mb-12">
                                <span class="bg-red-50 text-shopee text-[11px] font-bold px-3 py-1.5 rounded-md border border-red-100">100% Chính Hãng</span>
                                <span class="bg-red-50 text-shopee text-[11px] font-bold px-3 py-1.5 rounded-md border border-red-100">Miễn Phí Trả Hàng</span>
                            </div>
                            <div class="w-full h-32 flex items-end justify-center gap-3 px-4">
                                <div class="flex-1 bg-blue-100 rounded-t-lg h-[15%]"></div>
                                <div class="flex-1 bg-blue-200 rounded-t-lg h-[40%]"></div>
                                <div class="flex-1 bg-blue-300 rounded-t-lg h-[30%]"></div>
                                <div class="flex-1 bg-[#4285f4] rounded-t-lg h-[60%]"></div>
                                <div class="flex-1 bg-primary rounded-t-lg h-[80%] shadow-lg shadow-blue-500/20"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute -top-6 -right-4 lg:top-8 lg:-right-8 bg-white py-3 px-5 rounded-[1.2rem] shadow-xl shadow-gray-200/60 flex items-center gap-3 border border-gray-50 z-30 animate-[bounce_4s_infinite]">
                    <div class="bg-green-50 w-10 h-10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-green-500 text-[20px]">trending_up</span>
                    </div>
                    <div>
                        <p class="text-[10px] text-gray-400 uppercase font-bold tracking-wider mb-0.5">Doanh thu tăng</p>
                        <p class="text-lg font-bold text-gray-900">+300%</p>
                    </div>
                </div>
                <div class="absolute -bottom-6 -left-2 lg:bottom-12 lg:-left-12 bg-white py-3 px-5 pr-8 rounded-[1.2rem] shadow-xl shadow-gray-200/60 flex items-center gap-3 border border-gray-50 z-30">
                    <div class="bg-yellow-50 w-10 h-10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-yellow-500 text-[20px] fill-current">verified</span>
                    </div>
                    <div>
                        <p class="text-[10px] text-gray-400 uppercase font-bold tracking-wider mb-0.5">Uy tín Shop</p>
                        <p class="text-lg font-bold text-gray-900">5.0/5.0</p>
                    </div>
                </div>
                <div class="absolute top-8 left-8 w-full h-full bg-blue-100/50 rounded-[2.5rem] -z-10 blur-xl"></div>
            </div>
        </div>
    </section>
    <section class="bg-background-off py-20 px-6 lg:px-10 relative overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern bg-grid-size opacity-[0.3] pointer-events-none"></div>
        <div class="mx-auto max-w-[900px] text-center mb-12 relative z-10">
            <span class="text-primary font-bold text-[15px] uppercase tracking-widest mb-3 block">KHÁI NIỆM</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-slate-900">Shopee Mall Là Gì?</h2>
        </div>
        <div class="mx-auto max-w-[1000px] relative z-10">
            <div class="bg-white rounded-[2rem] p-8 lg:p-14 shadow-soft border border-gray-100 flex flex-col md:flex-row gap-10 items-center relative overflow-hidden group hover:shadow-lg transition-all duration-500">
                <div class="absolute top-0 left-0 w-2 h-full bg-primary/80"></div>
                <div class="shrink-0 relative">
                    <div class="absolute inset-0 bg-red-100 rounded-full scale-110 blur-xl opacity-50 group-hover:scale-125 transition-transform duration-700"></div>
                    <div class="w-24 h-24 bg-[#fff5f4] rounded-full flex items-center justify-center text-shopee shadow-sm relative z-10 group-hover:rotate-6 transition-transform duration-500">
                        <span class="material-symbols-outlined text-[40px]">storefront</span>
                    </div>
                </div>
                <div class="flex-1 text-center md:text-left">
                    <p class="text-gray-800 text-lg leading-relaxed font-medium">
                        Shopee Mall là gian hàng đặc biệt dành riêng cho các <strong class="text-primary relative inline-block">chủ sở hữu thương hiệu
                        <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-200/50 -z-10"></span>
                        </strong> hoặc đại lý phân phối chính hãng.
                    </p>
                    <p class="text-gray-500 text-[15px] mt-4 leading-relaxed">
                        Nơi đây cam kết <strong class="text-gray-700">100% sản phẩm chính hãng</strong>, giúp shop tăng uy tín, dễ chốt đơn hơn và xây dựng niềm tin với khách hàng.
Shopee Mall phù hợp với các thương hiệu muốn bán hàng bài bản và tạo lợi thế cạnh tranh rõ ràng trên Shopee.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-24 px-6 lg:px-10 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:24px_24px] opacity-30 pointer-events-none"></div>
        <div class="mx-auto max-w-[1280px] relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div class="max-w-2xl">
                    <span class="text-primary font-bold text-[15px] uppercase tracking-widest mb-3 block">ĐẶC QUYỀN SHOPEE MALL</span>
                    <h2 class="text-3xl lg:text-[44px] font-bold text-slate-900 mb-6 leading-tight">Quyền lợi <span class="text-transparent bg-clip-text bg-gradient-to-r from-shopee to-red-500">độc quyền</span></h2>
                    <p class="text-gray-500 text-[16px] font-medium leading-relaxed max-w-lg">
                        Nâng cao uy tín và gia tăng doanh số vượt trội với 4 quyền lợi vàng chỉ dành cho nhà bán hàng Mall, giúp bạn tách biệt khỏi đối thủ cạnh tranh.
                    </p>
                </div>
                <a class="hidden md:inline-flex items-center gap-2 px-6 py-3 rounded-full bg-blue-50 text-primary font-bold text-sm hover:bg-blue-100 transition-colors" href="#">
                    Xem chi tiết quyền lợi <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                <div class="group relative p-10 rounded-[2.5rem] bg-gradient-to-br from-blue-50/50 to-white border border-blue-100/50 hover:border-blue-200 shadow-sm hover:shadow-card-hover transition-all duration-500 overflow-hidden flex flex-col justify-between min-h-[320px]">
                    <div class="absolute right-0 top-0 w-64 h-64 bg-blue-100/30 rounded-full blur-3xl -mr-16 -mt-16 transition-opacity group-hover:opacity-70"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-white text-blue-600 flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-[32px]">verified</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">Tăng Độ Uy Tín</h3>
                        <p class="text-gray-500 leading-relaxed text-[15px]">Khách hàng tin tưởng tuyệt đối vào nhãn "Mall", xóa bỏ rào cản tâm lý về hàng giả, hàng nhái.</p>
                    </div>
                    <div class="relative z-10 mt-8">
                        <div class="inline-flex items-center gap-2 text-xs font-bold text-blue-600 bg-blue-100/50 px-3 py-1.5 rounded-lg">
                            <span class="material-symbols-outlined text-[15px]">thumb_up</span> +80% Tin tưởng
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2 group relative p-10 rounded-[2.5rem] bg-gradient-to-br from-green-50/50 to-white border border-green-100/50 hover:border-green-200 shadow-sm hover:shadow-card-hover transition-all duration-500 overflow-hidden">
                    <div class="absolute right-0 bottom-0 w-80 h-80 bg-green-100/30 rounded-full blur-3xl -mr-20 -mb-20 transition-opacity group-hover:opacity-70"></div>
                    <div class="flex flex-col md:flex-row gap-8 items-start md:items-center h-full">
                        <div class="flex-1 relative z-10">
                            <div class="w-16 h-16 rounded-2xl bg-white text-green-600 flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform duration-300">
                                <span class="material-symbols-outlined text-[32px]">visibility</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">Ưu Tiên Hiển Thị</h3>
                            <p class="text-gray-500 leading-relaxed text-[15px]">Sản phẩm Mall được ưu tiên hiển thị trên kết quả tìm kiếm đầu tiên và các vị trí "vàng" trên trang chủ.</p>
                        </div>
                        <div class="w-full md:w-[280px] h-[160px] bg-white rounded-2xl shadow-sm border border-gray-100 p-4 relative flex flex-col gap-3 rotate-3 group-hover:rotate-0 transition-transform duration-500">
                            <div class="h-2 w-1/3 bg-gray-100 rounded"></div>
                            <div class="flex gap-3">
                                <div class="w-20 h-20 bg-gray-100 rounded-lg shrink-0 relative overflow-hidden">
                                    <div class="absolute top-0 left-0 bg-red-500 text-white text-[8px] font-bold px-1.5 py-0.5 rounded-br">Mall</div>
                                </div>
                                <div class="flex-1 space-y-2">
                                    <div class="h-3 w-full bg-gray-100 rounded"></div>
                                    <div class="h-3 w-2/3 bg-gray-100 rounded"></div>
                                    <div class="flex gap-2 mt-2">
                                        <div class="h-4 w-12 bg-green-100 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2 group relative p-10 rounded-[2.5rem] bg-gradient-to-br from-purple-50/50 to-white border border-purple-100/50 hover:border-purple-200 shadow-sm hover:shadow-card-hover transition-all duration-500 overflow-hidden">
                    <div class="absolute left-0 top-0 w-80 h-80 bg-purple-100/30 rounded-full blur-3xl -ml-20 -mt-20 transition-opacity group-hover:opacity-70"></div>
                    <div class="flex flex-col md:flex-row-reverse gap-8 items-start md:items-center h-full">
                        <div class="flex-1 relative z-10">
                            <div class="w-16 h-16 rounded-2xl bg-white text-purple-600 flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform duration-300">
                                <span class="material-symbols-outlined text-[32px]">campaign</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors">Quyền Lợi Marketing</h3>
                            <p class="text-gray-500 leading-relaxed text-[15px]">Đặc quyền tham gia Mega Sale, Brand Day độc quyền với các gói voucher trợ giá khủng từ sàn.</p>
                        </div>
                        <div class="w-full md:w-[280px] h-[160px] bg-white rounded-2xl shadow-sm border border-gray-100 p-4 relative flex items-center justify-center -rotate-3 group-hover:rotate-0 transition-transform duration-500">
                            <div class="w-full h-24 bg-gradient-to-r from-orange-500 to-red-500 rounded-lg flex relative overflow-hidden mask-gradient-to-b">
                                <div class="w-24 border-r border-dashed border-white/30 flex flex-col items-center justify-center text-white p-2">
                                    <span class="text-xs font-bold opacity-80">SHOPEE</span>
                                    <span class="text-lg font-bold">MALL</span>
                                </div>
                                <div class="flex-1 p-3 flex flex-col justify-center text-white">
                                    <div class="text-xs opacity-90">Giảm giá</div>
                                    <div class="text-xl font-bold">50%</div>
                                </div>
                                <div class="absolute -left-2 top-1/2 -translate-y-1/2 w-4 h-4 bg-white rounded-full"></div>
                                <div class="absolute -right-2 top-1/2 -translate-y-1/2 w-4 h-4 bg-white rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group relative p-10 rounded-[2.5rem] bg-gradient-to-br from-orange-50/50 to-white border border-orange-100/50 hover:border-orange-200 shadow-sm hover:shadow-card-hover transition-all duration-500 overflow-hidden flex flex-col justify-between min-h-[320px]">
                    <div class="absolute right-0 bottom-0 w-64 h-64 bg-orange-100/30 rounded-full blur-3xl -mr-16 -mb-16 transition-opacity group-hover:opacity-70"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-white text-orange-500 flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-[32px]">trending_up</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-orange-500 transition-colors">Tăng Chuyển Đổi</h3>
                        <p class="text-gray-500 leading-relaxed text-[15px]">Nhãn Mall giúp khách hàng ra quyết định mua hàng nhanh hơn gấp 3 lần, gia tăng doanh số.</p>
                    </div>
                    <div class="relative z-10 mt-8">
                        <div class="inline-flex items-center gap-2 text-xs font-bold text-orange-600 bg-orange-100/50 px-3 py-1.5 rounded-lg">
                            <span class="material-symbols-outlined text-[14px]">rocket_launch</span> x3 Doanh số
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-background-off py-24 px-6 lg:px-10">
        <div class="mx-auto max-w-[1100px]">
            <h2 class="text-center text-3xl font-bold text-gray-900 mb-12">Dịch vụ này phù hợp với ai?</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-lg transition-all">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-green-500"></div>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="bg-green-100 text-green-600 rounded-full p-2">
                            <span class="material-symbols-outlined text-[20px]">check</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Đối Tượng Phù Hợp</h3>
                    </div>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-3.5 text-sm text-gray-600">
                            <span class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-white text-[14px] font-bold">check</span>
                            </span>
                            <span>Doanh nghiệp sản xuất, sở hữu thương hiệu riêng.</span>
                        </li>
                        <li class="flex items-start gap-3.5 text-sm text-gray-600">
                            <span class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-white text-[14px] font-bold">check</span>
                            </span>
                            <span>Đại lý phân phối độc quyền hoặc chính thức có giấy ủy quyền.</span>
                        </li>
                        <li class="flex items-start gap-3.5 text-sm text-gray-600">
                            <span class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-white text-[14px] font-bold">check</span>
                            </span>
                            <span>Shop Yêu Thích muốn nâng cấp để tăng uy tín và giá trị đơn hàng.</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-lg transition-all">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gray-300"></div>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="bg-gray-100 text-gray-500 rounded-full p-2">
                            <span class="material-symbols-outlined text-[20px]">close</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Chưa Phù Hợp</h3>
                    </div>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-3.5 text-sm text-gray-500">
                            <span class="w-5 h-5 rounded-full bg-gray-200 flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-gray-500 text-[14px] font-bold">close</span>
                            </span>
                            <span>Cá nhân bán hàng nhỏ lẻ không có giấy phép kinh doanh.</span>
                        </li>
                        <li class="flex items-start gap-3.5 text-sm text-gray-500">
                            <span class="w-5 h-5 rounded-full bg-gray-200 flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-gray-500 text-[14px] font-bold">close</span>
                            </span>
                            <span>Shop kinh doanh hàng xách tay không chứng minh được nguồn gốc.</span>
                        </li>
                        <li class="flex items-start gap-3.5 text-sm text-gray-500">
                            <span class="w-5 h-5 rounded-full bg-gray-200 flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-gray-500 text-[14px] font-bold">close</span>
                            </span>
                            <span>Sản phẩm vi phạm chính sách của Shopee.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-24 px-6 lg:px-10">
        <div class="mx-auto max-w-[1280px]">
            <div class="text-center mb-20">
                <span class="text-primary font-bold text-[15px] uppercase tracking-widest mb-3 block">QUY TRÌNH CHUYÊN NGHIỆP</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Quy trình triển khai của MEXO GROUP</h2>
            </div>
            <div class="relative max-w-[1100px] mx-auto">
                <div class="hidden lg:block absolute top-[28px] left-[5%] right-[5%] h-[2px] bg-gray-100 -z-1"></div>
                <div class="grid grid-cols-2 lg:grid-cols-5 gap-y-12 gap-x-4">
                    <div class="flex flex-col items-center text-center group">
                        <div class="h-14 w-14 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center font-bold text-lg shadow-sm mb-6 z-10 group-hover:bg-primary group-hover:text-white transition-colors duration-300">1</div>
                        <h4 class="font-bold text-[15px] text-gray-900 mb-2">Tư Vấn &amp; Thẩm Định</h4>
                        <p class="text-[12px] text-gray-500 px-2 max-w-[180px] leading-relaxed">Đánh giá tiềm năng và kiểm tra hồ sơ pháp lý sơ bộ.</p>
                    </div>
                    <div class="flex flex-col items-center text-center group">
                        <div class="h-14 w-14 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center font-bold text-lg shadow-sm mb-6 z-10 group-hover:bg-primary group-hover:text-white transition-colors duration-300">2</div>
                        <h4 class="font-bold text-[15px] text-gray-900 mb-2">Ký Hợp Đồng</h4>
                        <p class="text-[12px] text-gray-500 px-2 max-w-[180px] leading-relaxed">Thống nhất các điều khoản dịch vụ và cam kết triển khai.</p>
                    </div>
                    <div class="flex flex-col items-center text-center group">
                        <div class="h-14 w-14 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center font-bold text-lg shadow-sm mb-6 z-10 group-hover:bg-primary group-hover:text-white transition-colors duration-300">3</div>
                        <h4 class="font-bold text-[15px] text-gray-900 mb-2">Chuẩn Bị Hồ Sơ</h4>
                        <p class="text-[12px] text-gray-500 px-2 max-w-[180px] leading-relaxed">MEXO hỗ trợ hoàn thiện bộ hồ sơ chuẩn Shopee Mall.</p>
                    </div>
                    <div class="flex flex-col items-center text-center group">
                        <div class="h-14 w-14 rounded-full bg-white border-2 border-primary text-primary flex items-center justify-center font-bold text-lg shadow-sm mb-6 z-10 group-hover:bg-primary group-hover:text-white transition-colors duration-300">4</div>
                        <h4 class="font-bold text-[15px] text-gray-900 mb-2">Nộp &amp; Theo Dõi</h4>
                        <p class="text-[12px] text-gray-500 px-2 max-w-[180px] leading-relaxed">Đại diện làm việc trực tiếp với Shopee để xử lý phản hồi.</p>
                    </div>
                    <div class="flex flex-col items-center text-center col-span-2 lg:col-span-1 mt-4 lg:mt-0 group">
                        <div class="h-14 w-14 rounded-full bg-primary text-white flex items-center justify-center font-bold shadow-lg shadow-blue-500/30 mb-6 z-10 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-[24px]">flag</span>
                        </div>
                        <h4 class="font-bold text-[15px] text-gray-900 mb-2">Bàn Giao &amp; Go-Live</h4>
                        <p class="text-[12px] text-gray-500 px-2 max-w-[180px] leading-relaxed">Gian hàng chính thức lên Mall, hướng dẫn vận hành.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-background-off py-20 px-6 lg:px-10 overflow-hidden">
        <div class="mx-auto max-w-[1280px]">
            <div class="text-center mb-16">
                <span class="text-primary font-bold text-[15px] uppercase tracking-widest mb-3 block">CÂU CHUYỆN THÀNH CÔNG</span>
                <h2 class="text-3xl lg:text-[44px] font-bold text-slate-900">Case Study Thực Tế</h2>
            </div>
            <div class="bg-white rounded-[3rem] shadow-xl shadow-gray-200/50 border border-gray-100 p-8 lg:p-14 flex flex-col lg:flex-row gap-12 lg:gap-20 items-center relative overflow-hidden">
                <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-50/50 rounded-full blur-[100px] -mr-32 -mt-32 pointer-events-none"></div>
                <div class="flex-1 relative z-10">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gray-900 to-gray-700 flex items-center justify-center text-white shadow-lg">
                            <span class="font-display font-bold text-2xl">X</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">GIA DỤNG: LVMART.STORE</h3>
                            <p class="text-sm text-gray-500 font-medium">Thiết Bị Điện Gia Dụng</p>
                        </div>
                    </div>
                    <div class="mb-10">
                        <h4 class="text-[13px] font-bold text-gray-400 uppercase tracking-widest mb-4">VẤN ĐỀ GẶP PHẢI</h4>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Thương hiệu mới khó cạnh tranh với các Shop Mall lâu năm. Khách hàng e ngại về chế độ bảo hành, mua ở đây có được bảo hành chính hãng không -> tỷ lệ chuyển đổi thấp dù ngân sách quảng cáo cao.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="p-5 rounded-2xl bg-green-50/50 border border-green-100">
                            <div class="text-[11px] font-bold text-green-600 uppercase mb-1">Doanh thu</div>
                            <div class="text-2xl font-extrabold text-gray-900 flex items-center gap-1">
                                +300%
                                <span class="material-symbols-outlined text-green-500 text-[20px]">north_east</span>
                            </div>
                            <div class="text-[11px] text-gray-500 mt-1">Sau 3 tháng</div>
                        </div>
                        <div class="p-5 rounded-2xl bg-blue-50/50 border border-blue-100">
                            <div class="text-[11px] font-bold text-blue-600 uppercase mb-1">Chi phí Ads</div>
                            <div class="text-2xl font-extrabold text-gray-900 flex items-center gap-1">
                                -40%
                                <span class="material-symbols-outlined text-blue-500 text-[20px]">south_east</span>
                            </div>
                            <div class="text-[11px] text-gray-500 mt-1">Tối ưu CPA</div>
                        </div>
                        <div class="col-span-2 lg:col-span-1 p-5 rounded-2xl bg-yellow-50/50 border border-yellow-100">
                            <div class="text-[11px] font-bold text-yellow-600 uppercase mb-1">Đánh giá</div>
                            <div class="text-2xl font-extrabold text-gray-900 flex items-center gap-1">
                                4.9
                                <span class="material-symbols-outlined text-yellow-500 text-[20px]">star</span>
                            </div>
                            <div class="text-[11px] text-gray-500 mt-1">Trên 5.0</div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <a class="inline-flex items-center gap-2 text-primary font-bold text-sm hover:underline" href="#">
                            Xem chi tiết case study <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <div class="flex-1 w-full relative">
                    <div class="relative w-full aspect-[4/3] bg-gray-50 rounded-[2rem] border border-gray-100 p-4 shadow-inner overflow-hidden">
                        <div class="absolute bottom-0 left-0 right-0 h-[80%] flex items-end justify-between px-8 pb-8 gap-4 opacity-80">
                            <div class="w-full bg-blue-100 rounded-t-lg h-[20%] relative group">
                                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">Tháng 1</div>
                            </div>
                            <div class="w-full bg-blue-200 rounded-t-lg h-[35%] relative group">
                                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">Tháng 2</div>
                            </div>
                            <div class="w-full bg-blue-300 rounded-t-lg h-[50%] relative group">
                                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">Tháng 3</div>
                            </div>
                            <div class="w-full bg-blue-400 rounded-t-lg h-[65%] relative group">
                                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">Tháng 4</div>
                            </div>
                            <div class="w-full bg-gradient-to-t from-primary to-blue-400 rounded-t-lg h-[90%] shadow-lg shadow-blue-500/20 relative group">
                                <div class="absolute top-4 left-1/2 -translate-x-1/2 text-white font-bold text-xs">Mall</div>
                                <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-[10px] px-2 py-1 rounded">Tháng 5</div>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4 w-[160px] h-[220px] bg-white rounded-xl shadow-2xl border border-gray-100 p-2 transform rotate-6 hover:rotate-0 transition-transform duration-500 z-20">
                            <div class="w-full h-full bg-gray-50 rounded-lg overflow-hidden flex flex-col">
                                <div class="h-8 bg-shopee flex items-center px-2 gap-2">
                                    <div class="w-4 h-4 rounded-full bg-white/20"></div>
                                    <div class="w-20 h-2 rounded-full bg-white/20"></div>
                                </div>
                                <div class="p-2 grid grid-cols-2 gap-2">
                                    <div class="bg-white h-20 rounded shadow-sm"></div>
                                    <div class="bg-white h-20 rounded shadow-sm"></div>
                                    <div class="bg-white h-20 rounded shadow-sm"></div>
                                    <div class="bg-white h-20 rounded shadow-sm"></div>
                                </div>
                            </div>
                            <div class="absolute -bottom-3 -right-3 w-10 h-10 bg-red-500 rounded-full flex items-center justify-center text-white shadow-lg border-2 border-white">
                                <span class="material-symbols-outlined text-[20px]">shopping_bag</span>
                            </div>
                        </div>
                        <div class="absolute top-6 left-6 flex gap-2">
                            <div class="flex items-center gap-1.5 bg-white/80 backdrop-blur px-2.5 py-1 rounded-full shadow-sm border border-gray-100">
                                <div class="w-2 h-2 rounded-full bg-blue-200"></div>
                                <span class="text-[10px] font-medium text-gray-500">Shop thường</span>
                            </div>
                            <div class="flex items-center gap-1.5 bg-white/80 backdrop-blur px-2.5 py-1 rounded-full shadow-sm border border-gray-100">
                                <div class="w-2 h-2 rounded-full bg-primary"></div>
                                <span class="text-[10px] font-bold text-primary">Shopee Mall</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-20 px-6 lg:px-10">
        <div class="mx-auto max-w-[1000px] grid md:grid-cols-2 gap-8">
            <div class="bg-[#FFFBF0] rounded-[1.5rem] p-8 lg:p-10 border border-[#FDE6C3]">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-[#F59E0B] text-[24px]">warning</span>
                    <h3 class="text-lg font-bold text-gray-900">Lưu Ý Quan Trọng</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#F59E0B] mt-2 shrink-0"></span>
                        <span class="text-gray-600 text-[13px] leading-relaxed">
                            Quy trình xét duyệt Shopee Mall ngày càng nghiêm ngặt. Việc tự đăng ký nếu hồ sơ không chuẩn có thể dẫn đến bị từ chối và <span class="text-red-500 font-bold">phải chờ 6 tháng</span> mới được nộp lại. Đừng để lỡ cơ hội kinh doanh vì thiếu kinh nghiệm.
                        </span>
                    </li>
                    </ul>
            </div>
            <div class="bg-[#F0F7FF] rounded-[1.5rem] p-8 lg:p-10 border border-[#CCE4FF]">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-[24px]">verified_user</span>
                    <h3 class="text-lg font-bold text-gray-900">Cam Kết Của MEXO</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-primary flex items-center justify-center shrink-0 mt-0.5">
  <span class="material-symbols-outlined text-white">check</span>
</span>
                        <span class="text-gray-600 text-[13px]">Đồng hành đến khi lên Mall thành công.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-primary flex items-center justify-center shrink-0 mt-0.5">
                            <span class="material-symbols-outlined text-white text-[12px] font-bold">check</span>
                        </span>
                        <span class="text-gray-600 text-[13px]">Hoàn tiền 100% nếu không thực hiện được cam kết.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-primary flex items-center justify-center shrink-0 mt-0.5">
                            <span class="material-symbols-outlined text-white text-[12px] font-bold">check</span>
                        </span>
                        <span class="text-gray-600 text-[13px]">Bảo mật thông tin doanh nghiệp tuyệt đối.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="hidden py-20 px-4 lg:px-8 bg-[#f3f5f8] overflow-hidden relative font-display">
        <div class="mx-auto max-w-[1140px] bg-white rounded-[2rem] shadow-xl p-8 lg:p-14">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16">
                <div class="lg:col-span-5 flex flex-col">
                    <div class="mb-10">
                        <h4 class="text-primary font-bold text-[13px] uppercase tracking-wide mb-3">TƯ DUY &amp; GIẢI PHÁP TĂNG TRƯỞNG THỰC CHIẾN SHOPEE</h4>
                        <h2 class="text-4xl lg:text-[46px] font-extrabold text-[#0a1f44] mb-6 leading-[1.15]">
                            Đồng hành cùng <br/> <span class="text-primary">sự phát triển của bạn</span>
                        </h2>
                        <p class="text-slate-500 mb-10 leading-relaxed text-[15px]">
                            Điền thông tin để nói chuyện với chuyên gia của MEXO GROUP. Chúng tôi cung cấp kiến thức chuyên sâu, bộ công cụ tối ưu và tư duy vận hành giúp bạn tự tin làm chủ gian hàng Shopee và bứt phá doanh số bền vững.
                        </p>
                        <div class="bg-blue-50/50 rounded-3xl p-6 border border-blue-50">
                            <h3 class="flex items-center gap-2 text-primary font-bold text-lg mb-5">
                                <span class="material-symbols-outlined text-blue-600 fill-current">star</span> Đặc quyền khi hợp tác
                            </h3>
                            <div class="space-y-5">
                                <div class="flex gap-4 items-start">
                                    <div class="w-8 h-8 rounded-full bg-white text-green-600 flex items-center justify-center shrink-0 shadow-sm mt-0.5">
                                        <span class="material-symbols-outlined text-[20px] fill-current">check_circle</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Bảo mật thông tin 100%</h4>
                                        <p class="text-xs text-gray-500 leading-relaxed">Dữ liệu và chiến lược kinh doanh được cam kết bảo mật tuyệt đối.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4 items-start">
                                    <div class="w-8 h-8 rounded-full bg-white text-green-600 flex items-center justify-center shrink-0 shadow-sm mt-0.5">
                                        <span class="material-symbols-outlined text-[20px] fill-current">check_circle</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Tư vấn nhanh chóng</h4>
                                        <p class="text-xs text-gray-500 leading-relaxed">Đội ngũ chuyên gia phản hồi và đề xuất giải pháp trong 24h.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4 items-start">
                                    <div class="w-8 h-8 rounded-full bg-white text-green-600 flex items-center justify-center shrink-0 shadow-sm mt-0.5">
                                        <span class="material-symbols-outlined text-[20px] fill-current">check_circle</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Hiệu quả thực tế</h4>
                                        <p class="text-xs text-gray-500 leading-relaxed">Cam kết tăng trưởng dựa trên KPIs rõ ràng và minh bạch.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4 items-start">
                                    <div class="w-8 h-8 rounded-full bg-white text-green-600 flex items-center justify-center shrink-0 shadow-sm mt-0.5">
                                        <span class="material-symbols-outlined text-[20px] fill-current">check_circle</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Đồng hành dài hạn</h4>
                                        <p class="text-xs text-gray-500 leading-relaxed">Hỗ trợ 1-1 trong suốt quá trình triển khai và vận hành.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto relative rounded-[2rem] overflow-hidden bg-[#111827] flex items-end p-6 min-h-[140px]">
                        <img alt="Team working" class="absolute inset-0 w-full h-full object-cover opacity-40 mix-blend-overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqsmBONID2eBEEKmoMA2lSkvYxRJOvZezkwIRpxwzSlH1CAoE1QQUPziss84D1RK6xEhSmqSd87Gjp99fqmb-4bhshrmyppFbOhVG3OKLq-jvBNEucp1YV8W_mV4Zh0MLMAR6kkY5Z7YCKO6NdRoAXbeykacx9BQBH4Z9_8r54a1pygiRZXRbKZB8s57zGc8u0BYvoDk1rCmpCpDdtz9-pXjlHZJfgHFgwd9lO2bSKzI4rGHuZRC3rtBjFENAeBRfC57nZI_DDtjml"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10"></div>
                        <div class="relative z-20">
                            <div class="flex gap-1 text-yellow-400 mb-2">
                                <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                                <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                                <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                                <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                                <span class="material-symbols-outlined text-[16px] fill-current">star</span>
                            </div>
                            <p class="text-white text-[13px] font-medium leading-relaxed italic">"Giải pháp của MEXO giúp chúng tôi tối ưu 40% chi phí vận hành chỉ trong quý đầu tiên."</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 pl-0 lg:pl-6">
                    <form id="xc-custom-form-2" class="space-y-8">
                        <div>
                            <h3 class="flex items-center gap-3 text-[17px] font-bold text-gray-900 mb-5">
                                <div class="w-8 h-8 rounded-full bg-blue-100 text-primary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">person</span>
                                </div>
                                Thông tin liên hệ
                            </h3>
                            <div class="grid md:grid-cols-2 gap-x-5 gap-y-4">
                                <div class="space-y-1.5">
                                    <label class="text-[13px] font-bold text-gray-700 ml-1">Họ và tên <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 pointer-events-none text-gray-400 material-symbols-outlined text-[18px]">badge</span>
                                        <input name="fullname" class="w-full rounded-full border-gray-200 py-3 pl-11 pr-4 text-[13px] focus:border-primary focus:ring-primary placeholder:text-gray-400 bg-white" placeholder="Nhập họ tên của bạn" type="text"/>
                                    </div>
                                </div>
                                <div class="space-y-1.5">
                                    <label class="text-[13px] font-bold text-gray-700 ml-1">Số điện thoại <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 pointer-events-none text-gray-400 material-symbols-outlined text-[18px]">call</span>
                                        <input name="phone" class="w-full rounded-full border-gray-200 py-3 pl-11 pr-4 text-[13px] focus:border-primary focus:ring-primary placeholder:text-gray-400 bg-white" placeholder="Nhập SĐT liên hệ" type="tel"/>
                                    </div>
                                </div>
                                <div class="md:col-span-2 space-y-1.5">
                                    <label class="text-[13px] font-bold text-gray-700 ml-1">Email công việc <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 pointer-events-none text-gray-400 material-symbols-outlined text-[18px]">mail</span>
                                        <input name="email" class="w-full rounded-full border-gray-200 py-3 pl-11 pr-4 text-[13px] focus:border-primary focus:ring-primary placeholder:text-gray-400 bg-white" placeholder="name@company.com" type="email"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="flex items-center gap-3 text-[17px] font-bold text-gray-900 mb-5">
                                <div class="w-8 h-8 rounded-full bg-blue-100 text-primary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">storefront</span>
                                </div>
                                Thông tin doanh nghiệp
                            </h3>
                            <div class="grid md:grid-cols-2 gap-x-5 gap-y-4">
                                <div class="space-y-1.5">
                                    <label class="text-[13px] font-bold text-gray-700 ml-1">Mô hình kinh doanh</label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 pointer-events-none text-gray-400 material-symbols-outlined text-[18px]">category</span>
                                        <select name="business_model" class="w-full rounded-full border-gray-200 py-3 pl-11 pr-10 text-[13px] focus:border-primary focus:ring-primary text-gray-500 appearance-none bg-white">
                                            <option disabled="" selected="" value="">Chọn mô hình</option>
                                            <option value="Nhà sản xuất">Nhà sản xuất</option>
                                            <option value="Đại lý phân phối">Đại lý phân phối</option>
                                            <option value="Bán lẻ">Bán lẻ</option>
                                        </select>
                                        <span class="absolute right-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 text-gray-400 material-symbols-outlined text-[18px] pointer-events-none">expand_more</span>
                                    </div>
                                </div>
                                <div class="space-y-1.5">
                                    <label class="text-[13px] font-bold text-gray-700 ml-1">Ngành hàng</label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 pointer-events-none text-gray-400 material-symbols-outlined text-[18px]">shopping_bag</span>
                                        <input name="industry" class="w-full rounded-full border-gray-200 py-3 pl-11 pr-4 text-[13px] focus:border-primary focus:ring-primary placeholder:text-gray-400 bg-white placeholder:text-gray-400" placeholder="VD: Thời trang, Mỹ phẩm" type="text"/>
                                    </div>
                                </div>
                                <div class="space-y-1.5">
                                    <label class="text-[13px] font-bold text-gray-700 ml-1">Nền tảng quan tâm</label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 pointer-events-none text-gray-400 material-symbols-outlined text-[18px]">layers</span>
                                        <select name="platform" class="w-full rounded-full border-gray-200 py-3 pl-11 pr-10 text-[13px] focus:border-primary focus:ring-primary text-gray-500 appearance-none bg-white">
                                            <option disabled="" selected="" value="">Chọn nền tảng</option>
                                            <option value="Shopee">Shopee</option>
                                            <option value="TikTok Shop">TikTok Shop</option>
                                            <option value="Lazada">Lazada</option>
                                        </select>
                                        <span class="absolute right-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 text-gray-400 material-symbols-outlined text-[18px] pointer-events-none">expand_more</span>
                                    </div>
                                </div>
                                <div class="space-y-1.5">
                                    <label class="text-[13px] font-bold text-gray-700 ml-1">Ngân sách Marketing / tháng</label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 pointer-events-none text-gray-400 text-[14px] font-semibold">$</span>
                                        <select name="budget" class="w-full rounded-full border-gray-200 py-3 pl-11 pr-10 text-[13px] focus:border-primary focus:ring-primary text-gray-500 appearance-none bg-white">
                                            <option disabled="" selected="" value="">Chọn mức ngân sách</option>
                                            <option value="&lt; 10 triệu">&lt; 10 triệu</option>
                                            <option value="10 - 50 triệu">10 - 50 triệu</option>
                                            <option value="50 - 100 triệu">50 - 100 triệu</option>
                                            <option value="&gt; 100 triệu">&gt; 100 triệu</option>
                                        </select>
                                        <span class="absolute right-4 top-1/2 -translate-y-1/2 leading-none mt-0.5 text-gray-400 material-symbols-outlined text-[18px] pointer-events-none">expand_more</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="flex items-center gap-3 text-[17px] font-bold text-gray-900 mb-5">
                                <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">rocket_launch</span>
                                </div>
                                Mục tiêu hỗ trợ
                            </h3>
                            <div class="grid md:grid-cols-2 gap-3">
                                <label class="cursor-pointer group relative">
                                    <input class="peer sr-only custom-radio-input" name="goals[]" value="Tư vấn chiến lược" type="checkbox"/>
                                    <div class="flex items-center p-4 rounded-[1.2rem] border border-gray-200 hover:border-blue-300 transition-all bg-white h-full radio-content">
                                        <div class="w-5 h-5 rounded-full border border-gray-300 mr-3 flex items-center justify-center shrink-0 radio-circle-outer transition-colors">
                                            <div class="w-2.5 h-2.5 rounded-full bg-transparent radio-circle-inner transition-colors"></div>
                                        </div>
                                        <div>
                                            <span class="block text-[13px] font-bold text-gray-900 group-hover:text-primary transition-colors">Tư vấn chiến lược</span>
                                            <span class="block text-[11px] text-gray-500 mt-0.5">Phân tích &amp; lập kế hoạch</span>
                                        </div>
                                    </div>
                                </label>
                                <label class="cursor-pointer group relative">
                                    <input class="peer sr-only custom-radio-input" name="goals[]" value="Setup & Vận hành" type="checkbox"/>
                                    <div class="flex items-center p-4 rounded-[1.2rem] border border-gray-200 hover:border-blue-300 transition-all bg-white h-full radio-content">
                                        <div class="w-5 h-5 rounded-full border border-gray-300 mr-3 flex items-center justify-center shrink-0 radio-circle-outer transition-colors">
                                            <div class="w-2.5 h-2.5 rounded-full bg-transparent radio-circle-inner transition-colors"></div>
                                        </div>
                                        <div>
                                            <span class="block text-[13px] font-bold text-gray-900 group-hover:text-primary transition-colors">Setup &amp; Vận hành</span>
                                            <span class="block text-[11px] text-gray-500 mt-0.5">Xây dựng gian hàng chuẩn SEO</span>
                                        </div>
                                    </div>
                                </label>
                                <label class="cursor-pointer group relative">
                                    <input class="peer sr-only custom-radio-input" name="goals[]" value="Quảng cáo (Ads)" type="checkbox"/>
                                    <div class="flex items-center p-4 rounded-[1.2rem] border border-gray-200 hover:border-blue-300 transition-all bg-white h-full radio-content">
                                        <div class="w-5 h-5 rounded-full border border-gray-300 mr-3 flex items-center justify-center shrink-0 radio-circle-outer transition-colors">
                                            <div class="w-2.5 h-2.5 rounded-full bg-transparent radio-circle-inner transition-colors"></div>
                                        </div>
                                        <div>
                                            <span class="block text-[13px] font-bold text-gray-900 group-hover:text-primary transition-colors">Quảng cáo (Ads)</span>
                                            <span class="block text-[11px] text-gray-500 mt-0.5">Tối ưu chi phí &amp; tăng chuyển đổi</span>
                                        </div>
                                    </div>
                                </label>
                                <label class="cursor-pointer group relative">
                                    <input class="peer sr-only custom-radio-input" name="goals[]" value="Booking & Media" type="checkbox"/>
                                    <div class="flex items-center p-4 rounded-[1.2rem] border border-gray-200 hover:border-blue-300 transition-all bg-white h-full radio-content">
                                        <div class="w-5 h-5 rounded-full border border-gray-300 mr-3 flex items-center justify-center shrink-0 radio-circle-outer transition-colors">
                                            <div class="w-2.5 h-2.5 rounded-full bg-transparent radio-circle-inner transition-colors"></div>
                                        </div>
                                        <div>
                                            <span class="block text-[13px] font-bold text-gray-900 group-hover:text-primary transition-colors">Booking &amp; Media</span>
                                            <span class="block text-[11px] text-gray-500 mt-0.5">KOLs/KOCs &amp; Livestream</span>
                                        </div>
                                    </div>
                                </label>
                                <label class="cursor-pointer group relative">
                                    <input class="peer sr-only custom-radio-input" name="goals[]" value="Đào tạo nhân sự" type="checkbox"/>
                                    <div class="flex items-center p-4 rounded-[1.2rem] border border-gray-200 hover:border-blue-300 transition-all bg-white h-full radio-content">
                                        <div class="w-5 h-5 rounded-full border border-gray-300 mr-3 flex items-center justify-center shrink-0 radio-circle-outer transition-colors">
                                            <div class="w-2.5 h-2.5 rounded-full bg-transparent radio-circle-inner transition-colors"></div>
                                        </div>
                                        <div>
                                            <span class="block text-[13px] font-bold text-gray-900 group-hover:text-primary transition-colors">Đào tạo nhân sự</span>
                                            <span class="block text-[11px] text-gray-500 mt-0.5">Xây dựng đội ngũ in-house</span>
                                        </div>
                                    </div>
                                </label>
                                <label class="cursor-pointer group relative">
                                    <input class="peer sr-only custom-radio-input" name="goals[]" value="Khác" type="checkbox"/>
                                    <div class="flex items-center p-4 rounded-[1.2rem] border border-gray-200 hover:border-blue-300 transition-all bg-white h-full radio-content">
                                        <div class="w-5 h-5 rounded-full border border-gray-300 mr-3 flex items-center justify-center shrink-0 radio-circle-outer transition-colors">
                                            <div class="w-2.5 h-2.5 rounded-full bg-transparent radio-circle-inner transition-colors"></div>
                                        </div>
                                        <div>
                                            <span class="block text-[13px] font-bold text-gray-900 group-hover:text-primary transition-colors">Khác</span>
                                            <span class="block text-[11px] text-gray-500 mt-0.5">Nhu cầu cụ thể khác</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="pt-4">
                            <button id="xc-submit-btn-2" class="w-full bg-primary hover:bg-primary-dark transition-all text-white font-bold text-[15px] py-4 rounded-full shadow-lg shadow-blue-500/30 flex items-center justify-center gap-2" type="submit">
                                Nhận tư vấn miễn phí ngay 
                                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                            </button>
                            <p class="text-[11px] text-gray-400 text-center mt-4 max-w-lg mx-auto leading-relaxed">
                                Bằng việc đăng ký, bạn đồng ý với <a class="underline hover:text-primary" href="#">Điều khoản</a> và <a class="underline hover:text-primary" href="#">Chính sách bảo mật</a> của chúng tôi.
                            </p>
                        </div>
                    </form>
                    <!-- Hidden CF7 Form for Form 2 -->
                    <div class="xc-hidden-cf7-2" style="display:none !important;">
                        <?php echo do_shortcode('[contact-form-7 id="e49f7e9" title="Form liên hệ"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    (function() {
        const customSubmitBtn2 = document.getElementById('xc-submit-btn-2');

        if(customSubmitBtn2) {
            const newBtn2 = customSubmitBtn2.cloneNode(true);
            customSubmitBtn2.parentNode.replaceChild(newBtn2, customSubmitBtn2);

            newBtn2.addEventListener('click', function(e) {
                e.preventDefault();

                // 1. Collect Data from Custom Form 2
                const form2 = document.getElementById('xc-custom-form-2');
                if (!form2) return;

                const name = form2.querySelector('[name="fullname"]').value;
                const phone = form2.querySelector('[name="phone"]').value;
                const email = form2.querySelector('[name="email"]').value;
                const model = form2.querySelector('[name="business_model"]').value;
                const industry = form2.querySelector('[name="industry"]').value;
                const platform = form2.querySelector('[name="platform"]').value;
                const budget = form2.querySelector('[name="budget"]').value;
                // No message field in this form version in code (2).html
                
                let goals = [];
                form2.querySelectorAll('input[name="goals[]"]:checked').forEach(function(checkbox) {
                    goals.push(checkbox.value);
                });

                // 2. Validate (Basic)
                if(!name || !phone || !email) {
                    alert('Vui lòng điền đầy đủ các thông tin bắt buộc (*)');
                    return;
                }

                // 3. Populate Hidden CF7 Fields
                const setVal2 = (fieldName, val) => {
                    const el = document.querySelector(`.xc-hidden-cf7-2 input[name="${fieldName}"], .xc-hidden-cf7-2 textarea[name="${fieldName}"]`);
                    if(el) el.value = val;
                };

                setVal2('your-name', name);
                setVal2('your-phone', phone);
                setVal2('your-email', email);
                setVal2('business-model', model);
                setVal2('industry', industry);
                setVal2('platform', platform);
                setVal2('budget', budget);
                setVal2('goals', goals.join(', '));

                // 4. Trigger CF7 Submit
                const cf7Submit2 = document.querySelector('.xc-hidden-cf7-2 input[type="submit"]');
                if(cf7Submit2) {
                    const originalText = newBtn2.innerHTML;
                    newBtn2.innerHTML = '<span class="flex items-center justify-center gap-2"><span class="animate-spin h-4 w-4 border-2 border-white rounded-full border-t-transparent"></span> Đang gửi...</span>';
                    newBtn2.disabled = true;
                    newBtn2.classList.add('opacity-75', 'cursor-not-allowed');

                    const cf7Form2 = document.querySelector('.xc-hidden-cf7-2 form');
                    
                    if(cf7Form2) {
                        const handleSuccess2 = function(event) {
                            newBtn2.innerHTML = originalText;
                            newBtn2.disabled = false;
                            newBtn2.classList.remove('opacity-75', 'cursor-not-allowed');
                            alert('Gửi thông tin thành công! Chúng tôi sẽ liên hệ lại sớm.');
                            form2.reset();
                            cleanup2();
                        };

                        const handleFail2 = function(event) {
                            newBtn2.innerHTML = originalText;
                            newBtn2.disabled = false;
                            newBtn2.classList.remove('opacity-75', 'cursor-not-allowed');
                            alert('Vui lòng kiểm tra lại thông tin hoặc thử lại sau.');
                            cleanup2();
                        };

                        const cleanup2 = () => {
                            cf7Form2.removeEventListener('wpcf7mailsent', handleSuccess2);
                            cf7Form2.removeEventListener('wpcf7invalid', handleFail2);
                            cf7Form2.removeEventListener('wpcf7spam', handleFail2);
                            cf7Form2.removeEventListener('wpcf7mailfailed', handleFail2);
                        };

                        cf7Form2.addEventListener('wpcf7mailsent', handleSuccess2);
                        cf7Form2.addEventListener('wpcf7invalid', handleFail2);
                        cf7Form2.addEventListener('wpcf7spam', handleFail2);
                        cf7Form2.addEventListener('wpcf7mailfailed', handleFail2);
                    }

                    setTimeout(() => {
                        cf7Submit2.click();
                    }, 100);
                }
            });
        }
    })();
    </script>

</div>

<?php get_footer(); ?>

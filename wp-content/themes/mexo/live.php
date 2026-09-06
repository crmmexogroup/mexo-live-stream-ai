<?php
/*
Template Name: Livetream 247
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
<section class="mexo-service-hero relative overflow-hidden pt-24 pb-16 lg:pt-24 lg:pb-24 bg-gradient-to-b from-orange-50/80 to-white dark:from-background-dark dark:to-background-dark">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
<div class="flex flex-col gap-8 relative z-10">
<div class="mexo-hero-pill inline-flex w-fit items-center rounded-full bg-orange-100 border border-orange-200 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-orange-600 dark:bg-orange-900/30 dark:border-orange-800 dark:text-orange-400 shadow-sm">
<span class="relative flex h-2.5 w-2.5 mr-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-orange-500"></span>
</span>
                    Giải pháp Bán hàng Tự động
                </div>
<h1 class="text-4xl font-black leading-tight tracking-tight text-text-main dark:text-white sm:text-5xl lg:text-6xl">
                    Bứt Phá Doanh Thu <br class="hidden lg:block"/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">Cùng Livestream <br/> Tự Động 24/7</span>
</h1>
<p class="text-lg text-text-sub dark:text-gray-400 max-w-xl leading-relaxed">
                    Giải pháp livestream thông minh giúp gian hàng của bạn hoạt động bền bỉ 24/24. Tăng trưởng doanh thu bền vững, tiếp cận khách hàng tự nhiên và tối ưu chi phí vận hành xuống mức thấp nhất.
                </p>
<div class="grid grid-cols-3 gap-6 py-6 border-y border-orange-100 dark:border-gray-800">
<div class="group flex flex-col gap-3">
<div class="flex items-center gap-3">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-blue-600 group-hover:bg-blue-100 transition-colors dark:bg-blue-900/20 dark:text-blue-400">
<span class="material-symbols-outlined text-2xl">schedule</span>
</div>
<span class="text-3xl font-black text-text-main dark:text-white">24h</span>
</div>
<p class="text-sm font-medium text-text-sub dark:text-gray-400">Hoạt động liên tục</p>
</div>
<div class="group flex flex-col gap-3">
<div class="flex items-center gap-3">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-green-50 text-green-600 group-hover:bg-green-100 transition-colors dark:bg-green-900/20 dark:text-green-400">
<span class="material-symbols-outlined text-2xl">money_off</span>
</div>
<span class="text-3xl font-black text-text-main dark:text-white">0đ</span>
</div>
<p class="text-sm font-medium text-text-sub dark:text-gray-400">Chi phí nhân sự</p>
</div>
<div class="group flex flex-col gap-3">
<div class="flex items-center gap-3">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-purple-50 text-purple-600 group-hover:bg-purple-100 transition-colors dark:bg-purple-900/20 dark:text-purple-400">
<span class="material-symbols-outlined text-2xl">rocket_launch</span>
</div>
<span class="text-3xl font-black text-text-main dark:text-white">x3</span>
</div>
<p class="text-sm font-medium text-text-sub dark:text-gray-400">Hiệu quả chuyển đổi</p>
</div>
</div>
<div class="flex flex-wrap gap-4 pt-2">
<button type="button"
    onclick="window.location.href='/lien-he/';" class="flex h-14 items-center justify-center rounded-xl bg-gradient-to-r from-orange-500 to-red-600 px-8 text-base font-bold text-white transition-all hover:shadow-lg hover:shadow-orange-500/30 hover:-translate-y-1">
<span class="material-symbols-outlined mr-2">videocam</span>
                        Yêu cầu tư vấn Livestream
                    </button>
<button class="flex h-14 items-center justify-center rounded-xl border-2 border-orange-100 bg-white px-8 text-base font-bold text-text-main transition-all hover:border-orange-500 hover:text-orange-600 dark:bg-card-dark dark:border-gray-700 dark:text-white dark:hover:border-orange-500">
                        Khám phá chi tiết
                    </button>
</div>
</div>
<div class="relative lg:pl-10">
<div class="relative z-10 animate-float">
<div class="absolute -top-10 -right-10 w-24 h-24 bg-yellow-400 rounded-full blur-3xl opacity-30 animate-pulse"></div>
<div class="absolute -bottom-10 -left-10 w-32 h-32 bg-red-500 rounded-full blur-3xl opacity-20"></div>
<div class="relative aspect-[9/16] max-w-sm mx-auto bg-black rounded-[2.5rem] border-[10px] border-gray-900 shadow-2xl overflow-hidden ring-1 ring-gray-900/5 group cursor-pointer" id="mexo-phone-player">
<video id="mexo-ai-video" class="w-full h-full object-cover rounded-[1.8rem]" playsinline preload="metadata" muted>
<source id="mexo-video-source" src="<?php echo get_template_directory_uri(); ?>/assets/videos/livestream-ai/1.mp4" type="video/mp4">
</video>
<div id="mexo-play-overlay" class="absolute inset-0 bg-black/30 flex flex-col items-center justify-center transition-opacity duration-300 pointer-events-none">
<div class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center border border-white/30 text-white shadow-xl transition-transform transform group-hover:scale-110">
<span id="mexo-play-icon" class="material-symbols-outlined text-4xl">play_arrow</span>
</div>
<p id="mexo-play-label" class="text-white text-xs font-bold mt-2 bg-black/50 px-3 py-1 rounded-full backdrop-blur-sm">Bấm để xem video 1/7</p>
</div>
<div class="absolute bottom-3 left-0 right-0 flex justify-center gap-1.5 z-20" id="mexo-video-dots">
<?php for($i = 1; $i <= 7; $i++): ?>
<button type="button" onclick="event.stopPropagation(); selectVideo(<?php echo $i; ?>);" class="w-2.5 h-2.5 rounded-full transition-all duration-300 <?php echo $i === 1 ? 'bg-orange-500 w-5' : 'bg-white/50 hover:bg-white'; ?>" aria-label="Video <?php echo $i; ?>" data-index="<?php echo $i; ?>"></button>
<?php endfor; ?>
</div>
<button type="button" onclick="event.stopPropagation(); prevVideo();" class="absolute left-2 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-black/40 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity z-20 hover:bg-black/70" aria-label="Video trước">
<span class="material-symbols-outlined text-lg">chevron_left</span>
</button>
<button type="button" onclick="event.stopPropagation(); nextVideo();" class="absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-black/40 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity z-20 hover:bg-black/70" aria-label="Video tiếp">
<span class="material-symbols-outlined text-lg">chevron_right</span>
</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const themeUri = "<?php echo get_template_directory_uri(); ?>";
    const totalVideos = 7;
    let currentIndex = 1;
    let autoNextTimer = null;
    let isUserPlaying = false;

    const video = document.getElementById('mexo-ai-video');
    const source = document.getElementById('mexo-video-source');
    const playOverlay = document.getElementById('mexo-play-overlay');
    const playIcon = document.getElementById('mexo-play-icon');
    const playLabel = document.getElementById('mexo-play-label');
    const playerContainer = document.getElementById('mexo-phone-player');

    function updateVideo(index, playImmediately = false) {
        currentIndex = index;
        const videoUrl = themeUri + '/assets/videos/livestream-ai/' + currentIndex + '.mp4';
        
        video.pause();
        source.src = videoUrl;
        video.load();

        const dots = document.querySelectorAll('#mexo-video-dots button');
        dots.forEach((dot, idx) => {
            if (idx + 1 === currentIndex) {
                dot.className = 'w-5 h-2.5 rounded-full transition-all duration-300 bg-orange-500';
            } else {
                dot.className = 'w-2.5 h-2.5 rounded-full transition-all duration-300 bg-white/50 hover:bg-white';
            }
        });

        if (playImmediately) {
            video.muted = false;
            video.play().then(() => {
                isUserPlaying = true;
                playIcon.textContent = 'pause';
                playLabel.textContent = 'Đang phát video ' + currentIndex + '/7';
                playOverlay.classList.add('opacity-0');
                stopAutoNext();
            }).catch(err => console.log('Playback error:', err));
        } else {
            video.muted = true;
            playIcon.textContent = 'play_arrow';
            playLabel.textContent = 'Bấm để xem video ' + currentIndex + '/7';
            playOverlay.classList.remove('opacity-0');
        }
    }

    function startAutoNext() {
        stopAutoNext();
        autoNextTimer = setInterval(function() {
            if (!isUserPlaying) {
                let nextIdx = currentIndex + 1;
                if (nextIdx > totalVideos) nextIdx = 1;
                updateVideo(nextIdx, false);
            }
        }, 3000);
    }

    function stopAutoNext() {
        if (autoNextTimer) {
            clearInterval(autoNextTimer);
            autoNextTimer = null;
        }
    }

    window.selectVideo = function(index) {
        updateVideo(index, isUserPlaying);
    };

    window.nextVideo = function() {
        let nextIdx = currentIndex + 1;
        if (nextIdx > totalVideos) nextIdx = 1;
        updateVideo(nextIdx, isUserPlaying);
    };

    window.prevVideo = function() {
        let prevIdx = currentIndex - 1;
        if (prevIdx < 1) prevIdx = totalVideos;
        updateVideo(prevIdx, isUserPlaying);
    };

    playerContainer.addEventListener('click', function() {
        if (video.paused) {
            video.muted = false;
            video.play().then(() => {
                isUserPlaying = true;
                playIcon.textContent = 'pause';
                playLabel.textContent = 'Đang phát video ' + currentIndex + '/7';
                playOverlay.classList.add('opacity-0');
                stopAutoNext();
            }).catch(err => console.log('Playback error:', err));
        } else {
            video.pause();
            isUserPlaying = false;
            playIcon.textContent = 'play_arrow';
            playLabel.textContent = 'Tạm dừng (Bấm để tiếp tục)';
            playOverlay.classList.remove('opacity-0');
            startAutoNext();
        }
    });

    video.addEventListener('ended', function() {
        window.nextVideo();
    });

    startAutoNext();
});
</script>
<div class="absolute top-1/4 -left-12 bg-white dark:bg-card-dark p-3.5 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 flex items-center gap-3 animate-[float_4s_infinite]">
<div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600">
<span class="material-symbols-outlined">payments</span>
</div>
<div>
<p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Doanh thu</p>
<p class="text-sm font-bold text-gray-900 dark:text-white">+350%</p>
</div>
</div>
<div class="absolute bottom-1/3 -right-12 bg-white dark:bg-card-dark p-3.5 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 flex items-center gap-3 animate-[float_5s_infinite_reverse]">
<div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
<span class="material-symbols-outlined">group_add</span>
</div>
<div>
<p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Follow mới</p>
<p class="text-sm font-bold text-gray-900 dark:text-white">+500/ngày</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="bg-white py-12 dark:bg-background-dark border-t border-gray-100 dark:border-gray-800">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="mb-24">
<div class="text-center mb-10">
<h2 class="text-2xl md:text-3xl font-bold text-text-main dark:text-white mb-4">DỊCH VỤ NÀY PHÙ HỢP VỚI AI?</h2>
<div class="w-16 h-1 bg-primary mx-auto rounded-full"></div>
<p class="text-text-sub dark:text-gray-400 mt-4 max-w-2xl mx-auto">Giải pháp Livestream Shopee 24/7 được thiết kế tối ưu cho các nhóm đối tượng sau:</p>
</div>
<div class="bg-gradient-to-br from-blue-50/50 to-white dark:from-card-dark dark:to-background-dark p-8 md:p-10 rounded-3xl border border-blue-100 dark:border-gray-700 shadow-lg relative overflow-hidden">
<div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 bg-blue-100/50 rounded-full blur-3xl pointer-events-none"></div>
<div class="grid md:grid-cols-2 gap-x-8 gap-y-6 relative z-10">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 shrink-0">check_circle</span>
<span class="text-text-main dark:text-gray-200 font-medium">CHỦ SHOP KHÔNG CÓ NHÂN SỰ LIVESTREAM VÀ KHÔNG CÓ THỜI GIAN LIVESTREAM</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 shrink-0">check_circle</span>
<span class="text-text-main dark:text-gray-200 font-medium">CHỦ SHOP KHÔNG CÓ NHIỀU THỜI GIAN TỰ LIVE, LIVE NHIỀU ẢNH HƯỜNG SỨC KHỎE</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 shrink-0">check_circle</span>
<span class="text-text-main dark:text-gray-200 font-medium">CHỦ SHOP MUỐN TỐI ƯU CHI PHÍ SO VỚI THUÊ NHÂN SỰ LIVESTREAM</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 shrink-0">check_circle</span>
<span class="text-text-main dark:text-gray-200 font-medium">DOANH NGHIỆP MUỐN TỐI ƯU CHI PHÍ NHÂN SỰ LIVESTREAM</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 shrink-0">check_circle</span>
<span class="text-text-main dark:text-gray-200 font-medium">NGƯỜI MỚI BẮT ĐẦU BÁN HÀNG TRÊN SHOPEE, MUỐN TEST HIỆU QUẢ LIVESTREAM</span>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-green-500 mt-0.5 shrink-0">check_circle</span>
<span class="text-text-main dark:text-gray-200 font-medium">NGƯỜI KHÔNG MUỐN TỰ LÀM MẤT THỜI GIAN – NGẠI CÔNG NGHỆ – SỢ RỦI RO CHÁY NỔ</span>
</div>
</div>
<div class="mt-8 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl p-5 flex items-start gap-4">
<div class="bg-red-100 dark:bg-red-800 text-red-600 dark:text-red-200 p-2 rounded-full shrink-0">
<span class="material-symbols-outlined text-xl">block</span>
</div>
<div>
<p class="font-bold text-red-700 dark:text-red-400 text-sm mb-1">LƯU Ý QUAN TRỌNG:</p>
<p class="text-sm text-red-800 dark:text-red-300">
                            Dịch vụ không phù hợp với người chỉ mua gói để “buff số cho vui” hoặc muốn cam kết doanh thu ảo.
                        </p>
</div>
</div>
</div>
</div>
<div class="mb-16">
<div class="rounded-[2.5rem] bg-gradient-to-br from-indigo-900 to-primary-dark p-8 md:p-12 lg:p-16 relative overflow-hidden shadow-2xl">
<div class="absolute top-0 right-0 w-full h-full opacity-10">
<div class="absolute right-0 top-0 w-96 h-96 bg-pink-500 rounded-full blur-[100px]"></div>
<div class="absolute left-0 bottom-0 w-80 h-80 bg-blue-400 rounded-full blur-[100px]"></div>
</div>
<div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center">
<div class="text-white space-y-8">
<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur border border-white/20 text-sm font-semibold">
<span class="material-symbols-outlined text-base text-yellow-400">star</span>
                            Dịch vụ Tăng trưởng TOP 1
                        </div>
<h2 class="text-4xl lg:text-5xl font-black leading-tight">
                            Giải Pháp Livestream <br/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-orange-400">Shopee 24/7 Đột Phá</span>
</h2>
<p class="text-lg text-blue-100/90 leading-relaxed max-w-xl">
                            Chúng tôi mang đến chiến lược <strong>tự động hóa doanh thu</strong> hoàn chỉnh. Giúp Shop của bạn trở thành "cỗ máy bán hàng" hoạt động không nghỉ, tối ưu chi phí vận hành xuống 0đ trong khi tăng trưởng traffic và đơn hàng bền vững.
                        </p>
<div class="grid grid-cols-3 gap-6 pt-2">
<div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/10 text-center hover:bg-white/20 transition-colors">
<div class="text-2xl font-bold text-yellow-400 mb-1">24/7</div>
<div class="text-xs font-medium text-blue-100">Hoạt động</div>
</div>
<div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/10 text-center hover:bg-white/20 transition-colors">
<div class="text-2xl font-bold text-yellow-400 mb-1">0đ</div>
<div class="text-xs font-medium text-blue-100">Nhân sự</div>
</div>
<div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/10 text-center hover:bg-white/20 transition-colors">
<div class="text-2xl font-bold text-yellow-400 mb-1">x3</div>
<div class="text-xs font-medium text-blue-100">Chuyển đổi</div>
</div>
</div>
<div class="flex flex-wrap gap-4 pt-4">
<button type="button"
    onclick="window.location.href='/lien-he/';" class="px-8 py-4 bg-white text-primary-dark font-bold rounded-xl hover:bg-gray-50 transition-colors shadow-lg hover:shadow-xl hover:-translate-y-0.5 flex items-center gap-2">
                                Yêu cầu tư vấn Livestream
                                <span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="px-8 py-4 bg-transparent border-2 border-white/30 text-white font-bold rounded-xl hover:bg-white/10 transition-colors flex items-center gap-2">
                                Khám phá chi tiết giải pháp
                            </button>
</div>
</div>
<div class="relative lg:h-[500px] flex items-center justify-center">
<div class="absolute inset-0 bg-gradient-to-tr from-primary/20 to-transparent rounded-full blur-3xl"></div>
<div class="grid grid-cols-2 gap-4 w-full max-w-lg">
<div class="space-y-4 mt-8">
<div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 transform hover:-translate-y-2 transition-transform duration-300">
<div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center mb-4 text-white">
<span class="material-symbols-outlined text-2xl">auto_graph</span>
</div>
<h3 class="text-white font-bold text-lg mb-2">Tăng Trưởng Bền Vững</h3>
<p class="text-sm text-blue-100/80">Duy trì lượng truy cập ổn định và tăng trưởng tự nhiên mỗi ngày.</p>
</div>
<div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 transform hover:-translate-y-2 transition-transform duration-300">
<div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center mb-4 text-white">
<span class="material-symbols-outlined text-2xl">savings</span>
</div>
<h3 class="text-white font-bold text-lg mb-2">Tối Ưu Chi Phí</h3>
<p class="text-sm text-blue-100/80">Tiết kiệm 100% chi phí thuê mẫu livestream và vận hành studio.</p>
</div>
</div>
<div class="space-y-4">
<div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 transform hover:-translate-y-2 transition-transform duration-300">
<div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center mb-4 text-white">
<span class="material-symbols-outlined text-2xl">timer</span>
</div>
<h3 class="text-white font-bold text-lg mb-2">Tiết Kiệm Thời Gian</h3>
<p class="text-sm text-blue-100/80">Hệ thống tự động hoàn toàn, bạn có thêm thời gian phát triển sản phẩm.</p>
</div>
<div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 transform hover:-translate-y-2 transition-transform duration-300">
<div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center mb-4 text-white">
<span class="material-symbols-outlined text-2xl">support_agent</span>
</div>
<h3 class="text-white font-bold text-lg mb-2">Hỗ Trợ 1-1</h3>
<p class="text-sm text-blue-100/80">Đội ngũ kỹ thuật hỗ trợ setup và tối ưu liên tục 24/7.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-content active" id="shopee">
<div class="mt-8 relative">
<div class="text-center mb-10 relative">
<div class="inline-flex items-center gap-2 rounded-full bg-red-50 dark:bg-red-900/20 border border-red-100 dark:border-red-800 px-4 py-1.5 text-sm font-bold text-red-600 dark:text-red-400 mb-6 animate-pulse">
<span class="material-symbols-outlined text-lg">live_tv</span>
                        GIẢI PHÁP ĐỘT PHÁ
                    </div>
<h2 class="text-4xl md:text-5xl font-black text-text-main dark:text-white uppercase tracking-tight mb-6">
                        CHI TIẾT <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">LIVESTREAM 24/7</span>
</h2>
<div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto mt-12 text-left">
<div class="bg-white dark:bg-card-dark p-6 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow group">
<div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl">videocam</span>
</div>
<h3 class="text-lg font-bold text-text-main dark:text-white mb-2">Livestream 24/7 Là Gì?</h3>
<p class="text-sm text-text-sub dark:text-gray-400 leading-relaxed">
                                Hệ thống tự Livestream đã quay dựng sẵn trên Shopee. Duy trì trạng thái <strong>LIVE 24/24h</strong> liên tục không cần nhân sự trực, tối ưu chi phí.
                            </p>
</div>
<div class="bg-white dark:bg-card-dark p-6 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow group">
<div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl">bolt</span>
</div>
<h3 class="text-lg font-bold text-text-main dark:text-white mb-2">Điểm Nổi Bật</h3>
<p class="text-sm text-text-sub dark:text-gray-400 leading-relaxed">
                                Tiếp cận hàng ngàn khách hàng tự nhiên mỗi ngày. Tự động gắn sản phẩm vào giỏ hàng, thúc đẩy quyết định mua hàng ngay lập tức.
                            </p>
</div>
<div class="bg-white dark:bg-card-dark p-6 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow group">
<div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl">trending_up</span>
</div>
<h3 class="text-lg font-bold text-text-main dark:text-white mb-2">Lợi Ích Tổng Thể</h3>
<p class="text-sm text-text-sub dark:text-gray-400 leading-relaxed">
                                Xây dựng uy tín gian hàng nhanh chóng qua hình ảnh &amp; video thực tế. Bùng nổ doanh số với chi phí Marketing cực thấp so với Ads.
                            </p>
</div>
</div>
</div>
<div class="grid lg:grid-cols-12 gap-8 mb-16 mt-16">
<div class="lg:col-span-5 space-y-8">
<div class="bg-gradient-to-br from-white to-orange-50 dark:from-card-dark dark:to-card-dark/50 rounded-2xl p-8 shadow-lg border border-orange-100 dark:border-gray-700 h-full">
<h3 class="text-2xl font-bold text-text-main dark:text-white mb-6 flex items-center gap-3">
<span class="flex items-center justify-center w-10 h-10 rounded-lg bg-orange-100 text-orange-600">
<span class="material-symbols-outlined">thumb_up</span>
</span>
                                LỢI ÍCH KHI SỬ DỤNG
                            </h3>
<ul class="space-y-4">
<li class="flex items-start gap-3 p-3 rounded-lg bg-white dark:bg-gray-800 shadow-sm">
<span class="material-symbols-outlined text-green-500 mt-0.5">check_circle</span>
<span class="font-medium text-text-main dark:text-gray-200">Shop luôn hiển thị trạng thái đang LIVE</span>
</li>
<li class="flex items-start gap-3 p-3 rounded-lg bg-white dark:bg-gray-800 shadow-sm">
<span class="material-symbols-outlined text-green-500 mt-0.5">check_circle</span>
<span class="font-medium text-text-main dark:text-gray-200">Tăng độ uy tín và trust cho gian hàng</span>
</li>
<li class="flex items-start gap-3 p-3 rounded-lg bg-white dark:bg-gray-800 shadow-sm">
<span class="material-symbols-outlined text-green-500 mt-0.5">check_circle</span>
<span class="font-medium text-text-main dark:text-gray-200">Thu hút Traffic tự nhiên từ Shopee Live</span>
</li>
<li class="flex items-start gap-3 p-3 rounded-lg bg-white dark:bg-gray-800 shadow-sm">
<span class="material-symbols-outlined text-green-500 mt-0.5">check_circle</span>
<span class="font-medium text-text-main dark:text-gray-200">Tăng khả năng chốt đơn tự động</span>
</li>
<li class="flex items-start gap-3 p-3 rounded-lg bg-white dark:bg-gray-800 shadow-sm">
<span class="material-symbols-outlined text-green-500 mt-0.5">check_circle</span>
<span class="font-medium text-text-main dark:text-gray-200">Tiết kiệm chi phí nhân sự &amp; vận hành</span>
</li>
<li class="flex items-start gap-3 p-3 rounded-lg bg-white dark:bg-gray-800 shadow-sm">
<span class="material-symbols-outlined text-green-500 mt-0.5">check_circle</span>
<span class="font-medium text-text-main dark:text-gray-200">Tận dụng Voucher độc quyền Shopee Live</span>
</li>
</ul>
</div>
</div>
<div class="lg:col-span-7">
<div class="bg-white dark:bg-card-dark rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 overflow-hidden h-full flex flex-col">
<div class="bg-gray-50 dark:bg-gray-800 px-6 py-4 border-b border-gray-100 dark:border-gray-700 flex items-center justify-between">
<h3 class="text-xl font-bold text-text-main dark:text-white">So sánh hiệu quả đầu tư</h3>
<div class="px-3 py-1 rounded bg-green-100 text-green-700 text-xs font-bold uppercase">Khuyên dùng</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-sm text-left">
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400 border-b dark:border-gray-700">
<tr>
<th class="px-6 py-4 font-bold w-1/3" scope="col">Tiêu chí</th>
<th class="px-6 py-4 text-primary w-1/3" scope="col">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-base">bolt</span>
                                                Livestream 24/7
                                            </div>
</th>
<th class="px-6 py-4 text-gray-500 w-1/3" scope="col">Shopee Ads</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-100 dark:divide-gray-700">
<tr class="bg-white dark:bg-card-dark hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Chi phí</td>
<td class="px-6 py-4 text-green-600 font-bold">Thấp (Cố định)</td>
<td class="px-6 py-4 text-red-500">Cao (Tính theo click)</td>
</tr>
<tr class="bg-white dark:bg-card-dark hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Thời gian hiển thị</td>
<td class="px-6 py-4 text-green-600 font-bold">24/24h liên tục</td>
<td class="px-6 py-4">Phụ thuộc ngân sách</td>
</tr>
<tr class="bg-white dark:bg-card-dark hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Voucher Shopee</td>
<td class="px-6 py-4 text-green-600 font-bold">Được trợ giá Live</td>
<td class="px-6 py-4">Không có</td>
</tr>
<tr class="bg-white dark:bg-card-dark hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Tương tác</td>
<td class="px-6 py-4 text-green-600 font-bold">Trực quan (Video)</td>
<td class="px-6 py-4">Hình ảnh tĩnh</td>
</tr>
<tr class="bg-white dark:bg-card-dark hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Rủi ro click ảo</td>
<td class="px-6 py-4 text-green-600 font-bold">0%</td>
<td class="px-6 py-4 text-orange-500">Có thể gặp phải</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 bg-yellow-50 dark:bg-yellow-900/10 text-yellow-800 dark:text-yellow-200 text-xs italic text-center">
                                * Livestream 24/7 là giải pháp bổ trợ hoàn hảo, giúp tối ưu chi phí marketing dài hạn.
                            </div>
</div>
</div>
</div>
<div class="mb-16">
<h3 class="text-2xl font-bold text-center mb-8 text-text-main dark:text-white">HIỆU QUẢ THỰC TẾ</h3>
<div class="bg-gray-100 dark:bg-gray-800 rounded-2xl p-8 flex flex-col items-center justify-center text-center min-h-[300px] border-2 border-dashed border-gray-300 dark:border-gray-600 group hover:border-primary transition-colors cursor-pointer">
<div class="w-20 h-20 bg-white dark:bg-gray-700 rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl text-gray-400 group-hover:text-primary">image</span>
</div>
<p class="text-lg font-bold text-text-main dark:text-white">Hình ảnh Case Study</p>
<p class="text-text-sub dark:text-gray-400 max-w-md mt-2">
                            Khu vực hiển thị biểu đồ tăng trưởng doanh thu và traffic của Shop sau 1 tháng triển khai Livestream 24/7.
                            (Ví dụ: Traffic tăng 300%, Doanh thu tăng 50tr -&gt; 150tr)
                        </p>
</div>
</div>
<?php echo mexo_render_faq_accordion( 'Câu hỏi thường gặp - Livestream Shopee 24/7', mexo_service_faq_items( 'livestream' ) ); ?>
</div>
</div>
<div class="tab-content" id="tiktok">
<div class="p-8 rounded-2xl bg-card-light dark:bg-card-dark shadow-lg border border-gray-100 dark:border-gray-800">
<div class="grid lg:grid-cols-2 gap-10 items-start">
<div class="space-y-6">
<div class="flex items-center gap-4">
<div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-black text-white">
<span class="material-symbols-outlined text-4xl">music_note</span>
</div>
<div>
<h3 class="text-3xl font-bold text-text-main dark:text-white">Dịch vụ TikTok Shop Toàn Diện</h3>
<p class="text-lg text-text-sub dark:text-gray-400 mt-1">Bứt phá doanh số và xây dựng thương hiệu trên nền tảng Shoppertainment hàng đầu.</p>
</div>
</div>
<h4 class="text-xl font-semibold text-text-main dark:text-white mt-8">Các tính năng nâng cao:</h4>
<ul class="space-y-4 text-text-sub dark:text-gray-400">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Chiến lược nội dung viral cho video ngắn và livestream.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Tuyển chọn và quản lý KOC/KOL độc quyền, tối ưu hóa hiệu quả affiliate.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Setup studio livestream chuyên nghiệp, kịch bản chốt đơn hiệu quả.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Phân tích dữ liệu TikTok Ads chuyên sâu, tối ưu ROI quảng cáo.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Tích hợp công cụ CRM &amp; quản lý đơn hàng cho TikTok Shop.</span>
</li>
</ul>
<div class="mt-8">
<a class="inline-flex items-center rounded-lg bg-primary px-6 py-3 text-base font-bold text-white transition-all hover:bg-primary-dark shadow-md shadow-primary/20" href="#">
                                Yêu cầu tư vấn TikTok Shop chuyên sâu
                                <span class="material-symbols-outlined ml-2 text-lg">arrow_forward</span>
</a>
</div>
</div>
<div class="space-y-6 bg-background-light dark:bg-card-dark/50 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
<h4 class="text-xl font-semibold text-text-main dark:text-white">Các Gói Giải Pháp &amp; Case Study</h4>
<p class="text-text-sub dark:text-gray-400">Chúng tôi cung cấp các gói dịch vụ linh hoạt, phù hợp với mọi quy mô và mục tiêu kinh doanh. Liên hệ để nhận tư vấn gói phù hợp nhất.</p>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">Gói Basic Live</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">Hỗ trợ livestream và quảng bá cơ bản.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Kịch bản cơ bản</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>1 Host/session</span></li>
</ul>
</div>
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">Gói Pro Content</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">Giải pháp toàn diện từ nội dung đến vận hành KOC.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Video viral</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Booking KOC</span></li>
</ul>
</div>
</div>
<div class="relative w-full aspect-video rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<img alt="TikTok Shop live stream setup" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvvwVosTRYaaCtUJDRO_MuSu4OznVpbYvQZIhkga36O9yNTcH6ykYb9fFk5I92QWO0z6wOed8KzIGbqc-Pqpv8SGSytODrWT8cqvkUKZJNDT9W6T4cOEzt_99l9K68SyVvWjpA77qJaEYtwmPlF2DAb54B34auW6Yu6_KO1Jk144t0H34sT0nBsS7UR7Guthf7MotgMbVu-aw_Bk72nNFdgEhE-RZw3FqCEB5Up23T5ALXNA_sOKxr8Cv-RxwCIV_Ql9dQbf6kS_w"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-4">
<p class="text-white text-sm">Case Study: Bùng nổ 300% doanh thu trong 1 tháng livestream cho ngành làm đẹp.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-content" id="education">
<div class="p-8 rounded-2xl bg-card-light dark:bg-card-dark shadow-lg border border-gray-100 dark:border-gray-800">
<div class="grid lg:grid-cols-2 gap-10 items-start">
<div class="space-y-6">
<div class="flex items-center gap-4">
<div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">
<span class="material-symbols-outlined text-4xl">school</span>
</div>
<div>
<h3 class="text-3xl font-bold text-text-main dark:text-white">Học viện E-commerce MEXO</h3>
<p class="text-lg text-text-sub dark:text-gray-400 mt-1">Đào tạo thực chiến, nâng cao năng lực vận hành E-commerce cho chủ doanh nghiệp và đội ngũ.</p>
</div>
</div>
<h4 class="text-xl font-semibold text-text-main dark:text-white mt-8">Các khóa học &amp; phương pháp đào tạo:</h4>
<ul class="space-y-4 text-text-sub dark:text-gray-400">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Chương trình Coaching 1:1 chuyên biệt, thiết kế theo nhu cầu doanh nghiệp.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Đào tạo In-house cho đội ngũ nhân sự, từ cơ bản đến nâng cao vận hành sàn.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Khóa học chuyên sâu về Shopee Ads, TikTok Ads, tối ưu chuyển đổi.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Cập nhật liên tục thuật toán và chính sách mới nhất từ các sàn.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Hỗ trợ trọn đời sau khóa học qua cộng đồng chuyên gia.</span>
</li>
</ul>
<div class="mt-8">
<a class="inline-flex items-center rounded-lg bg-primary px-6 py-3 text-base font-bold text-white transition-all hover:bg-primary-dark shadow-md shadow-primary/20" href="#">
                                Xem chi tiết chương trình đào tạo
                                <span class="material-symbols-outlined ml-2 text-lg">arrow_forward</span>
</a>
</div>
</div>
<div class="space-y-6 bg-background-light dark:bg-card-dark/50 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
<h4 class="text-xl font-semibold text-text-main dark:text-white">Lộ trình học tập &amp; Câu chuyện thành công</h4>
<p class="text-text-sub dark:text-gray-400">Chúng tôi cam kết mang lại kiến thức thực tiễn và kết quả rõ rệt cho học viên.</p>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">Lộ trình cơ bản</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">Xây dựng nền tảng vững chắc về TMĐT.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Khởi tạo gian hàng</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Vận hành cơ bản</span></li>
</ul>
</div>
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">Lộ trình chuyên sâu</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">Nắm vững các chiến lược tăng trưởng đột phá.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Tối ưu quảng cáo</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Chiến lược Flash Sale</span></li>
</ul>
</div>
</div>
<div class="relative w-full aspect-video rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<img alt="E-commerce training session" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxisWzxXRhai1_EpssaDO1D-Oy8CDDxTe50d7WYv8ZS9F8-51PkD2sq9LViMcYM8WQZV2-E1NsEJhvUR6eSzQV77GjcAyO-vKl8Gh7G1pi_vlIe_QZU0O3ejfU2JrK5r-caRR_s-6zvOWC-KuD-0gJzRH5ZdVFACb0xrK4vsAFTT1w_ThmlxGvGBwqvQbaj2NXsFA64gtH4gRAgKOwHV1K3wtPYIyHn2mkdnipMwrtOB9k0MrKoHN03cnrVeyDq29IJYHgCruy-Co"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-4">
<p class="text-white text-sm">Câu chuyện thành công: Doanh nghiệp Y tăng trưởng nhân sự có năng lực E-commerce vượt trội.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-content" id="media">
<div class="p-8 rounded-2xl bg-card-light dark:bg-card-dark shadow-lg border border-gray-100 dark:border-gray-800">
<div class="grid lg:grid-cols-2 gap-10 items-start">
<div class="space-y-6">
<div class="flex items-center gap-4">
<div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-100 text-purple-600">
<span class="material-symbols-outlined text-4xl">movie_filter</span>
</div>
<div>
<h3 class="text-3xl font-bold text-text-main dark:text-white">Dịch vụ Media &amp; Truyền thông</h3>
<p class="text-lg text-text-sub dark:text-gray-400 mt-1">Xây dựng hình ảnh thương hiệu chuyên nghiệp, nội dung sáng tạo và chiến lược truyền thông đa kênh.</p>
</div>
</div>
<h4 class="text-xl font-semibold text-text-main dark:text-white mt-8">Các dịch vụ &amp; công nghệ nổi bật:</h4>
<ul class="space-y-4 text-text-sub dark:text-gray-400">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Chụp ảnh sản phẩm cao cấp (Concept, Lookbook, 360 độ VR).</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Sản xuất TVC, Video giới thiệu doanh nghiệp, animation 2D/3D.</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Xây dựng chiến lược nội dung và quản lý kênh Social Media (Facebook, Instagram, TikTok).</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Thiết kế bộ nhận diện thương hiệu toàn diện (Logo, Brand Guide, UI/UX website).</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined mt-0.5 text-primary icon-filled text-2xl">verified</span>
<span class="text-base font-medium text-text-main dark:text-gray-200 leading-snug">Tư vấn chiến lược truyền thông tích hợp, xây dựng câu chuyện thương hiệu.</span>
</li>
</ul>
<div class="mt-8">
<a class="inline-flex items-center rounded-lg bg-primary px-6 py-3 text-base font-bold text-white transition-all hover:bg-primary-dark shadow-md shadow-primary/20" href="#">
                                Xem Portfolio &amp; Dự án nổi bật
                                <span class="material-symbols-outlined ml-2 text-lg">arrow_forward</span>
</a>
</div>
</div>
<div class="space-y-6 bg-background-light dark:bg-card-dark/50 p-6 rounded-xl border border-gray-100 dark:border-gray-700">
<h4 class="text-xl font-semibold text-text-main dark:text-white">Các Gói &amp; Dự án tiêu biểu</h4>
<p class="text-text-sub dark:text-gray-400">Chúng tôi mang đến các giải pháp truyền thông sáng tạo, thu hút và hiệu quả.</p>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">Gói Brand Start</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">Xây dựng nền tảng hình ảnh thương hiệu.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Thiết kế Logo</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Chụp ảnh cơ bản</span></li>
</ul>
</div>
<div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-card-dark/70">
<p class="text-lg font-bold text-text-main dark:text-white">Gói Full Media</p>
<p class="text-sm text-text-sub dark:text-gray-400 mt-1">Giải pháp truyền thông tích hợp, toàn diện.</p>
<ul class="mt-3 space-y-1 text-sm text-text-main dark:text-gray-200">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Sản xuất TVC</span></li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-base">check</span><span>Quản lý Social</span></li>
</ul>
</div>
</div>
<div class="relative w-full aspect-video rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<img alt="Creative media production studio" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVwFu0AJUjEiaGv58u1OyxYcnLr5snEGVm73csoBrxTll1zhDvT2Rz8ldqjU0B-xTRtJ-9WyXByN_G5qLyj_GkC8gc30XyHLriFOoEGJ6vccgBBZsiRAL48l8ZFo4ZxULOEhdsO0108VvlK5xTOT8zNzO4BD2KHgK8dgs2OVdlTkIHV4BHEx-ms318_vjH1HnbjBvgi0IH_AWYHU0_BKQcmxKZr-UROg6q_mLwBKUnai-Qja1RTuh06VSwXwkOAQ7KniPu6GqVswI"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-4">
<p class="text-white text-sm">Dự án: Xây dựng thương hiệu và chiến dịch ra mắt sản phẩm mới cho nhãn hàng Z.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');
        function activateTab(tabId) {
            tabButtons.forEach(button => {
                if (button.dataset.tab === tabId) {
                    button.classList.add('active');
                    button.style.backgroundColor = 'var(--primary-light)';
                    button.style.borderColor = 'var(--primary)';
                    button.style.color = 'var(--primary)';
                    // Add dark mode active style
                    if (document.documentElement.classList.contains('dark')) {
                        button.style.backgroundColor = '#0d59f21a';
                    }
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
        activateTab('shopee');
        // Handle dark mode toggle for tab colors
        const darkModeObserver = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.attributeName === 'class') {
                    const activeTabButton = document.querySelector('.tab-button.active');
                    if (activeTabButton) {
                        if (document.documentElement.classList.contains('dark')) {
                            activeTabButton.style.backgroundColor = '#0d59f21a';
                        } else {
                            activeTabButton.style.backgroundColor = 'var(--primary-light)';
                        }
                    }
                }
            });
        });
        darkModeObserver.observe(document.documentElement, { attributes: true });
    });
</script>
<?php get_footer(); ?>

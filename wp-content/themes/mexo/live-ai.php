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
<span class="material-symbols-outlined">schedule</span>
</div>
<span class="text-2xl font-black text-text-main dark:text-white">24/7</span>
</div>
<p class="text-sm text-text-sub dark:text-gray-400 font-medium">Live không mệt mỏi</p>
</div>
<div class="group flex flex-col gap-3">
<div class="flex items-center gap-3">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-green-50 text-green-600 group-hover:bg-green-100 transition-colors dark:bg-green-900/20 dark:text-green-400">
<span class="material-symbols-outlined">savings</span>
</div>
<span class="text-2xl font-black text-text-main dark:text-white">95%</span>
</div>
<p class="text-sm text-text-sub dark:text-gray-400 font-medium">Tiết kiệm chi phí</p>
</div>
<div class="group flex flex-col gap-3">
<div class="flex items-center gap-3">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-purple-50 text-purple-600 group-hover:bg-purple-100 transition-colors dark:bg-purple-900/20 dark:text-purple-400">
<span class="material-symbols-outlined">forum</span>
</div>
<span class="text-2xl font-black text-text-main dark:text-white">Real</span>
</div>
<p class="text-sm text-text-sub dark:text-gray-400 font-medium">Tương tác tự động</p>
</div>
</div>
<div class="flex flex-col sm:flex-row gap-4 pt-2">
<a class="flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-orange-500 to-red-600 px-8 py-4 text-base font-bold text-white shadow-lg shadow-orange-500/25 hover:shadow-orange-500/40 hover:-translate-y-0.5 transition-all" href="#register-section">
                        Đăng ký tư vấn ngay
                        <span class="material-symbols-outlined text-xl">arrow_forward</span>
</a>
<a class="flex items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white px-8 py-4 text-base font-bold text-text-main shadow-sm hover:bg-gray-50 hover:border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 transition-all" href="#demo">
                        Trải nghiệm demo AI
                    </a>
</div>
</div>
<div class="relative lg:h-[600px] flex items-center justify-center">
<div class="absolute inset-0 bg-gradient-to-tr from-orange-500/10 to-red-500/10 rounded-3xl filter blur-3xl transform rotate-6 scale-95"></div>
<div class="relative w-full max-w-[340px] aspect-[9/19] bg-slate-900 rounded-[50px] p-3 shadow-2xl ring-1 ring-slate-900/10 border-4 border-slate-800 flex flex-col justify-center overflow-hidden">
<div class="absolute top-0 left-1/2 -translate-x-1/2 w-36 h-6 bg-slate-800 rounded-b-2xl z-40 flex items-center justify-center">
<div class="w-12 h-1 bg-slate-700 rounded-full"></div>
<div class="w-3 h-3 bg-slate-900 rounded-full ml-3 border border-slate-700"></div>
</div>
<!-- Dynamic 7-Video Player Mobile Interface -->
<div class="relative w-full h-full bg-slate-950 rounded-[38px] overflow-hidden flex flex-col justify-between select-none">
    
    <!-- Videos Container -->
    <div class="absolute inset-0 w-full h-full overflow-hidden bg-black flex items-center justify-center cursor-pointer" id="phoneScreenContainer">
        <?php 
        $video_base = get_template_directory_uri() . '/assets/videos/livestream-ai/';
        for ($i = 1; $i <= 7; $i++): 
        ?>
            <div class="live-video-item absolute inset-0 w-full h-full transition-opacity duration-500 ease-in-out opacity-0 pointer-events-none <?php echo $i === 1 ? 'active opacity-100 pointer-events-auto' : ''; ?>" data-video-index="<?php echo $i; ?>">
                <video 
                    id="heroVideo_<?php echo $i; ?>" 
                    class="w-full h-full object-cover rounded-[38px]" 
                    playsinline 
                    muted 
                    loop 
                    preload="metadata" 
                    src="<?php echo esc_url($video_base . $i . '.mp4'); ?>">
                </video>
            </div>
        <?php endfor; ?>

        <!-- Central Play / Pause Button Overlay -->
        <div id="videoControlBtn" class="absolute z-30 flex items-center justify-center w-14 h-14 rounded-full bg-black/40 backdrop-blur-md text-white border border-white/20 transition-all duration-300 hover:scale-110 shadow-lg pointer-events-none">
            <span id="playIcon" class="material-symbols-outlined text-3xl">play_arrow</span>
        </div>
    </div>

    <!-- Top Controls: Navigation Prev / Next & Video Index Counter -->
    <div class="relative z-20 flex items-center justify-between p-4 pt-8 bg-gradient-to-b from-black/80 via-black/40 to-transparent">
        <button id="prevVideoBtn" class="flex items-center justify-center w-8 h-8 rounded-full bg-black/40 text-white backdrop-blur-md hover:bg-black/60 border border-white/10 transition-all active:scale-95">
            <span class="material-symbols-outlined text-sm">chevron_left</span>
        </button>
        
        <!-- Index Indicator Dots (1 to 7) -->
        <div class="flex items-center gap-1.5 bg-black/40 backdrop-blur-md px-3 py-1 rounded-full border border-white/10">
            <?php for ($i = 1; $i <= 7; $i++): ?>
                <button data-dot-index="<?php echo $i; ?>" class="video-dot w-2 h-2 rounded-full transition-all duration-300 <?php echo $i === 1 ? 'bg-orange-500 w-4' : 'bg-white/40 hover:bg-white/70'; ?>"></button>
            <?php endfor; ?>
        </div>

        <button id="nextVideoBtn" class="flex items-center justify-center w-8 h-8 rounded-full bg-black/40 text-white backdrop-blur-md hover:bg-black/60 border border-white/10 transition-all active:scale-95">
            <span class="material-symbols-outlined text-sm">chevron_right</span>
        </button>
    </div>

    <!-- Bottom Status Text -->
    <div class="relative z-20 p-4 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-center">
        <span id="videoStatusLabel" class="text-xs font-semibold text-white/90 bg-black/50 backdrop-blur-sm px-3 py-1.5 rounded-full border border-white/10 inline-block shadow-sm">
            Video 1 / 7 (Tự động chuyển sau 3s)
        </span>
    </div>

</div>

<!-- 7-Video Player Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentVideoIndex = 1;
    const totalVideos = 7;
    let autoNextTimer = null;
    let isPlayingWithSound = false;

    const container = document.getElementById('phoneScreenContainer');
    const controlBtn = document.getElementById('videoControlBtn');
    const playIcon = document.getElementById('playIcon');
    const statusLabel = document.getElementById('videoStatusLabel');
    const prevBtn = document.getElementById('prevVideoBtn');
    const nextBtn = document.getElementById('nextVideoBtn');
    const dots = document.querySelectorAll('.video-dot');
    const videoItems = document.querySelectorAll('.live-video-item');

    function getCurrentVideoElement() {
        return document.getElementById('heroVideo_' + currentVideoIndex);
    }

    function playPreviewCurrent() {
        videoItems.forEach((item, idx) => {
            const vidNum = idx + 1;
            const vidEl = document.getElementById('heroVideo_' + vidNum);
            if (vidNum === currentVideoIndex) {
                item.classList.add('active', 'opacity-100', 'pointer-events-auto');
                item.classList.remove('opacity-0', 'pointer-events-none');
                if (vidEl) {
                    vidEl.currentTime = 0;
                    vidEl.muted = !isPlayingWithSound;
                    vidEl.play().catch(() => {});
                }
            } else {
                item.classList.remove('active', 'opacity-100', 'pointer-events-auto');
                item.classList.add('opacity-0', 'pointer-events-none');
                if (vidEl) {
                    vidEl.pause();
                }
            }
        });

        // Update Dots
        dots.forEach((dot, idx) => {
            if (idx + 1 === currentVideoIndex) {
                dot.className = "video-dot w-4 h-2 rounded-full bg-orange-500 transition-all duration-300";
            } else {
                dot.className = "video-dot w-2 h-2 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300";
            }
        });

        if (statusLabel) {
            statusLabel.textContent = isPlayingWithSound 
                ? `Đang phát Video ${currentVideoIndex} / ${totalVideos}`
                : `Video ${currentVideoIndex} / ${totalVideos} (Tự động chuyển sau 3s)`;
        }

        if (playIcon) {
            playIcon.textContent = isPlayingWithSound ? 'pause' : 'play_arrow';
        }
    }

    function resetAutoNextTimer() {
        if (autoNextTimer) clearInterval(autoNextTimer);
        if (!isPlayingWithSound) {
            autoNextTimer = setInterval(() => {
                currentVideoIndex = (currentVideoIndex % totalVideos) + 1;
                playPreviewCurrent();
            }, 3000);
        }
    }

    // Initialize Auto Next
    playPreviewCurrent();
    resetAutoNextTimer();

    // Click container to toggle play sound vs pause
    if (container) {
        container.addEventListener('click', function(e) {
            if (e.target.closest('#prevVideoBtn') || e.target.closest('#nextVideoBtn') || e.target.closest('.video-dot')) {
                return;
            }
            const currentVid = getCurrentVideoElement();
            if (!currentVid) return;

            if (!isPlayingWithSound) {
                isPlayingWithSound = true;
                currentVid.muted = false;
                currentVid.play().catch(() => {});
                if (autoNextTimer) clearInterval(autoNextTimer);
            } else {
                if (currentVid.paused) {
                    currentVid.play().catch(() => {});
                } else {
                    currentVid.pause();
                }
            }
            if (playIcon) playIcon.textContent = currentVid.paused ? 'play_arrow' : 'pause';
            if (statusLabel) statusLabel.textContent = `Đang phát Video ${currentVideoIndex} / ${totalVideos}`;
        });
    }

    // Prev Button Click
    if (prevBtn) {
        prevBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            currentVideoIndex = currentVideoIndex === 1 ? totalVideos : currentVideoIndex - 1;
            playPreviewCurrent();
            resetAutoNextTimer();
        });
    }

    // Next Button Click
    if (nextBtn) {
        nextBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            currentVideoIndex = (currentVideoIndex % totalVideos) + 1;
            playPreviewCurrent();
            resetAutoNextTimer();
        });
    }

    // Dot Click
    dots.forEach(dot => {
        dot.addEventListener('click', function(e) {
            e.stopPropagation();
            const index = parseInt(this.getAttribute('data-dot-index'));
            if (index) {
                currentVideoIndex = index;
                playPreviewCurrent();
                resetAutoNextTimer();
            }
        });
    });
});
</script>
</div>
</div>
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
<div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-100 transition-colors dark:bg-blue-900/20 dark:text-blue-400">
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

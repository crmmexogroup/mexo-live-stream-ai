<?php
/*
Template Name: Khóa Học
*/
get_header();

$benefits = array(
    array(
        'title' => 'Tiết kiệm chi phí',
        'desc'  => 'Giảm mạnh chi phí thuê mẫu, quay chụp và đội ngũ content.',
        'icon'  => 'savings',
    ),
    array(
        'title' => 'Làm content nhanh',
        'desc'  => 'Tạo ảnh và video AI hàng loạt trong thời gian ngắn.',
        'icon'  => 'auto_awesome',
    ),
    array(
        'title' => 'Tăng độ chuyên nghiệp',
        'desc'  => 'Xây dựng hình ảnh thương hiệu đồng bộ và chuyên nghiệp hơn.',
        'icon'  => 'verified',
    ),
    array(
        'title' => 'Update liên tục',
        'desc'  => 'Được cập nhật workflow và công cụ AI mới thường xuyên.',
        'icon'  => 'sync',
    ),
);

$showcase_items = array(
    array(
        'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=900&auto=format&fit=crop',
        'tag'   => 'ẢNH BÌA - BANNER - POSTER',
        'title' => 'Tạo banner & poster bán hàng siêu nhanh bằng AI',
        'items' => array(
            'Tự làm ảnh bìa Shopee, TikTok chuyên nghiệp',
            'Tạo banner sale nhanh mà vẫn đẹp & đồng bộ',
            'Không cần biết thiết kế vẫn làm được',
        ),
    ),
    array(
        'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=900&auto=format&fit=crop',
        'tag'   => 'ẢNH PHỤ - ĐỒNG BỘ NHÂN VẬT',
        'title' => 'Tạo ảnh sản phẩm giống thật đồng bộ đến từng chi tiết',
        'items' => array(
            'Giữ nhân vật và sản phẩm đồng nhất',
            'Tạo hàng loạt ảnh phụ chuẩn TMĐT',
            'Không cần setup studio đắt đỏ',
        ),
    ),
);

$course_sections = array(
    array(
        'title' => 'Phần 1: Tư duy & viết prompt đúng cách',
        'items' => array(
            'Cách sử dụng AI để viết prompt hiệu quả',
            'Tư duy xây dựng concept và nhân vật đồng bộ',
            'Cách giữ sự nhất quán khi làm nhiều ảnh',
            'Dùng AI nào cụ thể để không bị rối',
        ),
    ),
    array(
        'title' => 'Phần 2: Tạo ảnh sản phẩm chuẩn TMĐT',
        'items' => array(
            'Workflow làm ảnh chuẩn Shopee và TikTok',
            'Công cụ AI tạo ảnh chi tiết',
            'Xử lý ảnh đúng tỷ lệ và format sàn',
        ),
    ),
    array(
        'title' => 'Phần 3: Tạo video từ AI & dựng UGC',
        'items' => array(
            'Tạo video từ ảnh AI',
            'Cách cắt ghép đơn giản',
            'Tư duy video UGC tăng chuyển đổi',
            'Xây dựng video có cảm xúc và kịch bản bán hàng',
        ),
    ),
    array(
        'title' => 'Phần 4: Ứng dụng AI vào bán hàng',
        'items' => array(
            'Làm AI đúng để tiết kiệm chi phí',
            'Ứng dụng AI vào marketing và vận hành đa sàn',
            'Tránh các lỗi phổ biến khi dùng AI',
        ),
    ),
);
?>

<main class="mexo-ai-course bg-slate-50 text-slate-900 dark:bg-[#071225] dark:text-white overflow-hidden">
    <section class="relative px-5 sm:px-8 lg:px-20 py-14 md:py-20 border-b border-slate-200/70 dark:border-blue-400/15">
        <div class="mexo-ai-grid-bg absolute inset-0"></div>
        <div class="relative max-w-7xl mx-auto grid lg:grid-cols-[1.02fr_0.98fr] gap-12 items-center">
            <div class="text-center lg:text-left">
                <div class="mexo-hero-badge mb-6">
                    <span class="inline-flex size-2.5 rounded-full bg-sky-400"></span>
                    <span>MEXO GROUP - Đào tạo AI TMĐT 2026</span>
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black leading-[1.02] tracking-tight mb-6">
                    Khóa học AI ứng dụng
                    <span class="block text-gradient">làm ảnh & video TMĐT</span>
                </h1>
                <p class="max-w-2xl mx-auto lg:mx-0 text-base sm:text-lg lg:text-xl leading-relaxed text-slate-600 dark:text-blue-100/90 mb-8">
                    Khóa học AI thực chiến dành cho chủ shop, chủ xưởng và doanh nghiệp muốn tự tạo ảnh, video bán hàng chuyên nghiệp mà không phải phụ thuộc quá nhiều vào thuê mẫu, thuê ekip hay tự mày mò mất thời gian.
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 mb-9">
                    <a href="#mexo-ai-register" class="mexo-cta-primary mexo-ai-cta-glow inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full text-white font-bold bg-gradient-to-r from-[#ff5a32] to-[#ef4444] border border-white/70 hover:-translate-y-0.5 transition-all">
                        <span class="material-symbols-outlined">rocket_launch</span>
                        Đăng ký khóa học
                    </a>
                    <a href="#mexo-ai-content" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full font-bold border border-slate-300 bg-white text-slate-900 dark:bg-transparent dark:text-white dark:border-blue-300/45 hover:border-blue-400 hover:text-blue-500 transition-colors">
                        Xem nội dung học
                        <span class="material-symbols-outlined">arrow_downward</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                    <?php foreach ( array( 'Tiết kiệm chi phí thuê mẫu', 'Ảnh AI chuẩn TMĐT', 'Video UGC chuyển đổi', 'Workflow AI thực chiến' ) as $item ) : ?>
                        <div class="rounded-2xl border border-slate-200 bg-white/85 p-4 text-center shadow-sm dark:bg-[#0f1b33]/86 dark:border-blue-300/18">
                            <p class="text-sm font-bold text-slate-700 dark:text-blue-100"><?php echo esc_html( $item ); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="relative mx-auto w-full max-w-[520px]">
                <div class="grid grid-cols-2 gap-5 items-end">
                    <div class="mexo-ai-portrait rounded-[2rem] overflow-hidden border border-white/80 shadow-2xl bg-white p-2 dark:bg-[#0f1b33] dark:border-blue-300/18">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=720&auto=format&fit=crop" alt="Minh họa tạo ảnh AI cho thương mại điện tử" class="w-full h-full object-cover rounded-[1.5rem]" fetchpriority="high" decoding="async">
                    </div>
                    <div class="mexo-ai-portrait rounded-[2rem] overflow-hidden border border-white/80 shadow-2xl bg-white p-2 dark:bg-[#0f1b33] dark:border-blue-300/18 translate-y-8">
                        <div class="mexo-ai-video-frame relative rounded-[1.5rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=720&auto=format&fit=crop" alt="Minh họa video AI tỷ lệ 9:16" class="w-full h-full object-cover" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="material-symbols-outlined inline-flex size-16 items-center justify-center rounded-full bg-white/92 text-blue-600 shadow-xl">play_arrow</span>
                            </div>
                            <div class="absolute left-4 right-4 bottom-4 rounded-2xl bg-white/90 p-3 text-center dark:bg-slate-950/80">
                                <p class="text-xs font-black uppercase tracking-wide text-slate-900 dark:text-white">Video UGC AI 9:16</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 w-[82%] rounded-3xl border border-blue-200 bg-white p-5 text-center shadow-xl dark:bg-[#0b162b] dark:border-blue-300/22">
                    <div class="text-4xl font-black text-blue-600 dark:text-sky-300">99%</div>
                    <p class="text-sm text-slate-600 dark:text-blue-100/86">Thực hành thực tế, không dạy lý thuyết lan man.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="px-5 sm:px-8 lg:px-20 py-20 md:py-24">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <span class="inline-flex px-5 py-2 rounded-full bg-blue-100 text-blue-700 font-black dark:bg-blue-500/15 dark:text-sky-200">LỢI ÍCH THỰC TẾ</span>
                <h2 class="mt-5 text-3xl md:text-5xl font-black leading-tight">Học để ứng dụng thật <span class="block text-gradient">vào bán hàng và vận hành.</span></h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 mb-16">
                <?php foreach ( $benefits as $benefit ) : ?>
                    <article class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm dark:bg-[#0f1b33] dark:border-blue-300/18">
                        <span class="material-symbols-outlined mb-5 inline-flex size-14 items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/25"><?php echo esc_html( $benefit['icon'] ); ?></span>
                        <h3 class="text-xl font-black mb-3 text-slate-950 dark:text-white"><?php echo esc_html( $benefit['title'] ); ?></h3>
                        <p class="text-slate-600 dark:text-blue-100/86 leading-relaxed"><?php echo esc_html( $benefit['desc'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="grid lg:grid-cols-2 gap-7 mb-16">
                <?php foreach ( $showcase_items as $item ) : ?>
                    <article class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-sm dark:bg-[#0f1b33] dark:border-blue-300/18">
                        <div class="mexo-ai-split-card gap-0">
                            <div class="mexo-ai-portrait min-h-[360px]">
                                <img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="w-full h-full object-cover" loading="lazy" decoding="async">
                            </div>
                            <div class="p-7 flex flex-col justify-center">
                                <span class="mb-4 inline-flex w-fit px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-xs font-black dark:bg-blue-500/15 dark:text-sky-200"><?php echo esc_html( $item['tag'] ); ?></span>
                                <h3 class="text-2xl md:text-3xl font-black leading-tight mb-5 text-slate-950 dark:text-white"><?php echo esc_html( $item['title'] ); ?></h3>
                                <div class="space-y-3">
                                    <?php foreach ( $item['items'] as $text ) : ?>
                                        <p class="flex gap-3 text-slate-600 dark:text-blue-100/88"><span class="text-emerald-500 font-black">✓</span><span><?php echo esc_html( $text ); ?></span></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="rounded-[2rem] bg-gradient-to-r from-blue-700 to-cyan-500 p-8 md:p-12 text-white shadow-2xl shadow-blue-600/20">
                <div class="grid lg:grid-cols-[1fr_0.55fr] gap-9 items-center">
                    <div>
                        <span class="inline-flex px-4 py-2 rounded-full bg-white/16 font-black text-sm mb-5">WORKFLOW AI THỰC CHIẾN</span>
                        <h2 class="text-3xl md:text-5xl font-black leading-tight mb-5">Không cần tự mò AI thêm nhiều tháng.</h2>
                        <p class="text-white/90 text-lg leading-relaxed max-w-3xl">Khóa học giúp bạn đi đúng workflow tạo content bằng AI để tiết kiệm thời gian, giảm chi phí vận hành và tăng tốc triển khai hình ảnh, video bán hàng.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <?php foreach ( array( 'Tự tạo ảnh quảng cáo', 'Tự dựng video UGC', 'Tạo banner sale hàng loạt', 'Update AI thường xuyên' ) as $item ) : ?>
                            <div class="rounded-2xl bg-white/12 border border-white/16 p-4 font-bold"><?php echo esc_html( $item ); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mexo-ai-content" class="px-5 sm:px-8 lg:px-20 py-20 bg-white dark:bg-[#071225] border-y border-slate-200/70 dark:border-blue-400/15">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <span class="inline-flex px-6 py-3 rounded-full bg-blue-600 text-white font-black shadow-lg shadow-blue-600/20">Nội dung khóa học</span>
                <h2 class="mt-5 text-3xl md:text-5xl font-black text-slate-950 dark:text-white">Từ prompt đến ảnh, video và ứng dụng bán hàng</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <?php foreach ( $course_sections as $index => $section ) : ?>
                    <article class="rounded-3xl border border-slate-200 bg-slate-50 p-7 dark:bg-[#0f1b33] dark:border-blue-300/18">
                        <div class="mb-5 flex items-center gap-4">
                            <span class="inline-flex size-11 items-center justify-center rounded-full bg-blue-600 text-white font-black"><?php echo esc_html( $index + 1 ); ?></span>
                            <h3 class="text-xl md:text-2xl font-black text-slate-950 dark:text-white"><?php echo esc_html( $section['title'] ); ?></h3>
                        </div>
                        <ul class="space-y-3">
                            <?php foreach ( $section['items'] as $item ) : ?>
                                <li class="flex gap-3 text-slate-600 dark:text-blue-100/88"><span class="text-sky-500 font-black">•</span><span><?php echo esc_html( $item ); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="px-5 sm:px-8 lg:px-20 py-20">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-7">
            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm dark:bg-[#0f1b33] dark:border-blue-300/18">
                <h2 class="text-3xl font-black mb-7 text-slate-950 dark:text-white">Khóa học dành cho ai?</h2>
                <ul class="space-y-4 text-slate-700 dark:text-blue-100/90">
                    <?php foreach ( array( 'Shop bán Shopee và TikTok muốn tự làm content', 'Chủ shop muốn giảm mạnh chi phí thuê mẫu', 'Doanh nghiệp muốn ứng dụng AI bài bản', 'Người mới kinh doanh online muốn hình ảnh chuyên nghiệp', 'Người muốn tăng tốc bán hàng bằng AI' ) as $item ) : ?>
                        <li class="flex gap-3"><span class="text-emerald-500 font-black">✓</span><span><?php echo esc_html( $item ); ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm dark:bg-[#0f1b33] dark:border-blue-300/18">
                <h2 class="text-3xl font-black mb-7 text-slate-950 dark:text-white">Bạn sẽ học được gì?</h2>
                <ul class="space-y-4 text-slate-700 dark:text-blue-100/90">
                    <?php foreach ( array( 'Viết prompt chuẩn để tạo ảnh đồng bộ', 'Tạo ảnh sản phẩm TMĐT giữ đúng chi tiết', 'Biến ảnh AI thành video bán hàng', 'Hiểu tư duy video UGC tăng chuyển đổi', 'Xây workflow làm content nhanh và tiết kiệm', 'Hiểu đúng bản chất AI để ứng dụng lâu dài' ) as $item ) : ?>
                        <li class="flex gap-3"><span class="text-sky-400 font-black">✓</span><span><?php echo esc_html( $item ); ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section id="mexo-ai-register" class="px-5 sm:px-8 lg:px-20 pb-20">
        <div class="max-w-7xl mx-auto rounded-[2rem] bg-gradient-to-r from-blue-700 to-cyan-500 px-6 py-14 md:p-16 text-center text-white shadow-2xl shadow-blue-600/20">
            <h2 class="text-3xl md:text-5xl font-black mb-5">Sẵn sàng ứng dụng AI vào bán hàng?</h2>
            <p class="max-w-3xl mx-auto text-lg text-white/90 leading-relaxed mb-9">Được update các buổi Zoom miễn phí trong vòng 1 năm. Đồng hành thực chiến để giúp bạn ứng dụng AI hiệu quả vào TMĐT.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/lien-he/" class="inline-flex items-center justify-center rounded-full bg-white px-9 py-4 font-black text-blue-700 border border-white shadow-xl hover:-translate-y-0.5 transition-transform">Đăng ký ngay</a>
                <a href="tel:0855761555" class="inline-flex items-center justify-center rounded-full border border-white/45 px-9 py-4 font-black text-white hover:bg-white/12 transition-colors">Liên hệ tư vấn</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

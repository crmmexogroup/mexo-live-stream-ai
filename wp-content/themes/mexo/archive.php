<?php get_header(); ?>
<style>
.mexo-blog-category-badge {
    border-radius: 999px !important;
    border: 1px solid #bfdbfe !important;
    background: #eff6ff !important;
    color: #0d59f2 !important;
    font-size: 0.75rem !important;
    font-weight: 800 !important;
    letter-spacing: 0 !important;
}
html.dark .mexo-blog-category-badge {
    background: rgba(255, 255, 255, 0.94) !important;
    border-color: rgba(255, 255, 255, 0.72) !important;
    color: #0d59f2 !important;
    box-shadow: 0 12px 30px rgba(2, 6, 23, 0.32) !important;
    text-shadow: none !important;
}
html.dark .mexo-blog-page .mexo-blog-cta button:first-of-type,
html.dark .mexo-blog-page .mexo-blog-cta button.bg-white:first-of-type {
    background: #ffffff !important;
    color: #0b2a5f !important;
    border: 1px solid rgba(255, 255, 255, 0.8) !important;
    box-shadow: 0 14px 36px rgba(147, 197, 253, 0.22) !important;
}
html.dark .mexo-blog-page .mexo-blog-cta button:last-of-type {
    background: rgba(255, 255, 255, 0.16) !important;
    border-color: rgba(255, 255, 255, 0.58) !important;
    color: #ffffff !important;
    box-shadow: 0 12px 30px rgba(2, 6, 23, 0.28) !important;
}
html.dark .mexo-blog-cta button,
html.dark .mexo-blog-cta button * {
    opacity: 1 !important;
    -webkit-text-fill-color: currentColor !important;
}
</style>
<main class="mexo-blog-page min-h-screen pb-20">
<section class="relative bg-white dark:bg-slate-950 pt-[100px] pb-16 lg:pt-[100px] lg:pb-24 overflow-hidden">
<div class="absolute inset-0 bg-pattern opacity-30"></div>
<div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-primary/5 blur-3xl"></div>
<div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-cta-orange/5 blur-3xl"></div>
<div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="flex flex-col gap-6">
    <div class="flex items-center gap-2 text-sm">
        <a class="font-medium text-text-sub hover:text-primary transition-colors" href="<?php echo home_url(); ?>">Trang chủ</a>
        <span class="material-symbols-outlined text-[12px] text-text-sub/50">chevron_right</span>
        <span class="font-bold text-primary px-2 py-0.5 rounded-md bg-primary/5"><?php the_archive_title(); ?></span>
    </div>
    <div class="flex max-w-5xl flex-col gap-6">
        <h1 class="font-display text-3xl font-extrabold leading-[1.16] tracking-tight text-text-main dark:text-white sm:text-4xl lg:text-5xl">
            <?php the_archive_title(); ?>
        </h1>
        <p class="max-w-3xl text-lg font-medium text-text-sub dark:text-slate-300 leading-relaxed border-l-4 border-primary/20 pl-6">
            <?php the_archive_description(); ?>
        </p>
    </div>
</div>
</div>
</section>
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-10">
<div class="grid grid-cols-1 gap-12 lg:grid-cols-12">
<div class="flex flex-col gap-10 lg:col-span-8">
<div class="sticky top-20 z-30 rounded-2xl bg-background-light/95 dark:bg-slate-900/95 backdrop-blur-sm p-4 border border-black/5 dark:border-white/10">
    <div class="flex gap-2 overflow-x-auto pb-1 hide-scrollbar">
        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="whitespace-nowrap rounded-full bg-white dark:bg-slate-800 px-6 py-2.5 text-sm font-medium text-text-sub dark:text-slate-200 shadow-card hover:bg-primary hover:text-white transition-all ring-1 ring-black/5 dark:ring-white/10">
            Tất cả bài viết
        </a>
        <?php
        $categories = get_categories(array('hide_empty' => true));
        foreach ($categories as $category) {
            $is_current = is_category($category->term_id);
            $class = $is_current ? 'bg-primary text-white shadow-lg shadow-primary/25 hover:scale-105' : 'bg-white dark:bg-slate-800 text-text-sub dark:text-slate-200 shadow-card hover:bg-primary/10 dark:hover:bg-slate-700 hover:text-primary hover:border-primary/20 transition-all';
            echo '<a href="' . get_category_link($category->term_id) . '" class="whitespace-nowrap rounded-full px-6 py-2.5 text-sm font-medium transition-all ' . $class . '">' . $category->name . '</a>';
        }
        ?>
    </div>
</div>
<div class="flex flex-col gap-8">
<h2 class="text-2xl font-bold text-text-main dark:text-white flex items-center gap-3">
<span class="flex items-center justify-center size-10 rounded-xl bg-primary/10 text-primary">
<span class="material-symbols-outlined">feed</span>
</span>
                            Bài viết mới nhất
                        </h2>
<div class="grid gap-10">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="group relative flex flex-col md:flex-row gap-6 bg-white p-5 rounded-2xl shadow-card hover:shadow-hover transition-all duration-300 ring-1 ring-black/5">
        <div class="relative w-full md:w-72 lg:w-80 shrink-0 overflow-hidden rounded-xl aspect-[4/3] md:aspect-[16/10]">
            <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
            <?php if (has_post_thumbnail()) : ?>
                <img alt="<?php the_title(); ?>" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:grayscale-0 grayscale-[20%]" src="<?php the_post_thumbnail_url('large'); ?>"/>
            <?php else : ?>
                 <img alt="<?php the_title(); ?>" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:grayscale-0 grayscale-[20%]" src="https://via.placeholder.com/400x300"/>
            <?php endif; ?>
            <?php 
            $categories = get_the_category();
            if (!empty($categories)) : ?>
            <div class="mexo-blog-category-badge absolute left-4 top-4 z-20 px-3 py-1.5 backdrop-blur shadow-sm">
                <?php echo esc_html($categories[0]->name); ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="flex flex-1 flex-col justify-between py-1">
            <div class="flex flex-col gap-3">
                <h3 class="font-display text-xl md:text-2xl font-bold leading-[1.32] text-text-main dark:text-white group-hover:text-primary transition-colors py-1">
                    <a class="focus:outline-none" href="<?php the_permalink(); ?>">
                        <span class="absolute inset-0"></span>
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p class="line-clamp-3 text-base text-text-sub leading-relaxed">
                    <?php echo wp_trim_words(get_the_excerpt(), 40); ?>
                </p>
            </div>
            <div class="mt-6 flex items-center justify-between border-t border-dashed border-gray-200 pt-4 text-xs font-medium text-text-sub">
                <div class="flex items-center gap-4">
                    <span class="flex items-center gap-1.5 bg-gray-50 px-2 py-1 rounded-md">
                        <span class="material-symbols-outlined text-[18px] text-primary/70">calendar_month</span>
                        <?php echo get_the_date('d M, Y'); ?>
                    </span>
                    <span class="flex items-center gap-1.5 bg-gray-50 px-2 py-1 rounded-md">
                        <span class="material-symbols-outlined text-[18px] text-primary/70">person</span>
                        <?php the_author(); ?>
                    </span>
                </div>
                <a href="<?php the_permalink(); ?>" class="flex items-center gap-1 text-primary font-bold group-hover:translate-x-2 transition-transform duration-300 bg-primary/5 px-3 py-1.5 rounded-full">
                    Xem chi tiết 
                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>
        </div>
    </article>
    <?php endwhile; endif; ?>
</div>
<div class="mt-12 flex justify-center">
    <div class="flex items-center gap-3">
        <?php
        $pagination = paginate_links(array(
            'prev_text' => '<button class="flex size-12 items-center justify-center rounded-full bg-white border border-gray-200 text-text-sub hover:border-primary hover:text-primary hover:bg-primary/5 transition-all"><span class="material-symbols-outlined text-base">arrow_back_ios_new</span></button>',
            'next_text' => '<button class="flex size-12 items-center justify-center rounded-full bg-white border border-gray-200 text-text-sub hover:border-primary hover:text-primary hover:bg-primary/5 transition-all"><span class="material-symbols-outlined text-base">arrow_forward_ios</span></button>',
            'type'      => 'array',
        ));

        if ($pagination) {
            foreach ($pagination as $page_link) {
                // Style the active page class
                $page_link = str_replace('current', 'flex size-12 items-center justify-center rounded-full bg-primary text-base font-bold text-white shadow-lg shadow-primary/30 transform scale-105', $page_link);
                $page_link = str_replace('page-numbers', 'flex size-12 items-center justify-center rounded-full bg-white border border-gray-200 text-base font-medium text-text-main hover:border-primary hover:text-primary hover:bg-primary/5 transition-all', $page_link);
                echo $page_link;
            }
        }
        ?>
    </div>
</div>
</div>
</div>
<aside class="flex flex-col gap-8 lg:col-span-4 pl-0 lg:pl-6">
<div class="rounded-2xl bg-white p-6 shadow-soft ring-1 ring-black/[0.05]">
<h3 class="mb-6 flex items-center gap-2 text-lg font-bold text-text-main">
<span class="flex items-center justify-center size-8 rounded-lg bg-yellow-100 text-yellow-600">
<span class="material-symbols-outlined text-[20px]">star</span>
</span>
                            Bài viết nổi bật
                        </h3>
<div class="flex flex-col gap-6">
    <?php
    $featured_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'ignore_sticky_posts' => 1));
    if ($featured_posts->have_posts()) : $count = 0; while ($featured_posts->have_posts()) : $featured_posts->the_post(); $count++; ?>
    <a class="group flex gap-4" href="<?php the_permalink(); ?>">
        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary/5 text-lg font-black text-primary group-hover:bg-primary group-hover:text-white transition-all ring-1 ring-primary/20"><?php echo $count; ?></span>
        <div>
            <h4 class="line-clamp-2 text-sm font-bold text-text-main group-hover:text-primary transition-colors leading-relaxed">
                <?php the_title(); ?>
            </h4>
            <span class="mt-1.5 block text-xs font-medium text-text-sub"><?php echo get_the_date('d M, Y'); ?></span>
        </div>
    </a>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>
</div>
<div class="mexo-blog-cta relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-primary via-[#0047cc] to-[#002a80] p-8 text-center text-white shadow-xl group">
<div class="absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/10 blur-3xl group-hover:bg-white/15 transition-all duration-700"></div>
<div class="absolute -left-16 -bottom-16 h-56 w-56 rounded-full bg-cta-orange/20 blur-3xl group-hover:bg-cta-orange/30 transition-all duration-700"></div>
<div class="relative z-10 flex flex-col items-center gap-5">
<div class="flex size-16 items-center justify-center rounded-2xl bg-white/10 backdrop-blur-md shadow-inner border border-white/20">
<span class="material-symbols-outlined text-4xl animate-bounce">rocket_launch</span>
</div>
<h3 class="text-xl font-bold leading-snug">
                                Bạn đang bán Shopee và gặp khó khăn?
                            </h3>
<p class="text-sm font-medium text-white/80 leading-relaxed">
                                Đăng ký tư vấn miễn phí cùng chuyên gia Mexo Group để tìm ra giải pháp tăng trưởng bền vững.
                            </p>
<div class="mt-4 flex w-full flex-col gap-3">
<button class="w-full rounded-full bg-white py-3.5 text-sm font-bold text-primary transition-transform hover:scale-[1.02] hover:shadow-lg shadow-md">
                                    Nhận tư vấn Shopee
                                </button>
<button class="w-full rounded-full border border-white/30 bg-white/10 py-3.5 text-sm font-bold text-white hover:bg-white/20 transition-all backdrop-blur-sm">
                                    Xem dịch vụ vận hành
                                </button>
</div>
</div>
</div>
<div class="rounded-2xl bg-white p-6 shadow-soft ring-1 ring-black/[0.05]">
<h3 class="mb-6 flex items-center gap-2 text-lg font-bold text-text-main">
<span class="flex items-center justify-center size-8 rounded-lg bg-gray-100 text-text-sub">
<span class="material-symbols-outlined text-[20px]">category</span>
</span>
                            Chủ đề bài viết
                        </h3>
<div class="flex flex-wrap gap-2">
    <?php
    $categories = get_categories(array('orderby' => 'count', 'order' => 'DESC', 'number' => 10));
    foreach ($categories as $category) {
        $count = $category->count;
        echo '<a href="' . get_category_link($category->term_id) . '" class="rounded-full bg-gray-50 border border-gray-100 px-4 py-2 text-xs font-semibold text-text-main hover:bg-primary/10 hover:text-primary hover:border-primary/20 transition-all">' . $category->name . ' (' . $count . ')</a>';
    }
    ?>
</div>
</div>
<div class="rounded-2xl bg-white p-6 shadow-soft ring-1 ring-black/[0.05]">
<h3 class="mb-6 flex items-center gap-2 text-lg font-bold text-text-main">
<span class="flex items-center justify-center size-8 rounded-lg bg-red-50 text-red-500">
<span class="material-symbols-outlined text-[20px]">schedule</span>
</span>
                            Mới cập nhật
                        </h3>
<div class="divide-y divide-gray-100">
    <?php
    $recent_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5));
    if ($recent_posts->have_posts()) : while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
    <a class="flex flex-col gap-1 py-4 first:pt-0 last:pb-0 group" href="<?php the_permalink(); ?>">
        <h4 class="text-sm font-semibold text-text-main group-hover:text-primary transition-colors leading-snug">
            <?php the_title(); ?>
        </h4>
        <span class="text-xs font-medium text-text-sub flex items-center gap-1">
             <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' trước'; ?>
        </span>
    </a>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>
</div>
</aside>
</div>
</div>
</main>
<?php get_footer(); ?>

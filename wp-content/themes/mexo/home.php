<?php get_header(); ?>
<style>
.mexo-blog-hero {
    background: linear-gradient(135deg, #ffffff 0%, #f8fbff 100%) !important;
}
.mexo-blog-title,
html.dark .mexo-blog-title {
    color: #0f172a !important;
    line-height: 1.16 !important;
    letter-spacing: -0.02em;
}
.mexo-blog-subtitle {
    display: inline-flex;
    margin-top: 0.85rem;
    font-size: clamp(1.45rem, 3vw, 2.75rem);
    line-height: 1.2;
    font-weight: 800;
}
.mexo-blog-desc,
html.dark .mexo-blog-desc {
    color: #475569 !important;
}
.mexo-blog-filter {
    background: transparent !important;
    border: 0 !important;
    padding: 0 !important;
    border-radius: 0 !important;
}
.mexo-blog-filter-inner {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    overflow: visible;
    padding: 0;
}
.mexo-blog-filter a {
    box-shadow: 0 10px 24px rgba(15, 23, 42, 0.08);
}
html.dark .mexo-blog-filter a:not(.mexo-blog-filter-active) {
    background: #1e293b !important;
    color: #e2e8f0 !important;
}
.mexo-blog-card-title,
html.dark .mexo-blog-card-title {
    color: #0f172a !important;
    line-height: 1.34 !important;
}
.mexo-blog-card-excerpt,
html.dark .mexo-blog-card-excerpt {
    color: #475569 !important;
}
html.dark body,
html.dark .mexo-blog-page {
    background: #0f172a !important;
}
.mexo-blog-page {
    overflow-x: hidden;
}
html.dark .mexo-blog-hero {
    background:
        radial-gradient(circle at 18% 20%, rgba(37, 99, 235, 0.28), transparent 28rem),
        radial-gradient(circle at 84% 12%, rgba(249, 115, 22, 0.16), transparent 26rem),
        linear-gradient(135deg, #0f172a 0%, #111827 58%, #172554 100%) !important;
    border-bottom: 1px solid rgba(148, 163, 184, 0.18);
}
html.dark .mexo-blog-hero .bg-pattern {
    opacity: 0.1 !important;
}
html.dark .mexo-blog-title {
    color: #ffffff !important;
}
html.dark .mexo-blog-desc {
    color: #cbd5e1 !important;
    border-left-color: rgba(96, 165, 250, 0.42) !important;
}
html.dark .mexo-blog-crumb-home {
    color: #94a3b8 !important;
}
html.dark .mexo-blog-crumb-current {
    background: rgba(37, 99, 235, 0.18) !important;
    color: #93c5fd !important;
}
html.dark .mexo-blog-filter a:not(.mexo-blog-filter-active) {
    background: rgba(30, 41, 59, 0.92) !important;
    border: 1px solid rgba(148, 163, 184, 0.18) !important;
    color: #cbd5e1 !important;
    box-shadow: none !important;
}
html.dark .mexo-blog-filter a:not(.mexo-blog-filter-active):hover {
    background: rgba(37, 99, 235, 0.18) !important;
    border-color: rgba(96, 165, 250, 0.34) !important;
    color: #93c5fd !important;
}
html.dark .mexo-blog-post-card,
html.dark .mexo-blog-sidebar-card {
    background: rgba(15, 23, 42, 0.86) !important;
    border: 1px solid rgba(148, 163, 184, 0.18) !important;
    box-shadow: 0 24px 70px rgba(2, 6, 23, 0.26) !important;
}
html.dark .mexo-blog-post-card:hover,
html.dark .mexo-blog-sidebar-card:hover {
    border-color: rgba(96, 165, 250, 0.3) !important;
    box-shadow: 0 26px 80px rgba(37, 99, 235, 0.12) !important;
}
html.dark .mexo-blog-card-title {
    color: #f8fafc !important;
}
html.dark .mexo-blog-card-excerpt {
    color: #cbd5e1 !important;
}
html.dark .mexo-blog-meta {
    border-top-color: rgba(148, 163, 184, 0.18) !important;
    color: #94a3b8 !important;
}
html.dark .mexo-blog-meta span {
    background: rgba(30, 41, 59, 0.9) !important;
}
html.dark .mexo-blog-sidebar-card h3,
html.dark .mexo-blog-sidebar-card h4 {
    color: #f8fafc !important;
}
html.dark .mexo-blog-sidebar-card h4:hover {
    color: #60a5fa !important;
}
html.dark .mexo-blog-sidebar-card .text-text-sub,
html.dark .mexo-blog-sidebar-card span {
    color: #94a3b8 !important;
}
html.dark .mexo-blog-topic-link {
    background: rgba(30, 41, 59, 0.92) !important;
    border-color: rgba(148, 163, 184, 0.18) !important;
    color: #cbd5e1 !important;
}
html.dark .mexo-blog-topic-link:hover {
    background: rgba(37, 99, 235, 0.18) !important;
    border-color: rgba(96, 165, 250, 0.34) !important;
    color: #93c5fd !important;
}
html.dark .mexo-blog-recent-list {
    border-color: rgba(148, 163, 184, 0.14) !important;
}
html.dark .mexo-blog-page .bg-white:not(.mexo-keep-white) {
    background-color: rgba(15, 23, 42, 0.86) !important;
}
.mexo-blog-category-badge,
.mexo-blog-topic-link {
    border-radius: 999px !important;
    border: 1px solid #bfdbfe !important;
    background: #eff6ff !important;
    color: #0d59f2 !important;
    font-size: 0.75rem !important;
    font-weight: 800 !important;
    letter-spacing: 0 !important;
}
html.dark .mexo-blog-category-badge,
html.dark .mexo-blog-topic-link {
    background: rgba(37, 99, 235, 0.18) !important;
    border-color: rgba(147, 197, 253, 0.28) !important;
    color: #bfdbfe !important;
}
@media (max-width: 767px) {
    html,
    body,
    .mexo-blog-page {
        max-width: 100vw;
        overflow-x: hidden !important;
    }

    .mexo-blog-page .max-w-7xl,
    .mexo-blog-page .grid,
    .mexo-blog-page article,
    .mexo-blog-page aside,
    .mexo-blog-post-card > div,
    .mexo-blog-post-card h3,
    .mexo-blog-post-card p {
        min-width: 0 !important;
        max-width: 100% !important;
    }

    .mexo-blog-hero {
        padding-top: 3.25rem !important;
        padding-bottom: 3rem !important;
    }

    html.dark .mexo-blog-hero {
        border-bottom: 0 !important;
        background:
            radial-gradient(circle at 18% 6%, rgba(37, 99, 235, 0.28), transparent 18rem),
            linear-gradient(180deg, #0f172a 0%, #111827 100%) !important;
    }

    .mexo-blog-title {
        font-size: 2rem !important;
        line-height: 1.08 !important;
    }

    .mexo-blog-subtitle {
        display: block;
        font-size: 1.32rem;
        line-height: 1.25;
    }

    .mexo-blog-desc {
        border-left: 0 !important;
        padding-left: 0 !important;
        font-size: 1rem !important;
    }

    .mexo-blog-filter-inner {
        flex-wrap: nowrap;
        overflow-x: auto;
        max-width: calc(100vw - 2rem);
        padding-bottom: .35rem;
        scroll-snap-type: x proximity;
    }

    .mexo-blog-filter-inner a {
        scroll-snap-align: start;
    }

    .mexo-blog-post-card,
    .mexo-blog-sidebar-card {
        width: 100%;
        max-width: calc(100vw - 2rem);
        overflow: hidden;
        border-radius: 1.25rem !important;
    }

    .mexo-blog-card-title {
        font-size: 1.35rem !important;
        word-break: break-word;
        overflow-wrap: anywhere;
    }

    .mexo-blog-meta {
        flex-wrap: wrap;
        gap: .75rem;
    }

    .mexo-blog-meta > div {
        flex-wrap: wrap;
        gap: .5rem !important;
    }

    .mexo-blog-meta > a {
        width: 100%;
        justify-content: center;
    }
}
</style>
<main class="mexo-blog-page min-h-screen pb-20">
<section class="mexo-blog-hero relative bg-white pt-20 pb-14 lg:pt-24 lg:pb-20 overflow-hidden">
<div class="absolute inset-0 bg-pattern opacity-30"></div>
<div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-primary/5 blur-3xl"></div>
<div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-cta-orange/5 blur-3xl"></div>
<div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="flex flex-col gap-6">
<div class="flex items-center gap-2 text-sm">
<a class="mexo-blog-crumb-home font-medium text-text-sub hover:text-primary transition-colors" href="#">Trang chủ</a>
<span class="material-symbols-outlined text-[12px] text-text-sub/50">chevron_right</span>
<span class="mexo-blog-crumb-current font-bold text-primary px-2 py-0.5 rounded-md bg-primary/5">Blog Kiến Thức</span>
</div>
<div class="flex max-w-5xl flex-col gap-6">
<h1 class="mexo-blog-title font-display text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                            Blog TMĐT – Shopee <br class="hidden sm:block"/>
<span class="mexo-blog-subtitle text-gradient">Quảng Cáo | Vận Hành | Thực Chiến</span>
</h1>
<p class="mexo-blog-desc max-w-3xl text-lg font-medium leading-relaxed border-l-4 border-primary/20 pl-6">
                            Cập nhật kiến thức thương mại điện tử chuyên sâu, chia sẻ kinh nghiệm thực chiến và các case study thành công từ đội ngũ chuyên gia hàng đầu tại MEXO GROUP.
                        </p>
</div>
</div>
</div>
</section>
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-10">
<div class="grid grid-cols-1 gap-12 lg:grid-cols-12">
<div class="flex flex-col gap-10 lg:col-span-8">
<div class="mexo-blog-filter sticky top-24 z-30">
    <div class="mexo-blog-filter-inner hide-scrollbar">
        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="mexo-blog-filter-active whitespace-nowrap rounded-full bg-primary px-6 py-2.5 text-sm font-bold text-white shadow-lg shadow-primary/25 transition-all hover:scale-105">
            Tất cả bài viết
        </a>
        <?php
        $categories = get_categories(array('hide_empty' => true));
        foreach ($categories as $category) {
            echo '<a href="' . get_category_link($category->term_id) . '" class="whitespace-nowrap rounded-full bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 hover:bg-primary/10 hover:text-primary transition-all">' . $category->name . '</a>';
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
    <article class="mexo-blog-post-card group relative flex flex-col md:flex-row gap-6 bg-white p-5 rounded-2xl shadow-card hover:shadow-hover transition-all duration-300 ring-1 ring-black/5">
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
                <h3 class="mexo-blog-card-title font-display text-xl md:text-2xl font-bold group-hover:text-primary transition-colors py-1">
                    <a class="focus:outline-none" href="<?php the_permalink(); ?>">
                        <span class="absolute inset-0"></span>
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p class="mexo-blog-card-excerpt line-clamp-3 text-base leading-relaxed">
                    <?php echo wp_trim_words(get_the_excerpt(), 40); ?>
                </p>
            </div>
            <div class="mexo-blog-meta mt-6 flex items-center justify-between border-t border-dashed border-gray-200 pt-4 text-xs font-medium text-text-sub">
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
<div class="mexo-blog-sidebar-card rounded-2xl bg-white p-6 shadow-soft ring-1 ring-black/[0.05]">
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
<div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-primary via-[#0047cc] to-[#002a80] p-8 text-center text-white shadow-xl group">
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
<div class="mexo-blog-sidebar-card rounded-2xl bg-white p-6 shadow-soft ring-1 ring-black/[0.05]">
<h3 class="mb-6 flex items-center gap-2 text-lg font-bold text-text-main">
<span class="flex items-center justify-center size-8 rounded-lg bg-gray-100 text-text-sub">
<span class="material-symbols-outlined text-[20px]">category</span>
</span>
                            Chủ đề bài viết
                        </h3>
<div class="flex flex-wrap gap-2">
    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
        $count = $category->count;
        echo '<a href="' . get_category_link($category->term_id) . '" class="mexo-blog-topic-link rounded-full bg-gray-50 border border-gray-100 px-4 py-2 text-xs font-semibold text-text-main hover:bg-primary/10 hover:text-primary hover:border-primary/20 transition-all">' . $category->name . ' (' . $count . ')</a>';
    }
    ?>
</div>
</div>
<div class="mexo-blog-sidebar-card rounded-2xl bg-white p-6 shadow-soft ring-1 ring-black/[0.05]">
<h3 class="mb-6 flex items-center gap-2 text-lg font-bold text-text-main">
<span class="flex items-center justify-center size-8 rounded-lg bg-red-50 text-red-500">
<span class="material-symbols-outlined text-[20px]">schedule</span>
</span>
                            Mới cập nhật
                        </h3>
<div class="mexo-blog-recent-list divide-y divide-gray-100">
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
<?php echo mexo_render_faq_accordion( 'Câu hỏi thường gặp về TMĐT Shopee', mexo_default_faq_items() ); ?>
</div>
</main>
<?php get_footer(); ?>

<?php

/**

 * Theme functions and definitions

 */



if ( ! function_exists( 'mexo_setup' ) ) :

    function mexo_setup() {

        // Register navigation menus

        register_nav_menus( array(

            'primary' => __( 'Primary Menu', 'mexo' ),

        ) );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );

    }

endif;

add_action( 'after_setup_theme', 'mexo_setup' );


function mexo_scripts() {
    // Load Local Fonts
    wp_enqueue_style( 'mexo-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), '1.0' );
    
    // Main Style (Compiled Tailwind + Theme Metadata)
    wp_enqueue_style( 'mexo-style', get_stylesheet_uri(), array(), time() );

    // Enqueue Form Loader Script
    if ( is_page_template( 'dich-vu-shopee-mall.php' ) || is_page_template( 'trang-tri-banner.php' ) || is_page('lien-he') ) {
        wp_enqueue_script( 'mexo-form-loader', get_template_directory_uri() . '/assets/js/form-loader.js', array(), '1.0', true );
        wp_localize_script( 'mexo-form-loader', 'mexo_ajax', array(
            'ajax_url' => admin_url( 'admin-ajax.php' )
        ));
    }
}
add_action( 'wp_enqueue_scripts', 'mexo_scripts' );

// AJAX Handler for Lazy Loading Form
function mexo_load_xc_form() {
    // Check if we need to load required CF7 scripts/styles manually if they weren't loaded because the shortcode wasn't present initially
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
    
    // Buffer output
    ob_start();
    include( locate_template( 'xc-form.php' ) );
    $content = ob_get_clean();
    
    echo $content;
    wp_die();
}
add_action( 'wp_ajax_load_xc_form', 'mexo_load_xc_form' );
add_action( 'wp_ajax_nopriv_load_xc_form', 'mexo_load_xc_form' );



/**

 * Custom walker to add Tailwind classes to menu items.

 */

class Mexo_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $classes[] = 'menu-item-' . $item->ID;

        

        // Tailwind classes for the <a> tag

        $link_classes = array(

            'text-slate-700',

            'dark:text-slate-200',

            'hover:text-primary',

            'dark:hover:text-primary',

            'font-semibold',

            'transition-colors'

        );



        $args = (object) $args;

        $atts = array();

        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';

        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';

        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';

        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts['class']  = join( ' ', $link_classes );

 

        $attributes = '';

        foreach ( $atts as $attr => $value ) {

            if ( ! empty( $value ) ) {

                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );

                $attributes .= ' ' . $attr . '="' . $value . '"';

            }

        }

 

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $item_output = $args->before;

        $item_output .= '<a'. $attributes .'>';

        $item_output .= $args->link_before . $title . $args->link_after;



        // Add the underline effect manually or check if we can add it via classes more cleanly.

        // Original: relative after:content-[''] after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full

        // This effect seems specific to "Trang Chu" in the example, or maybe all active links?

        // Let's add it to class if it is current menu item? Or just add it to all like the user seemingly wants (hover effect).

        // I'll add it to all items for consistent hover effect.

        // Note: The Tailwind arbitrary value syntax might break in PHP strings if not careful.

        

        $item_output .= '</a>';

        $item_output .= $args->after;

 

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }

}



/**

 * Customizer options

 */

function mexo_customize_register( $wp_customize ) {
    // 1. Theme Configuration (Logo/Favicon location pointer)
    $wp_customize->add_section( 'mexo_theme_settings', array(
        'title'    => __( 'Theme Settings', 'mexo' ),
        'priority' => 20,
        'description' => __( 'To change Logo and Favicon, go to Site Identity.', 'mexo' ),
    ) );

    // 2. Header Options
    $wp_customize->add_section( 'mexo_header_options', array(
        'title'    => __( 'Header Options', 'mexo' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'mexo_header_button_link', array(
        'default'           => '/lien-he/',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'mexo_header_button_link', array(
        'label'    => __( 'Header Button Link', 'mexo' ),
        'section'  => 'mexo_header_options',
        'type'     => 'url',
    ) );

    // 3. Footer Options
    $wp_customize->add_section( 'mexo_footer_options', array(
        'title'    => __( 'Footer Options', 'mexo' ),
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'mexo_footer_phone', array(
        'default'           => '0855.761.555',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'mexo_footer_phone', array(
        'label'    => __( 'Phone Number', 'mexo' ),
        'section'  => 'mexo_footer_options',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'mexo_footer_email', array(
        'default'           => 'mexoagency@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'mexo_footer_email', array(
        'label'    => __( 'Email Address', 'mexo' ),
        'section'  => 'mexo_footer_options',
        'type'     => 'email',
    ) );
}
add_action( 'customize_register', 'mexo_customize_register' );

function mexo_allow_search_indexing( $robots ) {
    unset( $robots['noindex'], $robots['nofollow'] );
    $robots['index'] = true;
    $robots['follow'] = true;

    return $robots;
}
add_filter( 'wp_robots', 'mexo_allow_search_indexing', 999 );

function mexo_seo_page_data() {
    $site_name = get_bloginfo( 'name' );
    $default = array(
        'title'       => 'MEXO GROUP - Giải pháp tăng trưởng TMĐT Shopee, TikTok Shop và AI',
        'description' => 'MEXO GROUP cung cấp giải pháp tăng trưởng thương mại điện tử cho doanh nghiệp Việt: vận hành Shopee, xây dựng shop, quảng cáo, đào tạo TMĐT và ứng dụng AI.',
        'keywords'    => 'MEXO GROUP, giải pháp TMĐT, vận hành Shopee, xây dựng shop Shopee, đào tạo Shopee, TikTok Shop, AI thương mại điện tử',
    );

    $map = array(
        '/' => array(
            'title'       => 'Giải pháp TMĐT Shopee, TikTok Shop & AI - MEXO GROUP',
            'description' => 'Tăng trưởng doanh thu thương mại điện tử với hệ sinh thái dịch vụ MEXO GROUP: chiến lược, vận hành gian hàng, quảng cáo, đào tạo và AI cho doanh nghiệp Việt.',
            'keywords'    => 'giải pháp TMĐT, dịch vụ Shopee, TikTok Shop, tăng trưởng thương mại điện tử',
        ),
        '/blog/' => array(
            'title'       => 'Blog TMĐT Shopee - Quảng cáo, vận hành và phí sàn | MEXO GROUP',
            'description' => 'Cập nhật kiến thức TMĐT Shopee, TikTok Shop, quảng cáo, vận hành, phí sàn và case study thực chiến từ đội ngũ MEXO GROUP.',
            'keywords'    => 'blog TMĐT Shopee, phí sàn Shopee, quảng cáo Shopee, vận hành Shopee',
        ),
        '/gioi-thieu/' => array(
            'title'       => 'Giới thiệu MEXO GROUP - Đối tác tăng trưởng thương mại điện tử',
            'description' => 'Tìm hiểu MEXO GROUP, đội ngũ chuyên gia vận hành TMĐT, kinh nghiệm triển khai Shopee, TikTok Shop và giải pháp tăng trưởng cho doanh nghiệp.',
            'keywords'    => 'giới thiệu MEXO GROUP, agency TMĐT, chuyên gia Shopee',
        ),
        '/dich-vu-van-hanh-shopee/' => array(
            'title'       => 'Dịch vụ vận hành Shopee trọn gói cho doanh nghiệp | MEXO GROUP',
            'description' => 'Dịch vụ vận hành Shopee trọn gói: tối ưu gian hàng, đăng sản phẩm, xử lý đơn, CSKH, báo cáo hiệu quả và tăng trưởng doanh thu bền vững.',
            'keywords'    => 'dịch vụ vận hành Shopee, vận hành gian hàng Shopee, quản lý shop Shopee',
        ),
        '/xay-dung-shop-shopee/' => array(
            'title'       => 'Xây dựng Shop Shopee chuyên nghiệp, tối ưu chuyển đổi | MEXO GROUP',
            'description' => 'MEXO GROUP hỗ trợ xây dựng shop Shopee từ nền tảng: định vị gian hàng, thiết kế, tối ưu sản phẩm, nội dung bán hàng và quy trình vận hành.',
            'keywords'    => 'xây dựng shop Shopee, thiết kế gian hàng Shopee, tối ưu shop Shopee',
        ),
        '/dao-tao-shopee/' => array(
            'title'       => 'Đào tạo Shopee thực chiến cho chủ shop và doanh nghiệp | MEXO GROUP',
            'description' => 'Khóa đào tạo Shopee thực chiến giúp đội ngũ nắm quy trình vận hành, tối ưu sản phẩm, quảng cáo, báo cáo và tăng trưởng doanh số.',
            'keywords'    => 'đào tạo Shopee, khóa học Shopee, học vận hành Shopee',
        ),
        '/lien-he/' => array(
            'title'       => 'Liên hệ MEXO GROUP - Tư vấn giải pháp TMĐT cho doanh nghiệp',
            'description' => 'Liên hệ MEXO GROUP để nhận tư vấn chiến lược tăng trưởng TMĐT, vận hành Shopee, TikTok Shop, quảng cáo và đào tạo đội ngũ.',
            'keywords'    => 'liên hệ MEXO GROUP, tư vấn TMĐT, tư vấn Shopee',
        ),
        '/chinh-sach-bao-mat/' => array(
            'title'       => 'Chính sách bảo mật - MEXO GROUP',
            'description' => 'Chính sách bảo mật của MEXO GROUP về cách tiếp nhận, sử dụng và bảo vệ thông tin khách hàng khi liên hệ tư vấn giải pháp thương mại điện tử.',
            'keywords'    => 'chính sách bảo mật MEXO GROUP, bảo mật thông tin khách hàng',
        ),
        '/dieu-khoan/' => array(
            'title'       => 'Điều khoản sử dụng - MEXO GROUP',
            'description' => 'Điều khoản sử dụng website MEXO GROUP, phạm vi thông tin tham khảo và cách liên hệ khi cần tư vấn dịch vụ thương mại điện tử.',
            'keywords'    => 'điều khoản sử dụng MEXO GROUP, điều khoản website',
        ),
    );

    $path = trailingslashit( wp_parse_url( home_url( add_query_arg( array(), $GLOBALS['wp']->request ?? '' ) ), PHP_URL_PATH ) ?: '/' );
    if ( is_front_page() ) {
        return $map['/'];
    }
    if ( is_home() ) {
        return $map['/blog/'];
    }
    if ( is_singular() ) {
        $title = single_post_title( '', false );
        $excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_post_field( 'post_content', get_the_ID() ) ), 32 );
        return array(
            'title'       => $title . ' | ' . $site_name,
            'description' => $excerpt ? $excerpt : $default['description'],
            'keywords'    => $default['keywords'],
        );
    }
    if ( is_category() || is_tag() || is_tax() ) {
        $term_title = single_term_title( '', false );
        return array(
            'title'       => $term_title . ' - Kiến thức TMĐT | ' . $site_name,
            'description' => 'Tổng hợp bài viết chuyên sâu về ' . $term_title . ', kinh nghiệm vận hành, quảng cáo và tăng trưởng thương mại điện tử từ MEXO GROUP.',
            'keywords'    => $term_title . ', TMĐT, Shopee, MEXO GROUP',
        );
    }

    return $map[ $path ] ?? $default;
}

function mexo_document_title_parts( $parts ) {
    $data = mexo_seo_page_data();
    $parts['title'] = $data['title'];
    unset( $parts['site'], $parts['tagline'] );

    return $parts;
}
add_filter( 'document_title_parts', 'mexo_document_title_parts', 50 );
remove_action( 'wp_head', 'rel_canonical' );

function mexo_get_canonical_url() {
    if ( is_singular() ) {
        return get_permalink();
    }
    if ( is_home() ) {
        return get_permalink( get_option( 'page_for_posts' ) );
    }
    if ( is_front_page() ) {
        return home_url( '/' );
    }
    if ( is_category() || is_tag() || is_tax() ) {
        return get_term_link( get_queried_object() );
    }

    return home_url( add_query_arg( array(), $GLOBALS['wp']->request ?? '' ) . '/' );
}

function mexo_get_og_image() {
    if ( is_singular() && has_post_thumbnail() ) {
        return get_the_post_thumbnail_url( get_the_ID(), 'large' );
    }

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id ) {
        return wp_get_attachment_image_url( $custom_logo_id, 'full' );
    }

    return get_template_directory_uri() . '/assets/images/hero-bg.jpg';
}

function mexo_output_meta_seo() {
    $data = mexo_seo_page_data();
    $canonical = mexo_get_canonical_url();
    $image = mexo_get_og_image();
    $type = is_singular( 'post' ) ? 'article' : 'website';
    ?>
<meta name="description" content="<?php echo esc_attr( $data['description'] ); ?>">
<meta name="keywords" content="<?php echo esc_attr( $data['keywords'] ); ?>">
<link rel="canonical" href="<?php echo esc_url( $canonical ); ?>">
<meta property="og:locale" content="vi_VN">
<meta property="og:type" content="<?php echo esc_attr( $type ); ?>">
<meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
<meta property="og:title" content="<?php echo esc_attr( $data['title'] ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $data['description'] ); ?>">
<meta property="og:url" content="<?php echo esc_url( $canonical ); ?>">
<meta property="og:image" content="<?php echo esc_url( $image ); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( $data['title'] ); ?>">
<meta name="twitter:description" content="<?php echo esc_attr( $data['description'] ); ?>">
<meta name="twitter:image" content="<?php echo esc_url( $image ); ?>">
    <?php
}
add_action( 'wp_head', 'mexo_output_meta_seo', 2 );

function mexo_schema_json( $data ) {
    echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}

function mexo_build_breadcrumb_schema() {
    $items = array(
        array(
            '@type'    => 'ListItem',
            'position' => 1,
            'name'     => 'Trang chủ',
            'item'     => home_url( '/' ),
        ),
    );

    if ( is_home() ) {
        $items[] = array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => get_permalink( get_option( 'page_for_posts' ) ) );
    } elseif ( is_singular( 'post' ) ) {
        $items[] = array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => get_permalink( get_option( 'page_for_posts' ) ) );
        $items[] = array( '@type' => 'ListItem', 'position' => 3, 'name' => get_the_title(), 'item' => get_permalink() );
    } elseif ( is_page() && ! is_front_page() ) {
        $items[] = array( '@type' => 'ListItem', 'position' => 2, 'name' => get_the_title(), 'item' => get_permalink() );
    } elseif ( is_category() || is_tag() || is_tax() ) {
        $items[] = array( '@type' => 'ListItem', 'position' => 2, 'name' => single_term_title( '', false ), 'item' => mexo_get_canonical_url() );
    }

    return array(
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    );
}

function mexo_default_faq_items() {
    if ( is_front_page() ) {
        return array(
            array( 'q' => 'MEXO GROUP hỗ trợ doanh nghiệp những mảng TMĐT nào?', 'a' => 'MEXO GROUP hỗ trợ chiến lược tăng trưởng, vận hành Shopee, TikTok Shop, quảng cáo, xây dựng gian hàng, đào tạo đội ngũ và ứng dụng AI vào thương mại điện tử.' ),
            array( 'q' => 'Doanh nghiệp mới bắt đầu bán Shopee có phù hợp không?', 'a' => 'Có. MEXO GROUP có thể tư vấn lộ trình từ nền tảng: định vị sản phẩm, thiết kế gian hàng, tối ưu nội dung, quy trình vận hành và kế hoạch tăng trưởng.' ),
            array( 'q' => 'MEXO GROUP có báo cáo hiệu quả định kỳ không?', 'a' => 'Có. Các hoạt động được theo dõi bằng chỉ số vận hành, quảng cáo, doanh thu, chi phí và tỷ lệ chuyển đổi để doanh nghiệp dễ đánh giá hiệu quả.' ),
            array( 'q' => 'MEXO GROUP có nhận tối ưu gian hàng đang hoạt động không?', 'a' => 'Có. Đội ngũ sẽ rà soát gian hàng hiện tại, xác định điểm nghẽn về hiển thị, nội dung, vận hành và quảng cáo trước khi đề xuất phương án cải thiện.' ),
            array( 'q' => 'Giải pháp có phù hợp với doanh nghiệp vừa và nhỏ không?', 'a' => 'Có. Lộ trình được xây theo ngân sách, nguồn lực nhân sự và mục tiêu tăng trưởng thực tế để doanh nghiệp triển khai từng bước nhưng vẫn có định hướng dài hạn.' ),
            array( 'q' => 'Bao lâu có thể thấy tín hiệu cải thiện?', 'a' => 'Tùy ngành hàng và nền tảng, nhưng doanh nghiệp thường có thể theo dõi tín hiệu ban đầu qua lượt hiển thị, tỷ lệ chuyển đổi, chi phí quảng cáo và chất lượng vận hành sau vài tuần triển khai.' ),
        );
    }
    if ( is_home() ) {
        return array(
            array( 'q' => 'Blog MEXO GROUP tập trung vào chủ đề gì?', 'a' => 'Blog tập trung vào kiến thức thương mại điện tử, phí sàn Shopee, vận hành gian hàng, quảng cáo, chiến lược tăng trưởng và case study thực chiến.' ),
            array( 'q' => 'Nội dung blog có phù hợp cho chủ shop mới không?', 'a' => 'Có. Các bài viết được trình bày theo hướng dễ hiểu, có bối cảnh, lưu ý vận hành và gợi ý hành động cho cả chủ shop mới lẫn đội ngũ doanh nghiệp.' ),
            array( 'q' => 'Bài viết có cập nhật theo thay đổi của sàn không?', 'a' => 'Có. Những chủ đề liên quan đến phí sàn, chính sách, vận hành và quảng cáo sẽ được ưu tiên cập nhật khi có thay đổi quan trọng từ nền tảng.' ),
            array( 'q' => 'Có thể dùng nội dung blog để đào tạo nội bộ không?', 'a' => 'Có. Các bài viết được viết theo cấu trúc rõ ràng, dễ đọc và phù hợp để đội ngũ vận hành, marketing hoặc chủ shop tham khảo trong quá trình làm việc.' ),
            array( 'q' => 'Blog có liên kết đến dịch vụ phù hợp không?', 'a' => 'Có. Mỗi chủ đề quan trọng sẽ có liên kết nội bộ tới dịch vụ liên quan để người đọc dễ tìm giải pháp triển khai sau khi hiểu vấn đề.' ),
            array( 'q' => 'MEXO GROUP có nhận tư vấn theo nội dung bài viết không?', 'a' => 'Có. Nếu doanh nghiệp cần áp dụng vào trường hợp cụ thể, MEXO GROUP có thể phân tích hiện trạng và đề xuất hướng triển khai phù hợp.' ),
        );
    }
    if ( is_singular( 'post' ) ) {
        return array(
            array( 'q' => 'Thông tin trong bài viết có dùng để ra quyết định vận hành ngay không?', 'a' => 'Bài viết cung cấp bối cảnh, điểm cần chú ý và gợi ý thực thi. Doanh nghiệp nên đối chiếu thêm với thông báo chính thức của sàn trước khi áp dụng.' ),
            array( 'q' => 'MEXO GROUP có hỗ trợ triển khai sau khi đọc bài viết không?', 'a' => 'Có. Đội ngũ MEXO GROUP có thể tư vấn và triển khai chiến lược vận hành, quảng cáo hoặc tối ưu gian hàng theo tình trạng thực tế của doanh nghiệp.' ),
            array( 'q' => 'Bài viết có được tối ưu để dễ tra cứu không?', 'a' => 'Có. Nội dung được chia theo tiêu đề, ý chính, bảng thông tin và phần tóm tắt để người đọc dễ nắm bắt, đồng thời hỗ trợ công cụ tìm kiếm hiểu đúng chủ đề.' ),
            array( 'q' => 'Thông tin có phù hợp với nhiều ngành hàng không?', 'a' => 'Tùy nội dung từng bài. Với các chủ đề chung như phí sàn, vận hành và quảng cáo, doanh nghiệp ở nhiều ngành có thể tham khảo và điều chỉnh theo thực tế.' ),
            array( 'q' => 'Có thể liên hệ để kiểm tra gian hàng sau khi đọc bài không?', 'a' => 'Có. Bạn có thể gửi tình trạng gian hàng, mục tiêu doanh thu và vấn đề đang gặp để MEXO GROUP tư vấn hướng xử lý phù hợp.' ),
            array( 'q' => 'Bài viết có thay thế tư vấn chuyên sâu không?', 'a' => 'Không hoàn toàn. Bài viết giúp bạn hiểu vấn đề và chuẩn bị thông tin tốt hơn, còn kế hoạch triển khai nên dựa trên dữ liệu thực tế của từng gian hàng.' ),
        );
    }

    return array(
        array( 'q' => 'MEXO GROUP có tư vấn trước khi triển khai không?', 'a' => 'Có. Doanh nghiệp có thể liên hệ để được phân tích hiện trạng, mục tiêu tăng trưởng và đề xuất giải pháp phù hợp.' ),
        array( 'q' => 'Dịch vụ có thể tùy chỉnh theo từng ngành hàng không?', 'a' => 'Có. MEXO GROUP xây dựng phương án theo nguồn lực, ngành hàng, mức độ cạnh tranh và mục tiêu kinh doanh của từng doanh nghiệp.' ),
        array( 'q' => 'Quy trình làm việc bắt đầu như thế nào?', 'a' => 'Thông thường quy trình bắt đầu bằng việc tiếp nhận thông tin, phân tích hiện trạng, thống nhất mục tiêu, đề xuất phạm vi triển khai và theo dõi kết quả sau khi thực hiện.' ),
        array( 'q' => 'MEXO GROUP có hỗ trợ sau khi bàn giao không?', 'a' => 'Có. Tùy gói dịch vụ, đội ngũ sẽ hỗ trợ kiểm tra, điều chỉnh và tư vấn các bước tiếp theo để hoạt động vận hành ổn định hơn.' ),
        array( 'q' => 'Có thể triển khai nhiều dịch vụ cùng lúc không?', 'a' => 'Có. Doanh nghiệp có thể kết hợp xây dựng gian hàng, vận hành, quảng cáo, đào tạo và tối ưu nội dung nếu mục tiêu tăng trưởng cần triển khai đồng bộ.' ),
        array( 'q' => 'Làm sao để nhận tư vấn phù hợp?', 'a' => 'Bạn có thể gửi thông tin ngành hàng, nền tảng đang bán, mục tiêu doanh thu và vấn đề hiện tại để MEXO GROUP đưa ra hướng tư vấn sát thực tế hơn.' ),
    );
}

function mexo_normalize_faq_items( $items = array() ) {
    if ( empty( $items ) ) {
        $items = mexo_default_faq_items();
    }

    if ( count( $items ) < 6 ) {
        foreach ( mexo_service_faq_items( 'default' ) as $fallback_item ) {
            $items[] = $fallback_item;
            if ( count( $items ) >= 6 ) {
                break;
            }
        }
    }
    $items = array_slice( $items, 0, 6 );

    return $items;
}

function mexo_render_faq_accordion( $title = 'Câu hỏi thường gặp', $items = array(), $eyebrow = 'FAQ' ) {
    $items = mexo_normalize_faq_items( $items );

    ob_start();
    ?>
<section id="faq" class="mexo-faq-section py-16 md:py-20 bg-white dark:bg-slate-950">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 md:mb-12">
            <span class="mexo-faq-eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
            <h2 class="mexo-faq-title"><?php echo esc_html( $title ); ?></h2>
            <div class="mexo-faq-underline"></div>
        </div>
        <div class="mexo-faq-list">
            <?php foreach ( $items as $index => $item ) : ?>
            <details class="mexo-faq-item" <?php echo 0 === $index ? 'open' : ''; ?>>
                <summary class="mexo-faq-question">
                    <span class="mexo-faq-number"><?php echo esc_html( $index + 1 ); ?></span>
                    <span class="mexo-faq-question-text"><?php echo esc_html( $item['q'] ); ?></span>
                    <span class="material-symbols-outlined mexo-faq-icon">expand_more</span>
                </summary>
                <div class="mexo-faq-answer">
                    <span class="material-symbols-outlined mexo-faq-answer-icon">check</span>
                    <p><?php echo esc_html( $item['a'] ); ?></p>
                </div>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
    <?php

    return ob_get_clean();
}

function mexo_service_faq_items( $service = 'default' ) {
    $sets = array(
        'livestream' => array(
            array( 'q' => 'Shop có cần bật máy tính 24/24 không?', 'a' => 'Không. Hệ thống chạy trên server đám mây, bạn chỉ cần gửi video và danh sách sản phẩm, đội ngũ MEXO GROUP sẽ cấu hình để livestream hoạt động tự động.' ),
            array( 'q' => 'Dịch vụ Livestream Shopee 24/7 có an toàn cho shop không?', 'a' => 'Có. Quy trình triển khai ưu tiên tuân thủ chính sách nền tảng, nội dung hợp lệ và cách vận hành ổn định để hạn chế rủi ro cho gian hàng.' ),
            array( 'q' => 'Tôi chưa có video thì có triển khai được không?', 'a' => 'Có. MEXO GROUP có thể hỗ trợ định hướng nội dung, quay dựng video hoặc hướng dẫn bạn chuẩn bị video đơn giản bằng điện thoại.' ),
            array( 'q' => 'Khách bình luận thì ai phản hồi?', 'a' => 'Doanh nghiệp có thể dùng kịch bản phản hồi, chatbot hoặc nhân sự trực chat theo khung giờ phù hợp. MEXO GROUP sẽ tư vấn phương án theo nguồn lực của bạn.' ),
            array( 'q' => 'Chi phí tính như thế nào?', 'a' => 'Chi phí phụ thuộc số lượng video, thời gian triển khai và mức độ hỗ trợ vận hành. Bạn nên liên hệ để nhận báo giá theo tình trạng gian hàng thực tế.' ),
            array( 'q' => 'Dịch vụ phù hợp ngành hàng nào?', 'a' => 'Phù hợp với nhiều ngành như thời trang, mỹ phẩm, gia dụng, đồ ăn vặt, phụ kiện và các sản phẩm dễ trình bày bằng video.' ),
        ),
        'xay-shop' => array(
            array( 'q' => 'Thời gian hoàn thiện gian hàng Shopee là bao lâu?', 'a' => 'Thông thường từ 5 đến 7 ngày làm việc sau khi nhận đủ thông tin sản phẩm, hình ảnh, định hướng thương hiệu và quyền truy cập cần thiết.' ),
            array( 'q' => 'Tôi cần chuẩn bị gì trước khi xây shop?', 'a' => 'Bạn cần chuẩn bị thông tin thương hiệu, danh sách sản phẩm, hình ảnh, giá bán, chính sách giao hàng và tài khoản Shopee nếu đã có.' ),
            array( 'q' => 'Dịch vụ có bao gồm thiết kế hình ảnh sản phẩm không?', 'a' => 'Có. MEXO GROUP có thể hỗ trợ thiết kế khung ảnh, tối ưu hình ảnh sản phẩm và bố cục gian hàng để tăng độ tin cậy khi khách truy cập.' ),
            array( 'q' => 'Có hỗ trợ đăng sản phẩm chuẩn SEO không?', 'a' => 'Có. Nội dung sản phẩm được tối ưu tiêu đề, mô tả, thuộc tính và hình ảnh để hỗ trợ khả năng hiển thị trên Shopee.' ),
            array( 'q' => 'Dịch vụ có bao gồm chạy quảng cáo không?', 'a' => 'Gói xây shop tập trung vào nền tảng gian hàng. Nếu cần quảng cáo, MEXO GROUP sẽ tư vấn thêm kế hoạch ngân sách và tối ưu chiến dịch riêng.' ),
            array( 'q' => 'Sau khi bàn giao có được hỗ trợ chỉnh sửa không?', 'a' => 'Có. MEXO GROUP hỗ trợ điều chỉnh các lỗi kỹ thuật hoặc điểm chưa phù hợp trong phạm vi đã thống nhất sau khi bàn giao.' ),
        ),
        'trang-tri' => array(
            array( 'q' => 'Thời gian hoàn thành thiết kế banner/gian hàng là bao lâu?', 'a' => 'Thông thường từ 3 đến 5 ngày làm việc sau khi chốt concept và nhận đủ thông tin sản phẩm. Gói nhiều hạng mục có thể cần thêm thời gian.' ),
            array( 'q' => 'Tôi có được chỉnh sửa sau khi thiết kế không?', 'a' => 'Có. Mỗi gói dịch vụ có số lần chỉnh sửa phù hợp để đảm bảo thành phẩm đúng định hướng thương hiệu và mục tiêu bán hàng.' ),
            array( 'q' => 'MEXO GROUP có hỗ trợ đăng tải lên Shopee không?', 'a' => 'Có. Ngoài file thiết kế, đội ngũ có thể hỗ trợ hướng dẫn hoặc setup trực tiếp để giao diện hiển thị đúng trên Shopee.' ),
            array( 'q' => 'Nếu chưa có bộ nhận diện thương hiệu thì sao?', 'a' => 'MEXO GROUP có thể đề xuất phong cách hình ảnh, màu sắc, bố cục và thông điệp phù hợp với ngành hàng của bạn.' ),
            array( 'q' => 'Thiết kế có tối ưu chuyển đổi không?', 'a' => 'Có. Bố cục được xây dựng để làm rõ ưu đãi, lợi ích sản phẩm, CTA và thông tin quan trọng giúp khách hàng dễ ra quyết định hơn.' ),
            array( 'q' => 'File thiết kế có dùng được cho các chiến dịch sau không?', 'a' => 'Có. Khi cần, MEXO GROUP có thể xây hệ thống banner theo phong cách nhất quán để doanh nghiệp dễ thay nội dung cho các đợt sale, ra mắt sản phẩm hoặc chương trình mới.' ),
        ),
        'van-hanh' => array(
            array( 'q' => 'Dịch vụ vận hành Shopee bao gồm những hạng mục nào?', 'a' => 'Dịch vụ có thể bao gồm tối ưu sản phẩm, xử lý vận hành gian hàng, theo dõi chỉ số, đề xuất chương trình bán hàng, tối ưu quảng cáo và báo cáo hiệu quả định kỳ.' ),
            array( 'q' => 'MEXO GROUP có tiếp nhận shop đang bị giảm doanh thu không?', 'a' => 'Có. Đội ngũ sẽ rà soát dữ liệu, sản phẩm chủ lực, traffic, tỷ lệ chuyển đổi và các lỗi vận hành để xác định nguyên nhân trước khi đề xuất giải pháp.' ),
            array( 'q' => 'Doanh nghiệp có cần tự quản lý toàn bộ shop không?', 'a' => 'Không bắt buộc. MEXO GROUP có thể phối hợp với đội ngũ nội bộ hoặc hỗ trợ vận hành theo phạm vi đã thống nhất, giúp doanh nghiệp giảm tải công việc hằng ngày.' ),
            array( 'q' => 'Bao lâu sẽ có báo cáo vận hành?', 'a' => 'Tùy gói triển khai, báo cáo có thể thực hiện theo tuần hoặc theo tháng, tập trung vào doanh thu, chi phí, sản phẩm, quảng cáo và các điểm cần tối ưu tiếp theo.' ),
            array( 'q' => 'Dịch vụ có hỗ trợ tối ưu quảng cáo Shopee không?', 'a' => 'Có. MEXO GROUP có thể tối ưu cấu trúc chiến dịch, ngân sách, từ khóa, sản phẩm ưu tiên và chỉ số hiệu quả để cải thiện chất lượng tăng trưởng.' ),
            array( 'q' => 'Vận hành Shopee có phù hợp với shop mới không?', 'a' => 'Có. Với shop mới, đội ngũ sẽ ưu tiên nền tảng gian hàng, nội dung sản phẩm, quy trình xử lý đơn và kế hoạch tăng trưởng phù hợp với ngân sách ban đầu.' ),
        ),
        'mall' => array(
            array( 'q' => 'Dịch vụ Shopee Mall phù hợp với doanh nghiệp nào?', 'a' => 'Dịch vụ phù hợp với thương hiệu có sản phẩm rõ nguồn gốc, định hướng bán hàng dài hạn và cần xây dựng độ tin cậy cao hơn trên sàn Shopee.' ),
            array( 'q' => 'MEXO GROUP có hỗ trợ chuẩn bị hồ sơ lên Mall không?', 'a' => 'Có. Đội ngũ sẽ hướng dẫn doanh nghiệp rà soát giấy tờ, thông tin thương hiệu, sản phẩm và các điều kiện cần thiết trước khi nộp hồ sơ.' ),
            array( 'q' => 'Lên Shopee Mall có chắc chắn được duyệt không?', 'a' => 'Không thể cam kết tuyệt đối vì phụ thuộc tiêu chí xét duyệt của Shopee. MEXO GROUP tập trung giúp hồ sơ đầy đủ, rõ ràng và giảm lỗi trong quá trình chuẩn bị.' ),
            array( 'q' => 'Sau khi lên Mall có cần tối ưu vận hành không?', 'a' => 'Có. Shopee Mall yêu cầu tiêu chuẩn vận hành cao hơn, vì vậy doanh nghiệp cần tối ưu hình ảnh, nội dung, chăm sóc khách hàng, chỉ số đơn hàng và kế hoạch bán hàng.' ),
            array( 'q' => 'MEXO GROUP có tư vấn phí và chính sách Mall không?', 'a' => 'Có. Đội ngũ có thể giúp doanh nghiệp hiểu các nhóm phí, điều kiện vận hành và điểm cần theo dõi để tính toán biên lợi nhuận phù hợp.' ),
            array( 'q' => 'Shop đang bán thường có chuyển sang Mall được không?', 'a' => 'Có thể. MEXO GROUP sẽ kiểm tra hiện trạng shop, sản phẩm, thương hiệu và giấy tờ để đánh giá khả năng chuyển đổi và lộ trình chuẩn bị.' ),
        ),
        'tang-follow' => array(
            array( 'q' => 'Dịch vụ tăng follow Shopee có dùng follow ảo không?', 'a' => 'MEXO GROUP ưu tiên phương án tăng trưởng phù hợp nền tảng, kết hợp nội dung, ưu đãi, chiến dịch và tối ưu gian hàng để tăng tín hiệu tin cậy bền vững hơn.' ),
            array( 'q' => 'Tăng follow có giúp tăng doanh thu ngay không?', 'a' => 'Follow là một tín hiệu hỗ trợ uy tín và khả năng tiếp cận. Doanh thu còn phụ thuộc sản phẩm, giá, hình ảnh, quảng cáo, đánh giá và năng lực vận hành.' ),
            array( 'q' => 'Dịch vụ có hỗ trợ kháng vi phạm Shopee không?', 'a' => 'Có. MEXO GROUP có thể hỗ trợ rà soát nguyên nhân, chuẩn bị thông tin và tư vấn hướng xử lý phù hợp với từng loại vi phạm của gian hàng.' ),
            array( 'q' => 'Shop mới có nên làm tăng follow không?', 'a' => 'Có thể, nhưng nên triển khai cùng tối ưu sản phẩm, hình ảnh và nội dung gian hàng để lượng theo dõi mới có cơ sở chuyển thành lượt xem và đơn hàng.' ),
            array( 'q' => 'MEXO GROUP có báo cáo kết quả tăng trưởng không?', 'a' => 'Có. Các chỉ số như follow, lượt xem, tương tác, hiệu quả chiến dịch và tình trạng gian hàng sẽ được theo dõi theo phạm vi dịch vụ đã thống nhất.' ),
            array( 'q' => 'Dịch vụ có phù hợp với nhiều ngành hàng không?', 'a' => 'Có. Các ngành như mỹ phẩm, thời trang, gia dụng, mẹ và bé, phụ kiện và thực phẩm đều có thể xây chiến lược tăng độ tin cậy nếu nội dung phù hợp.' ),
        ),
        'dao-tao' => array(
            array( 'q' => 'Khóa đào tạo Shopee phù hợp với ai?', 'a' => 'Khóa học phù hợp với chủ shop, nhân sự vận hành, đội marketing và doanh nghiệp muốn xây năng lực tự quản lý gian hàng Shopee bài bản hơn.' ),
            array( 'q' => 'Nội dung đào tạo có thực hành trên shop thật không?', 'a' => 'Có. Nội dung được thiết kế theo hướng thực chiến, ưu tiên ví dụ, checklist và thao tác có thể áp dụng trực tiếp vào gian hàng hoặc sản phẩm đang bán.' ),
            array( 'q' => 'Người mới chưa biết Shopee có học được không?', 'a' => 'Có. Lộ trình có thể bắt đầu từ nền tảng như cấu trúc gian hàng, đăng sản phẩm, tối ưu nội dung, xử lý đơn và đọc chỉ số cơ bản.' ),
            array( 'q' => 'Khóa học có phần quảng cáo Shopee không?', 'a' => 'Có. Tùy chương trình, học viên có thể được hướng dẫn cách chọn sản phẩm, đặt ngân sách, đọc chỉ số và tối ưu chiến dịch quảng cáo theo mục tiêu.' ),
            array( 'q' => 'Sau khóa học có được hỗ trợ thêm không?', 'a' => 'Có. MEXO GROUP có thể hỗ trợ giải đáp trong phạm vi chương trình và tư vấn hướng triển khai tiếp theo nếu doanh nghiệp cần đồng hành sâu hơn.' ),
            array( 'q' => 'Doanh nghiệp có thể đặt lịch đào tạo riêng không?', 'a' => 'Có. MEXO GROUP có thể thiết kế buổi đào tạo theo ngành hàng, trình độ đội ngũ và vấn đề thực tế mà doanh nghiệp đang cần xử lý.' ),
        ),
        'khoa-hoc' => array(
            array( 'q' => 'Các khóa học TMĐT và AI tại MEXO GROUP gồm nội dung gì?', 'a' => 'Nội dung tập trung vào vận hành sàn, tối ưu gian hàng, quảng cáo, xây nội dung bán hàng và ứng dụng AI để tăng tốc quy trình thương mại điện tử.' ),
            array( 'q' => 'Khóa học AI có dành cho người không chuyên kỹ thuật không?', 'a' => 'Có. Chương trình ưu tiên cách ứng dụng AI vào công việc thực tế như viết nội dung, tạo hình ảnh, nghiên cứu thị trường, lập kế hoạch và tối ưu quy trình.' ),
            array( 'q' => 'Học xong có thể áp dụng cho Shopee và TikTok Shop không?', 'a' => 'Có. Kiến thức được xây theo tình huống bán hàng thực tế, giúp học viên áp dụng vào Shopee, TikTok Shop và các kênh thương mại điện tử phổ biến.' ),
            array( 'q' => 'Khóa học có tài liệu hoặc checklist không?', 'a' => 'Có. Học viên có thể nhận tài liệu, checklist hoặc mẫu triển khai tùy theo chương trình để dễ thực hành sau buổi học.' ),
            array( 'q' => 'Có khóa học cho đội ngũ doanh nghiệp không?', 'a' => 'Có. MEXO GROUP có thể xây chương trình đào tạo riêng cho team vận hành, marketing, chăm sóc khách hàng hoặc quản lý kinh doanh.' ),
            array( 'q' => 'Nội dung khóa học có cập nhật theo xu hướng mới không?', 'a' => 'Có. Các chủ đề về AI, chính sách sàn, quảng cáo và hành vi người mua sẽ được cập nhật để học viên theo kịp bối cảnh TMĐT hiện tại.' ),
        ),
        'default' => array(
            array( 'q' => 'Dịch vụ có được tùy chỉnh theo từng doanh nghiệp không?', 'a' => 'Có. MEXO GROUP phân tích ngành hàng, nguồn lực, mục tiêu doanh thu và hiện trạng gian hàng để đề xuất phương án phù hợp.' ),
            array( 'q' => 'Bao lâu thì bắt đầu triển khai?', 'a' => 'Sau buổi tư vấn và thống nhất phạm vi công việc, đội ngũ có thể bắt đầu triển khai theo lịch đã xác nhận với doanh nghiệp.' ),
            array( 'q' => 'MEXO GROUP có báo cáo kết quả không?', 'a' => 'Có. Các hoạt động được theo dõi qua chỉ số vận hành, doanh thu, quảng cáo và chất lượng chuyển đổi tùy theo dịch vụ.' ),
            array( 'q' => 'Làm sao để nhận tư vấn?', 'a' => 'Bạn có thể để lại thông tin ở trang liên hệ hoặc gọi hotline để đội ngũ MEXO GROUP phân tích nhu cầu và đề xuất giải pháp.' ),
            array( 'q' => 'Dịch vụ có phù hợp với shop mới không?', 'a' => 'Có. Với shop mới, MEXO GROUP sẽ ưu tiên xây nền tảng đúng từ đầu trước khi mở rộng sang quảng cáo, chiến dịch và tối ưu tăng trưởng.' ),
            array( 'q' => 'Có thể kết hợp nhiều dịch vụ trong một lộ trình không?', 'a' => 'Có. Doanh nghiệp có thể kết hợp vận hành, thiết kế, quảng cáo, đào tạo và ứng dụng AI để tạo một lộ trình tăng trưởng đồng bộ hơn.' ),
        ),
    );

    return $sets[ $service ] ?? $sets['default'];
}

function mexo_current_faq_items() {
    $page_faq_sets = array(
        'livestream-auto-24-7'        => 'livestream',
        'xay-dung-shop-shopee'       => 'xay-shop',
        'trang-tri-gian-hang'        => 'trang-tri',
        'dich-vu-van-hanh-shopee'    => 'van-hanh',
        'dao-tao-shopee'             => 'dao-tao',
        'dich-vu-tang-follow'        => 'tang-follow',
        'dich-vu-shopee-mall'        => 'mall',
        'len-mall-shopee'            => 'mall',
        'khoa-hoc'                   => 'khoa-hoc',
    );

    foreach ( $page_faq_sets as $slug => $set ) {
        if ( is_page( $slug ) ) {
            return mexo_normalize_faq_items( mexo_service_faq_items( $set ) );
        }
    }

    return mexo_normalize_faq_items( mexo_default_faq_items() );
}

function mexo_output_faq_styles() {
    ?>
<style id="mexo-faq-component-css">
.mexo-faq-section {
    position: relative;
    background: #fff !important;
}
html.dark .mexo-faq-section {
    background: #111827 !important;
    background-image:
        radial-gradient(circle at 20% 0%, rgba(0, 87, 255, 0.14), transparent 32%),
        linear-gradient(180deg, #111827 0%, #0f172a 100%) !important;
}
.mexo-faq-section > div {
    max-width: 72rem !important;
}
.mexo-faq-eyebrow {
    display: inline-block;
    color: #0057ff;
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}
html.dark .mexo-faq-eyebrow { color: #60a5fa; }
.mexo-faq-title {
    color: #0f172a;
    font-size: clamp(1.75rem, 2.6vw, 2.25rem);
    line-height: 1.22;
    font-weight: 900;
}
html.dark .mexo-faq-title { color: #fff; }
.mexo-faq-underline {
    width: 64px;
    height: 3px;
    border-radius: 999px;
    background: #0057ff;
    margin: 1.25rem auto 0;
}
html.dark .mexo-faq-underline {
    background: linear-gradient(90deg, #60a5fa, #f97316);
}
.mexo-faq-list {
    display: grid;
    gap: 0.875rem;
}
.mexo-faq-item {
    background: #f8fafc;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 0.875rem;
    overflow: hidden;
    transition: background-color .2s ease, border-color .2s ease, box-shadow .2s ease, transform .2s ease;
}
.mexo-faq-item[open] {
    background: #fff;
    border-color: rgba(0, 87, 255, 0.16);
    box-shadow: 0 22px 60px rgba(15, 23, 42, 0.10);
}
html.dark .mexo-faq-item {
    background: rgba(15, 23, 42, 0.94);
    border-color: rgba(96, 165, 250, 0.24);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.03);
}
html.dark .mexo-faq-item[open] {
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.98), rgba(30, 41, 59, 0.92));
    border-color: rgba(96, 165, 250, 0.55);
    box-shadow: 0 18px 48px rgba(0, 0, 0, 0.32), inset 0 1px 0 rgba(255, 255, 255, 0.04);
}
.mexo-faq-question {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    cursor: pointer;
    list-style: none;
    padding: 1rem 1.125rem;
}
.mexo-faq-question::-webkit-details-marker { display: none; }
.mexo-faq-number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 1.75rem;
    height: 1.75rem;
    flex: 0 0 1.75rem;
    border-radius: 999px;
    border: 1.5px solid #0057ff;
    color: #0057ff;
    font-weight: 800;
    font-size: 0.85rem;
    background: #fff;
}
html.dark .mexo-faq-number {
    background: rgba(0, 87, 255, 0.16);
    border-color: rgba(96, 165, 250, 0.72);
    color: #93c5fd;
}
.mexo-faq-question-text {
    flex: 1;
    color: #0f172a;
    font-size: 0.98rem;
    line-height: 1.45;
    font-weight: 800;
}
html.dark .mexo-faq-question-text { color: #f8fafc; }
.mexo-faq-icon {
    color: #94a3b8;
    font-size: 1.25rem;
    transition: transform .2s ease, color .2s ease;
}
.mexo-faq-item[open] .mexo-faq-icon {
    transform: rotate(180deg);
    color: #0057ff;
}
html.dark .mexo-faq-item[open] .mexo-faq-icon { color: #60a5fa; }
.mexo-faq-answer {
    display: flex;
    gap: 0.7rem;
    padding: 0 1.125rem 1.125rem 3.625rem;
    color: #405a9d;
}
.mexo-faq-answer-icon {
    color: #00b84f;
    font-size: 1.05rem;
    margin-top: 0.1rem;
}
.mexo-faq-answer p {
    margin: 0;
    color: #405a9d;
    font-size: 0.92rem;
    line-height: 1.65;
    font-weight: 500;
}
html.dark .mexo-faq-answer p { color: #cbd5e1; }
@media (min-width: 900px) {
    .mexo-faq-list { grid-template-columns: repeat(2, minmax(0, 1fr)); align-items: start; }
}
@media (max-width: 640px) {
    .mexo-faq-title { font-size: 1.65rem; }
    .mexo-faq-question { padding: 0.95rem; gap: 0.7rem; }
    .mexo-faq-number { width: 1.65rem; height: 1.65rem; flex-basis: 1.65rem; }
    .mexo-faq-question-text { font-size: 0.94rem; }
    .mexo-faq-answer { padding: 0 0.95rem 1rem 3.3rem; }
    .mexo-faq-answer p { font-size: 0.9rem; }
}
</style>
    <?php
}
add_action( 'wp_head', 'mexo_output_faq_styles', 25 );

function mexo_output_service_dark_overrides() {
    ?>
<style id="mexo-service-dark-overrides">
html.dark body.page-template-dich-vu-shopee-mall,
html.dark body.page-template-trang-tri-banner,
html.dark body.page-template-dich-vu-tang-follow {
    background: #0f172a !important;
    color: #e5e7eb !important;
}
html.dark body.page-template-dich-vu-shopee-mall section,
html.dark body.page-template-trang-tri-banner section,
html.dark body.page-template-dich-vu-tang-follow section {
    background-color: #0f172a !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-white,
html.dark body.page-template-dich-vu-shopee-mall .bg-slate-50,
html.dark body.page-template-dich-vu-shopee-mall .bg-gray-50,
html.dark body.page-template-dich-vu-shopee-mall .bg-background-off,
html.dark body.page-template-dich-vu-shopee-mall .bg-background-light,
html.dark body.page-template-trang-tri-banner .bg-white,
html.dark body.page-template-trang-tri-banner .bg-slate-50,
html.dark body.page-template-trang-tri-banner .bg-gray-50,
html.dark body.page-template-trang-tri-banner .bg-background-light,
html.dark body.page-template-dich-vu-tang-follow .bg-white,
html.dark body.page-template-dich-vu-tang-follow .bg-slate-50,
html.dark body.page-template-dich-vu-tang-follow .bg-gray-50,
html.dark body.page-template-dich-vu-tang-follow .bg-blue-50,
html.dark body.page-template-dich-vu-tang-follow .bg-blue-50\/50 {
    background-color: #111827 !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-gray-100,
html.dark body.page-template-dich-vu-shopee-mall .bg-gray-50,
html.dark body.page-template-dich-vu-shopee-mall .bg-blue-50,
html.dark body.page-template-trang-tri-banner .bg-gray-100,
html.dark body.page-template-trang-tri-banner .bg-gray-50,
html.dark body.page-template-trang-tri-banner .bg-blue-50,
html.dark body.page-template-trang-tri-banner .bg-green-50,
html.dark body.page-template-trang-tri-banner .bg-orange-50,
html.dark body.page-template-dich-vu-tang-follow .bg-gray-100,
html.dark body.page-template-dich-vu-tang-follow .bg-blue-50 {
    background-color: #1e293b !important;
}
html.dark body.page-template-dich-vu-shopee-mall .text-gray-900,
html.dark body.page-template-dich-vu-shopee-mall .text-slate-900,
html.dark body.page-template-dich-vu-shopee-mall .text-gray-800,
html.dark body.page-template-trang-tri-banner .text-gray-900,
html.dark body.page-template-trang-tri-banner .text-gray-800,
html.dark body.page-template-dich-vu-tang-follow .text-gray-900,
html.dark body.page-template-dich-vu-tang-follow .text-gray-800,
html.dark body.page-template-dich-vu-tang-follow .text-\[\#0d121c\] {
    color: #f8fafc !important;
}
html.dark body.page-template-dich-vu-shopee-mall .text-gray-700,
html.dark body.page-template-dich-vu-shopee-mall .text-gray-600,
html.dark body.page-template-dich-vu-shopee-mall .text-gray-500,
html.dark body.page-template-dich-vu-shopee-mall .text-slate-600,
html.dark body.page-template-trang-tri-banner .text-gray-700,
html.dark body.page-template-trang-tri-banner .text-gray-600,
html.dark body.page-template-trang-tri-banner .text-gray-500,
html.dark body.page-template-trang-tri-banner .text-gray-400,
html.dark body.page-template-dich-vu-tang-follow .text-gray-700,
html.dark body.page-template-dich-vu-tang-follow .text-gray-600,
html.dark body.page-template-dich-vu-tang-follow .text-gray-500 {
    color: #cbd5e1 !important;
}
html.dark body.page-template-dich-vu-shopee-mall .border-gray-50,
html.dark body.page-template-dich-vu-shopee-mall .border-gray-100,
html.dark body.page-template-dich-vu-shopee-mall .border-gray-200,
html.dark body.page-template-trang-tri-banner .border-gray-50,
html.dark body.page-template-trang-tri-banner .border-gray-100,
html.dark body.page-template-trang-tri-banner .border-gray-200,
html.dark body.page-template-dich-vu-tang-follow .border-gray-100,
html.dark body.page-template-dich-vu-tang-follow .border-gray-200,
html.dark body.page-template-dich-vu-tang-follow .border-blue-100 {
    border-color: rgba(96, 165, 250, 0.22) !important;
}
html.dark body.page-template-dich-vu-shopee-mall .shadow-xl,
html.dark body.page-template-dich-vu-shopee-mall .shadow-2xl,
html.dark body.page-template-trang-tri-banner .shadow-xl,
html.dark body.page-template-trang-tri-banner .shadow-2xl,
html.dark body.page-template-dich-vu-tang-follow .shadow-xl,
html.dark body.page-template-dich-vu-tang-follow .shadow-2xl {
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.32) !important;
}
html.dark body.page-template-dich-vu-tang-follow section:first-of-type {
    background-image: linear-gradient(180deg, #0f172a 0%, #111827 52%, #0f172a 100%) !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-yellow-50,
html.dark body.page-template-dich-vu-shopee-mall .bg-red-50,
html.dark body.page-template-dich-vu-shopee-mall .bg-green-50,
html.dark body.page-template-dich-vu-shopee-mall .bg-blue-100,
html.dark body.page-template-dich-vu-shopee-mall .bg-blue-50\/50,
html.dark body.page-template-dich-vu-shopee-mall .bg-orange-100\/30,
html.dark body.page-template-dich-vu-shopee-mall .bg-blue-100\/30 {
    background-color: rgba(30, 41, 59, 0.94) !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-gradient-to-br,
html.dark body.page-template-dich-vu-shopee-mall .bg-gradient-to-b {
    background-image: linear-gradient(135deg, rgba(15, 23, 42, 0.98), rgba(30, 41, 59, 0.92)) !important;
}
html.dark body.page-template-dich-vu-shopee-mall .text-primary,
html.dark body.page-template-dich-vu-shopee-mall .text-blue-600,
html.dark body.page-template-dich-vu-shopee-mall .text-accent {
    color: #60a5fa !important;
}
html.dark body.page-template-dich-vu-shopee-mall .text-shopee,
html.dark body.page-template-dich-vu-shopee-mall .text-red-500,
html.dark body.page-template-dich-vu-shopee-mall .text-orange-500 {
    color: #fb923c !important;
}
html.dark body.page-template-dich-vu-shopee-mall .text-yellow-500 {
    color: #facc15 !important;
}
html.dark body.page-template-dich-vu-shopee-mall .text-green-500,
html.dark body.page-template-dich-vu-shopee-mall .text-green-600 {
    color: #4ade80 !important;
}
html.dark body.page-template-dich-vu-shopee-mall p,
html.dark body.page-template-dich-vu-shopee-mall li,
html.dark body.page-template-dich-vu-shopee-mall label,
html.dark body.page-template-dich-vu-shopee-mall .text-\[13px\],
html.dark body.page-template-dich-vu-shopee-mall .text-\[12px\],
html.dark body.page-template-dich-vu-shopee-mall .text-\[11px\] {
    color: #dbeafe !important;
}
html.dark body.page-template-dich-vu-shopee-mall strong,
html.dark body.page-template-dich-vu-shopee-mall h2,
html.dark body.page-template-dich-vu-shopee-mall h3,
html.dark body.page-template-dich-vu-shopee-mall h4,
html.dark body.page-template-dich-vu-shopee-mall h5,
html.dark body.page-template-dich-vu-shopee-mall .font-bold {
    color: #ffffff !important;
}
html.dark body.page-template-dich-vu-shopee-mall input,
html.dark body.page-template-dich-vu-shopee-mall select,
html.dark body.page-template-dich-vu-shopee-mall textarea,
html.dark body.page-template-dich-vu-shopee-mall .radio-content {
    background-color: #0f172a !important;
    border-color: rgba(96, 165, 250, 0.42) !important;
    color: #f8fafc !important;
}
html.dark body.page-template-dich-vu-shopee-mall input::placeholder,
html.dark body.page-template-dich-vu-shopee-mall textarea::placeholder {
    color: #93a4bd !important;
}
html.dark body.page-template-dich-vu-shopee-mall .rounded-\[2rem\],
html.dark body.page-template-dich-vu-shopee-mall .rounded-\[2\.5rem\],
html.dark body.page-template-dich-vu-shopee-mall .rounded-3xl,
html.dark body.page-template-dich-vu-shopee-mall .rounded-\[1\.2rem\] {
    border-color: rgba(96, 165, 250, 0.3) !important;
}
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-white"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-slate-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-gray-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-gray-100"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-blue-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-blue-100"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-yellow-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-orange-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-green-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-white"],
html.dark body.page-template-trang-tri-banner [class*="bg-slate-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-gray-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-gray-100"],
html.dark body.page-template-trang-tri-banner [class*="bg-blue-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-blue-100"],
html.dark body.page-template-trang-tri-banner [class*="bg-pink-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-green-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-orange-50"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-white"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-slate-50"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-gray-50"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-gray-100"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-blue-50"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-blue-100"] {
    background-color: #111827 !important;
}
html.dark body.page-template-dich-vu-shopee-mall [class*="from-white"],
html.dark body.page-template-dich-vu-shopee-mall [class*="via-white"],
html.dark body.page-template-dich-vu-shopee-mall [class*="to-white"],
html.dark body.page-template-trang-tri-banner [class*="from-white"],
html.dark body.page-template-trang-tri-banner [class*="via-white"],
html.dark body.page-template-trang-tri-banner [class*="to-white"],
html.dark body.page-template-dich-vu-tang-follow [class*="from-white"],
html.dark body.page-template-dich-vu-tang-follow [class*="via-white"],
html.dark body.page-template-dich-vu-tang-follow [class*="to-white"] {
    --tw-gradient-from: #0f172a var(--tw-gradient-from-position) !important;
    --tw-gradient-via: #111827 var(--tw-gradient-via-position) !important;
    --tw-gradient-to: #0f172a var(--tw-gradient-to-position) !important;
}
html.dark body.page-template-dich-vu-shopee-mall [class*="text-gray-"],
html.dark body.page-template-dich-vu-shopee-mall [class*="text-slate-"],
html.dark body.page-template-trang-tri-banner [class*="text-gray-"],
html.dark body.page-template-trang-tri-banner [class*="text-slate-"],
html.dark body.page-template-dich-vu-tang-follow [class*="text-gray-"],
html.dark body.page-template-dich-vu-tang-follow [class*="text-slate-"],
html.dark body.page-template-dich-vu-tang-follow [class*="text-[#0d121c]"] {
    color: #e5e7eb !important;
}
html.dark body.page-template-dich-vu-shopee-mall h1,
html.dark body.page-template-dich-vu-shopee-mall h2,
html.dark body.page-template-dich-vu-shopee-mall h3,
html.dark body.page-template-dich-vu-shopee-mall h4,
html.dark body.page-template-trang-tri-banner h1,
html.dark body.page-template-trang-tri-banner h2,
html.dark body.page-template-trang-tri-banner h3,
html.dark body.page-template-trang-tri-banner h4,
html.dark body.page-template-dich-vu-tang-follow h1,
html.dark body.page-template-dich-vu-tang-follow h2,
html.dark body.page-template-dich-vu-tang-follow h3,
html.dark body.page-template-dich-vu-tang-follow h4 {
    color: #ffffff !important;
    text-shadow: none !important;
}
html.dark body.page-template-dich-vu-shopee-mall p,
html.dark body.page-template-dich-vu-shopee-mall li,
html.dark body.page-template-trang-tri-banner p,
html.dark body.page-template-trang-tri-banner li,
html.dark body.page-template-dich-vu-tang-follow p,
html.dark body.page-template-dich-vu-tang-follow li {
    color: #dbeafe !important;
}
html.dark body.page-template-dich-vu-shopee-mall .text-primary,
html.dark body.page-template-trang-tri-banner .text-primary,
html.dark body.page-template-dich-vu-tang-follow .text-primary {
    color: #60a5fa !important;
}
html.dark body.page-template-trang-tri-banner .text-secondary,
html.dark body.page-template-trang-tri-banner .text-orange-500,
html.dark body.page-template-trang-tri-banner .text-orange-600,
html.dark body.page-template-dich-vu-tang-follow .text-orange-500,
html.dark body.page-template-dich-vu-tang-follow .text-red-600 {
    color: #fb923c !important;
}
html.dark body.page-template-dich-vu-shopee-mall [class*="border-gray-"],
html.dark body.page-template-trang-tri-banner [class*="border-gray-"],
html.dark body.page-template-dich-vu-tang-follow [class*="border-gray-"],
html.dark body.page-template-dich-vu-tang-follow [class*="border-blue-"] {
    border-color: rgba(96, 165, 250, 0.28) !important;
}
html.dark body.page-template-trang-tri-banner .pricing-list-item,
html.dark body.page-template-trang-tri-banner .pricing-list-item *,
html.dark body.page-template-trang-tri-banner .space-y-3 > div,
html.dark body.page-template-trang-tri-banner .space-y-4 > div,
html.dark body.page-template-trang-tri-banner ul li,
html.dark body.page-template-dich-vu-shopee-mall ul li,
html.dark body.page-template-dich-vu-tang-follow ul li {
    color: #f8fafc !important;
    opacity: 1 !important;
}
html.dark body.page-template-trang-tri-banner .pricing-list-icon {
    color: #ffffff !important;
    opacity: 1 !important;
}
html.dark body.page-template-trang-tri-banner p,
html.dark body.page-template-trang-tri-banner span,
html.dark body.page-template-trang-tri-banner a,
html.dark body.page-template-dich-vu-shopee-mall p,
html.dark body.page-template-dich-vu-shopee-mall span,
html.dark body.page-template-dich-vu-shopee-mall a,
html.dark body.page-template-dich-vu-tang-follow p,
html.dark body.page-template-dich-vu-tang-follow span,
html.dark body.page-template-dich-vu-tang-follow a {
    opacity: 1 !important;
}
html.dark body.page-template-trang-tri-banner .text-\[10px\],
html.dark body.page-template-trang-tri-banner .text-xs,
html.dark body.page-template-trang-tri-banner .text-sm,
html.dark body.page-template-dich-vu-shopee-mall .text-\[10px\],
html.dark body.page-template-dich-vu-shopee-mall .text-xs,
html.dark body.page-template-dich-vu-shopee-mall .text-sm,
html.dark body.page-template-dich-vu-tang-follow .text-xs,
html.dark body.page-template-dich-vu-tang-follow .text-sm {
    color: #e2e8f0 !important;
}
html.dark body.page-template-trang-tri-banner .bg-blue-50\/50,
html.dark body.page-template-trang-tri-banner .bg-orange-100,
html.dark body.page-template-trang-tri-banner .bg-blue-100,
html.dark body.page-template-dich-vu-shopee-mall .bg-yellow-50,
html.dark body.page-template-dich-vu-shopee-mall .bg-blue-50,
html.dark body.page-template-dich-vu-shopee-mall .bg-red-50,
html.dark body.page-template-dich-vu-tang-follow .bg-white\/80 {
    background-color: rgba(30, 41, 59, 0.98) !important;
}
html.dark body.page-template-trang-tri-banner .bg-gray-300,
html.dark body.page-template-trang-tri-banner .text-gray-600 {
    color: #cbd5e1 !important;
}
</style>
    <?php
}
add_action( 'wp_head', 'mexo_output_service_dark_overrides', 28 );

function mexo_output_service_dark_footer_polish() {
    ?>
<style id="mexo-service-dark-footer-polish">
html.dark body.page-template-trang-tri-banner,
html.dark body.page-template-dich-vu-tang-follow,
html.dark body.page-template-dich-vu-shopee-mall {
    background: #0b1220 !important;
    color: #eef2ff !important;
}
html.dark body.page-template-trang-tri-banner section,
html.dark body.page-template-dich-vu-tang-follow section,
html.dark body.page-template-dich-vu-shopee-mall section {
    background-color: #0b1220 !important;
}
html.dark body.page-template-trang-tri-banner section:nth-of-type(even),
html.dark body.page-template-dich-vu-tang-follow section:nth-of-type(even),
html.dark body.page-template-dich-vu-shopee-mall section:nth-of-type(even) {
    background-color: #0f172a !important;
}
html.dark body.page-template-trang-tri-banner .bg-white,
html.dark body.page-template-trang-tri-banner [class*="bg-white"],
html.dark body.page-template-trang-tri-banner [class*="bg-slate-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-gray-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-gray-100"],
html.dark body.page-template-trang-tri-banner [class*="bg-blue-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-blue-100"],
html.dark body.page-template-trang-tri-banner [class*="bg-orange-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-orange-100"],
html.dark body.page-template-trang-tri-banner [class*="bg-green-50"],
html.dark body.page-template-trang-tri-banner [class*="bg-pink-50"],
html.dark body.page-template-dich-vu-tang-follow .bg-white,
html.dark body.page-template-dich-vu-tang-follow [class*="bg-white"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-slate-50"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-gray-50"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-gray-100"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-blue-50"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-blue-100"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-red-50"],
html.dark body.page-template-dich-vu-tang-follow [class*="bg-green-50"],
html.dark body.page-template-dich-vu-shopee-mall .bg-white,
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-white"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-slate-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-gray-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-gray-100"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-blue-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-blue-100"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-yellow-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-orange-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-red-50"],
html.dark body.page-template-dich-vu-shopee-mall [class*="bg-green-50"] {
    background-color: #111c2f !important;
    background-image: linear-gradient(180deg, rgba(30, 41, 59, 0.98), rgba(15, 23, 42, 0.98)) !important;
    border-color: rgba(96, 165, 250, 0.24) !important;
    box-shadow: 0 18px 55px rgba(0, 0, 0, 0.28) !important;
}
html.dark body.page-template-trang-tri-banner [class*="from-white"],
html.dark body.page-template-trang-tri-banner [class*="via-white"],
html.dark body.page-template-trang-tri-banner [class*="to-white"],
html.dark body.page-template-dich-vu-tang-follow [class*="from-white"],
html.dark body.page-template-dich-vu-tang-follow [class*="via-white"],
html.dark body.page-template-dich-vu-tang-follow [class*="to-white"],
html.dark body.page-template-dich-vu-shopee-mall [class*="from-white"],
html.dark body.page-template-dich-vu-shopee-mall [class*="via-white"],
html.dark body.page-template-dich-vu-shopee-mall [class*="to-white"] {
    --tw-gradient-from: #111c2f var(--tw-gradient-from-position) !important;
    --tw-gradient-via: #0f172a var(--tw-gradient-via-position) !important;
    --tw-gradient-to: #0b1220 var(--tw-gradient-to-position) !important;
}
html.dark body.page-template-trang-tri-banner h1,
html.dark body.page-template-trang-tri-banner h2,
html.dark body.page-template-trang-tri-banner h3,
html.dark body.page-template-trang-tri-banner h4,
html.dark body.page-template-trang-tri-banner h5,
html.dark body.page-template-trang-tri-banner .font-bold,
html.dark body.page-template-trang-tri-banner .font-semibold,
html.dark body.page-template-dich-vu-tang-follow h1,
html.dark body.page-template-dich-vu-tang-follow h2,
html.dark body.page-template-dich-vu-tang-follow h3,
html.dark body.page-template-dich-vu-tang-follow h4,
html.dark body.page-template-dich-vu-tang-follow h5,
html.dark body.page-template-dich-vu-tang-follow .font-bold,
html.dark body.page-template-dich-vu-tang-follow .font-semibold,
html.dark body.page-template-dich-vu-shopee-mall h1,
html.dark body.page-template-dich-vu-shopee-mall h2,
html.dark body.page-template-dich-vu-shopee-mall h3,
html.dark body.page-template-dich-vu-shopee-mall h4,
html.dark body.page-template-dich-vu-shopee-mall h5,
html.dark body.page-template-dich-vu-shopee-mall .font-bold,
html.dark body.page-template-dich-vu-shopee-mall .font-semibold {
    color: #f8fafc !important;
    opacity: 1 !important;
}
html.dark body.page-template-trang-tri-banner p,
html.dark body.page-template-trang-tri-banner li,
html.dark body.page-template-trang-tri-banner label,
html.dark body.page-template-trang-tri-banner .pricing-list-item,
html.dark body.page-template-trang-tri-banner .pricing-list-item *,
html.dark body.page-template-dich-vu-tang-follow p,
html.dark body.page-template-dich-vu-tang-follow li,
html.dark body.page-template-dich-vu-tang-follow label,
html.dark body.page-template-dich-vu-shopee-mall p,
html.dark body.page-template-dich-vu-shopee-mall li,
html.dark body.page-template-dich-vu-shopee-mall label {
    color: #dbeafe !important;
    opacity: 1 !important;
}
html.dark body.page-template-trang-tri-banner [class*="text-gray-"],
html.dark body.page-template-trang-tri-banner [class*="text-slate-"],
html.dark body.page-template-dich-vu-tang-follow [class*="text-gray-"],
html.dark body.page-template-dich-vu-tang-follow [class*="text-slate-"],
html.dark body.page-template-dich-vu-tang-follow [class*="text-[#0d121c]"],
html.dark body.page-template-dich-vu-shopee-mall [class*="text-gray-"],
html.dark body.page-template-dich-vu-shopee-mall [class*="text-slate-"] {
    color: #e2e8f0 !important;
    opacity: 1 !important;
}
html.dark body.page-template-trang-tri-banner .text-xs,
html.dark body.page-template-trang-tri-banner .text-sm,
html.dark body.page-template-trang-tri-banner .text-\[10px\],
html.dark body.page-template-trang-tri-banner .text-\[11px\],
html.dark body.page-template-trang-tri-banner .text-\[12px\],
html.dark body.page-template-trang-tri-banner .text-\[13px\],
html.dark body.page-template-dich-vu-tang-follow .text-xs,
html.dark body.page-template-dich-vu-tang-follow .text-sm,
html.dark body.page-template-dich-vu-tang-follow .text-\[10px\],
html.dark body.page-template-dich-vu-tang-follow .text-\[11px\],
html.dark body.page-template-dich-vu-tang-follow .text-\[12px\],
html.dark body.page-template-dich-vu-tang-follow .text-\[13px\],
html.dark body.page-template-dich-vu-shopee-mall .text-xs,
html.dark body.page-template-dich-vu-shopee-mall .text-sm,
html.dark body.page-template-dich-vu-shopee-mall .text-\[10px\],
html.dark body.page-template-dich-vu-shopee-mall .text-\[11px\],
html.dark body.page-template-dich-vu-shopee-mall .text-\[12px\],
html.dark body.page-template-dich-vu-shopee-mall .text-\[13px\] {
    color: #cbd5e1 !important;
}
html.dark body.page-template-trang-tri-banner .text-blue-600,
html.dark body.page-template-trang-tri-banner .text-primary,
html.dark body.page-template-dich-vu-tang-follow .text-blue-600,
html.dark body.page-template-dich-vu-tang-follow .text-primary,
html.dark body.page-template-dich-vu-shopee-mall .text-blue-600,
html.dark body.page-template-dich-vu-shopee-mall .text-primary {
    color: #60a5fa !important;
}
html.dark body.page-template-trang-tri-banner .text-orange-500,
html.dark body.page-template-trang-tri-banner .text-orange-600,
html.dark body.page-template-trang-tri-banner .text-secondary,
html.dark body.page-template-dich-vu-tang-follow .text-orange-500,
html.dark body.page-template-dich-vu-tang-follow .text-red-600,
html.dark body.page-template-dich-vu-shopee-mall .text-orange-500,
html.dark body.page-template-dich-vu-shopee-mall .text-shopee,
html.dark body.page-template-dich-vu-shopee-mall .text-accent {
    color: #fb923c !important;
}
html.dark body.page-template-trang-tri-banner .text-green-500,
html.dark body.page-template-trang-tri-banner .text-green-600,
html.dark body.page-template-dich-vu-tang-follow .text-green-500,
html.dark body.page-template-dich-vu-tang-follow .text-green-600,
html.dark body.page-template-dich-vu-shopee-mall .text-green-500,
html.dark body.page-template-dich-vu-shopee-mall .text-green-600 {
    color: #4ade80 !important;
}
html.dark body.page-template-trang-tri-banner .pricing-list-icon,
html.dark body.page-template-trang-tri-banner .pricing-list-icon * {
    color: #ffffff !important;
    background-image: none !important;
}
html.dark body.page-template-trang-tri-banner button,
html.dark body.page-template-dich-vu-tang-follow button,
html.dark body.page-template-dich-vu-shopee-mall button,
html.dark body.page-template-trang-tri-banner a[href],
html.dark body.page-template-dich-vu-tang-follow a[href],
html.dark body.page-template-dich-vu-shopee-mall a[href] {
    opacity: 1 !important;
}
html.dark body.page-template-trang-tri-banner button:not([class*="bg-gradient"]):not([class*="bg-secondary"]):not([class*="bg-primary"]),
html.dark body.page-template-dich-vu-tang-follow button:not([class*="bg-gradient"]):not([class*="bg-primary"]),
html.dark body.page-template-dich-vu-shopee-mall button:not([class*="bg-primary"]) {
    background-color: rgba(15, 23, 42, 0.78) !important;
    border-color: rgba(96, 165, 250, 0.65) !important;
    color: #93c5fd !important;
}
html.dark body.page-template-dich-vu-shopee-mall input,
html.dark body.page-template-dich-vu-shopee-mall select,
html.dark body.page-template-dich-vu-shopee-mall textarea,
html.dark body.page-template-dich-vu-tang-follow input,
html.dark body.page-template-dich-vu-tang-follow select,
html.dark body.page-template-dich-vu-tang-follow textarea {
    background-color: #0b1220 !important;
    border-color: rgba(96, 165, 250, 0.42) !important;
    color: #f8fafc !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#FFFBF0\],
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#F0F7FF\],
html.dark body.page-template-dich-vu-tang-follow .bg-amber-50,
html.dark body.page-template-dich-vu-tang-follow .bg-sky-50 {
    background: linear-gradient(145deg, rgba(17, 28, 47, 0.98), rgba(15, 23, 42, 0.96)) !important;
    border-color: rgba(96, 165, 250, 0.36) !important;
    box-shadow: 0 22px 70px rgba(0, 0, 0, 0.34) !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#FFFBF0\],
html.dark body.page-template-dich-vu-tang-follow .bg-amber-50 {
    border-color: rgba(251, 191, 36, 0.45) !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#F0F7FF\],
html.dark body.page-template-dich-vu-tang-follow .bg-sky-50 {
    border-color: rgba(56, 189, 248, 0.45) !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#FFFBF0\] h3,
html.dark body.page-template-dich-vu-tang-follow .bg-amber-50 h3 {
    color: #fbbf24 !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#F0F7FF\] h3,
html.dark body.page-template-dich-vu-tang-follow .bg-sky-50 h3 {
    color: #7dd3fc !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#FFFBF0\] li,
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#FFFBF0\] li span:not(.material-symbols-outlined),
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#F0F7FF\] li,
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#F0F7FF\] li span:not(.material-symbols-outlined),
html.dark body.page-template-dich-vu-tang-follow .bg-amber-50 li,
html.dark body.page-template-dich-vu-tang-follow .bg-amber-50 li span:not(.material-symbols-outlined),
html.dark body.page-template-dich-vu-tang-follow .bg-sky-50 li,
html.dark body.page-template-dich-vu-tang-follow .bg-sky-50 li span:not(.material-symbols-outlined) {
    color: #eaf2ff !important;
    opacity: 1 !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#FFFBF0\] .text-red-500 {
    color: #fb7185 !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#FFFBF0\] .material-symbols-outlined,
html.dark body.page-template-dich-vu-tang-follow .bg-amber-50 .material-symbols-outlined {
    color: #f59e0b !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#F0F7FF\] .material-symbols-outlined,
html.dark body.page-template-dich-vu-tang-follow .bg-sky-50 .material-symbols-outlined {
    color: #38bdf8 !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#F0F7FF\] .bg-primary .material-symbols-outlined,
html.dark body.page-template-dich-vu-tang-follow .bg-sky-50 .bg-primary .material-symbols-outlined {
    color: #ffffff !important;
}
html.dark body.page-template-dich-vu-shopee-mall .bg-\[\#F0F7FF\] .bg-primary,
html.dark body.page-template-dich-vu-tang-follow .bg-sky-50 .text-green-500 {
    color: #4ade80 !important;
}
</style>
    <?php
}
add_action( 'wp_footer', 'mexo_output_service_dark_footer_polish', 999 );

function mexo_redirect_legacy_service_slugs() {
    if ( ! is_404() || empty( $_SERVER['REQUEST_URI'] ) ) {
        return;
    }

    $path = trim( (string) wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ), '/' );
    $redirects = array(
        'khoa-hoc'             => 'dao-tao-shopee',
        'dich-vu-shopee-mall'  => 'len-mall-shopee',
    );

    if ( isset( $redirects[ $path ] ) ) {
        wp_safe_redirect( home_url( '/' . $redirects[ $path ] . '/' ), 301 );
        exit;
    }
}
add_action( 'template_redirect', 'mexo_redirect_legacy_service_slugs' );

function mexo_output_schema() {
    $canonical = mexo_get_canonical_url();
    $data = mexo_seo_page_data();
    $logo = mexo_get_og_image();

    mexo_schema_json( array(
        '@context' => 'https://schema.org',
        '@type'    => 'Organization',
        '@id'      => home_url( '/#organization' ),
        'name'     => 'MEXO GROUP',
        'url'      => home_url( '/' ),
        'logo'     => $logo,
        'email'    => 'mexoagency@gmail.com',
        'telephone'=> '0855.761.555',
        'address'  => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Tầng 2 B1.1 LK6 - 16 Khu Đô Thị Thanh Hà',
            'addressLocality' => 'Hà Nội',
            'addressCountry'  => 'VN',
        ),
        'sameAs'   => array(
            'https://www.facebook.com/buiphuc59535',
        ),
    ) );

    mexo_schema_json( mexo_build_breadcrumb_schema() );

    mexo_schema_json( array(
        '@context'    => 'https://schema.org',
        '@type'       => 'FAQPage',
        'mainEntity'  => array_map( function( $item ) {
            return array(
                '@type'          => 'Question',
                'name'           => $item['q'],
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => $item['a'],
                ),
            );
        }, mexo_current_faq_items() ),
    ) );

    if ( is_singular( 'post' ) ) {
        mexo_schema_json( array(
            '@context'         => 'https://schema.org',
            '@type'            => 'Article',
            'headline'         => get_the_title(),
            'description'      => $data['description'],
            'image'            => mexo_get_og_image(),
            'datePublished'    => get_the_date( DATE_W3C ),
            'dateModified'     => get_the_modified_date( DATE_W3C ),
            'author'           => array(
                '@type' => 'Person',
                'name'  => get_the_author(),
                'url'   => get_author_posts_url( get_the_author_meta( 'ID' ) ),
            ),
            'publisher'        => array(
                '@id' => home_url( '/#organization' ),
            ),
            'mainEntityOfPage' => $canonical,
        ) );
    }

    if ( is_page( array( 'dich-vu-van-hanh-shopee', 'xay-dung-shop-shopee', 'dao-tao-shopee' ) ) ) {
        mexo_schema_json( array(
            '@context'    => 'https://schema.org',
            '@type'       => 'Service',
            'name'        => get_the_title(),
            'description' => $data['description'],
            'provider'    => array( '@id' => home_url( '/#organization' ) ),
            'areaServed'  => 'Vietnam',
            'url'         => $canonical,
        ) );
    }
}
add_action( 'wp_head', 'mexo_output_schema', 30 );

function mexo_add_image_seo_attributes( $attr ) {
    $attr['loading'] = $attr['loading'] ?? 'lazy';
    $attr['decoding'] = 'async';

    if ( empty( $attr['alt'] ) && ! empty( $attr['title'] ) ) {
        $attr['alt'] = $attr['title'];
    }

    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'mexo_add_image_seo_attributes', 10 );

function mexo_content_image_lazyload( $content ) {
    if ( is_admin() || false === strpos( $content, '<img' ) ) {
        return $content;
    }

    $content = preg_replace( '/<img(?![^>]*loading=)/i', '<img loading="lazy"', $content );
    $content = preg_replace( '/<img(?![^>]*decoding=)/i', '<img decoding="async"', $content );

    return $content;
}
add_filter( 'the_content', 'mexo_content_image_lazyload', 12 );

function mexo_append_article_trust_box( $content ) {
    return $content;

    if ( ! is_singular( 'post' ) || is_admin() || ! in_the_loop() || ! is_main_query() ) {
        return $content;
    }

    $faq = mexo_default_faq_items();
    ob_start();
    ?>
<section class="mexo-article-eeat mt-10 rounded-2xl border border-slate-200 bg-slate-50 p-6">
    <h2 class="text-2xl font-extrabold text-slate-900 mb-3">Tóm tắt nhanh cho người bán</h2>
    <p class="text-slate-700 leading-relaxed">Nội dung được biên soạn bởi đội ngũ MEXO GROUP dựa trên kinh nghiệm vận hành TMĐT thực chiến, giúp người bán hiểu đúng bối cảnh và lựa chọn hành động phù hợp.</p>
    <div class="mt-6 grid gap-4 md:grid-cols-2">
        <?php foreach ( $faq as $item ) : ?>
        <div class="rounded-xl bg-white p-4 border border-slate-100">
            <h3 class="font-bold text-slate-900 mb-2"><?php echo esc_html( $item['q'] ); ?></h3>
            <p class="text-sm text-slate-600 leading-relaxed"><?php echo esc_html( $item['a'] ); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>
    <?php

    return $content . ob_get_clean();
}

function mexo_robots_txt( $output, $public ) {
    $output .= "Sitemap: " . home_url( '/wp-sitemap.xml' ) . "\n";
    $output .= "Allow: /wp-content/themes/mexo/assets/\n";

    return $output;
}
add_filter( 'robots_txt', 'mexo_robots_txt', 10, 2 );

function mexo_virtual_policy_pages() {
    $path = trim( parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );
    $pages = array(
        'chinh-sach-bao-mat' => array(
            'title' => 'Chính sách bảo mật',
            'body'  => 'MEXO GROUP tôn trọng quyền riêng tư của khách hàng. Thông tin liên hệ và nhu cầu tư vấn chỉ được sử dụng để phản hồi yêu cầu, tư vấn giải pháp thương mại điện tử và chăm sóc khách hàng. Chúng tôi không bán hoặc chia sẻ dữ liệu cá nhân cho bên thứ ba khi chưa có sự đồng ý hợp lệ.',
        ),
        'dieu-khoan' => array(
            'title' => 'Điều khoản sử dụng',
            'body'  => 'Khi sử dụng website MEXO GROUP, người dùng đồng ý truy cập thông tin với mục đích tham khảo, tư vấn và kết nối dịch vụ. Nội dung trên website có thể được cập nhật theo thực tế thị trường, chính sách sàn TMĐT và định hướng dịch vụ của doanh nghiệp.',
        ),
    );

    if ( ! isset( $pages[ $path ] ) ) {
        return;
    }

    status_header( 200 );
    get_header();
    $page = $pages[ $path ];
    ?>
<main class="bg-white dark:bg-slate-950 py-20">
    <article class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <nav class="mb-8 text-sm font-semibold text-slate-500">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-primary">Trang chủ</a>
            <span class="mx-2">/</span>
            <span><?php echo esc_html( $page['title'] ); ?></span>
        </nav>
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-950 dark:text-white mb-6"><?php echo esc_html( $page['title'] ); ?></h1>
        <div class="prose max-w-none text-lg leading-8 text-slate-700 dark:text-slate-300">
            <p><?php echo esc_html( $page['body'] ); ?></p>
            <h2>Thông tin liên hệ</h2>
            <p>Mọi yêu cầu liên quan đến dữ liệu, điều khoản hoặc tư vấn dịch vụ có thể gửi về email <a href="mailto:mexoagency@gmail.com">mexoagency@gmail.com</a> hoặc số điện thoại <a href="tel:0855761555">0855.761.555</a>.</p>
        </div>
    </article>
</main>
    <?php
    get_footer();
    exit;
}
add_action( 'template_redirect', 'mexo_virtual_policy_pages', 0 );

function mexo_output_interaction_effects() {
    if ( is_admin() ) {
        return;
    }
    ?>
<style id="mexo-interaction-effects">
@media (pointer: fine) and (hover: hover) and (prefers-reduced-motion: no-preference) {
    body.mexo-cursor-ready,
    body.mexo-cursor-ready a,
    body.mexo-cursor-ready button,
    body.mexo-cursor-ready [role="button"],
    body.mexo-cursor-ready input[type="submit"],
    body.mexo-cursor-ready input[type="button"] {
        cursor: none;
    }
    .mexo-cursor-dot,
    .mexo-cursor-ring {
        position: fixed;
        left: 0;
        top: 0;
        pointer-events: none;
        z-index: 2147483000;
        transform: translate3d(-50%, -50%, 0);
        opacity: 0;
        will-change: transform, opacity;
    }
    .mexo-cursor-dot {
        width: 8px;
        height: 8px;
        border-radius: 999px;
        background: linear-gradient(135deg, #0d59f2, #00c6ff);
        box-shadow: 0 0 18px rgba(13, 89, 242, 0.55);
        transition: opacity .18s ease, width .18s ease, height .18s ease, background .18s ease;
    }
    .mexo-cursor-ring {
        width: 34px;
        height: 34px;
        border-radius: 999px;
        border: 1px solid rgba(13, 89, 242, 0.45);
        background: rgba(13, 89, 242, 0.06);
        backdrop-filter: blur(2px);
        transition: opacity .18s ease, width .22s ease, height .22s ease, border-color .18s ease, background .18s ease;
    }
    body.mexo-cursor-ready .mexo-cursor-dot,
    body.mexo-cursor-ready .mexo-cursor-ring {
        opacity: 1;
    }
    body.mexo-cursor-hover .mexo-cursor-dot {
        width: 5px;
        height: 5px;
        background: #ffffff;
        box-shadow: 0 0 0 5px rgba(13, 89, 242, 0.32), 0 0 26px rgba(13, 89, 242, 0.7);
    }
    body.mexo-cursor-hover .mexo-cursor-ring {
        width: 54px;
        height: 54px;
        border-color: rgba(255, 107, 0, 0.72);
        background: rgba(255, 107, 0, 0.10);
    }
    body.mexo-cursor-down .mexo-cursor-ring {
        width: 42px;
        height: 42px;
        background: rgba(13, 89, 242, 0.16);
    }
}
.mexo-tap-ripple {
    position: fixed;
    width: 12px;
    height: 12px;
    left: 0;
    top: 0;
    pointer-events: none;
    z-index: 2147482999;
    border-radius: 999px;
    border: 2px solid rgba(13, 89, 242, 0.78);
    background: radial-gradient(circle, rgba(13, 89, 242, 0.28) 0%, rgba(0, 198, 255, 0.10) 48%, transparent 72%);
    transform: translate3d(-50%, -50%, 0) scale(0.35);
    animation: mexoTapRipple .56s cubic-bezier(.2, .8, .2, 1) forwards;
}
html.dark .mexo-tap-ripple {
    border-color: rgba(96, 165, 250, 0.95);
    background: radial-gradient(circle, rgba(96, 165, 250, 0.30) 0%, rgba(251, 146, 60, 0.14) 48%, transparent 72%);
}
@keyframes mexoTapRipple {
    0% { opacity: .95; transform: translate3d(-50%, -50%, 0) scale(.35); }
    70% { opacity: .38; }
    100% { opacity: 0; transform: translate3d(-50%, -50%, 0) scale(5.2); }
}
@media (prefers-reduced-motion: reduce) {
    .mexo-cursor-dot,
    .mexo-cursor-ring,
    .mexo-tap-ripple {
        display: none !important;
    }
}
</style>
<script id="mexo-interaction-effects">
(function () {
    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    var doc = document;
    var body = doc.body;
    if (!body) return;

    var finePointer = window.matchMedia && window.matchMedia('(pointer: fine) and (hover: hover)').matches;
    var coarsePointer = window.matchMedia && window.matchMedia('(pointer: coarse)').matches;
    var interactiveSelector = 'a, button, [role="button"], input[type="submit"], input[type="button"], .cursor-pointer, summary';

    if (finePointer) {
        var dot = doc.createElement('span');
        var ring = doc.createElement('span');
        dot.className = 'mexo-cursor-dot';
        ring.className = 'mexo-cursor-ring';
        body.appendChild(ring);
        body.appendChild(dot);

        var mouseX = window.innerWidth / 2;
        var mouseY = window.innerHeight / 2;
        var ringX = mouseX;
        var ringY = mouseY;
        var rafId = null;

        function renderCursor() {
            ringX += (mouseX - ringX) * 0.18;
            ringY += (mouseY - ringY) * 0.18;
            dot.style.transform = 'translate3d(' + mouseX + 'px,' + mouseY + 'px,0) translate(-50%, -50%)';
            ring.style.transform = 'translate3d(' + ringX + 'px,' + ringY + 'px,0) translate(-50%, -50%)';
            rafId = window.requestAnimationFrame(renderCursor);
        }

        doc.addEventListener('mousemove', function (event) {
            mouseX = event.clientX;
            mouseY = event.clientY;
            body.classList.add('mexo-cursor-ready');
            if (!rafId) {
                rafId = window.requestAnimationFrame(renderCursor);
            }
        }, { passive: true });

        doc.addEventListener('mouseover', function (event) {
            if (event.target && event.target.closest && event.target.closest(interactiveSelector)) {
                body.classList.add('mexo-cursor-hover');
            }
        }, { passive: true });

        doc.addEventListener('mouseout', function (event) {
            if (event.target && event.target.closest && event.target.closest(interactiveSelector)) {
                body.classList.remove('mexo-cursor-hover');
            }
        }, { passive: true });

        doc.addEventListener('mousedown', function () {
            body.classList.add('mexo-cursor-down');
        }, { passive: true });

        doc.addEventListener('mouseup', function () {
            body.classList.remove('mexo-cursor-down');
        }, { passive: true });

        doc.addEventListener('mouseleave', function () {
            body.classList.remove('mexo-cursor-ready', 'mexo-cursor-hover', 'mexo-cursor-down');
        }, { passive: true });
    }

    function addRipple(x, y) {
        var ripple = doc.createElement('span');
        ripple.className = 'mexo-tap-ripple';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        body.appendChild(ripple);
        window.setTimeout(function () {
            ripple.remove();
        }, 620);
    }

    if (coarsePointer) {
        doc.addEventListener('touchstart', function (event) {
            var touch = event.changedTouches && event.changedTouches[0];
            if (!touch) return;
            addRipple(touch.clientX, touch.clientY);
        }, { passive: true });
    } else {
        doc.addEventListener('click', function (event) {
            if (event.detail === 0) return;
            if (event.target && event.target.closest && event.target.closest(interactiveSelector)) {
                addRipple(event.clientX, event.clientY);
            }
        }, { passive: true });
    }
})();
</script>
    <?php
}
add_action( 'wp_footer', 'mexo_output_interaction_effects', 1001 );

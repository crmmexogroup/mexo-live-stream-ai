<?php
$mexo_footer_faq_map = array(
    'dich-vu-van-hanh-shopee' => array( 'title' => 'Câu hỏi thường gặp về vận hành Shopee', 'set' => 'van-hanh' ),
    'dich-vu-shopee-mall'     => array( 'title' => 'Câu hỏi thường gặp về Shopee Mall', 'set' => 'mall' ),
    'len-mall-shopee'         => array( 'title' => 'Câu hỏi thường gặp về lên Shopee Mall', 'set' => 'mall' ),
    'dich-vu-tang-follow'     => array( 'title' => 'Câu hỏi thường gặp về tăng follow và kháng vi phạm', 'set' => 'tang-follow' ),
    'dao-tao-shopee'          => array( 'title' => 'Câu hỏi thường gặp về đào tạo Shopee', 'set' => 'dao-tao' ),
    'khoa-hoc'                => array( 'title' => 'Câu hỏi thường gặp về khóa học TMĐT và AI', 'set' => 'khoa-hoc' ),
);

foreach ( $mexo_footer_faq_map as $mexo_footer_faq_slug => $mexo_footer_faq_data ) {
    if ( is_page( $mexo_footer_faq_slug ) ) {
        echo mexo_render_faq_accordion( $mexo_footer_faq_data['title'], mexo_service_faq_items( $mexo_footer_faq_data['set'] ) );
        break;
    }
}
?>
<footer class="bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-300 py-16 border-t border-slate-200 dark:border-slate-800">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12">
<div>
<h4 class="text-slate-900 dark:text-white font-bold text-lg mb-6 flex items-center">
                        Giải pháp của chúng tôi
                    </h4>
<ul class="space-y-4 text-sm font-medium">
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/trang-tri-gian-hang/"><span class="material-symbols-outlined text-base mr-2 text-slate-400">shopping_bag</span>Giải pháp tối ưu gian hàng</a></li>
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/dich-vu-van-hanh-shopee/"><span class="material-symbols-outlined text-base mr-2 text-slate-400">video_camera_front</span>Chiến lược quảng cáo hiệu quả</a></li>
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/xay-dung-shop-shopee/"><span class="material-symbols-outlined text-base mr-2 text-slate-400">school</span>Xây dựng thương hiệu số</a></li>
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/dich-vu-tang-follow/"><span class="material-symbols-outlined text-base mr-2 text-slate-400">movie</span>Media &amp; Booking KOLs</a></li>
</ul>
</div>
<div>
<h4 class="text-slate-900 dark:text-white font-bold text-lg mb-6">Đào tạo</h4>
<ul class="space-y-4 text-sm font-medium">
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/dao-tao-shopee/"><span class="material-symbols-outlined text-base mr-2 text-slate-400">storefront</span>Khóa học Thực chiến Shopee</a></li>
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/khoa-hoc/"><span class="material-symbols-outlined text-base mr-2 text-slate-400">ads_click</span>Khóa học Thực chiến Tiktok</a></li>
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/khoa-hoc/"><span class="material-symbols-outlined text-base mr-2 text-slate-400">fingerprint</span>Khóa học Thực chiến AI</a></li>
</ul>
</div>
<div>
<h4 class="text-slate-900 dark:text-white font-bold text-lg mb-6">Kiến thức &amp; Hỗ trợ</h4>
<ul class="space-y-4 text-sm font-medium">
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/blog/"><span class="material-symbols-outlined text-base mr-2 text-slate-400">article</span>Blog kiến thức</a></li>
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/blog/#faq"><span class="material-symbols-outlined text-base mr-2 text-slate-400">help</span>Câu hỏi thường gặp (FAQ)</a></li>
<li><a class="flex items-center hover:text-primary transition-colors hover:translate-x-1 duration-200" href="/lien-he/"><span class="material-symbols-outlined text-base mr-2 text-slate-400">support_agent</span>Hỗ trợ kỹ thuật</a></li>
</ul>
</div>
<div>
<h4 class="text-slate-900 dark:text-white font-bold text-lg mb-6">Liên hệ</h4>
<div class="flex flex-col gap-4">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-xl flex-shrink-0 mt-0.5">location_on</span>
<span class="text-sm leading-relaxed font-medium">
                        Tầng 2 B1.1 LK6 - 16 Khu Đô Thị Thanh Hà, Xã Bình Minh, TP. Hà Nội
                        <a class="inline-flex items-center ml-2 text-primary hover:text-primary-dark font-bold text-xs bg-primary/10 px-2 py-0.5 rounded-full transition-colors" href="https://maps.app.goo.gl/btoDhBjKuJNcSpny8" target="_blank">
<span class="material-symbols-outlined text-sm mr-1">map</span> Bản đồ
                        </a>
</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl flex-shrink-0">call</span>
<a class="font-bold text-lg text-slate-800 dark:text-white hover:text-primary transition-colors" href="tel:<?php echo esc_attr( get_theme_mod( 'mexo_footer_phone', '0855.761.555' ) ); ?>"><?php echo esc_html( get_theme_mod( 'mexo_footer_phone', '0855.761.555' ) ); ?></a>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl flex-shrink-0">mail</span>
<a class="text-sm font-medium hover:text-primary transition-colors" href="mailto:<?php echo esc_attr( get_theme_mod( 'mexo_footer_email', 'mexoagency@gmail.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'mexo_footer_email', 'mexoagency@gmail.com' ) ); ?></a>
</div>
<div class="pt-6 mt-4 border-t border-slate-100 dark:border-slate-800/50">
<h5 class="text-xs font-bold uppercase text-slate-400 mb-4 tracking-wider">Kết nối mạng xã hội</h5>
<div class="flex space-x-3">
<a class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition-colors shadow-sm transform hover:-translate-y-1" href="https://www.facebook.com/profile.php?id=61570878871996" target="_blank" rel="noopener noreferrer" aria-label="Facebook MEXO GROUP">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
</a>
<a class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center hover:bg-slate-800 transition-colors shadow-sm transform hover:-translate-y-1" href="https://www.tiktok.com/@phucthucchien" target="_blank" rel="noopener noreferrer" aria-label="TikTok MEXO GROUP">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path></svg>
</a>
<a class="w-10 h-10 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition-colors shadow-sm transform hover:-translate-y-1" href="https://www.youtube.com/@buiphuc87121" target="_blank" rel="noopener noreferrer" aria-label="YouTube MEXO GROUP">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="mt-12 pt-8 border-t border-slate-200 dark:border-slate-800">
<div class="flex flex-col md:flex-row justify-between items-center gap-6">
<div class="text-center md:text-left">
<h4 class="text-slate-900 dark:text-white font-bold text-sm uppercase mb-2">CÔNG TY TNHH MEXO GROUP</h4>
<p class="text-xs text-slate-500 leading-relaxed max-w-xl font-medium">
                            Mã số thuế: 0111153724 <br class="hidden sm:block"/>
                            Địa chỉ văn phòng: Tầng 2 B1.1 LK6 - 16 Khu Đô Thị Thanh Hà, Xã Bình Minh, TP. Hà Nội
                        </p>
</div>
<div class="flex gap-6 text-sm text-slate-500 font-medium">
<a class="hover:text-primary transition-colors" href="/dieu-khoan/">Điều khoản</a>
<a class="hover:text-primary transition-colors" href="/chinh-sach-bao-mat/">Bảo mật</a>
<span>© 2026 MEXO GROUP</span>
</div>
</div>
</div>
</div>
</footer>
<?php wp_footer(); ?>
<style id="mexo-footer-dark-final">
html.dark body footer,
html.dark body footer * {
    color: #ffffff !important;
}
html.dark body footer a,
html.dark body footer a:hover,
html.dark body footer a:focus,
html.dark body footer a:visited,
html.dark body footer .hover\:text-primary:hover,
html.dark body footer .hover\:text-primary-dark:hover {
    color: #ffffff !important;
}
html.dark body footer h4,
html.dark body footer h5 {
    color: #ffffff !important;
}
html.dark body footer p,
html.dark body footer li,
html.dark body footer span:not(.material-symbols-outlined) {
    color: #ffffff !important;
}
html.dark body footer .material-symbols-outlined {
    color: #ffffff !important;
}
html.dark body footer a.inline-flex {
    background: rgba(255, 255, 255, 0.10) !important;
    border: 1px solid rgba(255, 255, 255, 0.18) !important;
}
</style>
<script>
(function () {
    function setImportant(nodes, property, value, important) {
        nodes.forEach(function (node) {
            if (!node || !node.style) return;
            if (important) {
                node.style.setProperty(property, value, 'important');
            } else {
                node.style.removeProperty(property);
            }
        });
    }

    function syncFooterDarkMode() {
        var footer = document.querySelector('footer');
        if (!footer) return;

        var isDark = document.documentElement.classList.contains('dark');
        setImportant([footer], 'color', '#ffffff', isDark);
        setImportant(footer.querySelectorAll('*'), 'color', '#ffffff', isDark);
        setImportant(footer.querySelectorAll('a'), 'color', '#ffffff', isDark);
        setImportant(footer.querySelectorAll('h4, h5'), 'color', '#ffffff', isDark);
        setImportant(footer.querySelectorAll('p, li, span:not(.material-symbols-outlined)'), 'color', '#ffffff', isDark);
        setImportant(footer.querySelectorAll('.material-symbols-outlined'), 'color', '#ffffff', isDark);

        footer.querySelectorAll('a.inline-flex').forEach(function (link) {
            if (isDark) {
                link.style.setProperty('background', 'rgba(255,255,255,0.10)', 'important');
                link.style.setProperty('border', '1px solid rgba(255,255,255,0.18)', 'important');
            } else {
                link.style.removeProperty('background');
                link.style.removeProperty('border');
            }
        });
    }

    syncFooterDarkMode();
    new MutationObserver(syncFooterDarkMode).observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['class']
    });
})();
</script>
</body></html>

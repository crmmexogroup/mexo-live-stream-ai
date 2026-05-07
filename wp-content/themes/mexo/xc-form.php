<?php
/**
 * Template part for displaying the Contact Form (Hybrid Method).
 * Uses a visible custom HTML form and a hidden Contact Form 7 form.
 */
?>
<div class="xc-contact-form-wrapper relative">

    <!-- 1. Visible HTML Form (Tailwind Styled) -->
    <form id="xc-custom-form" class="bg-surface-light dark:bg-surface-dark rounded-3xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-white dark:border-slate-700 p-6 md:p-8 lg:p-10 relative overflow-hidden">
        <?php if ( is_page_template('lien-he.php') || is_page('lien-he') ) : ?>
        <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary via-blue-400 to-primary"></div>
        <?php endif; ?>
        <div class="flex flex-col gap-10">
            <div class="space-y-6">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100 dark:border-slate-700/50">
                    <div class="size-10 rounded-full bg-blue-100 dark:bg-blue-900/50 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Thông tin liên hệ</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="input-group">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Họ và tên <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-slate-400 input-icon transition-colors text-[20px]">badge</span>
                            </div>
                            <input name="fullname" class="w-full pl-11 rounded-xl border-slate-300 dark:border-slate-600 bg-slate-50/50 dark:bg-slate-900/50 dark:text-white focus:border-primary focus:ring-primary/20 h-12 text-base transition-all" placeholder="Nhập họ tên của bạn" required="" type="text"/>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Số điện thoại <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-slate-400 input-icon transition-colors text-[20px]">call</span>
                            </div>
                            <input name="phone" class="w-full pl-11 rounded-xl border-slate-300 dark:border-slate-600 bg-slate-50/50 dark:bg-slate-900/50 dark:text-white focus:border-primary focus:ring-primary/20 h-12 text-base transition-all" placeholder="Nhập SĐT liên hệ" required="" type="tel"/>
                        </div>
                    </div>
                    <div class="input-group md:col-span-2">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Email công việc <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-slate-400 input-icon transition-colors text-[20px]">mail</span>
                            </div>
                            <input name="email" class="w-full pl-11 rounded-xl border-slate-300 dark:border-slate-600 bg-slate-50/50 dark:bg-slate-900/50 dark:text-white focus:border-primary focus:ring-primary/20 h-12 text-base transition-all" placeholder="name@company.com" required="" type="email"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100 dark:border-slate-700/50">
                    <div class="size-10 rounded-full bg-indigo-100 dark:bg-indigo-900/50 text-indigo-600 dark:text-indigo-400 flex items-center justify-center">
                        <span class="material-symbols-outlined">storefront</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Thông tin doanh nghiệp</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="input-group">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Mô hình kinh doanh</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-slate-400 input-icon transition-colors text-[20px]">category</span>
                            </div>
                            <select name="business_model" class="w-full pl-11 rounded-xl border-slate-300 dark:border-slate-600 bg-slate-50/50 dark:bg-slate-900/50 dark:text-white focus:border-primary focus:ring-primary/20 h-12 text-base transition-all appearance-none cursor-pointer">
                                <option disabled="" selected="" value="">Chọn mô hình</option>
                                <option value="Cá nhân / Hộ kinh doanh">Cá nhân / Hộ kinh doanh</option>
                                <option value="Doanh nghiệp SME">Doanh nghiệp SME</option>
                                <option value="Brand / Tập đoàn lớn">Brand / Tập đoàn lớn</option>
                                <option value="Khởi nghiệp (Startup)">Khởi nghiệp (Startup)</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-500">
                                <span class="material-symbols-outlined text-[20px]">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Ngành hàng</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-slate-400 input-icon transition-colors text-[20px]">shopping_bag</span>
                            </div>
                            <input name="industry" class="w-full pl-11 rounded-xl border-slate-300 dark:border-slate-600 bg-slate-50/50 dark:bg-slate-900/50 dark:text-white focus:border-primary focus:ring-primary/20 h-12 text-base transition-all" placeholder="VD: Thời trang, Mỹ phẩm..." type="text"/>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nền tảng quan tâm</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-slate-400 input-icon transition-colors text-[20px]">devices</span>
                            </div>
                            <select name="platform" class="w-full pl-11 rounded-xl border-slate-300 dark:border-slate-600 bg-slate-50/50 dark:bg-slate-900/50 dark:text-white focus:border-primary focus:ring-primary/20 h-12 text-base transition-all appearance-none cursor-pointer">
                                <option disabled="" selected="" value="">Chọn nền tảng</option>
                                <option value="Shopee">Shopee</option>
                                <option value="TikTok Shop">TikTok Shop</option>
                                <option value="Lazada">Lazada</option>
                                <option value="Facebook / Meta">Facebook / Meta</option>
                                <option value="Đa kênh (Multi-channel)">Đa kênh (Multi-channel)</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-500">
                                <span class="material-symbols-outlined text-[20px]">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Ngân sách Marketing / tháng</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-slate-400 input-icon transition-colors text-[20px]">payments</span>
                            </div>
                            <select name="budget" class="w-full pl-11 rounded-xl border-slate-300 dark:border-slate-600 bg-slate-50/50 dark:bg-slate-900/50 dark:text-white focus:border-primary focus:ring-primary/20 h-12 text-base transition-all appearance-none cursor-pointer">
                                <option disabled="" selected="" value="">Chọn mức ngân sách</option>
                                <option value="Dưới 20 triệu VNĐ">Dưới 20 triệu VNĐ</option>
                                <option value="20 - 50 triệu VNĐ">20 - 50 triệu VNĐ</option>
                                <option value="50 - 100 triệu VNĐ">50 - 100 triệu VNĐ</option>
                                <option value="100 - 500 triệu VNĐ">100 - 500 triệu VNĐ</option>
                                <option value="Trên 500 triệu VNĐ">Trên 500 triệu VNĐ</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-500">
                                <span class="material-symbols-outlined text-[20px]">expand_more</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Added Message Section -->
            <div class="space-y-6">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100 dark:border-slate-700/50">
                    <div class="size-10 rounded-full bg-orange-100 dark:bg-orange-900/50 text-orange-600 dark:text-orange-400 flex items-center justify-center">
                        <span class="material-symbols-outlined">edit_note</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Nội dung tư vấn</h3>
                </div>
                <div class="input-group">
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Lời nhắn / Ghi chú thêm</label>
                    <div class="relative">
                        <textarea name="message" rows="4" class="w-full p-4 rounded-xl border-slate-300 dark:border-slate-600 bg-slate-50/50 dark:bg-slate-900/50 dark:text-white focus:border-primary focus:ring-primary/20 text-base transition-all resize-none" placeholder="Lời nhắn / Ghi chú thêm: Hãy chia sẻ thêm về nhu cầu của bạn..."></textarea>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100 dark:border-slate-700/50">
                    <div class="size-10 rounded-full bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400 flex items-center justify-center">
                        <span class="material-symbols-outlined">rocket_launch</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Mục tiêu hỗ trợ</h3>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <label class="relative flex items-start p-4 rounded-xl border border-slate-200 dark:border-slate-700 cursor-pointer bg-white dark:bg-slate-900 hover:border-primary dark:hover:border-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-all duration-200 group">
                        <div class="flex items-center h-5">
                            <input name="goals[]" value="Tư vấn chiến lược" class="size-5 text-primary border-slate-300 rounded focus:ring-primary" type="checkbox"/>
                        </div>
                        <div class="ml-3 text-sm">
                            <span class="font-bold text-slate-900 dark:text-white block group-hover:text-primary transition-colors">Tư vấn chiến lược</span>
                            <span class="text-slate-500 dark:text-slate-400 text-xs">Phân tích &amp; lập kế hoạch</span>
                        </div>
                    </label>
                    <label class="relative flex items-start p-4 rounded-xl border border-slate-200 dark:border-slate-700 cursor-pointer bg-white dark:bg-slate-900 hover:border-primary dark:hover:border-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-all duration-200 group">
                        <div class="flex items-center h-5">
                            <input name="goals[]" value="Setup & Vận hành" class="size-5 text-primary border-slate-300 rounded focus:ring-primary" type="checkbox"/>
                        </div>
                        <div class="ml-3 text-sm">
                            <span class="font-bold text-slate-900 dark:text-white block group-hover:text-primary transition-colors">Setup &amp; Vận hành</span>
                            <span class="text-slate-500 dark:text-slate-400 text-xs">Xây dựng gian hàng chuẩn SEO</span>
                        </div>
                    </label>
                    <label class="relative flex items-start p-4 rounded-xl border border-slate-200 dark:border-slate-700 cursor-pointer bg-white dark:bg-slate-900 hover:border-primary dark:hover:border-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-all duration-200 group">
                        <div class="flex items-center h-5">
                            <input name="goals[]" value="Quảng cáo (Ads)" class="size-5 text-primary border-slate-300 rounded focus:ring-primary" type="checkbox"/>
                        </div>
                        <div class="ml-3 text-sm">
                            <span class="font-bold text-slate-900 dark:text-white block group-hover:text-primary transition-colors">Quảng cáo (Ads)</span>
                            <span class="text-slate-500 dark:text-slate-400 text-xs">Tối ưu chi phí &amp; tăng chuyển đổi</span>
                        </div>
                    </label>
                    <label class="relative flex items-start p-4 rounded-xl border border-slate-200 dark:border-slate-700 cursor-pointer bg-white dark:bg-slate-900 hover:border-primary dark:hover:border-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-all duration-200 group">
                        <div class="flex items-center h-5">
                            <input name="goals[]" value="Booking & Media" class="size-5 text-primary border-slate-300 rounded focus:ring-primary" type="checkbox"/>
                        </div>
                        <div class="ml-3 text-sm">
                            <span class="font-bold text-slate-900 dark:text-white block group-hover:text-primary transition-colors">Booking &amp; Media</span>
                            <span class="text-slate-500 dark:text-slate-400 text-xs">KOLs/KOCs &amp; Livestream</span>
                        </div>
                    </label>
                    <label class="relative flex items-start p-4 rounded-xl border border-slate-200 dark:border-slate-700 cursor-pointer bg-white dark:bg-slate-900 hover:border-primary dark:hover:border-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-all duration-200 group">
                        <div class="flex items-center h-5">
                            <input name="goals[]" value="Đào tạo nhân sự" class="size-5 text-primary border-slate-300 rounded focus:ring-primary" type="checkbox"/>
                        </div>
                        <div class="ml-3 text-sm">
                            <span class="font-bold text-slate-900 dark:text-white block group-hover:text-primary transition-colors">Đào tạo nhân sự</span>
                            <span class="text-slate-500 dark:text-slate-400 text-xs">Xây dựng đội ngũ in-house</span>
                        </div>
                    </label>
                    <label class="relative flex items-start p-4 rounded-xl border border-slate-200 dark:border-slate-700 cursor-pointer bg-white dark:bg-slate-900 hover:border-primary dark:hover:border-primary hover:bg-slate-50 dark:hover:bg-slate-800 transition-all duration-200 group">
                        <div class="flex items-center h-5">
                            <input name="goals[]" value="Khác" class="size-5 text-primary border-slate-300 rounded focus:ring-primary" type="checkbox"/>
                        </div>
                        <div class="ml-3 text-sm">
                            <span class="font-bold text-slate-900 dark:text-white block group-hover:text-primary transition-colors">Khác</span>
                            <span class="text-slate-500 dark:text-slate-400 text-xs">Nhu cầu cụ thể khác</span>
                        </div>
                    </label>
                </div>
            </div>
            <div class="pt-2">
                <button id="xc-submit-btn" class="group relative w-full overflow-hidden rounded-2xl bg-primary p-4 text-center font-bold text-white shadow-lg shadow-primary/40 transition-all hover:bg-primary-hover hover:shadow-primary/60 hover:-translate-y-1" type="submit">
                    <span class="relative flex items-center justify-center gap-3 text-lg">
                        Nhận tư vấn miễn phí ngay
                        <span class="material-symbols-outlined transition-transform duration-300 group-hover:translate-x-1">arrow_forward</span>
                    </span>
                </button>
                <p class="mt-4 text-center text-xs text-slate-500 dark:text-slate-400">
                    Bằng việc đăng ký, bạn đồng ý với <a class="underline hover:text-primary" href="#">Điều khoản</a> và <a class="underline hover:text-primary" href="#">Chính sách bảo mật</a> của chúng tôi.
                </p>
            </div>
        </div>
    </form>

    <!-- 2. Hidden CF7 Form -->
    <div class="xc-hidden-cf7" style="display:none !important;">
        <?php echo do_shortcode('[contact-form-7 id="e49f7e9" title="Form liên hệ"]'); ?>
    </div>

</div>

<script>
(function() {
    const customSubmitBtn = document.getElementById('xc-submit-btn');

    if(customSubmitBtn) {
        // Clone the button to remove old event listeners if any (though unlikely due to lazy load)
        const newBtn = customSubmitBtn.cloneNode(true);
        customSubmitBtn.parentNode.replaceChild(newBtn, customSubmitBtn);

        newBtn.addEventListener('click', function(e) {
            e.preventDefault();

            // 1. Collect Data from Custom Form
            const form = document.getElementById('xc-custom-form');
            if (!form) return;

            const name = form.querySelector('[name="fullname"]').value;
            const phone = form.querySelector('[name="phone"]').value;
            const email = form.querySelector('[name="email"]').value;
            const model = form.querySelector('[name="business_model"]').value;
            const industry = form.querySelector('[name="industry"]').value;
            const platform = form.querySelector('[name="platform"]').value;
            const budget = form.querySelector('[name="budget"]').value;
            const message = form.querySelector('[name="message"]').value;
            
            let goals = [];
            form.querySelectorAll('input[name="goals[]"]:checked').forEach(function(checkbox) {
                goals.push(checkbox.value);
            });

            // 2. Validate (Basic)
            if(!name || !phone || !email) {
                alert('Vui lòng điền đầy đủ các thông tin bắt buộc (*)');
                return;
            }

            // 3. Populate Hidden CF7 Fields
            const setVal = (fieldName, val) => {
                const el = document.querySelector(`.xc-hidden-cf7 input[name="${fieldName}"], .xc-hidden-cf7 textarea[name="${fieldName}"]`);
                if(el) el.value = val;
            };

            setVal('your-name', name);
            setVal('your-phone', phone);
            setVal('your-email', email);
            setVal('business-model', model);
            setVal('industry', industry);
            setVal('platform', platform);
            setVal('budget', budget);
            setVal('your-message', message); // Assuming standard CF7 field
            setVal('goals', goals.join(', ')); // textarea

            // 4. Trigger CF7 Submit
            const cf7Submit = document.querySelector('.xc-hidden-cf7 input[type="submit"]');
            if(cf7Submit) {
                const originalText = newBtn.innerHTML;
                newBtn.innerHTML = '<span class="flex items-center justify-center gap-2"><span class="animate-spin h-4 w-4 border-2 border-white rounded-full border-t-transparent"></span> Đang gửi...</span>';
                newBtn.disabled = true;
                newBtn.classList.add('opacity-75', 'cursor-not-allowed');

                // Listener for CF7 events on the form container
                const cf7Form = document.querySelector('.xc-hidden-cf7 form');
                
                if(cf7Form) {
                    const handleSuccess = function(event) {
                        newBtn.innerHTML = originalText;
                        newBtn.disabled = false;
                        newBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                        alert('Gửi thông tin thành công! Chúng tôi sẽ liên hệ lại sớm.');
                        form.reset();
                        cleanup();
                    };

                    const handleFail = function(event) {
                        newBtn.innerHTML = originalText;
                        newBtn.disabled = false;
                        newBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                        // CF7 usually shows a response message below the form
                        // We can also try to get the invalid message from the response if accessible
                        alert('Vui lòng kiểm tra lại thông tin hoặc thử lại sau.');
                        cleanup();
                    };

                    const cleanup = () => {
                        cf7Form.removeEventListener('wpcf7mailsent', handleSuccess);
                        cf7Form.removeEventListener('wpcf7invalid', handleFail);
                        cf7Form.removeEventListener('wpcf7spam', handleFail);
                        cf7Form.removeEventListener('wpcf7mailfailed', handleFail);
                    };

                    cf7Form.addEventListener('wpcf7mailsent', handleSuccess);
                    cf7Form.addEventListener('wpcf7invalid', handleFail);
                    cf7Form.addEventListener('wpcf7spam', handleFail);
                    cf7Form.addEventListener('wpcf7mailfailed', handleFail);
                }

                // Small delay to ensure events are ready
                setTimeout(() => {
                    cf7Submit.click();
                }, 100);
            }
        });
    }
})();
</script>

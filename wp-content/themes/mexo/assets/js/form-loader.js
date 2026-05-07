document.addEventListener('DOMContentLoaded', function () {
    const formContainer = document.getElementById('xc-form-placeholder');

    if (formContainer && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    loadForm();
                    observer.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px' // Start loading 200px before the element comes into view
        });

        observer.observe(formContainer);
    } else if (formContainer) {
        // Fallback for browsers without IntersectionObserver
        loadForm();
    }

    function loadForm() {
        formContainer.innerHTML = '<div class="flex justify-center p-10"><span class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></span></div>';

        fetch(mexo_ajax.ajax_url + '?action=load_xc_form')
            .then(response => response.text())
            .then(html => {
                formContainer.innerHTML = html;

                // Re-initialize any scripts in the loaded content if they don't auto-run
                // Note: Standard <script> tags inside innerHTML are not executed by browsers.
                // We need to extract and run them manually.

                const scripts = formContainer.querySelectorAll('script');
                scripts.forEach(oldScript => {
                    const newScript = document.createElement("script");
                    Array.from(oldScript.attributes).forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });

                // Also initialize CF7 if needed (CF7 5.4+ uses JS events, older might need calls)
                if (typeof wpcf7 !== 'undefined' && typeof wpcf7.init === 'function') {
                    const form = formContainer.querySelector('form.wpcf7-form');
                    if (form) wpcf7.init(form);
                }
            })
            .catch(err => {
                console.error('Error loading form:', err);
                formContainer.innerHTML = '<div class="text-red-500 text-center">Không thể tải form liên hệ. Vui lòng tải lại trang.</div>';
            });
    }
});

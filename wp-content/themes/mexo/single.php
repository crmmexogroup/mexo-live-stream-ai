<?php get_header(); ?>

<style>
/* Custom styles from chi-tiet-bai-viet.html */
.tooltip { position: relative; }
.tooltip:before { content: attr(data-tip); position: absolute; left: 100%; top: 50%; transform: translateY(-50%); margin-left: 10px; padding: 6px 12px; background-color: #1f2937; color: white; font-size: 12px; font-weight: 500; border-radius: 6px; white-space: nowrap; opacity: 0; visibility: hidden; transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1); pointer-events: none; z-index: 50; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
.tooltip:after { content: ''; position: absolute; left: 100%; top: 50%; transform: translateY(-50%); margin-left: 4px; border-width: 6px; border-style: solid; border-color: transparent #1f2937 transparent transparent; opacity: 0; visibility: hidden; transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1); pointer-events: none; z-index: 50; }
.tooltip:hover:before, .tooltip:hover:after { opacity: 1; visibility: visible; }

/* Prose Styling */
.prose p { margin-bottom: 1.5rem; line-height: 1.8; color: #4b5563; }
.prose h2 { font-size: 1.75rem; font-weight: 800; color: #0d121c; margin-top: 3rem; margin-bottom: 1.25rem; letter-spacing: -0.02em; }
.prose h3 { font-size: 1.35rem; font-weight: 700; color: #1f2937; margin-top: 2rem; margin-bottom: 1rem; }
.prose ul { list-style-type: none; padding-left: 0; margin-bottom: 2rem; }
.prose li { position: relative; padding-left: 1.5rem; margin-bottom: 0.75rem; color: #4b5563; }
.prose li::before { content: "•"; color: #0d59f2; font-weight: bold; font-size: 1.2rem; position: absolute; left: 0; top: -2px; }
.prose blockquote { border-left: none; position: relative; font-style: italic; color: #1f2937; margin: 2.5rem 0; padding: 2rem 2.5rem; background: linear-gradient(135deg, #f0f4ff 0%, #ffffff 100%); border-radius: 1rem; box-shadow: inset 0 0 0 1px rgba(13, 89, 242, 0.1); }
.prose blockquote::before { content: "“"; font-family: serif; font-size: 4rem; color: #0d59f2; opacity: 0.2; position: absolute; top: 0.5rem; left: 1rem; line-height: 1; }
.prose img { border-radius: 1rem; margin: 2.5rem 0; width: 100%; height: auto; box-shadow: 0 10px 30px -5px rgba(0,0,0,0.05); }
.mexo-post-page { background: #f5f7fb; }
.mexo-article-eeat { display: none !important; }
.mexo-article-card {
    background: #fff;
    color: #0f172a;
    border: 1px solid rgba(15, 23, 42, 0.06);
    box-shadow: 0 24px 70px rgba(15, 23, 42, 0.08);
}
.mexo-article-card .mexo-post-title,
html.dark .mexo-article-card .mexo-post-title {
    color: #0d121c !important;
    line-height: 1.28 !important;
    padding-top: 0.06em;
    padding-bottom: 0.08em;
}
.mexo-article-card .mexo-post-author,
html.dark .mexo-article-card .mexo-post-author { color: #0d121c !important; }
.mexo-article-card .mexo-post-meta,
html.dark .mexo-article-card .mexo-post-meta {
    color: #64748b !important;
    background: #f8fafc !important;
    border-color: #e5e7eb !important;
}
.mexo-article-card .mexo-post-content,
.mexo-article-card .mexo-post-content p,
.mexo-article-card .mexo-post-content li,
.mexo-article-card .mexo-post-content td,
.mexo-article-card .mexo-post-content th,
.mexo-article-card .mexo-post-content figcaption,
html.dark .mexo-article-card .mexo-post-content,
html.dark .mexo-article-card .mexo-post-content p,
html.dark .mexo-article-card .mexo-post-content li,
html.dark .mexo-article-card .mexo-post-content td,
html.dark .mexo-article-card .mexo-post-content th,
html.dark .mexo-article-card .mexo-post-content figcaption { color: #111827 !important; }
.mexo-article-card .mexo-post-content h1,
.mexo-article-card .mexo-post-content h2,
.mexo-article-card .mexo-post-content h3,
.mexo-article-card .mexo-post-content h4,
.mexo-article-card .mexo-post-content strong,
html.dark .mexo-article-card .mexo-post-content h1,
html.dark .mexo-article-card .mexo-post-content h2,
html.dark .mexo-article-card .mexo-post-content h3,
html.dark .mexo-article-card .mexo-post-content h4,
html.dark .mexo-article-card .mexo-post-content strong { color: #0d121c !important; }
.mexo-article-card .mexo-post-content a,
html.dark .mexo-article-card .mexo-post-content a { color: #ef2b2d !important; }
.mexo-article-card .mexo-post-content blockquote,
html.dark .mexo-article-card .mexo-post-content blockquote {
    color: #1f2937 !important;
    background: linear-gradient(135deg, #f0f4ff 0%, #ffffff 100%) !important;
    box-shadow: inset 0 0 0 1px rgba(13, 89, 242, 0.12) !important;
}
.mexo-article-card .mexo-post-content table,
.mexo-article-card .mexo-post-content tr,
.mexo-article-card .mexo-post-content td,
.mexo-article-card .mexo-post-content th,
html.dark .mexo-article-card .mexo-post-content table,
html.dark .mexo-article-card .mexo-post-content tr,
html.dark .mexo-article-card .mexo-post-content td,
html.dark .mexo-article-card .mexo-post-content th { border-color: #d1d5db !important; }
.mexo-article-card .mexo-post-content hr,
html.dark .mexo-article-card .mexo-post-content hr { border-color: #e5e7eb !important; }
html.dark .mexo-post-page { background: #0f172a; }
html.dark .mexo-article-card {
    background: #0f1b33 !important;
    color: #e5efff !important;
    border-color: rgba(96, 165, 250, 0.24) !important;
    box-shadow: 0 26px 78px rgba(0, 0, 0, 0.32) !important;
}
html.dark .mexo-article-card .mexo-post-title,
html.dark .mexo-article-card .mexo-post-author,
html.dark .mexo-article-card .mexo-post-content h1,
html.dark .mexo-article-card .mexo-post-content h2,
html.dark .mexo-article-card .mexo-post-content h3,
html.dark .mexo-article-card .mexo-post-content h4,
html.dark .mexo-article-card .mexo-post-content h5,
html.dark .mexo-article-card .mexo-post-content h6,
html.dark .mexo-article-card .mexo-post-content strong {
    color: #ffffff !important;
}
html.dark .mexo-article-card .mexo-post-content,
html.dark .mexo-article-card .mexo-post-content p,
html.dark .mexo-article-card .mexo-post-content li,
html.dark .mexo-article-card .mexo-post-content td,
html.dark .mexo-article-card .mexo-post-content th,
html.dark .mexo-article-card .mexo-post-content figcaption,
html.dark .mexo-article-card .mexo-post-content span {
    color: #dbeafe !important;
}
html.dark .mexo-article-card .mexo-post-content a {
    color: #93c5fd !important;
}
html.dark .mexo-article-card .mexo-post-content blockquote {
    color: #e5efff !important;
    background: rgba(7, 18, 37, 0.78) !important;
    box-shadow: inset 0 0 0 1px rgba(96, 165, 250, 0.22) !important;
}
html.dark .mexo-article-card .mexo-post-content blockquote p {
    color: #e5efff !important;
}
html.dark .mexo-article-eeat {
    background: #071225 !important;
    border-color: rgba(96, 165, 250, 0.28) !important;
}
html.dark .mexo-article-eeat,
html.dark .mexo-article-eeat p,
html.dark .mexo-article-eeat li,
html.dark .mexo-article-eeat span {
    color: #dbeafe !important;
}
html.dark .mexo-article-eeat h2,
html.dark .mexo-article-eeat h3,
html.dark .mexo-article-eeat strong {
    color: #ffffff !important;
}
html.dark .mexo-article-eeat .rounded-xl {
    background: #0f1b33 !important;
    border-color: rgba(96, 165, 250, 0.22) !important;
}
@media (max-width: 767px) {
    .mexo-article-card {
        border-radius: 1.25rem !important;
    }
    html.dark .mexo-article-card .mexo-post-content,
    html.dark .mexo-article-card .mexo-post-content p {
        font-size: 1rem !important;
        line-height: 1.75 !important;
    }
}

/* Clean reading layout for pasted/copied article content. */
.mexo-post-content {
    font-size: 1.12rem !important;
    line-height: 1.86 !important;
    color: #64748b !important;
    letter-spacing: 0 !important;
}
.mexo-post-content * {
    letter-spacing: 0 !important;
    max-width: 100%;
}
.mexo-post-content p,
.mexo-post-content li,
.mexo-post-content div,
.mexo-post-content span {
    color: #64748b !important;
}
.mexo-article-lead {
    color: #020617 !important;
    font-size: clamp(1.55rem, 4.8vw, 2.55rem) !important;
    font-weight: 500 !important;
    line-height: 1.36 !important;
    margin: 0 0 3.75rem !important;
}
.mexo-post-content p {
    margin: 0 0 1.8rem !important;
}
.mexo-post-content h2,
.mexo-post-content h3,
.mexo-post-content h4 {
    color: #020617 !important;
    line-height: 1.28 !important;
}
.mexo-post-content h2 {
    font-size: clamp(1.7rem, 4.2vw, 2.35rem) !important;
    margin-top: 3.5rem !important;
}
.mexo-post-content h3 {
    font-size: clamp(1.35rem, 3.4vw, 1.75rem) !important;
}
.mexo-post-content a {
    color: #475569 !important;
    text-decoration: underline !important;
    text-underline-offset: 0.12em;
}
.mexo-post-content img,
.mexo-post-content figure,
.mexo-post-content video,
.mexo-post-content iframe {
    max-width: 100% !important;
}
.mexo-post-content table {
    display: block;
    width: 100% !important;
    overflow-x: auto;
    border-collapse: collapse;
}
html.dark .mexo-post-content {
    color: #dbeafe !important;
}
html.dark .mexo-post-content p,
html.dark .mexo-post-content li,
html.dark .mexo-post-content div,
html.dark .mexo-post-content span {
    color: #dbeafe !important;
}
html.dark .mexo-article-lead,
html.dark .mexo-post-content h2,
html.dark .mexo-post-content h3,
html.dark .mexo-post-content h4 {
    color: #ffffff !important;
}
html.dark .mexo-post-content a {
    color: #bfdbfe !important;
}
@media (max-width: 767px) {
    .mexo-post-page {
        padding-top: 1rem !important;
        background: #ffffff !important;
    }
    .mexo-article-card {
        width: 100% !important;
        border-radius: 0 !important;
        border: 0 !important;
        box-shadow: none !important;
        padding: 1.45rem !important;
        background: #ffffff !important;
    }
    .mexo-post-content {
        font-size: 1.22rem !important;
        line-height: 1.78 !important;
    }
    .mexo-article-card .mexo-post-content,
    .mexo-article-card .mexo-post-content p,
    .mexo-article-card .mexo-post-content li,
    .mexo-article-card .mexo-post-content span,
    .mexo-article-card .mexo-post-content div {
        color: #64748b !important;
    }
    .mexo-article-card .mexo-post-content h2,
    .mexo-article-card .mexo-post-content h3,
    .mexo-article-card .mexo-post-content h4,
    .mexo-article-card .mexo-post-content strong {
        color: #020617 !important;
    }
    .mexo-article-card .mexo-post-content .mexo-article-lead {
        font-size: clamp(2rem, 9.3vw, 2.65rem) !important;
        line-height: 1.26 !important;
        margin-bottom: 4.5rem !important;
        color: #020617 !important;
    }
    .mexo-post-content p {
        margin-bottom: 2rem !important;
    }
    html.dark .mexo-post-page {
        background: #071225 !important;
    }
    html.dark .mexo-article-card {
        background: #0f1b33 !important;
        border: 1px solid rgba(96, 165, 250, 0.20) !important;
        border-radius: 1.25rem !important;
        box-shadow: none !important;
    }
    html.dark .mexo-article-card .mexo-post-content,
    html.dark .mexo-article-card .mexo-post-content p,
    html.dark .mexo-article-card .mexo-post-content li,
    html.dark .mexo-article-card .mexo-post-content span,
    html.dark .mexo-article-card .mexo-post-content div {
        color: #dbeafe !important;
        font-size: 1.22rem !important;
        line-height: 1.78 !important;
    }
    html.dark .mexo-article-card .mexo-post-content .mexo-article-lead {
        color: #ffffff !important;
        font-size: clamp(2rem, 9.3vw, 2.65rem) !important;
        line-height: 1.26 !important;
        margin-bottom: 4.5rem !important;
    }
    html.dark .mexo-article-card .mexo-post-content h2,
    html.dark .mexo-article-card .mexo-post-content h3,
    html.dark .mexo-article-card .mexo-post-content h4,
    html.dark .mexo-article-card .mexo-post-content strong {
        color: #ffffff !important;
    }
}

.mexo-post-content blockquote,
.mexo-post-content .wp-block-quote,
.mexo-post-content .wp-block-pullquote,
.mexo-post-content figure.wp-block-pullquote {
    position: relative !important;
    margin: 2rem 0 !important;
    padding: 1.25rem 1.35rem 1.25rem 1.65rem !important;
    border: 1px solid #dbeafe !important;
    border-left: 4px solid #3b82f6 !important;
    border-radius: 0.85rem !important;
    background: #f8fbff !important;
    box-shadow: none !important;
    font-style: normal !important;
}
.mexo-post-content blockquote::before,
.mexo-post-content .wp-block-quote::before,
.mexo-post-content .wp-block-pullquote::before,
.mexo-post-content figure.wp-block-pullquote::before {
    content: "“" !important;
    position: absolute !important;
    top: 0.35rem !important;
    left: 0.85rem !important;
    color: #93c5fd !important;
    font-size: 2.2rem !important;
    line-height: 1 !important;
    opacity: 0.75 !important;
}
.mexo-post-content blockquote,
.mexo-post-content blockquote *,
.mexo-post-content .wp-block-quote,
.mexo-post-content .wp-block-quote *,
.mexo-post-content .wp-block-pullquote,
.mexo-post-content .wp-block-pullquote *,
.mexo-post-content figure.wp-block-pullquote,
.mexo-post-content figure.wp-block-pullquote * {
    color: #0f172a !important;
    font-size: clamp(1rem, 3.75vw, 1.28rem) !important;
    font-weight: 500 !important;
    line-height: 1.58 !important;
    font-style: italic !important;
}
.mexo-post-content blockquote p,
.mexo-post-content .wp-block-quote p,
.mexo-post-content .wp-block-pullquote p,
.mexo-post-content figure.wp-block-pullquote p {
    margin: 0 !important;
}
.mexo-table-scroll {
    width: 100%;
    max-width: 100%;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    border: 1px solid #dbe3ef;
    border-radius: 0.85rem;
    background: #ffffff;
    margin: 1.8rem 0 2.2rem;
}
.mexo-table-scroll table,
.mexo-post-content table {
    display: table !important;
    width: max-content !important;
    min-width: 680px !important;
    border-collapse: collapse !important;
    table-layout: auto !important;
    margin: 0 !important;
}
.mexo-post-content th,
.mexo-post-content td {
    min-width: 9rem;
    padding: 0.85rem 1rem !important;
    border: 1px solid #dbe3ef !important;
    vertical-align: top !important;
    color: #334155 !important;
    font-size: 0.95rem !important;
    line-height: 1.55 !important;
    background: #ffffff !important;
}
.mexo-post-content th {
    color: #0f172a !important;
    font-weight: 800 !important;
    background: #f8fafc !important;
}
.mexo-post-content td:first-child,
.mexo-post-content th:first-child {
    color: #0f172a !important;
    font-weight: 700 !important;
}
html.dark .mexo-post-content blockquote,
html.dark .mexo-post-content .wp-block-quote,
html.dark .mexo-post-content .wp-block-pullquote,
html.dark .mexo-post-content figure.wp-block-pullquote {
    background: #071225 !important;
    border-color: rgba(96, 165, 250, 0.32) !important;
    border-left-color: #60a5fa !important;
}
html.dark .mexo-post-content blockquote,
html.dark .mexo-post-content blockquote *,
html.dark .mexo-post-content .wp-block-quote,
html.dark .mexo-post-content .wp-block-quote *,
html.dark .mexo-post-content .wp-block-pullquote,
html.dark .mexo-post-content .wp-block-pullquote *,
html.dark .mexo-post-content figure.wp-block-pullquote,
html.dark .mexo-post-content figure.wp-block-pullquote * {
    color: #e5efff !important;
}
html.dark .mexo-table-scroll {
    background: #071225 !important;
    border-color: rgba(96, 165, 250, 0.28) !important;
}
html.dark .mexo-post-content th,
html.dark .mexo-post-content td {
    background: #0f1b33 !important;
    border-color: rgba(96, 165, 250, 0.22) !important;
    color: #dbeafe !important;
}
html.dark .mexo-post-content th,
html.dark .mexo-post-content td:first-child {
    color: #ffffff !important;
}
@media (max-width: 767px) {
    .mexo-post-content blockquote,
    .mexo-post-content .wp-block-quote,
    .mexo-post-content .wp-block-pullquote,
    .mexo-post-content figure.wp-block-pullquote {
        margin: 1.65rem 0 !important;
        padding: 1.1rem 1rem 1.1rem 1.35rem !important;
        border-radius: 0.8rem !important;
    }
    .mexo-post-content blockquote,
    .mexo-post-content blockquote *,
    .mexo-post-content .wp-block-quote,
    .mexo-post-content .wp-block-quote *,
    .mexo-post-content .wp-block-pullquote,
    .mexo-post-content .wp-block-pullquote *,
    .mexo-post-content figure.wp-block-pullquote,
    .mexo-post-content figure.wp-block-pullquote * {
        font-size: clamp(0.95rem, 3.65vw, 1.15rem) !important;
        line-height: 1.55 !important;
    }
    .mexo-table-scroll {
        margin-left: -0.15rem;
        margin-right: -0.15rem;
    }
    .mexo-table-scroll table,
    .mexo-post-content table {
        min-width: 720px !important;
    }
    .mexo-post-content th,
    .mexo-post-content td {
        min-width: 10rem;
        font-size: 0.88rem !important;
        padding: 0.72rem 0.8rem !important;
    }
}
.mexo-post-content [style],
.mexo-post-content [style] * {
    color: inherit !important;
}
html.dark .mexo-post-content [style],
html.dark .mexo-post-content [style] * {
    color: #dbeafe !important;
    -webkit-text-fill-color: #dbeafe !important;
}
html.dark .mexo-post-content [style] strong,
html.dark .mexo-post-content strong [style],
html.dark .mexo-post-content h1 [style],
html.dark .mexo-post-content h2 [style],
html.dark .mexo-post-content h3 [style] {
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
}
.mexo-post-content blockquote,
.mexo-post-content blockquote *,
.mexo-post-content .wp-block-quote,
.mexo-post-content .wp-block-quote *,
.mexo-post-content .wp-block-pullquote,
.mexo-post-content .wp-block-pullquote *,
.mexo-post-content figure.wp-block-pullquote,
.mexo-post-content figure.wp-block-pullquote * {
    font-size: 1rem !important;
    line-height: 1.62 !important;
    font-weight: 500 !important;
}
@media (min-width: 768px) {
    .mexo-post-content blockquote,
    .mexo-post-content blockquote *,
    .mexo-post-content .wp-block-quote,
    .mexo-post-content .wp-block-quote *,
    .mexo-post-content .wp-block-pullquote,
    .mexo-post-content .wp-block-pullquote *,
    .mexo-post-content figure.wp-block-pullquote,
    .mexo-post-content figure.wp-block-pullquote * {
        font-size: 1.08rem !important;
        line-height: 1.65 !important;
    }
}
@media (max-width: 767px) {
    .mexo-post-content blockquote,
    .mexo-post-content blockquote *,
    .mexo-post-content .wp-block-quote,
    .mexo-post-content .wp-block-quote *,
    .mexo-post-content .wp-block-pullquote,
    .mexo-post-content .wp-block-pullquote *,
    .mexo-post-content figure.wp-block-pullquote,
    .mexo-post-content figure.wp-block-pullquote * {
        font-size: 0.98rem !important;
        line-height: 1.58 !important;
    }
}
.mexo-post-cta-box {
    background: linear-gradient(135deg, #eff6ff 0%, #ffffff 100%) !important;
}
.mexo-post-cta-box h3 {
    color: #0f172a !important;
}
.mexo-post-cta-box p {
    color: #475569 !important;
}
html.dark .mexo-post-cta-box {
    background: #0f1b33 !important;
    border-color: rgba(96, 165, 250, 0.28) !important;
}
html.dark .mexo-post-cta-box > .absolute {
    opacity: 0 !important;
}
html.dark .mexo-post-cta-box h3,
html.dark .mexo-post-cta-box h3 * {
    color: #ffffff !important;
}
html.dark .mexo-post-cta-box p,
html.dark .mexo-post-cta-box p * {
    color: #dbeafe !important;
}
html.dark .mexo-post-cta-box button:first-of-type {
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.7) !important;
}
html.dark .mexo-post-cta-box button.mexo-post-cta-secondary,
html.dark .mexo-post-cta-box button:last-of-type,
html.dark .mexo-post-cta-box .flex > button + button,
html.dark .mexo-post-cta-box .flex > button:last-child {
    background: rgba(7, 18, 37, 0.62) !important;
    color: #ffffff !important;
    border-color: rgba(148, 163, 184, 0.52) !important;
}
html.dark .mexo-post-cta-box button.mexo-post-cta-secondary *,
html.dark .mexo-post-cta-box .flex > button + button *,
html.dark .mexo-post-cta-box .flex > button:last-child * {
    color: #ffffff !important;
}
</style>

<main class="mexo-post-page flex-1 relative w-full py-10 md:py-14">
<div class="w-full max-w-7xl mx-auto px-4 md:px-10">
    <div class="flex flex-col lg:flex-row gap-10">
        <!-- Social Share Sidebar (Desktop) -->
        <div class="hidden xl:flex fixed left-10 top-1/2 -translate-y-1/2 z-40 flex-col gap-5">
            <button class="tooltip group flex items-center justify-center w-11 h-11 bg-white hover:bg-[#1877F2] text-gray-400 hover:text-white rounded-full shadow-md hover:shadow-lg border border-gray-100 transition-all duration-300 transform hover:scale-110" data-tip="Chia sẻ lên Facebook">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
            </button>
            <button class="tooltip group flex items-center justify-center w-11 h-11 bg-white hover:bg-[#0068FF] text-gray-400 hover:text-white rounded-full shadow-md hover:shadow-lg border border-gray-100 transition-all duration-300 transform hover:scale-110" data-tip="Chia sẻ qua Zalo">
                 <svg class="w-5 h-5 fill-current" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><path d="M37.9,25.8c0.1-0.7,0.2-1.5,0.2-2.2c0-8.1-7.5-14.7-16.7-14.7S4.7,15.5,4.7,23.6c0,5.6,3.6,10.5,8.9,13.1  c0.5,0.2,0.8,0.8,0.6,1.4c-0.3,1.3-1.1,3.2-1.6,4.5c-0.2,0.4,0.1,0.9,0.5,0.9c0.2,0,0.5-0.1,0.6-0.2c2.7-2,6.4-4.6,7.2-5.2  c0.4-0.3,0.9-0.4,1.4-0.2c5.9,1.9,12.3-0.5,15.1-5.6C37.6,30.5,38,28.2,37.9,25.8z M15,26.5h-2.5v-5h2.5V26.5z M23.8,26.5h-2.5  v-5h2.5V26.5z M32.5,26.5H30v-5h2.5V26.5z"></path></svg>
            </button>
            <button class="tooltip group flex items-center justify-center w-11 h-11 bg-white hover:bg-gray-800 text-gray-400 hover:text-white rounded-full shadow-md hover:shadow-lg border border-gray-100 transition-all duration-300 transform hover:scale-110" data-tip="Sao chép liên kết">
                <span class="material-symbols-outlined text-[20px]">content_copy</span>
            </button>
        </div>

        <!-- Main Content -->
        <article class="mexo-article-card w-full lg:w-[68%] flex flex-col gap-8 rounded-2xl p-5 md:p-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <!-- Breadcrumbs -->
            <div class="flex flex-wrap gap-2 text-sm items-center">
                <a class="text-text-sub hover:text-primary transition-colors bg-white px-3 py-1 rounded-full shadow-sm border border-gray-100" href="<?php echo home_url(); ?>">Trang chủ</a>
                <span class="text-gray-300 material-symbols-outlined text-xs">chevron_right</span>
                <a class="text-text-sub hover:text-primary transition-colors bg-white px-3 py-1 rounded-full shadow-sm border border-gray-100" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a>
                <?php $categories = get_the_category(); if($categories): ?>
                <span class="text-gray-300 material-symbols-outlined text-xs">chevron_right</span>
                <a class="text-primary font-medium bg-blue-50 px-3 py-1 rounded-full border border-blue-100" href="<?php echo get_category_link($categories[0]->term_id); ?>"><?php echo $categories[0]->name; ?></a>
                <?php endif; ?>
            </div>

            <!-- Post Header -->
            <div class="flex flex-col gap-6">
                <h1 class="mexo-post-title text-[#0d121c] dark:text-white text-3xl md:text-4xl lg:text-[2.75rem] font-black leading-[1.2] tracking-tight">
                    <?php the_title(); ?>
                </h1>
                
                <div class="flex flex-wrap items-center gap-6 pb-6 border-b border-gray-100">
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <div class="bg-center bg-no-repeat bg-cover bg-gray-200 rounded-full size-11 border-2 border-white shadow-md">
                                <?php echo get_avatar(get_the_author_meta('ID'), 44, '', '', array('class' => 'rounded-full w-full h-full')); ?>
                            </div>
                            <!-- <div class="absolute -bottom-0.5 -right-0.5 bg-green-500 w-3 h-3 rounded-full border-2 border-white"></div> -->
                        </div>
                        <div class="flex flex-col">
                            <span class="mexo-post-author text-[#0d121c] dark:text-slate-100 text-sm font-bold"><?php the_author(); ?></span>
                            <!-- <span class="text-[#49659c] text-xs font-medium">Author Role</span> -->
                        </div>
                    </div>
                    <div class="mexo-post-meta flex items-center gap-4 text-xs font-medium text-gray-500 dark:text-slate-300 bg-gray-50 dark:bg-slate-800 px-4 py-2 rounded-lg border border-gray-100 dark:border-slate-700">
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                            <?php echo get_the_date('d M, Y'); ?>
                        </div>
                        <div class="w-1 h-1 rounded-full bg-gray-300"></div>
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px]">schedule</span>
                            <?php 
                                $word_count = str_word_count(strip_tags($post->post_content));
                                $reading_time = ceil($word_count / 200);
                                echo $reading_time . ' phút đọc';
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            <?php if(has_post_thumbnail()): ?>
            <div class="w-full relative group">
                <div class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden rounded-2xl min-h-[300px] md:min-h-[460px] shadow-soft" style='background-image: url("<?php the_post_thumbnail_url("full"); ?>");'>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
                <?php if($caption = get_the_post_thumbnail_caption()): ?>
                <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-md rounded-xl p-3 border border-white/50 shadow-sm md:w-fit md:mx-auto md:bottom-6">
                    <p class="text-center text-xs text-gray-600 italic font-medium"><?php echo $caption; ?></p>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <!-- Content -->
            <div class="prose mexo-post-content max-w-none text-[17px] text-gray-700 leading-8">
                <?php the_content(); ?>
            </div>

            <!-- Mobile Share -->
            <div class="flex xl:hidden flex-col gap-4 py-6 border-t border-gray-200 mt-4">
                <span class="text-sm font-bold text-gray-900">Chia sẻ bài viết này:</span>
                <div class="flex gap-3">
                    <button class="flex items-center justify-center w-10 h-10 bg-[#1877F2] text-white rounded-full">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
                    </button>
                    <!-- Add more mobile share buttons here -->
                </div>
            </div>

            <!-- CTA Box -->
            <div class="mexo-post-cta-box mt-4 bg-gradient-to-br from-blue-50 to-indigo-50/50 rounded-2xl p-8 md:p-10 flex flex-col items-center text-center gap-6 border border-blue-100 relative overflow-hidden shadow-sm">
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-100 rounded-full mix-blend-multiply filter blur-2xl opacity-60"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-purple-100 rounded-full mix-blend-multiply filter blur-2xl opacity-60"></div>
                <div class="z-10 flex flex-col items-center">
                    <div class="size-12 rounded-full bg-blue-100 text-primary flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Bạn đang gặp tình trạng tương tự?</h3>
                    <p class="text-gray-600 mb-6 max-w-lg">Đừng để khó khăn cản trở sự tăng trưởng. Đội ngũ MEXO GROUP sẵn sàng hỗ trợ bạn.</p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <button class="flex items-center justify-center gap-2 px-6 py-3 bg-primary hover:bg-primary-dark text-white font-bold rounded-xl transition-all shadow-lg shadow-blue-200 hover:-translate-y-0.5">
                            <span class="material-symbols-outlined text-[20px]">chat_bubble</span>
                            Liên hệ tư vấn
                        </button>
                        <button class="mexo-post-cta-secondary flex items-center justify-center gap-2 px-6 py-3 bg-white hover:bg-gray-50 text-gray-700 font-bold rounded-xl transition-all border border-gray-200 hover:border-blue-300">
                            Xem dịch vụ liên quan
                        </button>
                    </div>
                </div>
            </div>

            <!-- Related Posts -->
            <div class="mt-8 pt-8 border-t border-gray-100">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-xl font-bold text-[#0d121c] flex items-center gap-2">
                        <span class="w-1 h-6 bg-primary rounded-full"></span>
                        Bài viết liên quan
                    </h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                     <?php
                        $related = new WP_Query(array(
                            'category__in' => wp_get_post_categories($post->ID),
                            'post__not_in' => array($post->ID),
                            'posts_per_page' => 3,
                            'orderby' => 'rand'
                        ));
                        if( $related->have_posts() ) { 
                            while( $related->have_posts() ) { 
                                $related->the_post();
                        ?>
                    <a class="group flex flex-col gap-3 h-full" href="<?php the_permalink(); ?>">
                        <div class="overflow-hidden rounded-2xl aspect-[16/10] bg-gray-100 relative">
                            <?php if(has_post_thumbnail()): ?>
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("<?php the_post_thumbnail_url("medium"); ?>");'></div>
                            <?php else: ?>
                             <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("https://via.placeholder.com/400x300");'></div>
                            <?php endif; ?>
                            
                            <?php $cats = get_the_category(); if($cats): ?>
                            <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2.5 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider text-primary shadow-sm"><?php echo $cats[0]->name; ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="flex flex-col gap-1 flex-1">
                            <h4 class="text-[15px] font-bold text-[#0d121c] leading-snug group-hover:text-primary transition-colors line-clamp-2"><?php the_title(); ?></h4>
                            <div class="mt-auto pt-2 text-xs text-gray-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">calendar_month</span> <?php echo get_the_date('d M'); ?>
                            </div>
                        </div>
                    </a>
                    <?php }} wp_reset_postdata(); ?>
                </div>
            </div>
            
            <?php endwhile; endif; ?>
        </article>

        <!-- Sidebar -->
        <aside class="w-full lg:w-[32%] flex flex-col gap-6 relative">
             <div class="sticky top-24 flex flex-col gap-6">
                <!-- Featured Posts -->
                <div class="bg-white rounded-2xl p-6 shadow-card border border-gray-100">
                    <div class="flex items-center gap-2 mb-5">
                        <div class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600">
                            <span class="material-symbols-outlined text-[18px] fill-current">star</span>
                        </div>
                        <h3 class="font-bold text-lg text-gray-900">Bài viết nổi bật</h3>
                    </div>
                    <div class="flex flex-col gap-5">
                         <?php
                        $featured_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'ignore_sticky_posts' => 1));
                        $count = 0;
                        if ($featured_posts->have_posts()) : while ($featured_posts->have_posts()) : $featured_posts->the_post(); $count++; ?>
                        <a class="group flex gap-4 items-start" href="<?php the_permalink(); ?>">
                            <div class="shrink-0 w-8 h-8 rounded-full bg-blue-50 text-primary font-bold flex items-center justify-center text-sm group-hover:bg-primary group-hover:text-white transition-colors"><?php echo $count; ?></div>
                            <div class="flex flex-col gap-1">
                                <h4 class="text-sm font-semibold text-gray-800 leading-snug group-hover:text-primary transition-colors"><?php the_title(); ?></h4>
                                <span class="text-xs text-gray-400"><?php echo get_the_date('d M, Y'); ?></span>
                            </div>
                        </a>
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                    </div>
                </div>

                <!-- CTA Widget -->
                <div class="bg-gradient-to-b from-primary to-primary-dark rounded-3xl p-8 text-center text-white shadow-xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-10 -mt-10 blur-xl"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-blue-400/20 rounded-full -ml-5 -mb-5 blur-lg"></div>
                    <div class="relative z-10 flex flex-col items-center gap-4">
                        <div class="w-14 h-14 rounded-full bg-white/20 flex items-center justify-center backdrop-blur-sm mb-2 shadow-inner border border-white/10">
                            <span class="material-symbols-outlined text-[28px]">rocket_launch</span>
                        </div>
                        <h3 class="text-xl font-bold leading-tight">Bạn đang bán Shopee và gặp khó khăn?</h3>
                        <p class="text-blue-100 text-sm mb-4 leading-relaxed">Đăng ký tư vấn miễn phí cùng chuyên gia Mexo Group để tìm ra giải pháp tăng trưởng bền vững.</p>
                        <div class="w-full flex flex-col gap-3">
                            <button class="w-full bg-white text-primary font-bold py-3 px-4 rounded-full shadow-lg hover:bg-gray-50 hover:scale-[1.02] transition-all">
                                Nhận tư vấn Shopee
                            </button>
                            <button class="w-full bg-white/10 backdrop-blur-sm text-white border border-white/30 font-medium py-3 px-4 rounded-full hover:bg-white/20 transition-all">
                                Xem dịch vụ vận hành
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Categories -->
                <div class="bg-white rounded-2xl p-6 shadow-card border border-gray-100">
                    <div class="flex items-center gap-2 mb-5">
                        <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                            <span class="material-symbols-outlined text-[18px]">category</span>
                        </div>
                        <h3 class="font-bold text-lg text-gray-900">Chủ đề bài viết</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <?php
                        $categories = get_categories(array('orderby' => 'count', 'order' => 'DESC', 'number' => 10));
                        foreach ($categories as $category) {
                            echo '<a class="px-3 py-1.5 bg-gray-50 hover:bg-indigo-50 hover:text-indigo-600 text-gray-600 rounded-full text-xs font-medium transition-colors border border-gray-100" href="' . get_category_link($category->term_id) . '">' . $category->name . ' (' . $category->count . ')</a>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Recent Posts -->
                <div class="bg-white rounded-2xl p-6 shadow-card border border-gray-100">
                    <div class="flex items-center gap-2 mb-5">
                        <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-500">
                            <span class="material-symbols-outlined text-[18px] fill-current">schedule</span>
                        </div>
                        <h3 class="font-bold text-lg text-gray-900">Mới cập nhật</h3>
                    </div>
                    <div class="flex flex-col gap-6 divide-y divide-gray-50">
                         <?php
                        $recent_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3));
                        if ($recent_posts->have_posts()) : while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                        <a class="group pt-1 first:pt-0" href="<?php the_permalink(); ?>">
                            <h4 class="text-sm font-semibold text-gray-800 leading-snug group-hover:text-primary transition-colors mb-2"><?php the_title(); ?></h4>
                            <span class="text-[11px] text-gray-400"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' trước'; ?></span>
                        </a>
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.mexo-post-content').forEach(function(content) {
        const paragraphs = Array.from(content.querySelectorAll('p')).filter(function(paragraph) {
            return paragraph.textContent && paragraph.textContent.trim().length > 0;
        });

        const lead = paragraphs.find(function(paragraph) {
            const text = paragraph.textContent.trim();
            return text.length >= 110 && !/^c[aậ]p nh[aậ]t/i.test(text) && !/^ngu[oờ]n/i.test(text);
        });

        if (lead) {
            lead.classList.add('mexo-article-lead');
        }

        content.querySelectorAll('table').forEach(function(table) {
            if (table.parentElement && table.parentElement.classList.contains('mexo-table-scroll')) {
                return;
            }

            const wrapper = document.createElement('div');
            wrapper.className = 'mexo-table-scroll';
            table.parentNode.insertBefore(wrapper, table);
            wrapper.appendChild(table);
        });
    });
});
</script>

<?php get_footer(); ?>

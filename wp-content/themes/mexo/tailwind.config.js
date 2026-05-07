/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.php", "./**/*.php", "./template-parts/**/*.php", "./assets/**/*.js"],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                // Main Brand Colors
                primary: "#0057FF",
                "primary-vibrant": "#2563EB",
                "primary-dark": "#0042C7",
                "primary-hover": "#0b4ecf",
                "primary-light": "#eef4ff",

                // Secondary / Action
                secondary: "#F97316",
                accent: "#00C2CB",

                // CTA & Alerts
                "cta-orange": "#FF5722",
                "cta-red": "#EF4444",

                // Backgrounds
                "background-light": "#F8FAFC",
                "background-dark": "#0F172A",
                "background-off": "#f8fafd",

                // Surfaces
                "surface-light": "#FFFFFF",
                "surface-dark": "#1E293B",
                "card-light": "#ffffff",
                "card-dark": "#1a2333",

                // Text
                "text-main": "#0d121c",
                "text-sub": "#49659c",
                "text-light": "#1F2937",
                "text-dark": "#E2E8F0",

                // Shopee specific
                shopee: "#EE4D2D",
                "shopee-primary": "#EE4D2D",
                "shopee-light": "#FFF3ED",
                "shopee-dark": "#CC3B21",
            },
            fontFamily: {
                display: ['"Be Vietnam Pro"', "sans-serif"],
                body: ['"Be Vietnam Pro"', "sans-serif"],
            },
            borderRadius: {
                DEFAULT: "0.5rem",
                lg: "1rem",
                xl: "1.5rem",
                "2xl": "2rem",
                "3xl": "2.5rem",
                full: "9999px"
            },
            boxShadow: {
                'glow': '0 0 25px rgba(0, 87, 255, 0.25)',
                'card': '0 10px 40px -10px rgba(0, 0, 0, 0.05)',
                'hover': '0 25px 50px -12px rgba(0, 87, 255, 0.15)',
                'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)',
                'hero-card': '0 25px 50px -12px rgba(0, 0, 0, 0.15)',
                'card-hover': '0 0 0 1px rgba(0,0,0,0.03), 0 20px 40px -10px rgba(0,0,0,0.08)',
            },
            backgroundImage: {
                'hero-pattern': "url('assets/images/hero-bg.jpg')",
                'grid-pattern': "linear-gradient(to right, #e2e8f0 1px, transparent 1px), linear-gradient(to bottom, #e2e8f0 1px, transparent 1px)",
            },
            animation: {
                'float': 'float 6s ease-in-out infinite',
                'float-delayed': 'float 6s ease-in-out infinite 3s',
                'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                }
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/container-queries'),
    ],
}

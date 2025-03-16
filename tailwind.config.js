import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                spin: {
                    // Re-define Tailwind's default spin animation
                    "0%": { transform: "rotate(0deg)" },
                    "100%": { transform: "rotate(360deg)" },
                },
                slideLeft: {
                    "0%": { transform: "translateX(100%)" },
                    "100%": { transform: "translateX(0)" },
                },
                slideRight: {
                    "0%": { transform: "translateX(0)" },
                    "100%": { transform: "translateX(100%)" },
                },
                fadeOut: {
                    "0%": { opacity: 1 },
                    "100%": { opacity: 0 },
                },
            },
            animation: {
                spin: "spin 1s linear infinite", // Re-add the spin animation
                "slide-left": "slideLeft 0.4s ease-out",
                "slide-right": "slideRight 0.5s ease-out",
                "fade-out": "fadeOut 0.5s ease-out",
            },
        },
    },
    plugins: [],
};

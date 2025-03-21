import forms from "@tailwindcss/forms";
import colors from 'tailwindcss/colors';


/** @type {import('tailwindcss').Config} */
// export default {
module.exports = {
    darkMode: "selector",

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/livewire/flux-pro/stubs/**/*.blade.php",
        "./vendor/livewire/flux/stubs/**/*.blade.php",
    ],

    theme: {
        extend: {
            // colors: {
            //     // Accent variables are defined in resources/css/app.css...
            //     accent: {
            //         DEFAULT: 'var(--color-accent)',
            //         content: 'var(--color-accent-content)',
            //         foreground: 'var(--color-accent-foreground)',
            //     },
            // },
            keyframes: {
                marquee: {
                    '0%': {
                        transform: 'translateX(0)'
                    },
                    '100%': {
                        transform: 'translateX(-100%)'
                    },
                },
            },
            // Add custom animations
            animation: {
                'marquee': 'marquee 20s linear infinite',
            },
            colors: {
                // Re-assign Flux's gray of choice...
                zinc: colors.neutral,

                // Accent variables are defined in resources/css/app.css...
                accent: {
                    DEFAULT: 'var(--color-accent)',
                    content: 'var(--color-accent-content)',
                    foreground: 'var(--color-accent-foreground)',
                },
            },
            fontFamily: {
                sans: ["Inter", "sans-serif"],
            },
        },
    },

    plugins: [forms],
};
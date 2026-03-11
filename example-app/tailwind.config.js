import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            // ✅ ADD THIS BLOCK (SAFE)
            colors: {
                upvst: {
                    red: '#B30000',
                    dark: '#0F0F0F',
                    green: '#0E7A4E',
                    gray: '#1F2937',
                },
            },
        },
    },

    plugins: [forms],
};

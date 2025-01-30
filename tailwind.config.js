import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    // Paths to all of your template files

    
    darkMode: 'class', // Enables class-based dark mode

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            // Extend the default fontFamily with Figtree
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    // Add Tailwind plugins
    plugins: [
        forms, // Enables the @tailwindcss/forms plugin for better form styling
    ],
};

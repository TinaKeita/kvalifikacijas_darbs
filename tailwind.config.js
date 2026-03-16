import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                brand: {
                    primary: '#BE5B50',
                    secondary: '#8A2D3B',
                    accent: '#641B2E',
                    light: '#FBDB93',
                },

                darkbrand: {
                    primary: '#E07A6F',
                    secondary: '#A9444F',
                    accent: '#7A2B3E',
                    light: '#3a2a1e',
                }
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                logo: ['Playfair Display', 'serif'],
            },
        }
    },

    plugins: [forms],
};

const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'primary': '#9fd8ff',
                'dark': '#1c1c1c',
                'light': '#fff',
                'gray': {
                  '50': '#f9fafb',
                  '100': '#f4f5f7',
                  '200': '#e5e7eb',
                  '300': '#d2d6dc',
                  '400': '#9fa6b2',
                  '500': '#6b7280',
                  '600': '#4b5563',
                  '700': '#374151',
                  '800': '#252f3f',
                  '900': '#161e2e'
                }
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};

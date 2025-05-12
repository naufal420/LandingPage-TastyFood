import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                  DEFAULT: '#FF2D20', // Warna utama Laravel merah
                  50: '#fee2e2',
                  100: '#fecaca',
                  200: '#fca5a5',
                  300: '#f87171',
                  400: '#FF2D20', // Hover akan mengikuti skema ini
                  500: '#dc2626',
                  600: '#b91c1c',
                  700: '#991b1b',
                  800: '#7f1d1d',
                  900: '#450a0a',
                },
              },
        },
    },
    plugins: [],
};

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                'transparent': 'transparent',
                'blue': '#1fb6ff',
                'dark-blue': '#7e5bef',
                'pink': '#ff49db',
                'orange': '#ff7849',
                'green': '#13ce66',
                'dark-green': '#0c7941',
                'gray-dark': '#273444',
                'gray': '#8492a6',
                'gray-light': '#d3dce6',
            },
            fontFamily: {
                sans: ['Rubik', ...defaultTheme.fontFamily.sans],
                serif: ['Merriweather', ...defaultTheme.fontFamily.serif],
            },
            fontWeight: {
                normal: 300,
                medium: 400,
                bold: 500,
                heavy: 700
            }
        },
    },
    plugins: [require('@tailwindcss/forms')],
}

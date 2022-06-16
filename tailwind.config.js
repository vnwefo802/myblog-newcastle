const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'banner': "url('/images/banner.jpg')",
                'footer-texture': "url('/img/footer-texture.png')",
              },
        },
    },
    plugins: [],
}
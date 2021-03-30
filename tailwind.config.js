module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                "l-blue": "#00003f",
                "l-white": "#f2f2f2",
                "l-green": "#34d399",
                "l-green-light": "#40ffb9",
                "l-green-dark": "#059669",
            }
        },
    },
    variants: {
        extend: {
            ringWidth: ['hover'],
            scale: ['group-hover']
        },
    },
    plugins: [],
};

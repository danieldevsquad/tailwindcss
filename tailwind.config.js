module.exports = {
    purge:    [
        './resources/**/*.blade.php',
        './resources/**/*.css',
    ],
    darkMode: false, // or 'media' or 'class'
    theme:    {
        extend: {
            colors: {
                primary: {
                    500: '#0262F5',
                    600: '#035AE0',
                    700: '#004AB7',
                },
            },
        },
    },
    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },
    plugins:  [
        require('@tailwindcss/ui'),
        require('@tailwindcss/forms'),
    ],
}

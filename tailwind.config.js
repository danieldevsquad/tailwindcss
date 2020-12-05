module.exports = {
    purge:    [
        './resources/**/*.blade.php',
        './resources/**/*.css',
    ],
    darkMode: false, // or 'media' or 'class'
    theme:    {
        extend: {
            colors: {
                primary:   {
                    500: '#3A77C0',
                    600: '#356BAD',
                    700: '#29588D',
                },
                secondary: {
                    500: '#FFC807',
                    600: '#E0B000',
                    700: '#B99003',
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

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        borderColor: theme => ({
            ...theme('colors'),
             DEFAULT: theme('colors.gray.300', 'currentColor'),
            'primary': '#becf00;',
            'secondary': '#ffed4a',
            'danger': '#e3342f',
        }),
        backgroundColor: theme => ({
            ...theme('colors'),
             DEFAULT: theme('colors.gray.300', 'currentColor'),
            'primary': '#becf00;'
        }),
        textColor: theme => ({
            ...theme('colors'),
             DEFAULT: theme('colors.gray.300', 'currentColor'),
            'primary': '#becf00;'
        }),
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            fontWeight: ['hover']
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};

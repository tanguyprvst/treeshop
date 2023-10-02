/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                primary: { "50": "#afdd97", 
                "100": "#93bf7f", 
                "200": "#7aa56a", 
                "300": "#69935c", 
                "400": "#577f4c", 
                "500": "#4c7043", 
                "600": "#406039", 
                "700": "#365930", 
                "800": "#274421", 
                "900": "#20331c" }
            },
            fontFamily: {
                'sans': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
                'body': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
                'mono': ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', 'monospace']
            },
            transitionProperty: {
                'width': 'width'
            },
            textDecoration: ['active'],
            minWidth: {
                'kanban': '28rem'
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        function ({ addUtilities }) {
            const newUtilities = {
                    '.truncate-cell': {
                    overflow: 'hidden',
                    'white-space': 'nowrap',
                    'text-overflow': 'ellipsis',
                    'max-width': '300px', // Ajustez la largeur maximale selon vos besoins
                },
            };
            addUtilities(newUtilities, ['responsive', 'hover']);
        },
    ],
}
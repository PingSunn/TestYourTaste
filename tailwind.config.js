/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.{html,js,php}"],
    theme: {
        extend: {
            fontFamily: {
                "anuphan": ["Anuphan", "sans-serif"],
                "pacifico": ["Pacifico", "cursive"],
            },
        },
        // colors: {
        // white: '#ffffff',
        // radioBtn: '#fcb096',
        // }
    },
    plugins: [
        function({ addUtilities }) {
            const newUtilities = {
                ".no-scrollbar::-webkit-scrollbar": {
                    display: "none",
                },
                ".no-scrollbar": {
                    "-ms-overflow-style": "none",
                    "scrollbar-width": "none",
                },
            };
            addUtilities(newUtilities);
        },
    ],
};
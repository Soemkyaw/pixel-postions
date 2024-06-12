/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                black: "#060606",
            },
            fontFamily: {
                "roboto-slab": ["Roboto Slab","sans-serif"],
            },
            fontSize: {
                "2xs": "10px"
            }
        },
    },
    plugins: [],
};


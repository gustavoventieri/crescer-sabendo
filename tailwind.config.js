/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                customPurple: "#999AE4",
                customBlue: "#92BAE1",
            },
            borderRadius: {
                "br-only": "0 0 0.5rem 0", // Defina o valor conforme necessário
            },
            fontFamily: {
                itim: ["Itim", "cursive"],
            },
        },
    },
    plugins: [
        function ({ addUtilities }) {
            const newUtilities = {
                ".rounded-br-only": {
                    "border-bottom-right-radius": "2.1rem",
                },
            };
            addUtilities(newUtilities, ["responsive", "hover"]);
        },
    ],
};

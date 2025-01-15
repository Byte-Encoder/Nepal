/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#011F5B",
                    secondary: "#FFFFFF",
                    accent: "#e5ab3a",
                    neutral: "#3d4451",
                    "base-100": "#ebede9",
                    "base-200": "#708090",
                },
            },
        ],
    },
};

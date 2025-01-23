/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                nepal: "url('/img/nepal.png')",
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                mytheme: {
                    // primary: "#011F5B",
                    // primary: "#4c00b0",
                    // primary: "#7600bc",
                    primary: "#DC143C",
                    secondary: "#FFFFFF",
                    accent: "#e5ab3a",
                    neutral: "#3d4451",
                    "base-100": "#ebede9",
                    "base-300": "#708090",
                    "base-200": "#d9b8f2",
                },
            },
        ],
    },
};

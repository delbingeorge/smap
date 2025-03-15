/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppy: ["Poppins", "sans-serif"],
            },
            colors: {
                // primary: "#583DEA",
                primary: "#003bdd",
                secondary: "#F6F6F6",
                accent: "#f04939",
                light: "#FFFFFF",
                dark: "#11141D",
            },
        },
    },
    plugins: [],
};

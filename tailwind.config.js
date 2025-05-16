/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");

module.exports = {
  content: ["./public/**/*.{html,js}", "./src/**/*.{html,js,css}"],
  theme: {
    
    extend: {
      fontFamily: {
        poppins: ['"Poppins"', "sans-serif"],
      },
      colors: {
        white: "#FFFFFF",
        primary: "#D88663",
        secondary: "#E5AB91",
        tertiary: "#FFF9F6",
        font_primary: "#5D5D5D",
        font_secondary: "#AFAFAF",
        font_tertiary: "#E5E5E5",
        font_jingga: "#D88663",
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
};

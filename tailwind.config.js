/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");

module.exports = {
  content: [
    "./public/**/*.{html,js,php}",
    "./komponen/**/*.{php,html}",
    "./**/*.php",
  ],
  safelist: [
    'border-secondary',
    'text-font_primary',
    'text-font_secondary',
    'bg-tertiary',
    // tambahkan semua custom class yang kamu butuhkan secara manual
  ],
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
      zIndex: {
        99: "99", 
      },
      spacing: {
        '4': '16px',
        '8': '32px', 
        '12': '48px', 
        '16': '64px',
        '20': '80px',
        '22': '88px',
        '24': '96px',
        '26': '104px',
        '27': '108px',
        '30': '120px',
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    require('@tailwindcss/typography'),
    require("@tailwindcss/aspect-ratio"), 
     function ({ addUtilities }) {
      addUtilities({
        '.place-items-center': {
          'place-items': 'center',
        },
      })
    }
  ],
};

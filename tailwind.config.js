/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    container: {
        center : true ,
        padding : '50px',
      },
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        firaSans : ["Fira Sans", "sans-serif"] ,
        poppins : ["Poppins", "sans-serif"] ,
        inter : ["Inter", "sans-serif"],
        CarterOne:["Carter One", "serif"],
        protestStrike : ["Protest Strike", "serif"] ,
        lilitaOne : ["Lilita One", "serif"] ,
        permanentMarker : ["Permanent Marker", "serif"] ,
        breeSerif : ["Bree Serif", "serif"],
        acmeRegular : [ "Acme", "serif"],
      },
    },
  },
  plugins: [],
}

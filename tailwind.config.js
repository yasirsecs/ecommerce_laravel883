/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",],
  theme: {
    extend: {
      colors: {
        'theme-blue': '#5515ef',
        'theme-blue-dark': '#3c01ca',
        'theme-pink': '#eb589e',
        /*sidebar menu*/
        'theme-black': '#272727',
        'theme-green-light': '#fbfefb',
      },
      
      boxShadow: {
        'theme-1': '0 0 60px -15px rgba(0, 0, 0, 0.7)',
        'theme-2': '15px 0 35px -5px rgba(0, 0, 0, 0.5)',
        'text-shadow':'5px 5px 1px rgb(0 0 0 / 10%)',
       
      },
      fontSize: {
        '10xl': '10rem',
        '16xl': '16rem',
        '17xl': '17rem',
        '18xl': '18rem',
        '19xl': '19rem',
        '20xl': '20rem',
      },
      letterSpacing: {
        'more-wide': '1rem',
      },
      shadow: {
        'text-shadow1': '17px -3px 14px rgb(0 0 0 / 10%)',
      },
      screens:{
        'sm1': '200px',
        'sm2': '320px',
        'sm3': '420px',
        'sm4': '640px',
        'sm5': '720px',
        // => @media (min-width: 640px) { ... }        
          'tablet': '576px',
          // => @media (min-width: 576px) { ... }
        
          'laptop': '992px',
          // => @media (min-width: 992px) { ... }
        
          'desktop': '1200px',
          // => @media (min-width: 1200px) { ... }
       },
       // sidebar menu
       height: {
        'screen-75': '90vh'
      },
      fontFamily: {
        'main': ['"Open Sans"']
      }
      
    },
  },
  plugins: [],
}

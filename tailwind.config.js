/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    // using my own colors
    theme: {
        // https://colorpalettes.net/color-palette-1195/
      extend: {
        colors: {
         first: '#151515',
         secondary: '#A91D3A',
         third: '#EEEEEE',
         fourth: '#C73659',
         fifth: '#020A12',
        } ,
        //using my own font
        fontFamily:{
            "Cinzel": ["Cinzel", "serif"]
        },
        fontSize: {
            "2xs": ".625rem" // 10
        }

      },
    },
    plugins: [],
  }


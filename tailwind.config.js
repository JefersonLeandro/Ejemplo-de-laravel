/** @type {import('tailwindcss').Config} */
export default {
  
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",

    '!./resources/views/bootstrap.blade.php',//excluir un archivo de tailwind. 
  ],

  theme: {
    extend: {},
  },
  plugins: [require('@tailwindcss/forms')],
}


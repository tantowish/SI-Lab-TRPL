/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
    colors: {
      'main': '#64C5D3',
      'redpallete':'#E46F5B' ,
      'orangepallete':'#E46F5B',
      'borderpallete':'#DEE4ED',
      'prev':'#FFB13B',
      'customColor': '#64c5d3',
      'yellowpallete':'#EFD892'

    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}


import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'pink-light': '#ffe4f0',    // pink lembut
        'pink-medium': '#ffb6c1',   // pink imut
        'pink-dark': '#ff85b3',     // pink tua
        'purple-light': '#e0c7f5',  // ungu muda
        'purple-medium': '#c199e7', // ungu medium
        'purple-dark': '#a15bc8',   // ungu tua
        'white-soft': '#fdf6fb',    // putih lembut
      },
    },
  },
  plugins: [],
}

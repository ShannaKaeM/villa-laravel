/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#f4f7f7',
          100: '#e2ebeb',
          200: '#c8d9d9',
          300: '#a2bdbe',
          400: '#83a4a5',
          500: '#5a7f80',
          600: '#4d6a6d',
          700: '#43585b',
          800: '#3c4c4e',
          900: '#354244',
          950: '#20292c',
        },
        secondary: {
          50: '#f9f4f1',
          100: '#ede1d8',
          200: '#d7c6bb',
          300: '#c79c84',
          400: '#b78468',
          500: '#a56f51',
          600: '#975d48',
          700: '#7e493f',
          800: '#683d38',
          900: '#573330',
          950: '#301918',
        },
        natural: {
          50: '#f8f6f4',
          100: '#eeece6',
          200: '#dbd7cd',
          300: '#bbb1a0',
          400: '#ac9e8b',
          500: '#9b8974',
          600: '#8e7a68',
          700: '#776557',
          800: '#62534a',
          900: '#50453e',
          950: '#2a2320',
        },
        base: {
          50: '#ffffff',
          100: '#f6f6f6',
          200: '#eeeeee',
          300: '#d5d5d5',
          400: '#a5a5a5',
          500: '#8a8a8a',
          600: '#6f6f6f',
          700: '#545454',
          800: '#393939',
          900: '#1e1e1e',
          950: '#000000',
        },
      },
      fontFamily: {
        sans: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
}

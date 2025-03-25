/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          'accent':'#FF2D20',
          'accent-dark':'#ff2d201a',
        }
      },
    },
    plugins: [],
  }
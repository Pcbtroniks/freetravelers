/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/views/front/**/*.blade.php",
    "./resources/**/views/layout/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

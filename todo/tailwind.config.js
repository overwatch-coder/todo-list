module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'light': '#ffff',
        'dark': 'black',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
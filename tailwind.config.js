module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        logo: ['"Titillium Web"', 'bold'],
      }
    }
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
  variants: {
    extend: {},
  },
}

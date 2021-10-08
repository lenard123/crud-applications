const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',

  purge: [
    '**.php'
  ],

  theme: {
    extend: {
      colors: {

        //Define Blue as Primary Color
        primary: { 
          DEFAULT: colors.blue['500'],
          ...colors.blue 
        }
      }
    }
  }

}
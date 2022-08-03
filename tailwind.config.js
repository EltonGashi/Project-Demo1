/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.php', './inc/**/*.php'],
  theme: {
    screens:{
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440p'
    },
    extend: {
      colors:{
        
      }
    },
  },
  plugins: [],
}

/ @type {import('tailwindcss').Config} /
module.exports = {
  content: ['./src//.css' , './.php'],
  theme: {
    colors:{
      'txtGreen': '#799F28',
      'bg': '#F0F0F0'
    },
    screens:{
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px'
    },
    fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    extend: {
      spacing: {
        '8xl': '96rem',
        '9xl': '128rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    }
  },
}

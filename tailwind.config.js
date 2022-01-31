module.exports = {
  mode: 'jit',
  purge: [
    './dist/**/*.{php,html}',
    './components/**/*.{php,html}',
    './src/**/*.{js,jsx,ts,tsx,vue}',
    './php/**/*.php',
    './html/**/*.html',
  ],
  content: [],
  theme: {
    extend: {
      fontFamily: {
        'cairo': ['Cairo', 'sans-serif'],
        'almarai': ['Almarai', 'sans-serif'],
      },
      animation: {
        'appear': 'appear 0.2s ease-out',
      },
    },
    screens: {

      'sm': {'max': '639px'},
      // => @media (max-width: 639px) { ... }

      'tablet': '640px',
      // => @media (min-width: 640px) { ... }

      'laptop': '1024px',
      // => @media (min-width: 1024px) { ... }

      'desktop': '1280px',
      // => @media (min-width: 1280px) { ... }

      'wide': '1550px',
      // => @media (min-width: 1280px) { ... }
    },
  },
  plugins: [],
}

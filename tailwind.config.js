module.exports = {
  mode: 'jit',
  purge: [
    './components/**/*.{vue,js}',
    './layouts/**/*.vue',
    './pages/**/*.vue',
    './plugins/**/*.{js,ts}',
    './nuxt.config.{js,ts}',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        title: 'Josefin Sans, sans-serif',
      },
      typography: {
        DEFAULT: {
          css: {
            h1: {
              color: '#ECC127',
            },
            h2: {
              color: '#ECC127',
            },
            h3: {
              color: '#ECC127',
            },
            h4: {
              color: '#ECC127',
            },
            h5: {
              color: '#ECC127',
            },
            h6: {
              color: '#ECC127',
            },
          },
        },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/typography'),
  ],
}

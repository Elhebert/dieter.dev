module.exports = {
  content: [
    './components/**/*.{vue,js}',
    './layouts/**/*.vue',
    './pages/**/*.vue',
    './plugins/**/*.{js,ts}',
    './nuxt.config.{js,ts}',
  ],
  theme: {
    extend: {
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
            a: {
              '@apply no-underline hover:underline font-bold text-[#3736C6]': '',
            },
          },
        },
      },
    },
  },
  variants: {
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

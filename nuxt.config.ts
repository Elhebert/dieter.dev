import { defineNuxtConfig } from 'nuxt3'
import Markdown from 'vite-plugin-md'

// https://v3.nuxtjs.org/docs/directory-structure/nuxt.config
export default defineNuxtConfig({
  css: ['~/assets/index.css'],
  build: {
    postcss: {
      postcssOptions: {
        plugins: {
          tailwindcss: {},
          autoprefixer: {},
        },
      },
    }
  },
  vite: {
    plugins: [
      Markdown({ wrapperClasses: 'prose leading-loose max-w-none', frontmatter: true, exposeFrontmatter: true }),
    ],
    // @ts-ignore
    vue: {
      include: [/\.vue$/, /\.md$/],
    }
  }
})

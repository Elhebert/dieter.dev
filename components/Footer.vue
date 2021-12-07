<template>
  <footer class="w-full text-center p-16 bg-[#FAF8EF] border border-t-[#ECC127]">
    <p class="mb-5">
      This website source code can be found on <CtaLink href="https://github.com/elhebert/dieter.dev">GitHub</CtaLink>.
    </p>
    <p class="my-5">
      Made by <CtaLink href="/">Elhebert</CtaLink> using&nbsp;<CtaLink href="https://tailwindcss.com">Tailwind CSS</CtaLink>, powered by&nbsp;<CtaLink href="https://nuxtjs.org/">Nuxt</CtaLink> and hosted on&nbsp;<CtaLink href="https://www.netlify.com">Netlify</CtaLink>.
    </p>
    <p class="mt-5">Copyright &copy; <time :datetime="`${year}`">{{ year }}</time></p>
  </footer>
</template>

<script lang="ts" setup>
  const year = new Date().getFullYear()
</script>

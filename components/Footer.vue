<template>
  <footer class="w-full text-center p-16 bg-[#FAF8EF] border border-t-[#ECC127]">
    <p class="mb-5">
      This website source code can be found on <Link href="https://github.com/elhebert/dieter.dev">GitHub</Link>.
    </p>
    <p class="my-5">
      Made by <Link href="/">Elhebert</Link> using&nbsp;<Link href="https://tailwindcss.com">Tailwind CSS</Link>, powered by&nbsp;<Link href="https://nuxtjs.org/">Nuxt</Link> and hosted on&nbsp;<Link href="https://www.netlify.com">Netlify</Link>.
    </p>
    <p class="mt-5">Copyright &copy; <time :datetime="`${year}`">{{ year }}</time></p>
  </footer>
</template>

<script lang="ts" setup>
  const year = new Date().getFullYear()
</script>

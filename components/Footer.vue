<script lang="ts" setup>
const year = new Date().getFullYear()
</script>

<template>
  <footer class="w-full text-center p-16 bg-[#FAF8EF] border border-t-[#ECC127]">
    <p>
      Made by <a class="no-underline hover:underline font-bold text-[#3736C6]" href="/">Elhebert</a> using&nbsp;<a class="no-underline hover:underline font-bold text-[#3736C6]" href="https://tailwindcss.com">Tailwind CSS</a>, powered by&nbsp;<a class="no-underline hover:underline font-bold text-[#3736C6]" href="https://nuxtjs.org/">NuxtJS</a> and hosted on&nbsp;<a class="no-underline hover:underline font-bold text-[#3736C6]" href="https://www.netlify.com">Netlify</a>.
    </p>
    <p>Copyright &copy; <time :datetime="year">{{ year }}</time></p>
  </footer>
</template>

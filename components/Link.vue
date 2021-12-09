<template>
  <a class="no-underline hover:underline font-bold text-[#3736C6]" :href="href">
    <slot />
  </a>
</template>

<script lang="ts" setup>
  defineProps(['href'])
</script>

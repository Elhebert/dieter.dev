<template>
  <p class="bg-[#FAF8EF] border border-[#ECC127] py-4 px-3">
    This article was writen in {{ writtenOn }}. It might not be relevant anymore.
  </p>
</template>

<script lang="ts" setup>
import { format } from 'date-fns'

const { publishedAt } = defineProps({
  publishedAt: String,
})

const writtenOn = format(new Date(publishedAt), 'MMMM yyyy')
</script>

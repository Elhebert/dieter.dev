<template>
  <article class="mt-16">
    <Post />
  </article>
</template>

<script lang="ts" setup>
useMeta({
  title: 'Dieter Stinglhamber - post'
})

const route = useRoute()
const Post = await import(`@/journal/${route.params.slug}.md`)
</script>

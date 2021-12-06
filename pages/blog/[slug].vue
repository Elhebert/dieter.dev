<template>
  <Head>
    <Title>{{ title }}</Title>
    <Meta name="description" content="Archived blog post" />
  </Head>

  <article class="mt-16">
    <Warning class="mb-16" v-if="blogpost" :published-at="blogpost?.frontmatter?.date" />
    <component :is="Post" ref="blogpost"/>
  </article>
</template>

<script lang="ts" setup>
const route = useRoute()
const blogpost = ref()

const Post = defineAsyncComponent(async () => {
  try {
    return await import(`../../journal/${route.params.slug}.md`)
  } catch (reason) {
    console.error(reason)
  }
})

const title = computed(() => blogpost?.frontmatter?.title
    ? `[Archived] ${blogpost?.frontmatter?.title}`
    : '[Archived] this post has been archived')
</script>

<template>
  <article class="sm:mt-16">
    <Warning v-if="page.archived" class="mb-16" :published-at="page.date" />
    <nuxt-content :document="page" class="prose leading-loose max-w-none" />
  </article>
</template>

<script lang="ts">
import { useRoute, useAsync, useContext, defineComponent, useMeta, Ref } from '@nuxtjs/composition-api';

interface IPost {
  date: Date,
  title: string,
  archived?: Boolean
}

export default defineComponent({
  setup () {
    const route = useRoute()

    const { $content } = useContext()
    const page = useAsync(() => {
      return $content(route.value.params.slug).fetch<IPost>()
    }) as Ref<IPost>

    useMeta({
      title: `${page?.value?.archived ? '[Archived] ' : ' '}${page?.value?.title}`,
      description: `${page?.value?.archived ? '[Archived] ' : ' '}${page?.value?.title}`,
    })

    return { page }
  },

  head: {}
})
</script>

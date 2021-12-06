<template>
  <header class="container max-w-screen-xl mx-auto px-4 sm:px-16 py-4">
    <nav class="flex justify-end">
      <ul class="flex space-x-4">
        <li>
          <NuxtLink
            to="/"
            active-class="text-[#3736C6]"
            class="text-xl font-bold no-underline hover:text-[#3736C6]"
          >
            Home
          </NuxtLink>
        </li>
        <li>
          <NuxtLink
            to="/uses"
            active-class="text-[#3736C6]"
            class="text-xl font-bold no-underline hover:text-[#3736C6]"
          >
            Uses
          </NuxtLink>
        </li>
      </ul>
    </nav>
  </header>
</template>

<script lang="ts" setup></script>

<script setup>
import { RouterLink } from 'vue-router';
defineProps({ href: String });
</script>

<template>
  <RouterLink
    :to="href"
    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group dark:text-gray-300 dark:hover:bg-gray-700 dark:bg-gray-800"
  >
    <slot></slot>

    <span class="ml-3 flex-1 whitespace-nowrap">
      <slot name="body"></slot>
    </span>
  </RouterLink>
</template>

<style>
.router-link-active {
  background-color: rgb(55, 65, 81);
}
</style>

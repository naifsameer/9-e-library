<script setup>
defineProps({
  type: String,
});
</script>

<template>
  <button
    :type="type"
    class="capitalize px-16 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
  >
    <slot />
  </button>
</template>

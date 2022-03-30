<script setup>
import { computed } from 'vue';

let generateRandomID = computed(() => Math.round(Math.random() * 1e6));

defineProps({
  label: {
    type: String,
    default: 'Date',
  },
  name: {
    type: String,
    required: true,
  },
});
</script>

<template>
  <div>
    <label
      :for="'input-id' + generateRandomID"
      class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
      >{{ label }}</label
    >
    <textarea
      :name="name"
      id="'input-id' + generateRandomID"
      rows="4"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      placeholder=""
    ></textarea>
  </div>
</template>

<script setup>
import { computed } from 'vue';

let generateRandomID = computed(() => Math.round(Math.random() * 1e6));

defineProps({
  type: {
    type: String,
    default: 'text',
  },
  label: {
    type: String,
    default: '',
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
      v-if="label !== ''"
      :for="'input-id' + generateRandomID"
      class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
      >{{ label }}</label
    >
    <input
      :name="name"
      :type="type"
      :id="'input-id' + generateRandomID"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      required
    />
  </div>
</template>

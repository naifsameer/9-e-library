<script setup>
import { computed } from 'vue';

let generateRandomID = computed(() => Math.round(Math.random() * 1e6));

defineProps({
  label: {
    type: String,
    default: '',
  },
  name: {
    type: String,
    required: true,
  },
  value: {
    type: String,
    required: true,
  },
});
</script>

<template>
  <div class="flex items-center mb-4">
    <input
      :name="name"
      :id="'input-id' + generateRandomID"
      type="radio"
      :value="value"
      class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
      aria-labelledby="country-option-1"
      aria-describedby="country-option-1"
      checked
    />
    <label
      v-if="label !== ''"
      :for="'input-id' + generateRandomID"
      class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
    >
      {{ label }}
    </label>
  </div>
  <div>
    <input
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      required
    />
  </div>
</template>

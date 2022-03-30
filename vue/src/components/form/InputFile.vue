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

    <!-- @change="onFileChange" -->
    <input
      :name="name"
      type="file"
      :id="'input-id' + generateRandomID"
      class="py-2 px-4 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
      placeholder=""
      required
    />
  </div>
</template>

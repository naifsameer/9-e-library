<template>
  <div>
    <label
      :for="'input-id' + generateRandomID"
      class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
      >{{ label }}</label
    >
    <select
      :name="name"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    >
      <option disabled selected>{{ label }}</option>

      <template v-for="option in options" :key="option.id">
        <option :value="option.id">
          {{ option.name }}
        </option>
      </template>
    </select>
  </div>
</template>

<script setup>
let generateRandomID = () => Math.round(Math.random() * 1e6);

defineProps({
  options: Array,
  label: {
    type: String,
    required: true,
  },
  name: {
    type: String,
    required: true,
  },
});
</script>

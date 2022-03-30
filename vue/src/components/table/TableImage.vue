<template>
  <img class="w-16 h-16 object-cover" :src="src" alt="item image" />
</template>

<script setup>
defineProps({
  src: String,
});
</script>

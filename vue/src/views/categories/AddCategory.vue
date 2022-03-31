<script setup>
import Input from '@/components/form/Input.vue';
import InputFile from '@/components/form/InputFile.vue';
import Button from '@/components/form/Button.vue';
import { addCategory } from '@/api/categories';
import { ref } from 'vue';

let addFormRef = ref(null);

let onSubmit = async () => {
  let formData = new FormData(addFormRef.value);

  let res = await addCategory(formData);

  console.log(res);
};
</script>

<template>
  <div>
    <button class="border rounded px-4 py-2 mb-5" @click="$router.go(-1)">
      Back
    </button>
    <h4 class="text-2xl mb-6 capitalize">Add new category</h4>
  </div>

  <form ref="addFormRef" @submit.prevent="onSubmit" class="space-y-4">
    <Input name="name" label="name" />

    <InputFile name="image" label="image" />

    <div
      class="flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"
    >
      <Button type="submit"> Add </Button>
    </div>
  </form>
</template>

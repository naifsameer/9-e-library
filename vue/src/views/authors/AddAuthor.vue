<script setup>
import Input from '@/components/form/Input.vue';
import Textarea from '@/components/form/Textarea.vue';
import Button from '@/components/form/Button.vue';
import { ref } from 'vue';
import { addAuthor } from '@/api/authors';

let addFormRef = ref(null);

let onSubmit = async () => {
  let formData = new FormData(addFormRef.value);

  let res = await addAuthor(formData);

  console.log(res);
};
</script>

<template>
  <div>
    <button class="border rounded px-4 py-2 mb-5" @click="$router.go(-1)">
      Back
    </button>
    <h4 class="text-2xl mb-6 capitalize">Edit author info</h4>
  </div>

  <form ref="addFormRef" @submit.prevent="onSubmit" class="space-y-4">
    <Input name="name" label="name" />
    <Input name="email" type="email" label="email" />
    <Input name="phone" type="number" label="phone" />
    <Textarea name="bio" label="Author bio"></Textarea>

    <div
      class="flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"
    >
      <Button type="submit"> add </Button>
    </div>
  </form>
</template>

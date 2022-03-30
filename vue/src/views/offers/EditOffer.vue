<script setup>
import { axios } from 'axios';

import Input from '@/components/form/Input.vue';
import Button from '@/components/form/Button.vue';
import InputDate from '@/components/form/InputDate.vue';

let onSubmit = () => {
  let formData = new FormData(this.$refs.editFormRef);
  axios.post('/offers/edit', formData).then((res) => {
    console.log(res);
  });
};
</script>

<template>
  <div>
    <button class="border rounded px-4 py-2 mb-5" @click="$router.go(-1)">
      Back
    </button>
    <h4 class="text-2xl mb-6 capitalize">edit offer</h4>
  </div>

  <form ref="editFormRef" @submit.prevent="onSubmit" class="space-y-4">
    <input type="hidden" name="id" />
    <Input name="title" label="title" />
    <Input name="discount" type="number" label="discount" />
    <InputDate name="start_date" label="start date" />
    <InputDate name="end_date" label="end date" />

    <Input name="book_ids" label="book_ids" />
    <Input name="category_ids" label="category_ids" />
    <!-- <Input name="all_books" label="all books" /> -->

    <div
      class="flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"
    >
      <Button type="submit"> edit </Button>
    </div>
  </form>
</template>

<script setup>
import { axios } from 'axios';

import Input from '@/components/form/Input.vue';
import Select from '@/components/form/Select.vue';
import InputFile from '@/components/form/InputFile.vue';
import Textarea from '@/components/form/Textarea.vue';
import Button from '@/components/form/Button.vue';

let onSubmit = () => {
  let formData = new FormData(this.$refs.addFormRef);
  axios
    .post('/books/add', formData, {
      headers: {
        'Content-Type': 'multipart/form-data',
      },
    })
    .then((res) => {
      console.log(res);
    });
};
</script>

<template>
  <div>
    <button class="border rounded px-4 py-2 mb-5" @click="$router.go(-1)">
      Back
    </button>
    <h4 class="text-2xl mb-6 capitalize">Add new book</h4>
  </div>

  <form ref="addFormRef" @submit.prevent="onSubmit" class="space-y-4">
    <Input name="title" label="title"></Input>

    <Input name="price" type="number" label="price"></Input>

    <Input name="pages_number" type="number" label="pages number"></Input>

    <Input name="quantity" type="number" label="Quantity"></Input>

    <Input name="format" label="Format"></Input>

    <!-- publishers -->
    <Select
      label="Publisher"
      name="publisher_id"
      :options="[{ ls: '2' }, { ys: '1' }]"
    ></Select>

    <!-- authors -->
    <Select
      label="Author"
      name="author_id"
      :options="[{ Naif: '2' }, { Ali: '1' }]"
    ></Select>

    <!-- categories -->
    <Select
      label="Category"
      name="category_id"
      :options="[{ cate1: '2' }, { cate2: '1' }]"
    ></Select>

    <InputFile name="image" label="image"></InputFile>

    <Textarea name="description" label="Book description"></Textarea>

    <div
      class="flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"
    >
      <Button type="submit"> Add </Button>
    </div>
  </form>
</template>

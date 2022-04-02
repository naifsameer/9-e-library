<script setup>
import { onMounted, ref } from 'vue';

import Input from '@/components/form/Input.vue';
import Select from '@/components/form/Select.vue';
import InputFile from '@/components/form/InputFile.vue';
import Textarea from '@/components/form/Textarea.vue';
import Button from '@/components/form/Button.vue';
import { addBook } from '@/api/books';

import { getPublishers } from '@/api/publishers';
import { getCategories } from '@/api/categories';
import { getAuthors } from '@/api/authors';

// get data from api
let publishers = ref([]);
let categories = ref([]);
let authors = ref([]);

onMounted(async () => {
  publishers.value = await getPublishers();
  categories.value = await getCategories();
  authors.value = await getAuthors();
});

let addFormRef = ref(null);
let onSubmit = async () => {
  let formData = new FormData(addFormRef.value);

  let res = await addBook(formData);

  console.log(res);
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
    <Input name="title" label="title" />

    <Input name="price" type="number" label="price" />

    <Input name="pages_number" type="number" label="pages number" />

    <Input name="quantity" type="number" label="Quantity" />

    <Input name="format" label="Format" />

    <!-- publishers -->
    <Select label="Publisher" name="publisher_id" :options="publishers" />

    <!-- authors -->
    <Select label="Author" name="author_id" :options="authors" />

    <!-- categories -->
    <Select label="Category" name="category_id" :options="categories" />

    <InputFile name="image" label="image"></InputFile>

    <Textarea name="description" label="Book description"></Textarea>

    <div
      class="flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"
    >
      <Button type="submit"> Add </Button>
    </div>
  </form>
</template>

<script setup>
import Input from '@/components/form/Input.vue';
import Button from '@/components/form/Button.vue';
import InputDate from '@/components/form/InputDate.vue';
import Select from '@/components/form/Select.vue';
import { onMounted, ref } from 'vue';
import { getBooks } from '@/api/books';
import { getCategories } from '@/api/categories';
import { addOffer } from '@/api/offer';

const books = ref([]);
const categories = ref([]);

onMounted(async () => {
  books.value = await getBooks();
  categories.value = await getCategories();
});

let addFormRef = ref(null);
let onSubmit = async () => {
  let formData = new FormData(addFormRef.value);

  let res = await addOffer(formData);

  console.log(res);
};
</script>

<template>
  <div>
    <button class="border rounded px-4 py-2 mb-5" @click="$router.go(-1)">
      Back
    </button>
    <h4 class="text-2xl mb-6 capitalize">add offer</h4>
  </div>

  <form ref="addFormRef" @submit.prevent="onSubmit" class="space-y-4">
    <Input name="title" label="title" />
    <Input name="discount" type="number" label="discount" />
    <InputDate name="start_date" label="start date" />
    <InputDate name="end_date" label="end date" />

    <!-- categories -->
    <Select
      label="categories"
      :options="categories"
      name="category_ids[]"
      multiple
    />

    <!-- books -->
    <Select
      option-key="title"
      name="book_ids[]"
      label="books"
      :options="books"
      multiple
    />
    <!-- <Input name="all_books" label="all books" /> -->

    <div
      class="flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"
    >
      <Button type="submit"> add </Button>
    </div>
  </form>
</template>

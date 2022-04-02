<script setup>
import { RouterLink } from 'vue-router';
import { onMounted, ref } from 'vue';

import { URL } from '@/main.js';

import Modal from '@/components/Modal.vue';
import TableImage from '@/components/table/TableImage.vue';
import { getCategories } from '@/api/categories.js';
import TableRow from '@/components/table/TableRow.vue';

let isDeleteModalOpen = ref(false);
let category_id = ref();

let categories = ref([]);
onMounted(async () => {
  categories.value = await getCategories();
});
</script>

<template>
  <div class="flex justify-between items-center">
    <h2 class="text-2xl mb-6">Categories</h2>
    <RouterLink
      to="/categories/add/"
      class="mx-4 bg-blue-500 px-4 py-2 rounded"
    >
      Add
    </RouterLink>
  </div>

  <!-- Delete modal -->
  <Modal :show="isDeleteModalOpen" :onClose="() => (isDeleteModalOpen = false)">
    <h4 class="text-2xl mb-6 capitalize">
      Are you sure you want to delete this category
    </h4>

    <form @submit.prevent="">
      <input type="hidden" :value="category_id" name="category_id" />

      <div
        class="flex items-center py-2 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600"
      >
        <button
          data-modal-toggle="defaultModal"
          type="submit"
          class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
        >
          Delete
        </button>

        <button
          @click="() => (isDeleteModalOpen = false)"
          type="button"
          class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
        >
          Cancel
        </button>
      </div>
    </form>
  </Modal>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead
        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
      >
        <tr class="uppercase">
          <th scope="col" class="px-6 py-3">id</th>
          <th scope="col" class="px-6 py-3">name</th>
          <th scope="col" class="px-6 py-3">image</th>
          <th scope="col" class="px-6 py-3">status</th>
          <th scope="col" class="px-6 py-3">
            <span class="sr-only">Action</span>
          </th>
        </tr>
      </thead>

      <tbody>
        <TableRow v-for="category in categories" :key="category.id">
          <td class="px-6 py-4">{{ category.id }}</td>

          <td class="px-6 py-4">{{ category.name }}</td>

          <td class="px-6 py-4">
            <TableImage :src="`${URL}/images/${category.image}`" />
          </td>

          <td class="px-6 py-4 capitalize">
            {{ category.is_active === 1 ? 'Active' : 'PENDING' }}
          </td>

          <td class="px-6 py-4 text-right">
            <div class="flex">
              <RouterLink
                name="edit-category"
                :to="'/categories/edit?id=' + category.id"
                class="transition-colors duration-200 py-2 px-4 rounded hover:bg-blue-600 hover:text-gray-200"
              >
                Edit
              </RouterLink>
              <button
                @click="
                  () => {
                    isDeleteModalOpen = true;
                    category_id = category.id;
                  }
                "
                class="transition-colors duration-200 py-2 px-4 rounded hover:bg-red-600 hover:text-gray-200"
              >
                Delete
              </button>
            </div>
          </td>
        </TableRow>
      </tbody>
    </table>
  </div>
</template>

<script setup>
import { RouterLink } from 'vue-router';
import { onMounted, ref } from 'vue';

import Modal from '@/components/Modal.vue';
import { getAuthors } from '@/api/authors';
import TableRow from '@/components/table/TableRow.vue';

let isDeleteModalOpen = ref(false);
let author_id = ref();

let authors = ref([]);

onMounted(async () => {
  authors.value = await getAuthors();
});
</script>

<template>
  <div class="flex justify-between items-center">
    <h2 class="text-2xl mb-6">authors</h2>
    <RouterLink to="/authors/add/" class="mx-4 bg-blue-500 px-4 py-2 rounded">
      Add
    </RouterLink>
  </div>

  <!-- Delete modal -->
  <Modal :show="isDeleteModalOpen" :onClose="() => (isDeleteModalOpen = false)">
    <h4 class="text-2xl mb-6 capitalize">
      Are you sure you want to delete this author
    </h4>

    <form @submit.prevent="">
      <input type="hidden" :value="book_id" name="book_id" />

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
        <tr class="capitalize">
          <th scope="col" class="px-6 py-3">id</th>
          <th scope="col" class="px-6 py-3">name</th>
          <th scope="col" class="px-6 py-3">email</th>
          <th scope="col" class="px-6 py-3">phone</th>
          <th scope="col" class="px-6 py-3">bio</th>
          <!-- <th scope="col" class="px-6 py-3">Status</th> -->
          <th scope="col" class="px-6 py-3">
            <span class="sr-only">Action</span>
          </th>
        </tr>
      </thead>
      <tbody>
        <TableRow v-for="author in authors" :key="author.id">
          <td class="px-6 py-4">
            {{ author.id }}
          </td>
          <td class="px-6 py-4">
            {{ author.name }}
          </td>
          <td class="px-6 py-4">
            {{ author.email }}
          </td>
          <td class="px-6 py-4">
            {{ author.phone }}
          </td>
          <td class="px-6 py-4">
            {{ author.bio }}
          </td>
          <!-- <td class="px-6 py-4">{{ author.is_active }}</td> -->

          <td class="px-6 py-4 text-right">
            <div class="flex">
              <RouterLink
                name="edit-book"
                :to="'/authors/edit?id=' + author.id"
                class="transition-colors duration-200 py-2 px-4 rounded hover:bg-blue-600 hover:text-gray-200"
              >
                Edit
              </RouterLink>
              <button
                @click="
                  () => {
                    isDeleteModalOpen = true;
                    author_id = author.id;
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

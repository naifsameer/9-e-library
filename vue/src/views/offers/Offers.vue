<script setup>
import { RouterLink } from 'vue-router';
import { onMounted, ref } from 'vue';

import Modal from '@/components/Modal.vue';
import TableRow from '@/components/table/TableRow.vue';
import { getOffers } from '@/api/offer';
import { getBookByID } from '@/api/books';
import { getCategoryByID } from '@/api/categories';

let isDeleteModalOpen = ref(false);
let offer_id = ref();

let offers = ref([]);
let books = ref([]);
let categories = ref([]);
onMounted(async () => {
  offers.value = await getOffers();

  // get categories and books
  offers.value.forEach((item) => {
    if (item.book_ids.length > 0) {
      item.book_ids.split(',').forEach(async (bookID) => {
        books.value.push(await getBookByID(bookID));
      });
    }

    if (item.category_ids.length > 0) {
      console.log(item);
      item.category_ids.split(',').forEach(async (categoryID) => {
        categories.value.push(await getCategoryByID(categoryID));
      });
    }
  });
});

// all_books: 0
// book_ids: "21,22,23"
// category_ids: "13,17"
// created_at: "2022-04-02 16:06:07"
// created_by: null
// discount: 10
// end_date: "2022-04-15"
// id: 2
// is_active: 1
// start_date: "2022-04-05"
// title: "New offer"
</script>

<template>
  <div class="flex justify-between items-center">
    <h2 class="text-2xl mb-6">offers</h2>
    <RouterLink to="/offers/add/" class="mx-4 bg-blue-500 px-4 py-2 rounded">
      Add
    </RouterLink>
  </div>

  <!-- Delete modal -->
  <Modal :show="isDeleteModalOpen" :onClose="() => (isDeleteModalOpen = false)">
    <h4 class="text-2xl mb-6 capitalize">
      Are you sure you want to delete this offer
    </h4>

    <form @submit.prevent="">
      <input type="hidden" :value="offer_id" name="id" />

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
          <th scope="col" class="px-6 py-3">title</th>
          <th scope="col" class="px-6 py-3">discount</th>
          <th scope="col" class="px-6 py-3">start date</th>
          <th scope="col" class="px-6 py-3">end date</th>
          <th scope="col" class="px-6 py-3">books</th>
          <th scope="col" class="px-6 py-3">categories</th>
          <th scope="col" class="px-6 py-3">all books</th>
          <!-- <th scope="col" class="px-6 py-3">Statue</th> -->

          <th scope="col" class="px-6 py-3">
            <span class="sr-only">Action</span>
          </th>
        </tr>
      </thead>
      <tbody>
        <TableRow v-for="offer in offers" :key="offer.id">
          <th scope="col" class="px-6 py-3">
            {{ offer.id }}
          </th>
          <th scope="col" class="px-6 py-3">
            {{ offer.title }}
          </th>
          <th scope="col" class="px-6 py-3">
            {{ offer.discount }}
          </th>
          <th scope="col" class="px-6 py-3">
            {{ offer.start_date }}
          </th>
          <th scope="col" class="px-6 py-3">
            {{ offer.end_date }}
          </th>
          <th
            scope="col"
            class="px-6 py-3 space-y-1"
            v-html="books.map((item) => `<div> ${item.title}</div>`).join('')"
          />

          <th
            scope="col"
            class="px-6 py-3 space-y-1"
            v-html="
              categories.map((item) => `<div>${item.name}</div>`).join('')
            "
          />

          <th scope="col" class="px-6 py-3">
            {{ offer.all_books === 1 ? 'true' : 'false' }}
          </th>
          <!-- <th scope="col" class="px-6 py-3">Statue</th> -->

          <td class="px-6 py-4 text-right">
            <div class="flex">
              <router-link
                :to="'/offers/edit?id=' + offer.id"
                class="transition-colors duration-200 py-2 px-4 rounded hover:bg-blue-600 hover:text-gray-200"
              >
                Edit
              </router-link>
              <button
                @click="
                  () => {
                    isDeleteModalOpen = true;
                    offer_id = offer.id;
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

let VAddOffer = Vue.defineComponent({
  template: html`
    <div>
      <button class="border rounded  px-4 py-2 mb-5" @click="$router.go(-1)">
        Back
      </button>
      <h4 class="text-2xl mb-6">Add new offer</h4>
    </div>

    id title discount start_date end_date book_ids category_ids all_books
    is_active

    <form ref="addFormRef" @submit.prevent="onSubmit" class="space-y-4">
      <v-input name="title" label="title"></v-input>

      <v-input name="discount" type="number" label="discount"></v-input>

      <v-input-date name="start_date" label="start date"></v-input-date>

      <v-input-date name="end_date" label="end date"></v-input-date>

      <v-select
        name="categories_ids[]"
        options="[{web: 1, mobile: 2, desktop: 3}]"
      ></v-select>

      <v-select
        name="books_ids[]"
        options="[{vue: 1, react: 2, laravel: 3}]"
      ></v-select>

      <v-input name="pages_number" type="number" label="pages number"></v-input>

      <v-input name="quantity" type="number" label="Quantity"></v-input>

      <v-input name="format" label="Format"></v-input>

      <!-- publishers -->
      <v-select
        label="Publisher"
        name="publisher_id"
        :options="[{ls: '2'}, {ys: '1'}]"
      ></v-select>

      <!-- authors -->
      <v-select
        label="Author"
        name="author_id"
        :options="[{Naif: '2'}, {Ali: '1'}]"
      ></v-select>

      <!-- categories -->
      <v-select
        label="Category"
        name="category_id"
        :options="[{cate1: '2'}, {cate2: '1'}]"
      ></v-select>

      <v-input-file name="image" label="image"></v-input-file>

      <v-textarea name="description" label="Offer description"></v-textarea>

      <div
        class="flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"
      >
        <button
          type="submit"
          class="px-16 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          Add
        </button>
      </div>
    </form>
  `,

  methods: {
    onSubmit() {
      let formData = new FormData(this.$refs.addFormRef);

      axios
        .post('/offers/add', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        })
        .then((res) => {
          console.log(res);
        });
    },
  },
  components: {
    VModal,
    VTableRow,
    VTableImage,
    VInput,
    VInputFile,
    VSelect,
    VTextarea,
  },
});

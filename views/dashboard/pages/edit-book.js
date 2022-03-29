let VEditBook = Vue.defineComponent({
  template: html`
    <div>
      <button class="border rounded  px-4 py-2 mb-5" @click="$router.go(-1)">
        Back
      </button>
      <h4 class="text-2xl mb-6">Edit book info</h4>
    </div>

    <form ref="editFormRef" @submit.prevent="onSubmit" class="space-y-4">
      <v-input name="title" label="title"></v-input>

      <v-input name="price" type="number" label="price"></v-input>

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

      <v-textarea name="description" label="Book description"></v-textarea>

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
      let formData = new FormData(this.$refs.editFormRef);

      axios
        .post('/books/edit', formData, {
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

let VCategories = Vue.defineComponent({
  template: html`
    <div class="flex justify-between items-center">
      <h2 class="text-2xl mb-6">Categories</h2>
      <button
        class="mx-4 bg-blue-500 px-4 py-2 rounded"
        @click="isAddModalOpen = true"
      >
        Add
      </button>
    </div>

    <!-- add modal -->
    <v-modal :show="isAddModalOpen" :onClose="closeAddModal">
      <h4 class="text-2xl mb-6">Add new Category</h4>

      <form @submit.prevent="onAddFormSubmit">
        <v-input v-model="name" name="category-name" label="name"></v-input>

        <v-input-file
          :onFileChange="onFileChange"
          name="category-image"
          label="image"
        ></v-input-file>

        <div
          class="flex items-center py-2 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600"
        >
          <button
            data-modal-toggle="defaultModal"
            type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Add
          </button>

          <button
            @click="closeAddModal"
            data-modal-toggle="defaultModal"
            type="button"
            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
          >
            Cancel
          </button>
        </div>
      </form>
    </v-modal>

    <!-- Edit modal -->
    <v-modal :show="isEditModalOpen" :onClose="closeEditModal">
      <h4 class="text-2xl mb-6">Edit Category</h4>

      <form @submit.prevent="onSubmit">
        <input type="hidden" :value="category_id" name="category_id" />

        <v-input v-model="name" name="category-name" label="name"></v-input>

        <v-input-file
          :onFileChange="onFileChange"
          name="category-image"
          label="image"
        ></v-input-file>

        <div
          class="flex items-center py-2 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600"
        >
          <button
            data-modal-toggle="defaultModal"
            type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Edit
          </button>

          <button
            @click="closeEditModal"
            data-modal-toggle="defaultModal"
            type="button"
            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
          >
            Cancel
          </button>
        </div>
      </form>
    </v-modal>

    <!-- Delete modal -->
    <v-modal :show="isDeleteModalOpen" :onClose="closeDeleteModal">
      <h4 class="text-2xl mb-6">
        Are you sure you want to delete this category
      </h4>

      <form @submit.prevent="onSubmit">
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
            @click="closeDeleteModal"
            data-modal-toggle="defaultModal"
            type="button"
            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
          >
            Cancel
          </button>
        </div>
      </form>
    </v-modal>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead
          class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
        >
          <tr>
            <th scope="col" class="px-6 py-3">id</th>
            <th scope="col" class="px-6 py-3">Name</th>
            <th scope="col" class="px-6 py-3">image</th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Action</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <v-table-row>
            <th
              scope="row"
              class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
            >
              Microsoft Surface Pro
            </th>
            <td class="px-6 py-4">White</td>
            <td class="px-6 py-4">
              <v-table-image src="/images/1234.jpg"></v-table-image>
            </td>
            <td class="px-6 py-4 text-right">
              <button
                @click="isEditModalOpen = true"
                class="transition-colors duration-200 py-2 px-4 rounded hover:bg-blue-600 hover:text-gray-200"
              >
                Edit
              </button>
              <button
                @click="isDeleteModalOpen = true"
                class="transition-colors duration-200  py-2 px-4 rounded hover:bg-red-600 hover:text-gray-200"
              >
                Delete
              </button>
            </td>
          </v-table-row>
        </tbody>
      </table>
    </div>
  `,
  data() {
    return {
      isAddModalOpen: false,
      isEditModalOpen: false,
      isDeleteModalOpen: false,
      category_id: '',
      formData: new FormData(),
      name: '',
    };
  },
  methods: {
    resetData() {
      this.name = '';
      this.category_id = '';
      this.formData = new FormData();
      this.closeAddModal();
    },

    closeAddModal() {
      this.isAddModalOpen = false;
    },

    closeEditModal() {
      this.isEditModalOpen = false;
    },

    closeDeleteModal() {
      this.isDeleteModalOpen = false;
    },

    onAddFormSubmit() {
      this.formData.append('name', this.name);

      axios
        .post('/categories/add', this.formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        })
        .then((res) => {
          this.resetData();
        });
    },
    onEditFormSubmit() {
      this.formData.append('name', this.name);
      this.formData.append('category_id', this.category_id);

      axios
        .post('/categories/update', this.formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        })
        .then((res) => {
          this.resetData();
        });
    },
    onAddFormSubmit() {
      axios.post('/categories', this.category_id).then((res) => {
        this.resetData();
      });
    },

    onFileChange(e) {
      let files = e.target.files || e.dataTransfer.files;

      this.formData.append('image', files[0]);
    },
  },
  components: { VModal, VTableRow, VTableImage, VInput, VInputFile },
});
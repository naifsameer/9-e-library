let VUsers = Vue.defineComponent({
  template: html`
    <div class="flex justify-between items-center">
      <h2 class="text-2xl mb-6">Users</h2>
      <router-link to="/users/add/" class="mx-4 bg-blue-500 px-4 py-2 rounded">
        Add
      </router-link>
    </div>

    <!-- Delete modal -->
    <v-modal :show="isDeleteModalOpen" :onClose="closeDeleteModal">
      <h4 class="text-2xl mb-6">Are you sure you want to delete this user</h4>

      <form @submit.prevent="">
        <input type="hidden" :value="user_id" name="user_id" />

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
          <tr class="capitalize">
            <th scope="col" class="px-6 py-3">id</th>
            <th scope="col" class="px-6 py-3">name</th>
            <th scope="col" class="px-6 py-3">email</th>
            <th scope="col" class="px-6 py-3">status</th>
            <th scope="col" class="px-6 py-3">role</th>

            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Action</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b dark:bg-gray-800/50">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">Naif</td>
            <td class="px-6 py-4">naif@gmail.com</td>
            <td class="px-6 py-4">Active</td>
            <td class="px-6 py-4">Admin</td>

            <td class="px-6 py-4 text-right">
              <div class="flex">
                <router-link
                  to="/users/edit"
                  class="transition-colors duration-200 py-2 px-4 rounded hover:bg-blue-600 hover:text-gray-200"
                >
                  Edit
                </router-link>
                <button
                  @click="isDeleteModalOpen = true"
                  class="transition-colors duration-200  py-2 px-4 rounded hover:bg-red-600 hover:text-gray-200"
                >
                  Delete
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  `,
  data() {
    return {
      user_id: '',
      isDeleteModalOpen: false,
    };
  },
  methods: {
    closeDeleteModal() {
      this.isDeleteModalOpen = false;
    },
  },
  components: { VModal, VTableRow, VTableImage, VInput, VInputFile, VSelect },
});

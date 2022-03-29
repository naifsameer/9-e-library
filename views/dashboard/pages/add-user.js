let VAddUser = Vue.defineComponent({
  template: html`
    <div>
      <button class="border rounded  px-4 py-2 mb-5" @click="$router.go(-1)">
        Back
      </button>
      <h4 class="text-2xl mb-6">Add new Users</h4>
    </div>

    <form ref="addFormRef" @submit.prevent="onSubmit" class="space-y-4">
      <v-input name="name" label="name"></v-input>

      <v-input name="email" type="email" label="email"></v-input>

      <v-input name="password" type="password" label="password"></v-input>

      <!-- Role -->
      <v-select
        label="Role"
        name="role_id"
        :options="[{admin: '1'}, {writer: '2'}]"
      ></v-select>
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

      axios.post('/users/add', formData).then((res) => {
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

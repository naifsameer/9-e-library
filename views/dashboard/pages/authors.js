let VAuthors = Vue.defineComponent({
  template: html`
    <div class="flex justify-between items-center">
      <h2 class="text-2xl mb-6">Authors</h2>
      <button
        class="mx-4 bg-blue-500 px-4 py-2 rounded"
        @click="isAddModalOpen = true"
      >
        Add
      </button>
    </div>
  `,
  data() {
    return {
      isAddModalOpen: false,
      isEditModalOpen: false,
      isDeleteModalOpen: false,
      formData: new FormData(),
      name: '',
    };
  },
  methods: {
    closeAddModal() {
      this.isAddModalOpen = false;
    },

    closeEditModal() {
      this.isEditModalOpen = false;
    },

    closeDeleteModal() {
      this.isDeleteModalOpen = false;
    },

    onSubmit() {
      this.formData.append('name', this.name);

      axios
        .post('/upload_file', this.formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        })
        .then((res) => {
          this.name = '';
          this.formData = new FormData();
          this.closeAddModal();
        });
    },

    onFileChange(e) {
      let files = e.target.files || e.dataTransfer.files;

      this.formData.append('image', files[0]);
    },
  },
  components: { VModal, VTableRow, VTableImage, VInput, VInputFile },
});

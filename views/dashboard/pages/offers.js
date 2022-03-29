let VOffers = Vue.defineComponent({
  template: html`
    <div class="flex justify-between items-center">
      <h2 class="text-2xl mb-6">Offers</h2>
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

    onFileChange(e) {
      let files = e.target.files || e.dataTransfer.files;

      this.formData.append('image', files[0]);
    },
  },
  components: { VModal, VTableRow, VTableImage, VInput, VInputFile },
});

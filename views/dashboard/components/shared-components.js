// shared-components

let VLinkItem = Vue.defineComponent({
  template: ` <router-link
    :to="href"
    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group dark:text-gray-300 dark:hover:bg-gray-700 dark:bg-gray-800"
  >
    <slot></slot>

    <span class="ml-3 flex-1 whitespace-nowrap">
      <slot name="body"></slot>
    </span>
  </router-link>`,
  props: ['href'],
});

// table row
let VTableRow = Vue.defineComponent({
  template: html`
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
      <slot></slot>
    </tr>
  `,
});

/** Table image
 * @param {string} src image src
 */
let VTableImage = Vue.defineComponent({
  template: html`<img
    class="w-16 h-16 object-cover"
    :src="src"
    alt="item image"
  /> `,
  props: ['src'],
});

/** Select
 * @param {string} label input label
 * @param {string} name input name
 * @param {array} options
 */
let VSelect = Vue.defineComponent({
  template: html`
    <div>
      <label
        :for="'input-id' + generateRandomID"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
        >{{label}}</label
      >
      <select
        :name="name"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      >
        <option disabled selected>{{label}}</option>

        <template v-for="option in options" :key="generateRandomID()">
          <option
            :value="key"
            v-for="(key, value) in option"
            :key="generateRandomID()"
          >
            {{value}}
          </option>
        </template>
      </select>
    </div>
  `,
  methods: {
    generateRandomID: () => Math.round(Math.random() * 1e6),
  },
  props: {
    options: { type: Array },
    label: {
      type: String,
      required: true,
    },
    name: {
      type: String,
      required: true,
    },
  },
});

/** Select=
 * @param {string} label input label
 * @param {string} name input name
 */
let VTextarea = Vue.defineComponent({
  template: html`
    <div>
      <label
        :for="'input-id' + generateRandomID"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
        >{{label}}</label
      >
      <textarea
        :name="name"
        id="'input-id' + generateRandomID"
        rows="4"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder=""
      ></textarea>
    </div>
  `,
  methods: {
    generateRandomID: () => Math.round(Math.random() * 1e6),
  },
  props: {
    label: {
      type: String,
      required: true,
    },
    name: {
      type: String,
      required: true,
    },
  },
});

/** Input
 * @param {string} type input type
 * @param {string} label input label
 * @param {string} name input name
 */
let VInput = Vue.defineComponent({
  template: html`
    <div>
      <label
        v-if="label !== ''"
        :for="'input-id' + generateRandomID"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
        >{{label}}</label
      >
      <input
        :name="name"
        :type="type"
        :id="'input-id' + generateRandomID"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        required
      />
    </div>
  `,
  computed: {
    generateRandomID: () => Math.round(Math.random() * 1e6),
  },
  props: {
    type: {
      type: String,
      default: 'text',
    },
    label: {
      type: String,
      default: '',
    },
    name: {
      type: String,
      required: true,
    },
  },
});

/** Input file
 * @param {string} label input label
 * @param {string} name input name
 * @param {string} value
 */
let VInputFile = Vue.defineComponent({
  template: html`
    <div>
      <label
        v-if="label !== ''"
        :for="'input-id' + generateRandomID"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
        >{{label}}</label
      >

      <!-- @change="onFileChange" -->
      <input
        :name="name"
        type="file"
        :id="'input-id' + generateRandomID"
        class="py-2 px-4 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 "
        placeholder=""
        required
      />
    </div>
  `,
  computed: {
    generateRandomID: () => Math.round(Math.random() * 1e6),
  },
  props: {
    // onFileChange: {},
    label: {
      type: String,
      default: '',
    },
    name: {
      type: String,
      required: true,
    },
  },
});

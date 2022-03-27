import { createApp, defineComponent } from './vue.dev.js';
// html function to enable vscode lit code highlight
const html = (arg) => arg.join('');

let VButton = defineComponent({
  template: html`
    <h2>
      Naif {{user}}
      <div class=""></div>
    </h2>
  `,
  data() {
    return {
      user: 'Naif',
    };
  },
});

createApp({
  components: { VButton },
  data() {
    return {
      message: 'Hello Vue!',
    };
  },
  methods: {
    addApi() {
      fetch('/dashboard/add', {
        method: 'post',
        body: 'hi there',
      }).then((res) => console.log(res.json()));

      console.log('done');
      // .post('/dashboard/add', {
      //   body: 'Hi there',
      // })
      // .then((res) => console.log(res));
    },
  },
}).mount('#app');

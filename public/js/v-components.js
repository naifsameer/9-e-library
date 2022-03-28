// html function to enable vscode lit code highlight
const html = (arg) => arg.join('');

let VButton = Vue.defineComponent({
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

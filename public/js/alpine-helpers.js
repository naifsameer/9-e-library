function AlpineComponent(Alpine) {
  class ComponentWrapper extends HTMLElement {
    connectedCallback() {
      const shadow = this.attachShadow({
        mode: 'open',
      });

      if (this.attributes.template) {
        const template = document.getElementById(
          this.attributes.template.value
        );
        const component = new DOMParser().parseFromString(
          template.innerHTML,
          'text/html'
        ).body.firstChild;

        shadow.appendChild(component);

        document.addEventListener('alpine:initialized', () =>
          Alpine.initTree(shadow)
        );
      }

      if (this.attributes.url) {
        fetch(this.attributes.url.value)
          .then((response) => response.text())
          .then((template) => {
            const component = new DOMParser().parseFromString(
              template,
              'text/html'
            ).body.firstChild;

            shadow.appendChild(component);

            Alpine.initTree(shadow);
          });
      }
    }
  }

  if (window.customElements.get('v-comp')) return;

  customElements.define('v-comp', ComponentWrapper);

  Alpine.directive('component', () => new ComponentWrapper());
}

function AlpineTash(Alpine) {
  console.log(Alpine);
  Alpine.directive('v', (el, {}, { evaluate, effect }) => {
    const expressions = el.getAttribute('x-v').split(',');
    const template = document.createElement('template');
    const finder = (exp) => new RegExp(`{{${exp}}}`, 'g');

    template.innerHTML = el.innerHTML;

    let html = `${template.innerHTML}`;

    effect(() => {
      expressions.forEach((exp) => {
        const value = evaluate(exp);
        const regex = finder(exp);

        html = html.replace(regex, value);
      });

      el.innerHTML = html;
      html = template.innerHTML;
    });
  });
}

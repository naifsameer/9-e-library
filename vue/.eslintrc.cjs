/* eslint-env node */
require('@rushstack/eslint-patch/modern-module-resolution');

module.exports = {
  root: true,
  extends: ['plugin:vue/vue3-essential', 'eslint:recommended'],

  rules: {},

  env: {
    node: true,

    'vue/setup-compiler-macros': true,
  },
};

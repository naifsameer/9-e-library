import { createApp } from 'vue';
import { createPinia } from 'pinia';
import './index.css';

export const URL = import.meta.env.VITE_URL;

import App from './App.vue';
import router from './router/index.js';

const app = createApp(App);

app.use(createPinia());
app.use(router);

app.mount('#app');

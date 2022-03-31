import axios from 'axios';

const URL = import.meta.env.VITE_URL;

let lang = localStorage.getItem('lang') ?? 'ar';
axios.defaults.headers['local'] = lang;

export default axios.create({
  baseURL: `${URL}/api`,
  headers: {
    'Content-Type': 'application/json; charset=UTF-8',
  },
});

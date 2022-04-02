import axios from './axios.js';

export const getCities = async () => {
  let res = await axios.get('/cities');

  return res.data;
};

export const addCity = async (data) => {
  let res = await axios.post('/cities/add', data);

  return res.data;
};

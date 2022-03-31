import axios from './axios.js';

export const getCategories = async () => {
  let res = await axios.get('/categories');

  return res.data;
  //   console.log(data);
  //   return data;
};

export const addCategory = async (data) => {
  let res = await axios.post('/categories/add', data, {
    headers: {
      'Content-Type': 'multipart/form-data',
    },
  });

  return res.data;
};

import axios from './axios.js';

export const getCategories = async () => {
  let res = await axios.get('/categories');

  return res.data;
};

export const getCategoryByID = async (id) => {
  let res = await axios.get('/categories/show?id=' + id);

  return res.data;
};

export const addCategory = async (data) => {
  let res = await axios.post('/categories/add', data, {
    headers: {
      'Content-Type': 'multipart/form-data',
    },
  });

  return res.data;
};

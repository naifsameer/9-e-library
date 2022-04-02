import axios from './axios.js';

export const getBooks = async () => {
  let res = await axios.get('/books');

  return res.data;
};

export const getBookByID = async (id) => {
  let res = await axios.get('/books/show?id=' + id);

  return res.data;
};

export const addBook = async (data) => {
  let res = await axios.post('/books/add', data, {
    headers: {
      'Content-Type': 'multipart/form-data',
    },
  });

  return res.data;
};

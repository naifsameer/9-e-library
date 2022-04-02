import axios from './axios.js';

export const getAuthors = async () => {
  let res = await axios.get('/authors');

  return res.data;
};

export const addAuthor = async (data) => {
  let res = await axios.post('/authors/add', data);

  return res.data;
};

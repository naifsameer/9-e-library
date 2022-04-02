import axios from './axios.js';

export const getUsers = async () => {
  let res = await axios.get('/users');

  return res.data;
};

export const addUser = async (data) => {
  let res = await axios.post('/users/add', data);

  return res.data;
};

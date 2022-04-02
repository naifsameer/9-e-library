import axios from './axios.js';

export const getRoles = async () => {
  let res = await axios.get('/roles');

  return res.data;
};

// export const addRole = async (data) => {
//   let res = await axios.post('/roles/add', data);

//   return res.data;
// };

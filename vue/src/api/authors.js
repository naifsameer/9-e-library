import axios from './axios.js';

export const getAuthors = async () => {
  let res = await axios.get('/authors');

  return res.data;
};

// export const addPublisher = async (data) => {
//   let res = await axios.post('/authors/add', data, {
//     headers: {
//       'Content-Type': 'multipart/form-data',
//     },
//   });

//   return res.data;
// };

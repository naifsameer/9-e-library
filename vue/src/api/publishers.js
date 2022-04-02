import axios from './axios.js';

export const getPublishers = async () => {
  let res = await axios.get('/publishers');

  return res.data;
};

export const addPublisher = async (data) => {
  let res = await axios.post('/publishers/add', data, {
    headers: {
      'Content-Type': 'multipart/form-data',
    },
  });

  return res.data;
};

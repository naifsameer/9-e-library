import axios from './axios.js';

export const getOffers = async () => {
  let res = await axios.get('/offers');

  return res.data;
};

export const addOffer = async (data) => {
  let res = await axios.post('/offers/add', data);

  return res.data;
};

import axios from './axios.js';

export const getPayments = async () => {
  let res = await axios.get('/payments');

  return res.data;
};

export const addPayment = async (data) => {
  let res = await axios.post('/payments/add', data);

  return res.data;
};

import axios from './axios.js';

export const getUserPayments = async () => {
  let res = await axios.get('/user-payment-methods');

  return res.data;
};

export const getUserPaymentByID = async (id) => {
  let res = await axios.get('/user-payment-methods/show?id=' + id);

  return res.data;
};

export const addUserPayment = async (data) => {
  let res = await axios.post('/user-payment-methods/add', data);

  return res.data;
};

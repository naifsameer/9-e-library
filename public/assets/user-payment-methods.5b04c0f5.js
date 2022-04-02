import{a as e}from"./axios.9437251c.js";const r=async()=>(await e.get("/user-payment-methods")).data,n=async a=>(await e.post("/user-payment-methods/add",a)).data;export{n as a,r as g};

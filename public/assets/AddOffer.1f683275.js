import{e as s,q as c,o as _,b,a,d as e,w as g,v as y,u as d,F as k,x as v}from"./vendor.1a723486.js";import{_ as p}from"./Input.10c6c8ac.js";import{_ as x}from"./Button.08b2c18d.js";import{_ as u}from"./InputDate.a8ae83a5.js";import{_ as f}from"./Select.7cb6c417.js";import{g as w}from"./books.62578def.js";import{g as $}from"./categories.dd1876c1.js";import{a as B}from"./offer.a316452f.js";import"./axios.9437251c.js";import"./index.c4069385.js";const F=a("h4",{class:"text-2xl mb-6 capitalize"},"add offer",-1),h={class:"flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"},C=v(" add "),j={setup(N){const r=s([]),l=s([]);c(async()=>{r.value=await w(),l.value=await $()});let n=s(null),i=async()=>{let o=new FormData(n.value),t=await B(o);console.log(t)};return(o,t)=>(_(),b(k,null,[a("div",null,[a("button",{class:"border rounded px-4 py-2 mb-5",onClick:t[0]||(t[0]=m=>o.$router.go(-1))}," Back "),F]),a("form",{ref_key:"addFormRef",ref:n,onSubmit:t[1]||(t[1]=y((...m)=>d(i)&&d(i)(...m),["prevent"])),class:"space-y-4"},[e(p,{name:"title",label:"title"}),e(p,{name:"discount",type:"number",label:"discount"}),e(u,{name:"start_date",label:"start date"}),e(u,{name:"end_date",label:"end date"}),e(f,{label:"categories",options:l.value,name:"category_ids[]",multiple:""},null,8,["options"]),e(f,{"option-key":"title",name:"book_ids[]",label:"books",options:r.value,multiple:""},null,8,["options"]),a("div",h,[e(x,{type:"submit"},{default:g(()=>[C]),_:1})])],544)],64))}};export{j as default};

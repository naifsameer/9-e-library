import{o as l,b as m,a,d as e,w as _,v as f,u as n,F as c,x as b}from"./vendor.1a723486.js";import{a as p}from"./index.c4069385.js";import{_ as o}from"./Input.10c6c8ac.js";import{_ as u}from"./Button.08b2c18d.js";import{_ as d}from"./InputDate.a8ae83a5.js";const x=a("h4",{class:"text-2xl mb-6 capitalize"},"edit offer",-1),y=a("input",{type:"hidden",name:"id"},null,-1),g={class:"flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"},h=b(" edit "),N={setup(k){let r=()=>{let s=new FormData(this.$refs.editFormRef);p.axios.post("/offers/edit",s).then(t=>{console.log(t)})};return(s,t)=>(l(),m(c,null,[a("div",null,[a("button",{class:"border rounded px-4 py-2 mb-5",onClick:t[0]||(t[0]=i=>s.$router.go(-1))}," Back "),x]),a("form",{ref:"editFormRef",onSubmit:t[1]||(t[1]=f((...i)=>n(r)&&n(r)(...i),["prevent"])),class:"space-y-4"},[y,e(o,{name:"title",label:"title"}),e(o,{name:"discount",type:"number",label:"discount"}),e(d,{name:"start_date",label:"start date"}),e(d,{name:"end_date",label:"end date"}),e(o,{name:"book_ids",label:"book_ids"}),e(o,{name:"category_ids",label:"category_ids"}),a("div",g,[e(u,{type:"submit"},{default:_(()=>[h]),_:1})])],544)],64))}};export{N as default};

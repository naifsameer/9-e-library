import{o as m,b as n,a as t,d as o,w as d,v as l,u as i,F as f,x as p}from"./vendor.1a723486.js";import{a as c}from"./index.c4069385.js";import{_ as u}from"./Input.10c6c8ac.js";import{_}from"./InputFile.60fd469a.js";import{_ as b}from"./Button.08b2c18d.js";const x=t("h4",{class:"text-2xl mb-6 capitalize"},"Edit category",-1),g={class:"flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"},y=p(" Edit "),B={setup(h){let r=()=>{let a=new FormData(this.$refs.editFormRef);c.axios.post("/categories/edit",a,{headers:{"Content-Type":"multipart/form-data"}}).then(e=>{console.log(e)})};return(a,e)=>(m(),n(f,null,[t("div",null,[t("button",{class:"border rounded px-4 py-2 mb-5",onClick:e[0]||(e[0]=s=>a.$router.go(-1))}," Back "),x]),t("form",{ref:"editFormRef",onSubmit:e[1]||(e[1]=l((...s)=>i(r)&&i(r)(...s),["prevent"])),class:"space-y-4"},[o(u,{name:"name",label:"name"}),o(_,{name:"image",label:"image"}),t("div",g,[o(b,{type:"submit"},{default:d(()=>[y]),_:1})])],544)],64))}};export{B as default};

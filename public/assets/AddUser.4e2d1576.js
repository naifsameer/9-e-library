import{o as l,b as m,a as s,d as a,w as i,q as p,u as n,F as f,s as u}from"./vendor.821cadc6.js";import{_ as t,a as b,b as c}from"./Button.2e0cd663.js";import{_}from"./Select.86acda9e.js";const x=s("h4",{class:"text-2xl mb-6 capitalize"},"add user",-1),y={class:"flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"},w=u(" add "),F={setup(h){let r=()=>{let o=new FormData(this.$refs.addFormRef);c.axios.post("/users/add",o,{headers:{"Content-Type":"multipart/form-data"}}).then(e=>{console.log(e)})};return(o,e)=>(l(),m(f,null,[s("div",null,[s("button",{class:"border rounded px-4 py-2 mb-5",onClick:e[0]||(e[0]=d=>o.$router.go(-1))}," Back "),x]),s("form",{ref:"addFormRef",onSubmit:e[1]||(e[1]=p((...d)=>n(r)&&n(r)(...d),["prevent"])),class:"space-y-4"},[a(t,{name:"name",label:"name"}),a(t,{name:"email",type:"email",label:"email"}),a(t,{name:"password",type:"password",label:"password"}),a(_,{name:"role_id",label:"role",options:[{admin:1}]}),s("div",y,[a(b,{type:"submit"},{default:i(()=>[w]),_:1})])],544)],64))}};export{F as default};
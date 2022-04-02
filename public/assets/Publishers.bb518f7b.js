import{e as i,q as f,o as p,b as x,a as e,d as u,u as l,R as y,w as r,i as c,F as _,s as m,v as b,c as v,t as o,x as g}from"./vendor.1a723486.js";import{_ as k,T as w}from"./TableRow.d92239c5.js";import{g as C}from"./publishers.34f0418d.js";import"./index.34e6f17a.js";import"./axios.9437251c.js";import"./index.c4069385.js";const B={class:"flex justify-between items-center"},D=e("h2",{class:"text-2xl mb-6"},"publishers",-1),M=g(" Add "),R=e("h4",{class:"text-2xl mb-6 capitalize"}," Are you sure you want to delete this publisher ",-1),z=["value"],A={class:"flex items-center py-2 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600"},N=e("button",{"data-modal-toggle":"defaultModal",type:"submit",class:"text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"}," Delete ",-1),T={class:"relative overflow-x-auto shadow-md sm:rounded-lg"},V={class:"w-full text-sm text-left text-gray-500 dark:text-gray-400"},E=e("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"},[e("tr",{class:"capitalize"},[e("th",{scope:"col",class:"px-6 py-3"},"id"),e("th",{scope:"col",class:"px-6 py-3"},"name"),e("th",{scope:"col",class:"px-6 py-3"},"phone"),e("th",{scope:"col",class:"px-6 py-3"},"alt phone"),e("th",{scope:"col",class:"px-6 py-3"},"fax"),e("th",{scope:"col",class:"px-6 py-3"},"email"),e("th",{scope:"col",class:"px-6 py-3"},"address"),e("th",{scope:"col",class:"px-6 py-3"},"country"),e("th",{scope:"col",class:"px-6 py-3"},"image"),e("th",{scope:"col",class:"px-6 py-3"},[e("span",{class:"sr-only"},"Action")])])],-1),F={scope:"col",class:"px-6 py-3"},L={scope:"col",class:"px-6 py-3"},S={scope:"col",class:"px-6 py-3"},j={scope:"col",class:"px-6 py-3"},q={scope:"col",class:"px-6 py-3"},O={scope:"col",class:"px-6 py-3"},P={scope:"col",class:"px-6 py-3"},$={scope:"col",class:"px-6 py-3"},G={scope:"col",class:"px-6 py-3"},H={class:"px-6 py-4 text-right"},I={class:"flex"},J=g(" Edit "),ee={setup(K){let t=i(!1),d=i(),h=i([]);return f(async()=>{h.value=await C()}),(n,a)=>(p(),x(_,null,[e("div",B,[D,u(l(y),{to:"/publishers/add/",class:"mx-4 bg-blue-500 px-4 py-2 rounded"},{default:r(()=>[M]),_:1})]),u(k,{show:l(t),onClose:()=>c(t)?t.value=!1:t=!1},{default:r(()=>[R,e("form",{onSubmit:a[1]||(a[1]=b(()=>{},["prevent"]))},[e("input",{type:"hidden",value:n.book_id,name:"id"},null,8,z),e("div",A,[N,e("button",{onClick:a[0]||(a[0]=()=>c(t)?t.value=!1:t=!1),type:"button",class:"text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"}," Cancel ")])],32)]),_:1},8,["show","onClose"]),e("div",T,[e("table",V,[E,e("tbody",null,[(p(!0),x(_,null,m(l(h),s=>(p(),v(w,{key:s.id},{default:r(()=>[e("th",F,o(s.id),1),e("th",L,o(s.name),1),e("th",S,o(s.phone),1),e("th",j,o(s.alt_phone),1),e("th",q,o(s.fax),1),e("th",O,o(s.email),1),e("th",P,o(s.address),1),e("th",$,o(s.country),1),e("th",G,o(s.image),1),e("td",H,[e("div",I,[u(l(y),{to:"/publishers/edit?id="+s.id,class:"transition-colors duration-200 py-2 px-4 rounded hover:bg-blue-600 hover:text-gray-200"},{default:r(()=>[J]),_:2},1032,["to"]),e("button",{onClick:a[2]||(a[2]=()=>{c(t)?t.value=!0:t=!0,c(d)?d.value=n.book.id:d=n.book.id}),class:"transition-colors duration-200 py-2 px-4 rounded hover:bg-red-600 hover:text-gray-200"}," Delete ")])])]),_:2},1024))),128))])])])],64))}};export{ee as default};

import{aq as g,ar as h,I as d,as as l,at as f,au as y,av as m,aw as b,ax as _,ay as w,az as k,aA as S,b as x,g as r,d as R,e as C,aB as D}from"../index.js";const B=g("updates",{state:()=>({items:[]}),actions:{reset(){this.$reset()},addItems(i){this.items=h.exports.uniqBy([...this.items,...i],n=>n.join())},push(i){d.updateDBOption("last_synced",i.last_synced),this.addItems(i.items)},pop(i){const[n,a]=this.items.reduce(([e,s],t)=>t[1]===i?[[...e,t],s]:[e,[...s,t]],[[],[]]);this.items=a;const o=n.filter(([,,e])=>e==="update"),u=n.filter(([,,e])=>e==="delete");return{update:o.map(([e])=>e),delete:u.map(([e])=>e)}},async update(){const i=l();if(!i.syncing){const n=this.pop("coupon"),a=this.pop("product"),o=this.pop("product_category"),u=this.pop("user"),e=[];a.update.length&&e.push(await f({origin:"update",include:a.update})),a.delete.length&&e.push(await y({origin:"update",include:a.delete})),n.update.length&&e.push(await m({origin:"update",include:n.update,blocking:!1})),n.delete.length&&e.push(await b({origin:"update",include:n.delete,blocking:!1})),u.update.length&&e.push(await _({origin:"update",include:u.update,blocking:!1})),u.delete.length&&e.push(await w({origin:"update",include:u.delete,blocking:!1})),o.update.length&&e.push(await k({origin:"update",include:o.update,blocking:!1})),o.delete.length&&e.push(await S({origin:"update",include:o.delete,blocking:!1})),i.enqueue(e)}}}});var v=x(async({router:i,store:n})=>{const a=l(n),o=B(n);setInterval(async()=>{if(a.syncing&&a.syncOrigin==="load")return;const s=await d.getDBOption("last_synced",0),t=["product","product_category"];r("pos","cache_customers")&&t.push("user"),r("wc","coupons_enabled",!1)&&r("pos","cache_coupons",!0)&&t.push("coupon"),R("check_updates",{last_synced:String(s),collections:t.join(","),register_id:String(C("id"))}).then(c=>{if(c.ok){const p=c.body;o.push(p)}})},r("pos","check_updates_interval",15)*1e3),o.$subscribe((s,t)=>{t.items.length&&o.update()}),a.$subscribe((s,t)=>{t.tasks.length&&!t.currentTask&&(a.background=!0,a.next().then(c=>{if(c!==!0)throw new Error(c.message)}).catch(D))});const u=s=>!!(!s.name||["login","error-register-in-use"].includes(s.name)),e=s=>s.name?!["login","error-register-in-use","error-unauthorized"].includes(s.name):!1;i.beforeEach((s,t)=>{u(t)&&e(s)&&a.sync()})});export{v as default};

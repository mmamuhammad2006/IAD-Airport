import{_ as pe,a as v,m as he,e as b,s as q,x as ye,y as w,c as L,z as be,A as K,B as F,C as ge,D as J,o as Z,E as ve,G as we,l as Q,H as ke,I as Ee,f as Ce,b as h,k as Ie,t as V,h as G,w as je,F as Te,j as Oe,g as _e,v as Pe,u as Se,i as Ke,q as Ve}from"./_plugin-vue_export-helper-B9fIRd9b.js";const xe={},Ne={class:"container-fluid py-5 p-0"};function De(e,t){return b(),v("div",Ne,t[0]||(t[0]=[he('<div class="m-auto"><div class="col-12 p-0"><div class="table-cont px-5"><div class="col-12 bg-white p-3 rounded-4"><table class="table table-striped table-hover"><thead><tr><th class="bg-white" scope="col">#</th><th class="bg-white" scope="col">Title</th><th class="bg-white text-center" scope="col"> Action </th></tr></thead><tbody><tr><td class="bg-white py-3">1</td><td class="bg-white py-3">Home</td><td class="bg-white py-3 text-center"><a class="btn btn-primary" href="/admin/change/content/edit/home">Edit</a></td></tr></tbody></table></div></div></div></div>',1)]))}const Le=pe(xe,[["render",De]]);var Re=typeof global=="object"&&global&&global.Object===Object&&global,$e=typeof self=="object"&&self&&self.Object===Object&&self,X=Re||$e||Function("return this")(),O=X.Symbol,ee=Object.prototype,Be=ee.hasOwnProperty,Ae=ee.toString,E=O?O.toStringTag:void 0;function Me(e){var t=Be.call(e,E),n=e[E];try{e[E]=void 0;var r=!0}catch{}var o=Ae.call(e);return r&&(t?e[E]=n:delete e[E]),o}var Ue=Object.prototype,We=Ue.toString;function Fe(e){return We.call(e)}var Je="[object Null]",Ge="[object Undefined]",z=O?O.toStringTag:void 0;function ze(e){return e==null?e===void 0?Ge:Je:z&&z in Object(e)?Me(e):Fe(e)}function Ye(e){return e!=null&&typeof e=="object"}var He="[object Symbol]";function qe(e){return typeof e=="symbol"||Ye(e)&&ze(e)==He}var Ze=/\s/;function Qe(e){for(var t=e.length;t--&&Ze.test(e.charAt(t)););return t}var Xe=/^\s+/;function et(e){return e&&e.slice(0,Qe(e)+1).replace(Xe,"")}function R(e){var t=typeof e;return e!=null&&(t=="object"||t=="function")}var Y=NaN,tt=/^[-+]0x[0-9a-f]+$/i,nt=/^0b[01]+$/i,rt=/^0o[0-7]+$/i,ot=parseInt;function H(e){if(typeof e=="number")return e;if(qe(e))return Y;if(R(e)){var t=typeof e.valueOf=="function"?e.valueOf():e;e=R(t)?t+"":t}if(typeof e!="string")return e===0?e:+e;e=et(e);var n=nt.test(e);return n||rt.test(e)?ot(e.slice(2),n?2:8):tt.test(e)?Y:+e}var x=function(){return X.Date.now()},st="Expected a function",it=Math.max,at=Math.min;function ct(e,t,n){var r,o,c,i,s,a,u=0,p=!1,l=!1,f=!0;if(typeof e!="function")throw new TypeError(st);t=H(t)||0,R(n)&&(p=!!n.leading,l="maxWait"in n,c=l?it(H(n.maxWait)||0,t):c,f="trailing"in n?!!n.trailing:f);function y(d){var g=r,k=o;return r=o=void 0,u=d,i=e.apply(k,g),i}function C(d){return u=d,s=setTimeout(I,t),p?y(d):i}function de(d){var g=d-a,k=d-u,W=t-g;return l?at(W,c-k):W}function M(d){var g=d-a,k=d-u;return a===void 0||g>=t||g<0||l&&k>=c}function I(){var d=x();if(M(d))return U(d);s=setTimeout(I,de(d))}function U(d){return s=void 0,f&&r?y(d):(r=o=void 0,i)}function fe(){s!==void 0&&clearTimeout(s),u=0,r=a=o=s=void 0}function me(){return s===void 0?i:U(x())}function S(){var d=x(),g=M(d);if(r=arguments,o=this,a=d,g){if(s===void 0)return C(a);if(l)return clearTimeout(s),s=setTimeout(I,t),y(a)}return s===void 0&&(s=setTimeout(I,t)),i}return S.cancel=fe,S.flush=me,S}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 *//**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function lt(e,{timeOutAfter:t=500,retryAfter:n=100}={}){return new Promise((r,o)=>{const c=Date.now();let i=null;const s=setTimeout(()=>{o(i??new Error("Timeout"))},t),a=async()=>{try{const u=await e();clearTimeout(s),r(u)}catch(u){i=u,Date.now()-c>t?o(u):setTimeout(a,n)}};a()})}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */const j=new Map;function te(e,{attributes:t}={}){if(j.has(e))return j.get(e);const n=document.querySelector(`script[src="${e}"]`);n&&(console.warn(`Script with "${e}" src is already present in DOM!`),n.remove());const r=new Promise((o,c)=>{const i=document.createElement("script");i.onerror=c,i.onload=()=>{o()};for(const[a,u]of Object.entries(t||{}))i.setAttribute(a,u);i.setAttribute("data-injected-by","ckeditor-integration"),i.type="text/javascript",i.async=!0,i.src=e,document.head.appendChild(i);const s=new MutationObserver(a=>{a.flatMap(p=>Array.from(p.removedNodes)).includes(i)&&(j.delete(e),s.disconnect())});s.observe(document.head,{childList:!0,subtree:!0})});return j.set(e,r),r}async function ne(e,t){await Promise.all(e.map(n=>te(n,t)))}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */const T=new Map;function ut({href:e,placementInHead:t="start",attributes:n={}}){if(T.has(e))return T.get(e);const r=document.querySelector(`link[href="${e}"][rel="stylesheet"]`);r&&(console.warn(`Stylesheet with "${e}" href is already present in DOM!`),r.remove());const o=i=>{const s=Array.from(document.head.querySelectorAll('link[data-injected-by="ckeditor-integration"]'));switch(t){case"start":s.length?s.slice(-1)[0].after(i):document.head.insertBefore(i,document.head.firstChild);break;case"end":document.head.appendChild(i);break}},c=new Promise((i,s)=>{const a=document.createElement("link");for(const[p,l]of Object.entries(n||{}))a.setAttribute(p,l);a.setAttribute("data-injected-by","ckeditor-integration"),a.rel="stylesheet",a.href=e,a.onerror=s,a.onload=()=>{i()},o(a);const u=new MutationObserver(p=>{p.flatMap(f=>Array.from(f.removedNodes)).includes(a)&&(T.delete(e),u.disconnect())});u.observe(document.head,{childList:!0,subtree:!0})});return T.set(e,c),c}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function dt(e,{attributes:t}={}){if(document.head.querySelector(`link[href="${e}"][rel="preload"]`))return;const n=document.createElement("link");for(const[r,o]of Object.entries(t||{}))n.setAttribute(r,o);n.setAttribute("data-injected-by","ckeditor-integration"),n.rel="preload",n.as=ft(e),n.href=e,document.head.insertBefore(n,document.head.firstChild)}function ft(e){switch(!0){case/\.css$/.test(e):return"style";case/\.js$/.test(e):return"script";default:return"fetch"}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */const m=new Array(256).fill("").map((e,t)=>("0"+t.toString(16)).slice(-2));function mt(){const[e,t,n,r]=crypto.getRandomValues(new Uint32Array(4));return"e"+m[e>>0&255]+m[e>>8&255]+m[e>>16&255]+m[e>>24&255]+m[t>>0&255]+m[t>>8&255]+m[t>>16&255]+m[t>>24&255]+m[n>>0&255]+m[n>>8&255]+m[n>>16&255]+m[n>>24&255]+m[r>>0&255]+m[r>>8&255]+m[r>>16&255]+m[r>>24&255]}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function N(e){return Array.from(new Set(e))}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */async function _(e,t){const n=()=>e.map(r=>window[r]).filter(Boolean)[0];return lt(()=>{const r=n();if(!r)throw new Error(`Window entry "${e.join(",")}" not found.`);return r},t)}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function pt(e,t){const n=Object.entries(e).filter(([r,o])=>t(o,r));return Object.fromEntries(n)}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function ht(e){return pt(e,t=>t!=null)}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function re(e,t){const n=Object.entries(e).map(([r,o])=>[r,t(o,r)]);return Object.fromEntries(n)}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function $(e,t){return t.filter(n=>!e.includes(n))}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function yt(e,t){const n=e.extraPlugins||[];return{...e,extraPlugins:[...n,...t.filter(r=>!n.includes(r))]}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function B(e){return!!e&&/^\d+\.\d+\.\d+/.test(e)}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function P(e){return e?["nightly","alpha","internal"].some(t=>e.includes(t)):!1}function bt(e){return B(e)||P(e)}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function oe(e){if(!B(e))throw new Error(`Invalid semantic version: ${e||"<blank>"}.`);const[t,n,r]=e.split(".");return{major:Number.parseInt(t,10),minor:Number.parseInt(n,10),patch:Number.parseInt(r,10)}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function se(e){if(P(e))return 3;const{major:t}=oe(e);switch(!0){case t>=44:return 3;case t>=38:return 2;default:return 1}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function ie(){const{CKEDITOR_VERSION:e,CKEDITOR:t}=window;return bt(e)?{source:t?"cdn":"npm",version:e}:null}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function gt(){const e=ie();return e?se(e.version):null}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function ae(e,t){switch(t||(t=gt()||void 0),t){case 1:case 2:return e===void 0;case 3:return e==="GPL";default:return!1}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function vt(e,t){return function(r){ae(r.config.get("licenseKey"))||r.on("collectUsageData",(o,{setUsageData:c})=>{c(`integration.${e}`,t)})}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */const wt="https://cdn.ckeditor.com";function ce(e,t,n){return`${wt}/${e}/${n}/${t}`}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */const kt="https://cdn.ckbox.io";function Et(e,t,n){return`${kt}/${e}/${n}/${t}`}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */const Ct="https://ckeditor.com/docs/ckeditor5";function It(e,t="latest"){return`${Ct}/${t}/${e}`}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function jt({version:e,translations:t,createCustomCdnUrl:n=ce}){const r={scripts:[n("ckeditor5","ckeditor5.umd.js",e),...$(["en"],t||[]).map(o=>n("ckeditor5",`translations/${o}.umd.js`,e))],stylesheets:[n("ckeditor5","ckeditor5.css",e)]};return{preload:[...r.stylesheets,...r.scripts],scripts:[async o=>ne(r.scripts,o)],stylesheets:r.stylesheets,checkPluginLoaded:async()=>_(["CKEDITOR"]),beforeInject:()=>{const o=ie();switch(o==null?void 0:o.source){case"npm":throw new Error("CKEditor 5 is already loaded from npm. Check the migration guide for more details: "+It("updating/migration-to-cdn/vanilla-js.html"));case"cdn":if(o.version!==e)throw new Error(`CKEditor 5 is already loaded from CDN in version ${o.version}. Remove the old <script> and <link> tags loading CKEditor 5 to allow loading the ${e} version.`);break}}}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function Tt({version:e,translations:t,createCustomCdnUrl:n=ce}){const r={scripts:[n("ckeditor5-premium-features","ckeditor5-premium-features.umd.js",e),...$(["en"],t||[]).map(o=>n("ckeditor5-premium-features",`translations/${o}.umd.js`,e))],stylesheets:[n("ckeditor5-premium-features","ckeditor5-premium-features.css",e)]};return{preload:[...r.stylesheets,...r.scripts],scripts:[async o=>ne(r.scripts,o)],stylesheets:r.stylesheets,checkPluginLoaded:async()=>_(["CKEDITOR_PREMIUM_FEATURES"])}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */async function Ot(e){let{htmlAttributes:t={},scripts:n=[],stylesheets:r=[],preload:o,beforeInject:c,checkPluginLoaded:i}=A(e);c==null||c(),o||(o=N([...r.filter(s=>typeof s=="string"),...n.filter(s=>typeof s=="string")]));for(const s of o)dt(s,{attributes:t});await Promise.all(N(r).map(s=>ut({href:s,attributes:t,placementInHead:"start"})));for(const s of N(n)){const a={attributes:t};typeof s=="string"?await te(s,a):await s(a)}return i==null?void 0:i()}function A(e){return Array.isArray(e)?{scripts:e.filter(t=>typeof t=="function"||t.endsWith(".js")),stylesheets:e.filter(t=>t.endsWith(".css"))}:typeof e=="function"?{checkPluginLoaded:e}:e}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function le(e){const t=re(ht(e),A);return{...Object.values(t).reduce((c,i)=>(c.scripts.push(...i.scripts??[]),c.stylesheets.push(...i.stylesheets??[]),c.preload.push(...i.preload??[]),c),{preload:[],scripts:[],stylesheets:[]}),beforeInject:()=>{var c;for(const i of Object.values(t))(c=i.beforeInject)==null||c.call(i)},checkPluginLoaded:async()=>{var i;const c=Object.create(null);for(const[s,a]of Object.entries(t))c[s]=await((i=a==null?void 0:a.checkPluginLoaded)==null?void 0:i.call(a));return c}}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function _t(){var t;const e=(t=window.CKBox)==null?void 0:t.version;return B(e)?{source:"cdn",version:e}:null}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function Pt({version:e,theme:t="lark",translations:n,createCustomCdnUrl:r=Et}){return{scripts:[r("ckbox","ckbox.js",e),...$(["en"],n||[]).map(o=>r("ckbox",`translations/${o}.js`,e))],...t&&{stylesheets:[r("ckbox",`styles/themes/${t}.css`,e)]},checkPluginLoaded:async()=>_(["CKBox"]),beforeInject:()=>{const o=_t();if(o&&o.version!==e)throw new Error(`CKBox is already loaded from CDN in version ${o.version}. Remove the old <script> and <link> tags loading CKBox to allow loading the ${e} version.`)}}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function St(e){if(P(e))return!0;const{major:t}=oe(e);switch(se(e)){case 3:return!0;default:return t===43}}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function Kt(e){const t=re(e,(n,r)=>{if(!n)return;const o=A(n);return{checkPluginLoaded:async()=>_([r]),...o}});return le(t)}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function Vt(e){const{version:t,translations:n,plugins:r,premium:o,ckbox:c,createCustomCdnUrl:i,injectedHtmlElementsAttributes:s={crossorigin:"anonymous"}}=e;xt(t);const a=le({CKEditor:jt({version:t,translations:n,createCustomCdnUrl:i}),...o&&{CKEditorPremiumFeatures:Tt({version:t,translations:n,createCustomCdnUrl:i})},...c&&{CKBox:Pt(c)},loadedPlugins:Kt(r??{})});return Ot({...a,htmlAttributes:s})}function xt(e){if(P(e)&&console.warn("You are using a testing version of CKEditor 5. Please remember that it is not suitable for production environments."),!St(e))throw new Error(`The CKEditor 5 CDN can't be used with the given editor version: ${e}. Please make sure you are using at least the CKEditor 5 version 44.`)}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */const Nt=vt("vue",{version:"7.3.0",frameworkVersion:q});/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function Dt(e){return ae(e.licenseKey)?e:yt(e,[Nt])}const D="Lock from Vue integration (@ckeditor/ckeditor5-vue)",Lt=300,Rt=ye({name:"CKEditor",__name:"ckeditor",props:F({editor:{},config:{default:()=>({})},tagName:{default:"div"},disabled:{type:Boolean,default:!1},disableTwoWayDataBinding:{type:Boolean,default:!1}},{modelValue:{type:String,default:""},modelModifiers:{}}),emits:F(["ready","destroy","blur","focus","input","update:modelValue"],["update:modelValue"]),setup(e,{expose:t,emit:n}){const r=ge(e,"modelValue"),o=e,c=n,i=w(),s=w(),a=w();t({instance:s,lastEditorData:a}),J(r,l=>{s.value&&l!==a.value&&s.value.data.set(l)}),J(()=>o.disabled,l=>{l?s.value.enableReadOnlyMode(D):s.value.disableReadOnlyMode(D)});function u(){const l=window.CKEDITOR_VERSION;if(!l)return console.warn('Cannot find the "CKEDITOR_VERSION" in the "window" scope.');const[f]=l.split(".").map(Number);f>=42||l.startsWith("0.0.0")||console.warn("The <CKEditor> component requires using CKEditor 5 in version 42+ or nightly build.")}function p(l){const f=ct(y=>{if(o.disableTwoWayDataBinding)return;const C=a.value=l.data.get();c("update:modelValue",C,y,l),c("input",C,y,l)},Lt,{leading:!0});l.model.document.on("change:data",f),l.editing.view.document.on("focus",y=>{c("focus",y,l)}),l.editing.view.document.on("blur",y=>{c("blur",y,l)})}return u(),Z(()=>{const l=Dt(Object.assign({},o.config));r.value&&(l.initialData=r.value),o.editor.create(i.value,l).then(f=>{s.value=ve(f),p(f),r.value!==l.initialData&&f.data.set(r.value),o.disabled&&f.enableReadOnlyMode(D),c("ready",f)}).catch(f=>{console.error(f)})}),we(()=>{s.value&&(s.value.destroy(),s.value=void 0),c("destroy")}),(l,f)=>(b(),Q(ke(l.tagName),{ref_key:"element",ref:i},null,512))}});/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */const $t=e=>{const t=w(null),n=w(null),r=w(null),o=L(()=>t.value!==null);return be(async()=>{const c=mt();t.value=c,r.value=null,n.value=null;const i=()=>t.value!==c;try{const s=await e();i()||(r.value=s)}catch(s){i()||(n.value=s)}finally{i()||(t.value=null)}}),{loading:K(o),data:K(r),error:K(n)}};/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */function Bt(e){return $t(()=>Vt(Ee(e)))}/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 *//* istanbul ignore if -- @preserve */if(!q.startsWith("3."))throw new Error("The CKEditor plugin works only with Vue 3+. For more information, please refer to https://ckeditor.com/docs/ckeditor5/latest/builds/guides/integration/frameworks/vuejs-v3.html");const At={class:"container-fluid"},Mt={class:"container col-8"},Ut={class:"col-12 py-5"},Wt={key:0,class:"alert alert-success alert-dismissible fade show",role:"alert"},Ft={class:"p-3 bg-white rounded"},Jt={key:0},Gt={for:"",class:"form-label"},zt=["name","onUpdate:modelValue","value"],Yt={key:1},Ht={for:"",class:"form-label"},qt={__name:"ChangeContent",props:{contents:{required:!0}},setup(e){const t=e,n=Ce({contents:[],msg:null}),r=Bt({version:"44.1.0",premium:!0}),o=async()=>{const s={};n.contents.forEach(a=>{s[a.key]=a.value}),await Ke.post("/admin/change/content/update",s).then(a=>{n.msg="Content updated successfully"})};Z(()=>{n.contents=t.contents});const c=L(()=>r.data.value?r.data.value.CKEditor.ClassicEditor:null),i=L(()=>{if(!r.data.value)return null;const{Essentials:s,Paragraph:a,Bold:u,Italic:p}=r.data.value.CKEditor,{FormatPainter:l}=r.data.value.CKEditorPremiumFeatures;return{licenseKey:"eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3Mzc1OTAzOTksImp0aSI6ImVhM2FiMTI5LTZlNTAtNGUwNi1iYzhiLWMwMzJkYTI4ZjA3MCIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6ImMxM2FiMWU2In0.EuuJ86Lhl1FjYvvXPww8GrYFHq09M5lwGbDcUykxC_isd6QTNJcU7Vp4lw5jiheGnw8ND87bz9YW2J7erESMig",plugins:[s,a,u,p,l],toolbar:["undo","redo","|","bold","italic","|","formatPainter"]}});return(s,a)=>(b(),v("div",At,[h("div",Mt,[h("div",Ut,[n.msg!==null?(b(),v("div",Wt,[Ie(V(n.msg)+" ",1),a[0]||(a[0]=h("button",{type:"button",class:"close","data-dismiss":"alert","aria-label":"Close"},[h("span",{"aria-hidden":"true"},"×")],-1))])):G("",!0),h("form",{onSubmit:je(o,["prevent"]),class:"col-12",action:"",method:"POST"},[(b(!0),v(Te,null,Oe(n.contents,(u,p)=>(b(),v("div",{key:p,class:"mb-3 col-12"},[h("div",Ft,[u.type=="text"?(b(),v("div",Jt,[h("label",Gt,V(u.key),1),_e(h("input",{type:"text",class:"form-control",name:u.key,"onUpdate:modelValue":l=>u.value=l,id:"","aria-describedby":"helpId",placeholder:"",value:u.value,required:""},null,8,zt),[[Pe,u.value]])])):(b(),v("div",Yt,[h("label",Ht,V(u.key),1),c.value?(b(),Q(Se(Rt),{key:0,name:u.key,modelValue:u.value,"onUpdate:modelValue":l=>u.value=l,editor:c.value,config:i.value},null,8,["name","modelValue","onUpdate:modelValue","editor","config"])):G("",!0)]))])]))),128)),a[1]||(a[1]=h("div",{class:"d-flex justify-content-end"},[h("button",{type:"submit",class:"btn btn-primary mb-5"}," Update ")],-1))],32)])])]))}},ue=Ve({});ue.component("all-pages",Le).component("change-content",qt);ue.mount("#app");

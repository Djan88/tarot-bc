!function(t){var e={};function o(n){if(e[n])return e[n].exports;var r=e[n]={i:n,l:!1,exports:{}};return t[n].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=t,o.c=e,o.d=function(t,e,n){o.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},o.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)o.d(n,r,function(e){return t[e]}.bind(null,r));return n},o.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(e,"a",e),e},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},o.p="",o(o.s=0)}([function(t,e,o){"use strict";o.r(e);const n=window.tadvBlockButtons,{wp:r}=window,{get:a}=window.lodash,{createElement:c}=r.element,{InspectorControls:l,PanelColorSettings:i}=r.blockEditor,{registerFormatType:s,applyFormat:u,removeFormat:d,getActiveFormat:v}=r.richText;function m(t){return(t=t.replace(/.*?(background-)?color:\s*/,"")).replace(/[; ]+$/,"")}const h=window.tadvBlockButtons||{},{wp:p}=window,{RichTextToolbarButton:g}=p.blockEditor,{registerFormatType:f,removeFormat:b}=p.richText,{createElement:y}=p.element,{ToolbarButton:k}=p.components,w=h.strRemoveFormatting||"Clear formatting";let F;function T(t){const e=[];return F||(F=h.formats_to_remove?h.formats_to_remove.split(","):["core/bold","core/italic","core/code","core/underline","core/strikethrough","core/text-color","tadv/sup","tadv/sub","tadv/mark","tadv/color-panel","tadv/background-color-panel"]),t.forEach(t=>{t&&t.forEach(t=>{F.indexOf(t.type)>-1&&-1===e.indexOf(t.type)&&e.push(t.type)})}),e}function C(t){let e=t.formats;if(!e.length)return t;let o=0,n=e.length;t.end>t.start&&(o=t.start,n=t.end,e=e.slice(o,n));const r=T(e);return r.length?(r.forEach(e=>{t=b(t,e,o,n)}),t):t}const{wp:x}=window,{createElement:B,Fragment:A}=(window.tadvBlockButtons,x.element),{__:N}=x.i18n,{ToolbarButton:E}=x.components,{RichTextToolbarButton:S,RichTextShortcut:_}=x.blockEditor,{registerFormatType:O,getActiveFormat:P,toggleFormat:R,applyFormat:M,removeFormat:U}=x.richText,j=N("Strikethrough");function z(t,e,o){e(R(t,{type:"core/strikethrough"})),o&&o()}const{wp:L}=window,{createElement:I,Fragment:G}=L.element,{__:H}=L.i18n,{ToolbarButton:V}=L.components,{RichTextToolbarButton:$,RichTextShortcut:q}=L.blockEditor,{registerFormatType:D,getActiveFormat:J,toggleFormat:K,remove:Q,applyFormat:W}=L.richText,X=H("Inline Code");function Y(t,e,o){e(K(t,{type:"core/code"})),o&&o()}const{wp:Z}=window,tt=window.tadvBlockButtons||{},{createElement:et,Fragment:ot}=Z.element,{__:nt}=Z.i18n,{ToolbarButton:rt}=Z.components,{RichTextToolbarButton:at,RichTextShortcut:ct}=Z.blockEditor,{Path:lt,SVG:it}=Z.components,{registerFormatType:st,getActiveFormat:ut,toggleFormat:dt,applyFormat:vt,removeFormat:mt}=Z.richText,ht=et(it,{viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg",className:"dashicon tadv-mark-icon"},et(lt,{"aria-hidden":"true",role:"img",focusable:"false",width:"20",height:"20",d:"M13.23 15h1.9L11 4H9L5 15h1.88l1.07-3h4.18zm-1.53-4.54H8.51L10 5.6z"})),pt=tt.strMark;function gt(t,e,o){e(dt(t,{type:"tadv/mark"})),o&&o()}const{wp:ft}=window,bt=window.tadvBlockButtons||{},{createElement:yt,Fragment:kt}=ft.element,{__:wt}=ft.i18n,{ToolbarButton:Ft}=ft.components,{RichTextToolbarButton:Tt,RichTextShortcut:Ct}=ft.blockEditor,{registerFormatType:xt,getActiveFormat:Bt,applyFormat:At,removeFormat:Nt}=ft.richText;function Et(t,e,o,n){if(t)o(Nt(e,"core/underline"));else{o(At(e,{type:"core/underline",attributes:{style:"text-decoration: underline"}}))}n&&n()}const{wp:St}=window,_t=window.tadvBlockButtons,{createElement:Ot,Fragment:Pt}=St.element,{registerFormatType:Rt,getActiveFormat:Mt,toggleFormat:Ut}=St.richText,{ToolbarButton:jt}=St.components,{RichTextToolbarButton:zt,RichTextShortcut:Lt}=St.blockEditor,{Path:It,SVG:Gt}=St.components,Ht=Ot(Gt,{viewBox:"-85 -985 1024 1024",xmlns:"http://www.w3.org/2000/svg"},Ot(It,{"aria-hidden":"true",role:"img",focusable:"false",transform:"scale(1, -1)",translate:"(0, -960)",d:"M768 754v-50h128v-64h-192v146l128 60v50h-128v64h192v-146zM676 704h-136l-188-188-188 188h-136l256-256-256-256h136l188 188 188-188h136l-256 256z"})),Vt=Ot(Gt,{viewBox:"-85 -975 1024 1024",xmlns:"http://www.w3.org/2000/svg"},Ot(It,{"aria-hidden":"true",role:"img",focusable:"false",transform:"scale(1, -1)",translate:"(0, -960)",d:"M768 50v-50h128v-64h-192v146l128 60v50h-128v64h192v-146zM676 704h-136l-188-188-188 188h-136l256-256-256-256h136l188 188 188-188h136l-256 256z"}));function $t(t,e,o,n){o(Ut(e,{type:t})),n&&n()}function qt({type:t,tagName:e,title:o,character:n,icon:r},a){Rt(t,{title:o,tagName:e,className:null,edit({value:e,onChange:c,onFocus:l,isActive:i}){let s=null;return a||(s=Ot(zt,{title:o,icon:r,onClick:()=>$t(t,e,c,l),isActive:i,shortcutType:"primary",shortcutCharacter:n})),Ot(Pt,null,Ot(Lt,{type:"primary",character:n,onUse:()=>$t(t,e,c)}),s)}})}const{wp:Dt}=window,{createElement:Jt}=Dt.element,{select:Kt}=Dt.data,{addFilter:Qt}=Dt.hooks,{PanelBody:Wt,Toolbar:Xt}=Dt.components,{InspectorControls:Yt}=Dt.blockEditor,{registerFormatType:Zt,unregisterFormatType:te}=Dt.richText,ee=window.tadvBlockButtons||{},oe=ee.buttons?ee.buttons.split(","):[],ne=ee.panelButtons?ee.panelButtons.split(","):[],re=ee.unusedButtons?ee.unusedButtons.split(","):[],ae={"tadv/mark":function(t){st("tadv/mark",{title:pt,tagName:"mark",className:null,edit({value:e,onChange:o,onFocus:n,isActive:r}){let a=null;return t||(a=et(at,{title:pt,icon:ht,onClick:()=>gt(e,o,n),className:"tadv-icon-button-mark",isActive:r,shortcutType:"access",shortcutCharacter:"m"})),et(ot,null,et(ct,{type:"access",character:"m",onUse:()=>gt(e,o)}),a)}})},"tadv/removeformat":function(t){f("tadv/removeformat",{title:w,tagName:"u",className:"remove-format",edit:({value:e,onChange:o,onFocus:n,isActive:r})=>t?null:y(g,{icon:"editor-removeformatting",title:w,onClick:()=>o(C(e)),isActive:null})})},"tadv/sub":function(t){qt({type:"tadv/sub",tagName:"sub",title:_t.strSubscript,character:",",icon:Vt},t)},"tadv/sup":function(t){qt({type:"tadv/sup",tagName:"sup",title:_t.strSuperscript,character:".",icon:Ht},t)},"core/code":function(t){D("core/code",{title:X,tagName:"code",className:null,__unstableInputRule(t){const{start:e,text:o}=t;if("`"!==o.slice(e-1,e))return t;const n=o.slice(0,e-1).lastIndexOf("`");if(-1===n)return t;const r=n,a=e-2;return r===a?t:(t=Q(t,r,r+1),t=Q(t,a,a+1),t=W(t,{type:"core/code"},r,a))},edit({value:e,onChange:o,onFocus:n,isActive:r}){let a=null;return t||(a=I($,{icon:"editor-code",title:X,onClick:()=>Y(e,o,n),isActive:r,shortcutType:"access",shortcutCharacter:"x"})),I(G,null,I(q,{type:"access",character:"x",onUse:()=>Y(e,o)}),a)}})},"core/strikethrough":function(t){O("core/strikethrough",{name:"core/strikethrough",title:j,tagName:"s",className:null,edit({value:e,onChange:o,onFocus:n,isActive:r}){let a=null;return t||(a=B(S,{icon:"editor-strikethrough",title:j,onClick:()=>z(e,o,n),isActive:r,shortcutType:"access",shortcutCharacter:"d"})),B(A,null,B(_,{type:"access",character:"d",onUse:()=>z(e,o)}),a)}})},"core/underline":function(t){xt("core/underline",{title:bt.strUnderline,tagName:"span",className:"underline",attributes:{style:"style"},edit({value:e,onChange:o,onFocus:n,isActive:r}){let a=null;return t||(a=yt(Tt,{title:bt.strUnderline,icon:"editor-underline",onClick:()=>Et(r,e,o,n),className:null,isActive:r,shortcutType:"primary",shortcutCharacter:"u"})),yt(kt,null,yt(Ct,{type:"primary",character:"u",onUse:()=>Et(r,e,o)}),a)}})}},ce={"core/code":function({value:t,onChange:e,onFocus:o,isActive:n}){return I(V,{key:"core/code",icon:"editor-code",className:"tadv-icon-button",isActive:J(t,"core/code"),title:X,onClick:()=>Y(t,e,o)})},"core/strikethrough":function({value:t,onChange:e,onFocus:o,isActive:n}){return B(E,{key:"core/strikethrough",icon:"editor-strikethrough",className:"tadv-icon-button",isActive:P(t,"core/strikethrough"),title:j,onClick:()=>z(t,e,o)})},"core/underline":function({value:t,onChange:e,onFocus:o,isActive:n}){const r=!!Bt(t,"core/underline");return yt(Ft,{key:"core/underline",icon:"editor-underline",className:"tadv-icon-button",isActive:r,title:bt.strUnderline,onClick:()=>Et(r,t,e,o)})},"tadv/removeformat":function({value:t,onChange:e,onFocus:o,isActive:n}){return y(k,{key:"tadv/removeformat",icon:"editor-removeformatting",className:"tadv-icon-button",title:w,onClick:()=>e(C(t))})},"tadv/mark":function({value:t,onChange:e,onFocus:o,isActive:n}){return et(rt,{key:"tadv/mark",icon:"editor-textcolor",className:"tadv-icon-button tadv-icon-button-mark",isActive:ut(t,"tadv/mark"),title:pt,onClick:()=>gt(t,e,o)})},"tadv/sup":function({value:t,onChange:e,onFocus:o,isActive:n}){return Ot(jt,{key:"tadv/sup",icon:Ht,className:"tadv-icon-button",isActive:Mt(t,"tadv/sup"),title:_t.strSuperscript,onClick:()=>$t("tadv/sup",t,e,o)})},"tadv/sub":function({value:t,onChange:e,onFocus:o,isActive:n}){return Ot(jt,{key:"tadv/sub",icon:Vt,className:"tadv-icon-button",isActive:Mt(t,"tadv/sub"),title:_t.strSubscript,onClick:()=>$t("tadv/sub",t,e,o)})}};function le(t){(function(t){const e=Kt("core/rich-text").getFormatTypes();let o=!1;return e.forEach(e=>{e.name===t&&(o=!0)}),o})(t)&&te(t)}function ie(){re.length&&re.forEach(t=>{le(t)}),oe.forEach(t=>{ae.hasOwnProperty(t)&&(le(t),ae[t].call(null))}),ne.length&&(ne.forEach(t=>{-1===oe.indexOf(t)&&ae.hasOwnProperty(t)&&(le(t),ae[t].call(null,"panel"))}),Zt("tadv/tadv-format-panel",{title:ee.strFormatting,tagName:"span",className:"tadv-format-panel",edit({value:t,onChange:e,onFocus:o,isActive:n}){const r=[];return ne.forEach(a=>{ce.hasOwnProperty(a)&&r.push(ce[a].call(null,{value:t,onChange:e,onFocus:o,isActive:n}))}),Jt(Yt,null,Jt(Wt,{title:ee.strFormatting,className:"tadv-buttons-panel"},Jt(Xt,null,r)))}})),function(){if(!n.colorPanel)return;const t=n.colorPanel.indexOf("tadv/color-panel")>-1,e=n.colorPanel.indexOf("tadv/background-color-panel")>-1;t&&s("tadv/color-panel",{title:n.strTextColor,tagName:"span",className:"tadv-color",attributes:{style:"style"},edit({isActive:t,value:o,onChange:r}){let s,h;if(t){const t=v(o,"tadv/color-panel"),e=a(t,["attributes","style"])||"",n=v(o,"tadv/background-color-panel"),r=a(n,["attributes","style"])||"";s=m(e),h=m(r)}const p=[{value:s,onChange:t=>{r(t?u(o,{type:"tadv/color-panel",attributes:{style:"color:"+t}}):d(o,"tadv/color-panel"))},label:n.strTextColorLabel}];return e&&p.push({value:h,onChange:t=>{r(t?u(o,{type:"tadv/background-color-panel",attributes:{style:"background-color:"+t}}):d(o,"tadv/background-color-panel"))},label:n.strBackgroundColorLabel}),c(l,null,c(i,{title:n.strTextColor,initialOpen:!1,colorSettings:p}))}}),s("tadv/background-color-panel",{title:n.strBackgroundColor,tagName:"span",className:"tadv-background-color",attributes:{style:"style"},edit({isActive:o,value:r,onChange:s}){if(!e||t)return null;let h;if(o){const t=v(r,"tadv/background-color-panel");h=m(a(t,["attributes","style"])||"")}const p=[{value:h,onChange:t=>{s(t?u(r,{type:"tadv/background-color-panel",attributes:{style:"background-color:"+t}}):d(r,"tadv/background-color-panel"))},label:n.strBackgroundColorLabel}];return c(l,null,c(i,{title:n.strTextColor,initialOpen:!1,colorSettings:p}))}})}()}let se;Qt("blocks.registerBlockType","tadv-register-formats",(function(t){return se||(ie(),se=!0),t}))}]);
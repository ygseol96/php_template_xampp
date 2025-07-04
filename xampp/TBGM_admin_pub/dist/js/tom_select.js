/**
* Tom Select v1.7.5
* Licensed under the Apache License, Version 2.0 (the "License");
*/
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e="undefined"!=typeof globalThis?globalThis:e||self).TomSelect=t()}(this,(function(){"use strict"
function e(e,t){e.split(/\s+/).forEach((e=>{t(e)}))}class t{constructor(){this._events={}}on(t,i){e(t,(e=>{this._events[e]=this._events[e]||[],this._events[e].push(i)}))}off(t,i){var s=arguments.length
0!==s?e(t,(e=>{if(1===s)return delete this._events[e]
e in this._events!=!1&&this._events[e].splice(this._events[e].indexOf(i),1)})):this._events={}}trigger(t,...i){var s=this
e(t,(e=>{if(e in s._events!=!1)for(let t of s._events[e])t.apply(s,i)}))}}var i=[[67,67],[160,160],[192,438],[452,652],[961,961],[1019,1019],[1083,1083],[1281,1289],[1984,1984],[5095,5095],[7429,7441],[7545,7549],[7680,7935],[8580,8580],[9398,9449],[11360,11391],[42792,42793],[42802,42851],[42873,42897],[42912,42922],[64256,64260],[65313,65338],[65345,65370]]
function s(e){return e.normalize("NFD").replace(/[\u0300-\u036F]/g,"").normalize("NFKD").toLowerCase()}var n=null
function o(e){null===n&&(n=function(){var e={"l·":"l","ʼn":"n","æ":"ae","ø":"o","aʾ":"a","dž":"dz"},t={}
return i.forEach((i=>{for(let s=i[0];s<=i[1];s++){let i=String.fromCharCode(s),n=i.normalize("NFD").replace(/[\u0300-\u036F]/g,"").normalize("NFKD")
n!=i&&(n=n.toLowerCase(),n in e&&(n=e[n]),n in t||(t[n]=n+n.toUpperCase()),t[n]+=i)}})),t}())
for(let t in n)n.hasOwnProperty(t)&&(e=e.replace(new RegExp(t,"g"),"["+n[t]+"]"))
return e}function r(e,t){if(e)return e[t]}function l(e,t){if(e){for(var i=t.split(".");i.length&&(e=e[i.shift()]););return e}}function a(e,t,i){var s,n
return e?-1===(n=(e+="").search(t.regex))?0:(s=t.string.length/e.length,0===n&&(s+=.5),s*i):0}function d(e){return(e+"").replace(/([.?*+^$[\]\\(){}|-])/g,"\\$1")}function c(e,t){var i=e[t]
i&&!Array.isArray(i)&&(e[t]=[i])}function p(e,t){if(Array.isArray(e))e.forEach(t)
else for(var i in e)e.hasOwnProperty(i)&&t(e[i],i)}function u(e,t){return"number"==typeof e&&"number"==typeof t?e>t?1:e<t?-1:0:(e=s(e+"").toLowerCase())>(t=s(t+"").toLowerCase())?1:t>e?-1:0}class h{constructor(e,t){this.items=void 0,this.settings=void 0,this.items=e,this.settings=t||{diacritics:!0}}tokenize(e,t,i){if(!e||!e.length)return[]
const s=[],n=e.split(/\s+/)
var r
return i&&(r=new RegExp("^("+Object.keys(i).map(d).join("|")+"):(.*)$")),n.forEach((e=>{let i,n=null,l=null
r&&(i=e.match(r))&&(n=i[1],e=i[2]),e.length>0&&(l=d(e),this.settings.diacritics&&(l=o(l)),t&&(l="\\b"+l),l=new RegExp(l,"i")),s.push({string:e,regex:l,field:n})})),s}getScoreFunction(e,t){var i=this.prepareSearch(e,t)
return this._getScoreFunction(i)}_getScoreFunction(e){const t=e.tokens,i=t.length
if(!i)return function(){return 0}
const s=e.options.fields,n=e.weights,o=s.length,r=e.getAttrFn
if(!o)return function(){return 1}
const l=1===o?function(e,t){const i=s[0].field
return a(r(t,i),e,n[i])}:function(e,t){var i=0
if(e.field){const s=r(t,e.field)
!e.regex&&s?i+=1/o:i+=a(s,e,1)}else p(n,((s,n)=>{i+=a(r(t,n),e,s)}))
return i/o}
return 1===i?function(e){return l(t[0],e)}:"and"===e.options.conjunction?function(e){for(var s,n=0,o=0;n<i;n++){if((s=l(t[n],e))<=0)return 0
o+=s}return o/i}:function(e){var s=0
return p(t,(t=>{s+=l(t,e)})),s/i}}getSortFunction(e,t){var i=this.prepareSearch(e,t)
return this._getSortFunction(i)}_getSortFunction(e){var t,i,s,n,o,r
const l=this,a=e.options,d=!e.query&&a.sort_empty||a.sort,c=[],p=[],h=function(t,i){return"$score"===t?i.score:e.getAttrFn(l.items[i.id],t)}
if(d)for(t=0,i=d.length;t<i;t++)(e.query||"$score"!==d[t].field)&&c.push(d[t])
if(e.query){for(r=!0,t=0,i=c.length;t<i;t++)if("$score"===c[t].field){r=!1
break}r&&c.unshift({field:"$score",direction:"desc"})}else for(t=0,i=c.length;t<i;t++)if("$score"===c[t].field){c.splice(t,1)
break}for(t=0,i=c.length;t<i;t++)p.push("desc"===c[t].direction?-1:1)
return(n=c.length)?1===n?(s=c[0].field,o=p[0],function(e,t){return o*u(h(s,e),h(s,t))}):function(e,t){var i,s,o
for(i=0;i<n;i++)if(o=c[i].field,s=p[i]*u(h(o,e),h(o,t)))return s
return 0}:null}prepareSearch(e,t){const i={}
var n=Object.assign({},t)
if(c(n,"sort"),c(n,"sort_empty"),n.fields){if(c(n,"fields"),Array.isArray(n.fields)&&"object"!=typeof n.fields[0]){var o=[]
n.fields.forEach((e=>{o.push({field:e})})),n.fields=o}n.fields.forEach((e=>{i[e.field]="weight"in e?e.weight:1}))}return{options:n,query:e=s(e+"").toLowerCase().trim(),tokens:this.tokenize(e,n.respect_word_boundaries,i),total:0,items:[],weights:i,getAttrFn:n.nesting?l:r}}search(e,t){var i,s,n,o,r=this
return s=this.prepareSearch(e,t),t=s.options,e=s.query,o=t.score||r._getScoreFunction(s),e.length?p(r.items,((e,n)=>{i=o(e),(!1===t.filter||i>0)&&s.items.push({score:i,id:n})})):p(r.items,((e,t)=>{s.items.push({score:1,id:t})})),(n=r._getSortFunction(s))&&s.items.sort(n),s.total=s.items.length,"number"==typeof t.limit&&(s.items=s.items.slice(0,t.limit)),s}}const g=e=>{if(e.jquery)return e[0]
if(e instanceof HTMLElement)return e
if(e.indexOf("<")>-1){let t=document.createElement("div")
return t.innerHTML=e.trim(),t.firstChild}return document.querySelector(e)},f=(e,t)=>{var i=document.createEvent("HTMLEvents")
i.initEvent(t,!0,!1),e.dispatchEvent(i)},v=(e,t)=>{Object.assign(e.style,t)},m=(e,...t)=>{var i=O(t);(e=b(e)).map((e=>{i.map((t=>{e.classList.add(t)}))}))},y=(e,...t)=>{var i=O(t);(e=b(e)).map((e=>{i.map((t=>{e.classList.remove(t)}))}))},O=e=>{var t=[]
for(let i of e)"string"==typeof i&&(i=i.trim().split(/[\11\12\14\15\40]/)),Array.isArray(i)&&(t=t.concat(i))
return t.filter(Boolean)},b=e=>(Array.isArray(e)||(e=[e]),e),w=(e,t,i)=>{if(!i||i.contains(e))for(;e&&e.matches;){if(e.matches(t))return e
e=e.parentNode}},I=(e,t=0)=>t>0?e[e.length-1]:e[0],C=(e,t)=>{if(!e)return-1
t=t||e.nodeName
for(var i=0;e=e.previousElementSibling;)e.matches(t)&&i++
return i},_=(e,t)=>{for(const i in t){let s=t[i]
null==s?e.removeAttribute(i):e.setAttribute(i,s)}},S=(e,t)=>{e.parentNode&&e.parentNode.replaceChild(t,e)},A=(e,t)=>{if(null===t)return
if("string"==typeof t){if(!t.length)return
t=new RegExp(t,"i")}const i=e=>3===e.nodeType?(e=>{var i=e.data.match(t)
if(i&&e.data.length>0){var s=document.createElement("span")
s.className="highlight"
var n=e.splitText(i.index)
n.splitText(i[0].length)
var o=n.cloneNode(!0)
return s.appendChild(o),S(n,s),1}return 0})(e):((e=>{if(1===e.nodeType&&e.childNodes&&!/(script|style)/i.test(e.tagName)&&("highlight"!==e.className||"SPAN"!==e.tagName))for(var t=0;t<e.childNodes.length;++t)t+=i(e.childNodes[t])})(e),0)
i(e)},x="undefined"!=typeof navigator&&/Mac/.test(navigator.userAgent)?"metaKey":"ctrlKey"
var k={options:[],optgroups:[],plugins:[],delimiter:",",splitOn:null,persist:!0,diacritics:!0,create:null,createOnBlur:!1,createFilter:null,highlight:!0,openOnFocus:!0,shouldOpen:null,maxOptions:50,maxItems:null,hideSelected:null,duplicates:!1,addPrecedence:!1,selectOnTab:!1,preload:null,allowEmptyOption:!1,closeAfterSelect:!1,loadThrottle:300,loadingClass:"loading",dataAttr:null,optgroupField:"optgroup",valueField:"value",labelField:"text",disabledField:"disabled",optgroupLabelField:"label",optgroupValueField:"value",lockOptgroupOrder:!1,sortField:"$order",searchField:["text"],searchConjunction:"and",mode:null,wrapperClass:"ts-control",inputClass:"ts-input",dropdownClass:"ts-dropdown",dropdownContentClass:"ts-dropdown-content",itemClass:"item",optionClass:"option",dropdownParent:null,controlInput:null,copyClassesToDropdown:!0,placeholder:null,hidePlaceholder:null,shouldLoad:function(e){return e.length>0},render:{}}
const F=e=>null==e?null:L(e),L=e=>"boolean"==typeof e?e?"1":"0":e+"",P=e=>(e+"").replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;"),E=(e,t)=>{var i
return function(s,n){var o=this
i&&(o.loading=Math.max(o.loading-1,0),clearTimeout(i)),i=setTimeout((function(){i=null,o.loadedSearches[s]=!0,e.call(o,s,n)}),t)}},T=(e,t,i)=>{var s,n=e.trigger,o={}
for(s in e.trigger=function(){var i=arguments[0]
if(-1===t.indexOf(i))return n.apply(e,arguments)
o[i]=arguments},i.apply(e,[]),e.trigger=n,o)n.apply(e,o[s])},q=(e,t=!1)=>{e&&(e.preventDefault(),t&&e.stopPropagation())},V=(e,t,i,s)=>{e.addEventListener(t,i,s)},j=(e,t)=>!!t&&(!!t[e]&&1===(t.altKey?1:0)+(t.ctrlKey?1:0)+(t.shiftKey?1:0)+(t.metaKey?1:0)),D=(e,t)=>{const i=e.getAttribute("id")
return i||(e.setAttribute("id",t),t)},N=e=>e.replace(/[\\"']/g,"\\$&")
function R(e,t){var i=Object.assign({},k,t),s=i.dataAttr,n=i.labelField,o=i.valueField,r=i.disabledField,l=i.optgroupField,a=i.optgroupLabelField,d=i.optgroupValueField,c=e.tagName.toLowerCase(),p=e.getAttribute("placeholder")||e.getAttribute("data-placeholder")
if(!p&&!i.allowEmptyOption){let t=e.querySelector('option[value=""]')
t&&(p=t.textContent)}var u={placeholder:p,options:[],optgroups:[],items:[],maxItems:null}
return"select"===c?(()=>{var t,c=u.options,p={},h=1,g=e=>{var t=Object.assign({},e.dataset),i=s&&t[s]
return"string"==typeof i&&i.length&&(t=Object.assign(t,JSON.parse(i))),t},f=(e,t)=>{var s=F(e.value)
if(null!=s&&(s||i.allowEmptyOption)){if(p.hasOwnProperty(s)){if(t){var a=p[s][l]
a?Array.isArray(a)?a.push(t):p[s][l]=[a,t]:p[s][l]=t}}else{var d=g(e)
d[n]=d[n]||e.textContent,d[o]=d[o]||s,d[r]=d[r]||e.disabled,d[l]=d[l]||t,d.$option=e,p[s]=d,c.push(d)}e.selected&&u.items.push(s)}},v=e=>{var t,i;(i=g(e))[a]=i[a]||e.getAttribute("label")||"",i[d]=i[d]||h++,i[r]=i[r]||e.disabled,u.optgroups.push(i),t=i[d]
for(const i of e.children)f(i,t)}
u.maxItems=e.hasAttribute("multiple")?null:1
for(const i of e.children)"optgroup"===(t=i.tagName.toLowerCase())?v(i):"option"===t&&f(i)})():(()=>{var t,r,l=e.getAttribute(s)
if(l){u.options=JSON.parse(l)
for(const e of u.options)u.items.push(e[o])}else{var a=e.value.trim()||""
if(!i.allowEmptyOption&&!a.length)return
t=a.split(i.delimiter)
for(const e of t)(r={})[n]=e,r[o]=e,u.options.push(r)
u.items=t}})(),Object.assign({},k,u,t)}var z=0
class H extends(function(e){return e.plugins={},class extends e{constructor(...e){super(...e),this.plugins={names:[],settings:{},requested:{},loaded:{}}}static define(t,i){e.plugins[t]={name:t,fn:i}}initializePlugins(e){var t,i,s
const n=this,o=[]
if(Array.isArray(e))for(t=0,i=e.length;t<i;t++)"string"==typeof e[t]?o.push(e[t]):(n.plugins.settings[e[t].name]=e[t].options,o.push(e[t].name))
else if(e)for(s in e)e.hasOwnProperty(s)&&(n.plugins.settings[s]=e[s],o.push(s))
for(;o.length;)n.require(o.shift())}loadPlugin(t){var i=this,s=i.plugins,n=e.plugins[t]
if(!e.plugins.hasOwnProperty(t))throw new Error('Unable to find "'+t+'" plugin')
s.requested[t]=!0,s.loaded[t]=n.fn.apply(i,[i.plugins.settings[t]||{}]),s.names.push(t)}require(e){var t=this,i=t.plugins
if(!t.plugins.loaded.hasOwnProperty(e)){if(i.requested[e])throw new Error('Plugin has circular dependency ("'+e+'")')
t.loadPlugin(e)}return i.loaded[e]}}}(t)){constructor(e,t){var i
super(),this.control_input=void 0,this.wrapper=void 0,this.dropdown=void 0,this.control=void 0,this.dropdown_content=void 0,this.order=0,this.settings=void 0,this.input=void 0,this.tabIndex=void 0,this.is_select_tag=void 0,this.rtl=void 0,this.inputId=void 0,this._destroy=void 0,this.sifter=void 0,this.tab_key=!1,this.isOpen=!1,this.isDisabled=!1,this.isRequired=void 0,this.isInvalid=!1,this.isLocked=!1,this.isFocused=!1,this.isInputHidden=!1,this.isSetup=!1,this.ignoreFocus=!1,this.hasOptions=!1,this.currentResults=null,this.lastValue="",this.caretPos=0,this.loading=0,this.loadedSearches={},this.activeOption=null,this.activeItems=[],this.optgroups={},this.options={},this.userOptions={},this.items=[],this.renderCache={item:{},option:{}},z++
var s=g(e)
if(s.tomselect)throw new Error("Tom Select already initialized on this element")
s.tomselect=this,i=(window.getComputedStyle&&window.getComputedStyle(s,null)).getPropertyValue("direction"),this.settings=R(s,t),this.input=s,this.tabIndex=s.tabIndex||0,this.is_select_tag="select"===s.tagName.toLowerCase(),this.rtl=/rtl/i.test(i),this.inputId=D(s,"tomselect-"+z),this.isRequired=s.required,this.sifter=new h(this.options,{diacritics:this.settings.diacritics}),this.setupOptions(this.settings.options,this.settings.optgroups),delete this.settings.optgroups,delete this.settings.options,this.settings.mode=this.settings.mode||(1===this.settings.maxItems?"single":"multi"),"boolean"!=typeof this.settings.hideSelected&&(this.settings.hideSelected="multi"===this.settings.mode),"boolean"!=typeof this.settings.hidePlaceholder&&(this.settings.hidePlaceholder="multi"!==this.settings.mode)
var n=this.settings.createFilter
"function"!=typeof n&&("string"==typeof n&&(n=new RegExp(n)),n instanceof RegExp?this.settings.createFilter=e=>n.test(e):this.settings.createFilter=()=>!0),this.initializePlugins(this.settings.plugins),this.setupCallbacks(),this.setupTemplates(),this.setup()}setup(){var e,t,i,s,n,o,r,l,a,c=this,p=c.settings,u=c.input
const h={passive:!0},f=c.inputId+"-ts-dropdown"
if(o=c.settings.mode,r=u.getAttribute("class")||"",e=g("<div>"),m(e,p.wrapperClass,r,o),t=g('<div class="items">'),m(t,p.inputClass),e.append(t),s=c._render("dropdown"),m(s,p.dropdownClass,o),n=g(`<div role="listbox" id="${f}" tabindex="-1">`),m(n,p.dropdownContentClass),s.append(n),g(p.dropdownParent||e).appendChild(s),p.controlInput)i=g(p.controlInput)
else{i=g('<input type="text" autocomplete="off" size="1" />')
for(const e of["autocorrect","autocapitalize","autocomplete"])u.getAttribute(e)&&_(i,{[e]:u.getAttribute(e)})}p.controlInput||(i.tabIndex=u.disabled?-1:c.tabIndex,t.appendChild(i)),_(i,{role:"combobox",haspopup:"listbox","aria-expanded":"false","aria-controls":f}),a=D(i,c.inputId+"-tomselected")
let v="label[for='"+(e=>e.replace(/['"\\]/g,"\\$&"))(c.inputId)+"']",y=document.querySelector(v)
if(y){_(y,{for:a})
let e=D(y,c.inputId+"-ts-label")
_(n,{"aria-labelledby":e})}c.settings.copyClassesToDropdown&&m(s,r),e.style.width=u.style.width,c.plugins.names.length&&(l="plugin-"+c.plugins.names.join(" plugin-"),m([e,s],l)),(null===p.maxItems||p.maxItems>1)&&c.is_select_tag&&_(u,{multiple:"multiple"}),c.settings.placeholder&&_(i,{placeholder:p.placeholder}),!c.settings.splitOn&&c.settings.delimiter&&(c.settings.splitOn=new RegExp("\\s*"+d(c.settings.delimiter)+"+\\s*")),this.settings.load&&this.settings.loadThrottle&&(this.settings.load=E(this.settings.load,this.settings.loadThrottle)),c.control=t,c.control_input=i,c.wrapper=e,c.dropdown=s,c.dropdown_content=n,c.control_input.type=u.type,V(s,"click",(e=>{const t=w(e.target,"[data-selectable]")
t&&(c.onOptionSelect(e,t),q(e,!0))})),V(t,"click",(e=>{var s=w(e.target,"."+c.settings.itemClass,t)
s&&c.onItemSelect(e,s)?q(e,!0):""==i.value&&(c.onClick(),q(e,!0))})),V(i,"mousedown",(e=>{""!==i.value&&e.stopPropagation()})),V(i,"keydown",(e=>c.onKeyDown(e))),V(i,"keyup",(e=>c.onKeyUp(e))),V(i,"keypress",(e=>c.onKeyPress(e))),V(i,"resize",(()=>c.positionDropdown()),h),V(i,"blur",(()=>c.onBlur())),V(i,"focus",(e=>c.onFocus(e))),V(i,"paste",(e=>c.onPaste(e)))
const O=t=>{if(!e.contains(t.target)&&!s.contains(t.target))return c.isFocused&&c.blur(),void c.inputState()
q(t,!0)}
var b=()=>{c.isOpen&&c.positionDropdown()}
V(document,"mousedown",(e=>O(e))),V(window,"sroll",b,h),V(window,"resize",b,h),c._destroy=()=>{document.removeEventListener("mousedown",O),window.removeEventListener("sroll",b),window.removeEventListener("resize",b)},this.revertSettings={innerHTML:u.innerHTML,tabIndex:u.tabIndex},u.tabIndex=-1,_(u,{hidden:"hidden"}),u.insertAdjacentElement("afterend",c.wrapper),c.setValue(p.items),p.items=[],V(u,"invalid",(e=>{q(e),c.isInvalid||(c.isInvalid=!0,c.refreshState())})),c.updateOriginalInput(),c.refreshItems(),c.close(!1),c.inputState(),c.isSetup=!0,u.disabled&&c.disable(),c.on("change",this.onChange),m(u,"tomselected"),c.trigger("initialize"),!0===p.preload&&c.load("")}setupOptions(e=[],t=[]){for(const t of e)this.registerOption(t)
for(const e of t)this.registerOptionGroup(e)}setupTemplates(){var e=this,t=e.settings.labelField,i=e.settings.optgroupLabelField,s={optgroup:e=>{let t=document.createElement("div")
return t.className="optgroup",t.appendChild(e.options),t},optgroup_header:(e,t)=>'<div class="optgroup-header">'+t(e[i])+"</div>",option:(e,i)=>"<div>"+i(e[t])+"</div>",item:(e,i)=>"<div>"+i(e[t])+"</div>",option_create:(e,t)=>'<div class="create">Add <strong>'+t(e.input)+"</strong>&hellip;</div>",no_results:()=>'<div class="no-results">No results found</div>',loading:()=>'<div class="spinner"></div>',not_loading:()=>{},dropdown:()=>"<div></div>"}
e.settings.render=Object.assign({},s,e.settings.render)}setupCallbacks(){var e,t,i={initialize:"onInitialize",change:"onChange",item_add:"onItemAdd",item_remove:"onItemRemove",item_select:"onItemSelect",clear:"onClear",option_add:"onOptionAdd",option_remove:"onOptionRemove",option_clear:"onOptionClear",optgroup_add:"onOptionGroupAdd",optgroup_remove:"onOptionGroupRemove",optgroup_clear:"onOptionGroupClear",dropdown_open:"onDropdownOpen",dropdown_close:"onDropdownClose",type:"onType",load:"onLoad",focus:"onFocus",blur:"onBlur"}
for(e in i)(t=this.settings[i[e]])&&this.on(e,t)}onClick(){var e=this
if(e.activeItems.length>0)return e.clearActiveItems(),void e.focus()
e.isFocused&&e.isOpen?e.blur():e.focus()}onMouseDown(){}onChange(){f(this.input,"input"),f(this.input,"change")}onPaste(e){var t=this
t.isFull()||t.isInputHidden||t.isLocked?q(e):t.settings.splitOn&&setTimeout((()=>{var e=t.inputValue()
if(e.match(t.settings.splitOn)){var i=e.trim().split(t.settings.splitOn)
for(const e of i)t.createItem(e)}}),0)}onKeyPress(e){var t=this
if(!t.isLocked){var i=String.fromCharCode(e.keyCode||e.which)
return t.settings.create&&"multi"===t.settings.mode&&i===t.settings.delimiter?(t.createItem(),void q(e)):void 0}q(e)}onKeyDown(e){var t=this
if(t.isLocked)9!==e.keyCode&&q(e)
else{switch(e.keyCode){case 65:if(j(x,e))return void t.selectAll()
break
case 27:return t.isOpen&&(q(e,!0),t.close()),void t.clearActiveItems()
case 40:if(!t.isOpen&&t.hasOptions)t.open()
else if(t.activeOption){let e=t.getAdjacent(t.activeOption,1)
e&&t.setActiveOption(e)}return void q(e)
case 38:if(t.activeOption){let e=t.getAdjacent(t.activeOption,-1)
e&&t.setActiveOption(e)}return void q(e)
case 13:return void(t.isOpen&&t.activeOption?(t.onOptionSelect(e,t.activeOption),q(e)):t.settings.create&&t.createItem()&&q(e))
case 37:return void t.advanceSelection(-1,e)
case 39:return void t.advanceSelection(1,e)
case 9:return void(t.settings.selectOnTab&&(t.isOpen&&t.activeOption&&(t.tab_key=!0,t.onOptionSelect(e,t.activeOption),q(e),t.tab_key=!1),t.settings.create&&t.createItem()&&q(e)))
case 8:case 46:return void t.deleteSelection(e)}t.isInputHidden&&!j(x,e)&&q(e)}}onKeyUp(e){var t=this
if(t.isLocked)q(e)
else{var i=t.inputValue()
t.lastValue!==i&&(t.lastValue=i,t.settings.shouldLoad.call(t,i)&&t.load(i),t.refreshOptions(),t.trigger("type",i))}}onFocus(e){var t=this,i=t.isFocused
if(t.isDisabled)return t.blur(),void q(e)
t.ignoreFocus||(t.isFocused=!0,"focus"===t.settings.preload&&t.load(""),i||t.trigger("focus"),t.activeItems.length||(t.showInput(),t.refreshOptions(!!t.settings.openOnFocus)),t.refreshState())}onBlur(){var e=this
if(e.isFocused){e.isFocused=!1,e.ignoreFocus=!1
var t=()=>{e.close(),e.setActiveItem(),e.setCaret(e.items.length),e.trigger("blur")}
e.settings.create&&e.settings.createOnBlur?e.createItem(null,!1,t):t()}}onOptionSelect(e,t){var i,s=this
t&&(t.parentElement&&t.parentElement.matches("[data-disabled]")||(t.classList.contains("create")?s.createItem(null,!0,(()=>{s.settings.closeAfterSelect&&s.close()})):void 0!==(i=t.dataset.value)&&(s.lastQuery=null,s.addItem(i),s.settings.closeAfterSelect&&s.close(),!s.settings.hideSelected&&e.type&&/click/.test(e.type)&&s.setActiveOption(t))))}onItemSelect(e,t){var i=this
return!i.isLocked&&"multi"===i.settings.mode&&(q(e),i.setActiveItem(t,e),!0)}canLoad(e){return!!this.settings.load&&!this.loadedSearches.hasOwnProperty(e)}load(e){const t=this
if(!t.canLoad(e))return
m(t.wrapper,t.settings.loadingClass),t.loading++
const i=t.loadCallback.bind(t)
t.settings.load.call(t,e,i)}loadCallback(e,t){const i=this
i.loading=Math.max(i.loading-1,0),i.lastQuery=null,i.clearActiveOption(),i.setupOptions(e,t),i.refreshOptions(i.isFocused&&!i.isInputHidden),i.loading||y(i.wrapper,i.settings.loadingClass),i.trigger("load",e,t)}setTextboxValue(e=""){var t=this.control_input
t.value!==e&&(t.value=e,f(t,"update"),this.lastValue=e)}getValue(){return this.is_select_tag&&this.input.hasAttribute("multiple")?this.items:this.items.join(this.settings.delimiter)}setValue(e,t){T(this,t?[]:["change"],(()=>{this.clear(t),this.addItems(e,t)}))}setMaxItems(e){0===e&&(e=null),this.settings.maxItems=e,this.refreshState()}setActiveItem(e,t){var i,s,n,o,r,l,a=this
if("single"!==a.settings.mode){if(!e)return a.clearActiveItems(),void(a.isFocused&&a.showInput())
if("click"===(i=t&&t.type.toLowerCase())&&j("shiftKey",t)&&a.activeItems.length){for(l=a.getLastActive(),(n=Array.prototype.indexOf.call(a.control.children,l))>(o=Array.prototype.indexOf.call(a.control.children,e))&&(r=n,n=o,o=r),s=n;s<=o;s++)e=a.control.children[s],-1===a.activeItems.indexOf(e)&&a.setActiveItemClass(e)
q(t)}else"click"===i&&j(x,t)||"keydown"===i&&j("shiftKey",t)?e.classList.contains("active")?a.removeActiveItem(e):a.setActiveItemClass(e):(a.clearActiveItems(),a.setActiveItemClass(e))
a.hideInput(),a.isFocused||a.focus()}}setActiveItemClass(e){const t=this,i=t.control.querySelector(".last-active")
i&&y(i,"last-active"),m(e,"active last-active"),t.trigger("item_select",e),-1==t.activeItems.indexOf(e)&&t.activeItems.push(e)}removeActiveItem(e){var t=this.activeItems.indexOf(e)
this.activeItems.splice(t,1),y(e,"active")}clearActiveItems(){y(this.activeItems,"active"),this.activeItems=[]}setActiveOption(e){e!==this.activeOption&&(this.clearActiveOption(),e&&(this.activeOption=e,_(this.control_input,{"aria-activedescendant":e.getAttribute("id")}),_(e,{"aria-selected":"true"}),m(e,"active"),this.scrollToOption(e)))}scrollToOption(e,t){if(!e)return
const i=this.dropdown_content,s=i.clientHeight,n=i.scrollTop||0,o=e.offsetHeight,r=e.getBoundingClientRect().top-i.getBoundingClientRect().top+n
r+o>s+n?this.scroll(r-s+o,t):r<n&&this.scroll(r,t)}scroll(e,t){const i=this.dropdown_content
t&&(i.style.scrollBehavior=t),i.scrollTop=e,i.style.scrollBehavior=""}clearActiveOption(){this.activeOption&&(y(this.activeOption,"active"),_(this.activeOption,{"aria-selected":null})),this.activeOption=null,_(this.control_input,{"aria-activedescendant":null})}selectAll(){"single"!==this.settings.mode&&(this.activeItems=this.controlChildren(),this.activeItems.length&&(m(this.activeItems,"active"),this.hideInput(),this.close()),this.focus())}inputState(){var e=this
e.settings.controlInput||(e.activeItems.length>0||!e.isFocused&&this.settings.hidePlaceholder&&e.items.length>0?(e.setTextboxValue(),e.isInputHidden=!0,m(e.wrapper,"input-hidden")):(e.isInputHidden=!1,y(e.wrapper,"input-hidden")))}hideInput(){this.inputState()}showInput(){this.inputState()}inputValue(){return this.control_input.value.trim()}focus(){var e=this
e.isDisabled||(e.ignoreFocus=!0,e.control_input.focus(),setTimeout((()=>{e.ignoreFocus=!1,e.onFocus()}),0))}blur(){this.control_input.blur(),this.onBlur()}getScoreFunction(e){return this.sifter.getScoreFunction(e,this.getSearchOptions())}getSearchOptions(){var e=this.settings,t=e.sortField
return"string"==typeof e.sortField&&(t=[{field:e.sortField}]),{fields:e.searchField,conjunction:e.searchConjunction,sort:t,nesting:e.nesting}}search(e){var t,i,s,n=this,o=this.getSearchOptions()
if(n.settings.score&&"function"!=typeof(s=n.settings.score.call(n,e)))throw new Error('Tom Select "score" setting must be a function that returns a function')
if(e!==n.lastQuery?(n.lastQuery=e,i=n.sifter.search(e,Object.assign(o,{score:s})),n.currentResults=i):i=Object.assign({},n.currentResults),n.settings.hideSelected)for(t=i.items.length-1;t>=0;t--){let e=F(i.items[t].id)
e&&-1!==n.items.indexOf(e)&&i.items.splice(t,1)}return i}refreshOptions(e=!0){var t,i,s,n,o,r,l,a,d,c,p
const u={},h=[]
var g,f=this,v=f.inputValue(),m=f.search(v),O=f.activeOption,b=f.settings.shouldOpen||!1,w=f.dropdown_content
for(O&&(d=O.dataset.value,c=O.closest("[data-group]")),n=m.items.length,"number"==typeof f.settings.maxOptions&&(n=Math.min(n,f.settings.maxOptions)),n>0&&(b=!0),t=0;t<n;t++){let e=f.options[m.items[t].id],n=L(e[f.settings.valueField]),l=f.getOption(n)
for(l||(l=f._render("option",e)),f.settings.hideSelected||l.classList.toggle("selected",f.items.includes(n)),o=e[f.settings.optgroupField]||"",i=0,s=(r=Array.isArray(o)?o:[o])&&r.length;i<s;i++)o=r[i],f.optgroups.hasOwnProperty(o)||(o=""),u.hasOwnProperty(o)||(u[o]=document.createDocumentFragment(),h.push(o)),i>0&&(l=l.cloneNode(!0),_(l,{id:e.$id+"-clone-"+i,"aria-selected":null}),l.classList.add("ts-cloned"),y(l,"active")),d==n&&c&&c.dataset.group===o&&(O=l),u[o].appendChild(l)}for(o of(this.settings.lockOptgroupOrder&&h.sort(((e,t)=>(f.optgroups[e]&&f.optgroups[e].$order||0)-(f.optgroups[t]&&f.optgroups[t].$order||0))),l=document.createDocumentFragment(),h))if(f.optgroups.hasOwnProperty(o)&&u[o].children.length){let e=document.createDocumentFragment(),t=f.render("optgroup_header",f.optgroups[o])
t&&e.append(t),e.append(u[o])
let i=f.render("optgroup",{group:f.optgroups[o],options:e})
l.append(i)}else l.append(u[o])
if(w.innerHTML="",w.append(l),f.settings.highlight&&(g=w.querySelectorAll("span.highlight"),Array.prototype.forEach.call(g,(function(e){var t=e.parentNode
t.replaceChild(e.firstChild,e),t.normalize()})),m.query.length&&m.tokens.length))for(const e of m.tokens)A(w,e.regex)
var I=e=>{let t=f.render(e,{input:v})
return t&&(b=!0,w.insertBefore(t,w.firstChild)),t}
if(f.settings.shouldLoad.call(f,v)?f.loading?I("loading"):0===m.items.length&&I("no_results"):I("not_loading"),(a=f.canCreate(v))&&(p=I("option_create")),f.hasOptions=m.items.length>0||a,b){if(m.items.length>0){if(!w.contains(O)&&"single"===f.settings.mode&&f.items.length&&(O=f.getOption(f.items[0])),!w.contains(O)){let e=0
p&&!f.settings.addPrecedence&&(e=1),O=f.selectable()[e]}}else O=p
e&&!f.isOpen&&(f.open(),f.scrollToOption(O,"auto")),f.setActiveOption(O)}else f.clearActiveOption(),e&&f.isOpen&&f.close(!1)}selectable(){return this.dropdown_content.querySelectorAll("[data-selectable]")}addOption(e){var t,i=this
if(Array.isArray(e))for(const t of e)i.addOption(t)
else(t=i.registerOption(e))&&(i.userOptions[t]=!0,i.lastQuery=null,i.trigger("option_add",t,e))}registerOption(e){var t=F(e[this.settings.valueField])
return null!==t&&!this.options.hasOwnProperty(t)&&(e.$order=e.$order||++this.order,e.$id=this.inputId+"-opt-"+e.$order,this.options[t]=e,t)}registerOptionGroup(e){var t=F(e[this.settings.optgroupValueField])
return null!==t&&(e.$order=e.$order||++this.order,this.optgroups[t]=e,t)}addOptionGroup(e,t){var i
t[this.settings.optgroupValueField]=e,(i=this.registerOptionGroup(t))&&this.trigger("optgroup_add",i,t)}removeOptionGroup(e){this.optgroups.hasOwnProperty(e)&&(delete this.optgroups[e],this.clearCache(),this.trigger("optgroup_remove",e))}clearOptionGroups(){this.optgroups={},this.clearCache(),this.trigger("optgroup_clear")}updateOption(e,t){const i=this
var s,n
const o=F(e)
if(null===o)return
const r=F(t[i.settings.valueField]),l=i.getOption(o),a=i.getItem(o)
if(i.options.hasOwnProperty(o)){if("string"!=typeof r)throw new Error("Value must be set in option data")
if(t.$order=t.$order||i.options[o].$order,delete i.options[o],i.uncacheValue(r),i.uncacheValue(o,!1),i.options[r]=t,l){if(i.dropdown_content.contains(l)){const e=i._render("option",t)
S(l,e),i.activeOption===l&&i.setActiveOption(e)}l.remove()}a&&(-1!==(n=i.items.indexOf(o))&&i.items.splice(n,1,r),s=i._render("item",t),a.classList.contains("active")&&m(s,"active"),S(a,s)),i.lastQuery=null}}removeOption(e,t){const i=this
e=L(e),i.uncacheValue(e),delete i.userOptions[e],delete i.options[e],i.lastQuery=null,i.trigger("option_remove",e),i.removeItem(e,t)}clearOptions(){this.loadedSearches={},this.userOptions={},this.clearCache()
var e={}
for(let t in this.options)this.options.hasOwnProperty(t)&&this.items.indexOf(t)>=0&&(e[t]=this.options[t])
this.options=this.sifter.items=e,this.lastQuery=null,this.trigger("option_clear")}uncacheValue(e,t=!0){const i=this,s=i.renderCache.item,n=i.renderCache.option
if(s&&delete s[e],n&&delete n[e],t){const t=i.getOption(e)
t&&t.remove()}}getOption(e){var t=F(e)
return this.rendered("option",t)}getAdjacent(e,t,i="option"){var s
if(!e)return null
s="item"==i?this.controlChildren():this.dropdown_content.querySelectorAll("[data-selectable]")
for(let i=0;i<s.length;i++)if(s[i]==e)return t>0?s[i+1]:s[i-1]
return null}getItem(e){if("object"==typeof e)return e
var t=F(e)
return t?this.control.querySelector(`[data-value="${N(t)}"]`):null}addItems(e,t){var i=this,s=Array.isArray(e)?e:[e]
for(let e=0,n=(s=s.filter((e=>-1===i.items.indexOf(e)))).length;e<n;e++)i.isPending=e<n-1,i.addItem(s[e],t)}addItem(e,t){T(this,t?[]:["change"],(()=>{var i,s
const n=this,o=n.settings.mode,r=F(e)
if((!r||-1===n.items.indexOf(r)||("single"===o&&n.close(),"single"!==o&&n.settings.duplicates))&&null!==r&&n.options.hasOwnProperty(r)&&("single"===o&&n.clear(t),"multi"!==o||!n.isFull())){if(i=n._render("item",n.options[r]),n.control.contains(i)&&(i=i.cloneNode(!0)),s=n.isFull(),n.items.splice(n.caretPos,0,r),n.insertAtCaret(i),n.isSetup){let e=n.selectable()
if(!n.isPending&&n.settings.hideSelected){let e=n.getOption(r),t=n.getAdjacent(e,1)
t&&n.setActiveOption(t)}n.isPending||n.refreshOptions(n.isFocused&&"single"!==o),!e.length||n.isFull()?n.close():n.isPending||n.positionDropdown(),n.trigger("item_add",r,i),n.isPending||n.updateOriginalInput({silent:t})}(!n.isPending||!s&&n.isFull())&&n.refreshState()}}))}removeItem(e=null,t){const i=this
if(!(e=i.getItem(e)))return
var s,n
const o=e.dataset.value
s=C(e),e.remove(),e.classList.contains("active")&&(n=i.activeItems.indexOf(e),i.activeItems.splice(n,1),y(e,"active")),i.items.splice(s,1),i.lastQuery=null,!i.settings.persist&&i.userOptions.hasOwnProperty(o)&&i.removeOption(o,t),s<i.caretPos&&i.setCaret(i.caretPos-1),i.updateOriginalInput({silent:t}),i.refreshState(),i.positionDropdown(),i.trigger("item_remove",o,e)}createItem(e=null,t=!0,i=(()=>{})){var s,n=this,o=n.caretPos
if(e=e||n.inputValue(),!n.canCreate(e))return i(),!1
n.lock()
var r=!1,l=e=>{if(n.unlock(),!e||"object"!=typeof e)return i()
var s=F(e[n.settings.valueField])
if("string"!=typeof s)return i()
n.setTextboxValue(),n.addOption(e),n.setCaret(o),n.addItem(s),n.refreshOptions(t&&"single"!==n.settings.mode),i(e),r=!0}
return s="function"==typeof n.settings.create?n.settings.create.call(this,e,l):{[n.settings.labelField]:e,[n.settings.valueField]:e},r||l(s),!0}refreshItems(){var e=this
e.lastQuery=null,e.isSetup&&e.addItems(e.items),e.updateOriginalInput(),e.refreshState()}refreshState(){var e=this
e.refreshValidityState()
var t=e.isFull(),i=e.isLocked
e.wrapper.classList.toggle("rtl",e.rtl)
var s,n=e.control.classList
n.toggle("focus",e.isFocused),n.toggle("disabled",e.isDisabled),n.toggle("required",e.isRequired),n.toggle("invalid",e.isInvalid),n.toggle("locked",i),n.toggle("full",t),n.toggle("not-full",!t),n.toggle("input-active",e.isFocused&&!e.isInputHidden),n.toggle("dropdown-active",e.isOpen),n.toggle("has-options",(s=e.options,0===Object.keys(s).length)),n.toggle("has-items",e.items.length>0)}refreshValidityState(){var e=this
if(e.input.checkValidity){this.isRequired&&(e.input.required=!0)
var t=!e.input.checkValidity()
e.isInvalid=t,e.control_input.required=t,this.isRequired&&(e.input.required=!t)}}isFull(){return null!==this.settings.maxItems&&this.items.length>=this.settings.maxItems}updateOriginalInput(e={}){const t=this
var i,s,n,o
if(t.is_select_tag){const e=document.createDocumentFragment()
function r(t,i,s){return t||(t=g('<option value="'+P(i)+'">'+P(s)+"</option>")),t.selected=!0,_(t,{selected:"true"}),e.append(t),t}if(t.input.querySelectorAll("option[selected]").forEach((e=>{_(e,{selected:null}),e.selected=!1})),0!=t.items.length||"single"!=t.settings.mode||t.isRequired)for(i=0;i<t.items.length;i++)if(s=t.items[i],o=(n=t.options[s])[t.settings.labelField]||"",e.contains(n.$option)){r(t.input.querySelector(`option[value="${N(s)}"]`),s,o)}else n.$option=r(n.$option,s,o)
else r(t.input.querySelector('option[value=""]'),"","")
t.input.prepend(e)}else t.input.value=t.getValue()
t.isSetup&&(e.silent||t.trigger("change",t.getValue()))}open(){var e=this
e.isLocked||e.isOpen||"multi"===e.settings.mode&&e.isFull()||(e.isOpen=!0,_(e.control_input,{"aria-expanded":"true"}),e.refreshState(),v(e.dropdown,{visibility:"hidden",display:"block"}),e.positionDropdown(),v(e.dropdown,{visibility:"visible",display:"block"}),e.focus(),e.trigger("dropdown_open",e.dropdown))}close(e=!0){var t=this,i=t.isOpen
e&&(t.setTextboxValue(),"single"===t.settings.mode&&t.items.length&&(t.hideInput(),t.tab_key||t.blur())),t.isOpen=!1,_(t.control_input,{"aria-expanded":"false"}),v(t.dropdown,{display:"none"}),t.settings.hideSelected&&t.clearActiveOption(),t.refreshState(),i&&t.trigger("dropdown_close",t.dropdown)}positionDropdown(){if("body"===this.settings.dropdownParent){var e=this.control,t=e.getBoundingClientRect(),i=e.offsetHeight+t.top+window.scrollY,s=t.left+window.scrollX
v(this.dropdown,{width:t.width+"px",top:i+"px",left:s+"px"})}}clear(e){var t=this
if(t.items.length){var i=t.controlChildren()
for(const e of i)e.remove()
t.items=[],t.lastQuery=null,t.setCaret(0),t.clearActiveItems(),t.updateOriginalInput({silent:e}),t.refreshState(),t.showInput(),t.trigger("clear")}}insertAtCaret(e){var t=this,i=Math.min(t.caretPos,t.items.length),s=t.control
0===i?s.insertBefore(e,s.firstChild):s.insertBefore(e,s.children[i]),t.setCaret(i+1)}deleteSelection(e){var t,i,s,n,o,r=this
t=e&&8===e.keyCode?-1:1,i={start:(o=r.control_input).selectionStart||0,length:(o.selectionEnd||0)-(o.selectionStart||0)}
const l=[]
if(r.activeItems.length){n=I(r.activeItems,t),s=C(n),t>0&&s++
for(const e of r.activeItems)l.push(e)}else if((r.isFocused||"single"===r.settings.mode)&&r.items.length){const e=r.controlChildren()
t<0&&0===i.start&&0===i.length?l.push(e[r.caretPos-1]):t>0&&i.start===r.inputValue().length&&l.push(e[r.caretPos])}const a=l.map((e=>e.dataset.value))
if(!a.length||"function"==typeof r.settings.onDelete&&!1===r.settings.onDelete.call(r,a,e))return!1
for(q(e,!0),void 0!==s&&r.setCaret(s);l.length;)r.removeItem(l.pop())
return r.showInput(),r.positionDropdown(),r.refreshOptions(!1),!0}advanceSelection(e,t){var i,s,n,o=this
o.rtl&&(e*=-1),o.inputValue().length||(j(x,t)||j("shiftKey",t)?(n=(s=o.getLastActive(e))?s.classList.contains("active")?o.getAdjacent(s,e,"item"):s:e>0?o.control_input.nextElementSibling:o.control_input.previousElementSibling)&&(n.classList.contains("active")&&o.removeActiveItem(s),o.setActiveItemClass(n)):o.isFocused&&!o.activeItems.length?o.setCaret(o.caretPos+e):(s=o.getLastActive(e))&&(i=C(s),o.setCaret(e>0?i+1:i),o.setActiveItem()))}getLastActive(e){let t=this.control.querySelector(".last-active")
if(t)return t
var i=this.control.querySelectorAll(".active")
return i?I(i,e):void 0}setCaret(e){var t=this
"single"===t.settings.mode||t.settings.controlInput?e=t.items.length:(e=Math.max(0,Math.min(t.items.length,e)))==t.caretPos||t.isPending||t.controlChildren().forEach(((i,s)=>{s<e?t.control_input.insertAdjacentElement("beforebegin",i):t.control.appendChild(i)})),t.caretPos=e}controlChildren(){return Array.from(this.control.getElementsByClassName(this.settings.itemClass))}lock(){this.close(),this.isLocked=!0,this.refreshState()}unlock(){this.isLocked=!1,this.refreshState()}disable(){var e=this
e.input.disabled=!0,e.control_input.disabled=!0,e.control_input.tabIndex=-1,e.isDisabled=!0,e.lock()}enable(){var e=this
e.input.disabled=!1,e.control_input.disabled=!1,e.control_input.tabIndex=e.tabIndex,e.isDisabled=!1,e.unlock()}destroy(){var e=this,t=e.revertSettings
e.trigger("destroy"),e.off(),e.wrapper.remove(),e.dropdown.remove(),e.input.innerHTML=t.innerHTML,e.input.tabIndex=t.tabIndex,y(e.input,"tomselected"),_(e.input,{hidden:null}),e.input.required=this.isRequired,e._destroy(),delete e.input.tomselect}render(e,t){return"function"!=typeof this.settings.render[e]?null:this._render(e,t)}_render(e,t){var i,s,n
const o=this
return("option"===e||"item"===e)&&(i=L(t[o.settings.valueField]),n=o.rendered(e,i))?n:(n=o.settings.render[e].call(this,t,P))?(n=g(n),"option"===e||"option_create"===e?t[o.settings.disabledField]?_(n,{"aria-disabled":"true"}):_(n,{"data-selectable":""}):"optgroup"===e&&(s=t.group[o.settings.optgroupValueField],_(n,{"data-group":s}),t.group[o.settings.disabledField]&&_(n,{"data-disabled":""})),"option"!==e&&"item"!==e||(_(n,{"data-value":i}),"item"===e?m(n,o.settings.itemClass):(m(n,o.settings.optionClass),_(n,{role:"option",id:t.$id})),o.renderCache[e][i]=n),n):n}rendered(e,t){return null!==t&&this.renderCache[e].hasOwnProperty(t)?this.renderCache[e][t]:null}clearCache(e){var t=this
for(let e in t.options){const i=t.getOption(e)
i&&i.remove()}void 0===e?t.renderCache={item:{},option:{}}:t.renderCache[e]={}}canCreate(e){return this.settings.create&&e.length>0&&this.settings.createFilter.call(this,e)}hook(e,t,i){var s=this,n=s[t]
s[t]=function(){var t,o
return"after"===e&&(t=n.apply(s,arguments)),o=i.apply(s,arguments),"instead"===e?o:("before"===e&&(t=n.apply(s,arguments)),t)}}}return H.define("change_listener",(function(){const e=this,t=t=>t.join(e.settings.delimiter)
V(e.input,"change",(()=>{var i=R(e.input,{delimiter:e.settings.delimiter})
t(e.items)!=t(i.items)&&(e.setupOptions(i.options,i.optgroups),e.setValue(i.items))}))})),H.define("checkbox_options",(function(){var e=this,t=e.onOptionSelect
e.settings.hideSelected=!1
var i=function(e){setTimeout((()=>{var t=e.querySelector("input")
e.classList.contains("selected")?t.checked=!0:t.checked=!1}),1)}
e.hook("after","setupTemplates",(()=>{var t=e.settings.render.option
e.settings.render.option=function(i){var s=g(t.apply(e,arguments)),n=document.createElement("input")
n.addEventListener("click",(function(e){q(e)})),n.type="checkbox"
const o=F(i[e.settings.valueField])
return o&&e.items.indexOf(o)>-1&&(n.checked=!0),s.prepend(n),s}})),e.on("item_remove",(t=>{var s=e.getOption(t)
s&&(s.classList.remove("selected"),i(s))})),e.hook("instead","onOptionSelect",(function(s,n){if(n.classList.contains("selected"))return n.classList.remove("selected"),e.removeItem(n.dataset.value),e.refreshOptions(),void q(s,!0)
t.apply(e,arguments),i(n)}))})),H.define("clear_button",(function(e){var t=this
e=Object.assign({className:"clear-button",title:"Clear All",html:e=>`<div class="${e.className}" title="${e.title}">&times;</div>`},e),t.hook("after","setup",(()=>{var i=g(e.html(e))
i.addEventListener("click",(e=>{t.clear(),e.preventDefault(),e.stopPropagation()})),t.control.appendChild(i)}))})),H.define("drag_drop",(function(){var e=this
if(!$.fn.sortable)throw new Error('The "drag_drop" plugin requires jQuery UI "sortable".')
if("multi"===e.settings.mode){var t=e.lock,i=e.unlock
e.hook("instead","lock",(function(){var i=$(e.control).data("sortable")
return i&&i.disable(),t.apply(e,arguments)})),e.hook("instead","unlock",(function(){var t=$(e.control).data("sortable")
return t&&t.enable(),i.apply(e,arguments)})),e.hook("after","setup",(()=>{var t=$(e.control).sortable({items:"[data-value]",forcePlaceholderSize:!0,disabled:e.isLocked,start:(e,i)=>{i.placeholder.css("width",i.helper.css("width")),t.css({overflow:"visible"})},stop:()=>{t.css({overflow:"hidden"})
var i=[]
t.children("[data-value]").each((function(){this.dataset.value&&i.push(this.dataset.value)})),e.setValue(i)}})}))}})),H.define("dropdown_header",(function(e){var t=this
e=Object.assign({title:"Untitled",headerClass:"dropdown-header",titleRowClass:"dropdown-header-title",labelClass:"dropdown-header-label",closeClass:"dropdown-header-close",html:e=>'<div class="'+e.headerClass+'"><div class="'+e.titleRowClass+'"><span class="'+e.labelClass+'">'+e.title+'</span><a class="'+e.closeClass+'">&times;</a></div></div>'},e),t.hook("after","setup",(()=>{var i=g(e.html(e)),s=i.querySelector("."+e.closeClass)
s&&s.addEventListener("click",(e=>{q(e,!0),t.close()})),t.dropdown.insertBefore(i,t.dropdown.firstChild)}))})),H.define("dropdown_input",(function(){var e=this,t=e.settings.controlInput||'<input type="text" autocomplete="off" class="dropdown-input" />'
t=g(t),e.settings.placeholder&&_(t,{placeholder:e.settings.placeholder}),e.settings.controlInput=t,e.settings.shouldOpen=!0,e.hook("after","setup",(()=>{_(e.wrapper,{tabindex:e.input.disabled?"-1":""+e.tabIndex}),V(e.wrapper,"keypress",(t=>{if(!e.control.contains(t.target)&&!e.dropdown.contains(t.target))switch(t.keyCode){case 13:return void e.onClick()}}))
let i=g('<div class="dropdown-input-wrap">')
i.appendChild(t),e.dropdown.insertBefore(i,e.dropdown.firstChild)}))})),H.define("input_autogrow",(function(){var e=this
e.hook("after","setup",(()=>{var t=document.createElement("span"),i=e.control_input
t.style.cssText="position:absolute; top:-99999px; left:-99999px; width:auto; padding:0; white-space:pre; ",e.wrapper.appendChild(t)
for(const e of["letterSpacing","fontSize","fontFamily","fontWeight","textTransform"])t.style[e]=i.style[e]
var s=()=>{e.items.length>0?(t.textContent=i.value,i.style.width=t.clientWidth+"px"):i.style.width=""}
s(),e.on("update item_add item_remove",s),V(i,"input",s),V(i,"keyup",s),V(i,"blur",s),V(i,"update",s)}))})),H.define("no_backspace_delete",(function(){var e=this,t=e.deleteSelection
this.hook("instead","deleteSelection",(function(){return!!e.activeItems.length&&t.apply(e,arguments)}))})),H.define("no_active_items",(function(){this.hook("instead","setActiveItem",(()=>{})),this.hook("instead","selectAll",(()=>{}))})),H.define("optgroup_columns",(function(){var e=this,t=e.onKeyDown
e.hook("instead","onKeyDown",(function(i){var s,n,o,r
if(!e.isOpen||37!==i.keyCode&&39!==i.keyCode)return t.apply(e,arguments)
r=w(e.activeOption,"[data-group]"),s=C(e.activeOption,"[data-selectable]"),(r=37===i.keyCode?r.previousSibling:r.nextSibling)&&(n=(o=r.querySelectorAll("[data-selectable]"))[Math.min(o.length-1,s)])&&e.setActiveOption(n)}))})),H.define("remove_button",(function(e){e=Object.assign({label:"&times;",title:"Remove",className:"remove",append:!0},e)
var t=this
if(e.append){var i='<a href="javascript:void(0)" class="'+e.className+'" tabindex="-1" title="'+P(e.title)+'">'+e.label+"</a>"
t.hook("after","setupTemplates",(()=>{var e=t.settings.render.item
t.settings.render.item=function(){var s=g(e.apply(t,arguments)),n=g(i)
return s.appendChild(n),V(n,"mousedown",(e=>{q(e,!0)})),V(n,"click",(e=>{if(q(e,!0),!t.isLocked){var i=s.dataset.value
t.removeItem(i),t.refreshOptions(!1)}})),s}}))}})),H.define("restore_on_backspace",(function(e){var t=this
e.text=e.text||function(e){return e[t.settings.labelField]},t.on("item_remove",(function(i){if(""===t.control_input.value.trim()){var s=t.options[i]
s&&t.setTextboxValue(e.text.call(t,s))}}))})),H.define("virtual_scroll",(function(){const e=this,t=e.canLoad,i=e.clearActiveOption,s=e.loadCallback
var n,o={},r=!1
if(!e.settings.firstUrl)throw"virtual_scroll plugin requires a firstUrl() method"
function l(t){return!("number"==typeof e.settings.maxOptions&&n.children.length>=e.settings.maxOptions)&&!(!(t in o)||!o[t])}e.settings.sortField=[{field:"$order"},{field:"$score"}],e.setNextUrl=function(e,t){o[e]=t},e.getUrl=function(t){if(t in o){const e=o[t]
return o[t]=!1,e}return o={},e.settings.firstUrl(t)},e.hook("instead","clearActiveOption",(()=>{if(!r)return i.call(e)})),e.hook("instead","canLoad",(i=>i in o?l(i):t.call(e,i))),e.hook("instead","loadCallback",((t,i,n)=>{r||e.clearOptions(),s.call(e,t,i,n),r=!1})),e.hook("after","refreshOptions",(()=>{const t=e.lastValue
var i
l(t)?(i=e.render("loading_more",{query:t}))&&i.setAttribute("data-selectable",""):t in o&&!n.querySelector(".no-results")&&(i=e.render("no_more_results",{query:t})),i&&(m(i,e.settings.optionClass),n.append(i))})),e.hook("after","setup",(()=>{n=e.dropdown_content,e.settings.render=Object.assign({},{loading_more:function(){return'<div class="loading-more-results">Loading more results ... </div>'},no_more_results:function(){return'<div class="no-more-results">No more results</div>'}},e.settings.render),n.addEventListener("scroll",(function(){n.clientHeight/(n.scrollHeight-n.scrollTop)<.95||l(e.lastValue)&&(r||(r=!0,e.load.call(e,e.lastValue)))}))}))})),H}))
var tomSelect=function(e,t){return new TomSelect(e,t)}
//# sourceMappingURL=tom-select.complete.min.js.map
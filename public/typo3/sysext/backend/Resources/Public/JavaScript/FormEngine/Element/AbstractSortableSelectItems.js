/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
define(["require","exports","TYPO3/CMS/Backend/FormEngine","TYPO3/CMS/Backend/FormEngineValidation"],(function(e,t,o,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.AbstractSortableSelectItems=void 0;class r{constructor(){this.registerSortableEventHandler=e=>{const t=e.closest(".form-wizards-wrap").querySelector(".form-wizards-items-aside");null!==t&&t.addEventListener("click",t=>{let i;if(null===(i=t.target.closest(".t3js-btn-option")))return void(t.target.matches(".t3js-btn-option")&&(i=t.target));t.preventDefault();const l=i.dataset.fieldname,s=o.getFieldElement(l).get(0),a=o.getFieldElement(l,"_avail").get(0);i.classList.contains("t3js-btn-moveoption-top")?r.moveOptionToTop(e):i.classList.contains("t3js-btn-moveoption-up")?r.moveOptionUp(e):i.classList.contains("t3js-btn-moveoption-down")?r.moveOptionDown(e):i.classList.contains("t3js-btn-moveoption-bottom")?r.moveOptionToBottom(e):i.classList.contains("t3js-btn-removeoption")&&r.removeOption(e,a),o.updateHiddenFieldValueFromSelect(e,s),o.legacyFieldChangedCb(),n.markFieldAsChanged(a),n.validateField(a)})}}static moveOptionToTop(e){Array.from(e.querySelectorAll(":checked")).reverse().forEach(t=>{e.insertBefore(t,e.firstElementChild)})}static moveOptionToBottom(e){e.querySelectorAll(":checked").forEach(t=>{e.insertBefore(t,null)})}static moveOptionUp(e){const t=Array.from(e.children),o=Array.from(e.querySelectorAll(":checked"));for(let n of o){if(0===t.indexOf(n)&&null===n.previousElementSibling)break;e.insertBefore(n,n.previousElementSibling)}}static moveOptionDown(e){const t=Array.from(e.children).reverse(),o=Array.from(e.querySelectorAll(":checked")).reverse();for(let n of o){if(0===t.indexOf(n)&&null===n.nextElementSibling)break;e.insertBefore(n,n.nextElementSibling.nextElementSibling)}}static removeOption(e,t){e.querySelectorAll(":checked").forEach(n=>{const r=t.querySelector('option[value="'+n.value+'"]');null!==r&&(r.classList.remove("hidden"),r.disabled=!1,o.enableOptGroup(r)),e.removeChild(n)})}}t.AbstractSortableSelectItems=r}));
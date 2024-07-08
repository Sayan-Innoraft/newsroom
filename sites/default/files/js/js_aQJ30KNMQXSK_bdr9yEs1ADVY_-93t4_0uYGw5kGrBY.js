/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
(function($,Drupal,once){'use strict';Drupal.webform=Drupal.webform||{};Drupal.webform.select2=Drupal.webform.select2||{};Drupal.webform.select2.options=Drupal.webform.select2.options||{};Drupal.webform.select2.options.width=Drupal.webform.select2.options.width||'100%';Drupal.webform.select2.options.widthInline=Drupal.webform.select2.options.widthInline||'50%';Drupal.behaviors.webformSelect2={attach:function(context){if(!$.fn.select2)return;$(once('webform-select2','select.js-webform-select2, .js-webform-select2 select',context)).each(function(){var $select=$(this);var options={};if($select.parents('.webform-element--title-inline').length)options.width=Drupal.webform.select2.options.widthInline;options=$.extend(options,Drupal.webform.select2.options);if($select.data('placeholder')){options.placeholder=$select.data('placeholder');if(!$select.prop('multiple'))options.allowClear=true;}if($select.data('limit'))options.maximumSelectionLength=$select.data('limit');if(window.navigator.userAgent.indexOf('Trident/')!==-1&&$select.attr('multiple')&&$select.attr('required'))$select.removeAttr('required');$select.select2(options);});}};$(function(){if($.fn.select2)$(document).on('state:visible state:visible-slide',function(e){$('select.select2-hidden-accessible').select2('close');});if($.ui&&$.ui.dialog&&$.ui.dialog.prototype._allowInteraction){var ui_dialog_interaction=$.ui.dialog.prototype._allowInteraction;$.ui.dialog.prototype._allowInteraction=function(e){if($(e.target).closest('.select2-dropdown').length)return true;return ui_dialog_interaction.apply(this,arguments);};}});})(jQuery,Drupal,once);;
(function($,Drupal,debounce,once){'use strict';Drupal.behaviors.webformFilterAutocomplete={attach:function(context){$(once('webform-autocomplete','.webform-filter-form input.form-autocomplete',context)).each(function(){if(/\(([^)]+)\)$/.test(this.value))this.value=this.defaultValue;$(this).bind('autocompleteselect',function(event,ui){if(ui.item){$(this).val(ui.item.value);$(this.form).trigger('submit');}});});}};Drupal.behaviors.webformTableRowHref={attach:function(context){$(once('webform-results-table','.webform-results-table',context)).on('click',function(event){if(event.target.tagName==='A'||event.target.tagName==='BUTTON'||event.target.tagName==='INPUT')return true;if($(event.target).parents('a[href]').length||$(event.target).parents('.dropbutton-widget').length)return true;var $input=$(event.target).closest('td').find('input');if($input.length){if($input.attr('type')==='checkbox')$input.click();return true;}var $tr=$(event.target).parents('tr[data-webform-href]');if(!$tr.length)return true;window.location=$tr.attr('data-webform-href');return false;});}};})(jQuery,Drupal,Drupal.debounce,once);;
(($,Drupal,debounce,displace)=>{Drupal.offCanvas={position:null,minimumHeight:30,minDisplaceWidth:768,$mainCanvasWrapper:$('[data-off-canvas-main-canvas]'),isOffCanvas($element){return $element[0].id==='drupal-off-canvas';},removeOffCanvasEvents($element){$element.off('.off-canvas');$(document).off('.off-canvas');$(window).off('.off-canvas');},beforeCreate({settings,$element}){Drupal.offCanvas.removeOffCanvasEvents($element);$('body').addClass('js-off-canvas-dialog-open');settings.position={my:'left top',at:`${Drupal.offCanvas.getEdge()} top`,of:window};const position=settings.drupalOffCanvasPosition;const height=position==='side'?$(window).height():settings.height;const width=position==='side'?settings.width:'100%';settings.height=height;settings.width=width;},beforeClose({$element}){$('body').removeClass('js-off-canvas-dialog-open');Drupal.offCanvas.removeOffCanvasEvents($element);Drupal.offCanvas.resetPadding();},afterCreate({$element,settings}){const eventData={settings,$element,offCanvasDialog:this};$element.on('dialogContentResize.off-canvas',eventData,Drupal.offCanvas.handleDialogResize).on('dialogContentResize.off-canvas',eventData,Drupal.offCanvas.bodyPadding);Drupal.offCanvas.getContainer($element).attr(`data-offset-${Drupal.offCanvas.getEdge()}`,'');$(window).on('resize.off-canvas',eventData,debounce(Drupal.offCanvas.resetSize,100,true)).trigger('resize.off-canvas');},render({settings}){$('.ui-dialog-off-canvas, .ui-dialog-off-canvas .ui-dialog-titlebar').toggleClass('ui-dialog-empty-title',!settings.title);$('.ui-dialog-off-canvas').attr('id','drupal-off-canvas-wrapper');},handleDialogResize(event){const $element=event.data.$element;const $container=Drupal.offCanvas.getContainer($element);const $offsets=$container.find('> :not(#drupal-off-canvas, .ui-resizable-handle)');let offset=0;$element[0].style.height='auto';const modalHeight=$container.height();$offsets.each((i,e)=>{offset+=$(e).outerHeight();});const scrollOffset=$element.outerHeight()-$element.height();$element.height(modalHeight-offset-scrollOffset);},resetSize(event){const $element=event.data.$element;const container=Drupal.offCanvas.getContainer($element);const position=event.data.settings.drupalOffCanvasPosition;if(Drupal.offCanvas.position&&Drupal.offCanvas.position!==position)container.removeAttr(`data-offset-${Drupal.offCanvas.position}`);if(position==='top')$element[0].style.minHeight=`${Drupal.offCanvas.minimumHeight}px`;displace();const offsets=displace.offsets;const topPosition=position==='side'&&offsets.top!==0?`+${offsets.top}`:'';const adjustedOptions={position:{my:`${Drupal.offCanvas.getEdge()} top`,at:`${Drupal.offCanvas.getEdge()} top${topPosition}`,of:window}};const height=position==='side'?`${$(window).height()-(offsets.top+offsets.bottom)}px`:event.data.settings.height;Object.assign(container[0].style,{position:'fixed',height:Number.isNaN(parseFloat(height))?height:`${parseFloat(height)}px`});$element.dialog('option',adjustedOptions);$element?.get(0)?.dispatchEvent(new CustomEvent('dialogContentResize',{bubbles:true}));Drupal.offCanvas.position=position;},bodyPadding(event){const position=event.data.settings.drupalOffCanvasPosition;if(position==='side'&&$('body').outerWidth()<Drupal.offCanvas.minDisplaceWidth)return;Drupal.offCanvas.resetPadding();const $element=event.data.$element;const $container=Drupal.offCanvas.getContainer($element);const mainCanvasWrapper=Drupal.offCanvas.$mainCanvasWrapper[0];const width=$container.outerWidth();const mainCanvasPadding=window.getComputedStyle(mainCanvasWrapper)[`padding-${Drupal.offCanvas.getEdge()}`];if(position==='side'&&width!==mainCanvasPadding){mainCanvasWrapper.style[`padding-${Drupal.offCanvas.getEdge()}`]=`${width}px`;$container.attr(`data-offset-${Drupal.offCanvas.getEdge()}`,width);displace();}const height=$container.outerHeight();if(position==='top'){mainCanvasWrapper.style.paddingTop=`${height}px`;$container.attr('data-offset-top',height);displace();}},getContainer($element){return $element.dialog('widget');},getEdge(){return document.documentElement.dir==='rtl'?'left':'right';},resetPadding(){Drupal.offCanvas.$mainCanvasWrapper[0].style[`padding-${Drupal.offCanvas.getEdge()}`]=0;Drupal.offCanvas.$mainCanvasWrapper[0].style.paddingTop=0;displace();}};Drupal.behaviors.offCanvasEvents={attach:()=>{if(!once('off-canvas','html').length)return;window.addEventListener('dialog:beforecreate',(e)=>{const $element=$(e.target);if(Drupal.offCanvas.isOffCanvas($element))Drupal.offCanvas.beforeCreate({$element,settings:e.settings});});window.addEventListener('dialog:aftercreate',(e)=>{const $element=$(e.target);if(Drupal.offCanvas.isOffCanvas($element)){Drupal.offCanvas.render({$element,dialog:e.dialog,settings:e.settings});Drupal.offCanvas.afterCreate({$element,settings:e.settings});}});window.addEventListener('dialog:beforeclose',(e)=>{const $element=$(e.target);if(Drupal.offCanvas.isOffCanvas($element))Drupal.offCanvas.beforeClose({$element});});}};})(jQuery,Drupal,Drupal.debounce,Drupal.displace);;
(function($,Drupal,once){'use strict';Drupal.behaviors.webformOffCanvasEvents={attach:function(){if(once('webform-off-canvas','html').length)$(window).on({'dialog:aftercreate':function(event,dialog,$element,settings){if(Drupal.offCanvas.isOffCanvas($element))$(window).trigger('resize.tabs');},'dialog:afterclose':function(event,dialog,$element,settings){if(Drupal.offCanvas.isOffCanvas($element))$(window).trigger('resize.tabs');}});}};$(document.body).append('<style id="ckeditor-off-canvas-reset"></style>');})(jQuery,Drupal,once);;
(($,Drupal)=>{function DetailsSummarizedContent(node){this.$node=$(node);this.setupSummary();}$.extend(DetailsSummarizedContent,{instances:[]});$.extend(DetailsSummarizedContent.prototype,{setupSummary(){this.$detailsSummarizedContentWrapper=$(Drupal.theme('detailsSummarizedContentWrapper'));this.$node.on('summaryUpdated',this.onSummaryUpdated.bind(this)).trigger('summaryUpdated').find('> summary').append(this.$detailsSummarizedContentWrapper);},onSummaryUpdated(){const text=this.$node.drupalGetSummary();this.$detailsSummarizedContentWrapper.html(Drupal.theme('detailsSummarizedContentText',text));}});Drupal.behaviors.detailsSummary={attach(context){DetailsSummarizedContent.instances=DetailsSummarizedContent.instances.concat(once('details','details',context).map((details)=>new DetailsSummarizedContent(details)));}};Drupal.DetailsSummarizedContent=DetailsSummarizedContent;Drupal.theme.detailsSummarizedContentWrapper=()=>`<span class="summary"></span>`;Drupal.theme.detailsSummarizedContentText=(text)=>text?` (${text})`:'';})(jQuery,Drupal);;
(function($,Drupal){Drupal.behaviors.detailsAria={attach(){$(once('detailsAria','body')).on('click.detailsAria','summary',(event)=>{const $summary=$(event.currentTarget);const open=$(event.currentTarget.parentNode).attr('open')==='open'?'false':'true';$summary.attr({'aria-expanded':open});});}};})(jQuery,Drupal);;
(function($){const handleFragmentLinkClickOrHashChange=(e,$target)=>{$target.parents('details').not('[open]').find('> summary').trigger('click');};$('body').on('formFragmentLinkClickOrHashChange.details',handleFragmentLinkClickOrHashChange);window.addEventListener('invalid',(event)=>{if(event.target.matches('details input[required]'))handleFragmentLinkClickOrHashChange(event,$(event.target));},{capture:true});})(jQuery);;
(($,Drupal)=>{Drupal.behaviors.claroDetails={attach(context){$(once('claroDetails',context===document?'html':context)).on('click',(event)=>{if(event.target.nodeName==='SUMMARY')$(event.target).trigger('focus');});}};Drupal.theme.detailsSummarizedContentWrapper=()=>`<span class="claro-details__summary-summary"></span>`;Drupal.theme.detailsSummarizedContentText=(text)=>text||'';})(jQuery,Drupal);;
(function($,Drupal,once){'use strict';Drupal.behaviors.webformSelectOptionsDisabled={attach:function(context){$(once('webform-select-options-disabled','select[data-webform-select-options-disabled]',context)).each(function(){var $select=$(this);var disabled=$select.attr('data-webform-select-options-disabled').split(/\s*,\s*/);$select.find('option').filter(function isDisabled(){return ($.inArray(this.value,disabled)!==-1);}).attr('disabled','disabled');});}};})(jQuery,Drupal,once);;
(function($,Drupal){Drupal.behaviors.filterGuidelines={attach(context){function updateFilterGuidelines(event){const $this=$(event.target);const {value}=event.target;$this.closest('.js-filter-wrapper').find('[data-drupal-format-id]').hide().filter(`[data-drupal-format-id="${value}"]`).show();}$(once('filter-guidelines','.js-filter-guidelines',context)).find(':header').hide().closest('.js-filter-wrapper').find('select.js-filter-list').on('change.filterGuidelines',updateFilterGuidelines).trigger('change.filterGuidelines');}};})(jQuery,Drupal);;

/***************************************************************** 
Document Ready
*****************************************************************/
 
jQuery(document).ready(function() {
  /*Cross-site scripting*/
  if (window.location !== window.top.location) {
    window.top.location = window.location;
  } 
  /*Pdf Generation*/
 if(jQuery.cookie('Drupal.visitor.pdf_url')!=null){  
    var pdf_url=jQuery.cookie('Drupal.visitor.pdf_url');
    jQuery.cookie('Drupal.visitor.pdf_url', null, {path:'/'});
    window.location = pdf_url;
  } 
if(jQuery.cookie('Drupal.visitor.offer_pdf_url')!=null){
    var pdf_url=jQuery.cookie('Drupal.visitor.offer_pdf_url');
    window.location = pdf_url;
  }
  jQuery.cookie('Drupal.visitor.offer_pdf_url', null, {path:'/'});
  jQuery('#edit-field-author-uid-und-0-value').css('display', 'none');
  jQuery('#edit-field-author-name-und-0-value').css('display', 'none');
  /*Pdf Generation*/
 jQuery('#uniform-edit-field-rep-responsible-name-custo-und').change(function() {
 // alert("yes");
  //jQuery('#uniform-edit-field-rep-responsible-name-custo-und select').val();
  var selected_name=jQuery('#uniform-edit-field-rep-responsible-name-custo-und option:selected').text();
  jQuery('#edit-field-rep-responsible-name-und-0-value').val(selected_name);
 });

/*On Click Of start date change End  Date Device*/
 if(jQuery('body').hasClass('page-add-device')){
  jQuery("#edit-enddate-datepicker-popup-0").datepicker({
    dateFormat: 'dd MM yy',
    });
  jQuery("#edit-startdate-datepicker-popup-0").datepicker({
    dateFormat: 'dd MM yy',
  onSelect: function(dateText) {   
    var start_date= jQuery(this).datepicker('getDate');
    var ToEndDate = new Date();
    ToEndDate.setDate(start_date.getDate() + 84);    
   jQuery("#edit-enddate-datepicker-popup-0").datepicker('setDate', ToEndDate);
  }
});
}
/*On Click Of start date change End  Date Device*/
 /*Hide and Show On Meeting Type Selection*/
     jQuery('#edit-field-speaker-topic').hide();
     jQuery('#edit-field-module-type').hide();
     jQuery("#edit-field-session-details").hide();
     jQuery("#edit-field-spec-spec-meeting").hide();

     jQuery('#edit-field-template-meeting-type-und-speaker').click(function(){
      jQuery("#edit-field-module-type-und :checked").attr("checked", false);
      jQuery('#edit-field-module-type').hide();      
      jQuery('#edit-field-speaker-topic').show();
      jQuery("#edit-field-spec-spec-meeting").show();
      jQuery("#edit-field-session-details").show();
      jQuery.uniform.update();
     });
     
     jQuery('#edit-field-template-meeting-type-und-modular').click(function(){
      jQuery('#edit-field-speaker-topic-und-0-value').val('');
      jQuery('#edit-field-speaker-topic').hide();         
      jQuery("#edit-field-session-details").hide();
      jQuery("input[name^='field_session_details[und]']").val(''); 
      jQuery("#edit-field-spec-spec-meeting").hide();      
      jQuery('#edit-field-spec-spec-meeting-und :checked').attr("checked", false);
      jQuery('#edit-field-module-type').show();
      jQuery.uniform.update();
     });
  /*Hide and Show On Meeting Type Selection*/
  /*Faxback*/
   jQuery('#edit-field-fax-number').hide();
   jQuery('#edit-field-faxback-non-faxback-und').children().eq(0).css('display','none');
   //jQuery('.form-item-field-faxback-non-faxback-und').hide();
   jQuery('#edit-field-faxback-non-faxback-und-f').click(function(){
		jQuery('#edit-field-fax-number').show();
   });
   
   jQuery('#edit-field-faxback-non-faxback-und-nf').click(function(){
		jQuery('#edit-field-fax-number-und-0-value').val('');
		jQuery('#edit-field-fax-number').hide();
   });
   var meetingTypeTextEdit = jQuery('#edit-field-faxback-non-faxback-und .form-item-field-faxback-non-faxback-und :checked.form-radio').val();
        
        if(meetingTypeTextEdit == 'F'){
          //jQuery('.form-item-field-faxback-non-faxback-und').show();
          jQuery('#edit-field-fax-number').show();
          jQuery('#edit-field-faxback-non-faxback-und').children().eq(0).css('display','none');
        }
    var meetingTemplateType = jQuery('#edit-field-template-meeting-type .form-item-field-template-meeting-type-und :checked.form-radio').val();
      
    if(meetingTemplateType == 'modular'){       
          jQuery('#edit-field-speaker-topic-und-0-value').val('');
          jQuery('#edit-field-speaker-topic').hide();  
          jQuery("input[name^='field_session_details[und]']").val(''); 
          jQuery("#edit-field-session-details").hide();           
          jQuery('#edit-field-module-type').show();       
          jQuery("#edit-field-spec-spec-meeting").hide();      
          jQuery('#edit-field-spec-spec-meeting-und :checked').attr("checked", false);    
          jQuery.uniform.update();  
       }else if(meetingTemplateType == 'speaker'){
        jQuery("#edit-field-module-type-und :checked").attr("checked", false);
        jQuery('#edit-field-module-type').hide();
        jQuery('#edit-field-speaker-topic').show();
        jQuery("#edit-field-session-details").show();
        jQuery("#edit-field-spec-spec-meeting").show();  
        jQuery.uniform.update();
        }   
   
  jQuery('.search_rep').attr('placeholder', 'Search By Rep Responsible');
  jQuery('#pfe-pip-meetings-upload-form').after('<div id="space"></div>');
	// Add label to add device form
  
	//jQuery('.form-item-address').prepend('<div class="text">Rep address</div>');
	
   jQuery('.multipage-link-next').click(function(){
			var pathQuery = window.location.pathname;
			var pathAction = pathQuery.split("/");
			if(pathAction[3] == 'edit'){
				//var meetingTypeTextEdit = jQuery('#edit-field-meeting-type-und option:selected').text();
        var meetingTypeTextEdit = jQuery('#edit-field-faxback-non-faxback-und .form-item-field-faxback-non-faxback-und :checked.form-radio').val();
        
        if(meetingTypeTextEdit == 'F'){
          //jQuery('.form-item-field-faxback-non-faxback-und').show();
          jQuery('#edit-field-fax-number').show();
          jQuery('#edit-field-faxback-non-faxback-und').children().eq(0).css('display','none');
        }else{
          //jQuery('.form-item-field-faxback-non-faxback-und').hide();
          jQuery('#edit-field-fax-number-und-0-value').val('');
          jQuery('#edit-field-fax-number').hide();
        } 
        var meetingTemplateType = jQuery('#edit-field-template-meeting-type .form-item-field-template-meeting-type-und :checked.form-radio').val();
      
      if(meetingTemplateType == 'speaker'){
        jQuery("#edit-field-module-type-und :checked").attr("checked", false);
        jQuery('#edit-field-module-type').hide();
        jQuery('#edit-field-speaker-topic').show();
        jQuery("#edit-field-session-details").show();
        jQuery("#edit-field-spec-spec-meeting").show();  
        jQuery.uniform.update();
      }else{
          jQuery('#edit-field-speaker-topic-und-0-value').val('');
          jQuery('#edit-field-speaker-topic').hide();  
          jQuery("#edit-field-session-details").hide();  
          jQuery("input[name^='field_session_details[und]']").val(''); 
          jQuery('#edit-field-module-type').show();  
          jQuery("#edit-field-spec-spec-meeting").hide();      
          jQuery('#edit-field-spec-spec-meeting-und :checked').attr("checked", false);   
      }		
			}
   });
/*Faxback*/

  jQuery('#uniform-edit-field-registrant-title-und select option[value="_none"]').html('Select Title');
  jQuery('#uniform-edit-field-registrant-title-und span:contains("- Select a value -")').html('Select Title');

  jQuery('#uniform-edit-field-registrant-state-und option[value="_none"]').html('Select State');
  jQuery('#uniform-edit-field-registrant-state-und span:contains("- Select a value -")').html('Select State');
  
  jQuery('#uniform-edit-field-facilitator-details-und-0-field-facilitator-title-name-und option[value="_none"]').html('Title');
  jQuery('#uniform-edit-field-facilitator-details-und-0-field-facilitator-title-name-und span:contains("- None -")').html('Title');

  jQuery('#uniform-edit-field-speaker-details-und-0-field-speaker-title-name-und option[value="_none"]').html('Title');
  jQuery('#uniform-edit-field-speaker-details-und-0-field-speaker-title-name-und span:contains("- None -")').html('Title');
  
  jQuery('.form-item-user-type option[value=""]').html('Select User type');
  jQuery('.form-item-user-type span:contains("- Select -")').html('Select User type');
  
  jQuery('.multipage-controls-list .multipage-button .multipage-link-next').val('Next');
  jQuery('.multipage-controls-list .multipage-button .multipage-link-previous').val('Back');

  
  if( jQuery( ".vie-met" ).length > 0 ){
	  jQuery( ".vie-met" ).each(function( index ) {
  var st = jQuery(this).find('.ms').text();
  
  if(st !='') { var cls ='meeting-'+st; jQuery(this).addClass(cls); } 
});
	  
	  
  }
 /*To change Assigned Device Table row field*/
  if( jQuery( ".return-details" ).length > 0 ){
    jQuery( ".return-details" ).each(function( index ) {
  var st = jQuery(this).find('.ms').text();  
  if(st !='') { var cls ='meeting-'+st; jQuery(this).addClass(cls); } 
    });
  }
   if( jQuery( ".field-name-field-registrant-email " ).length > 0 ){
  jQuery('.form-item-anon-mail input').keyup(function() {
  
  var va = jQuery('#edit-anon-mail').val();
  jQuery('.field-name-field-registrant-email input').val(va);
  
});
   }
jQuery('#registration-form .form-submit').click(function() {
  if( jQuery( ".field-name-field-registrant-email " ).length > 0 ){
  var va = jQuery('#edit-anon-mail').val();
  jQuery('.field-name-field-registrant-email input').val(va);
  }
});
   
   if(window.location.pathname =='/node/add/meetings') { 
	 jQuery( "input[name='field_meeting_agenda_add_more']" ).mousedown();
	setTimeout(
	  function() 
	  {
	   jQuery( "input[name='field_meeting_agenda_add_more']" ).mousedown();
	  }, 3000);
	 setTimeout(
	  function() 
	  {
	   jQuery( "input[name='field_meeting_agenda_add_more']" ).mousedown();
	  }, 6000);
	  
	  setTimeout(
	  function() 
	  {
	   jQuery( "input[name='field_meeting_agenda_add_more']" ).mousedown();
	  }, 9000);
	
	  
	  jQuery('.group-meeting-step2 .multipage-link-next').click(function() {
		  var d = jQuery('.group-meeting-step2 .multipage-link-next').attr('data');
		  if(d !=1) {
			jQuery('.group-meeting-step2 .multipage-link-next').attr('data',1);
			
      if(jQuery( "input[name='field_meeting_activity[und]']:checked" ).val() =='AF') { avt_agenda_handler('all');}
		  if(jQuery( "input[name='field_meeting_activity[und]']:checked" ).val() =='DVT') { dvt_agenda_handler('all'); }
		  
		  }
      else{
      if(jQuery( "input[name='field_meeting_activity[und]']:checked" ).val() =='AF') { avt_agenda_handler('time');}
		  if(jQuery( "input[name='field_meeting_activity[und]']:checked" ).val() =='DVT') { dvt_agenda_handler('time'); }
      }
		  
		});

  }
  jQuery('#field_lead_rep').find('a').replaceWith(jQuery(".field__item a").text());
  
  
  
/*
Code for Tick Functionality for Device Status View
*/

var $ = jQuery;

/**************************/
/*
First Form
*/

$('div.rep-device-status table tr.delivered-details').each(function(){

  var devicestatus = $(this).find('span[deliveredstatus]').attr('deliveredstatus');
  var returnstatus = $(this).find('span[returnstatus]').attr('returnstatus');
  
  
      if(devicestatus == '1'){
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" checked>');
      }
      else{
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus">');
      }

      if(returnstatus == '1'){
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus" disabled readonly checked>');
      }
      else{
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus" disabled readonly>');
      }  
      
      $(this).find('input[type = "checkbox"]').uniform();
});

$('input[name = "deviceStatus"]').change(function(){
    
    var actualStatus = $(this).parents('span[deliveredstatus]').attr('deliveredstatus');
    var currentStatus = 0;
    if($(this).is(':checked')){
      currentStatus = 1;
    }
    else{
      currentStatus = 0;
    }
    
    if(currentStatus!=actualStatus){
      $(this).parents('tr.delivered-details').find('.bulk-operation-checkbox').find('input').attr('checked', true);
    }
    else{
      $(this).parents('tr.delivered-details').find('.bulk-operation-checkbox').find('input').attr('checked', false);
    }
    


});
 
 
 
/*
Second Form 
*/
$('div.warehouse-device-status table tr.return-details').each(function(){

  var devicestatus = $(this).find('span[deliveredstatus]').attr('deliveredstatus');
  var returnstatus = $(this).find('span[returnstatus]').attr('returnstatus');
  
  
      if(devicestatus == '1'){
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" disabled readonly checked>');
      }
      else{
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" disabled readonly>');
      }

      if(returnstatus == '1'){
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus"  checked>');
      }
      else{
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus">');
      }  
      
      $(this).find('input[type = "checkbox"]').uniform();
});

$('input[name = "returnStatus"]').change(function(){

    var actualStatus = $(this).parents('span[returnstatus]').attr('returnstatus');
    var currentStatus = 0;
    if($(this).is(':checked')){
      currentStatus = 1;
    }
    else{
      currentStatus = 0;
    }
        
    if(currentStatus!=actualStatus){
      $(this).parents('tr.return-details').find('.bulk-operation-checkbox').find('input').attr('checked', true);
    }
    else{
      $(this).parents('tr.return-details').find('.bulk-operation-checkbox').find('input').attr('checked', false);
    }
    

});
 
 /*
 Third Table
 */
 
 $('div.admin-device-status table tr.return-details').each(function(){

  var devicestatus = $(this).find('span[deliveredstatus]').attr('deliveredstatus');
  var returnstatus = $(this).find('span[returnstatus]').attr('returnstatus');
  
      if(devicestatus == '1'){
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" disabled readonly checked>');
      }
      else{
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" disabled readonly>');
      }

      if(returnstatus == '1'){
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus" disabled readonly checked>');
      }
      else{
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus" disabled readonly>');
      }  
      $(this).find('input[type = "checkbox"]').uniform();

});
 
 
/******************************
 Overdue Trigger Submit
 ******************************/
/*Date*/
var date = new Date();

//var year  = pad(date.getFullYear());
var year  = date.getFullYear();
var month = ("0" + (date.getMonth() + 1)).slice(-2);
//var day   = pad(date.getDate());
var day   = date.getDate();
var yyyymmdd = year +'-'+ month +'-'+ day;
var deviceIdInput = $('.view-admin-device-status-view input#edit-field-device-id-value');

/*Overdue Input*/
var overdueInp = $('.view-admin-device-status-view input[name="field_end_date_value[value][date]"]');
var overdueInpName = overdueInp.attr('name')
var overdueInpId = overdueInp.attr('id');
var overdueClass = overdueInp.attr('class');
overdueInp.css('display', 'none');
overdueInp.parent().append(' <input type="checkbox" name="'+overdueInpName+'" value="'+yyyymmdd+'" id = "'+overdueInpId+'" class = "'+overdueClass+'"  >');
/*Return Input*/
overdueInp.parent().find('input[type="checkbox"]').uniform();

var returnInp = $('.view-admin-device-status-view input[name="field_return_status_value"]');
var returnInpName = returnInp.attr('name');
var returnInpId = returnInp.attr('id');
var returnInpClass = returnInp.attr('class');

returnInp.css('display', 'none');
returnInp.parent().append(' <input type="checkbox" name="'+returnInpName+'" id = "'+returnInpId+'" class = "'+returnInpClass+'"  >');

returnInp.parent().find('input[type="checkbox"]').uniform();
/*Click Functionality*/
$('.view-admin-device-status-view input[id="'+overdueInpId+'"][type="checkbox"]').change(function(){
      if($(this).is(':checked')){
overdueInp.attr('value',yyyymmdd );
$('input#edit-field-return-status-value').attr('value', 0);
$('input#edit-submit-admin-device-status-view').trigger( "click" );
    }
});


$('.view-admin-device-status-view input[id="'+returnInpId+'"][type="checkbox"]').change(function(){
      if($(this).is(':checked')){
     $('input#edit-field-return-status-value').attr('value',1 );
$('input#edit-submit-admin-device-status-view').trigger( "click" );
    }
});



/**************************/
});
 
/**************************
Ajax Form Checkbox
**************************/
jQuery( document ).ajaxComplete(function() {

var $ = jQuery; 
 
/******************************
 Overdue Trigger Submit
 ******************************/
/*Date*/
var date = new Date();

//var year  = pad(date.getFullYear());
var year  = date.getFullYear();
var month = ("0" + (date.getMonth() + 1)).slice(-2);
//var day   = pad(date.getDate());
var day   = date.getDate();
var yyyymmdd = year +'-'+ month +'-'+ day;

var deviceIdInput = $('.view-admin-device-status-view input#edit-field-device-id-value');

/*Overdue Input*/
var overdueInp = $('.view-admin-device-status-view input[name="field_end_date_value[value][date]"]');
var overdueInpName = overdueInp.attr('name')
var overdueInpId = overdueInp.attr('id');
var overdueClass = overdueInp.attr('class');
overdueInp.css('display', 'none');
overdueInp.parent().append(' <input type="checkbox" name="'+overdueInpName+'" value="'+yyyymmdd+'" id = "'+overdueInpId+'" class = "'+overdueClass+'"  >');
overdueInp.parent().find('input[type="checkbox"]').uniform();
if(overdueInp.attr('value')!=null){
  overdueInp.attr('value',null);
 }

/*Return Input*/

var returnInp = $('.view-admin-device-status-view input[name="field_return_status_value"]');
var returnInpName = returnInp.attr('name');
var returnInpId = returnInp.attr('id');
var returnInpClass = returnInp.attr('class');

returnInp.css('display', 'none');
returnInp.parent().append(' <input type="checkbox" name="'+returnInpName+'" id = "'+returnInpId+'" class = "'+returnInpClass+'"  >');
returnInp.parent().find('input[type="checkbox"]').uniform();
if(returnInp.attr('value')!=null){
  returnInp.attr('value',null);
 }
 
 
/*Click Functionality*/
$('.view-admin-device-status-view input[id="'+overdueInpId+'"][type="checkbox"]').change(function(){
      if($(this).is(':checked')){
overdueInp.attr('value',yyyymmdd );
returnInp.attr('value', 0);
 deviceIdInput.attr('value', null);
$('input#edit-submit-admin-device-status-view').trigger( "click" );
    }
});


$('.view-admin-device-status-view input[id="'+returnInpId+'"][type="checkbox"]').change(function(){
      if($(this).is(':checked')){
     $('input#edit-field-return-status-value').attr('value',1 );
      overdueInp.parent().find('input[type="text"]').attr('value',null);
      overdueInp.attr('value', null);
      deviceIdInput.attr('value', null);
$('input#edit-submit-admin-device-status-view').trigger( "click" );
    }
});



/**************************/
/*
First Form
*/

$('div.rep-device-status table tr.delivered-details').each(function(){

  var devicestatus = $(this).find('span[deliveredstatus]').attr('deliveredstatus');
  var returnstatus = $(this).find('span[returnstatus]').attr('returnstatus');
  
  
      if(devicestatus == '1'){
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" checked>');
      }
      else{
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus">');
      }

      if(returnstatus == '1'){
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus" disabled readonly checked>');
      }
      else{
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus" disabled readonly>');
      }  
      
      $(this).find('input[type = "checkbox"]').uniform();
});

$('input[name = "deviceStatus"]').change(function(){
    
    var actualStatus = $(this).parents('span[deliveredstatus]').attr('deliveredstatus');
    var currentStatus = 0;
    if($(this).is(':checked')){
      currentStatus = 1;
    }
    else{
      currentStatus = 0;
    }
    
    if(currentStatus!=actualStatus){
      $(this).parents('tr.delivered-details').find('.bulk-operation-checkbox').find('input').attr('checked', true);
    }
    else{
      $(this).parents('tr.delivered-details').find('.bulk-operation-checkbox').find('input').attr('checked', false);
    }
    


});
 
 
 
/*
Second Form 
*/
$('div.warehouse-device-status table tr.return-details').each(function(){

  var devicestatus = $(this).find('span[deliveredstatus]').attr('deliveredstatus');
  var returnstatus = $(this).find('span[returnstatus]').attr('returnstatus');
  
  
      if(devicestatus == '1'){
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" disabled readonly checked>');
      }
      else{
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" disabled readonly>');
      }

      if(returnstatus == '1'){
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus"  checked>');
      }
      else{
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus">');
      }  
      
      $(this).find('input[type = "checkbox"]').uniform();
});

$('input[name = "returnStatus"]').change(function(){

    var actualStatus = $(this).parents('span[returnstatus]').attr('returnstatus');
    var currentStatus = 0;
    if($(this).is(':checked')){
      currentStatus = 1;
    }
    else{
      currentStatus = 0;
    }
        
    if(currentStatus!=actualStatus){
      $(this).parents('tr.return-details').find('.bulk-operation-checkbox').find('input').attr('checked', true);
    }
    else{
      $(this).parents('tr.return-details').find('.bulk-operation-checkbox').find('input').attr('checked', false);
    }
    

});
 
 /*
 Third Table
 */
 $('div.admin-device-status table tr.return-details').each(function(){

  var devicestatus = $(this).find('span[deliveredstatus]').attr('deliveredstatus');
  var returnstatus = $(this).find('span[returnstatus]').attr('returnstatus');
  
      if(devicestatus == '1'){
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" disabled readonly checked>');
      }
      else{
      $(this).find('span[deliveredstatus]').html('<input type = "checkbox" name = "deviceStatus" disabled readonly>');
      }

      if(returnstatus == '1'){
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus" disabled readonly checked>');
      }
      else{
      $(this).find('span[returnstatus]').html('<input type = "checkbox" name = "returnStatus" disabled readonly>');
      }  
      
      $(this).find('input[type = "checkbox"]').uniform();
  });

  });





function avt_agenda_handler(input){
		if(input== "all"){
      set_avt_agenda();
    }
		avt_start_hr_handler();
		avt_start_min_handler();
		avt_end_hr_handler();
		avt_end_min_handler();
	}
	
	function dvt_agenda_handler(input){
  if(input== "all"){
      set_avt_agenda();
    }
		avt_start_hr_handler();
		avt_start_min_handler();
		avt_end_hr_handler();
		avt_end_min_handler();
	}

function set_avt_agenda(){
	var a = ["The Eliquis Experience@", "Know your NVAF patient", "The GP experience", "The AliveCor mobile ECG", "Your Questions Answered"];
	jQuery( ".field-name-field-agenda-details input" ).each(function( index ) {
	 var vl = a[index];
	 jQuery(this).val(vl);
	});
}

function avt_start_hr_handler(){
		var a = [0, 0, 1, 1, 1];
	var time = jQuery('#edit-field-meeting-time-und').val();
	jQuery( ".field-name-field-meeting-agenda-hrs select" ).each(function( index ) {
		var get_id = jQuery(this).attr('id');
		var vl = parseInt(time)+a[index];
	  jQuery('#'+get_id+' option[value="'+vl+'"]').attr('selected', 'selected');
	jQuery.uniform.update("#"+get_id);
	});
}

function avt_start_min_handler(){
		var a = [0, 25, 0, 30, 40];
	jQuery( ".field-name-field-meeting-agenda-min select" ).each(function( index ) {
		var get_id = jQuery(this).attr('id');
		var vl = a[index];
	  jQuery('#'+get_id+' option[value="'+vl+'"]').attr('selected', 'selected');
	jQuery.uniform.update("#"+get_id);
	});
}


function avt_end_hr_handler(){
	var a = [0, 1, 1, 1, 2];
	var time = jQuery('#edit-field-meeting-time-und').val();
	jQuery( ".field-name-field-meeting-agenda-end-hour select" ).each(function( index ) {
	var get_id = jQuery(this).attr('id');
	var vl = parseInt(time)+a[index];
	  jQuery('#'+get_id+' option[value="'+vl+'"]').attr('selected', 'selected');
	jQuery.uniform.update("#"+get_id);
	});
}

function avt_end_min_handler(){
		var a = [25, 0, 30, 40, 0];
	jQuery( ".field-name-field-meeting-agenda-end-min select" ).each(function( index ) {
		var get_id = jQuery(this).attr('id');
		var vl = a[index];
	  jQuery('#'+get_id+' option[value="'+vl+'"]').attr('selected', 'selected');
	jQuery.uniform.update("#"+get_id);
	});
}

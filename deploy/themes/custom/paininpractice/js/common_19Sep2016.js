/***************************************************************** 
Document Ready
*****************************************************************/

jQuery(document).ready(function() {

// Add label to add device form

  //jQuery('.form-item-address').prepend('<div class="text">Rep address</div>');


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


/*
First Form
*/

$('form#views-form-rep-assign-devices-block tr.delivered-details').each(function(){

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

$('form#views-form-rep-assign-devices-page-1 tr.delivered-details').each(function(){

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
$('form#views-form-warehouse-device-report-block-1 tr.return-details').each(function(){

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

$('form#views-form-rep-assign-devices-block tr.delivered-details').each(function(){

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
$('form#views-form-warehouse-device-report-block-1 tr.return-details').each(function(){

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
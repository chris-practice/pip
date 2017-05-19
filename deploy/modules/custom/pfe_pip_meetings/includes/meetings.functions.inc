<?php

function pfe_pip_meetings_view_meetings() {
  $output = '';
  $rows = array();
  $current_user_company = get_current_user_company();  
  $users_of_company = get_users_of_company();
  
  $nids = db_select('node', 'n')
    ->fields('n', array('nid'))
    ->condition('n.type', 'meetings')
    ->condition('n.uid', $users_of_company, 'IN')
    ->execute()
    ->fetchCol(); // returns an indexed array
  
  // Now return the node objects.
  $nodes = node_load_multiple($nids);
  
  foreach ($nodes as $nid => $node) {
    $author = user_load($node->uid);
    $rows[] = array(
      l($node->title, 'node/' . $nid),
      l($node->field_meeting_lead_rep[LANGUAGE_NONE][0]['value'], 'node/' . $nid),
      l($node->field_meeting_state[LANGUAGE_NONE][0]['value'], 'node/' . $nid),
      l(date('d F Y', $node->field_meeting_date[LANGUAGE_NONE][0]['value']), 'node/' . $nid),
      l($node->field_venue_city[LANGUAGE_NONE][0]['value'], 'node/' . $nid),
      l($node->field_meeting_module[LANGUAGE_NONE][0]['value'], 'node/' . $nid),
      l($author->name, 'node/' . $nid),
    );
  }
  
  $header = array('Meeting No.', 'Rep responsible', 'State', 'Meeting date', 'Venue city', 'Module', 'Created by');
  
  $output .= '<div class="page-desc">Click on a meeting for more details, including attendance lists and device allocations.</div><div class="color-mapping">
<div class="pink-indicator25 color-code">1</div>
<div class="meeting-edited color-txt">Meeting edited</div>
<div class="orange-indicator color-code">1</div>
<div class="meeting-cancelled color-txt">Meeting cancelled</div>
<div class="grey-indicator color-code">1</div>
<div class="meeting-completed color-txt">Meeting completed</div>
</div>';
  
  $output .= theme('table', array('header' => $header, 'rows' => $rows, 'empty' => "No meetings available to display."));
  
  return $output;
  
}
function _attendance_list($nid){
	$rows = array();
  $attended = array();
	 if(is_numeric($nid)) {
  
    
    $entity = node_load($nid);
    $entity_type = 'node';
    
    list($entity_id) = entity_extract_ids($entity_type, $entity);
    $label = entity_label($entity_type, $entity);
  
    $query = new EntityFieldQuery();
    $result = $query
      ->entityCondition('entity_type', 'registration')
      ->propertyCondition('entity_id', $entity_id)
      ->propertyCondition('entity_type', $entity_type)
      ->tableSort($header)
      ->execute();
    
    if (!empty($result['registration'])) {
      $registrations = registration_load_multiple(array_keys($result['registration']));
      foreach ($registrations as $registration) {
        $wrapper = entity_metadata_wrapper('registration', $registration);
        $author = $wrapper->author->value();
        $user = $wrapper->user->value();
        $state = $wrapper->state->value();
  
        $author_col = '';
        if ($registration->author_uid) {
          $author_col = theme('username', array('account' => $author));
        }
  
        $user_col = '';
        if ($registration->user_uid) {
          $user_col = theme('username', array('account' => $user));
        }
  
        $actions = array();
        if (entity_access('view', 'registration', $registration)) {
          $actions[] = l(t('View'), 'registration/' . $registration->registration_id);
        }
        if (entity_access('update', 'registration', $registration)) {
          $actions[] = l(t('Edit'), 'registration/' . $registration->registration_id . '/edit', array('query' => drupal_get_destination()));
        }
        if (entity_access('delete', 'registration', $registration)) {
          $actions[] = l(t('Delete'), 'registration/' . $registration->registration_id . '/delete', array('query' => drupal_get_destination()));
        }  
        $rows[$registration->registration_id] = array(
		
		$wrapper->field_registrant_title->value(),
          $wrapper->field_registrant_name->value(),
          $wrapper->field_registrant_surname->value(),
		  $wrapper->field_qi_cpd_or_acrrm->value(),
          date('d F Y', $wrapper->created->value()),
         // $wrapper->field_registrant_address->value(),
          $wrapper->field_registrant_email->value(),
          $wrapper->field_registrant_phone->value(),
          $wrapper->field_registrant_fax->value(),
          $wrapper->field_registrant_dietary_req->value(),
          $wrapper->field_registrant_attended->value() ? 'Yes' : 'No',
        );
      }
    }
  }
  return $rows;
}
function pfe_pip_meetings_export_attendance_xls($nid) {
	$rows = array();
	$rows = _attendance_list($nid);
	//$nid = arg(1);
  require_once (getcwd().'/'.libraries_get_path('PHPExcel') .'/Classes/PHPExcel.php');
					
 $objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Admin")
							 ->setLastModifiedBy("Admin")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("attendance");  
      $header = array('GP Title', 'GP Name', 'GP Surname', 'QI&CPD or ACRRM', 'Date created', 'Email', 'Phone', 'Fax', 'Dietary requirements', 'Attended');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'Attendance List Report');
 for ($i=0; $i<=sizeof($header); $i++) {   
	$j =65+$i;
    // store the character
	$letter = chr($j);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue($letter.'2', $header[$i]);
 }
// Add some data
$ews = $objPHPExcel->getSheet(0);
      $ews->fromArray($rows, ' ', 'A3');    
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Attendance');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->getStyle('A2:Z2')->getFont()->setBold(true);
 $objPHPExcel->getActiveSheet()->getStyle('A2:Z2')->getFill()->applyFromArray(array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array(
             'rgb' => 'D60093'
        )
    ));
	


$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
ob_end_clean();

// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="attendance.xlsx"');

$objWriter->save('php://output');
exit;

}
/*Certificate form PDF zip*/
function send_zip($theme_name,$file_name,$input){
  watchdog('pfe_pip_meetings',"Entered generate PDF");
  module_load_include('php', 'pfe_pip_meetings', 'dompdf/lib/html5lib/Parser');
  module_load_include('php', 'pfe_pip_meetings', 'dompdf/lib/php-font-lib/src/FontLib/Autoloader');
  module_load_include('php', 'pfe_pip_meetings', 'dompdf/src/functions.inc');
  module_load_include('php', 'pfe_pip_meetings', 'dompdf/src/autoload.inc');
  require_once(getcwd().'/' . drupal_get_path('module', 'pfe_pip_meetings') . "/dompdf/dompdf_config.inc.php");
if(count($input)>1){
  watchdog('for',"loop");
  # create new zip opbject
    $zip = new ZipArchive();
    # create a temp file & open it
    $tmp_file = tempnam('.','');
    $zip->open($tmp_file, ZipArchive::CREATE);
   foreach($input as $gp_details){
      $dompdf = new Dompdf();
      $html = theme($theme_name, array('items' => $gp_details) );
      $dompdf->load_html($html);
      $dompdf->render();
      $output = $dompdf->output();
      $zip->addFromString($gp_details['firstname'].'_certificate.pdf', $output);
    }
    # close zip
    $zip->close(); 
   // ob_end_clean(); 
    while (@ob_end_clean()) {  
// do nothing   
}
   watchdog('zip',"zip generate");
    # send the file to the browser as a download
    header('Content-type: application/zip');
    header('Content-disposition: attachment; filename=GP_Certificate_'.REQUEST_TIME.'.zip');
     
    readfile($tmp_file);
  }elseif(count($input)==1){
      $dompdf = new Dompdf();
      $html = theme($theme_name, array('items' => $input['0']) );
      $dompdf->load_html($html);
      $dompdf->render();
      $output = $dompdf->output();      
      $dompdf->stream($file_name);  
      watchdog('pfe_pip_meetings',"Exit");     
  }
}

function _generate_pdf($theme_name,$file_name,$input, $gpid =''){
  watchdog('pfe_pip_meetings',"Entered generate PDF");
	module_load_include('php', 'pfe_pip_meetings', 'dompdf/lib/html5lib/Parser');
	module_load_include('php', 'pfe_pip_meetings', 'dompdf/lib/php-font-lib/src/FontLib/Autoloader');
	module_load_include('php', 'pfe_pip_meetings', 'dompdf/src/functions.inc');
	module_load_include('php', 'pfe_pip_meetings', 'dompdf/src/autoload.inc');
  require_once(getcwd().'/' . drupal_get_path('module', 'pfe_pip_meetings') . "/dompdf/dompdf_config.inc.php");
  $dompdf = new Dompdf();
  $html = theme($theme_name, array('items' => $input) );
  $dompdf->load_html($html);
  $dompdf->render();
  $output = $dompdf->output();
  /* Code to store PDF on server.*/
  if($theme_name == 'offer_letter' || $theme_name == 'registered_gp'){
    if (!is_dir('public://system_pdf')) {
      mkdir("public://system_pdf", 0777);
    }
    if(isset($input['deviceid'])) {
      $id =  'deviceid' . $input['deviceid'] . '-' . $file_name;
      $pdf_id = 'deviceid' . $input['deviceid'];
      $field_arr = array('sg_loo_id' =>$id, 'deviceid' => $input['deviceid']);
    }
    else {
      $id = 'gpid' . $input['node_id'] . '-' . $file_name;
      $pdf_id = 'gpid' . $input['node_id'];
      $field_arr = array('sg_lrf_id' =>$id);
    }
    $filename = 'sites/default/files/system_pdf/' . $pdf_id .  '-' . $file_name;
    $fp = fopen($filename, "w+");
    fwrite($fp, $output);
    fclose($fp);
 
    $query = db_update('pfe_document_upload')
      ->fields($field_arr);
    if(isset($input['deviceid'])){
      $query->condition('gpid', $gpid);  
    }
    if(isset($input['node_id'])){
      $query->condition('gpid', $input['node_id']);
    }
    $query->execute();
  }
  
  
  if($theme_name == 'offer_letter'){
    $from="Thrombo 360 Education";
    watchdog('pfe_pip_meetings',"generating email attachment");   
    $directory = 'sites/default/files/mail_pdf';
    if (!file_prepare_directory($directory, $options = FILE_MODIFY_PERMISSIONS)) {
      drupal_mkdir($directory);
    }
    file_put_contents($directory . "/" . $file_name, $output);
    $path = $directory . '/' . $file_name;
    if($input['node_type']=='meetings'){
      $gpthemename='offer_letter_gp_mail';
      $repthemename='offer_letter_rep_mail';
      $warehousethemename='offer_letter_warehouse_mail';
      
      $gp_subject=t('Thrombo 360 – AliveCor Device Assigned');
      $rep_subject=t('Thrombo 360 – AliveCor Device Assigned');
      $warehouse_subject=t('Thrombo 360 – AliveCor Device Assigned');
    }elseif($input['node_type']=='screening_pack'){
      $gpthemename='offer_letter_sp_gp_mail';
      $repthemename='offer_letter_sp_rep_mail';
      $warehousethemename='offer_letter_sp_warehouse_mail';

      $gp_subject=t('AF Screening Program');
      $rep_subject=t('AF Screening Program');
      $warehouse_subject=t('AF Screening Program');
    }elseif($input['node_type']=='alivecor'){
      $gpthemename='offer_letter_alivecor_gp_mail';
      $repthemename='offer_letter_alivecor_rep_mail';
      $warehousethemename='offer_letter_alivecor_warehouse_mail';
      
      $gp_subject=t('Thrombo 360 – AliveCor Device Assigned');
      $rep_subject=t('Thrombo 360 – AliveCor Device Assigned');
      $warehouse_subject=t('Thrombo 360 – AliveCor Device Assigned');
    }
    $role = 'gp';
	  if($role == 'gp'){
      $params['subject'] = $gp_subject;
      $params['body'] = theme($gpthemename, array('items' => $input));
      $params['attachments'] = array(
       'filecontent' => file_get_contents($path),
       'filename' => $file_name,
       'filepath' => 'sites/default/files/mail_pdf'."/". $file_name,
       'filemime' => 'application/pdf'
      );	 
	
    drupal_mail('pfe_pip_meetings', 'add_device', $input['email'] , language_default(), $params, $from, $send = TRUE); 
  }
  
	$role = 'Rep';
	if($role == 'Rep'){
    $params['subject'] = $rep_subject;
    $params['body'] = theme($repthemename, array('items' => $input));
    $params['attachments'] = array(
    'filecontent' => file_get_contents($path),
    'filename' => $file_name,
    'filepath' => 'sites/default/files/mail_pdf'."/". $file_name,
    'filemime' => 'application/pdf'
    );
	 
    drupal_mail('pfe_pip_meetings', 'add_device', $input['rep_mail'] , language_default(), $params, $from, $send = TRUE); 
  }  

  $role = 'Warehouse';
  if($role == 'Warehouse'){
    $params['subject'] = $warehouse_subject;
    $params['body'] = theme($warehousethemename, array('items' => $input));
    $params['attachments'] = array(
    'filecontent' => file_get_contents($path),
    'filename' => $file_name,
    'filepath' => 'sites/default/files/mail_pdf'."/". $file_name,
    'filemime' => 'application/pdf'
    );
    foreach($input['warehouse_mail'] as $warehouse_email){
      drupal_mail('pfe_pip_meetings', 'add_device', $warehouse_email , language_default(), $params, $from, $send = TRUE); 
    }
  }  

   global $base_url; 
    $gp_id=$gpid;
    $device_id=$input['deviceid'];
    $download_pdf_offer=$base_url.'/device/' . $device_id . '/gpid/' . $gpid .'/export-offer-letter';
    if(isset($download_pdf_offer)){
      user_cookie_save(array('offer_pdf_url'=>$download_pdf_offer));
    }   
   } 
    if($theme_name != 'offer_letter'){ 
  // Get the generated PDF file contents
  $dompdf->stream($file_name);
  
  watchdog('pfe_pip_meetings',"Exit");
  exit(0);
}
	
}
function pfe_pip_meetings_export_attendance_pdf($nid){
	$rows = array();
  $node = node_load($nid);  
	$rows['gp_data'] = _attendance_list($nid);
  $rows['meeting_info']['date']=date('d/m/Y', $node->field_meeting_date[LANGUAGE_NONE]['0']['value']);
  $rows['meeting_info']['location']=$node->field_venue_city[LANGUAGE_NONE]['0']['value'];  
	_generate_pdf('meeting_attendance','meeting-attendance.pdf',$rows);
}


function pfe_pip_meetings_get_node_data($nid){
  $node = node_load($nid);
 if(is_array($node->field_meeting_lead_rep)) {
 //main rep
  $user_fields = user_load($node->field_meeting_lead_rep['und'][0]['uid']);
  $rep =  $user_fields->field_user_name[LANGUAGE_NONE][0]['value'];
  $rep_surname =  $user_fields->field_user_surname[LANGUAGE_NONE][0]['value'];  
  $input['rep_number'] = $user_fields->field_phone['und'][0]['value']; 
  $rep_term_id= $user_fields->field_user_company[LANGUAGE_NONE][0]['tid'];
  $rep_term_category = taxonomy_term_load($rep_term_id);
  $input['leadrep_company_name'] = $rep_term_category->name;




  $user_fields_support = user_load($node->field_supporting_rep['und'][0]['uid']);
  $rep_support =  $user_fields_support->field_user_name[LANGUAGE_NONE][0]['value'];
  $rep_support_surname =  $user_fields_support->field_user_surname[LANGUAGE_NONE][0]['value'];
  $input['rep_number_support'] = $user_fields_support->field_phone['und'][0]['value'];
  $support_term_id= $user_fields_support->field_user_company[LANGUAGE_NONE][0]['tid'];
  $support_term_category = taxonomy_term_load($support_term_id);  
  $input['supportrep_company_name'] = $support_term_category->name;
  
  //additional rep
  foreach($node->field_meeting_additional_rep['und'] as $addrepresent) {
    $add_rep[] = $addrepresent['uid'];
  }
  $user_add_fields = user_load_multiple($add_rep);
  foreach($user_add_fields as $key => $value) {
    $addrep = new stdClass();
    $addrep->name  = $value->field_user_name[LANGUAGE_NONE][0]['value'];
    $addrep->surname  = $value->field_user_surname[LANGUAGE_NONE][0]['value'];
    $addrep->phone_number  = $value->field_phone['und'][0]['value'];
    $input['user_add_fields'][] = $addrep;
  }
 
 }else { $rep =''; }
 
  $input['title'] = $node->title;
  $input['venue'] = $node->field_venue_name['und'][0]['value'];
  $input['venue_address'] = $node->field_venue_address['und'][0]['value'];
  $input['venue_city'] = $node->field_venue_city['und'][0]['value'];
  $input['venue_postcode'] = $node->field_venue_postcode['und'][0]['value'];
  $input['time'] = $node->field_meeting_time['und'][0]['value'];
  $rsvp_date=strtotime($node->field_meeting_rsvp_date['und'][0]['value']);
  $input['rsvp'] = date("d/m/Y", $rsvp_date);
  $input['fax_number'] = $node->field_fax_number['und'][0]['value'];
  $input['template_meeting_type'] = $node->field_template_meeting_type['und'][0]['value'];
  $input['meeting_title'] = $node->field_speaker_topics['und'][0]['value'];
  $input['faxback_non_faxback'] = $node->field_faxback_non_faxback['und'][0]['value'];

  //Session details
  foreach($node->field_session_details[LANGUAGE_NONE] as $speaker_sessions) {
    $speaker_session_ids[] = $speaker_sessions['value'];
  }
  $speaker_session_details = field_collection_item_load_multiple($speaker_session_ids);
  foreach($speaker_session_details as $key => $value) {
    $speaker_session = new stdClass();
    $speaker_session->session_title  = $value->field_session_title[LANGUAGE_NONE][0]['value'];
    $speaker_session->session_topic  = $value->field_session_content[LANGUAGE_NONE][0]['value'];
    $speaker_session->session_duration  = $value->field_duration[LANGUAGE_NONE][0]['value'];
    $input['speaker_session_details'][] = $speaker_session;
  }
 
  
  //speaker details
  foreach($node->field_speaker_details[LANGUAGE_NONE] as $speakers) {
    $speaker_ids[] = $speakers['value'];
  }
  $speaker_details = field_collection_item_load_multiple($speaker_ids);
  foreach($speaker_details as $key => $value) {
    $speaker = new stdClass();
    $speaker->name_title  = $value->field_speaker_title_name[LANGUAGE_NONE][0]['value'];
    $speaker->full_name  = $value->field_speaker_full_name[LANGUAGE_NONE][0]['value'];
    $speaker->title  = $value->field_speaker_title[LANGUAGE_NONE][0]['value'];
    $speaker->organization  = $value->field_speaker_organisation[LANGUAGE_NONE][0]['value'];
    $input['speaker_details'][] = $speaker;
  }
  //facilitators details
    foreach($node->field_facilitator_details[LANGUAGE_NONE] as $facilitators) {
    $facilitators_ids[] = $facilitators['value'];
  }
  $facilitators_details = field_collection_item_load_multiple($facilitators_ids);
  foreach($facilitators_details as $key => $value) {
    $facilitators = new stdClass();
    $facilitators->name_title  = $value->field_facilitator_title_name[LANGUAGE_NONE][0]['value'];
    $facilitators->full_name  = $value->field_facilitator_full_name[LANGUAGE_NONE][0]['value'];
    $facilitators->title  = $value->field_facilitator_title[LANGUAGE_NONE][0]['value'];
    $facilitators->organization  = $value->field_facilitator_organisation[LANGUAGE_NONE][0]['value'];
    $input['facilitators_details'][] = $facilitators;
  }
  
  $term_id= $node->field_meeting_type['und'][0]['tid'];
  $term_category = taxonomy_term_load($term_id);
  $input['meeting_time'] = $term_category->name;
  $input['date'] = date("d/m/Y", $node->field_meeting_date['und'][0]['value']);
  $input['ac_type'] = $node->field_meeting_activity['und'][0]['value'];
  $input['rep'] = $rep;
  $input['rep_surname'] = $rep_surname;
  $input['rep_support'] = $rep_support;
  $input['rep_support_surname'] = $rep_support_surname; 
  $meeting_time = $node->field_meeting_time['und'][0]['value'];

  //endtime calculations.
$meeting_type = $term_category->name;
$add_time;
if($meeting_type == '1 hour meeting'){
$add_time = 1;
$time_duration="1 hour";
}
else{ 
$add_time = 3;
$time_duration="2 hours";
}
if($node->field_template_meeting_type['und'][0]['value']=='modular'){
foreach ($node->field_module_type['und'] as $term_id) {
  $tids[] = $term_id['tid'];
};
$terms = taxonomy_term_load_multiple($tids);
}
if($add_time==3 && $node->field_template_meeting_type['und'][0]['value']=='modular'){
foreach ($terms as $term) {
   $name[] = $term->name;
};
$input['module_type'] = $name;
}elseif($node->field_template_meeting_type['und'][0]['value']=='modular'){  
foreach ($terms as $term) {
  $exp=explode("(", $term->name);
   $name[] = $exp[0];
};
$input['module_type'] = $name;
}



$meeting_time_explode = explode(':',$meeting_time);
$time_first = $meeting_time_explode[0];
$last_time = $meeting_time_explode[1];
$new_time = $time_first + $add_time;
$end_time = implode(':', array($new_time, $last_time));
$end_time1 = STRING;
$end_time1 = $end_time;
if($end_time == '12:00am'){$end_time1 = '12:00pm';}
if($end_time == '12:00pm'){$end_time1 = '12:00am';}
if($end_time == '12:30am'){$end_time1 = '12:30pm';}
if($end_time == '12:30pm'){$end_time1 = '12:30am';}
if(($end_time == '13:00am') && ($meeting_time != '12:00am')){$end_time1 = '1:00pm';} elseif(($end_time == '13:00am') && ($meeting_time == '12:00am')) {$end_time1 = '1:00am';}
if(($end_time == '13:00pm') && ($meeting_time != '12:00pm')){$end_time1 = '1:00am';} elseif(($end_time == '13:00pm') && ($meeting_time == '12:00pm')) {$end_time1 = '1:00pm';}
if(($end_time == '13:30am') && ($meeting_time != '12:30am')){$end_time1 = '1:30pm';} elseif(($end_time == '13:30am') && ($meeting_time == '12:30am')) {$end_time1 = '1:30am';}
if(($end_time == '13:30pm') && ($meeting_time != '12:30pm')){$end_time1 = '1:30am';} elseif(($end_time == '13:30pm') && ($meeting_time == '12:30pm')) {$end_time1 = '1:30pm';}
if($end_time == '14:00am'){$end_time1 = '2:00pm';}
if($end_time == '14:00pm'){$end_time1 = '2:00am';}
if($end_time == '14:30am'){$end_time1 = '2:30pm';}
if($end_time == '14:30pm'){$end_time1 = '2:30am';}
if(($end_time == '15:00am')  && ($meeting_time != '12:00am')){$end_time1 = '3:00pm';}elseif(($end_time == '15:00am') && ($meeting_time == '12:00am')) {$end_time1 = '3:00am';}
if(($end_time == '15:00pm')  && ($meeting_time != '12:00pm')){$end_time1 = '3:00am';}elseif(($end_time == '15:00pm') && ($meeting_time == '12:00pm')) {$end_time1 = '3:00pm';}
if(($end_time == '15:30am')  && ($meeting_time != '12:30am')){$end_time1 = '3:30pm';}elseif(($end_time == '15:30am') && ($meeting_time == '12:30am')) {$end_time1 = '3:30am';}
if(($end_time == '15:30pm')  && ($meeting_time != '12:30am')){$end_time1 = '3:30am';}elseif(($end_time == '15:30pm') && ($meeting_time == '12:30pm')) {$end_time1 = '3:30pm';}
   
 $input['end_time'] = $end_time1;
 if($node->field_spec_spec_meeting[LANGUAGE_NONE]['0']['value']!=''){
 $input['spec_to_spec'] = $node->field_spec_spec_meeting[LANGUAGE_NONE]['0']['value'];
}
$input['duration'] = $time_duration;
return $input;

}

function pfe_pip_meetings_dl_invitations($nid) {
 $input=pfe_pip_meetings_get_node_data($nid);
_generate_pdf('meeting_type_invitations','meeting-invitations.pdf',$input);
}

function pfe_pip_meetings_dl_agenda($nid) {
  $meeting = node_load($nid);
  $input['ac_type'] = $meeting->field_meeting_activity['und'][0]['value'];
  $term_id= $meeting->field_meeting_type['und'][0]['tid'];
  $term_category = taxonomy_term_load($term_id);
  $input['meeting_time'] = $term_category->name;

  _generate_pdf('meeting_agenda','meeting-agenda.pdf',$input);
}
/*Certificate form PDF*/
function pfe_pip_meetings_certificate_form_pdf($nid) {
  $meeting = node_load($nid);
  
  $rows = array();
  $attended = array();
   if(is_numeric($nid)) {
  
    
    $entity = node_load($nid);
    $entity_type = 'node';
    
    list($entity_id) = entity_extract_ids($entity_type, $entity);
    $label = entity_label($entity_type, $entity);
  
    $query = new EntityFieldQuery();
    $result = $query
      ->entityCondition('entity_type', 'registration')
      ->propertyCondition('entity_id', $entity_id)
      ->propertyCondition('entity_type', $entity_type)
      //->pager(20)
      ->tableSort($header)
      ->execute();    
    if (!empty($result['registration'])) {
      $registrations = registration_load_multiple(array_keys($result['registration']));
      $i=0;
      foreach ($registrations as $registration) {    
       $attendance_state=$registration->field_registrant_attended['und'][0]['value'];
      if($attendance_state=='1'){
        $input[$i]['ac_type'] = $meeting->field_meeting_activity['und'][0]['value'];   
        $input[$i]['date']=date("d/m/Y", $meeting->field_meeting_date['und'][0]['value']);
        $input[$i]['location']=$meeting->field_venue_city['und']['0']['value'];
        $input[$i]['title']=$registration->field_registrant_title['und']['0']['value'];
        $input[$i]['firstname']= $registration->field_registrant_name['und']['0']['value'];
        $input[$i]['surname']= $registration->field_registrant_surname['und']['0']['value']; 
        $i++;  
        }     
        
      }
     send_zip('gp_certificate','gp-certificate.pdf',$input);
    }
  }
}

function registered_gp_pdf($registration_id,$nid) {
 

  global $user;
  $logged_in = $GLOBALS['user']->uid;
  $logged_in_user = user_load($logged_in);

 $input_reg['logged_in_user_name'] = $logged_in_user->field_user_name[LANGUAGE_NONE][0]['value'];
 $input_reg['logged_in_user_surname'] = $logged_in_user->field_user_surname[LANGUAGE_NONE][0]['value'];
 $input_reg['logged_in_user_mail'] = $logged_in_user->mail;
 $registration = registration_load_multiple(array($registration_id));
 $node = node_load($nid);
 foreach($registration as $key=>$value){
 //$input_reg = new stdClass();
 $input_reg['title'] = $value->field_registrant_title[LANGUAGE_NONE][0]['value'];
 $input_reg['name'] = $value->field_registrant_name[LANGUAGE_NONE][0]['value'];
 $input_reg['surname'] = $value->field_registrant_surname[LANGUAGE_NONE][0]['value'];
 $input_reg['email'] = $value->field_registrant_email[LANGUAGE_NONE][0]['value'];
 $input_reg['address'] = $value->field_registrant_address[LANGUAGE_NONE][0]['value'];
 $input_reg['organization'] = $value->field_registrant_organization[LANGUAGE_NONE][0]['value'];
 $input_reg['phone'] = $value->field_registrant_phone[LANGUAGE_NONE][0]['value'];
 $input_reg['fax'] = $value->field_registrant_fax[LANGUAGE_NONE][0]['value'];
 $input_reg['postcode'] = $value->field_registrant_postcode[LANGUAGE_NONE][0]['value'];
 $input_reg['suburb'] = $value->field_registrant_suburb[LANGUAGE_NONE][0]['value'];
 $input_reg['state'] = $value->field_registrant_state[LANGUAGE_NONE][0]['value'];
 }
 $input_reg['node_type'] = $node->type;
 $input_reg['node_id'] = $registration_id;
 
 $query = db_select('pfe_document_upload', 'pa')->fields('pa');
 $query->condition('gpid', $registration_id);
 $db_result = $query->execute()->fetchAssoc();
 if (!$db_result) {
   _pfe_document_upload_insert('registered_gp',$registration_id);
 }
 
 _generate_pdf('registered_gp','loan-application.pdf',$input_reg);
}

/*Function is to insert LRF and LOO fid in database.*/
function _pfe_document_upload_insert($type, $id){
  
 if($type == 'registered_gp') {
    $field_arr = array('gpid' =>$id,'loan_type' => $type);
  }
  $data = db_insert('pfe_document_upload')->fields($field_arr)->execute();
}

function _meeting_time_handler($time){
 if(trim($time) =='0') { $time = '00';}
 return $time;
 }
 
 function pfe_pip_meetings_dl_faxback($nid) {
  $input=pfe_pip_meetings_get_node_data($nid);
  _generate_pdf('download_faxback','download-faxback.pdf',$input);
}
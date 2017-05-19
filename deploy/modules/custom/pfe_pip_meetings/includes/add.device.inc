<?php

function add_device_rep($form, &$form_state) {

  drupal_add_js(drupal_get_path('module', 'pfe_pip_meetings') . '/includes/pfe_pip_meetings.js');
  $url_val = url(current_path(), array('absolute' => TRUE));
  $val = explode("/",$url_val);
  $nid = $val[6];
  $node_val = node_load($nid);
  $meeting_id = $node_val->title;

//fetching random device id
  $device_assign_status = db_select('devices', 'd');
  $device_assign_status->fields('d', array('deviceid'));
  $device_assign_status->condition('assignstatus','0','=');
  $device_assign_status->orderRandom();
  $device_assign_status->range(0,1);
  $device_assign_status_result = $device_assign_status->execute()->fetchAll(PDO::FETCH_ASSOC);
  
  if(count($device_assign_status_result)>0){
  $device_ids = $device_assign_status_result[0]['deviceid'];
  }
  else
  $device_ids = '';
//display the auto populated dates
  $date = format_date(REQUEST_TIME, 'custom', 'Y-m-d');
  $start_date = date('Y-m-d', strtotime($date .' + 20 days'));
  $end_date = date('Y-m-d', strtotime($start_date .'+ 84  days'));
  $final_end_date = date('Y-m-d', strtotime($end_date));

  $node = node_load(arg(3));
  if($node->type=='screening_pack' || $node->type=='alivecor'){
    $eid = arg(1);
    $rep_values = rep_value($eid);
  }elseif($node->type=='meetings'){
   $rep_values = isset(get_meeting_info()->field_meeting_lead_rep[LANGUAGE_NONE])?get_meeting_info()->field_meeting_lead_rep[LANGUAGE_NONE][0]['uid']:rep_value();   
  }
  $options = rep_value(); 
  $gp_values = get_gp_name();
  $gp_id_value = get_gp_id();
  $gp_id = (int)$gp_id_value;
  $gp_name;

  foreach($gp_values as $key=>$val){
    $gp_name = $gp_values[$key]->field_registrant_title[LANGUAGE_NONE][0]['value'] . " " .
               $gp_values[$key]->field_registrant_name[LANGUAGE_NONE][0]['value'] . " " .
               $gp_values[$key]->field_registrant_surname[LANGUAGE_NONE][0]['value'];
    $email_id=$gp_values[$key]->field_registrant_email['und']['0']['value'];
  }
 if($node_val->type=='meetings'){
  $lead_rep_id = isset(get_meeting_info()->field_meeting_lead_rep[LANGUAGE_NONE])?get_meeting_info()->field_meeting_lead_rep[LANGUAGE_NONE][0]['uid']:'';  

  $supporting_rep_id = isset(get_meeting_info()->field_supporting_rep[LANGUAGE_NONE])?get_meeting_info()->field_supporting_rep[LANGUAGE_NONE][0]['uid']:'';  
}
  $form['represponsible'] = array(
    '#type' => 'select',
    '#title' => t('Rep Responsible'),
    '#default_value' => $rep_values,
    '#options' => $options,
   );
  $form['gpname'] = array(
    '#type' => 'hidden',
    '#title' => t('GP Name'),
    '#default_value' => $gp_name,
    '#size' => 255,
  );
  $form['gpid'] = array(
    '#type' => 'hidden',
    '#title' => t('GP ID'),
    '#default_value' => $gp_id,
    '#size' => 255,
  );
  $form['gp_email_id'] = array(
    '#type' => 'hidden',
    '#title' => t('Email Id'),
    '#default_value' => $email_id,
    '#size' => 255,
  );
  $form['startdate'] = array(
    '#type' => 'date_popup',
    '#title' => t('Loan start'),
    '#default_value' => $start_date,
    '#date_format' => 'd F Y',
    '#required' => true,
    '#attributes' =>array('placeholder' => t('Loan start')),
   );
  $form['enddate'] = array(
    '#type' => 'date_popup',
    '#title' => t('Loan end'),
    '#default_value' => $final_end_date,
    '#date_format' => 'd F Y',
    '#required' => true,
     '#attributes' =>array('placeholder' => t('Loan end')),
   );
	$form['deviceid'] = array(
    '#type' => 'textfield',
    '#title' => t('Device ID'),
    '#size' => 20,
    '#default_value' => $device_ids,
    '#required' => TRUE,
    '#attributes' => array('readonly' => 'readonly'),
    //'#default_value' =>$d_id,
	);
  $form['unique_val'] = array(
    '#type' => 'hidden',
    '#size' => 20,
    '#default_value' => rand(1,1000),
	);

  if($node_val->type=='meetings'){
    $terms = taxonomy_get_term_by_name('Meeting Only');
    $select_default_val=key($terms);
    $is_disabled=TRUE;
  }elseif($node_val->type=='screening_pack'){
     $terms = taxonomy_get_term_by_name('Screening Pack');
     $select_default_val=key($terms);
    $is_disabled=TRUE;
  }elseif($node_val->type=='alivecor'){
     $terms = taxonomy_get_term_by_name('alivecor');
     $select_default_val=key($terms);
    $is_disabled=TRUE;
  }

  $vocabulary = taxonomy_vocabulary_machine_name_load('loan_type');
  $tree = taxonomy_get_tree($vocabulary->vid);
  foreach ($tree as $item) {
    $options[$item->tid] = $item->name;
  }

  $form['loan_type'] = array(
    '#type' => 'select',
    '#title' => t('Loan Type'),
    '#default_value' => $select_default_val,
    '#options' => $options,
    '#required' => true,
    '#disabled'=>$is_disabled,
   );
  
	$form['address'] = array(
    '#type' => 'textarea',
    '#title' => t('Address'),
    '#size' => 250,
    '#required' => TRUE,
	);
  

	
  $form['meetingid'] = array(
    '#type' => 'hidden',
    '#title' => t('meeting ID'),
    '#default_value' => $meeting_id,
    '#size' => 255,
  );
  $form['nodeid'] = array(
    '#type' => 'hidden',
    '#title' => t('Node ID'),
    '#default_value' => $nid,
    '#size' => 255,
  );
  $form['assignstatus'] = array(
    '#type' => 'hidden',
    '#title' => t('Device Assign status'),
    '#default_value' => 1,
    '#size' => 255,
  );

$form['deliveredstatus'] = array(
    '#type' => 'hidden',
    '#title' => t('Device delivered status'),
    '#default_value' => 0,
    '#size' => 255,
  );
  
$form['returnstatus'] = array(
    '#type' => 'hidden',
    '#title' => t('Device return status'),
    '#default_value' => 0,
    '#size' => 255,
  );

$form['lead_rep_id'] = array(
    '#type' => 'hidden',
    '#title' => t('Lead representative id'),
    '#default_value' => $lead_rep_id,
    '#size' => 255,
  );

$form['supporting_rep_id'] = array(
    '#type' => 'hidden',
    '#title' => t('Supporting representative id'),
    '#default_value' => $supporting_rep_id,
    '#size' => 255,
  );

$form['submit'] = array(
		'#type' => 'submit',
		'#value' => 'Submit',
  );
  return $form;
}

/**
* Form Submit
*/
function add_device_rep_validate($form, &$form_state)
{
  
if(!isset($form['#node'])){
 $device_id_val = $form_state['values']['deviceid'];
  if($device_id_val == ''){
  form_set_error($device_id_val, t('All the devices has been assigned'));
  }  
  $query_gpdata = db_select('assigned_device', 'asd');
  $query_gpdata->fields('asd',array('gpid','node_type'))//SELECT the fields from node
      ->condition('asd.returnstatus','0','=')
      ->condition('asd.gp_email_id',$form_state['values']['gp_email_id'],'=');      
  $result_gpdata = $query_gpdata->execute();
  $registration_id = $result_gpdata->fetchObject();  

  if($registration_id !=''){
    if($registration_id->node_type =='screening_pack'){
        $msg=t(' has already been assigned an ALIVECOR screening device.');
      }elseif($registration_id->node_type=='alivecor'){
        $msg=t(' has already been assigned an ALIVECOR device.');
      }elseif($registration_id->node_type=='meetings'){
        $msg=t(' has already been assigned a device.');
      }
    form_set_error('gp_email_id',$form_state['values']['gp_email_id'].$msg);
  }
   $deliver_address=$form_state['values']['address'];  
}

if(isset($form['#node']) && ($form_state['values']['field_gp_email_id']['und']['0']['value']!='')){

   $nid=$form_state['values']['field_node_id']['und']['0']['value'];
   $node_val=node_load($nid);
   $gp_email_id=isset($form['#node'])?$form_state['values']['field_gp_email_id']['und']['0']['value']:$form_state['values']['gp_email_id'];
   $node_bundle=isset($node_val->field_screening_registration)?$node_val->field_screening_registration['und']['0']['registration_type']:$node_val->field_meeting_registration['und']['0']['registration_type'];

  $query_gpdata = db_select('field_data_field_registrant_email', 'reg');
  $query_gpdata->fields('reg',array('entity_id'))//SELECT the fields from node
      ->condition('reg.field_registrant_email_value',$gp_email_id,'=')
      ->condition('reg.bundle',$node_bundle,'=')
      ->orderBy('reg.entity_id', 'DESC');
  $result_gpdata = $query_gpdata->execute();
 
  $registration_id = $result_gpdata->fetchField();  
  $form_state['values']['field_gp_id'][LANGUAGE_NONE][0]['value'] = $registration_id; 
    $curr_mail = $form_state['node']->field_gp_email_id['und']['0']['value'];
    $change_mail = $form_state['values']['field_gp_email_id']['und']['0']['value'];
    $query_gpdevicedata = db_select('assigned_device', 'asd');
    $query_gpdevicedata->fields('asd',array('gpid','node_type'))
      ->condition('asd.returnstatus','0','=')
      ->condition('asd.gp_email_id',$form_state['values']['field_gp_email_id']['und']['0']['value'],'=');      
    $result_devicedata = $query_gpdevicedata->execute();
    $registration_device_id = $result_devicedata->fetchObject();  
    if($registration_device_id !='' && ($curr_mail!=$change_mail) ){
      if($registration_device_id->node_type =='screening_pack'){
        $msg=t(' has already been assigned an ALIVECOR screening device.');
        }elseif($registration_device_id->node_type=='alivecor'){
        $msg=t(' has already been assigned an ALIVECOR device.');
        }elseif($registration_device_id->node_type=='meetings'){
        $msg=t(' has already been assigned a device.');
        }
      form_set_error('gp_email_id',$form_state['values']['field_gp_email_id']['und']['0']['value'].$msg);
    }elseif($registration_id==''){     
      form_set_error('field_gp_email_id', t('Please enter a registred Email Id.'));    
    }
  }


}

function add_device_rep_submit($form, &$form_state) {
  watchdog('pfe_pip_meetings',"Entered submit function");
   $role = user_role_load_by_name('Warehouse');
    $uids = db_select('users_roles', 'ur')
        ->fields('ur', array('uid'))
        ->condition('ur.rid', $role->rid, '=')
        ->execute()
       ->fetchCol();
   $warehouse_info = user_load_multiple($uids);

   $warehouse_email=array();
   foreach($warehouse_info as $user_info){
          $warehouse_email[]=$user_info->mail;
   } 

   
  global $base_url;
	module_load_include('inc', 'pfe_pip_meetings', 'includes/meetings.functions');
	$user_id = isset($form['#node'])?$form['#node']->field_rep_responsible_id['und']['0']['value']:$form_state['values']['represponsible']; 

	$user_name =isset($form['#node'])?$form['#node']->field_rep_responsible_name['und']['0']['value']:$form['represponsible']['#options'][$user_id];
 
  $rep_info = user_load($user_id);
  $rep_mail = $rep_info->mail;
  //$warehouse_mail = $warehouse_info->mail;
  $rep_phone = $rep_info->field_phone[LANGUAGE_NONE][0]['value'];
  $url_val = url(current_path(), array('absolute' => TRUE));
  $val = explode("/",$url_val);
  $nid = isset($form['#node'])?$form['#node']->field_node_id['und']['0']['value']:$val[6];
  $node_val = node_load($nid);
  $meeting_id = $node_val->title;
  if($node_val->type=='meetings'){  
    if(isset($node_val->field_supporting_rep[LANGUAGE_NONE])){
  $user_id_supporting_rep = $node_val->field_supporting_rep[LANGUAGE_NONE][0]['uid'];
  $name = user_load($user_id_supporting_rep);
  $supporting_rep_name = $name->field_user_name[LANGUAGE_NONE][0]['value'];
  $supporting_rep_surname = $name->field_user_surname[LANGUAGE_NONE][0]['value'];
  $supporting_rep_phone = $name->field_phone[LANGUAGE_NONE][0]['value']; 
  $lead_rep_id =$node_val->field_meeting_lead_rep[LANGUAGE_NONE][0]['uid'];  
  $meeting_lead_rep_id=isset($form['#node'])?$lead_rep_id: $form['lead_rep_id']['#default_value'];
  $meeting_supporting_rep_id=isset($form['#node'])?$user_id_supporting_rep:$form['supporting_rep_id']['#default_value'];

}
 }elseif($node_val->type=='screening_pack'){
  $meeting_lead_rep_id='';
  $meeting_supporting_rep_id='';
 }


  $meeting_start_date=isset($form['#node'])?$form_state['values']['field_start_date']['und']['0']['value']:$form_state['values']['startdate'];
  $meeting_end_date=isset($form['#node'])?$form_state['values']['field_end_date']['und']['0']['value']:$form_state['values']['enddate'];
  $deviceid=isset($form['#node'])?$form_state['values']['field_device_id']['und']['0']['value']:$form_state['values']['deviceid'];
  $adderess=isset($form['#node'])?$form_state['values']['field_address']['und']['0']['value']:$form_state['values']['address'];
  $gpname=isset($form['#node'])?$form_state['values']['field_gp_name']['und']['0']['value']:$form['gpname']['#default_value'];
  $gpid=isset($form['#node'])?$form_state['values']['field_gp_id']['und']['0']['value']:$form['gpid']['#default_value'];
  $unique_val=isset($form['#node'])?$form_state['values']['field_unique_value']['und']['0']['value']:$form['unique_val']['#default_value'];

  $assignstatus=isset($form['#node'])?"1":$form['assignstatus']['#default_value'];
  $deliveredstatus=isset($form['#node'])?$form_state['values']['field_delivered_status']['und']['0']['value']:$form['deliveredstatus']['#default_value'];
  $returnstatus=isset($form['#node'])?$form_state['values']['field_return_status']['und']['0']['value']:$form['returnstatus']['#default_value'];

  $loan_type=isset($form['#node'])?$form_state['values']['field_loan_type']['und']['0']['tid']:$form_state['values']['loan_type'];
  $gp_email_id=isset($form['#node'])?$form_state['values']['field_gp_email_id']['und']['0']['value']:$form_state['values']['gp_email_id'];



if(!isset($form['#node'])){
  $add_device = db_insert('assigned_device')
    ->fields(array(
    'represponsible_id' => $user_id,
    'represponsible_name' => $user_name,
    'startdate' => $meeting_start_date,
    'enddate' => $meeting_end_date,
    'deviceid' => $deviceid,
    'address' => $adderess,
    'gpname' => $gpname,
    'gpid' => $gpid,
    'meetingid' => $meeting_id,
    'unique_val' => $unique_val,
    'nodeid' => $nid,
    'assignstatus' => $assignstatus,
    'deliveredstatus' => $deliveredstatus,
    'returnstatus' => $returnstatus,
    'lead_rep_id' => $meeting_lead_rep_id,
    'supporting_rep_id' => $meeting_supporting_rep_id,   
    'loan_type'=>$loan_type,
    'gp_email_id'=>$gp_email_id,
    'node_type' => $node_val->type,
  ))
  ->execute();
  }elseif(isset($form['#node'])){
     $add_device = db_update('assigned_device')
    ->fields(array(
    'represponsible_id' => $user_id,
    'represponsible_name' => $user_name,
    'startdate' => $meeting_start_date,
    'enddate' => $meeting_end_date,    
    'address' => $adderess,
    'gpname' => $gpname,
    'gpid' => $gpid,
    'meetingid' => $meeting_id,
    'unique_val' => $unique_val,
    'nodeid' => $nid,
    'assignstatus' => $assignstatus,
    'deliveredstatus' => $deliveredstatus,
    'returnstatus' => $returnstatus,
    'lead_rep_id' => $meeting_lead_rep_id,
    'supporting_rep_id' => $meeting_supporting_rep_id,
    'loan_type'=>$loan_type,
    'gp_email_id'=>$gp_email_id,
    'node_type' => $node_val->type,
  ))
    ->condition('deviceid',$deviceid,'=')  
  ->execute();

  }
  if(!isset($form['#node'])){
  //save as node
  $newnode = new stdClass();
  $newnode->type = "add_device";
  $newnode->title = "add-device".' '.$form_state['values']['deviceid'];
  $newnode->field_rep_responsible_id[LANGUAGE_NONE][0]['value'] = $user_id;
  $newnode->field_rep_responsible_name[LANGUAGE_NONE][0]['value'] = $user_name;
  $newnode->field_gp_name[LANGUAGE_NONE][0]['value'] = $form['gpname']['#default_value'];
  $newnode->field_unique_value[LANGUAGE_NONE][0]['value'] = $form['unique_val']['#default_value'];
  $newnode->field_gp_id[LANGUAGE_NONE][0]['value'] = $form['gpid']['#default_value'];
  $newnode->field_address[LANGUAGE_NONE][0]['value'] = $form_state['values']['address'];
  $newnode->field_start_date[LANGUAGE_NONE][0]['value'] = $form_state['values']['startdate'];
  $newnode->field_end_date[LANGUAGE_NONE][0]['value'] = $form_state['values']['enddate'];
  $newnode->field_device_id[LANGUAGE_NONE][0]['value'] = $form_state['values']['deviceid'];
  $newnode->field_meeting_id[LANGUAGE_NONE][0]['value'] = $meeting_id;
  $newnode->field_node_id[LANGUAGE_NONE][0]['value'] = $nid;
  $newnode->field_device_status[LANGUAGE_NONE][0]['value'] = $form['assignstatus']['#default_value'];
  $newnode->field_delivered_status[LANGUAGE_NONE][0]['value'] = $form['deliveredstatus']['#default_value'];
  $newnode->field_return_status[LANGUAGE_NONE][0]['value'] = $form['returnstatus']['#default_value'];
  $newnode->field_loan_type[LANGUAGE_NONE][0]['tid'] = $form_state['values']['loan_type'];
  $newnode->field_gp_email_id[LANGUAGE_NONE][0]['value'] = $form_state['values']['gp_email_id'];
 
  // Save the node
 node_save($newnode);
 }elseif(isset($form['#node'])){
  
  $updated_node = $form['#node'];
  $updated_node->field_gp_name['und']['0']['value']=$form_state['values']['field_gp_name']['und']['0']['value'];
  $updated_node->field_address['und']['0']['value']=$form_state['values']['field_address']['und']['0']['value'];
  $updated_node->field_device_id['und']['0']['value']=$form_state['values']['field_device_id']['und']['0']['value'];
  $updated_node->field_device_status['und']['0']['value']=$form_state['values']['field_device_status']['und']['0']['value'];
  $updated_node->field_gp_id['und']['0']['value']=$form_state['values']['field_gp_id']['und']['0']['value'];
  $updated_node->field_meeting_id['und']['0']['value']=$form_state['values']['field_meeting_id']['und']['0']['value'];
  $updated_node->field_node_id['und']['0']['value']=$form_state['values']['field_node_id']['und']['0']['value'];
  $updated_node->field_rep_responsible_id['und']['0']['value']=$form_state['values']['field_rep_responsible_id']['und']['0']['value'];
  $updated_node->field_rep_responsible_name['und']['0']['value']=$form_state['values']['field_rep_responsible_name']['und']['0']['value'];
  $updated_node->field_delivered_status['und']['0']['value']=$form_state['values']['field_delivered_status']['und']['0']['value'];
  $updated_node->field_return_status['und']['0']['value']=$form_state['values']['field_return_status']['und']['0']['value'];
  $updated_node->field_unique_value['und']['0']['value']=$form_state['values']['field_unique_value']['und']['0']['value'];
  $updated_node->field_start_date['und']['0']['value']=$form_state['values']['field_start_date']['und']['0']['value'];
  $updated_node->field_end_date['und']['0']['value']=$form_state['values']['field_end_date']['und']['0']['value'];
  $updated_node->field_loan_type['und']['0']['tid']=$form_state['values']['field_loan_type']['und']['0']['tid'];
  $updated_node->field_gp_email_id['und']['0']['value']=$form_state['values']['field_gp_email_id']['und']['0']['value'];
 
  node_save($updated_node);
 }
 $device_id = $form_state['values']['deviceid'];  
   $query_device_status = db_update('devices')
    ->fields(array('assignstatus' => '1'))
    ->condition('deviceid',$device_id)
    ->execute();
    
  watchdog('pfe_pip_meetings',"Node Save");
 
if(isset($form['#node'])){
  $query_gpdata = db_select('field_data_field_registrant_email', 'reg');
  $query_gpdata->fields('reg',array('entity_id'))//SELECT the fields from node
      ->condition('reg.field_registrant_email_value',$gp_email_id,'=')
      
      ->orderBy('entity_id', 'DESC');//ORDER BY created
      
  $result_gpdata = $query_gpdata->execute();
   $registration_id = $result_gpdata->fetchField();
     }else{
      $registration_id = $gpid;
     }
  // get values for the offer letter PDF
	
  $registration = registration_load_multiple(array($registration_id));
	$start_date = $meeting_start_date;
	$end_date = $meeting_end_date;
	$start_date_formatted = date("d F Y", strtotime($start_date));
	$end_date_formatted = date("d F Y", strtotime($end_date));
	foreach($registration as $key=>$value){
    $item['title'] = isset($form['#node'])?'':$value->field_registrant_title[LANGUAGE_NONE][0]['value'];
    $item['name'] = isset($form['#node'])?$gpname:$value->field_registrant_name[LANGUAGE_NONE][0]['value'];
    $item['surname'] = isset($form['#node'])?'':$value->field_registrant_surname[LANGUAGE_NONE][0]['value'];
    $item['email'] = $value->field_registrant_email[LANGUAGE_NONE][0]['value'];
    $item['address'] = $value->field_registrant_address[LANGUAGE_NONE][0]['value'];
    $item['organization'] = $value->field_registrant_organization[LANGUAGE_NONE][0]['value'];
    $item['phone'] = $value->field_registrant_phone[LANGUAGE_NONE][0]['value'];
    $item['fax'] = $value->field_registrant_fax[LANGUAGE_NONE][0]['value'];
    $item['postcode'] = $value->field_registrant_postcode[LANGUAGE_NONE][0]['value'];
    $item['suburb'] = $value->field_registrant_suburb[LANGUAGE_NONE][0]['value'];
    $item['state'] = $value->field_registrant_state[LANGUAGE_NONE][0]['value'];
    $item['start_date'] = $start_date_formatted;
    $item['end_date'] = $end_date_formatted;
    $item['rep_name'] = $user_name;
    $item['rep_phone'] = $rep_phone;
    $item['rep_mail'] = $rep_mail;
    $item['warehouse_mail']=$warehouse_email;
    $item['supporting_rep_name'] = $supporting_rep_name;
    $item['supporting_rep_surname'] = $supporting_rep_surname;
    $item['supporting_rep_phone'] = $supporting_rep_phone;
    $item['deviceid'] = isset($form_state['values']['deviceid'])?$form_state['values']['deviceid']:$form_state['values']['field_device_id']['und']['0']['value'];
    $item['node_type'] = $node_val->type;
	}

    watchdog('pfe_pip_meetings',"Before generate PDF");
    
    drupal_set_message("Form has been successfully submitted");  
    global $user;
    if(!in_array('administrator', array_values($user->roles))){
    // _pfe_document_upload_insert('offer_letter', $form_state['values']['deviceid']);
     _generate_pdf('offer_letter','offer-letter.pdf',$item, $gpid);
   }
   $current_url  = $_SERVER['REQUEST_URI'];
    $split_url = explode("/", $current_url);
    drupal_goto($split_url['3']."/".$split_url['4']);
    watchdog('pfe_pip_meetings',"After generate");
}

function rep_value($eid){
  if($eid){
    $query = db_select('field_data_field_author_uid','auid')->fields('auid',array('field_author_uid_value'));
    $query->condition('auid.entity_id', $eid,'=');
    $result = $query ->execute()->fetchAll(PDO::FETCH_ASSOC);
    $name = $result[0]['field_author_uid_value'];
  }else {
    $query = db_select('users','usr')->fields('usr',array('uid'));
            $query->innerJoin('users_roles','roles','usr.uid = roles.uid');
            $query->condition('roles.rid','8','=');
            $result = $query ->execute()->fetchAll(PDO::FETCH_ASSOC);
    $name = array();
    $surname = array();
    foreach($result as $key=>$vals)
    {
      foreach($vals as $key_uid=>$uid_vals){
        $users = user_load($uid_vals);
        $name[$uid_vals] = $users->field_user_name[LANGUAGE_NONE][0]['value'] . ' '. $users->field_user_surname[LANGUAGE_NONE][0]['value'];
      }
    }
  }
  return $name;
}

function get_gp_name(){
  $url_val = url(current_path(), array('absolute' => TRUE));
  $val = explode("/",$url_val);
  $registration_id = $val[4];
  $registration_values = registration_load_multiple(array($registration_id));
  return $registration_values;
}
function get_gp_id(){
  $url_val = url(current_path(), array('absolute' => TRUE));
  $val = explode("/",$url_val);
  $registration_id = $val[4];
  return $registration_id;
}
function get_meeting_info(){
  $url_val = url(current_path(), array('absolute' => TRUE));
  $val = explode("/",$url_val);
  $node_id = $val[6];
  $meeting_info = node_load($node_id);
  return $meeting_info;
}

/**
* Add device form
*/
function add_device($form, &$form_state) {
	$form['deviceid'] = array(
    '#type' => 'textfield',
    '#title' => t('Device ID'),
    '#size' => 20,
    '#required' => TRUE,
    //'#default_value' =>$d_id,
	);
  $form['assignstatus'] = array(
    '#type' => 'hidden',
    '#title' => t('Device Assign status'),
    '#default' => 0,
    '#size' => 5,
  );
  $form['submit'] = array(
		'#type' => 'submit',
		'#value' => 'Submit',
  );
  return $form;
}
/**
* Form Submit
*/
function add_device_submit($form, &$form_state) {
  watchdog('pfe_pip_meetings',"Entered Device table");
   $device = db_insert('devices')
    ->fields(array(
    'deviceid' => $form_state['values']['deviceid'],
    'assignstatus' => $form['assignstatus']['#default'],
  ))
  ->execute();
  drupal_set_message("Device is successfully added");
}

function add_device_validate($form, $form_state){

  $device_id_field_val = $form_state['values']['deviceid'];
  $deviceid_query = db_select('devices','d')->fields('d',array('deviceid'))->execute()->fetchAll(PDO::FETCH_ASSOC);
  $total_device_ids = array();
  foreach($deviceid_query as $key => $val){
    $total_device_ids[] = $val['deviceid']; 
  }
  if (in_array($device_id_field_val, $total_device_ids)){
      form_set_error('unique_device_id', 'Device id already exists.');
  }

}
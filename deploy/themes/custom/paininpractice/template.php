<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
/**
 * Implements theme_preprocess_page().
 */
function paininpractice_preprocess_page(&$variables) {
  if (isset($variables['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
    
  }
  
}

function paininpractice_preprocess_node(&$variables) {
  if($variables['type'] == 'meetings') {
 // echo "<pre>";print_r($variables['field_meeting_additional_rep']);exit;
    $created_timestamp = date('d F Y', $variables['created']);
    $created_user = user_load($variables['uid']); 
    $status['created_status'] = 'Created on ' . $created_timestamp . ' by ' . $created_user->name;
    $edited_timestamp = date('d F Y', $variables['changed']);
    $meeting_type = $variables['field_meeting_type'][0]['taxonomy_term'] -> name;
    $variables['meeting_type'] = $meeting_type;
    $edited_user = user_load($variables['revision_uid']);
    $status['edited_status'] = 'Last edited on ' . $edited_timestamp . ' by ' . $edited_user->name;
    $variables['meeting_status'] = implode(', ', $status);
    if(isset($variables['field_venue_address'][0]['safe_value']) && isset($variables['field_venue_city'][0]['safe_value'])){
    $variables['venue_details'] = $variables['field_venue_address'][0]['safe_value'] . ' , '
      . $variables['field_venue_city'][0]['safe_value'] . ', ' . $variables['field_venue_postcode'][0]['safe_value'];
     } 

    // $facilitator_id = $variables['field_facilitator_details'][0]['value'];
    // $facilitator_details['full_name'] = field_collection_item_load($facilitator_id)->field_facilitator_full_name[LANGUAGE_NONE][0]['safe_value'];
    // $facilitator_details['title'] = field_collection_item_load($facilitator_id)->field_facilitator_title[LANGUAGE_NONE][0]['safe_value'];
    
    foreach($variables['field_facilitator_details'] as $facilitators) {
      $facilitators_ids[] = $facilitators['value'];
    }
    $facilitators_details = field_collection_item_load_multiple($facilitators_ids);
    foreach($facilitators_details as $key => $value) {
      $facilitators = new stdClass();
      $facilitators->name_title  = $value->field_facilitator_title_name[LANGUAGE_NONE][0]['value'];
      $facilitators->full_name  = $value->field_facilitator_full_name[LANGUAGE_NONE][0]['value'];
      $facilitators->title  = $value->field_facilitator_title[LANGUAGE_NONE][0]['value'];
      $facilitators->organization  = $value->field_facilitator_organisation[LANGUAGE_NONE][0]['value'];
      $variables['facilitator_details'][] = $facilitators;
    }
//end time
      $meeting_time = $variables['field_meeting_time'][0]['value'];
      $term_id= $variables['field_meeting_type'][0]['tid'];
      $term_category = taxonomy_term_load($term_id);
      $meeting_type = $term_category->name;

      $add_time;
      if($meeting_type == '1 hour meeting'){
      $add_time = 1;
      }
      else{ 
      $add_time = 3;
      }
      $meeting_time_explode = explode(':',$meeting_time);
      //print_r($meeting_time_explode);die();
      $time_first = $meeting_time_explode[0];
      $last_time = $meeting_time_explode[1];
      $new_time = $time_first + $add_time;
      $end_time = implode(':', array($new_time, $last_time));
      //echo gettype($end_time);die();
      $end_time1 = STRING;
      $end_time1 = $end_time;
      if($end_time == '12:00am'){$end_time1 = '12:00pm';}
      if($end_time == '12:00pm'){$end_time1 = '12:00am';}
      if($end_time == '12:30am'){$end_time1 = '12:30pm';}
      if($end_time == '12:30pm'){$end_time1 = '12:30am';}
      if(($end_time == '13:00am') && ($meeting_time != '12:00am')){$end_time1 = '1:00pm';} elseif(($end_time == '13:00am') && ($meeting_time == '12:00am')) {$end_time1 = '1:00am';}
      if(($end_time == '13:00pm') && ($meeting_time != '12:00pm')){$end_time1 = '1:00am';} elseif(($end_time == '13:00pm') && ($meeting_time == '12:00pm')) {$end_time1 = '1:00pm';}
      if(($end_time == '13:30am')	&& ($meeting_time != '12:30am')){$end_time1 = '1:30pm';} elseif(($end_time == '13:30am') && ($meeting_time == '12:30am')) {$end_time1 = '1:30am';}
      if(($end_time == '13:30pm')	&& ($meeting_time != '12:30pm')){$end_time1 = '1:30am';} elseif(($end_time == '13:30pm') && ($meeting_time == '12:30pm')) {$end_time1 = '1:30pm';}
      if($end_time == '14:00am'){$end_time1 = '2:00pm';}
      if($end_time == '14:00pm'){$end_time1 = '2:00am';}
      if($end_time == '14:30am'){$end_time1 = '2:30pm';}
      if($end_time == '14:30pm'){$end_time1 = '2:30am';}
      if(($end_time == '15:00am')  && ($meeting_time != '12:00am')){$end_time1 = '3:00pm';}elseif(($end_time == '15:00am') && ($meeting_time == '12:00am')) {$end_time1 = '3:00am';}
      if(($end_time == '15:00pm')  && ($meeting_time != '12:00pm')){$end_time1 = '3:00am';}elseif(($end_time == '15:00pm') && ($meeting_time == '12:00pm')) {$end_time1 = '3:00pm';}
      if(($end_time == '15:30am')	 && ($meeting_time != '12:30am')){$end_time1 = '3:30pm';}elseif(($end_time == '15:30am') && ($meeting_time == '12:30am')) {$end_time1 = '3:30am';}
      if(($end_time == '15:30pm')	 && ($meeting_time != '12:30am')){$end_time1 = '3:30am';}elseif(($end_time == '15:30pm') && ($meeting_time == '12:30pm')) {$end_time1 = '3:30pm';}
         
        $variables['end_time'] = $end_time1;
        //print_r($variables['end_time']);die();
    
    foreach($variables['field_speaker_details'] as $speakers) {
      $speakers_ids[] = $speakers['value'];
    }
    $speaker_details = field_collection_item_load_multiple($speakers_ids);
    foreach($speaker_details as $key => $value) {
      $speakers = new stdClass();
      $speakers->name_title  = $value->field_speaker_title_name[LANGUAGE_NONE][0]['value'];
      $speakers->full_name  = $value->field_speaker_full_name[LANGUAGE_NONE][0]['value'];
      $speakers->title  = $value->field_speaker_title[LANGUAGE_NONE][0]['value'];
      $speakers->organization  = $value->field_speaker_organisation[LANGUAGE_NONE][0]['value'];
      $variables['speaker_details'][] = $speakers;
    }
    
      foreach($variables[field_meeting_additional_rep][und] as $speakers) {
      $speakers_ids[] = $speakers['value'];
    }
    
    
    foreach($variables['field_meeting_additional_rep'] as $reps) { 
      $rep = new stdClass();
      //$rep->name = $reps['user']->field_user_surname;
      $rep->name = $reps['user']->field_user_name[LANGUAGE_NONE][0]['safe_value'];
      $rep->phone = $reps['user']->field_phone[LANGUAGE_NONE][0]['safe_value'];
      $variables['additional_reps'][] = $rep;
    }
   // echo "<pre>";print_r($variables['additional_reps']);exit;
    $variables['edit_meeting_link'] = l('Edit Meeting', 'node/' . $variables['nid'] . '/edit');
    //$variables['cancel_meeting_link'] = l('Cancel Meeting', 'node/' . $variables['nid'] . '/cancel');
    $variables['send_reminder_meeting_link'] = l('Send Reminder', 'node/' . $variables['nid'] . '/reminder');
    $variables['register_meeting_link'] = l('Register GP', 'node/' . $variables['nid'] . '/register');
    $variables['download_invitation_meeting_link'] = l('Download Invitations', 'node/' . $variables['nid'] . '/download-invitations');
    $variables['download_agenda_meeting_link'] = l('Download Agenda', 'node/' . $variables['nid'] . '/download-agenda');
    $variables['back_meeting_link'] = l('Back To Meetings', 'view-meetings');
    //echo "<pre>";print_r($variables);exit;
  }
  
}

/**
 * Overrides theme_tableselect.
 *
 * Changes:
 *   Add ability to disable sticky header.
 */
function paininpractice_tableselect($variables) {
  $element = $variables['element'];
  $rows = array();
  $header = $element['#header'];
  if (!empty($element['#options'])) {
    // Generate a table row for each selectable item in #options.
    foreach (element_children($element) as $key) {
      $row = array();
      $row['data'] = array();
      if (isset($element['#options'][$key]['#attributes'])) {
        $row += $element['#options'][$key]['#attributes'];
      }
      // Render the checkbox / radio element.
      //$row['data'][] = drupal_render($element[$key]);

      // As theme_table only maps header and row columns by order, create the
      // correct order by iterating over the header fields.
      foreach ($element['#header'] as $fieldname => $title) {
        if($title == 'Attended') {
          $row['data'][] = drupal_render($element[$key]);
        }
        else {
          $row['data'][] = $element['#options'][$key][$fieldname];
        }
      }
      $rows[] = $row;
    }
    // Add an empty header or a "Select all" checkbox to provide room for the
    // checkboxes/radios in the first table column.
    if ($element['#js_select']) {
      // Add a "Select all" checkbox.
      drupal_add_js('misc/tableselect.js');
      array_unshift($header, array('class' => array('select-all')));
    }
    else {
      // Add an empty header when radio buttons are displayed or a "Select all"
      // checkbox is not desired.
      //array_unshift($header, '');
    }
  }
  return theme('table', array(
    'header'     => $header,
    'rows'       => $rows,
    'empty'      => $element['#empty'],
    'sticky'     => isset($element['#sticky']) ? $element['#sticky'] : TRUE,
    'attributes' => $element['#attributes'],
  ));
}

function paininpractice_form_alter( &$form, &$form_state, $form_id )
{
    if ( in_array( $form_id, array( 'user_login_block') )  || in_array( $form_id, array( 'user_login') ))
    {
        $form['name']['#attributes']['class'] = array('grid-4', 'alpha');
        $form['pass']['#attributes']['class'] = array('grid-4', 'alpha');
    }
}
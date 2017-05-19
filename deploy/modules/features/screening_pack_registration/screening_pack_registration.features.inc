<?php
/**
 * @file
 * screening_pack_registration.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function screening_pack_registration_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_validation" && $api == "default_field_validation_rules") {
    return array("version" => "2");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function screening_pack_registration_node_info() {
  $items = array(
    'screening_pack' => array(
      'name' => t('screening pack'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

/**
 * Implements hook_default_registration_type().
 */
function screening_pack_registration_default_registration_type() {
  $items = array();
  $items['screening_pack_registration'] = entity_import('registration_type', '{
    "name" : "screening_pack_registration",
    "label" : "screening pack registration",
    "locked" : "0",
    "default_state" : "complete",
    "weight" : "0",
    "data" : { "held_expire" : "1", "held_expire_state" : "canceled" }
  }');
  return $items;
}

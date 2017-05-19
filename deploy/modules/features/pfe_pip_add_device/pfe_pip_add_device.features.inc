<?php
/**
 * @file
 * pfe_pip_add_device.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function pfe_pip_add_device_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function pfe_pip_add_device_node_info() {
  $items = array(
    'add_device' => array(
      'name' => t('Add Device'),
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

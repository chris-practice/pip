<?php
/**
 * @file
 * gp_list.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function gp_list_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function gp_list_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

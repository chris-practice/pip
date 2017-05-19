<?php
/**
 * @file
 * gp_list.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function gp_list_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_devices:devices-status.
  $menu_links['main-menu_devices:devices-status'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'devices-status',
    'router_path' => 'devices-status',
    'link_title' => 'Devices',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'alter' => TRUE,
      'identifier' => 'main-menu_devices:devices-status',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Devices');

  return $menu_links;
}

<?php
/**
 * @file
 * screening_pack_registration.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function screening_pack_registration_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_screening-pack:node/1143.
  $menu_links['main-menu_screening-pack:node/1143'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'node/1143',
    'router_path' => 'node/%',
    'link_title' => 'Screening Pack',
    'options' => array(
      'attributes' => array(),
      'alter' => TRUE,
      'identifier' => 'main-menu_screening-pack:node/1143',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -49,
    'customized' => 1,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Screening Pack');

  return $menu_links;
}

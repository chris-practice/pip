<?php
/**
 * @file
 * gp_list.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function gp_list_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create field_registrant_terms'.
  $permissions['create field_registrant_terms'] = array(
    'name' => 'create field_registrant_terms',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'General Practitioner' => 'General Practitioner',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'guest' => 'guest',
    ),
    'module' => 'field_permissions',
  );

  // Exported permission: 'edit field_registrant_terms'.
  $permissions['edit field_registrant_terms'] = array(
    'name' => 'edit field_registrant_terms',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
    ),
    'module' => 'field_permissions',
  );

  // Exported permission: 'edit own field_registrant_terms'.
  $permissions['edit own field_registrant_terms'] = array(
    'name' => 'edit own field_registrant_terms',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'General Practitioner' => 'General Practitioner',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'guest' => 'guest',
    ),
    'module' => 'field_permissions',
  );

  // Exported permission: 'ui export certificate form'.
  $permissions['ui export certificate form'] = array(
    'name' => 'ui export certificate form',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Regional Business Manager' => 'Pfizer or BMS Regional Business Manager',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
    ),
    'module' => 'pfe_pip_login',
  );

  // Exported permission: 'view field_registrant_terms'.
  $permissions['view field_registrant_terms'] = array(
    'name' => 'view field_registrant_terms',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
    ),
    'module' => 'field_permissions',
  );

  // Exported permission: 'view own field_registrant_terms'.
  $permissions['view own field_registrant_terms'] = array(
    'name' => 'view own field_registrant_terms',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'General Practitioner' => 'General Practitioner',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'guest' => 'guest',
    ),
    'module' => 'field_permissions',
  );

  return $permissions;
}

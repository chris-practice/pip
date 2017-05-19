<?php
/**
 * @file
 * screening_pack_permission.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function screening_pack_permission_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer own screening_pack_registration registration'.
  $permissions['administer own screening_pack_registration registration'] = array(
    'name' => 'administer own screening_pack_registration registration',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'administer screening_pack_registration registration'.
  $permissions['administer screening_pack_registration registration'] = array(
    'name' => 'administer screening_pack_registration registration',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'create screening_pack content'.
  $permissions['create screening_pack content'] = array(
    'name' => 'create screening_pack content',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'create screening_pack_registration registration'.
  $permissions['create screening_pack_registration registration'] = array(
    'name' => 'create screening_pack_registration registration',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'create screening_pack_registration registration other anonymous'.
  $permissions['create screening_pack_registration registration other anonymous'] = array(
    'name' => 'create screening_pack_registration registration other anonymous',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Regional Business Manager' => 'Pfizer or BMS Regional Business Manager',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'create screening_pack_registration registration other users'.
  $permissions['create screening_pack_registration registration other users'] = array(
    'name' => 'create screening_pack_registration registration other users',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'create screening_pack_registration registration self'.
  $permissions['create screening_pack_registration registration self'] = array(
    'name' => 'create screening_pack_registration registration self',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'delete any screening_pack content'.
  $permissions['delete any screening_pack content'] = array(
    'name' => 'delete any screening_pack content',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any screening_pack_registration registration'.
  $permissions['delete any screening_pack_registration registration'] = array(
    'name' => 'delete any screening_pack_registration registration',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'delete own screening_pack content'.
  $permissions['delete own screening_pack content'] = array(
    'name' => 'delete own screening_pack content',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own screening_pack_registration registration'.
  $permissions['delete own screening_pack_registration registration'] = array(
    'name' => 'delete own screening_pack_registration registration',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'edit any screening_pack content'.
  $permissions['edit any screening_pack content'] = array(
    'name' => 'edit any screening_pack content',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own screening_pack content'.
  $permissions['edit own screening_pack content'] = array(
    'name' => 'edit own screening_pack content',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit screening_pack_registration registration state'.
  $permissions['edit screening_pack_registration registration state'] = array(
    'name' => 'edit screening_pack_registration registration state',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'update any screening_pack_registration registration'.
  $permissions['update any screening_pack_registration registration'] = array(
    'name' => 'update any screening_pack_registration registration',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'update own screening_pack_registration registration'.
  $permissions['update own screening_pack_registration registration'] = array(
    'name' => 'update own screening_pack_registration registration',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'view own screening_pack_registration registration'.
  $permissions['view own screening_pack_registration registration'] = array(
    'name' => 'view own screening_pack_registration registration',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  // Exported permission: 'view screening_pack_registration registration'.
  $permissions['view screening_pack_registration registration'] = array(
    'name' => 'view screening_pack_registration registration',
    'roles' => array(
      'BMS Head Office / Pfizer Admin' => 'BMS Head Office / Pfizer Admin',
      'Pfizer or BMS Representative' => 'Pfizer or BMS Representative',
      'Swordfish Media Admin' => 'Swordfish Media Admin',
      'Warehouse' => 'Warehouse',
      'administrator' => 'administrator',
    ),
    'module' => 'registration',
  );

  return $permissions;
}

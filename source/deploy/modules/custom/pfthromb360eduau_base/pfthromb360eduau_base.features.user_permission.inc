<?php
/**
 * @file
 * pfthromb360eduau_base.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function pfthromb360eduau_base_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer menu'.
  $permissions['administer menu'] = array(
    'name' => 'administer menu',
    'roles' => array(
      'deploy user' => 'deploy user',
    ),
    'module' => 'menu',
  );

  // Exported permission: 'administer nodes'.
  $permissions['administer nodes'] = array(
    'name' => 'administer nodes',
    'roles' => array(
      'deploy user' => 'deploy user',
    ),
    'module' => 'node',
  );

  // Exported permission: 'administer taxonomy'.
  $permissions['administer taxonomy'] = array(
    'name' => 'administer taxonomy',
    'roles' => array(
      'deploy user' => 'deploy user',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: 'administer users'.
  $permissions['administer users'] = array(
    'name' => 'administer users',
    'roles' => array(
      'deploy user' => 'deploy user',
    ),
    'module' => 'user',
  );

  return $permissions;
}

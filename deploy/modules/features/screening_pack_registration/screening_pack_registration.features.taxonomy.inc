<?php
/**
 * @file
 * screening_pack_registration.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function screening_pack_registration_taxonomy_default_vocabularies() {
  return array(
    'loan_type' => array(
      'name' => 'Loan Type',
      'machine_name' => 'loan_type',
      'description' => 'Device loan type.',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}

<?php
/**
 * @file
 * screening_pack_registration.default_field_validation_rules.inc
 */

/**
 * Implements hook_default_field_validation_rule().
 */
function screening_pack_registration_default_field_validation_rule() {
  $export = array();

  $rule = new stdClass();
  $rule->disabled = FALSE; /* Edit this to true to make a default rule disabled initially */
  $rule->api_version = 2;
  $rule->rulename = 'Length';
  $rule->name = 'length_reg';
  $rule->field_name = 'field_registrant_fax';
  $rule->col = 'value';
  $rule->entity_type = 'registration';
  $rule->bundle = 'screening_pack_registration';
  $rule->validator = 'field_validation_length_validator';
  $rule->settings = array(
    'min' => '',
    'max' => '10',
    'bypass' => 0,
    'roles' => array(
      1 => 0,
      2 => 0,
      4 => 0,
      3 => 0,
      5 => 0,
      6 => 0,
      7 => 0,
      8 => 0,
      9 => 0,
      10 => 0,
      11 => 0,
      16 => 0,
    ),
    'errors' => 0,
    'condition' => 0,
    'condition_wrapper' => array(
      'condition_field' => '',
      'condition_operator' => 'equals',
      'condition_value' => '',
    ),
  );
  $rule->error_message = 'Enter valid Fax Number';
  $export['length_reg'] = $rule;

  $rule = new stdClass();
  $rule->disabled = FALSE; /* Edit this to true to make a default rule disabled initially */
  $rule->api_version = 2;
  $rule->rulename = 'Name max chars';
  $rule->name = 'name_max_chars_reg';
  $rule->field_name = 'field_registrant_name';
  $rule->col = 'value';
  $rule->entity_type = 'registration';
  $rule->bundle = 'screening_pack_registration';
  $rule->validator = 'field_validation_length_validator';
  $rule->settings = array(
    'min' => '',
    'max' => '25',
    'bypass' => 0,
    'roles' => array(
      1 => 0,
      2 => 0,
      4 => 0,
      3 => 0,
      5 => 0,
      6 => 0,
      7 => 0,
      8 => 0,
      9 => 0,
      10 => 0,
      11 => 0,
      16 => 0,
    ),
    'errors' => 0,
    'condition' => 0,
    'condition_wrapper' => array(
      'condition_field' => '',
      'condition_operator' => 'equals',
      'condition_value' => '',
    ),
  );
  $rule->error_message = 'Please enter valid name';
  $export['name_max_chars_reg'] = $rule;

  $rule = new stdClass();
  $rule->disabled = FALSE; /* Edit this to true to make a default rule disabled initially */
  $rule->api_version = 2;
  $rule->rulename = 'Name only chars';
  $rule->name = 'name_only_chars_reg';
  $rule->field_name = 'field_registrant_name';
  $rule->col = 'value';
  $rule->entity_type = 'registration';
  $rule->bundle = 'screening_pack_registration';
  $rule->validator = 'field_validation_regex_validator';
  $rule->settings = array(
    'data' => '[a-z A-Z]',
    'bypass' => 0,
    'roles' => array(
      1 => 0,
      2 => 0,
      4 => 0,
      3 => 0,
      5 => 0,
      6 => 0,
      7 => 0,
      8 => 0,
      9 => 0,
      10 => 0,
      11 => 0,
      16 => 0,
    ),
    'errors' => 0,
    'condition' => 0,
    'condition_wrapper' => array(
      'condition_field' => '',
      'condition_operator' => 'equals',
      'condition_value' => '',
    ),
  );
  $rule->error_message = 'Please enter valid name';
  $export['name_only_chars_reg'] = $rule;

  $rule = new stdClass();
  $rule->disabled = FALSE; /* Edit this to true to make a default rule disabled initially */
  $rule->api_version = 2;
  $rule->rulename = 'Numeric values fax';
  $rule->name = 'numeric_values_fax_reg';
  $rule->field_name = 'field_registrant_fax';
  $rule->col = 'value';
  $rule->entity_type = 'registration';
  $rule->bundle = 'screening_pack_registration';
  $rule->validator = 'field_validation_regex_validator';
  $rule->settings = array(
    'data' => '^[\\s\\d]*$',
    'bypass' => 0,
    'roles' => array(
      1 => 0,
      2 => 0,
      4 => 0,
      3 => 0,
      5 => 0,
      6 => 0,
      7 => 0,
      8 => 0,
      9 => 0,
      10 => 0,
      11 => 0,
      16 => 0,
    ),
    'errors' => 0,
    'condition' => 0,
    'condition_wrapper' => array(
      'condition_field' => '',
      'condition_operator' => 'equals',
      'condition_value' => '',
    ),
  );
  $rule->error_message = 'Please enter valid fax number.';
  $export['numeric_values_fax_reg'] = $rule;

  $rule = new stdClass();
  $rule->disabled = FALSE; /* Edit this to true to make a default rule disabled initially */
  $rule->api_version = 2;
  $rule->rulename = 'phone validation range';
  $rule->name = 'phone_validation_range_reg';
  $rule->field_name = 'field_registrant_phone';
  $rule->col = 'value';
  $rule->entity_type = 'registration';
  $rule->bundle = 'screening_pack_registration';
  $rule->validator = 'field_validation_length_validator';
  $rule->settings = array(
    'min' => '10',
    'max' => '12',
    'bypass' => 0,
    'roles' => array(
      1 => 0,
      2 => 0,
      4 => 0,
      3 => 0,
      5 => 0,
      6 => 0,
      7 => 0,
      8 => 0,
      9 => 0,
      10 => 0,
      11 => 0,
      16 => 0,
    ),
    'errors' => 0,
    'condition' => 0,
    'condition_wrapper' => array(
      'condition_field' => '',
      'condition_operator' => 'equals',
      'condition_value' => '',
    ),
  );
  $rule->error_message = 'Enter valid phone number';
  $export['phone_validation_range_reg'] = $rule;

  $rule = new stdClass();
  $rule->disabled = FALSE; /* Edit this to true to make a default rule disabled initially */
  $rule->api_version = 2;
  $rule->rulename = 'phone validation';
  $rule->name = 'phone_validation_reg';
  $rule->field_name = 'field_registrant_phone';
  $rule->col = 'value';
  $rule->entity_type = 'registration';
  $rule->bundle = 'screening_pack_registration';
  $rule->validator = 'field_validation_regex_validator';
  $rule->settings = array(
    'data' => '^[\\s\\d]*$',
    'bypass' => 0,
    'roles' => array(
      1 => 0,
      2 => 0,
      4 => 0,
      3 => 0,
      5 => 0,
      6 => 0,
      7 => 0,
      8 => 0,
      9 => 0,
      10 => 0,
      11 => 0,
      16 => 0,
    ),
    'errors' => 0,
    'condition' => 0,
    'condition_wrapper' => array(
      'condition_field' => '',
      'condition_operator' => 'equals',
      'condition_value' => '',
    ),
  );
  $rule->error_message = 'Enter valid phone number';
  $export['phone_validation_reg'] = $rule;

  $rule = new stdClass();
  $rule->disabled = FALSE; /* Edit this to true to make a default rule disabled initially */
  $rule->api_version = 2;
  $rule->rulename = 'surname max chars';
  $rule->name = 'surname_max_chars_reg';
  $rule->field_name = 'field_registrant_surname';
  $rule->col = 'value';
  $rule->entity_type = 'registration';
  $rule->bundle = 'screening_pack_registration';
  $rule->validator = 'field_validation_length_validator';
  $rule->settings = array(
    'min' => '',
    'max' => '25',
    'bypass' => 0,
    'roles' => array(
      1 => 0,
      2 => 0,
      4 => 0,
      3 => 0,
      5 => 0,
      6 => 0,
      7 => 0,
      8 => 0,
      9 => 0,
      10 => 0,
      11 => 0,
      16 => 0,
    ),
    'errors' => 0,
    'condition' => 0,
    'condition_wrapper' => array(
      'condition_field' => '',
      'condition_operator' => 'equals',
      'condition_value' => '',
    ),
  );
  $rule->error_message = 'Please enter valid surname';
  $export['surname_max_chars_reg'] = $rule;

  $rule = new stdClass();
  $rule->disabled = FALSE; /* Edit this to true to make a default rule disabled initially */
  $rule->api_version = 2;
  $rule->rulename = 'Surname only chars';
  $rule->name = 'surname_only_chars_reg';
  $rule->field_name = 'field_registrant_surname';
  $rule->col = 'value';
  $rule->entity_type = 'registration';
  $rule->bundle = 'screening_pack_registration';
  $rule->validator = 'field_validation_regex_validator';
  $rule->settings = array(
    'data' => '[a-z A-Z]',
    'bypass' => 0,
    'roles' => array(
      1 => 0,
      2 => 0,
      4 => 0,
      3 => 0,
      5 => 0,
      6 => 0,
      7 => 0,
      8 => 0,
      9 => 0,
      10 => 0,
      11 => 0,
      16 => 0,
    ),
    'errors' => 0,
    'condition' => 0,
    'condition_wrapper' => array(
      'condition_field' => '',
      'condition_operator' => 'equals',
      'condition_value' => '',
    ),
  );
  $rule->error_message = 'Please enter valid surname';
  $export['surname_only_chars_reg'] = $rule;

  return $export;
}

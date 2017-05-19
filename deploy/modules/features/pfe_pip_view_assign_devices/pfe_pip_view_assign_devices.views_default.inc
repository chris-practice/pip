<?php
/**
 * @file
 * pfe_pip_view_assign_devices.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function pfe_pip_view_assign_devices_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'view_assign_devices';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'view assign devices';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'view assign devices';
  $handler->display->display_options['css_class'] = 'add-device';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Field: Content: Device ID */
  $handler->display->display_options['fields']['field_device_id']['id'] = 'field_device_id';
  $handler->display->display_options['fields']['field_device_id']['table'] = 'field_data_field_device_id';
  $handler->display->display_options['fields']['field_device_id']['field'] = 'field_device_id';
  /* Field: Content: GP Name */
  $handler->display->display_options['fields']['field_gp_name']['id'] = 'field_gp_name';
  $handler->display->display_options['fields']['field_gp_name']['table'] = 'field_data_field_gp_name';
  $handler->display->display_options['fields']['field_gp_name']['field'] = 'field_gp_name';
  $handler->display->display_options['fields']['field_gp_name']['label'] = 'Name';
  /* Field: Content: Address */
  $handler->display->display_options['fields']['field_address']['id'] = 'field_address';
  $handler->display->display_options['fields']['field_address']['table'] = 'field_data_field_address';
  $handler->display->display_options['fields']['field_address']['field'] = 'field_address';
  $handler->display->display_options['fields']['field_address']['label'] = 'Delivery address';
  /* Field: Content: Start Date */
  $handler->display->display_options['fields']['field_start_date']['id'] = 'field_start_date';
  $handler->display->display_options['fields']['field_start_date']['table'] = 'field_data_field_start_date';
  $handler->display->display_options['fields']['field_start_date']['field'] = 'field_start_date';
  $handler->display->display_options['fields']['field_start_date']['label'] = 'Loan start';
  /* Field: Content: End Date */
  $handler->display->display_options['fields']['field_end_date']['id'] = 'field_end_date';
  $handler->display->display_options['fields']['field_end_date']['table'] = 'field_data_field_end_date';
  $handler->display->display_options['fields']['field_end_date']['field'] = 'field_end_date';
  $handler->display->display_options['fields']['field_end_date']['label'] = 'Loan end';
  /* Field: Content: node id */
  $handler->display->display_options['fields']['field_node_id']['id'] = 'field_node_id';
  $handler->display->display_options['fields']['field_node_id']['table'] = 'field_data_field_node_id';
  $handler->display->display_options['fields']['field_node_id']['field'] = 'field_node_id';
  $handler->display->display_options['fields']['field_node_id']['label'] = '';
  $handler->display->display_options['fields']['field_node_id']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_node_id']['element_label_colon'] = FALSE;
  /* Field: Bulk operations: Content */
  $handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['table'] = 'node';
  $handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_type'] = '1';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['enable_select_all_pages'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['row_clickable'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['force_single'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['entity_load_capacity'] = '10';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_operations'] = array(
    'action::my_application_reset_action' => array(
      'selected' => 1,
      'postpone_processing' => 0,
      'skip_confirmation' => 1,
      'override_label' => 0,
      'label' => '',
    ),
  );
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: node id (field_node_id) */
  $handler->display->display_options['arguments']['field_node_id_value']['id'] = 'field_node_id_value';
  $handler->display->display_options['arguments']['field_node_id_value']['table'] = 'field_data_field_node_id';
  $handler->display->display_options['arguments']['field_node_id_value']['field'] = 'field_node_id_value';
  $handler->display->display_options['arguments']['field_node_id_value']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_node_id_value']['default_argument_type'] = 'raw';
  $handler->display->display_options['arguments']['field_node_id_value']['default_argument_options']['index'] = '1';
  $handler->display->display_options['arguments']['field_node_id_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_node_id_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_node_id_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_node_id_value']['limit'] = '0';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'add_device' => 'add_device',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'meeting_view_device');
  $export['view_assign_devices'] = $view;

  return $export;
}

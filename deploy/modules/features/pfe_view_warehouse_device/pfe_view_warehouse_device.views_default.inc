<?php
/**
 * @file
 * pfe_view_warehouse_device.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function pfe_view_warehouse_device_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'warehouse_device_report';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'warehouse device report';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['css_class'] = 'add-device';
  $handler->display->display_options['use_ajax'] = TRUE;
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    11 => '11',
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['row_class'] = 'return-details';
  $handler->display->display_options['style_options']['columns'] = array(
    'field_device_id' => 'field_device_id',
    'title' => 'title',
    'field_gp_name' => 'field_gp_name',
    'field_address' => 'field_address',
    'field_start_date' => 'field_start_date',
    'field_end_date' => 'field_end_date',
    'field_delivered_status' => 'field_delivered_status',
    'field_return_status' => 'field_return_status',
    'views_bulk_operations' => 'views_bulk_operations',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'field_device_id' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_gp_name' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_address' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_start_date' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_end_date' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_delivered_status' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_return_status' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'views_bulk_operations' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<input type="checkbox" name="device" value="Live"> Live
  <input type="checkbox" name="device" value="Overdue">Overdue';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  /* Field: Content: Unique Value */
  $handler->display->display_options['fields']['field_unique_value']['id'] = 'field_unique_value';
  $handler->display->display_options['fields']['field_unique_value']['table'] = 'field_data_field_unique_value';
  $handler->display->display_options['fields']['field_unique_value']['field'] = 'field_unique_value';
  $handler->display->display_options['fields']['field_unique_value']['label'] = '';
  $handler->display->display_options['fields']['field_unique_value']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_unique_value']['element_label_colon'] = FALSE;
  /* Field: Content: Device ID */
  $handler->display->display_options['fields']['field_device_id']['id'] = 'field_device_id';
  $handler->display->display_options['fields']['field_device_id']['table'] = 'field_data_field_device_id';
  $handler->display->display_options['fields']['field_device_id']['field'] = 'field_device_id';
  $handler->display->display_options['fields']['field_device_id']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_device_id']['element_label_colon'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: GP Name */
  $handler->display->display_options['fields']['field_gp_name']['id'] = 'field_gp_name';
  $handler->display->display_options['fields']['field_gp_name']['table'] = 'field_data_field_gp_name';
  $handler->display->display_options['fields']['field_gp_name']['field'] = 'field_gp_name';
  $handler->display->display_options['fields']['field_gp_name']['element_label_colon'] = FALSE;
  /* Field: Content: Address */
  $handler->display->display_options['fields']['field_address']['id'] = 'field_address';
  $handler->display->display_options['fields']['field_address']['table'] = 'field_data_field_address';
  $handler->display->display_options['fields']['field_address']['field'] = 'field_address';
  $handler->display->display_options['fields']['field_address']['label'] = 'Delivery Address';
  $handler->display->display_options['fields']['field_address']['element_label_colon'] = FALSE;
  /* Field: Content: Start Date */
  $handler->display->display_options['fields']['field_start_date']['id'] = 'field_start_date';
  $handler->display->display_options['fields']['field_start_date']['table'] = 'field_data_field_start_date';
  $handler->display->display_options['fields']['field_start_date']['field'] = 'field_start_date';
  $handler->display->display_options['fields']['field_start_date']['label'] = 'Loan Start';
  /* Field: Content: End Date */
  $handler->display->display_options['fields']['field_end_date']['id'] = 'field_end_date';
  $handler->display->display_options['fields']['field_end_date']['table'] = 'field_data_field_end_date';
  $handler->display->display_options['fields']['field_end_date']['field'] = 'field_end_date';
  $handler->display->display_options['fields']['field_end_date']['label'] = 'Loan End';
  $handler->display->display_options['fields']['field_end_date']['element_label_colon'] = FALSE;
  /* Field: Content: delivered status */
  $handler->display->display_options['fields']['field_delivered_status']['id'] = 'field_delivered_status';
  $handler->display->display_options['fields']['field_delivered_status']['table'] = 'field_data_field_delivered_status';
  $handler->display->display_options['fields']['field_delivered_status']['field'] = 'field_delivered_status';
  $handler->display->display_options['fields']['field_delivered_status']['label'] = 'Delivered Confirmed';
  $handler->display->display_options['fields']['field_delivered_status']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_delivered_status']['alter']['text'] = '<span deliveredstatus = "[field_delivered_status]" ></span>';
  /* Field: Content: return status */
  $handler->display->display_options['fields']['field_return_status']['id'] = 'field_return_status';
  $handler->display->display_options['fields']['field_return_status']['table'] = 'field_data_field_return_status';
  $handler->display->display_options['fields']['field_return_status']['field'] = 'field_return_status';
  $handler->display->display_options['fields']['field_return_status']['label'] = 'Return Confirmed';
  $handler->display->display_options['fields']['field_return_status']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_return_status']['alter']['text'] = '<span returnstatus = "[field_return_status]" ></span>';
  /* Field: Bulk operations: Content */
  $handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['table'] = 'node';
  $handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
  $handler->display->display_options['fields']['views_bulk_operations']['label'] = '';
  $handler->display->display_options['fields']['views_bulk_operations']['element_class'] = 'bulk-operation-checkbox';
  $handler->display->display_options['fields']['views_bulk_operations']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_type'] = '1';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['enable_select_all_pages'] = 1;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['row_clickable'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['force_single'] = 0;
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['entity_load_capacity'] = '10';
  $handler->display->display_options['fields']['views_bulk_operations']['vbo_operations'] = array(
    'action::hidenone_set_return_device' => array(
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
  /* Filter criterion: Content: Device ID (field_device_id) */
  $handler->display->display_options['filters']['field_device_id_value']['id'] = 'field_device_id_value';
  $handler->display->display_options['filters']['field_device_id_value']['table'] = 'field_data_field_device_id';
  $handler->display->display_options['filters']['field_device_id_value']['field'] = 'field_device_id_value';
  $handler->display->display_options['filters']['field_device_id_value']['operator'] = 'word';
  $handler->display->display_options['filters']['field_device_id_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_device_id_value']['expose']['operator_id'] = 'field_device_id_value_op';
  $handler->display->display_options['filters']['field_device_id_value']['expose']['label'] = 'Enter Device ID';
  $handler->display->display_options['filters']['field_device_id_value']['expose']['operator'] = 'field_device_id_value_op';
  $handler->display->display_options['filters']['field_device_id_value']['expose']['identifier'] = 'field_device_id_value';
  $handler->display->display_options['filters']['field_device_id_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
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
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block_1');
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
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
  /* Filter criterion: Content: Device ID (field_device_id) */
  $handler->display->display_options['filters']['field_device_id_value']['id'] = 'field_device_id_value';
  $handler->display->display_options['filters']['field_device_id_value']['table'] = 'field_data_field_device_id';
  $handler->display->display_options['filters']['field_device_id_value']['field'] = 'field_device_id_value';
  $handler->display->display_options['filters']['field_device_id_value']['operator'] = 'word';
  $handler->display->display_options['filters']['field_device_id_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_device_id_value']['expose']['operator_id'] = 'field_device_id_value_op';
  $handler->display->display_options['filters']['field_device_id_value']['expose']['label'] = 'Device ID';
  $handler->display->display_options['filters']['field_device_id_value']['expose']['operator'] = 'field_device_id_value_op';
  $handler->display->display_options['filters']['field_device_id_value']['expose']['identifier'] = 'field_device_id_value';
  $handler->display->display_options['filters']['field_device_id_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
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
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->display->display_options['path'] = 'devices';
  $export['warehouse_device_report'] = $view;

  return $export;
}

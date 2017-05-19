<?php
/**
 * @file
 * gp_list.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function gp_list_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'view_gp_list';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'registration';
  $view->human_name = 'View GP List';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'View GP List';
  $handler->display->display_options['css_class'] = 'registered-gps-operations ';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    4 => '4',
    6 => '6',
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['quantity'] = '9';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'registration_id' => 'registration_id',
    'field_registrant_title' => 'field_registrant_title',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'registration_id' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_registrant_title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Relationship: Registration: Registration to Content */
  $handler->display->display_options['relationships']['registration_related_node']['id'] = 'registration_related_node';
  $handler->display->display_options['relationships']['registration_related_node']['table'] = 'registration';
  $handler->display->display_options['relationships']['registration_related_node']['field'] = 'registration_related_node';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['relationship'] = 'registration_related_node';
  $handler->display->display_options['fields']['title']['label'] = 'Meeting No.';
  /* Field: Registration: Title */
  $handler->display->display_options['fields']['field_registrant_title']['id'] = 'field_registrant_title';
  $handler->display->display_options['fields']['field_registrant_title']['table'] = 'field_data_field_registrant_title';
  $handler->display->display_options['fields']['field_registrant_title']['field'] = 'field_registrant_title';
  $handler->display->display_options['fields']['field_registrant_title']['label'] = 'GP Title';
  $handler->display->display_options['fields']['field_registrant_title']['element_label_colon'] = FALSE;
  /* Field: Registration: Name* */
  $handler->display->display_options['fields']['field_registrant_name']['id'] = 'field_registrant_name';
  $handler->display->display_options['fields']['field_registrant_name']['table'] = 'field_data_field_registrant_name';
  $handler->display->display_options['fields']['field_registrant_name']['field'] = 'field_registrant_name';
  $handler->display->display_options['fields']['field_registrant_name']['label'] = 'GP Name';
  $handler->display->display_options['fields']['field_registrant_name']['element_label_colon'] = FALSE;
  /* Field: Registration: Surname* */
  $handler->display->display_options['fields']['field_registrant_surname']['id'] = 'field_registrant_surname';
  $handler->display->display_options['fields']['field_registrant_surname']['table'] = 'field_data_field_registrant_surname';
  $handler->display->display_options['fields']['field_registrant_surname']['field'] = 'field_registrant_surname';
  $handler->display->display_options['fields']['field_registrant_surname']['label'] = 'GP Surname';
  $handler->display->display_options['fields']['field_registrant_surname']['element_label_colon'] = FALSE;
  /* Field: Registration: QI&CPD or ACRRM* */
  $handler->display->display_options['fields']['field_qi_cpd_or_acrrm']['id'] = 'field_qi_cpd_or_acrrm';
  $handler->display->display_options['fields']['field_qi_cpd_or_acrrm']['table'] = 'field_data_field_qi_cpd_or_acrrm';
  $handler->display->display_options['fields']['field_qi_cpd_or_acrrm']['field'] = 'field_qi_cpd_or_acrrm';
  $handler->display->display_options['fields']['field_qi_cpd_or_acrrm']['label'] = 'QI&CPD or ACRRM';
  $handler->display->display_options['fields']['field_qi_cpd_or_acrrm']['element_label_colon'] = FALSE;
  /* Field: Registration: Email */
  $handler->display->display_options['fields']['field_registrant_email']['id'] = 'field_registrant_email';
  $handler->display->display_options['fields']['field_registrant_email']['table'] = 'field_data_field_registrant_email';
  $handler->display->display_options['fields']['field_registrant_email']['field'] = 'field_registrant_email';
  $handler->display->display_options['fields']['field_registrant_email']['label'] = 'GP Email';
  $handler->display->display_options['fields']['field_registrant_email']['element_label_colon'] = FALSE;
  /* Field: Registration: Terms & Conditions */
  $handler->display->display_options['fields']['field_registrant_terms']['id'] = 'field_registrant_terms';
  $handler->display->display_options['fields']['field_registrant_terms']['table'] = 'field_data_field_registrant_terms';
  $handler->display->display_options['fields']['field_registrant_terms']['field'] = 'field_registrant_terms';
  $handler->display->display_options['fields']['field_registrant_terms']['label'] = 'Consent';
  $handler->display->display_options['fields']['field_registrant_terms']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_registrant_terms']['alter']['text'] = 'Yes';
  $handler->display->display_options['fields']['field_registrant_terms']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_registrant_terms']['empty'] = 'No';
  $handler->display->display_options['fields']['field_registrant_terms']['delta_offset'] = '0';

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'view-gp-list';

  /* Display: Data export */
  $handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_xls';
  $handler->display->display_options['style_options']['provide_file'] = 1;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['path'] = 'view-gp-list1';
  $handler->display->display_options['displays'] = array(
    'page' => 'page',
    'default' => 0,
  );
  $handler->display->display_options['segment_size'] = '100';
  $export['view_gp_list'] = $view;

  return $export;
}

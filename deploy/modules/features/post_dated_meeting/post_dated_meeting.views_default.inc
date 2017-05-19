<?php
/**
 * @file
 * post_dated_meeting.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function post_dated_meeting_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'view_post_dated_meeting';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'view post dated meeting';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'view post dated meeting';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['label'] = '';
  $handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
  /* Field: Content: Meeting Date* */
  $handler->display->display_options['fields']['field_meeting_date']['id'] = 'field_meeting_date';
  $handler->display->display_options['fields']['field_meeting_date']['table'] = 'field_data_field_meeting_date';
  $handler->display->display_options['fields']['field_meeting_date']['field'] = 'field_meeting_date';
  $handler->display->display_options['fields']['field_meeting_date']['label'] = '';
  $handler->display->display_options['fields']['field_meeting_date']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_meeting_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_meeting_date']['settings'] = array(
    'format_type' => 'long',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_remaining_days' => 0,
    'show_repeat_rule' => 'show',
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
    'meetings' => 'meetings',
  );
  /* Filter criterion: Content: Meeting Status (field_meeting_status) */
  $handler->display->display_options['filters']['field_meeting_status_value']['id'] = 'field_meeting_status_value';
  $handler->display->display_options['filters']['field_meeting_status_value']['table'] = 'field_data_field_meeting_status';
  $handler->display->display_options['filters']['field_meeting_status_value']['field'] = 'field_meeting_status_value';
  $handler->display->display_options['filters']['field_meeting_status_value']['value'] = array(
    'upcoming' => 'upcoming',
    'edit' => 'edit',
  );
  /* Filter criterion: Content: Meeting Date* (field_meeting_date) */
  $handler->display->display_options['filters']['field_meeting_date_value']['id'] = 'field_meeting_date_value';
  $handler->display->display_options['filters']['field_meeting_date_value']['table'] = 'field_data_field_meeting_date';
  $handler->display->display_options['filters']['field_meeting_date_value']['field'] = 'field_meeting_date_value';
  $handler->display->display_options['filters']['field_meeting_date_value']['operator'] = '<';
  $handler->display->display_options['filters']['field_meeting_date_value']['default_date'] = 'now +1 day';
  $handler->display->display_options['filters']['field_meeting_date_value']['year_range'] = '-10:+0';

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'post_dated_meeting');
  $export['view_post_dated_meeting'] = $view;

  return $export;
}

<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Article" it would result in "node-article". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. page, article, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
 //echo "<pre>";print_r($content['field_meeting_date']['#items'][0]['value']);exit;
?>
<article<?php print $attributes; ?>>
  <?php if (!empty($title_prefix) || !empty($title_suffix) || !$page): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </header>
  <?php endif; ?>

  <?php if ($display_submitted): ?>
    <footer class="node__submitted">
     <!--  <?php //print $user_picture; ?>
      <p class="submitted">Status: <?php //print $meeting_status; ?></p> -->
    </footer>
  <?php endif; ?>
  <div class="meeting-detail-wrapper grid-9 alpha">
  <div class="meeting-details">
    <div <?php print $content_attributes; ?>>
      <div class="">
        <div class="field field--name-field-meeting-id field--label-inline clearfix">
          <div class="field__items">
            <div class="field__item odd">
              <!-- <?php print $title; ?> -->
              <p>This section of Thrombo 360 allows you to register a screening management pack to a target doctor. The screening management packs contain the Alivecor screening device, patient and doctor resources. Note: you must complete the required compliance paperwork for the Alivecor device. Please click on the “register for screening pack” to start the process.</p>
<p>If you have any questions please contact your sales manager or Kimberley Henderson.</p>

            </div>
          </div>
        </div>        
        <!--<div class="field field--name-field-meeting-title field--label-inline clearfix">
          <div class="field__label">
            Meeting :&nbsp;
          </div>
          <div class="field__items">
            <div class="field__item even">
              <?php //print render($content['field_meeting_title']); ?>
            </div>
          </div>
        </div>-->
       
      </div>
    </div>
     
    <?php
      // We hide the comments and links now so that we can render them later.
      //hide($content['comments']);
      //hide($content['links']);
      //print render($content);
    ?>
    <div class="field field--name-field-meeting_duration meeting-duration field--label-inline clearfix">
    <!--  <?php //if($variables['meeting_type'] == "3 hour meeting"): ?>
     <div class="meet-duration">This event includes 2 hours of educational content and dinner.</div>
     <?php //elseif($variables['meeting_type'] == "1 hour meeting"): ?>
     <!--<div class="meet-duration">This event includes 1 hour of educational content with lunch.</div>-->
      <?php //endif ?>
    </div>
    </div>
  </div>
  <div class="meeting-callouts grid-3 omega">
  
    <!--<div>
      <?php //print $variables['edit_meeting_link']; ?>
    </div>
    <div>
      <?php //print render($content['links']['flag']); ?>
    </div>
    <div>
      <?php //print $variables['send_reminder_meeting_link']; ?>
    </div>
    <div>
      <?php //print $variables['register_meeting_link']; ?>
    </div>
    <div>
      <?php //print $variables['download_invitation_meeting_link']; ?>
    </div>
    <div>
      <?php //print $variables['download_agenda_meeting_link']; ?>
    </div>
    <div>
      <?php //print $variables['back_meeting_link']; ?>
    </div>
  -->
    <?php $block = module_invoke('pfe_pip_meetings', 'block_view', 'meetings_operations');
    print render($block['content']); ?>
  </div>
  </div>
  <div>
    <?php 
    global $user;
    //if(!in_array('General Practitioner', array_values($user->roles)) && !in_array('guest', array_values($user->roles))){   
    print '<h1>' . t('Registered GPs') . '</h1>';
    $block1 = module_invoke('pfe_pip_meetings', 'block_view', 'registered_gps');
    print render($block1['content']);
    //}
    ?>
  </div>
  <?php
  /* global $user;
    if(!in_array('General Practitioner', array_values($user->roles)) && !in_array('guest', array_values($user->roles))){ 
    if(in_array('BMS Head Office / Pfizer Admin',array_values($user->roles))){
      print views_embed_view('admin_device_status_view', 'block_1');
    }elseif(in_array('Pfizer or BMS Representative',array_values($user->roles))){
      print views_embed_view('rep_assign_devices', 'block');
    }   
    }   */ 
  ?>
  <!--<?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>-->
</article>
<div><?php print t('Dear ') . $items['rep_name'] . ' ' . $items['rep_surname'] . t(','); ?></div><br>
<div><?php print t('Your meeting has been created in the Thrombo 360 website as follows:'); ?></div>
<div></div>
<div><strong><?php print t('Date: '); ?></strong><?php print $items['meeting_date']; ?></div> 
<div><strong><?php print t('Time: '); ?></strong><?php print $items['meeting_time']; ?></div> 
<div><strong><?php print t('Venue: '); ?></strong><?php print $items['meeting_venue']; ?></div> 
<div><strong><?php print t('Address: '); ?></strong><?php print $items['meeting_address']; ?></div> 
<div><strong><?php print t('Activity: '); ?></strong><?php print $items['meeting_activity']; ?></div> 
<div><strong><?php print t('Your speaker: '); ?></strong>

<?php foreach($items['speaker_details'] as $key => $speaker) : ?>
<span><?php print $speaker->name_title . '  ' . $speaker->full_name . '--' . $speaker->title.', '.$speaker->organization; ?></span>
<?php endforeach; ?>

</div> 
<div><strong><?php print t('Login to the Thrombo 360 website to:'); ?> 
</strong><br/> 
<?php 
  if($items['role'] == 'lead_or_add') {
    print t('- View full meeting details'); 
  }
  else if($items['role'] == 'support_rep'){
    print t('- View full meeting details');
  }
  else if($items['role'] == 'admin_or_ho'){
    print t('- View and edit meeting details');
  }
?>
</br>&nbsp;
<?php print t('- Register GPs<br/>&nbsp;- Download meeting materials'); ?></div>
<div>&nbsp;</div>
<div>Your Sales Support person will send you a proof of the draft invite for you to approve before printing. Please review and advise on any changes you would like. </div>
<div>&nbsp;</div>
<div><?php print t('Kind regards,'); ?></div>
<div><?php print t('Thrombo 360');?></div>
<div>
  <img src="https://www.thrombo360education.com.au/sites/default/themes/custom/paininpractice/images/logo.png"/>
  <img src ="https://www.thrombo360education.com.au/sites/default/themes/custom/paininpractice/images/bristol-myers-logo.jpg"/>
</div>


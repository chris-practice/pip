<div><strong><?php print t('Dear ') . $items['gp_name'] . ' ' . $items['gp_surname'] . t(','); ?></strong></div>
<div>&nbsp;</div>
<div><?php print t('Thank you for registering for the following meeting tomorrow :  ');?></div>
<div><?php print t('Date: ').$items['meeting_date'];?></div>
<div><?php print t('Start time: ').$items['meeting_time'];?></div>
<div><?php print t('Venue: ').$items['venue_name'];?></div>
<div><?php print t('Address: ').$items['venue_address'].t(',').$items['venue_city'];?></div>
<div><?php print t('Activity: ').$items['meeting_activity'];?></div>

<div><?php print t('We look forward to seeing you at this interactive educational experience.');?></div>
<div><?php print t('If you have any questions, please contact your ELIQUIS representatives,'); ?></div>
<div><?php print $items['lead_first_name'].' '.$items['lead_last_name'] .t('(').$items['lead_phone_number'].t(')');
 	if(isset($items['support_first_name'])){ 
 print t(' and ').$items['support_first_name'].' '.$items['support_last_name'] .
 t('(').$items['support_phone_number'].t(').'); } ;?></div>
<div><?php print t('Kind regards,'); ?></div>
<div><?php print t('Thrombo 360');?></div>
<div>&nbsp;</div>
<div>
  <img src="https://www.thrombo360education.com.au/sites/default/themes/custom/paininpractice/images/logo.png"/>
  <img src ="https://www.thrombo360education.com.au/sites/default/themes/custom/paininpractice/images/bristol-myers-logo.jpg"/>
</div>

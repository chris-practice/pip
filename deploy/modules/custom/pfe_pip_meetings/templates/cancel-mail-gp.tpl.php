<div><strong><?php print t('Dear ') . $items['gp_name'] . ' ' . $items['gp_surname'] . t(','); ?></strong></div>
<div>&nbsp;</div>
<div><?php print t('Thrombo 360 meeting you have registered for on ').$items['meeting_date'].' at '.$items['meeting_time'].' has been cancelled due to unforeseen circumstances.'; ?></div>
<div><?php print t('Your ELIQUIS representatives,').$items['lead_first_name']." ".$items['lead_last_name']."(".$items['lead_phone_number'].")";?>
<?php if(isset($items['support_first_name'])){
print t(" and ").$items['support_first_name']." ".$items['support_last_name'] 
."(".$items['support_phone_number'].")";
}?></div>
<div><?php print t("will be in contact to discuss future educational activities");?> </div>
<div>&nbsp;</div>
<div><?php print t('Kind regards,'); ?></div>
<div><?php print t('Thrombo 360');?></div>
<div>&nbsp;</div>
<div>
  <img src="https://www.thrombo360education.com.au/sites/default/themes/custom/paininpractice/images/logo.png"/>
  <img src ="https://www.thrombo360education.com.au/sites/default/themes/custom/paininpractice/images/bristol-myers-logo.jpg"/>
</div>

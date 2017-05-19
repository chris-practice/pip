<div><strong><?php print t('Dear ') . $items['name'] . ' ' . $items['surname'] . t(','); ?></strong></div>
<div>&nbsp;</div>
<div><?php print t('Thank you for your interest in the AF Screening program.'); ?></div>
<div><?php print t('We have received your application and assigned an AliveCor device to you.'); ?></div>
<div><?php print t('The Letter of Offer detailing the loan details is attached for your reference. Your ELIQUIS representatives, '); ?><strong><?php print $items['rep_name']. ' ' . $items['rep_phone'] ; ?></strong>
<?php if(isset($items['supporting_rep_name'])){
print t(" and ").$items['supporting_rep_name']." ".$items['supporting_rep_surname']."(".$items['supporting_rep_phone'].")";
} print t(', will be in touch with you shortly in regards to delivery of the device and associated support materials for you and your patients.'); ?></div>
<div>&nbsp;</div>
<div><?php print t('Kind regards,'); ?></div>
<div><?php print t('Thrombo 360');?></div>
<div>&nbsp;</div>
<div>
  <img src="https://www.thrombo360education.com.au/sites/default/themes/custom/paininpractice/images/logo.png"/>
  <img src ="https://www.thrombo360education.com.au/sites/default/themes/custom/paininpractice/images/bristol-myers-logo.jpg"/>
</div>
<div>
The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at <a href="http://www.bmsa.com.au/">www.bmsa.com.au</a> or <a href="http://www.pfizer.com.au/">www.pfizer.com.au</a>. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde NSW 2114 or email <a href="mailto:privacyofficer.australia@pfizer.com">privacyofficer.australia@pfizer.com</a>, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, Mulgrave VIC 3170).
</div>
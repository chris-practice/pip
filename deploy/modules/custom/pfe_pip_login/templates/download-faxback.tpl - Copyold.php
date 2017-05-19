<?php global $base_url; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>index</title>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<style type="text/css">
   <!--
   @page :left {
      margin-left: 0;
      margin-right: 0;
      margin-top: 0;
      margin-bottom: 0;
   }

   @page :right {
      margin-left: 0;
      margin-right: 0;
      margin-top: 0;
      margin-bottom: 0;
   }
   -->   
</style>
</head>
<body style="margin:0;padding:0;">
  <link href="sites/default/themes/custom/paininpractice/css/pdf-download-faxback.css" rel="stylesheet" type="text/css" />
  <div class="af_pdf">
  <div id ="page-1" class="page-1" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/bg2_1.jpg) no-repeat center top;">
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Experience is the<br>
  &nbsp;teacher of all things<span>"</span></div>
  <div class="author">JULIUS CAESAR</div>
  </div>
  <div class="pink-bar">  
   <div class="orange-title">EXPERIENCE &ndash; REDEFINE &ndash; MASTER</div>
  <div class="white-title">ANTICOAGUATION MANAGEMENT IN PRIMARY CARE<br>
  Your invitation to The Thrombo 360 Experience </div>
    </div>
    <div class="whiteBg">
    <div class="tbl-wrapper"> 
    <table width="100%">
    <tr>
    <td valign="top" style="width:50%;">    
		<div class="date"><span class="tbl-label">Date: </span><span class="info"><?php print $items['date']; ?></span></div>    
		<div class="time">
			<span class="tbl-label">Start time: </span><span class="info"><?php print $items['time']; ?></span>
			<span class="tbl-label">Finish time: </span><span class="info"><?php print $items['end_time']; ?></span>
		</div>
		<div class="venue"><span class="tbl-label">Venue: </span><span class="info"><?php print $items['venue']; ?></span></div>
		<div><span class="tbl-label">Details: </span><span class="info"><?php print $items['venue_address']; if (isset($items['venue_city'])) print  ', ' ; print $items['venue_city']; if (isset($items['venue_postcode'])) print  ', ' ; print $items['venue_postcode'];?></span></div>
		<div class="rvsp-dead"><span class="tbl-label">RSVP deadline: </span><span class="info"><?php print date("d/m/Y", strtotime($items['rsvp'])); ?></span></div>
    </td>
    <td valign="top" style="width:50%;">
		<div><span class="tbl-label">Your representatives: </span><br>
		<span class="info"><?php print $items['rep'] . ' ' . $items['rep_surname']; if(isset($items['rep_number'])) print  ', ' ; print $items['rep_number']; ?>
		</span><span class="info"><?php print $items['rep_support'] . ' ' .  $items['rep_support_surname'] ;if(isset($items['rep_number_support'])) print  ', ' ; print $items['rep_number_support']; ?>
		</span>
		 <?php foreach($items['user_add_fields'] as $key => $addrep) : ?>
		  <br><span class="info"><?php print $addrep->name . ' ' . $addrep->surname; if(isset($addrep->phone_number)) print  ', ' ; print $addrep->phone_number ?></span>
		  <?php endforeach; ?></div>
		 <?php if (!empty($items['facilitators_details'])): ?>
		 <div class="facilitators">
			<span class="tbl-label">Your facilitators: </span>
				<?php foreach($items['facilitators_details'] as $key => $facilitator) : ?>
					<br><span class="info"><?php print $facilitator->name_title .'  '. $facilitator->full_name; if(isset($facilitator->title)) print  ', ' ; print $facilitator->title; if(isset($facilitator->organization)) print  ', ' ; print $facilitator->organization ?></span>
		  <?php endforeach; ?>
		 </div>
		<?php endif ?>
    </td>
    </tr>
    </table>
    </div>
	<p class="event-include" style="margin-top:5px; margin-bottom:5px;">This event includes 2 hour of education with dinner</p>
    <div class="maroon-bg"><div class="register-text">Please fax this registration form back to <?php if(isset($items['fax_number'])){ echo $items['fax_number']; } ?> </div></div>
    <div class="tbl-wrapper" style="margin-right:3px;"> 
	<table width="700px;margin-left:-10px;margin-top:-10px;">
    <tr >
		<td style="width:218px"><span class="tbl-label-blank" style="width:100px">First Name: </span><span class="border-btm">____________________</span></td>
		<td style="width:288px"><span class="tbl-label-blank" style="width:80px">Last Name: </span><span class="border-btm">_____________________________</span></td>
		<td style="width:200px"><span class="tbl-label-blank"style="width:120px">QI&CPD number: </span><span class="border-btm">______________</span></td>
	</tr>
	<tr>
		<td width="218px"><span class="tbl-label-blank" style="width:50px">Phone: </span><span class="border-btm">_______________________</span></td>
		<td width="288px"><span class="tbl-label-blank" style="width:50px">Fax: </span><span class="border-btm">_________________________________</span></td>
		<td width="200px"><span class="tbl-label-blank" style="width:50px">Email: </span><span class="border-btm">_____________________</span></td>
	</tr>
	<tr>
		<td colspan="3" width="520px"><span class="tbl-label-blank" style="width:120px">Organisation: </span><span class="border-btm"> __________________________________________________________________________________</span></td>
	</tr>
	<tr>
		<td colspan="3" width="520px"><span class="tbl-label-blank" style="width:150px">Street Address:  </span><span class="border-btm">_________________________________________________________________________________</span></td>
	</tr>
	<tr>
		<td width="300" colspan="2"><span class="tbl-label-blank" style="width:50px">Suburb: </span><span class="border-btm">___________________________________________________________</span></td>
		<td width="180"><span class="tbl-label-blank" style="width:150px">State and Postcode: </span><span class="border-btm">____________</span></td>
	</tr>
	<tr>
		<td colspan="3" width="450"><span class="tbl-label-blank" style="width:250px">Dietary Requirements: </span><span class="border-btm">_____________________________________________________________________________</span></td>
	</tr>
	</table>
    </div>
	<div class="btm-text">
	<p>The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb
Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 4, 50 Berry
Street, North Sydney NSW 2060. © Copyright 2015 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-30-025/08/15.
Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code
of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated.</p>
	<br>
	<p>The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details
on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at
www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy
of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either
company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court,
Mulgrave, VIC, 3170). PP-ELI-AUS-0268. ELI-0903/01-16.</p>
    </div>
    <div><img src="sites/default/themes/custom/paininpractice/images/bg1-btm_new.jpg" /></div>
    </div>
  </body>
</html>

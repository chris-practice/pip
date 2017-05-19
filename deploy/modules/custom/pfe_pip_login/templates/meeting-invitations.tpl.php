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
   <?php  //echo '<pre>'; print_r($items); die;
      // foreach($items['facilitators_details'] as $facilitators) {
    // $facilitators_ids[] = $facilitators; 
  // }
  // foreach($facilitators as $key => $value) {
   // print_r($value);
  // }die();
  // //print_r( $facilitators_ids);
 ?>
  </head>
  <body style="margin:0;padding:0;">
  <!--Meeting Type AF One Hour meeting----->
  <?php if($items['ac_type']  == "AF" && $items['meeting_time'] == "1 hour meeting"): ?>
  <!--<div><p>One hr meeting AF</p></div>-->
  <link href="sites/default/themes/custom/paininpractice/css/pdf-af-1hr.css" rel="stylesheet" type="text/css" />
  <div class="af_pdf">
  <div id ="page-1" class="page-1" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/bg1-updated.jpg) no-repeat center top;">
  
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Life is about creating<br>
  &nbsp;and living experiences<br>
  &nbsp;that are worth sharing<span>"</span></div>
  <div class="author">STEVE JOBS</div>
  </div>
  <div class="pink-bar">  
   <div class="orange-title">EXPERIENCE - REDEFINE - MASTER</div>
  <div class="white-title">ANTICOAGULATION MANAGEMENT IN PRIMARY CARE<br>
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
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    <span class="tbl-label">Finish time: </span><span class="info"><?php print $items['end_time']; ?></span>
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    </div>

    
    <div class="venue"><span class="tbl-label">Venue: </span><span class="info"><?php print $items['venue']; ?></span></div>    
    <!--<div><span class="tbl-label">Venue details: </span><span class="info"><?php// print $items['venue_address'];?>&nbsp;<?php//print $items['venue_city'] ;?>&nbsp;<?php// print $items['venue_postcode'];?></span></div>-->
    <div><span class="tbl-label">Details: </span><span class="info"><?php print $items['venue_address']; if (isset($items['venue_city'])) print  ', ' ; print $items['venue_city']; if (isset($items['venue_postcode'])) print  ', ' ; print $items['venue_postcode'];?></span></div>
      
    <div class="rvsp-dead"><span class="tbl-label">RSVP deadline: </span><span class="info"><?php print date("d/m/Y", strtotime($items['rsvp'])); ?></span></div>
    
    
    </td>
    <td valign="top" style="width:50%;">
     <div><span class="tbl-label">Your Representatives: </span><br>
    <span class="info"><?php print $items['rep'] . ' ' . $items['rep_surname']; if(isset($items['rep_number'])) print  ', ' ; print $items['rep_number']; ?>
    </span><span class="info"><?php print $items['rep_support'] . ' ' .  $items['rep_support_surname'] ;if(isset($items['rep_number_support'])) print  ', ' ; print $items['rep_number_support']; ?>
    </span>
     <?php foreach($items['user_add_fields'] as $key => $addrep) : ?>
      <br><span class="info"><?php print $addrep->name . ' ' . $addrep->surname; if(isset($addrep->phone_number)) print  ', ' ; print $addrep->phone_number ?></span>
      <?php endforeach; ?></div>
     <?php if (!empty($items['facilitators_details'])): ?>
     <div class="facilitators"><span class="tbl-label">Your Facilitators: </span>
      <?php foreach($items['facilitators_details'] as $key => $facilitator) : ?>
      <br><span class="info"><?php print $facilitator->name_title .'  '. $facilitator->full_name; if(isset($facilitator->title)) print  ', ' ; print $facilitator->title; if(isset($facilitator->organization)) print  ', ' ; print $facilitator->organization ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif ?>    
    </td>
    </tr>
    </table>
    </div>
  <p class="event-include" style="margin-top:5px; margin-bottom:5px;">This event includes 1 hour of education</p>
    <div class="orange-text" style="margin-top:15px; margin-bottom:0; line-height:18px;">Gain insights into the best-practice management and treatment of NVAF<br>
Discover how new agents put the management of NVAF right in your hands<br>
Ask questions and gain expert answers and insights</div>
    <div class="maroon-text work-closely" style="line-height:18px; margin-top:10px; margin-bottom:0;">Work closely with your peers to discuss solutions to clinical challenges with a leading expert in the management of thrombosis, and update your practical skills in this challenging therapeutic area.</div>
    <table class="mobile-icon-img"><tr>
      <td width="35"><img src="sites/default/themes/custom/paininpractice/images/left-mob-img.jpg" width="25" /></td><td class="mob-text">This meeting incorporates online polling, Q&A and case review<br>Delegates are asked to bring their tablet or smartphone to interact</td><td width="65"><img src="sites/default/themes/custom/paininpractice/images/right-mob-img.jpg" width="50" /></td></tr></table>
  <div class="maroon-bg"><div class="register-text">REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</div>
     <div class="white-text margin0">To register to attend the Thrombo 360 Experience,<br>please visit www.thrombo360education.com.au and quote  <span class="meeting-id"><span class="meeting-id-title"> Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span></div>
    </div>
    <br>
    <div><img src="sites/default/themes/custom/paininpractice/images/bg1-btm.jpg" /></div>
    </div></div>
    
    
      <div id ="page-2" class="page-2" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg2_1hr.jpg);background-repeat: no-repeat;background-position: center top;">
  <div class="title-wrapper">
  <div class="banner-title2"><span>"</span>Knowledge gained through<br>
&nbsp;experience is far superior and<br>
&nbsp;many times more useful than<br>
&nbsp;bookish knowledge.<span>"</span></div>
  <div class="author">MAHATMA GANDHI</div>
  </div>
  <div class="meeting-agenda">Meeting agenda: 1 hour of educational content</div>
  <div class="whiteBg">
    <div class="session-tbl-wrapper"> 
    <table>
    <tr>
    <th>TIME</th>
    <th>SESSION DETAILS</th>    
    </tr>
    <tr>
    <td class="tbl-label-1">25 mins</td>
    <td class="info"><div class="td-orange-title">The Eliquis Experience</div>
<div class="td-blck-text">The pivotal data supporting Eliquis and its use in the clinical setting</div></td>    
    </tr>
    <tr>
    <td class="tbl-label-2">25 mins</td>
    <td class="info"><div class="td-orange-title">Know your NVAF patient</div>
<div class="td-blck-text">Meet Carlo, a patient presenting with NVAF, understand the perspectives and challenges that face the GP in<br>
clinical practice and understand the emerging uses of NOACs – and Eliquis – in treating NVAF</div></td>
    </tr>
    <tr>
    <td class="tbl-label-3">10 mins</td>
    <td class="info"><div class="td-orange-title">Screening for AF and the AliveCor mobile ECG</div>
<div class="td-blck-text">The rationale for AF screening with a hands-on demonstration of this mobile smartphone device</div></td>
    </tr>

    </table>
    </div>
    
    <div class="mobile-ECG-wrapper">
    <div class="mobile-ECG-orange-text">Using the AliveCor mobile ECG</div>
    <div class="mobile-ECG-text">The educational program will include an introduction to the AliveCor Mobile electrocardiogram (ECG), a single-channel cardiac event recorder that attaches to most iOS and Android devices and enables you to record and review ECGs anywhere, anytime.</div>
</div>
    <div class="maroon-bg"><div class="register-text">REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</div>
     <div class="white-text margin0">To register to attend the Thrombo 360 Experience, please visit <br>www.thrombo360education.com.au and quote<span class="meeting-id"> <span class="meeting-id-title">Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span></div>
    </div> 
    <div class="btm-text" style="width:800px;">
<p>NVAF: Non-valvular atrial fibrillation; NOAC: Non-vitamin K antagonist oral anticoagulant. <br>
  The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb<bR>
  Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 4, 50 Berry <bR>
  Street, North Sydney NSW 2060. © Copyright 2015 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-30-025/08/15.<bR> 
  Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code<br> of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated.</p><br>
<p>The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details<br> 
  on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at <br> www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you,to cease receiving information from us, request a copy <br>
  of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either<br> 
  company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court,<br> Mulgrave, VIC, 3170). PP-ELI-AUS-0254. ELI-0903/01-16.</p>
    </div>
<div class="page2-bg-btm"><img src="sites/default/themes/custom/paininpractice/images/bg1-btm.jpg" /></div> 
    </div>
    </div></div>
  
  <!--Meeting Type AF Two Hour meeting----->
     <?php elseif($items['ac_type']  == "AF" && $items['meeting_time'] == "3 hour meeting"): ?>
     <link href="sites/default/themes/custom/paininpractice/css/pdf-af-2hr.css" rel="stylesheet" type="text/css" />
	 <?php if(strtolower($items['faxback_non_faxback']) == "f"){ ?>
	 
  <div class="af_pdf">
  <div id ="page-1" class="page-1" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg1-updated.jpg);background-repeat: no-repeat;background-position: center top;">
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Life is about creating<br>
  &nbsp;and living experiences<br>
  &nbsp;that are worth sharing<span>"</span></div>
  <div class="author">STEVE JOBS</div>
  </div>
  <div class="pink-bar">  
   <div class="orange-title">EXPERIENCE - REDEFINE - MASTER</div>
  <div class="white-title">ANTICOAGULATION MANAGEMENT IN PRIMARY CARE<br>
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
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    <span class="tbl-label">Finish time: </span><span class="info"><?php print $items['end_time']; ?></span>
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    </div>

    
    <div class="venue"><span class="tbl-label">Venue: </span><span class="info"><?php print $items['venue']; ?></span></div>    
    <!--<div><span class="tbl-label">Venue details: </span><span class="info"><?php// print $items['venue_address'];?>&nbsp;<?php//print $items['venue_city'] ;?>&nbsp;<?php// print $items['venue_postcode'];?></span></div>-->
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
     <div class="facilitators"><span class="tbl-label">Your facilitators: </span>
      <?php foreach($items['facilitators_details'] as $key => $facilitator) : ?>
      <br><span class="info"><?php print $facilitator->name_title .'  '. $facilitator->full_name; if(isset($facilitator->title)) print  ', ' ; print $facilitator->title; if(isset($facilitator->organization)) print  ', ' ; print $facilitator->organization ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif ?>    
    </td>
    </tr>
    </table>
    </div>
  <p class="event-include">This event includes 2 hours of education with dinner</p>
  <div class="orange-text" style="margin-top:8px; margin-bottom:0; line-height:18px;">Gain insights into the best-practice management and treatment of NVAF<br>
Discover how new agents put the management of NVAF right in your hands<br>
Ask questions and gain expert answers and insights</div>
    <div class="maroon-text work-closely" style="line-height:18px; margin-top:5px; margin-bottom:0;">Work closely with your peers to discuss solutions to clinical challenges with a leading expert in the management of thrombosis, and update your practical skills in this challenging therapeutic area.</div>
     <table class="mobile-icon-img"><tr><td width="35"><img src="sites/default/themes/custom/paininpractice/images/left-mob-img.jpg" width="30" /></td><td class="mob-text">This meeting incorporates online polling, Q&A and case review<br>Delegates are asked to bring their tablet or smartphone to interact</td><td width="65"><img src="sites/default/themes/custom/paininpractice/images/right-mob-img.jpg" width="30" /></td></tr></table>
  <div class="mob-text" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/registerBG.jpg) no-repeat center top; line-height:18px; padding-top:5px; padding-bottom:5px; margin-bottom:15px;"><span class="register-text" >REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</span><br>
          <span class="white-text">Please <b>fax back your registration using form provided,</b> or <br>
			visit www.thrombo360education.com.au and quote <span class="meeting-id"><span class="meeting-id-title">Meeting ID:</span>
			<span class="meeting-id-num"> <?php print $items['title']; ?></span></span><br>
            1.5 hours of accredited content attracting 3 Category 2 QI&CPD points.<br>RACGP Activity ID: 45057.</span></div>
<div><img src="sites/default/themes/custom/paininpractice/images/bg1-btm_new.jpg" /></div>
    </div></div>
    
    
  <div id ="page-2" class="page-2" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg2.jpg); background-repeat: no-repeat; background-position: center top; text-align: left;">
  <div class="title-wrapper">
  <div class="banner-title2">"Knowledge gained through<br>
&nbsp;experience is far superior and<br>
&nbsp;many times more useful than<br>
&nbsp;bookish knowledge."</div>
  <div class="author">MAHATMA GANDHI</div>
  </div>
  <div class="meeting-agenda">Meeting agenda: 2 hours of educational content, 1.5 hours of accredited content</div>
  <div class="whiteBg">
    <div class="session-tbl-wrapper"> 
    <table>
    <tr>
    <th>TIME</th>
    <th>SESSION DETAILS</th>    
    </tr>
    <tr>
    <td class="tbl-label-1">25 mins</td>
    <td class="info"><div class="td-orange-title">The Eliquis experience</div>
<div class="td-blck-text">The pivotal data supporting apixaban and its use in the clinical setting<br>
</div></td>    
    </tr>
    <tr>
    <td class="tbl-label-2">35 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Know your NVAF patient</div>
<div class="td-blck-text">Meet Carlo, a patient presenting with NVAF, understand the perspectives and challenges that face the GP in
clinical<br> practice and understand the emerging uses of NOACs in treating NVAF</div></td>
    </tr>
    <tr>
    <td class="tbl-label-3">30 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> The GP experience</div>
<div class="td-blck-text">Case studies submitted by GPs illustrate how NOACs should be used for optimal management of patients
in the primary<br> care setting</div></td>
    </tr>
      <tr>
    <td class="tbl-label-4">10 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Screening for AF and the AliveCor mobile ECG</div>
<div class="td-blck-text">The rationale for AF screening with a hands-on demonstration of this mobile smartphone device</div></td>
    </tr>
      <tr>
    <td class="tbl-label-5">20 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Your questions answered</div>
<div class="td-blck-text">Interactive discussion where you can put your management challenges to the presenters and your GP
colleagues</div></td>
    </tr>

    </table>
    </div>
    
    <div class="mobile-ECG-wrapper">
    <div class="mobile-ECG-orange-text">Using the AliveCor mobile ECG</div>
    <div class="mobile-ECG-text">The educational program will include an introduction to the AliveCor Mobile electrocardiogram (ECG), a single-channel cardiac event recorder that attaches to most iOS and Android devices and enables you to record and review ECGs anywhere, anytime.</div>
</div>
    <div class="mob-text" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/registerBG.jpg) no-repeat center top; line-height:18px; padding-top:5px; padding-bottom:5px; margin-bottom:5px;">
	<span class="register-text" >REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</span><br>
        <span class="white-text">Please <b>fax back your registration using form provided,</b> or <br>
			visit www.thrombo360education.com.au and quote <span class="meeting-id"><span class="meeting-id-title">Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span><br>
            1.5 hours of accredited content attracting 3 Category 2 QI&CPD points.<br>
          RACGP Activity ID: 45057.</span></div> 
    <div class="btm-text" style="margin-bottom:0; margin-top:0; width:800px;"><p>NVAF: Non-valvular atrial fibrillation; NOAC: Non-vitamin K antagonist oral anticoagulant. <br>
      The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb <br>
	  Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 4, 50 Berry<br>
	  Street, North Sydney NSW 2060. © Copyright 2015 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-30-025/08/15. <br>
      Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code<br>
	  of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated. </p>
      <br>
<p  style="margin-bottom:5px;">The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details <br>
  on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at <br>
  www.bmsa.com.au or www.pfize.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy<br> of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either<br> company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court,<br> 
  Mulgrave, VIC, 3170). PP-ELI-AUS-0254. ELI-0903/01-16.</p>
    </div>
<div class="page2-bg-btm" style="background-color: #76004c; text-align: center;"><img src="sites/default/themes/custom/paininpractice/images/bg1-btm_new.jpg" height="100" /></div></div> 
    </div>
    </div>
	 
	<?php }else{ ?>
    <!--<div><p>two hr meeting AF</p></div>-->
  <div class="af_pdf">
  <div id ="page-1" class="page-1" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg1-updated.jpg);background-repeat: no-repeat;background-position: center top;">
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Life is about creating<br>
  &nbsp;and living experiences<br>
  &nbsp;that are worth sharing<span>"</span></div>
  <div class="author">STEVE JOBS</div>
  </div>
  <div class="pink-bar">  
   <div class="orange-title">EXPERIENCE - REDEFINE - MASTER</div>
  <div class="white-title">ANTICOAGULATION MANAGEMENT IN PRIMARY CARE<br>
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
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    <span class="tbl-label">Finish time: </span><span class="info"><?php print $items['end_time']; ?></span>
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    </div>

    
    <div class="venue"><span class="tbl-label">Venue: </span><span class="info"><?php print $items['venue']; ?></span></div>    
    <!--<div><span class="tbl-label">Venue details: </span><span class="info"><?php// print $items['venue_address'];?>&nbsp;<?php//print $items['venue_city'] ;?>&nbsp;<?php// print $items['venue_postcode'];?></span></div>-->
    <div><span class="tbl-label">Details: </span><span class="info"><?php print $items['venue_address']; if (isset($items['venue_city'])) print  ', ' ; print $items['venue_city']; if (isset($items['venue_postcode'])) print  ', ' ; print $items['venue_postcode'];?></span></div>
      
    <div class="rvsp-dead"><span class="tbl-label">RSVP deadline: </span><span class="info"><?php print date("d/m/Y", strtotime($items['rsvp'])); ?></span></div>
    
    
    </td>
    <td valign="top" style="width:50%;">
     <div><span class="tbl-label">Your Representatives: </span><br>
    <span class="info"><?php print $items['rep'] . ' ' . $items['rep_surname']; if(isset($items['rep_number'])) print  ', ' ; print $items['rep_number']; ?>
    </span><span class="info"><?php print $items['rep_support'] . ' ' .  $items['rep_support_surname'] ;if(isset($items['rep_number_support'])) print  ', ' ; print $items['rep_number_support']; ?>
    </span>
     <?php foreach($items['user_add_fields'] as $key => $addrep) : ?>
      <br><span class="info"><?php print $addrep->name . ' ' . $addrep->surname; if(isset($addrep->phone_number)) print  ', ' ; print $addrep->phone_number ?></span>
      <?php endforeach; ?></div>
     <?php if (!empty($items['facilitators_details'])): ?>
     <div class="facilitators"><span class="tbl-label">Your Facilitators: </span>
      <?php foreach($items['facilitators_details'] as $key => $facilitator) : ?>
      <br><span class="info"><?php print $facilitator->name_title .'  '. $facilitator->full_name; if(isset($facilitator->title)) print  ', ' ; print $facilitator->title; if(isset($facilitator->organization)) print  ', ' ; print $facilitator->organization ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif ?>    
    </td>
    </tr>
    </table>
    </div>
  <p class="event-include">This event includes 2 hours of education with dinner</p>
  <div class="orange-text" style="margin-top:8px; margin-bottom:0; line-height:18px;">Gain insights into the best-practice management and treatment of NVAF<br>
Discover how new agents put the management of NVAF right in your hands<br>
Ask questions and gain expert answers and insights</div>
    <div class="maroon-text work-closely" style="line-height:18px; margin-top:5px; margin-bottom:0;">Work closely with your peers to discuss solutions to clinical challenges with a leading expert in the management of thrombosis, and update your practical skills in this challenging therapeutic area.</div>
     <table class="mobile-icon-img"><tr><td width="35"><img src="sites/default/themes/custom/paininpractice/images/left-mob-img.jpg" width="30" /></td><td class="mob-text">This meeting incorporates online polling, Q&A and case review<br>Delegates are asked to bring their tablet or smartphone to interact</td><td width="65"><img src="sites/default/themes/custom/paininpractice/images/right-mob-img.jpg" width="30" /></td></tr></table>
  <div class="mob-text" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/registerBG.jpg) no-repeat center top; line-height:18px; padding-top:5px; padding-bottom:5px; margin-bottom:15px;"><span class="register-text" >REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</span><br>
          <span class="white-text">To register to attend the Thrombo 360 Experience,<br>
            please visit www.thrombo360education.com.au and quote <span class="meeting-id"><span class="meeting-id-title">Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span><br>
            1.5 hours of accredited content attracting 3 Category 2 QI&CPD points.<bR>
          RACGP Activity ID: 45057.</span></div>
<div><img src="sites/default/themes/custom/paininpractice/images/bg1-btm_new.jpg" /></div>
    </div></div>
    
    
      <div id ="page-2" class="page-2" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg2.jpg); background-repeat: no-repeat; background-position: center top; text-align: left;">
  <div class="title-wrapper">
  <div class="banner-title2">"Knowledge gained through<br>
&nbsp;experience is far superior and<br>
&nbsp;many times more useful than<br>
&nbsp;bookish knowledge."</div>
  <div class="author">MAHATMA GANDHI</div>
  </div>
  <div class="meeting-agenda">Meeting agenda: 2 hours of educational content, 1.5 hours of accredited content
</div>
  <div class="whiteBg">
    <div class="session-tbl-wrapper"> 
    <table>
    <tr>
    <th>TIME</th>
    <th>SESSION DETAILS</th>    
    </tr>
    <tr>
    <td class="tbl-label-1">25 mins</td>
    <td class="info"><div class="td-orange-title">The Eliquis Experience</div>
<div class="td-blck-text">The pivotal data supporting apixaban and its use in the clinical setting<br>
</div></td>    
    </tr>
    <tr>
    <td class="tbl-label-2">35 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Know your NVAF patient</div>
<div class="td-blck-text">Meet Carlo, a patient presenting with NVAF, understand the perspectives and challenges that face the GP in<br>
clinical practice and understand the emerging uses of NOACs   in treating NVAF</div></td>
    </tr>
    <tr>
    <td class="tbl-label-3">30 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> The GP experience</div>
<div class="td-blck-text">Case studies submitted by GPs illustrate how NOACs should be used for optimal management of patients<bR>
in the primary care setting</div></td>
    </tr>
      <tr>
    <td class="tbl-label-4">10 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Screening for AF and the AliveCor mobile ECG</div>
<div class="td-blck-text">The rationale for AF screening with a hands-on demonstration of this mobile smartphone device</div></td>
    </tr>
      <tr>
    <td class="tbl-label-5">20 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Your questions answered</div>
<div class="td-blck-text">Interactive discussion where you can put your management challenges to the presenters and your GP
colleagues</div></td>
    </tr>

    </table>
    </div>
    
    <div class="mobile-ECG-wrapper">
    <div class="mobile-ECG-orange-text">Using the AliveCor mobile ECG</div>
    <div class="mobile-ECG-text">The educational program will include an introduction to the AliveCor Mobile electrocardiogram (ECG), a single-channel cardiac event recorder that
attaches to most iOS and Android devices and enables you to record and review ECGs anywhere, anytime.</div>
</div>
    <div class="mob-text" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/registerBG.jpg) no-repeat center top; line-height:18px; padding-top:5px; padding-bottom:5px; margin-bottom:5px;"><span class="register-text" >REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</span><br>
          <span class="white-text">To register to attend the Thrombo 360 Experience,<br>
            please visit www.thrombo360education.com.au and quote <span class="meeting-id"><span class="meeting-id-title">Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span><br>
            1.5 hours of accredited content attracting 3 Category 2 QI&CPD points.<bR>
          RACGP Activity ID: 45057.</span></div> 
    <div class="btm-text" style="margin-bottom:0; margin-top:0; width:800px;"><p>NVAF: Non-valvular atrial fibrillation; NOAC: Non-vitamin K antagonist oral anticoagulant. <br>
      The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb <br>Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 4, 50 Berry<br> Street, North Sydney NSW 2060. © Copyright 2015 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-30-025/08/15. <br>
      Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code<br> of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated. </p>
      <br>
<p  style="margin-bottom:5px;">The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details <br>
  on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at <br>
  www.bmsa.com.au or www.pfize .com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy<br> of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either<br> company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court,<br> 
  Mulgrave, VIC, 3170). PP-ELI-AUS-0254. ELI-0903/01-16.</p>
    </div>
<div class="page2-bg-btm" style="background-color: #76004c; text-align: center;"><img src="sites/default/themes/custom/paininpractice/images/bg1-btm_new.jpg" height="100" /></div></div> 
    </div>
    </div>
	 <?php } ?>
  <!--Meeting Type DVT One Hour meeting----->
     <?php elseif($items['ac_type']  == "DVT" && $items['meeting_time'] == "1 hour meeting"): ?>
    <!--<div><p>One hr meeting DVT</p></div>-->
    <link href="sites/default/themes/custom/paininpractice/css/pdf-dvt-1hr.css" rel="stylesheet" type="text/css" />
      <div class="dvf_pdf">
      <div id ="pdf-dvt-page-1" class="pdf-dvt-page-1" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg2_1.jpg);background-repeat: no-repeat;background-position: center top;">
  
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Experience is the<br>
&nbsp;teacher of all things<span>"</span></div>
  <div class="author">JULIUS CAESAR</div>
  </div>
  <div class="pink-bar">  
   <div class="orange-title">EXPERIENCE - REDEFINE - MASTER</div>
  <div class="white-title">ANTICOAGULATION MANAGEMENT IN PRIMARY CARE<br>
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
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    <span class="tbl-label">Finish time: </span><span class="info"><?php print $items['end_time']; ?></span>
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    </div>

    
    <div class="venue"><span class="tbl-label">Venue: </span><span class="info"><?php print $items['venue']; ?></span></div>    
    <!--<div><span class="tbl-label">Venue details: </span><span class="info"><?php// print $items['venue_address'];?>&nbsp;<?php//print $items['venue_city'] ;?>&nbsp;<?php// print $items['venue_postcode'];?></span></div>-->
    <div><span class="tbl-label">Details: </span><span class="info"><?php print $items['venue_address']; if (isset($items['venue_city'])) print  ', ' ; print $items['venue_city']; if (isset($items['venue_postcode'])) print  ', ' ; print $items['venue_postcode'];?></span></div>
      
    <div class="rvsp-dead"><span class="tbl-label">RSVP deadline: </span><span class="info"><?php print date("d/m/Y", strtotime($items['rsvp'])); ?></span></div>
    
    
    </td>
    <td valign="top" style="width:50%;">
     <div><span class="tbl-label">Your Representatives: </span><br>
    <span class="info"><?php print $items['rep'] . ' ' . $items['rep_surname']; if(isset($items['rep_number'])) print  ', ' ; print $items['rep_number']; ?>
    </span><span class="info"><?php print $items['rep_support'] . ' ' .  $items['rep_support_surname'] ;if(isset($items['rep_number_support'])) print  ', ' ; print $items['rep_number_support']; ?>
    </span>
     <?php foreach($items['user_add_fields'] as $key => $addrep) : ?>
      <br><span class="info"><?php print $addrep->name . ' ' . $addrep->surname; if(isset($addrep->phone_number)) print  ', ' ; print $addrep->phone_number ?></span>
      <?php endforeach; ?></div>
     <?php if (!empty($items['facilitators_details'])): ?>
     <div class="facilitators"><span class="tbl-label">Your Facilitators: </span>
      <?php foreach($items['facilitators_details'] as $key => $facilitator) : ?>
      <br><span class="info"><?php print $facilitator->name_title .'  '. $facilitator->full_name; if(isset($facilitator->title)) print  ', ' ; print $facilitator->title; if(isset($facilitator->organization)) print  ', ' ; print $facilitator->organization ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif ?>    
    </td>
    </tr>
    </table>
    </div>
  <!--<p class="event-include">This event includes 1 hour of educational content with lunch</p>-->
    <p class="event-include">This event includes 1 hour of education</p>
    <div class="orange-text">Gain insights into the best-practice management and treatment of DVT and PE<br>
Discover how new agents put the management of DVT and PE right in your hands<br>
Ask questions and gain expert answers and insights</div>
 <div class="key-info-maroon-title">Including key information on the indication for Eliquis in DVT and PE.</div>
    <div class="maroon-text work-closely">Work closely with your peers to discuss solutions to clinical challenges with a leading expert in the management of thrombosis, and update your practical skills in this challenging therapeutic area.</div>
    <table class="mobile-icon-img"><tr><td width="35"><img src="sites/default/themes/custom/paininpractice/images/left-mob-img.jpg" /></td><td class="mob-text">This meeting incorporates online polling, Q&A and case review<br>Delegates are asked to bring their tablet or smartphone to interact</td><td width="65"><img src="sites/default/themes/custom/paininpractice/images/right-mob-img.jpg" /></td></tr></table>
   <div class="maroon-bg"><div class="register-text">REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</div>
     <div class="white-text margin0">To register to attend the Thrombo 360 Experience,<br>please visit www.thrombo360education.com.au and quote  <span class="meeting-id"><span class="meeting-id-title"> Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span></div>
    </div>
<div><img src="sites/default/themes/custom/paininpractice/images/bg1-btm.jpg" /></div>
    </div>
    </div>
    
      <div id ="pdf-dvt-page-2" class="pdf-dvt-page-2" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg2_1hr.jpg);background-repeat: no-repeat;background-position: center top;">
  <div class="title-wrapper">
  <div class="banner-title2"><span>"</span>Knowledge gained through<br>
&nbsp;experience is far superior and<br>
&nbsp;many times more useful than<br>
&nbsp;bookish knowledge.<span>"</span></div>
  <div class="author">MAHATMA GANDHI</div>
  </div>
  <div class="meeting-agenda">Meeting agenda: 1 hour of educational content</div>
  <div class="whiteBg">
    <div class="session-tbl-wrapper"> 
    <table>
    <tr>
    <th>TIME</th>
    <th>SESSION DETAILS</th>    
    </tr>
    <tr>
    <td class="tbl-label-1">25 mins</td>
    <td class="info"><div class="td-orange-title">The Eliquis Experience</div>
<div class="td-blck-text">The pivotal data supporting Eliquis and its use in the clinical setting</div></td>    
    </tr>
    <tr>
    <td class="tbl-label-2">25 mins</td>
    <td class="info"><div class="td-orange-title">Know your DVT/PE patient</div>
<div class="td-blck-text">Meet Barbara, a patient presenting with a DVT, understand the perspectives and challenges that face the
GP in clinical<br> practice and understand the emerging uses of NOACs - and Eliquis - in treating DVT and PE</div></td>
    </tr>
    <tr>
    <td class="tbl-label-3">10 mins</td>
    <td class="info"><div class="td-orange-title">Screening for AF and the AliveCor mobile ECG</div>
<div class="td-blck-text">The rationale for AF screening with a hands-on demonstration of this mobile smartphone device</div></td>
    </tr>
    </table>
    </div>
    
    <div class="mobile-ECG-wrapper">
    <div class="mobile-ECG-orange-text">Using the AliveCor mobile ECG</div>
    <div class="mobile-ECG-text">The educational program will include an introduction to the AliveCor Mobile electrocardiogram (ECG), a single-channel cardiac event recorder that attaches to most iOS and Android devices and enables you to record and
review ECGs anywhere, anytime.</div>
</div>
    <div class="maroon-bg"><div class="register-text">REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</div>
     <div class="white-text margin0">To register to attend the Thrombo 360 Experience, please visit
www.thrombo360education.com.au and quote<span class="meeting-id"> <span class="meeting-id-title">Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span></div>
    </div> 
    <div class="btm-text" style="margin-bottom:5px; margin-top:45px; width:800px;"><p>DVT: Deep vein thrombosis; PE: Pulmonary embolism; NOAC: Non-vitamin K antagonist oral anticoagulant; <br>
      The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb<br> Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 4, 50 Berry<br> Street, North Sydney NSW 2060. © Copyright 2015 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-30-025/08/15. <br>
      Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code<br> of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated.<br><br> </p>
<p>The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details<br> on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at<br> www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy<br> of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either<br> company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, <br>
  Mulgrave, VIC, 3170). PP-ELI-AUS-0268. ELI-0903/01-16.<br>
</p>
    </div>
<div class="page2-bg-btm"><img src="sites/default/themes/custom/paininpractice/images/bg1-btm.jpg" /></div> 
    </div></div>
      </div>
    
  <!--Meeting Type DVT Three Hour meeting----->
     <?php elseif($items['ac_type']  == "DVT" && $items['meeting_time'] == "3 hour meeting"): ?>
	 <link href="sites/default/themes/custom/paininpractice/css/pdf-dvt-2hr.css" rel="stylesheet" type="text/css" />
	 <?php if(strtolower($items['faxback_non_faxback']) == "f"){ ?>
	 
	<div class="dvf_pdf">
    <div id ="pdf-dvt-page-1" class="pdf-dvt-page-1" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg2_1.jpg);background-repeat: no-repeat;background-position: center top;">
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Experience is the<br>
&nbsp;teacher of all things<span>"</span></div>
  <div class="author">JULIUS CAESAR</div>
  </div>
  <div class="pink-bar">  
   <div class="orange-title">EXPERIENCE - REDEFINE - MASTER</div>
  <div class="white-title">ANTICOAGULATION MANAGEMENT IN PRIMARY CARE<br>
  Your invitation to The Thrombo 360 Experience</div>
    </div>
    <div class="whiteBg">
     <div class="tbl-wrapper">  
    <table width="100%">
    <tr>
    <td valign="top" style="width:50%;">    
    <div class="date"><span class="tbl-label">Date: </span><span class="info"><?php print $items['date']; ?></span></div>    
    <div class="time">
    <span class="tbl-label">Start time: </span><span class="info"><?php print $items['time']; ?></span>
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    <span class="tbl-label">Finish time: </span><span class="info"><?php print $items['end_time']; ?></span>
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    </div>

    
    <div class="venue"><span class="tbl-label">Venue: </span><span class="info"><?php print $items['venue']; ?></span></div>    
    <!--<div><span class="tbl-label">Venue details: </span><span class="info"><?php// print $items['venue_address'];?>&nbsp;<?php//print $items['venue_city'] ;?>&nbsp;<?php// print $items['venue_postcode'];?></span></div>-->
    <div><span class="tbl-label">Details: </span><span class="info"><?php print $items['venue_address']; if (isset($items['venue_city'])) print  ', ' ; print $items['venue_city']; if (isset($items['venue_postcode'])) print  ', ' ; print $items['venue_postcode'];?></span></div>
      
    <div class="rvsp-dead"><span class="tbl-label">RSVP deadline: </span><span class="info"><?php print date("d/m/Y", strtotime($items['rsvp'])); ?></span></div>
    
    
    </td>
    <td valign="top" style="width:50%;">
     <div style="height:80px;"><span class="tbl-label">Your representatives: </span><br>
    <span class="info"><?php print $items['rep'] . ' ' . $items['rep_surname']; if(isset($items['rep_number'])) print  ', ' ; print $items['rep_number']; ?>
    </span><span class="info"><?php print $items['rep_support'] . ' ' .  $items['rep_support_surname'] ;if(isset($items['rep_number_support'])) print  ', ' ; print $items['rep_number_support']; ?>
    </span>
     <?php foreach($items['user_add_fields'] as $key => $addrep) : ?>
      <br><span class="info"><?php print $addrep->name . ' ' . $addrep->surname; if(isset($addrep->phone_number)) print  ', ' ; print $addrep->phone_number ?></span>
      <?php endforeach; ?></div>
     <?php if (!empty($items['facilitators_details'])): ?>
     <div class="facilitators"><span class="tbl-label">Your facilitators: </span>
      <?php foreach($items['facilitators_details'] as $key => $facilitator) : ?>
      <br><span class="info"><?php print $facilitator->name_title .'  '. $facilitator->full_name; if(isset($facilitator->title)) print  ', ' ; print $facilitator->title; if(isset($facilitator->organization)) print  ', ' ; print $facilitator->organization ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif ?>    
    </td>
    </tr>
    </table>
    </div>
  <p class="event-include">This event includes 2 hours of education with dinner</p>
    <div class="orange-text">Gain insights into the best-practice management and treatment of DVT and PE<br>
Discover how new agents put the management of DVT and PE right in your hands<br>
Ask questions and gain expert answers and insights</div>
 <div class="key-info-maroon-title" style="font-size:16px;">Non-accredited session includes key information on the indication for apixaban in DVT and PE.</div>
    <div class="maroon-text work-closely">Work closely with your peers to discuss solutions to clinical challenges with a leading expert in the management of thrombosis, and update your practical skills in this challenging therapeutic area.</div>
    <table class="mobile-icon-img"><tr>
      <td width="35"><img src="sites/default/themes/custom/paininpractice/images/left-mob-img.jpg" width="20" /></td><td class="mob-text">This meeting incorporates online polling, Q&A and case review<br>Delegates are asked to bring their tablet or smartphone to interact</td><td width="65"><img src="sites/default/themes/custom/paininpractice/images/right-mob-img.jpg" width="30" /></td></tr></table>
  <div class="mob-text" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/registerBG.jpg) no-repeat center top; line-height:18px; padding-top:5px; padding-bottom:5px;"><span class="register-text" >REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</span><br>
          <span class="white-text">Please <b>fax back your registration using form provided,</b> or<br>
            visit <b>www.thrombo360education.com.au</b> and quote <span class="meeting-id"><span class="meeting-id-title">Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span><br>
            1.5 hours of accredited content attracting 3 Category 2 QI&CPD points.<bR>
          RACGP Activity ID: 45055.</span></div>
          <br>
<div><img src="sites/default/themes/custom/paininpractice/images/bg1-btm_new.jpg" /></div>
    </div>
    </div>   
      <div id ="pdf-dvt-page-2" class="pdf-dvt-page-2" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg2.jpg);background-repeat: no-repeat;background-position: center top;">
  <div class="title-wrapper">
  <div class="banner-title2"><span>"</span>Knowledge gained through<br>
&nbsp;experience is far superior and<br>
&nbsp;many times more useful than<br>
&nbsp;bookish knowledge.<span>"</span></div>
  <div class="author">MAHATMA GANDHI</div>
  </div>
  <div class="meeting-agenda">Meeting agenda: 2 hours of educational content, 1.5 hours of accredited content
</div>
    <div class="session-tbl-wrapper"> 
    <table>
    <tr>
    <th>TIME</th>
    <th>SESSION DETAILS</th>    
    </tr>
    <tr>
    <td class="tbl-label-1">25 mins</td>
    <td class="info"><div class="td-orange-title">The Eliquis experience</div>
<div class="td-blck-text">The pivotal data supporting apixaban and its use in the clinical setting<br>
</div></td>    
    </tr>
    <tr>
    <td class="tbl-label-2">35 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Know your DVT/PE patient</div>
<div class="td-blck-text">Meet Barbara, a patient presenting with a DVT, understand the perspectives and challenges that face the  
  GP in clinical<br> practice and understand the emerging uses of NOACs in treating DVT and PE<br>
</div></td>
    </tr>
    <tr>
    <td class="tbl-label-3">30 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> The GP experience</div>
<div class="td-blck-text">Case studies submitted by GPs illustrate how NOACs should be used for optimal management of patients 
  in the primary<br> care setting<br>
</div></td>
    </tr>
      <tr>
    <td class="tbl-label-4">10 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Screening for AF and the AliveCor mobile ECG</div>
<div class="td-blck-text">The rationale for AF screening with a hands-on demonstration of this mobile smartphone device</div></td>
    </tr>
      <tr>
    <td class="tbl-label-5">20 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Your questions answered</div>
<div class="td-blck-text">Interactive discussion where you can put your management challenges to the presenters and your GP 
  colleagues</div></td>
    </tr>

    </table>
    </div>
    
    <div class="mobile-ECG-wrapper">
    <div class="mobile-ECG-orange-text">Using the AliveCor mobile ECG</div>
    <div class="mobile-ECG-text">The educational program will include an introduction to the AliveCor Mobile
electrocardiogram (ECG), a single-channel cardiac event recorder that
attaches to most iOS and Android devices and enables you to record and
review ECGs anywhere, anytime.</div>
</div>
    <div class="mob-text" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/registerBG.jpg) no-repeat center top; line-height:18px; padding-top:5px; padding-bottom:5px; margin-bottom:15px;"><span class="register-text" >REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</span><br>
          <span class="white-text">Please <b>fax back your registration using form provided,</b> or<br>
            visit <b>www.thrombo360education.com.au</b> and quote <span class="meeting-id"><span class="meeting-id-title">Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span><br>
            1.5 hours of accredited content attracting 3 Category 2 QI&CPD points.<br>
          RACGP Activity ID: 45055.</span></div> 
    <div class="btm-text" style="width:800px;"><p>DVT: Deep vein thrombosis; PE: Pulmonary embolism; NOAC: Non-vitamin K antagonist oral anticoagulant; <br>
      The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb<br>
	  Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 4, 50 Berry<br> 
	  Street, North Sydney NSW 2060. © Copyright 2015 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-30-025/08/15.<br>
      Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code<br>
	  of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated.</p>
	  
<p style="margin-bottom:5px; margin-top:5px;">The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details<br> 
on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at<br> 
www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy<br> of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either<br> company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court,<br> Mulgrave, VIC, 3170). PP-ELI-AUS-0268. ELI-0903/01-16.<br>
</p>
    </div>
<div class="page2-bg-btm" style="background-color: #76004c; text-align: center;"><img src="sites/default/themes/custom/paininpractice/images/bg1-btm_new.jpg" height="100" /></div> 
    </div>
      </div>
	 
	 
	 <?php }else{ ?>
   <!-- <div><p>two hr meeting DVT</p></div>-->    
      <div class="dvf_pdf">
      <div id ="pdf-dvt-page-1" class="pdf-dvt-page-1" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg2_1.jpg);background-repeat: no-repeat;background-position: center top;">
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Experience is the<br>
&nbsp;teacher of all things<span>"</span></div>
  <div class="author">JULIUS CAESAR</div>
  </div>
  <div class="pink-bar">  
   <div class="orange-title">EXPERIENCE - REDEFINE - MASTER</div>
  <div class="white-title">ANTICOAGULATION MANAGEMENT IN PRIMARY CARE<br>
  Your invitation to The Thrombo 360 Experience</div>
    </div>
    <div class="whiteBg">
     <div class="tbl-wrapper">  
    <table width="100%">
    <tr>
    <td valign="top" style="width:50%;">    
    <div class="date"><span class="tbl-label">Date: </span><span class="info"><?php print $items['date']; ?></span></div>    
    <div class="time">
    <span class="tbl-label">Start time: </span><span class="info"><?php print $items['time']; ?></span>
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    <span class="tbl-label">Finish time: </span><span class="info"><?php print $items['end_time']; ?></span>
   <!-- <span class="tbl-label">Finish time: </span><span class="info">dummy</span>-->
    </div>

    
    <div class="venue"><span class="tbl-label">Venue: </span><span class="info"><?php print $items['venue']; ?></span></div>    
    <!--<div><span class="tbl-label">Venue details: </span><span class="info"><?php// print $items['venue_address'];?>&nbsp;<?php//print $items['venue_city'] ;?>&nbsp;<?php// print $items['venue_postcode'];?></span></div>-->
    <div><span class="tbl-label">Details: </span><span class="info"><?php print $items['venue_address']; if (isset($items['venue_city'])) print  ', ' ; print $items['venue_city']; if (isset($items['venue_postcode'])) print  ', ' ; print $items['venue_postcode'];?></span></div>
      
    <div class="rvsp-dead"><span class="tbl-label">RSVP deadline: </span><span class="info"><?php print date("d/m/Y", strtotime($items['rsvp'])); ?></span></div>
    
    
    </td>
    <td valign="top" style="width:50%;">
     <div style="height:80px;"><span class="tbl-label">Your Representatives: </span><br>
    <span class="info"><?php print $items['rep'] . ' ' . $items['rep_surname']; if(isset($items['rep_number'])) print  ', ' ; print $items['rep_number']; ?>
    </span><span class="info"><?php print $items['rep_support'] . ' ' .  $items['rep_support_surname'] ;if(isset($items['rep_number_support'])) print  ', ' ; print $items['rep_number_support']; ?>
    </span>
     <?php foreach($items['user_add_fields'] as $key => $addrep) : ?>
      <br><span class="info"><?php print $addrep->name . ' ' . $addrep->surname; if(isset($addrep->phone_number)) print  ', ' ; print $addrep->phone_number ?></span>
      <?php endforeach; ?></div>
     <?php if (!empty($items['facilitators_details'])): ?>
     <div class="facilitators"><span class="tbl-label">Your Facilitators: </span>
      <?php foreach($items['facilitators_details'] as $key => $facilitator) : ?>
      <br><span class="info"><?php print $facilitator->name_title .'  '. $facilitator->full_name; if(isset($facilitator->title)) print  ', ' ; print $facilitator->title; if(isset($facilitator->organization)) print  ', ' ; print $facilitator->organization ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif ?>    
    </td>
    </tr>
    </table>
    </div>
  <p class="event-include">This event includes 2 hours of education with dinner</p>
    <div class="orange-text">Gain insights into the best-practice management and treatment of DVT and PE<br>
Discover how new agents put the management of DVT and PE right in your hands<br>
Ask questions and gain expert answers and insights</div>
 <div class="key-info-maroon-title" style="font-size:16px;">Non-accredited session includes key information on the indication for apixaban in DVT and PE.</div>
    <div class="maroon-text work-closely">Work closely with your peers to discuss solutions to clinical challenges with a leading expert in the management of thrombosis, and update your practical skills in this challenging therapeutic area.</div>
    <table class="mobile-icon-img"><tr>
      <td width="35"><img src="sites/default/themes/custom/paininpractice/images/left-mob-img.jpg" width="20" /></td><td class="mob-text">This meeting incorporates online polling, Q&A and case review<br>Delegates are asked to bring their tablet or smartphone to interact</td><td width="65"><img src="sites/default/themes/custom/paininpractice/images/right-mob-img.jpg" width="30" /></td></tr></table>
  <div class="mob-text" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/registerBG.jpg) no-repeat center top; line-height:18px; padding-top:5px; padding-bottom:5px;"><span class="register-text" >REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</span><br>
          <span class="white-text">To register to attend the Thrombo 360 Experience,<br>
            please visit www.thrombo360education.com.au and quote <span class="meeting-id"><span class="meeting-id-title">Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span><br>
            1.5 hours of accredited content attracting 3 Category 2 QI&CPD points.<bR>
          RACGP Activity ID: 45055.</span></div>
          <br>
<div><img src="sites/default/themes/custom/paininpractice/images/bg1-btm_new.jpg" /></div>
    </div>
    </div>   
      <div id ="pdf-dvt-page-2" class="pdf-dvt-page-2" style="background-image: url(/sites/default/themes/custom/paininpractice/images/bg2.jpg);background-repeat: no-repeat;background-position: center top;">
  <div class="title-wrapper">
  <div class="banner-title2"><span>"</span>Knowledge gained through<br>
&nbsp;experience is far superior and<br>
&nbsp;many times more useful than<br>
&nbsp;bookish knowledge.<span>"</span></div>
  <div class="author">MAHATMA GANDHI</div>
  </div>
  <div class="meeting-agenda">Meeting agenda: 2 hours of educational content, 1.5 hours of accredited content
</div>
    <div class="session-tbl-wrapper"> 
    <table>
    <tr>
    <th>TIME</th>
    <th>SESSION DETAILS</th>    
    </tr>
    <tr>
    <td class="tbl-label-1">25 mins</td>
    <td class="info"><div class="td-orange-title">The Eliquis Experience</div>
<div class="td-blck-text">The pivotal data supporting apixaban and its use in the clinical setting<br>
</div></td>    
    </tr>
    <tr>
    <td class="tbl-label-2">35 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Know your DVT/PE patient</div>
<div class="td-blck-text">Meet Barbara, a patient presenting with a DVT, understand the perspectives and challenges that face the  
  GP in clinical<br> practice and understand the emerging uses of NOACs in treating DVT and PE<br>
</div></td>
    </tr>
    <tr>
    <td class="tbl-label-3">30 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> The GP experience</div>
<div class="td-blck-text">Case studies submitted by GPs illustrate how NOACs should be used for optimal management of patients 
  in the primary<br> care setting<br>
</div></td>
    </tr>
      <tr>
    <td class="tbl-label-4">10 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Screening for AF and the AliveCor mobile ECG</div>
<div class="td-blck-text">The rationale for AF screening with a hands-on demonstration of this mobile smartphone device</div></td>
    </tr>
      <tr>
    <td class="tbl-label-5">20 mins</td>
    <td class="info"><div class="td-orange-title"><span style="color:#76004b;">Accredited content:</span> Your questions answered  </div>
<div class="td-blck-text">Interactive discussion where you can put your management challenges to the presenters and your GP 
  colleagues</div></td>
    </tr>

    </table>
    </div>
    
    <div class="mobile-ECG-wrapper">
    <div class="mobile-ECG-orange-text">Using the AliveCor mobile ECG</div>
    <div class="mobile-ECG-text">The educational program will include an introduction to the AliveCor Mobile
electrocardiogram (ECG), a single-channel cardiac event recorder that
attaches to most iOS and Android devices and enables you to record and
review ECGs anywhere, anytime.</div>
</div>
    <div class="mob-text" style="background: #fff url(/sites/default/themes/custom/paininpractice/images/registerBG.jpg) no-repeat center top; line-height:18px; padding-top:5px; padding-bottom:5px; margin-bottom:15px;"><span class="register-text" >REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</span><br>
          <span class="white-text">To register to attend the Thrombo 360 Experience,<br>
            please visit www.thrombo360education.com.au and quote <span class="meeting-id"><span class="meeting-id-title">Meeting ID:</span><span class="meeting-id-num"> <?php print $items['title']; ?></span></span><br>
            1.5 hours of accredited content attracting 3 Category 2 QI&CPD points.<bR>
          RACGP Activity ID: 45055.</span></div> 
    <div class="btm-text" style="width:800px;"><p>DVT: Deep vein thrombosis; PE: Pulmonary embolism; NOAC: Non-vitamin K antagonist oral anticoagulant; <br>
      The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb<br>      Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 4, 50 Berry<br> Street, North Sydney NSW 2060. © Copyright 2015 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-30-025/08/15. <br>
      Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code<br> of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated.</p>
<p style="margin-bottom:5px; margin-top:5px;">The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details<br> on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at<br> www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy<br> of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either<br> company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court,<br> Mulgrave, VIC, 3170). PP-ELI-AUS-0268. ELI-0903/01-16.<br>
</p>
    </div>
<div class="page2-bg-btm" style="background-color: #76004c; text-align: center;"><img src="sites/default/themes/custom/paininpractice/images/bg1-btm_new.jpg" height="100" /></div> 
    </div>
      </div>
	 <?php } ?>
     <?php endif ?>
  </body>
</html>
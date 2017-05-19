<?php global $base_url; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>index</title>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<style type="text/css">
  
    @page {
      size: 8.3in 15in;
      margin: 0;
      padding: 0;
    }
    body,
    div,
    dl,
    dt,
    dd,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    pre,
    code,
    blockquote {
      padding: 0;
      border-width: 0;
      margin: 0;
    }
    div {
      margin: 5px 0;
    }
    body {
      margin: 0px;
      -epub-hyphens: auto;
      font-family:
      /*'FlamaBas',*/
      
      sans-serif;
      color: #666;
    }
   #page-1 {
      width: 100%;
      min-height: 600px;
      page-break-inside: avoid !important;
      page-break-after: avoid !important;
    }
       .header {
      display: inline-block;
      width: 630px;
      height: 250px;      
			float:left;
      margin: 0 auto;
    }
    .title-wrapper {
      display: inline-block;
      float: right;
      width: 450px;
      margin-top: 50px;
    }
    .image-wrapper {
      display: inline-block;
      float: left;
      width: 350px;
			height:215px;
      margin-top:55px;
      margin-left: -10px;
      margin-right: 10px;
    }
    .banner-title1 {
      width: 350px;
      font-size: 16px;
      line-height: 24px;
      color: #76004B;
      font-family:
      /*'FlamaBas',*/
      
      sans-serif;
      margin-top: 80px;
      margin-bottom: 20px;
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
    }
    .teaser-title {
      width: 300px;
      font-size: 28px;
      line-height: 30px;
      color: #F26A38;
      font-family: sans-serif;
      margin: 0 0 3px;
      font-style: italic;
      text-transform: uppercase;
    }
    .content {
      width: 630px;
      margin: 0 auto;
    }
    .btm-text{
      margin: 0 auto;
      margin-bottom: 30px;
    }
</style>
</head>
<body style="margin:0;padding:0;">
<link href="sites/default/themes/custom/paininpractice/css/pdf-download-faxback.css" rel="stylesheet" type="text/css" />
  <div class="af_pdf" style="margin:0;padding:0;">
  <div id ="page-1" class="page-1" style="background: url('/sites/default/themes/custom/paininpractice/images/top-ring2.png') no-repeat;margin:0;padding:0;">
      <div class="header">
        <div class="image-wrapper" style="margin-top:55px">
          <img src="sites/default/themes/custom/paininpractice/images/logo-2.png" width="370px" height="auto"/>
        </div>
        <div class="title-wrapper">
          <div class="banner-title1">Bristol-Myers Squibb & Pfizer Australia invites you to attend an educational meeting:</div>
          <div class="teaser-title">Cases and conundrums in anticoagulation</div>
        </div>
      </div>
    <div class="top-seperator" style="clear:both"><img src="sites/default/themes/custom/paininpractice/images/line.png" title="Top Seperator" width="890px" height="4px" />
    </div>
    <div style="background: url('sites/default/themes/custom/paininpractice/images/ringside2.png') no-repeat right 25%;">
    <div class="content">
    <div class="tbl-wrapper" style="margin: 0 0 30px 0;"> 
    <div>
    <div>
    <div> 
    <?php if ((!empty($items['speaker_details'])) || (!empty($items['facilitators_details']))): ?>
		  <div class="tbl-label" style="width: 100%; margin: 10px 0;">SPEAKER/FACILITATORS: </div>
    <?php endif ?>
			<?php if (!empty($items['speaker_details'])): ?>
		      <div class="speaker" style="margin-bottom: 10px;">
		      <?php foreach($items['speaker_details'] as $key => $speaker) : ?>
		      <span class="info" style="margin-bottom: 10px;">
		      <div style="color: #76004B; margin: 0 0 6px 0;"><b><?php print $speaker->name_title .'  '. $speaker->full_name;?></b></div>
		      <div><i><?php if(isset($speaker->title))  print $speaker->title ?></i></div>
		      <div><i><?php if(isset($speaker->organization)) print $speaker->organization ?></i></div>
          </span>
		      <?php endforeach; ?>
		      </div>
    		<?php endif ?> 

		 	<?php if (!empty($items['facilitators_details'])): ?>
            <!--<span class="tbl-label" style="width: 100%;">Session moderated by </span>-->

		 		<div class="facilitators" style="margin-bottom: 20px;">
				<?php foreach($items['facilitators_details'] as $key => $facilitator) : ?>
					<div class="info" style="margin-bottom: 10px;">Session moderated by <b><?php print $facilitator->name_title .'  '. $facilitator->full_name; if(isset($facilitator->title)) print  ', ' ; print $facilitator->title;?></b><i><?php if(isset($facilitator->organization)) print  ', ' ; print $facilitator->organization ?></i></div>
		  		<?php endforeach; ?>
		 		</div>
		<?php endif ?>
		<div class="date" style="margin: 20px 0 10px 0;"><span class="tbl-label">DATE: </span><span class="info" style="color: #76004B;"><?php print $items['date']; ?></span></div>    
		<div class="time" style="margin: 10px 0;">
			<span class="tbl-label">START TIME: </span><span class="info" style="color: #76004B; margin-right: 10px;"><?php print $items['time']; ?></span>
			<span class="tbl-label">FINISH TIME: </span><span class="info" style="color: #76004B;"><?php print $items['end_time']; ?></span>
		</div>
		<div class="venue" style="margin: 10px 0 20px 0;"><span class="tbl-label">VENUE: </span><span class="info" style="color: #76004B;"><?php print $items['venue']; ?></span></div>
		<div style="margin: 10px 0;"><span class="tbl-label">DETAILS: </span><span class="info" style="color: #76004B;"><?php print $items['venue_address']; if (isset($items['venue_city'])) print  ', ' ; print $items['venue_city']; if (isset($items['venue_postcode'])) print  ', ' ; print $items['venue_postcode'];?></span></div>

		    <div class="orange-title" style="font-size: 16px; text-transform: uppercase; margin: 10px 0 0;">AGENDA - COMPRISING <?php print $items['duration'];?> OF EDUCATIONAL CONTENT</div>
<span style="margin: 0; padding: 0;">
<?php if($items['template_meeting_type']=='modular'){
       if (!empty($items['module_type'])):?>
      <div class="module_type" style="margin: 0; padding: 0; width: 600px;">
      <?php $i=1; foreach($items['module_type'] as $module_type_name) : ?>
      <div style="margin: 10px 0;color: #76004B;"><span class="info" style="color: #76004B;line-height: 18px;"><b style="color: #F26A38;"><?php print "MODULE ". $i.": "?></b><?php print $module_type_name;?></span></div>
      <?php $i++; endforeach; endif?>
       </div>
   <?php     
    }else{
     if (!empty($items['speaker_session_details'])):?>
     <div class="speaker_session" style="margin: 0; padding: 0; width: 600px;">
      <?php foreach($items['speaker_session_details'] as $key => $speaker_session) : ?>
      <div><b><span class="info"><?php print $speaker_session->session_title;?></span></b><i><?php if(isset($speaker_session->session_topic)) print  ', ' ; print $speaker_session->session_topic ?></i></div>
      <?php endforeach; endif ?>
    </div>
    <?php  } ?>
</span>
		<div class="rvsp-dead" style="margin: 10px 0 20px 0;"><span class="tbl-label">RSVP DEADLINE: </span><span class="info" style="color: #76004B;"><?php if(isset($items['rsvp'])) print $items['rsvp']; ?></span></div>
    </div>
    <div>
		<div style="margin-bottom: 10px; width: 100%;"><span class="tbl-label" style="display:inline-block;margin: 10px 0;">YOUR ELIQUIS REPRESENTATIVES: </span><br/>
		<span class="info"><b style="width:200px;float:left;display:inline-block;"><?php print $items['rep'].' '.$items['rep_surname'];?></b><b style="width:200px;float:left;display:inline-block;"><?php if(isset($items['rep_number'])) print  ' ' ; print $items['rep_number']; ?></b><b style="width:200px;float:left;display:inline-block;"><?php if(isset($items['leadrep_company_name'])) print $items['leadrep_company_name']."  Representative"; ?></b></span><br/><span class="info"><b style="width:200px;float:left;display:inline-block;"><?php print $items['rep_support'].' '.$items['rep_support_surname'];?></b><b style="width:200px;float:left;display:inline-block;"><?php if(isset($items['rep_number_support'])) print  ' ' ; print $items['rep_number_support']; ?></b><b style="width:200px;display:inline-block;float:left;"><?php if(isset($items['supportrep_company_name'])) print  $items['supportrep_company_name']."  Representative"; ?></b></span>
   
		<!--  <?php //foreach($items['user_add_fields'] as $key => $addrep) : ?>
		  <br><span class="info"><?php //print $addrep->name . ' ' . $addrep->surname; if(isset($addrep->phone_number)) print  ', ' ; print $addrep->phone_number ?></span>
		  <?php //endforeach; ?>-->      
      </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="bottom-seperator" style="margin: 10px 0;"><img src="sites/default/themes/custom/paininpractice/images/horizontal-line-bottom.jpg" title="Bottom Seperator" width="780px" height="4px" />
    </div>
	<p class="event-include" style="margin-top:5px; margin-bottom:5px; color: #76004B;">This event includes <?php print $items['duration'] ?> of education<?php  if($items['duration']=='2 hours'):  print " and  dinner."; elseif($items['duration']=='1 hour'): { print ".";} endif ?></p>
    <div style="text-align: center;"><div class="register-text">PLEASE FAX THIS REGISTRATION FORM BACK TO <?php if(isset($items['fax_number'])){ echo $items['fax_number']; } ?> </div></div>
    <div class="tbl-wrapper" style="margin: 20px auto; width: 630px;"> 
	<table width="630px">
    <tr style="width: 630px;">
		<td style="width:210px"><span class="tbl-label-blank" style="width:100px">First name: </span>
    <span class="border-btm" style="width: 110px;"></span></td>
		<td style="width:210px"><span class="tbl-label-blank" style="width:80px">Last name: </span>
    <span class="border-btm" style="width: 130px;"></span></td>
		<td style="width:210px"><span class="tbl-label-blank"style="width:120px">QI&CPD no: </span>
    <span class="border-btm" style="width: 90px;"></span></td>
	</tr>
	<tr style="width: 630px;">
		<td width="210px"><span class="tbl-label-blank" style="width:50px">Phone: </span>
    <span class="border-btm" style="width: 160px;"></span></td>
		<td width="210px"><span class="tbl-label-blank" style="width:50px">Fax: </span>
    <span class="border-btm" style="width: 160px;"></span></td>
		<td width="210px"><span class="tbl-label-blank" style="width:50px">Email: </span>
    <span class="border-btm" style="width: 160px;"></span></td>
	</tr>
	<tr style="width: 630px;">
		<td colspan="3" width="630px"><span class="tbl-label-blank" style="width:120px">Organisation: </span>
    <span class="border-btm" style="width: 510px;"></span></td>
	</tr>
	<tr style="width: 630px;">
		<td colspan="3" width="630px"><span class="tbl-label-blank" style="width:150px">Street address:  </span>
    <span class="border-btm" style="width: 510px;"></span></td>
	</tr>
	<tr style="width: 630px;">
		<td colspan="2" style="width: 430px;"><span class="tbl-label-blank" style="width:50px">Suburb: </span>
    <span class="border-btm" style="width: 380px;"></span></td>
		<td width="200px"><span class="tbl-label-blank" style="width:50px">State: </span>
    <span class="border-btm" style="width: 50px;"></span>
    <span class="tbl-label-blank" style="width:50px">Postcode: </span>
    <span class="border-btm" style="width: 50px;"></span></td>
	</tr>
	<tr style="width: 630px;">
		<td colspan="3" width="630px"><span class="tbl-label-blank" style="width:250px">Dietary requirements: </span>
    <span class="border-btm" style="width: 380px;"></span></td>
	</tr>
	</table>
    </div>
	<div class="btm-text">
	<span>The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 32, 101 Miller Street Street, North Sydney NSW 2060. © Copyright 2016 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PP-ELI-AUS-0398.</span>
	<br/>
	<span>Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated. The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, Mulgrave, VIC, 3170 or phone 1800 067 567 or +61 3 8523 4200 or email contact.australia@bms.com). 432AU1600448-02</span>
    </div>
    <div style="width: 630px;margin:0 auto;"><img src="sites/default/themes/custom/paininpractice/images/footer2.png" width="100%"/></div>
</div>
</div>
  </body>
</html>

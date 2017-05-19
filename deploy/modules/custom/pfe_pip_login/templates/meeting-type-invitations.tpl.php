<html>

<head>
	<style>
	
		@page {
			size: 8.27in 11.69in;
			margin: 0;
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
		}
		div {
			margin: 0;
		
		}
		body {
			margin: 0px;
			-epub-hyphens: auto;
			font-family: Arial, sans-serif;
			color: #666;
			width:100%;
		
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
			height: 180px;			
			float: left;
      margin: 0 auto;
		}
		.content {
      width: 630px;
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
			width: 300px;
			height: 215px;
			margin-top: 40px;
			margin-left: 60px;
			margin-right: 0;
		}
		.banner-title1 {
			width: 350px;
			font-size: 16px;
			line-height: 24px;
			color: #76004B;
			font-family: sans-serif;
			margin-top: 20px;
			margin-bottom: 20px;
			-webkit-print-color-adjust: exact;
			print-color-adjust: exact;
		}
		.teaser-title {
			width: 300px;
			font-size: 22px;
			line-height: 25px;
			color: #F26A38;
			font-family: sans-serif;
			margin: 0 0 3px;
			font-style: italic;
			text-transform: uppercase;
		}
		.orange-title {
			font-size: 18px;
			line-height: 25px;
			color: #F26A38;
			font-family: sans-serif;
			margin: 10px 0;
		}
		.purple-text {
			color: #76004B;
			font-size: 18px;
			line-height: 20px;
		}
		.purple-heading {
			width: 594px;
			font-size: 22px;
			margin: 5px auto;
			color: #76004B;
			font-weight: bold;
		}
		.register-text {
			width: 400px;
			margin: 5px auto 20px;      
			text-align: left;
      font-size: 14px;
		}
		.site-link {
			width: 400px;
			margin: 20px auto 10px;
      margin-top: 0;
			font-size: 14px;
      text-align: left;
		}
		.site-link .orange-title {
			font-size: 14px;
			font-weight: bold;
		}
		.btm-text {
			width: 630px;
			font-size: 9px;
			margin: 0 auto;
			text-align: justify;      
		}
		.presenter-details{
			float:left;
			width:630px;
		}
		.speaker-details{	
			display:inline-block;
			width:300px;
			margin:0 10px 10px 0;			
			float:left;		
		}
	
	</style>
</head>

<body style="margin:0;padding:0;">
	<?php if(($items['template_meeting_type']=='speaker' && $items['spec_to_spec']!='')): ?>
<div class="af_pdf" style="margin:0;padding:0;">
		<div id="page-1" class="page-1">
			<div class="header" style="height:180px; width: 100%; 
      background: url('sites/default/themes/custom/paininpractice/images/spec-spec-header-back.png') no-repeat;">
				<h3 style="color:#76004B; margin:70px auto 5px auto; font-weight: normal; width: 630px;">BRISTOL-MYERS SQUIBB & PFIZER AUSTRALIA<br/>INVITE YOU TO ATTEND AN EDUCATIONAL MEETING:</h3>
        <h1 style="color:#F26A38;margin: 0 auto; font-weight: normal; width: 630px;"><?php print $items['meeting_title']; ?></h1>
			</div>
			<div class="top-seperator" style="clear:both; margin-bottom: 20px;text-align:right;float:right;"><img src="sites/default/themes/custom/paininpractice/images/top-line-sp2.png" title="Top Seperator"/>
			</div>
      <div style="overflow: auto; background: url('sites/default/themes/custom/paininpractice/images/sp-sp-side-back.png') no-repeat right bottom;">
			<div class="content" style="overflow: auto;">
       <div class="presenter-details" style="clear:both;">
        <div class="orange-title">PRESENTED BY:</div>
        

        <?php if (!empty($items[ 'speaker_details'])): ?>
					<div style="margin:0;padding:0;">
						<?php $i=1;foreach($items[ 'speaker_details'] as $key=> $speaker) : ?>
						<div class="speaker-details">
				          <div class="purple-text" style="margin-bottom: 10px;"><b><?php print $speaker->name_title .'  '. $speaker->full_name;?></b></div>
				          <div style="margin-bottom: 5px;"><?php if(isset($speaker->title))  print $speaker->title ?></div>
				          <div style="margin-bottom: 5px;"><?php if(isset($speaker->organization)) print $speaker->organization ?></div>
				        </div>
				        <?php if (($i%2)==0): ?>
				        <div style="clear:both"></div>
				        <?php endif ?>
						<?php $i++; endforeach; ?>
					</div>
				
					<?php endif ?>
       
       
			 </div>
      <!--<div style="clear: both;"></div>-->
      <div class="meeting-details">       
        <div class="purple-text" style="margin: 5px 0;"><b><?php print $items['date']; print " ".$items['time']; ?></b></div>
        <div class="purple-text" style="margin: 5px 0;"><b><?php print $items['venue']; ?></b></div>
        <div class="purple-text" style="margin: 5px 0;"><b><?php if (isset($items['venue_address']))print $items['venue_address'];?></b></div>       
      </div>
      
      <div class="agenda-details" style="margin-bottom: 10px;">
        <div class="orange-title">AGENDA</div>
        <div>Comprising <?php print $items[ 'duration'];?> of educational content <?php if($items[ 'duration']=="2 hours"):;?> (dinner included)<?php endif;?></div>
        <div class="purple-text session-details">
        <?php if(!empty($items[ 'speaker_session_details'])):?>			
			<?php foreach($items[ 'speaker_session_details'] as $key=> $speaker_session) : ?>
			  <div>
            <strong style="display: block;margin: 5px 0;"><?php print $speaker_session->session_title;?></strong>
            <span style="display: block;"><?php print $speaker_session->session_topic ?></span>
          </div>
		<?php endforeach; endif ?>             
        </div>
      </div>
      
      <div class="repreentative-details" style="display: inline-block;">
        <div class="orange-title" style="white-space: nowrap;">FOR ANY ENQUIRIES, PLEASE CONTACT YOUR ELIQUIS REPRESENTATIVES:</div>
        <div style="display: inline-block;width: 315px;float: left;">
         <span class="purple-text" style="line-height: 30px;"><?php if(isset($items['rep'])) Print "Name:";?></span> <span> <?php print $items['rep'].' '.$items['rep_surname'];?></span><br/>
		 <span class="purple-text" style="line-height: 30px;"><?php if(isset($items['rep_number'])) Print "Mobile:";?> </span> <span> <?php if(isset($items['rep_number'])) print $items['rep_number']; ?></span><br/>
		 <span class="purple-text" style="line-height: 30px;"><?php if(isset($items['leadrep_company_name'])) Print "Organization:";?></span> <span><?php if(isset($items['leadrep_company_name'])) print $items['leadrep_company_name']."  Representative"; ?></span>
        </div>

       

        <div style="display: inline-block;width: 315px;float: left;">
          <span class="purple-text" style="line-height: 30px;"><?php if(isset($items['rep_support'])) Print "Name:";?></span> <span><?php print $items['rep_support'].' '.$items['rep_support_surname'];?></span><br/>
          <span class="purple-text" style="line-height: 30px;"><?php if(isset($items['rep_number_support'])) Print "Mobile:";?></span> <span> <?php if(isset($items['rep_number_support'])) print $items['rep_number_support']; ?></span><br/>
          <span class="purple-text" style="line-height: 30px;"><?php if(isset($items['supportrep_company_name'])) Print "Organization:";?></span> <span><?php if(isset($items['supportrep_company_name'])) print $items['supportrep_company_name']."  Representative"; ?></span>
        </div>     
      </div>      
      <div class="register-details" style="margin-bottom: 40px;">
        <div class="purple-heading" style="margin: 0 0 10px 0">REGISTER NOW FOR THIS MEETING</div>
        <div style="margin-bottom: 5px;">Please visit www.thrombo360education.com.au and register:</div>
        <b>Username: </b>your email address and <b>Password: </b><?php print $items['title']; ?>
        <div style="display: block;margin-top:5px;">
          <span class="orange-title" style="display: inline-block;margin: 0px 0px 5px;width: 100px;float: left;line-height:18px;">Meeting ID:</span> <span style="display: inline-block;margin: 0px 0px 5px;float:left;width: 500px;line-height:18px"><?php print $items['title']; ?></span>
        </div>        
        <div style="display: block;">
          <span class="orange-title" style="display: inline-block;margin: 0px 0px 5px;width: 150px;float: left;line-height:18px;">Please register by:</span> <span style="display: inline-block;margin: 0px 0px 5px;float:left;width: 400px;line-height:18px;"><?php if(isset($items['rsvp'])) print $items['rsvp']; ?></span>
        </div>
      </div>
      </div>	
			</div>
      <div class="bottom-seperator" style="margin-bottom: 20px;"><img src="sites/default/themes/custom/paininpractice/images/bottom-line-sp2.png" title="Bottom Seperator" width="800px"/></div>		
			<div class="btm-text">
				<p>The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 32,101 Miller Street North Sydney NSW 2060. © Copyright 2017 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-35/01/17. Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated. The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, Mulgrave, VIC, 3170 or phone 1800 067 567 or +61 3 8523 4200 or email contact.australia@bms.com). Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, Mulgrave, VIC, 3170. ABN: 33 004 333 322. Ph: +61 3 8523 4200). 432AU1700005-04.</p>
			</div>
      
			<div style="margin:10px auto; padding:0; width: 490px;"><img src="sites/default/themes/custom/paininpractice/images/footer-logo-sp.png" style="margin:0 auto; padding:0;" />
			</div>

		
    </div>
    
   <!-- <div id="page-2" class="page-2">
    
    	<div class="header" style="height:180px">
				<h1 style="color:#F26A38;margin-top: 100px;font-weight: normal;">[Insert meeting title level1]</h1>
			</div>
			<div class="top-seperator" style="clear:both; margin-bottom: 20px;"><img src="sites/default/themes/custom/paininpractice/images/top-line-sp2.png" title="Top Seperator" width="890px"/>
			</div>
			<div class="content">
          <div class="about-presenter">
            <div class="orange-title">ABOUT THE PRESENTERS</div>
            <div class="about-presenter-details">
              <div class="purple-text">[Insert speaker name]</div>
              <div>[Insert speaker position]</div>
              <div><i>[Insert Speaker institutional affiliation]</i></div>
              <p>[Insert speakers bio odipsant hil ium sapisti siniat et et mo eic tem es dia que per ruptatiis natem fugia
                  cusapellupti blabore mporerchil ium nonet reped quos in prero bearibus solo reped rovi denis dolorer
                  ruptatiis natem fugia cusapellupti blabore mporerchil ium nonet reped quos in prero bearibus solo reped
                  quos in prero bearibus solo beatem quaeperasolo beatem quaepera nos modit, illabor iatu saes beatem.]</p>
            </div>
            
            <div class="about-presenter-details">
              <div class="purple-text">[Insert speaker name]</div>
              <div>[Insert speaker position]</div>
              <div><i>[Insert Speaker institutional affiliation]</i></div>
              <p>[Insert speakers bio odipsant hil ium sapisti siniat et et mo eic tem es dia que per ruptatiis natem fugia
                  cusapellupti blabore mporerchil ium nonet reped quos in prero bearibus solo reped rovi denis dolorer
                  ruptatiis natem fugia cusapellupti blabore mporerchil ium nonet reped quos in prero bearibus solo reped
                  quos in prero bearibus solo beatem quaeperasolo beatem quaepera nos modit, illabor iatu saes beatem.]</p>
            </div>
            
            <div class="about-presenter-details">
              <div class="purple-text">[Insert speaker name]</div>
              <div>[Insert speaker position]</div>
              <div><i>[Insert Speaker institutional affiliation]</i></div>
              <p>[Insert speakers bio odipsant hil ium sapisti siniat et et mo eic tem es dia que per ruptatiis natem fugia
                  cusapellupti blabore mporerchil ium nonet reped quos in prero bearibus solo reped rovi denis dolorer
                  ruptatiis natem fugia cusapellupti blabore mporerchil ium nonet reped quos in prero bearibus solo reped
                  quos in prero bearibus solo beatem quaeperasolo beatem quaepera nos modit, illabor iatu saes beatem.]</p>
            </div>
            
            <div class="about-presenter-details">
              <div class="purple-text">[Insert speaker name]</div>
              <div>[Insert speaker position]</div>
              <div><i>[Insert Speaker institutional affiliation]</i></div>
              <p>[Insert speakers bio odipsant hil ium sapisti siniat et et mo eic tem es dia que per ruptatiis natem fugia
                  cusapellupti blabore mporerchil ium nonet reped quos in prero bearibus solo reped rovi denis dolorer
                  ruptatiis natem fugia cusapellupti blabore mporerchil ium nonet reped quos in prero bearibus solo reped
                  quos in prero bearibus solo beatem quaeperasolo beatem quaepera nos modit, illabor iatu saes beatem.]</p>
            </div>
            
          </div>
			</div>
    
    <div class="bottom-seperator" style="margin-top: 20px;"><img src="sites/default/themes/custom/paininpractice/images/bottom-line-sp2.png" title="Bottom Seperator" width="800px"/></div>	
    
    <div class="btm-text">
				<p>The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 32, 101 Miller Street Street, North Sydney NSW 2060. © Copyright 2016 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PP-ELI-AUS-0397.</p>
				<p>Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated. The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, Mulgrave, VIC, 3170). PP-xxx-xxx-xxxx. ELI-xxxx/11-16.</p>
			</div>
			<div style="margin:20px auto; padding:0;"><img src="sites/default/themes/custom/paininpractice/images/footer-logo-sp.png" style="margin:0 auto; padding:0;" />
			</div>
  
	</div> -->
  </div>
  <?php elseif(($items[ 'meeting_time']=="1 hour meeting" && $items[ 'template_meeting_type']=='modular' )|| ($items[ 'meeting_time']=="1 hour meeting" && $items[ 'template_meeting_type']=='speaker' )|| ($items[ 'meeting_time']=="3 hour meeting" && $items[ 'template_meeting_type']=='speaker' )): ?>

	<div class="af_pdf" style="margin:0;padding:0;">
		<div id="page-1" class="page-1" style="background: url('sites/default/themes/custom/paininpractice/images/top-ring2.png') no-repeat;margin:0;padding:0;">
			<div class="header">
				<div class="image-wrapper">
					<img src="sites/default/themes/custom/paininpractice/images/logo-2.png" width="280px" height="auto" />
				</div>
				<div class="title-wrapper">
					<div class="banner-title1">Bristol-Myers Squibb & Pfizer Australia<br/> invites you to attend an educational meeting:</div>
					<div class="teaser-title">Cases and conundrums in anticoagulation</div>
				</div>
			</div>
			<div class="top-seperator" style="clear:both"><img src="sites/default/themes/custom/paininpractice/images/line.png" title="Top Seperator" width="930px"/>
			</div>
			<div style="background: url('sites/default/themes/custom/paininpractice/images/ringside2.png') no-repeat right 25%;">
			<div class="content">
			
				<div>
					<div class="orange-title" style="padding: 0; margin-top: 20px;">SPEAKER/FACILITATORS</div>
					<?php if (!empty($items[ 'speaker_details'])): ?>
					<div style="margin:0;padding:0;float:left;">
						<?php foreach($items[ 'speaker_details'] as $key=> $speaker) : ?>
						<div class="details" style="float:left;display:inline-block;width:40%;">
							<div class="purple-text" style="margin-bottom: 5px;"><b style="margin:0;padding:0;font-size: 16px;"><span class="info">
                <?php print $speaker->name_title .'  '. $speaker->full_name;?></span></b>
							</div>
							<div style="font-size: 14px;"><i><?php if(isset($speaker->title))  print $speaker->title ?></i>
							</div>
							<div style="font-size: 14px;"><i><?php if(isset($speaker->organization)) print $speaker->organization ?></i>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				
					<?php endif ?>
					<?php if (!empty($items[ 'facilitators_details'])): ?>
					<!--<div class="orange-title" style="margin: 10px 0 0 0; padding: 0;">Session moderated by</div>-->

					<div class="facilitators" style="margin:0;padding:0;margin-top: 10px;border:1px solid red;">
						<?php foreach($items[ 'facilitators_details'] as $key=> $facilitator) : ?>
						<div class="details">
							<div style="margin: 0; padding: 0;"><i style="font-size: 14px;">Session moderated by </i><b><span class="info"><?php print $facilitator->name_title .'  '. $facilitator->full_name;?></span></b><i style="font-size: 14px;"><?php if(isset($facilitator->organization)) print ', ' ; print $facilitator->organization ?></i></div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif ?>
				</div>
				
				<div>
					<div class="orange-title" style="margin-top: 20px;">DATE AND TIME</div>
					<div class="purple-text">
						<span class="info"><?php print $items['date']; ?></span> <span class="info"><?php print $items['time']; ?></span>
						<?php if($items[ 'meeting_time']=="3 hour meeting" ):?>
						<br/><span style="font-size: 12px;">(Please note - registration starts up to 30mins prior)</span>
					<?php endif;?>
					</div>
				</div>
				<div>
					<div class="orange-title">VENUE</div>
					<div class="purple-text"><span class="info"><?php print $items['venue']; if (isset($items['venue_address'])) print  ', ' ;  print $items['venue_address']; if (isset($items['venue_city'])) print  ', ' ; print $items['venue_city']; ?></span>
					</div>
					<div>
						<div class="orange-title" style="text-transform: uppercase; padding: 0;margin-top: 20px;">AGENDA - COMPRISING
							<?php print $items[ 'duration'];?> OF EDUCATIONAL CONTENT</div>

						<?php if($items[ 'template_meeting_type']=='modular' ){ if (!empty($items[ 'module_type'])):?>
						<div class="module_type" style="margin:0; padding: 0;">
							<?php $i=1; foreach($items[ 'module_type'] as $module_type_name) : ?>
							<div class="details" style="margin:0; padding: 0; font-size: 18px;"><span style="margin:0; padding: 0; color: #76004B;"><b style="margin:0; padding: 0; color: #F26A38;"><?php print "MODULE ". $i.": "?></b><?php print $module_type_name; ?></span>
							</div>
							<?php $i++; endforeach; endif?>
						</div>
						<?php }else{ if(!empty($items[ 'speaker_session_details'])):?>
						<div class="speaker_session" style="margin:0; padding: 0;">
							<?php foreach($items[ 'speaker_session_details'] as $key=> $speaker_session) : ?>
							<div class="details"><b><span class="info"><?php print $speaker_session->session_title;?></span></b><i><?php if(isset($speaker_session->session_topic)) print  ', ' ; print $speaker_session->session_topic ?></i>
							</div>
							<?php endforeach; endif ?>
						</div>
						<?php } ?>
					</div>
					<div style="margin-bottom: 10px;">
						<div class="orange-title">YOUR ELIQUIS REPRESENTATIVES:</div>
						<div><span class="info" style="font-size:13px"><b style="width:200px;float:left;display:inline-block;"><?php print $items['rep'].' '.$items['rep_surname'];?></b><b style="width:200px;float:left;display:inline-block;"><?php if(isset($items['rep_number'])) print  ' ' ; print $items['rep_number']; ?></b><b style="width:200px;float:left;display:inline-block;"><?php if(isset($items['leadrep_company_name'])) print $items['leadrep_company_name']."  Representative"; ?></b></span>
						</div>
						<div><span class="info" style="font-size:13px"><b style="width:200px;float:left;display:inline-block;"><?php print $items['rep_support'].' '.$items['rep_support_surname'];?></b><b style="width:200px;float:left;display:inline-block;"><?php if(isset($items['rep_number_support'])) print  ' ' ; print $items['rep_number_support']; ?></b><b style="width:200px;display:inline-block;float:left;"><?php if(isset($items['supportrep_company_name'])) print  $items['supportrep_company_name']."  Representative"; ?></b></span>
						</div>
						
					</div>
				</div>
			</div>
			</div>
			<div class="bottom-seperator"><img src="sites/default/themes/custom/paininpractice/images/horizontal-line-bottom.jpg" title="Bottom Seperator" width="800px" height="4px"/>
			</div>
      <div style="width: 625px;margin: 15px auto;border: 2px solid #76004B;border-radius: 15px;">
			<div class="purple-heading">REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE,</div>
			<div class="register-text">
<!--         <span><strong>RSVP by <?php //if(isset($items['rsvp'])) print $items['rsvp']; ?></strong></span><br/>
 -->				<?php if(isset($items[ 'fax_number'])){print "Please fax back your registration using form provided, or"; } ?> 
      </div>
			<div style="margin:0 auto;font-size:12px;">
			<div style="display:inline-block;float:left;width:60%;margin-left:18px;margin-top:8px;"><div style="margin-bottom:5px;">Please visit www.thrombo360education.com.au and register:</div>
        <b>Username: </b>your email address and <b>Password: </b><?php print $items['title']; ?></div>
				<div style="display:inline-block;float:left;width:35%;">
        <div style="margin-top:5px;">
          <span class="orange-title" style="line-height:18px;float: left;font-size:14px;">Meeting ID:</span>
					<span style="float:left;line-height:18px;font-size:14px;"><?php print $items['title']; ?></span>
        </div>        
        <div style="margin-bottom:15px;">
          <span class="orange-title" style="line-height:18px;float: left;font-size:14px;">Please register by:</span> 
					<span style="line-height:18px;float:left;font-size:14px;"><?php if(isset($items['rsvp'])) print $items['rsvp']; ?></span>
        </div>
				</div>
      </div>
			</div>
			<div class="btm-text">
				<p>The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 32, 101 Miller Street Street, North Sydney NSW 2060. © Copyright 2016 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PP-ELI-AUS-0397.</p>
				<p>Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated. The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, Mulgrave, VIC, 3170 or phone 1800 067 567 or +61 3 8523 4200 or email contact.australia@bms.com). AU1600448-08</p>
			</div>
			<div style="margin:10px auto; padding:0; width: 630px;"><img src="sites/default/themes/custom/paininpractice/images/footer2.png" width="630px" style="margin:0 auto; padding:0;" />
			</div>

		</div>
	</div>
	<?php elseif($items[ 'meeting_time']=="3 hour meeting" && $items[ 'template_meeting_type']=='modular' ):?>

	<div class="af_pdf" style="margin:0;padding:0;">
		<div id="page-1" class="page-1" style="background: url('sites/default/themes/custom/paininpractice/images/top-ring2.png') no-repeat;margin:0;padding:0;">
			<div class="header">
				<div class="image-wrapper">
					<img src="sites/default/themes/custom/paininpractice/images/logo-2.png" width="280px" height="auto" />
				</div>
				<div class="title-wrapper">
					<div class="banner-title1">Bristol-Myers Squibb & Pfizer Australia<br/> invites you to attend an educational meeting:</div>
					<div class="teaser-title">Cases and conundrums in anticoagulation</div>
				</div>
			</div>
			<div class="top-seperator" style="clear:both"><img src="sites/default/themes/custom/paininpractice/images/line.png" title="Top Seperator" width="930px"/>
			</div>
			<div style="background: url('sites/default/themes/custom/paininpractice/images/ringside2.png') no-repeat right 25%;">
			<div class="content">
				<div>
					<div class="orange-title" style="padding: 0; margin-top: 20px;">SPEAKER/FACILITATORS</div>
					<?php if (!empty($items[ 'speaker_details'])): ?>
					<div class="speaker" style="margin:0;padding:0;float:left;">
						<?php foreach($items[ 'speaker_details'] as $key=> $speaker) : ?>
						<div class="details" style="float:left;display:inline-block;width:40%;">
							<div class="purple-text" style="margin-bottom: 5px;"><b style="margin:0;padding:0;font-size: 16px;"><span class="info">
    <?php print $speaker->name_title .'  '. $speaker->full_name;?></span></b>
							</div>
							<div style="font-size: 14px;"><i><?php if(isset($speaker->title))  print $speaker->title ?></i>
							</div>
							<div style="font-size: 14px;"><i><?php if(isset($speaker->organization)) print $speaker->organization ?></i>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif ?>
					<?php if (!empty($items[ 'facilitators_details'])): ?>
					<!--<div class="orange-title" style="margin: 10px 0 0 0; padding: 0;">Session moderated by</div>-->

					<div class="facilitators" style="margin:0;padding:0;margin-top: 10px;clear:both;">
						<?php foreach($items[ 'facilitators_details'] as $key=> $facilitator) : ?>
						<div class="details">
							<div style="margin: 0; padding: 0;"><i style="font-size: 14px;">Session moderated by </i><b><span class="info"><?php print $facilitator->name_title .'  '. $facilitator->full_name;?></span></b><i style="font-size: 14px;"><?php if(isset($facilitator->organization)) print ', ' ; print $facilitator->organization ?></i></div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif ?>
				</div>
				<div>
					<div class="orange-title" style="margin-top: 20px;">DATE AND TIME</div>
					<div class="purple-text">
						<span class="info"><?php print $items['date']; ?></span> <span class="info"><?php print $items['time']; ?></span>
						<?php if($items[ 'meeting_time']=="3 hour meeting" ):?>
						<br/><span style="font-size: 12px;">(Please note - registration starts up to 30mins prior)</span>
					<?php endif;?>
					</div>
				</div>
				<div>
					<div class="orange-title">VENUE</div>
					<div class="purple-text"><span class="info"><?php print $items['venue']; if (isset($items['venue_address'])) print  ', ' ;  print $items['venue_address']; if (isset($items['venue_city'])) print  ', ' ; print $items['venue_city']; ?></span>
					</div>
					<div>
						<div class="orange-title" style="text-transform: uppercase; padding: 0;margin-top: 20px;">AGENDA - COMPRISING
							<?php print $items[ 'duration'];?> OF EDUCATIONAL CONTENT</div>

						<?php if($items[ 'template_meeting_type']=='modular' ){ if (!empty($items[ 'module_type'])):?>
						<div class="module_type" style="margin:0; padding: 0;">
							<?php $i=1; foreach($items[ 'module_type'] as $module_type_name) : ?>
							<div class="details" style="margin:0; padding: 0;margin-bottom: 5px; font-size: 18px;"><span style="margin:0; padding: 0; color: #76004B;"><b style="margin:0; padding: 0; color: #F26A38;"><?php print "MODULE ". $i.": "?></b><?php print $module_type_name; ?></span>
							</div>							
							<?php $i++; endforeach; endif?>
						</div>
						<?php }else{ if(!empty($items[ 'speaker_session_details'])):?>
						<div class="speaker_session" style="margin:0; padding: 0;">
							<?php foreach($items[ 'speaker_session_details'] as $key=> $speaker_session) : ?>
							<div class="details"><b><span class="info"><?php print $speaker_session->session_title;?></span></b><i><?php if(isset($speaker_session->session_topic)) print  ', ' ; print $speaker_session->session_topic ?></i>
							</div>
							<?php endforeach; endif ?>
						</div>
						<?php } ?>
					</div>
					<div style="margin-bottom: 10px;">
						<div class="orange-title">YOUR ELIQUIS REPRESENTATIVES:</div>
						<div><span class="info" style="font-size:13px"><b style="width:200px;float:left;display:inline-block;"><?php print $items['rep'].' '.$items['rep_surname'];?></b><b style="width:200px;float:left;display:inline-block;"><?php if(isset($items['rep_number'])) print  ' ' ; print $items['rep_number']; ?></b><b style="width:200px;float:left;display:inline-block;"><?php if(isset($items['leadrep_company_name'])) print $items['leadrep_company_name']."  Representative"; ?></b></span>
						</div>
						<div><span class="info" style="font-size:13px"><b style="width:200px;float:left;display:inline-block;"><?php print $items['rep_support'].' '.$items['rep_support_surname'];?></b><b style="width:200px;float:left;display:inline-block;"><?php if(isset($items['rep_number_support'])) print  ' ' ; print $items['rep_number_support']; ?></b><b style="width:200px;display:inline-block;float:left;"><?php if(isset($items['supportrep_company_name'])) print  $items['supportrep_company_name']."  Representative"; ?></b></span>
						</div>
						
					</div>
				</div>
			</div>
			</div>
			<div class="bottom-seperator"><img src="sites/default/themes/custom/paininpractice/images/horizontal-line-bottom.jpg" title="Bottom Seperator" width="800px" height="4px"/>
			</div>
      <div style="width: 625px;margin: 15px auto;border: 2px solid #76004B;border-radius: 15px;">
			<div class="purple-heading">REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE,</div>
			<div class="register-text">
			<?php if(isset($items[ 'fax_number'])){print "Please fax back your registration using form provided, or"; } ?> </div>
			     
      <div style="margin:0 auto;font-size:12px;">
				<div style="display:inline-block;float:left;width:60%;margin-left:18px;margin-top:8px"><div style="margin-bottom:5px;">Please visit www.thrombo360education.com.au and register:</div>
        <b>Username: </b>your email address and <b>Password: </b><?php print $items['title']; ?></div>
				<div style="display:inline-block;float:left;width:35%">
         <div style="margin-top:5px;">
          <span class="orange-title" style="line-height:18px;float: left;font-size:14px;">Meeting ID:</span>
					<span style="float:left;line-height:18px;font-size:14px;"><?php print $items['title']; ?></span>
        </div>        
        <div style="margin-bottom:15px;">
          <span class="orange-title" style="line-height:18px;float: left;font-size:14px;">Please register by:</span> 
					<span style="line-height:18px;float:left;font-size:14px;"><?php if(isset($items['rsvp'])) print $items['rsvp']; ?></span>
        </div>
				</div>
				</div>
			</div>
			
			<div class="btm-text">
				<p>The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 32, 101 Miller Street Street, North Sydney NSW 2060. © Copyright 2016 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PP-ELI-AUS-0397.</p>
				<p>Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated. The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, Mulgrave, VIC, 3170 or phone 1800 067 567 or +61 3 8523 4200 or email contact.australia@bms.com). AU1600448-01</p>
			</div>
			<div style="margin:10px auto; padding:0; width: 630px;"><img src="sites/default/themes/custom/paininpractice/images/footer2.png" width="630px" style="margin:0 auto; padding:0;" />
			</div>

		</div>
	</div>
	<?php endif ?>
</body>

</html>
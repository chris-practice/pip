<html>

<head>
	<style>
		@page {
			size: 8.5in 15in;
			margin: 5mm;
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
			width: 100%;
			height: 250px;
			padding-left: 50px;
			float: left;
		}
		.content {
			padding-left: 50px;
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
			height: 215px;
			margin-top: 55px;
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
		.orange-title {
			font-size: 20px;
			line-height: 25px;
			color: #F26A38;
			font-family:
			/*'FlamaBas',*/
			
			sans-serif;
			margin: 10px 0;
		}
		.purple-text {
			color: #76004B;
			font-size: 18px;
			line-height: 20px;
		}
		.purple-heading {
			width: 480px;
			font-size: 18px;
			margin: 20px auto;
			color: #76004B;
			font-weight: bold;
		}
		.register-text {
			width: 480px;
			margin: 20px auto;
			text-align: center;
		}
		.site-link {
			width: 400px;
			margin: 20px auto 100px;
			font-size: 16px;
		}
		.site-link .orange-title {
			font-size: 18px;
			font-weight: bold;
		}
		.btm-text {
			width: 700px;
			font-size: 9px;
			margin: 0 auto;
			text-align: justify;
		}
	</style>
</head>

<body style="margin:0;padding:0;">
	<?php if(($items[ 'meeting_time']=="1 hour meeting" && $items[ 'template_meeting_type']=='modular' )|| ($items[ 'meeting_time']=="1 hour meeting" && $items[ 'template_meeting_type']=='speaker' )|| ($items[ 'meeting_time']=="3 hour meeting" && $items[ 'template_meeting_type']=='speaker' )): ?>

	<div class="af_pdf" style="margin:0;padding:0;">
		<div id="page-1" class="page-1" style="background: url('sites/default/themes/custom/paininpractice/images/top-ring2.png') no-repeat;margin:0;padding:0;">
			<div class="header">
				<div class="image-wrapper">
					<img src="sites/default/themes/custom/paininpractice/images/logo-2.png" width="350px" height="auto" />
				</div>
				<div class="title-wrapper">
					<div class="banner-title1">Bristol-Myers Squibb & Pfizer Australia invites you to attend an educational meeting:</div>
					<div class="teaser-title">Cases and conundrums in anticoagulation</div>
				</div>
			</div>
			<div class="top-seperator"><img src="sites/default/themes/custom/paininpractice/images/horizontal-line-top.jpg" title="Top Seperator" width="780px" height="4px" />
			</div>
			<div class="content" style="background: url('sites/default/themes/custom/paininpractice/images/ringside2.png') no-repeat center right;">
				<div>
					<div class="orange-title" style="margin: 10px 0 0 0; padding: 0;">SPEAKER/FACILITATORS</div>
					<?php if (!empty($items[ 'speaker_details'])): ?>
					<div style="margin:0;padding:0;">
						<?php foreach($items[ 'speaker_details'] as $key=> $speaker) : ?>
						<div class="details">
							<div class="purple-text"><b style="margin:0;padding:0;"><span class="info">
                <?php print $speaker->name_title .'  '. $speaker->full_name;?></span></b>
							</div>
							<div><i><?php if(isset($speaker->title))  print $speaker->title ?></i>
							</div>
							<div><i><?php if(isset($speaker->organization)) print $speaker->organization ?></i>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif ?>
					<?php if (!empty($items[ 'facilitators_details'])): ?>
					<!--<div class="orange-title" style="margin: 10px 0 0 0; padding: 0;">Session moderated by</div>-->

					<div class="facilitators" style="margin:0;padding:0;">
						<?php foreach($items[ 'facilitators_details'] as $key=> $facilitator) : ?>
						<div class="details">
							<div>Session moderated by <b><span class="info">
          <?php print $facilitator->name_title .'  '. $facilitator->full_name;?></span></b><i><?php if(isset($facilitator->organization)) print ', ' ; print $facilitator->organization ?></i>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif ?>
				</div>
				<div>
					<div class="orange-title">DATE AND TIME</div>
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
						<div class="orange-title" style="text-transform: uppercase; margin-bottom: 0; padding: 0;">AGENDA - COMPRISING
							<?php print $items[ 'duration'];?> OF EDUCATIONAL CONTENT</div>

						<?php if($items[ 'template_meeting_type']=='modular' ){ if (!empty($items[ 'module_type'])):?>
						<div class="module_type" style="margin:0; padding: 0;">
							<?php $i=1; foreach($items[ 'module_type'] as $module_type_name) : ?>
							<div class="details"><b><span class="info"><?php print "Module ". $i.": ".$module_type_name; ?></span></b>
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
					<div>
						<div class="orange-title">YOUR ELIQUIS REPRESENTATIVES:</div>
						<div><b><span class="info"><?php print $items['rep'].' '.$items['rep_surname'];if(isset($items['rep_number'])) print  ', ' ; print $items['rep_number']; ?></span></b>
						</div>
						<div><b><span class="info"><?php print $items['rep_support'].' '.$items['rep_support_surname'];if(isset($items['rep_number_support'])) print  ', ' ; print $items['rep_number_support']; ?></span></b>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-seperator"><img src="sites/default/themes/custom/paininpractice/images/horizontal-line-bottom.jpg" title="Bottom Seperator" width="780px" height="4px" />
			</div>
			<div class="purple-heading">REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</div>
			<div class="register-text">
				<?php if(isset($items[ 'fax_number'])){print "Please fax back your registration using form provided, or"; } ?> </div>
			<div class="site-link">visit <b>www.thrombo360education.com.au</b> and quote
				<br/>
				<span class="orange-title">Meeting ID: <span class="meeting-id-num"> <?php print $items['title']; ?></span></span>
			</div>

			<div class="btm-text">
				<p>The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 32, 101 Miller Street Street, North Sydney NSW 2060. © Copyright 2016 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-30-xxx/10/16.</p>
				<p>Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated. The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, Mulgrave, VIC, 3170). PP-xxx-xxx-xxxx. ELI-xxxx/11-16.</p>
			</div>
			<div style="margin:10px auto; padding:0; width: 700px;"><img src="sites/default/themes/custom/paininpractice/images/footer2.png" width="700px" style="margin:0 auto; padding:0;" />
			</div>

		</div>
	</div>
	<?php elseif($items[ 'meeting_time']=="3 hour meeting" && $items[ 'template_meeting_type']=='modular' ):?>

	<div class="af_pdf" style="margin:0;padding:0;">
		<div id="page-1" class="page-1" style="background: url('sites/default/themes/custom/paininpractice/images/top-ring.jpg') no-repeat;margin:0;padding:0;">
			<div class="header">
				<div class="image-wrapper">
					<img src="sites/default/themes/custom/paininpractice/images/logo-2.png" width="350px" height="auto" />
				</div>
				<div class="title-wrapper">
					<div class="banner-title1">Bristol-Myers Squibb & Pfizer Australia invites you to attend an educational meeting:</div>
					<div class="teaser-title">Cases and conundrums in anticoagulation</div>
				</div>
			</div>
			<div class="top-seperator"><img src="sites/default/themes/custom/paininpractice/images/horizontal-line-top.jpg" title="Top Seperator" width="780px" height="4px" />
			</div>
			<div class="content" style="background: url('sites/default/themes/custom/paininpractice/images/ringside2.png') no-repeat center right;">
				<div>
					<div class="orange-title" style="margin: 10px 0 0 0; padding: 0;">SPEAKER/FACILITATORS</div>
					<?php if (!empty($items[ 'speaker_details'])): ?>
					<div class="speaker" style="margin:0;padding:0;">
						<?php foreach($items[ 'speaker_details'] as $key=> $speaker) : ?>
						<div class="details">
							<div class="purple-text"><b style="margin:0;padding:0;"><span class="info">
    <?php print $speaker->name_title .'  '. $speaker->full_name;?></span></b>
							</div>
							<div><i><?php if(isset($speaker->title))  print $speaker->title ?></i>
							</div>
							<div><i><?php if(isset($speaker->organization)) print $speaker->organization ?></i>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif ?>
					<?php if (!empty($items[ 'facilitators_details'])): ?>
					<!--<div class="orange-title" style="margin: 10px 0 0 0; padding: 0;">Session moderated by</div>-->

					<div class="facilitators" style="margin:0;padding:0;">
						<?php foreach($items[ 'facilitators_details'] as $key=> $facilitator) : ?>
						<div class="details">
							<div>Session moderated by <b><span class="info">
          <?php print $facilitator->name_title .'  '. $facilitator->full_name;?></span></b><i><?php if(isset($facilitator->organization)) print ', ' ; print $facilitator->organization ?></i>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif ?>
				</div>
				<div>
					<div class="orange-title">DATE AND TIME</div>
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
						<div class="orange-title" style="text-transform: uppercase; margin-bottom: 0; padding: 0;">AGENDA - COMPRISING
							<?php print $items[ 'duration'];?> OF EDUCATIONAL CONTENT</div>

						<?php if($items[ 'template_meeting_type']=='modular' ){ if (!empty($items[ 'module_type'])):?>
						<div class="module_type" style="margin:0; padding: 0;">
							<?php $i=1; foreach($items[ 'module_type'] as $module_type_name) : ?>
							<div class="details"><b><span class="info"><?php print "Module ". $i.": ".$module_type_name; ?></span></b>
							</div>
							<br/>
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
					<div>
						<div class="orange-title">YOUR ELIQUIS REPRESENTATIVES:</div>
						<div><b><span class="info"><?php print $items['rep'].' '.$items['rep_surname'];if(isset($items['rep_number'])) print  ', ' ; print $items['rep_number']; ?></span></b>
						</div>
						<div><b><span class="info"><?php print $items['rep_support'].' '.$items['rep_support_surname'];if(isset($items['rep_number_support'])) print  ', ' ; print $items['rep_number_support']; ?></span></b>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-seperator"><img src="sites/default/themes/custom/paininpractice/images/horizontal-line-bottom.jpg" title="Bottom Seperator" width="780px" height="4px" />
			</div>
			<div class="purple-heading">REGISTER NOW FOR THIS INTERACTIVE EXPERIENCE</div>
			<div class="register-text">
				<?php if(isset($items[ 'fax_number'])){print "Please fax back your registration using form provided, or"; } ?> </div>
			<div class="site-link" style="width: 700px; margin: 0 auto;"><img src="sites/default/themes/custom/paininpractice/images/accrediated-logo.jpg" style="display: inline-block;float: left; width: 50px;" />
				<p style="display: inline-block; float: left; width: 400px; margin: 0 60px 20px 100px;">visit <b>www.thrombo360education.com.au</b> and quote
					<br/>
					<span class="orange-title">Meeting ID: <span class="meeting-id-num"> <?php print $items['title']; ?></span></span>
					<br/>
					<span>1.5 hours of accredited content attracting</span>
					<br/>
					<span>3 Category 2 QI&CPD points. ACGP Activity ID: 45057.</span>
				</p>
				<img src="sites/default/themes/custom/paininpractice/images/Racp-logo.jpg" style="display: inline-block;float: left; width: 120px;" />
			</div>

			<div class="btm-text">
				<p>The Thrombo 360 Experience is an educational program supported by Pfizer PFE Australia Pty Ltd, ABN 17 169 276 920, 38–42 Wharf Road, West Ryde NSW 2114, Bristol-Myers Squibb Australia Pty Ltd, ABN 33 004 333 322, Level 2, 4 Nexus Court, Mulgrave VIC 3170 and developed by Elixir Healthcare Education Pty Limited, ABN 36 092 185 665, Level 32, 101 Miller Street Street, North Sydney NSW 2060. © Copyright 2016 Pfizer–Bristol-Myers Squibb Alliance and Elixir Healthcare Education Pty Limited. PFI-30-xxx/10/16.</p>
				<p>Attendees are responsible for obtaining approval to receive and/or disclose hospitality as required by their employer or professional association. In line with the Medicines Australia Code of Conduct, this educational meeting is only open to healthcare providers. Guests or family members cannot be accommodated. The Pfizer–Bristol-Myers Squibb Alliance respects your privacy, and fully complies with the Privacy Act 1988 (Cth) and the Australian Privacy Principles. For further details on how the Pfizer-BMS Alliance (and Pfizer and BMS respectively) collect, store, use and disclose your personal information please see each company’s Privacy Policy at www.bmsa.com.au or www.pfizer.com.au. If you wish to enquire about any personal information that Pfizer or BMS hold about you, to cease receiving information from us, request a copy of either company’s Privacy Policy, or complain about the processing of your personal information that Pfizer or BMS holds about you, then please write to the Privacy Officer at either company (Pfizer Australia Pty Ltd, 38-42 Wharf Road, West Ryde, NSW, 2114 or email privacyofficer.australia@pfizer.com, or Bristol-Myers Squibb Australia Pty Ltd, 4 Nexus Court, Mulgrave, VIC, 3170). PP-xxx-xxx-xxxx. ELI-xxxx/11-16.</p>
			</div>
			<div style="margin:10px auto; padding:0; width: 700px;"><img src="sites/default/themes/custom/paininpractice/images/footer2.png" width="700px" style="margin:0 auto; padding:0;" />
			</div>

		</div>
	</div>
	<?php endif ?>
</body>

</html>
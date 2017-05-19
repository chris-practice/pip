<?php global $base_url; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>index</title>
		<link href="sites/default/themes/custom/paininpractice/css/meeting_agenda.css" rel="stylesheet" type="text/css" />
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
	<body>
      <!--Meeting Type AF One Hour meeting----->
  		<?php if($items['ac_type']  == "AF" && $items['meeting_time'] == "1 hour meeting"): ?>
  <div id="page-1" class="page-1" style="background:url('/sites/default/themes/custom/paininpractice/images/meeting_agenda_bg.png') no-repeat center top;">
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Life is about creating<br>
  &nbsp;&nbsp;and living experiences<br>
  &nbsp;&nbsp;that are worth sharing<span>"</span></div>
  <div class="author">STEVE JOBS</div>
  </div>

  <div class="pink-bar">	
   <div class="orange-title">EXPERIENCE – REDEFINE – MASTER</div>
  <div class="white-title">ANTICOAGUATION MANAGEMENT IN PRIMARY CARE<br>
  Your invitation to The Thrombo 360 Experience </div>
    </div><br>
	  <div class="meeting-title">AF - 1 hour meeting</div>
    <div class="tbl-wrapper">	
    <table cellpadding="0" cellspacing="0">
    <tr>
    <th>Time</th>
    <th >Session Details</th>

    </tr>
	<tr>
    <td class="time"><div class="black-txt">25 mins</div></td>
    <td class=""><div class="orange-txt">The Eliquis experience</div>
	<div class="black-txt">The pivotal data supporting Eliquis and its use in the clinical setting</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">25 mins</div></td>
    <td class=""><div class="orange-txt">Know your NVAF patient</div>
	<div class="black-txt">Meet Carlo, a patient presenting with NVAF, understand the perspectives and 
challenges that face the GP in clinical practice and understand the emerging 
uses of NOACs – and Eliquis – in treating NVAF</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">10 mins</div></td>
    <td class=""><div class="orange-txt">Screening for AF and the AliveCor mobile ECG</div>
	<div class="black-txt">The rationale for AF screening with a hands-on demonstration of this mobile smartphone device</div>
	</td>
	</tr>	
    </table>

    </div>
   </div>
  
    <!--Meeting Type AF Two Hour meeting----->
     <?php elseif($items['ac_type']  == "AF" && $items['meeting_time'] == "3 hour meeting"): ?>
<div id="page-2" class="page-2" style="background:url('/sites/default/themes/custom/paininpractice/images/meeting_agenda_bg.png') no-repeat center top;">
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Life is about creating<br>
  &nbsp;&nbsp;and living experiences<br>
  &nbsp;&nbsp;that are worth sharing<span>"</span></div>
  <div class="author">STEVE JOBS</div>
  </div>

  <div class="pink-bar">	
   <div class="orange-title">EXPERIENCE – REDEFINE – MASTER</div>
  <div class="white-title">ANTICOAGUATION MANAGEMENT IN PRIMARY CARE<br>
  Your invitation to The Thrombo 360 Experience </div>
    </div><br>
	  <div class="meeting-title">AF - 2 hour meeting</div>
    <div class="tbl-wrapper">	
    <table cellpadding="0" cellspacing="0">
    <tr>
    <th>Time</th>
    <th >Session Details</th>

    </tr>
	<tr>
    <td class="time"><div class="black-txt">25 mins</div></td>
    <td class=""><div class="orange-txt">The Eliquis experience</div>
	<div class="black-txt">The pivotal data supporting Eliquis and its use in the clinical setting</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">35 mins</div></td>
    <td class=""><div class="orange-txt">Know your NVAF patient</div>
	<div class="black-txt">Meet Carlo, a patient presenting with NVAF, understand the perspectives and 
challenges that face the GP in clinical practice and understand the emerging uses of 
NOACs – and Eliquis – in treating NVAF</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">30 mins</div></td>
    <td class=""><div class="orange-txt">The GP experience</div>
	<div class="black-txt">Case studies submitted by GPs illustrate how NOACs should be used for optimal 
management of patients  in the primary care setting</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">10 mins</div></td>
    <td class=""><div class="orange-txt">Screening for AF and the AliveCor mobile ECG</div>
	<div class="orange-txt">The rationale for AF screening with a hands-on demonstration of this mobile 
smartphone device</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">20 mins</div></td>
    <td class=""><div class="orange-txt">Your questions answered</div>
	<div class="black-txt">Interactive discussion where you can put your management challenges to the 
presenters and your GP colleagues</div>
	</td>
	</tr>
    </table>

    </div>
   </div>
    <!--Meeting Type DVT One Hour meeting----->	
    <?php elseif($items['ac_type']  == "DVT" && $items['meeting_time'] == "1 hour meeting"): ?>
<div id="page-3" class="page-3" style="background:url('/sites/default/themes/custom/paininpractice/images/meeting_agenda_bg.png') no-repeat center top;">
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Life is about creating<br>
  &nbsp;&nbsp;and living experiences<br>
  &nbsp;&nbsp;that are worth sharing<span>"</span></div>
  <div class="author">STEVE JOBS</div>
  </div>

  <div class="pink-bar">	
   <div class="orange-title">EXPERIENCE – REDEFINE – MASTER</div>
  <div class="white-title">ANTICOAGUATION MANAGEMENT IN PRIMARY CARE<br>
  Your invitation to The Thrombo 360 Experience </div>
    </div><br>
	  <div class="meeting-title">DVT - 1 hour meeting</div>
    <div class="tbl-wrapper">	
    <table cellpadding="0" cellspacing="0">
    <tr>
    <th>Time</th>
    <th >Session Details</th>

    </tr>
	<tr>
    <td class="time"><div class="black-txt">25 mins</div></td>
    <td class=""><div class="orange-txt">The Eliquis experience</div>
	<div class="black-txt">The pivotal data supporting Eliquis and its use in the clinical setting</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">25 mins</div></td>
    <td class=""><div class="orange-txt">Know your DVT/PE patient</div>
	<div class="black-txt">Meet Barbara, a patient presenting with a DVT, understand the perspectives and 
challenges that face the GP in clinical practice and understand the emerging uses of 
NOACs – and Eliquis – in treating DVT and PE</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">10 mins</div></td>
    <td class=""><div class="orange-txt">Screening for AF and the AliveCor mobile ECG</div>
	<div class="black-txt">The rationale for AF screening with a hands-on demonstration of this mobile smartphone device</div>
	</td>
	</tr>	
    </table>

    </div>
   </div>
  
    <!--Meeting Type DVT Two Hour meeting----->
     <?php elseif($items['ac_type']  == "DVT" && $items['meeting_time'] == "3 hour meeting"): ?>
<div id="page-4" class="page-4" style="background:url('/sites/default/themes/custom/paininpractice/images/meeting_agenda_bg.png') no-repeat center top;">
  <div class="title-wrapper">
  <div class="banner-title1"><span>"</span>Life is about creating<br>
  &nbsp;&nbsp;and living experiences<br>
  &nbsp;&nbsp;that are worth sharing<span>"</span></div>
  <div class="author">STEVE JOBS</div>
  </div>

  <div class="pink-bar">	
   <div class="orange-title">EXPERIENCE – REDEFINE – MASTER</div>
  <div class="white-title">ANTICOAGUATION MANAGEMENT IN PRIMARY CARE<br>
  Your invitation to The Thrombo 360 Experience </div>
    </div><br>
	  <div class="meeting-title">DVT - 2 hour meeting</div>
    <div class="tbl-wrapper">	
    <table cellpadding="0" cellspacing="0">
    <tr>
    <th>Time</th>
    <th >Session Details</th>

    </tr>
	<tr>
    <td class="time"><div class="black-txt">25 mins</div></td>
    <td class=""><div class="orange-txt">The Eliquis experience</div>
	<div class="black-txt">The pivotal data supporting Eliquis and its use in the clinical setting</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">35 mins</div></td>
    <td class=""><div class="orange-txt">Know your DVT/PE patient</div>
	<div class="black-txt">Meet Barbara, a patient presenting with a DVT, understand the perspectives and 
challenges that face the GP in clinical practice and understand the emerging uses of 
NOACs – and Eliquis – in treating DVT and PE</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">30 mins</div></td>
    <td class=""><div class="orange-txt">The GP experience</div>
	<div class="black-txt">Case studies submitted by GPs illustrate how NOACs should be used for optimal 
management of patients in the primary care setting</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">10 mins</div></td>
    <td class=""><div class="orange-txt">Screening for AF and the AliveCor mobile ECG</div>
	<div class="orange-txt">The rationale for AF screening with a hands-on demonstration of this mobile 
smartphone device</div>
	</td>
	</tr>
	<tr>
    <td class="time"><div class="black-txt">20 mins</div></td>
    <td class=""><div class="orange-txt">Your questions answered</div>
	<div class="black-txt">Interactive discussion where you can put your management challenges to the 
presenters and your GP colleagues</div>
	</td>
	</tr>
    </table>

    </div>
   </div>
    
       <?php endif ?>
   
	</body>
</html>

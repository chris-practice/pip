<?php global $base_url; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>index</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link href="sites/default/themes/custom/paininpractice/css/offer-letter.css" rel="stylesheet" type="text/css" />
		
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
	 <?php  //print_r($items);
      // foreach($items['facilitators_details'] as $facilitators) {
    // $facilitators_ids[] = $facilitators; 
  // }
  // foreach($facilitators as $key => $value) {
   // print_r($value);
  // }die();
  // //print_r( $facilitators_ids);
 ?>
	</head>
	<body style="margin: 20px 50px;padding:0;">
  <div id="page-1">
  <div class="offer-letter-logos"><img src="sites/default/themes/custom/paininpractice/images/offer-letter-logos.jpg" /></div>
  <div class="address-wrapper">
  <div class="left-wrapper"><b>Pfizer Australia Pty Ltd</b><br>
ABN: 50 008 422 348<br>
38 - 42 Wharf Road<br>
West Ryde NSW 2114<br>
Tel 02 9850 3947 Fax 02 9505 7110</div>
  <div class="rght-wrapper"><b>Bristol-Myers Squibb Australia Pty Ltd</b><br>
ABN: 33 004 333 322<br>
Level 2/4 Nexus Cr<br>
Mulgrave, Vic 3710<br>
Tel +613 8523 4200 Fax +613 852 4455</div>
  </div>
  <div class="date">C&A: <?php echo date('d F Y'); ?></div>
  <div class="gp-name-address"><?php echo $items['title']. " " . $items['name']. " " . $items['surname'] ?> <!--dummy name(GP title, GP name, GP surname)--><br>
  <?php echo $items['organization']; ?> <!--dummy company(GP Organisation)--><br>
  <?php echo $items['address']; ?><!--dummy address line 1(GP Address)--><br>
  <?php echo $items['suburb'] . " " . $items['state'] . " " . $items['postcode']; ?><!--dummy address line 2(GP Suburb GP State GP Postcode)-->
  </div>
  <div class="doc-name">Dear <?php echo $items['title'] . " " .$items['name']. " " . $items['surname'] ?></div>
  <div class="subject">Loan of AliveCor Mobile ECG device</div>
  <div class="matter">
  <p>Pfizer Australia Pty Ltd  (Pfizer) and  Bristol-Myers Squibb Australia Pty Ltd (BMS) are committed to supporting the delivery of quality patient care. In light of this commitment, we would like to offer you the loan of the AliveCor Mobile ECG device for a period of 12 weeks covering <strong><?php echo $items['start_date']; ?></strong> to <strong><?php echo $items['end_date']; ?>.</strong><br>
Additionally, we need to tell you about an important matter relating to accepting this offer letter.</p>
<p>As you may be aware, Pfizer is a subsidiary of the U.S. Company, Pfizer Inc., and BMS is a subsidiary of the U.S. Company, Bristol-Myers Squibb Company and as a result, they must ensure that their activities are conducted in accordance with the US Foreign Corrupt Practices Act (FCPA). In essence, the FCPA prohibits making, promising, or authorizing the making of a payment or providing anything of value to a non-U.S. Government official to improperly or corruptly obtain or retain business or otherwise gain an improper advantage.   The definition of “Government Official” is defined quite broadly and would include all health care professionals in Australia, as well as public servants and elected officials.</p>   
<p>Therefore, in return for accepting the loan of this equipment, we are required to inform you of the following conditions governing this agreement:</p>
<ul class="listing1">
<li>The loan of this equipment is in no way an inducement for you or other HCPs to reimburse, prescribe, or purchase a Pfizer or BMS product or act as an improper influence to Pfizer’s or BMS’s business activities.
<li>Neither Pfizer nor BMS are the manufacturer of this equipment.  Alive Technologies is the manufacturer of this equipment, and all enquiries regarding this equipment should be directed to them at Tel: 07 55284850 or Email: info@alivetec.com.</li>
<li>To the full extent permitted by law, Pfizer and BMS exclude all warranties, express or implied, in connection with the loan of this equipment to you, as well as all liability (including for negligence) for any personal injury or death, or loss, expense or damage (including loss of opportunity) whether direct, indirect, special or consequential, arising in any way out of or in connection with the use of this equipment, any technical difficulties or equipment malfunction (whether or not under Pfizer’s or BMS’s control), or any theft or unauthorized access of, or third party interference with, this equipment.  To the full extent permitted by law, Pfizer’s and BMS’ liability (including for negligence) arising out of or in connection with this letter shall be limited to a maximum of A$20,000.</li>
</ul>
<div class="pfizer-reserve">Pfizer and BMS reserve the right to:</div>

<ul class="listing2"><li>review the way the equipment is being used, and </li>
<li>request evidence that the equipment is being stored securely, and maintained appropriately whilst on loan to you.</li>
</ul>
<div class="replacement-txt">Notwithstanding anything else in this letter, Pfizer and BMS remains the owner of this equipment and will replace faulty equipment (subject to availability)</div>
  </div>
  </div><!--end of page1 -->
  <div id="page-2">
  <div class="top">
   <div class="gp-name-comp"><?php echo $items['title']. " " . $items['name']. " " . $items['surname'] ?><!--dummy name(GP title, GP name, GP surname)--><br>
  <?php echo $items['organization']; ?><!--dummy company(GP Organisation)-->
  </div>
  <div class="pg2-date"><?php echo date('d F Y'); ?><!--dummy date--><br>
  
  </div>
  </div>
 <div class="legal-obligations">Pfizer and BMS take these legal obligations seriously.  Consequently, if we find that you or associates have not met these conditions, we will terminate our support and we will not provide any further support in the future.</div>
<div class="look">We look forward to working with you.  In the meantime, should you need any further information, please contact me on <?php echo $items['rep_phone']; ?>.</div>
<div class="sincere">Yours sincerely,</div>
<div class="colleague-name"><?php echo $items['rep_name']; ?><!--colleague name--><br>
<!--colleague title--></div>
<div class="agree"><span class="checkbox"></span><span class="agree-content">By signing below: (a) I acknowledge and agree to the conditions stated above, and (b) I confirm that I have received this device, it is in good working order and I have been trained on its appropriate use</span></div>
<div class="sign">Signed: .......................................................................................................................</div>
<div class="print-name">Please print name: ......................................................................................................</div>
  </div><!--end of page2 -->
	</body>
</html>

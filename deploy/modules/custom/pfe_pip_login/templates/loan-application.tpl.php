<?php global $base_url; ?>
  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta charset="utf-8" />
    <title>index</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href="sites/default/themes/custom/paininpractice/css/loan-application.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
      <!-- @page :left {
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
      <div class="date"><!--C&A: dummy--><?php echo date('d F Y'); ?></div>
      <div class="subject">Equipment Loan Application Form</div>
      <div class="address-wrapper">
        <div class="left-wrapper"> TO: Pfizer PFE Australia Pty Ltd
          <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;38-42 Wharf Rd
          <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;West Ryde NSW 2114
        </div>
        <div class="rght-wrapper">Bristol-Myers Squibb Australia Pty Ltd
          <br> Level 2/4 Nexus Crt,
          <br> Mulgrave, Vic 3170
        </div>
      </div>
      <div class="attention">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attention: (Pfizer/BMS contact) <span class="attention-dots"><?php global $user;
	   echo " " .  $items['logged_in_user_name'] . " " .$items['logged_in_user_surname']. "(".  $items['logged_in_user_mail']. ")";?></span></div>
      <div class="application-details">APPLICANT DETAILS:</div>
      <div class="matter">
        <table>
          <tr>
            <td class="lbl">Applicant Name:</td>
            <td class="yellow"><?php echo $items['name'] . " " . $items['surname']; ?></td>
          </tr>
          <tr>
            <td class="lbl">Organisation:</td>
            <td class="yellow"><?php echo $items['organization']; ?> </td>
          </tr>
          <tr>
            <td class="lbl addr">Address:</td>
            <td class="yellow"><?php echo $items['address'] . ", " . $items['suburb'] . " " . $items['state'] . " " . $items['postcode']; ?></td>
          </tr>
          <tr>
            <td class="lbl phone">Phone:</td>
            <td class="yellow"><?php echo $items['phone']; ?></td>
          </tr>
          <tr>
            <td class="lbl">Email Address:</td>
            <td class="align-right">
              <div class="email-add yellow"><?php echo $items['email']; ?></div>
            </td>
          </tr>
        </table>
        <div class="sky-blue">
          <p>Pfizer PFE Australia Pty Ltd (Pfizer) or Bristol-Myers Squibb Australia Pty Ltd (BMS), (as applicable) may grant or refuse equipment loan applications in its absolute discretion. Completion of this form is not a commitment by Pfizer or BMS,
            (as applicable) to provide the equipment. All equipment loaned must be used to promote Health Care Benefits of patients.</p>
          <p>The purpose of collecting this information is so that Pfizer or BMS (as applicable) can process applications in respect of compliance requirements that Pfizer and BMS have to meet in relation to the US Foreign Corrupt Practices Act and the UK
            Bribery Act. All information submitted to Pfizer or BMS (as applicable) is only for the purpose of processing this application and is subject to the relevant privacy legislation.</p>
        </div>
        <div class="sign-wrapper">
          <div class="sign">Signed:</div>
          <div class="dt">Date:</div>
        </div>
        <div class="sponsership">SPONSORSHIP DETAILS:</div>
        <table class="tbl-2">
          <tr>
            <td class="lbl">Equipment Requested:</td>
            <td class="yellow">AliveCor device</td>
         
            <td class="lbl">Loan Period:</td>
            <td>12 weeks (3 months)</td>
          </tr>
          <tr>
            
            <td>Start Date:</td>
          </tr>
        </table>
        <div class="need">Please Outline the need which will be met with the availability of this equipment i.e. Health care outcome</div>
        <div class="black-box"></div>
        <div class="smll-txt">Pfizer has implemented a Global Policy on Interactions with Healthcare Professionals to ensure that all of our interactions are consistent and transparent. We believe this is not only in the best interest of Pfizer but is in the best interest
          of healthcare professionals. As such, we have implemented a series of standard questions globally to assist with determining if our interaction is with someone who is in a position of significant influence. All such interactions will be reviewed
          and approved by two levels of Management within Pfizer. The interaction with the healthcare professional as proposed in this form is subject to BMS approval and review. Privacy Statement: Pfizer PFE Australia Pty Limited or Bristol-Myers Squibb
          Australia Pty Ltd (as applicable) will only use and disclose any personal information contained in this form for the purpose of processing this application. This form may also be sent to related companies of Pfizer or BMS (as applicable), business
          partners and service providers which may be located in Australia or overseas. Any personal information contained in this form will be stored and handled in accordance with Australian Privacy Legislation and Pfizer’s or BMS’s (as applicable)
          privacy policy available at <a href="http://www.pfizer.com.au/privacy">http://www.pfizer.com.au/privacy</a> or <a href="http://au.bms.com/legal/Pages/Privacy.aspx">http://au.bms.com/legal/Pages/Privacy.aspx</a> (as applicable). If you would
          like to access, update or delete your personal information, please contact Pfizer’s or BMS’ (as applicable) Privacy Officer at <a href="mailto:privacyofficer.australia@pfizer.com">privacyofficer.australia@pfizer.com</a> or <a href="mailto:contact.australia@bms.com">contact.australia@bms.com</a>          (as applicable).</div>
      </div>
    </div>
    <!--end of page1 -->
    <div id="page-2">
      <div class="offer-letter-logos"><img src="sites/default/themes/custom/paininpractice/images/offer-letter-logos.jpg" /></div>
      <div class="certification">Certification:</div>
      <div class="blk-bg">CERTIFICATION</div>
      <div class="agree"><span class="checkbox"></span><span class="agree-content">I certify that the loaning of the equipment as  outlined in this form is for the purpose of achieving better health outcomes for patients and is not for the purpose of improperly inducing the applicant or the organisation to make any governmental act or decision to assist Pfizer or BMS (as applicable) in obtaining or retaining business, and is not being provided to improperly influence or reward the applicant or the organisation for past, present or future use or support of Pfizer or BMS (as applicable) medicines or to improperly influence the outcome of a clinical trial.</span></div>
      <div>
        <div class="print-name"><span>Print Name: </span><span class="dots"></span></div>
        <div class="title clear"><span>Title: </span><span class="dots"></span></div>
      </div>
      <div>
        <div class="sign"><span>Signature: </span><span class="dots"></span></div>
        <div class="cert-dt"><span>Date: </span><span class="dots"></span></div>
      </div>


      <div class="manager-approval blk-bg">MANAGER APPROVAL</div>
      <div class="approve"><span class="checkbox"></span><span class="agree-content">Approved	</span></div>
      <div class="not-approve"><span class="checkbox"></span><span class="agree-content">Not Approved (Optional - Specify Reasons)</span></div>
      <div class="black-box">Reasons: </div>
      <div>
        <div class="print-name"><span>Print Name: </span><span class="dots"></span></div>
        <div class="title clear"><span>Title: </span><span class="dots"></span></div>
      </div>
      <div>
        <div class="sign"><span>Signature: </span><span class="dots"></span></div>
        <div class="cert-dt"><span>Date: </span><span class="dots"></span></div>
      </div>
    </div>
    <!--end of page2 -->
  </body>

  </html>

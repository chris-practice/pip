<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>index</title>
    <link href="sites/default/themes/custom/paininpractice/css/attendance_export.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    </style>
  </head>
  <body style="margin:-48px 0 0 -48px;padding:0;">
    <div id="footer">By completing the above you consent to receiving communications from Pfizer PFE Australia Pty Ltd (“Pfizer”) or Bristol-Myers Squibb Australia Pty Ltd (“BMS”) (as applicable) and its affiliates regarding: (a) Pfizer’s or BMS’s (as applicable) products and services; (b) Pfizer or BMS (as applicable) sponsored programs, events and initiatives; (c) customer feedback; and/or (d) educational information. Personal information will be collected, stored and used in accordance with Pfizer’s or BMS’s (as applicable) privacy policy (available at www.pfizer.com.au and www.bmsa.com.au, as applicable) for these purposes.</div>
    <div id="page-1" class="page-1">
      <div class="pink-bar">
        <table width="100%">
          <tr>
            <td class="col2">
              <div class="offer-letter-logos">
                <img src="sites/default/themes/custom/paininpractice/images/thrombo360-pdf-logo.jpg" width="820" height="auto"/>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="tbl-wrapper">
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th class="tbl-label" colspan="3" style="width:320px;background:#feeee3;">
                <div class="meeting-detail">
                  <span>Meeting date:<?php print $items['meeting_info']['date'];?></span>
                  <span style="margin-right:0;">Meeting location:<?php print $items['meeting_info']['location'];?></span>
                </div>
              </th>
              <th class="tbl-label" rowspan="2" style="width:65px;">I acknowledge that I have read and understood, and agree to, the email consent set out at the bottom of this page (optional)</th>
              <th class="tbl-label" rowspan="2" >Email Address (optional)</th>
              <th class="tbl-label" rowspan="2" >Signature</th>
            </tr>
            <tr>
              <th class="tbl-label" style="width:30px;">Title </th>
              <th class="tbl-label">Name</th>
              <th class="tbl-label">Surname</th>
            </tr>
          </thead>
          <?php foreach ($items['gp_data'] as $value) { ?>
          <tbody style="background:#ccc;">
            <tr>
              <td class="info"><?php print $value[0];?></td>
              <td class="info"><?php print $value[1];?></td>
              <td class="info"><?php print $value[2];?></td>
              <td class="info"></td>
              <td class="info"></td>
              <td class="info"></td>
            </tr>
          </tbody>
          <?php } ?> 
        </table>
      </div>
    </div>
  </body>
</html>
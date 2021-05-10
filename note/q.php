<?php
/*
==========================
FILE:$q.php
PREVIOUS LOCATION: NA
OWNER: Ryan Kraynak
email: kraycam@protonmail
phone: (614) 288-1250
UPKEEP: Unfiled
LASTED UPDATED: 7/15/2020
:V.0.0.1
=========================
*/
    require "includes/header.php";
    echo date("l jS \of F Y h:i:s A");
?>
<form>
  <!-- Foriegn Keys for pub. registry to company db data ties -->
  <input type="text" name="nm" placeholder="first & last name">
  <br>
  <input type="text" name="oc" placeholder="occupational status">
  <select>
    <option>Publicist</option>
    <option>Editor</option>
    <option>Journalist</option>
    <option>Staff Writer</option>
  </select>
  <br>
  <!-- company (freelancers)
  unix key id _ foriegn
-->
  <input type="text" name="pmail" placeholder="personal email">
  <br>
  <input type="text" name="cmail" placeholder="company email">
  <br>
  <input type="text" name="padd" placeholder="home address">
  <br>
<input type="text" name="cadd" placeholder="company address">
  <!-- Write script for freelancers based off address -->
  <br>
  <input type="text" name="cphone" placeholder="company">
  <br>
  <input type="text" name="pphone" placeholder="first & last name">
  <!-- $cuid for contact aquired by, and create date-->
  <!-- write script for last activity date (unixUTF)-->
  <!-- write script for lead status -->


</form>

<?php
require "includes/footer.php";
?>

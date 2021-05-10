<?php
/*
==========================
FILE:$ index.php
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
    require "includes/login.php";
/*

Login status status display
    if ($conn = $user ) {
      echo $uid "Logged in";
    }
    else {
      echo $displayBlock
    }
*/

echo date("l jS \of F Y h:i:s A");

?>

<main>
  <main>
      <p class="login-status">You are logged out!<p>
      <p class="login-status">You are logged in!<p>
  </main>
  <h1>
    what we believe...
 </h1>
</main>
<!--
    <main>
        <p class="login-status">You are logged out!<p>
        <p class="login-status">You are logged in!<p>
    </main>
    -->

<?php
require "includes/footer.php";
?>

<?php
/*
==========================
FILE: Blog
OWNER: Ryan Kraynak
email: kraycam@protonmail
phone: (614) 288-1250
UPKEEP: Unfiled
LASTED UPDATED: 7/15/2020
:V.0.0.1
=========================
"Broadly speaking, the difference is that in procedural programming you create functions (procedures) which act on data structures. With OOP, you're creating objects which encapsulate both data and the methods which act on it."
https://www.sitepoint.com/community/t/php-procedural-vs-object-oriented/33753
*/
?>
<div class="login">
  <main>
      <p class="login-status">You are logged out!<p>
      <p class="login-status">You are logged in!<p>
  </main>
    <h1>Login</h1>
    <h2>Company login</h2>
    <form action="includes/login.php" method="post">
      <!-- Create handler for recognized email domains;

    -->
        <input type="text" name="mailuid" placeholder="e-mail">
        <br>
        <input type="password" name="pwd" text="password">
        <button type="submit" name="login-submit">login</button>
</form>
    <a href="logout.php">logout</a>
    <a href="/signup.php">signup</a>
    <br>
    <a href=".php">Why is there a login?</a>

</div>

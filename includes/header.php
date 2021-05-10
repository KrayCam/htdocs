<?php
/*
==========================
FILE:$ inc/header.php
OWNER: Ryan Kraynak
email: kraycam@protonmail
phone: (614) 288-1250
UPKEEP: Unfiled
LASTED UPDATED: 12/30/2020
:V.0.0.1
=========================
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/style.css" >
    <title>header</title>
</head>
<html>
<body>
    <header>
        <nav>
            <div class="navBar ">
                  <div class="logo">
                    <a href="index.php"><t1>KnackShack</t1></a>
                  </div>
                  <div class="navMap">
                  <ul>
                      <li><a href="aboutUs.php">About Us</a>
                        <!-- Create account lock -->
                      <li><a href="announcements.php">Announcements</a>
                      <li><a href="events.php">Local events</a>
                      <li><a href="localResources.php">Local resources</a>
                      <li><a href="onlineResources.php">Online resources</a>
                      <li><a href="blog.php">Blog</a>
                  </ul>
                </div>
                 <div class="sBar">
                  <!-- Conn Query Search Separately -->
                     <form method="GET" action="">
                      <input type="text" name="search" placeholder="looking for something">
                      <button>search</button>
                    </form>
                  </div>
                </div>
                <div id="profile">
                <a class="login" href="#"><button>Login</button></a>
                <a class="signUp" href="#"><button>signUp</button></a>
              </div>
              </div>
        </nav>
    </header>

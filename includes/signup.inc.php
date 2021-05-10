<?php
/*
==========================
FILE: signup.inc.php
OWNER: Ryan Kraynak
email: kraycam@protonmail
phone: (614) 288-1250
UPKEEP: Unfiled
LASTED UPDATED: 12/6/2020
:V.0.0.1
=========================
"Broadly speaking, the difference is that in procedural programming you create functions (procedures) which act on data structures. With OOP, you're creating objects which encapsulate both data and the methods which act on it."
https://www.sitepoint.com/community/t/php-procedural-vs-object-oriented/33753

IP recon.
  - can you see vpn
  - can you see tor use
  
*/

if (isset($_POST['signup'])) {
    require 'dbh.inc.php';

    $uid  = $_POST['uid'];
    $mail = $_POST['mail']; //create validation
    // $fName = $_POST['first_name'] create conditional rec;
    // $lName = $_POST['last_name'] create conditional rec;
    $pwd = $_POST['pwd']; //create parameter, ubi key?
    $pwdRepeat = $_POST['pwdRepeat'];

    /* LEFT EMPTY */

    error_reporting(E_ALL);
    if (empty($uid) || empty($mail) || /*empty($fName) || empty($lName) ||*/ empty($pwd) || empty($pwdRepeat)) {
    header("Location: ../signup.php?error=emptyfields&uid=".$uid."&mail=".$mail/*."&fname=".$fname."&lname=".$lname*/);
        exit();
    // have get method for carryover for uid and mail (have reverse hash so URL Can not be read!

    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $mail)) {
        header("Location: ../signup.php?error=invalidmailuid=");
        exit();
        //Send out email confirmations, repeat ECHO Invalid Email

    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=".$uid);
        exit();

    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
        header("Location: ../signup.php?error=invaliduid&mail=".$mail);
        exit();

    } elseif ($pwd !== $pwdRepeat) {
        header("Location: ../signup.php?error=passwordcheck&uid=".$uid."&mail=".$mail);
        exit();

    } else {

        $sql = "SELECT uname FROM users WHERE uname=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit;
        } else {
            mysqli_stmt_bind_param($stmt, "s", $uid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail".$mail);
                exit();
            } else {

                $sql = "INSERT INTO users (uname, mail, pwd) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();

                  } else {
                      /* CREATE CUSTOM HASH? */
                      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                      mysqli_stmt_bind_param($stmt, "sss", $uid, $mail, $hashedPwd);
                      mysqli_stmt_execute($stmt);
                      header("Location ../signup.php?signup=success");
                      exit();
                  }
              }
          }
      }
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
  }
  else {
      header("Location ../signup.php");
      exit();
  }

<?php include "includes/header.php" ?>
    <main>
        <div class="usForm" id="signUp">
            <selction class="signup">
                <h1>Signup</h1>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="username">
                    <input type="text" name="mail" placeholder="email">
                    <!--<input type="text" name="first_name" placeholder="first name">
                    <input type="text" name="last_name" placeholder="last name"> -->
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdRepeat" placeholder="repeat password">
                    <button type="submit" name="signup">Sign up</button>
                </form>
            </selction>
        </div>
    </main>

<?php
require "includes/footer.php";
?>

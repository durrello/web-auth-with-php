<?php
include "php/header.php";
?>

<form action="includes/login.config.php" method="POST">
    <div id="login-box">
        <div class="left">
            <h1>Login</h1>

            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="pwd" placeholder="Password" />
            <input type="submit" name="login_submit" value="Sign me up" />
        </div>

        <div class="right">
            <span class="loginwith">Sign in with<br />social network</span>

            <button class="social-signin facebook">Log in with facebook</button>
            <button class="social-signin twitter">Log in with Twitter</button>
            <button class="social-signin google">Log in with Google+</button>
        </div>
        <div class="or">OR</div>
    </div>
</form>
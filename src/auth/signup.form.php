<form action="includes/signup.config.php" method="POST">
        <div id="signup-box">
            <div class="left">
                <h1>Sign up</h1>
                
                <input type="text" name="fname" placeholder="First Name" />
                <input type="text" name="lname" placeholder="Last Name" />
                <input type="text" name="gender" placeholder="Male or Female" />
                <input type="text" name="email" placeholder="E-mail" />
                <input type="password" name="pwd" placeholder="Password" />
                <input type="submit" name="signup_submit" value="Sign me up" />
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
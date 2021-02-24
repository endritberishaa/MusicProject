<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign Up - MusicApp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Styles/RegisterStyle.css">
    </head>
    <body>
    <div class="header">
        <div class="logo">
           <a href="MusicPage.php"><img src="Images/musiclogoLogin.jpg"></a>
        <hr id = "hr0">

        </div>
    </div>
        <div class="container-signup">
            <div class="wrap-signup">
                <form class="signup-form" action="loginVerify.php" method="post" onsubmit="return validate();">
                    <span class="signup-form-title">Sign up to start listening</span>
                    <div class="wrap-input">
                        <span class="lable-input">What's your email?</span>
                        <input id = "email" class="input" type="email" name="email" placeholder="Enter your email.">
                        <span class="focus-input"></span>
                    </div>
                    <div class="error_msg" id = "em_err_msg"></div>
                    
                    <div class="wrap-input">
                        <span class="lable-input">Create a password</span>
                        <input id = "password" class="input" type="password" name="password" placeholder="Create a password.">
                        <span class="focus-input"></span>
                        
                    </div>
                <div class="error_msg" id="pw_err_msg"></div>
                    <div class="wrap-input">
                        <span class="lable-input">Confirm password</span>
                        <input id = "confirmPassword" class="input" type="password" name="password" placeholder="Confirm password.">
                        <span class="focus-input"></span>
                       
                    </div>
                     <div class="error_msg" id="cpw_err_msg"></div>
                    <div class="wrap-input">
                        <span class="lable-input">What should we call you?</span>
                        <input id = "name" class="input" type="text" name="name" placeholder="Enter a profile name.">
                        <span class="focus-input"></span>
                        
                    </div>
                    <div class="error_msg" id="nm_err_msg"></div>
                    <section class="copy legal">
                        <p><span class="small">By continuing, you agree to accept our <br><a href="#">Privacy Policy</a> &amp; <a href="#">Terms of service</a>.</span></p>
                    </section>
                   <div class="container-signup-form-btn">
                       <div class="wrap-signup-form-btn">
                          <input class = "signup-form-btn" type="submit" name="registerbtn" value="Sign up"><!--<button class="signup-form-btn">Sign Up</button>-->
                       </div>
                    </div>
                    <div class="login">
                        <p>Have an account? <a id ="loginform"href="LoginForm.php">Log in.</a></p>
                    </div>
                   
                </form>
            </div>
            
        </div>
        <script>
            function error_message(id, message) {
                document.getElementById(id).innerText = message;
            }
    
            function validate() {
                var email = document.getElementById("email");
                var password = document.getElementById("password");
                var confirmPassword = document.getElementById("confirmPassword");
                var name = document.getElementById("name");
    
                var emailvalue = email.value;
                var passwordvalue = password.value;
                var confirmPasswordvalue = confirmPassword.value;
                var namevalue = name.value;
    
                if (emailvalue== "") {
                    error_message("em_err_msg", "Please enter your email address.");
                }
                else if (emailvalue != "") {
                    error_message("em_err_msg", "");
                }
                if (passwordvalue == "") {
                    error_message("pw_err_msg", "Please enter your password.");
                }
                else if (passwordvalue.length < 6){
                    error_message("pw_err_msg", "Please enter a valid password(at least 6 characters)!");
                } 
                else if (passwordvalue.length >= 6){
                    error_message("pw_err_msg", "");
                }
                if(confirmPasswordvalue ==""){
                    error_message("cpw_err_msg", "Please confirm your password!");
                }
                else {
                    error_message("cpw_err_msg", "");
                }
                if (passwordvalue != "" && confirmPasswordvalue != ""){

                if (passwordvalue != confirmPasswordvalue) {
                    error_message("pw_err_msg", "Passwords don't match!");
                    error_message("cpw_err_msg", "Passwords don't match!");
                } else {
                    error_message("pw_err_msg", "");
                    error_message("cpw_err_msg", "");
                }
            }

                if(namevalue == ""){
                    error_message("nm_err_msg", "Please enter your name.");
                }
                else if(namevalue != ""){
                    error_message("nm_err_msg", "");
                }
                else {
                    error_message("pw_err_msg", "");
                }
    
                if (emailvalue == "" || passwordvalue == "" || passwordvalue.length < 6 || confirmPasswordvalue == "" || namevalue == "" || passwordvalue != confirmPasswordvalue) {
                    return false;
                    }
                else {
                    return true;
                    }
                }
        </script>
    </body>
 </html>

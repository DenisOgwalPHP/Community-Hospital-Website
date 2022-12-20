<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Community Hospital Lugoba | Login and Registration</title>
		<link rel="stylesheet" href="style.css"
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="shortcut icon" href="assets/images/logo.png">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="login.php" method="POST" class="login">
                  <div class="field">
                     <input type="email" name="emailaddress" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                 <!-- <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>-->
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="registration.php" method="post" class="signup">
                  <div class="field">
                     <input type="text" name="emailaddress1" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password1" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input type="password" name="confirmpassword" placeholder="Confirm password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>
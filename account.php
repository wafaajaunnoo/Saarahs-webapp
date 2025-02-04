<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>

    <!--link to CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">

    <!--link to javascript-->
    <script src="js/script.js"></script>

    <!--link for logo for footer section-->
    <script src="https://kit.fontawesome.com/13da37346a.js" crossorigin="anonymous"></script>
    
</head>
<body class="accountpage">

    <!--The navigation bar is in the header of all pages-->
    <header>
        <nav>
            <a class="logo"href="home.html">CK Creations</a>
            <ul>
                <li><a class="navigation" href="home.html">HOME</a></li>
                <li>
                    <a class="navigation" href="shop.html">SHOP</a>
                    <ul>
                        <li><a class="navigation" href="#crochetshop">Crochet</a></li>
                        <li><a class="navigation" href="#tshirtshop">T-shirt</a></li>
                        <li><a class="navigation" href="#othershop">Other</a></li>
                    </ul>
                </li>
                <li><a class="navigation" href="contact.html">CONTACT</a></li>
                <li><a class="navigation" href="account.html">ACCOUNT</a></li>
            </ul>
        </nav>
    </header>
//<?php include 'include/header.php'?>
    <section class="signup" id="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/logo.jpg" alt="sing up image"></figure>
                    <a href="#signin" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sing in  Form -->
    <section class="sign-in" id="signin">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="images/logo.jpg" alt="sing up image"></figure>
                    <a href="#signup" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--The footer of the page that contains logo which is a link to the app it represent -->
    <?php include 'include/footer.php'?>
    <footer>
        <p>Copyright © <span id="current_year"></span> | Made with CK Creations.
            <a href="https://www.facebook.com/ck.creations.mru"> <i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/ck.creations.mru/"><i class="fa-brands fa-square-instagram"></i></a> 
        </p>
    </footer>
</body>
</html>

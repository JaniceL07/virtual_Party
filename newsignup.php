<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>


    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="server.php">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="tel" name="telNo" id="telNo" placeholder="Enter a telephone number (in the form xxxxxxxxxx)" required pattern="[0-9]{10，11}" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="confirm_password" id="confirm_password" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" required/>
                            </div>
                        </form>
                        <div id="message">
                            <p>Password must contain the following:</p>
                            <div class="a">
                                <span id="letter" class="invalid"></span> A lowercase
                                <span class="tooltip">letters
                                    <span class="tooltiptext">Permissible letters are a to z</span>
                                </span>
                            </div>
                            <div class="a">
                                <span id="capital" class="invalid"></span> A capital (uppercase)
                                <span class="tooltip">letters
                                    <span class="tooltiptext">Permissible letters are A to Z</span>
                                </span>
                            </div>
                            <div class="a">
                                <span id="number" class="invalid"></span> A number and
                                <span class="tooltip">symbol
                                    <span class="tooltiptext">! “ # $ % & ‘ ( ) * + , - . / : ; < = > ? @ [ ∖ ] ^ _ ` { | } or ~</span>
                                </span>
                            </div>
                            <div class="a">
                                <span id="length" class="invalid"></span> Minimum 8 characters
                            </div>
                        </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signin.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="js/signup.js"></script>
    <script src="js/signup2.js"></script>
</body>

<footer>
    <p>
        By using our website and signing up, you acknowledge and agree to our website <a href="#" class="term-service">Terms & Conditions</a> and our <a href="#" class="privacy-policy">Privacy Policy</a>.<br>
        <a href="#" class="contact-us">Contact Us</a> <a href="#" class="term-service">Terms & Conditions</a> <a href="#" class="privacy-policy">Privacy Policy</a>
    </p>
</footer>

</html>
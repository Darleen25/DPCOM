<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="identification.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
    <script src="script.js" defer></script>
    <title>Mon site - Connexion</title>
</head>
<body>
                        
        <!-- création d'une div avec la classe container -->
<div class="container">

<!-- partie gauche du formulaire-->

<div class="formcontainer">

    <div class="sliderSection">
        <img src="./img/img.avif" alt="Description image">

        <div class="progression">
            <i></i>
            <i></i>
            <i></i>
        </div>

    </div>

    <!-- partie droite du formulaire -->

    <div class="formSection">
        <h1>Account Login</h1>

        <form method="POST" action="login.php">
            <div class="inputRow">
                <div class="inputIcon">
                    <i class='bx bxs-envelope'></i>
                </div>
                <input type="text" name="userName" id="userName" placeholder="username or email" required>
            </div>


            <div class="inputRow">
                <div class="inputIcon">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <input type="password" name="userPassword" id="userPassword" placeholder="Password" required>
            </div>

            <!-- remember me /forgot -->
            <div class="row">
                <div class="col">
                    <input type="checkbox" name="rememberMe" id="rememberMe">
                    <label for="rememberMe">Remember Me</label>
                </div>
                <a href="#" id="forgotPassword">Forgot Password ?</a>
            </div>
            <!-- bouton de connexion et inscription-->
            <div class="btnRow">
                <input type="submit" value="Login" class="btn" id="loginBtn" name="login">
            </div>


            <div class="btnRow">
                <a href="signup.php" class="btn" id="signUpBtn">Sign Up</a>
            </div>

        </form>

        <h4> Or login with</h4>

        <div class="btnRow">

            <a href="#" class="btn btnGroup">
                <img src="https://img.icons8.com/color/512/linkedin-circled.png" width="38px" />
                LinkedIn
            </a>

            <a href="#" class="btn btnGroup ">
                <img src="https://img.icons8.com/color/512/gmail.png" width="38px" />
                Gmail
            </a>
        </div>




    </div>

    <a href="#" id="credits">Ressources Credits</a>
</div>
</div>

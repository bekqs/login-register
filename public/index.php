<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magebit</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
</head>
<body>
    
    <div id="main" data-scale="1">
        <section class="auth">
            <div id="form-wrap">
                <span class="folds"></span>
                <form action="signup.php" method="POST" class="form" id="form-signup">
                    <fieldset class="field" id="signup">
                        <legend>Sign Up<img src="images/logo.png" alt="Magebit" id="magebit"></legend>
                        <span class="separator" align="left"></span>
                        <div class="input-wrap">
                            <input type="text" name="name" class="input" spellcheck="false" required>
                            <label for="name">Name<span class="red">*</span></label>
                        </div>
                        <div class="input-wrap">
                            <input type="email" name="email" class="input" spellcheck="false" required>
                            <label for="email">Email<span class="red">*</span></label>
                        </div>
                        <div class="input-wrap">
                            <input type="password" name="pass" class="input" required>
                            <label for="pass">Password<span class="red">*</span></label>
                        </div>
                        <div class="btn-wrap">
                            <button class="button primary" name="submit">Sign Up</button>
                            <a href="#" class="toggle-link">Login</a>
                        </div>
                    </fieldset> 
                </form> <!-- End sign up -->
                <form action="login.php" method="POST" class="form" id="form-login">
                    <fieldset class="field active" id="login">
                        <legend>Login<img src="images/logo.png" alt="Magebit" id="magebit"></legend>
                        <span class="separator" align="left"></span>
                        <div class="input-wrap">
                            <input type="email" name="email" class="input" spellcheck="false" required>
                            <label for="email">Email<span class="red">*</span></label>
                        </div>
                        <div class="input-wrap">
                            <input type="password" name="pass" class="input" required>
                            <label for="pass">Password<span class="red">*</span></label>
                        </div>
                        <div class="btn-wrap">
                            <button class="button primary" name="submit">Login</button>
                            <a href="#" id="forgot">Forgot?</a>
                            <a href="#" class="toggle-link">Sign Up</a>
                        </div>
                    </fieldset>
                </form> <!-- End log in -->
            </div> <!-- End form wrap -->
            
            <div class="content">
                <div class="content-inactive">
                    <h1 class="head">Don’t have an account?</h1>
                    <span class="separator"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="btn-wrap">
                        <button id="signup-btn" class="button default">Sign Up</button>
                    </div>
                </div> <!-- End inactive sign up -->
                <div class="content-inactive">
                    <h1 class="head">Have an account?</h1>
                    <span class="separator"></span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="btn-wrap">
                        <button id="login-btn" class="button default">Login</button>
                    </div>
                </div>
            </div> <!-- End inactive login -->
            </div>
        </section>
    </div>

    <footer>
        <p>All Rights Reserved “Magebit” 2016.</p>
    </footer>

    <script src="../scripts/main.js"></script>
    
</body>
</html>
<?php
    session_start();
    require_once "handle-login.php";
?>
<html>
<head>
<title>Creating Material Design Login Form with PHP and jQuery</title>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
    <h5>Material Design Login Form</h5>
    <div id="user-login" class="row">
        <div class="col s12 z-depth-6 card-panel">
            <form class="login-form" name="login-form" method="POST"
                action="">
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input class="validate" id="username"
                            name="username" type="text" required>
                        <div class=usererr><?php if (! empty($username_error)) { echo $username_error; } ?></div>
                        <label for="username" data-error="wrong"
                            data-success="right" class="center-align">Username</label>
                    </div>
                </div>

                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i> <input
                            id="user_pass" name="user_pass"
                            type="password" required>
                        <div class=pwderr><?php if (! empty($password_error)) { echo $password_error; } ?></div>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l12  login-text">
                        <input type="checkbox" id="remember-me"> <label
                            for="remember-me">Remember me</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">

                        <input type="submit"
                            class="btn waves-effect waves-light col s12"
                            id="btnsubmit" name="submit" value="Login" />
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
</body>
</html>
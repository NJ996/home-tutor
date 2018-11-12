<?php
   session_start();
   if(isset($_SESSION['username'])){
       header("location:profile.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comp_login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <style type="text/css">
        #alert,
        #register-box,
        #forgot-box,
        #loader {
            display: none;
        }
    </style>

</head>

<body class="bg-dark">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 offset-lg-4" id="alert">
                <div class="alert alert-success">
                    <strong id="result"></strong>
                </div>
            </div>
        </div>
        <div class="text-center">
            <img src="imageloader.gif" width="50px" height="50px" class="m-2" id="loader">
        </div>
        <!--Login Form-->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
                <h2 class="text-center mt-2">Login</h2>
                <form action="" method="POST" role="form" class="p-2" id="login-form">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" required
                            minlength="2" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username']; }?>">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" minlength="6"
                            required value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rem" class="custom-control-input" id="customCheck" <?php
                                if(isset($_COOKIE['username'])){ ?> checked
                            <?php }?>>
                            <label for="customCheck" class="custom-control-label">Remember Me</label>
                            <a href="#" class="float-right" id="forgot-btn">Forgot Password</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="login" value="Login" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">New User?<a href="#" id="register-btn">Register Here</a></p>
                    </div>
                </form>
            </div>
        </div>
        <!--Register Form-->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
                <h2 class="text-center mt-2">Register</h2>
                <form action="" method="POST" role="form" class="p-2" id="register-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="uname" class="form-control" placeholder="Userame" required minlength="4">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password"
                            required minlength="6">
                    </div>
                    <div class="form-group">
                        <input type="password" id="cpass" name="cpass" class="form-control" placeholder="Confirm Password"
                            required minlength="6">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rem" class="custom-control-input" id="customCheck2">
                            <label for="customCheck2" class="custom-control-label">I agree to the <a href="#">terms &
                                    conditions.</a></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="register" id="register" value="Register" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">Already Registered?<a href="#" id="login-btn">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
        <!--Forget Password-->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
                <h2 class="text-center mt-2">Reset Password</h2>
                <form action="" method="POST" role="form" class="p-2" id="forgot-form">
                    <div class="form-group">
                        <small class="text-muted">
                            To reset your password, enter the email address and we will send reset intructions on your
                            email.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="femail" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group ">
                        <input type="submit" name="forgot" id="forgot" value="Reset" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group text-center">
                        <a href="#" id="back-btn">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.18.0/jquery.validate.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#forgot-btn").click(function () {
                $("#forgot-box").show();
                $("#login-box").hide();
                $("register-box").hide();
            });
            $("#register-btn").click(function () {
                $("#register-box").show();
                $("#login-box").hide();
                $("forgot-box").hide();
            });
            $("#login-btn").click(function () {
                $("#login-box").show();
                $("#register-box").hide();
                $("#forgot-box").hide();
            });
            $("#back-btn").click(function () {
                $("#login-box").show();
                $("#register-box").hide();
                $("#forgot-box").hide();
            });
            $("#login-form").validate();
            $("#register-form").validate({
                rules: {
                    cpass: {
                        equalTo: "#pass",
                    }
                }
            });
            $("#forgot-form").validate();

            //submit form without refresh
            $("#register").click(function (e) {
                if (document.getElementById('register-form').checkValidity()) {
                    e.preventDefault();
                    $("#loader").show();
                    $.ajax({
                        url: 'action.php',
                        method: 'post',
                        data: $("#register-form").serialize() + '&action=register',
                        success: function (response) {
                            $("#alert").show();
                            $("#result").html(response);
                            $("#loader").hide();
                        }
                    });
                }
                return true;
            });

            //login
            $("#login").click(function (e) {
                if (document.getElementById('login-form').checkValidity()) {
                    e.preventDefault();
                    $("#loader").show();
                    $.ajax({
                        url: 'action.php',
                        method: 'post',
                        data: $("#login-form").serialize() + '&action=login',
                        success: function (response) {

                            if (response === 'OK') {
                                window.location = 'profile.php';
                            } else {
                                $("#alert").show();
                                $("#result").html(response);
                                $("#loader").hide();
                            }
                        }
                    });
                }
                return true;
            });

            //forgot
            $("#forgot").click(function (e) {
                if (document.getElementById('forgot-form').checkValidity()) {
                    e.preventDefault();
                    $("#loader").show();
                    $.ajax({
                        url: 'action.php',
                        method: 'post',
                        data: $("#forgot-form").serialize() + '&action=forgot',
                        success: function (response) {
                            $("#alert").show();
                            $("#result").html(response);
                            $("#loader").hide();
                        }
                    });
                }
                return true;
            });
        });


    </script>


</body>

</html>
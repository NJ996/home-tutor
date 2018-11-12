<?php
    require 'config.php';
    $msg="";
    if(isset($_GET['email']) && isset($_GET['token'])){
        $email=$_GET['email'];
        $token=$_GET['token'];

        $stmt=$conn->prepare("SELECT id FROM users WHERE email=? AND token=? AND token<>'' AND tokenExpire>NOW()");
        $stmt->bind_param("ss",$email,$token);
        $stmt->execute();

        $result=$stmt->get_result();

        if($result->num_rows>0){
            if(isset($_POST['submit'])){
                $newpass=sha1($_POST['newpass']);
                $cnewpass=sha1($_POST['cnewpass']);
                if($newpass==$cnewpass){
                    $stmt_u=$conn->prepare("UPDATE users SET token='', password=? WHERE email=?");
                    $stmt_u->bind_param("ss",$newpass,$email);
                    $stmt_u->execute();

                    $msg="Password changed successfully.<br><a href='indexlogin.php'>Login Here</a>";
                }else{
                    $msg="password did not matched";
                }
            }
        }
        else{
            header("location:indexlogin.php");
            exit();
        }
    }else{
        header("location:indexlogin.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <style type="text/css">
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4" id="alert">
                <div class="alert alert-success">
                    <strong id="result"></strong>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 mt-5">
                <h3 class="text-center bg-dark text-light p-2 rounded">Reset your Password </h3>
                <h4 class="text-success text-center">
                    <?= $msg; ?>
                </h4>
                <form action="" method="POST" id="reset-form">
                    <div class="form-group">
                        <label for="password">Enter New Password</label>
                        <input type="password" name="newpass" class="form-control" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm New Password</label>
                        <input type="password" name="cnewpass" class="form-control" placeholder="Confirm Password"
                            required>

                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-success btn-block" value="Reset Password">
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
</body>

</html>
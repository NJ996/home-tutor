<?php
    require 'config.php';
    if(isset($_POST['action'])&&$_POST['action']=='register'){
        $name=check_input($_POST['name']);
        $uname=check_input($_POST['uname']);
        $email=check_input($_POST['email']);
        $pass=check_input($_POST['pass']);
        $cpass=check_input($_POST['cpass']);
        $pass=sha1($pass);
        $cpass=sha1($cpass);
        $created=date('Y-m-d');

        if($pass!=$cpass){
            echo 'Password did not matched!';
            exit();
        }else{
           $sql = $conn->prepare("SELECT username,email FROM adminuser WHERE username=? OR email=?");
           $sql->bind_param("ss",$uname,$email);
           $sql->execute();
           $result=$sql->get_result();
           $row=$result->fetch_array(MYSQLI_ASSOC);
           if($row['username']==$uname){
               echo "Username is already registered";
           }elseif($row['email']==$email){
               echo "Email is already registered";
           }
           else{
               $stmt=$conn->prepare("INSERT INTO adminuser (name,username,email,password,created) VALUES(?,?,?,?,?)");
               $stmt->bind_param("sssss",$name,$uname,$email,$pass,$created);
               if($stmt->execute()){
                   echo 'Registered successfully,Login Now!';
               }else{
                   echo 'something went wrong please try again';
               }
           }

        }
    }

    if(isset($_POST['action']) && $_POST['action'] == 'login')
    {
        session_start();

        $username=$_POST['username'];
        $password=sha1($_POST['password']);

        $stmt_l=$conn->prepare("SELECT * FROM adminuser WHERE username=? AND password=?");
        $stmt_l->bind_param("ss",$username,$password);
        $stmt_l->execute();
        $user=$stmt_l->fetch();
        if($user!=null){
            $_SESSION['username']=$username;
            echo 'OK';

            if(!empty($_POST['rem'])){
                setcookie('username',$_POST['username'],time()+(10*365*24*60*60));
                setcookie('password',$_POST['password'],time()+(10*365*24*60*60));
            }else{
                if(isset($_COOKIE['username'])){
                    setcookie("username","");
                }
                if(isset($_COOKIE['password'])){
                    setcookie("password","");
                }
            }
        }else{
            echo 'Login Failed: Check your username and password';
        }
    }

    if(isset($_POST['action']) && $_POST['action'] == 'forgot'){
        $femail=$_POST['femail'];
        $stmt_p=$conn->prepare("SELECT id FROM adminuser WHERE email=?");
        $stmt_p->bind_param("s",$femail);
        $stmt_p->execute();
        $res=$stmt_p->get_result();

        if($res->num_rows>0){
            $token="educek1234567890";
            $token=str_shuffle($token);
            $token=substr($token,0,7);

            $stmt_i=$conn->prepare("UPDATE adminuser SET token=?,tokenExpire=DATE_ADD(NOW(),INTERVAL 5 MINUTE)
            WHERE email=?");
            $stmt_i->bind_param("ss",$token,$femail);
            $stmt_i->execute();

            require 'PHPMailer/PHPMailerAutoload.php';
            require_once ("PHPMailer\class.phpmailer.php");
            $mail = new PHPMailer;
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->IsSMTP();
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            $mail->Username='07ayushkasera@gmail.com';
            $mail->Password='satyam8546091008';
            $mail->AddAddress($femail);
            $mail->setFrom('07ayushkasera@gmail.com','Educek');
            $mail->Subject='Reset Password';
            $mail->IsHTML(true);

            $mail->Body="<h3> Click the below link to reset your password.</h3><br>
            <a href='http://localhost/HomeTuitor/comp_login/resetPassword.php?email=$femail&token=$token'>
            http://localhost/HomeTuitor/comp_login/resetPassword.php?email=$femail&token=$token</a><br><h3>Regards<br>Educek</h3>";

            if($mail->send()){
                echo "We have already send you the reset link,please check you Email.";

            }else{
                echo "Something went wrong please try again later.";
            }
        }

    }

    function check_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>
<?php
    session_start();
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registeration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { 
    array_push($errors, "Username is required"); }
  if (empty($email)) {
   array_push($errors, "Email is required"); }
  if (empty($password_1)) { 
    array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
}
  
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$sql = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $sql);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php'); 
  }

if (isset($_POST['login'])) {
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
  if(empty($username)) 
    { array_push($errors, "Username is required");
    }
  if(empty($password))
   { array_push($errors, "Password is required");
    }
 if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $query = "SELECT * FROM users WHERE username='$username'AND password='$password'"; 
    $result = mysqli_query($db,$query);
    if (mysqli_num_rows($result) == 1) {

          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php'); 
          }else{
            array_push($errors,"wrong username/password combination");
          }
         
    }
  }
            




if(isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}

?>
<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$class = $_POST['class'];
$presentcourse=$_POST['presentcourse'];

$address=$_POST['address'];
$state=$_POST['state'];
$city=$_POST['city'];
$gender = $_POST['gender'];
$pincode = $_POST['pincode'];

if (!empty($first_name) || !empty($last_name) || !empty($class)|| !empty($presentcourse)|| !empty($address)||  !empty($state) || !empty($city) ||
 !empty($gender) || !empty($pincode)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "ayushi";
    //create connection
    $conn = new mysqli($host, $dbUsername,$dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (first_name,last_name,class,presentcourse,address,state,city, gender, pinCode) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
      $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $first_name,$last_name,$class,$presentcourse,$address,$state,$city, $gender, $pincode);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
    $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>

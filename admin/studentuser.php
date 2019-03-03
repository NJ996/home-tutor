<?php
   session_start();
   require 'config.php';
  /* if(isset($_SESSION['username'])){
       header("location:users.php");
   }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " href="users.php">User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="studentuser.php">Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="teacheruser.php">Teacher</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>
</ul>

<div class="container-fluid">
  <div class="col-md-12">
  <div class="text-center">
  <h2>Registered Student Record</h2>
  </div>
  <div class="text-right" style="margin-bottom:10px;">
    <form action="studentuser.php" method="post">
    <button class="btn btn-success" type="submit" name="asc">Reorder</button>
    </form>
  </div>
  </div>

<?php
$sql = "SELECT id, first_name, last_name , class ,present_course, address, state, city, pincode, gender FROM studentform";
$result = $conn->query($sql);
if(isset($_POST['asc']))
{
  $que1=" SET  @num := 0";
  $que2="UPDATE studentform SET id = @num := (@num+1)";
  $que3="ALTER TABLE users AUTO_INCREMENT =1";
  $conn->query($que1);
  $conn->query($que2);
  $conn->query($que3);
}
if ($result->num_rows > 0) {
    echo "<table class='table table-dark'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Present Course</th><th>Address</th><th>State</th><th>City</th><th>Pincode</th><th>Gender</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"]." </td><td>".$row["last_name"]."</td><td>".$row["class"]."</td><td>".$row["present_course"]."</td><td>".$row["address"]."</td><td>".$row["state"]."</td><td>".$row["city"]."</td><td>".$row["pincode"]."</td><td>".$row["gender"]."</td><td><a href='deletestudent.php?id=".$row['id']."'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
</body>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</html>
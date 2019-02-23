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
    <a class="nav-link active" href="users.php">User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="studentuser.php">Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="teacheruser.php">Teacher</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>
</ul>
<h2 class="text-center">Register User Record</h2>
<?php
$sql = "SELECT id, name, username ,email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-dark'><tr><th>ID</th><th>Name</th><th>UserName</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]." </td><td>".$row["username"]."</td><td>".$row["email"]."</td><td><a href='deleteuser.php?id=".$row['id']."'>Delete</a></td></tr>";
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
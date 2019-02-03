<?php
session_start();
require 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM `studentform` WHERE id=$id"; 

if (mysqli_query($conn, $sql)) {
    
    header('Location: studentuser.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>
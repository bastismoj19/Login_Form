<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "logindb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$emp_name = $_POST['emp_name'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO `login`(`emp_name`,`username`, `password`) VALUES ('$emp_name','$username','$password')";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
    $_SESSION['username'] = $username;

    //get the data from db
    while ($obj = $result->fetch_object()) {
        $_SESSION['emp_name'] = $obj->emp_name;
    }

    header("Location: page1.php");
} else {
    
  echo "<script>alert('Invalid username or password')</script>";

  header("Location: index.php");
}   
$mysqli->close();
?>


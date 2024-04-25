<?php
session_start();
$con=mysqli_connect("localhost","root","","test");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
      echo"connection success <br>";
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo 'Username already exists.';
    } else {
        $sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo 'Data added successfully.';
        } else {
            echo 'Data not added successfully';
        }
    }
}

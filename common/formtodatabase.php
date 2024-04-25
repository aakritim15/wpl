<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$address = $_POST['aname'];
$age = $_POST['age'];

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Sql query to be executed
$sql = "INSERT INTO `students` (`firstname`, `lastname`,`address`, `age`) VALUES ('$firstname', '$lastname', '$address', '$age')";
$result = mysqli_query($conn, $sql);


if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>
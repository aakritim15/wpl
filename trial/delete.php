<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con = mysqli_connect($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM info2 WHERE id = $id";
    $result=mysqli_query($con, $sql);
    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo 'error';
    }
}

mysqli_close($con);
?>

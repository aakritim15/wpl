<?php

$servername = "localhost"; /* Host name */
$username = "root"; /* User */
$password = ""; /* Password */
$dbname = "test"; /* Database name */

$con = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
      echo"connection success <br>";
  }
// db create
// $sql="CREATE DATABASE dbtest1";
// $result=mysqli_query($con,$sql);
// if($result){
//     echo "db created succesfully";
// }
// else{
//     echo "not successful<br> error->" .mysqli_error($conn);
// }

//table create
// $sql="CREATE TABLE `info2` (`id` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL , 
// `age` INT NOT NULL , `gender` VARCHAR(11) NOT NULL ) ";
// $result=mysqli_query($con,$sql);
// if($result){
//     echo "db table created succesfully";
// }
// else{
//     echo "table not successful<br> error->" .mysqli_error($conn);
// }

// $name="romil";
// $age="19";
// $gender="male";
// //data insert
// $sql="INSERT INTO `info2` ( `name`, `age`, `gender`) VALUES ('$name', '$age', '$gender')";
// $result=mysqli_query($con,$sql);
// if($result){
//     echo "db  insert  created succesfully";
// }
// else{
//     echo "db  not inserted successful<br> error->" .mysqli_error($conn);
// }
// display data
// $sql="SELECT * FROM `info2`";
// $result=mysqli_query($con,$sql);
// $num= mysqli_num_rows($result); 
// echo $num;
// echo "<br>";
// if($num>0){
//     while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['id'].". ". $row['name']." " .$row['age']. " " .$row['gender'];
//     echo "<br>";
//     }
// }

// $num= mysqli_num_rows($result); 
// if($num>0){
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<h2>Database Records</h2>";
//         echo "<table class='table'>";
//         echo "<thead><tr><th>ID</th><th>Name</th><th>Age</th><th>Gender</th></tr></thead>";
//         echo "<tbody>";
//         while ($row = mysqli_fetch_assoc($result)) {
//             echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['gender'] . "</td></tr>";
//         }
//         echo "</tbody></table>";
//     } 

//     }

//where clause
// $sql="SELECT * FROM `info2` WHERE `age` = '19'";
// $result=mysqli_query($con,$sql);
// $num= mysqli_num_rows($result); 
// echo $num;
// echo "<br>";
// $no=1;
// if($num>0){
//         while ($row = mysqli_fetch_assoc($result)) {
//         echo $no.". ". $row['name']." " .$row['age']. " " .$row['gender'];
//         echo "<br>";
//         $no=$no+1;
//         }
//     }

//update clause
// $sql="UPDATE `info2` SET `name` = 'Rahil' WHERE `info2`.`age` = 20";
// $result=mysqli_query($con,$sql);
// echo var_dump($result);
// echo "<br>";
// $aff=mysqli_affected_rows($con);
// echo "number of aff rows:" . $aff;
// echo "<br>";
// if($result){
//     echo "updated query";
// }
// else{
//     echo "no update";
// }

//delete clause
// $sql="DELETE FROM `info2` WHERE `info2`.`name` = 'Romil' LIMIT 7";
// $result=mysqli_query($con,$sql);
// $aff=mysqli_affected_rows($con);
// echo "number of aff rows:" . $aff."<br>";
// if($result){
//         echo "delete success";
//     }
//     else{
//         $err=mysqli_error($con);
//         echo "delete unscuccess -> $err";
//     }
?>  
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
    // Retrieve item details from form submission
    $item = $_POST["item"];
    $price = $_POST["price"];
    $sql = "INSERT INTO `cart` (`item_name`, `price`) VALUES ('$item', '$price')";
    $result=mysqli_query($con, $sql);
    if ($result) {
        echo ' Data added successfully.';
    } else {
        echo 'Data  not added successfully';
    }
}
$sql = "SELECT * FROM `cart`";
$result = mysqli_query($con, $sql);
$num=mysqli_num_rows($result) ;
if ($num > 0) {
    echo "<h2>Cart Items</h2>";
    echo "<table >";
    echo "<tr><th>Id </th><th>Item </th><th>Price</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["item_name"] . "</td><td>" . $row["price"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No items in the cart.";
}

?>

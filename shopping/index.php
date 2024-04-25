<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Item to Cart</title>
</head>
<body>

<h2>Add Item to Cart</h2>

<form action="additem.php" method="post">
    <label for="item">Item:</label>
    <input type="text" id="item" name="item"><br><br>
    <label for="price">Price:</label>
    <input type="text" id="price" name="price"><br><br>
    <input type="submit" value="Add to Cart">
</form>

</body>
</html>

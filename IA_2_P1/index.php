<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Management</title>
</head>
<body>  
    <?php
        $conn =mysqli_connect("localhost","root","","test");

        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }
        else
        {
            echo "Connected successfully to Movie DB";
        }

    ?>
    <h1>Movie Management</h1>
    <h2>Find the movie according to the year</h2>
    <form action="findMovies.php" method="post">
        <label for="year">Year:</label>
        <input type="text" name="year" id="year">
        <input type="submit" value="Find Movies">
    </form>
</body>
</html>
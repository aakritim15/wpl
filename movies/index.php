<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Movies 
    <form action="add.php" method="POST">
        Title <input type="text" name="title"/><br>
        Director <input type="text" name="director"/><br>
        Genre <input type="text" name="genre"/><br>
        Release Year <input type="text" name="yr"/><br>
        Rating <input type="number" name="rating"/><br>
        <button type="submit">Submit</button><br><br>
    </form>

    Records
    <br>
    <?php
        $con = mysqli_connect("localhost", "root", "", "test");
        $sql = ("SELECT * FROM movie");
        $result=mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['id'] . " " . $row['title'] . " " . $row['director'] . "<br>";
        }

    ?>
</body>
</html>
<?php
    $con =mysqli_connect("localhost", "root", "", "test");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $title = $_POST["title"];
        $director = $_POST["director"];
        $genre = $_POST["genre"];
        $release_year = $_POST["yr"];
        $rating = $_POST["rating"];
        $sql = "INSERT INTO movie(title, director, genre, release_year, rating) VALUES('$title','$director','$genre','$release_year','$rating');";
        $result=mysqli_query($con, $sql);
        if($result)
        {
            echo "Inserted Succesfully";
        }
    }
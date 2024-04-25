<?php

    include "connect.php";

    $id=$_POST['id'];
    $newDirect=$_POST['director'];

    $query=mysqli_query($conn,"update movies set Director='$newDirect' where id=$id ");
    if($query)
    {
        echo "Director name updated";
        // sleep(2);
        // header("location:AllMovies.php");
    }

?>
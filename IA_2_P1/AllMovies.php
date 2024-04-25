<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php

    $conn = mysqli_connect('localhost', 'root', '', "test");

    if ($conn->connect_error) {
        die("Unable to Connect" . $conn->connect_error);
    }

    $rating=0;
    $no=0;

    $query = mysqli_query($conn, "Select * from movies");

    echo '<div class="table-responsive">
    <table
        class="table"
    >
    <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Release year</th>
                    <th scope="col">Director</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
    ';

    while ($row = mysqli_fetch_assoc($query)) {
        $id=$row['ID'];
        $title = $row['Title'];
        $director = $row['Director'];
        $release = $row['Release_Year'];
        $rating=$rating+$row['Rating'];
        $no=$no+1;
        echo "
         <tbody>
                <tr class=''>
                    <td scope='row'>$id.</td>
                    <td scope='row'>$title</td>
                    <td>$director</td>
                    <td>$release</td>
                    <td> <a href='./updateDirector.php?id=$id' > Update </a> </td>
                </tr>
            </tbody>
   
        ";
    }



    echo '     </table>
    </div>';

    $avg=$rating/$no;
    echo "
    <h1>Average Rating is $avg </h1> 
    ";
    ?>


</body>

</html>
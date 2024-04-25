<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Found Movies According</title>
</head>
<body>
    <?php
        session_start();

        $year = $_POST['year'];
        echo $year;

        $conn=mysqli_connect('localhost','root','',"test");

        if($conn->connect_error)
        {
            die("Unable to Connect".$conn->connect_error);
        }
        

        $query=mysqli_query($conn,"Select * from movies where Release_year=$year");
        while($row=mysqli_fetch_assoc($query))
        {
            $Title=$row['Title'];
            echo "
            <br/>
            <h1>$Title</h1>
            ";
        }
        
    ?>
</body>
</html>
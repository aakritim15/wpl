<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Director</title>
</head>
<body>
    <?php
        $id=$_GET['id'];
        echo " Updation for Director with $id";

        echo "
        <form action='updating.php' method='post'>
            <label for='director'></label>
            <input type='hidden' name='id' value='$id'>
            <input type='text' name='director'>
            <button>Update</button>
        </form>
        "
    ?>

    
</body>
</html>
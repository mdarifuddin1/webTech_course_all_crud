<?php 
include 'connection.php';

if (isset($_POST['submit'])) {
    $run = $_POST['run'];
    if ($_FILES['image']['error']===4) {
      "<script>
      alret('Error');
      </script>";
    }else{
        $fileName = $_FILES['image']['name'];
        $filSize = $_FILES['image']['size'];
        $fileName = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];


        $imageExtension = explode('.',$fileName);
        $imageExtension = strtolower(end($imageExtension));

        move_uploaded_file($tmpName, 'img/');

        $quary = "INSERT INTO cricket VALUES"
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" >
    <div>
        <label>Player Image</label>
        <input type="file" name="image">
    </div><br>
    <div>
        <label>Total Run</label>
        <input type="number" name="run">
    </div><br>
    <button type="submit" name="submit" >Submit</button>
    </form>
</body>
</html>
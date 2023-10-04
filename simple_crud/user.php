<?php

include 'connect.php';

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $dept = $_POST['dept'];
   $date = $_POST['date'];

   $my_date = date('Y-m-d', strtotime($date));

   $sql ="INSERT INTO simple (name, dept, `date`) VALUES('$name', '$dept', '$my_date')";
   if (mysqli_query($con, $sql)) {
     echo"Data Insertion Successful";
   }else{
    echo"Data Insertion Unsuccessful";
   }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Crud</title>
</head>

<body>
    <form  method="post">
        <div>
            <label>Enter Your Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div >
            <label > Department Name</label>
            <input type="text" name="dept">
        </div>

        <div >
            <label class="form-label" > Admission Date</label>
            <input type="date" name="date">
        </div>
        <button type="submit" name="submit" >Submit</button>
    </form>
</body>

</html>
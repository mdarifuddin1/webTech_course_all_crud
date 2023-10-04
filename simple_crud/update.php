<?php

include 'connect.php';
$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $dept = $_POST['dept'];
   $date = $_POST['date'];

   $my_date = date('Y-m-d', strtotime($date));

   $sql = "UPDATE simple SET name='$name', dept='$dept', date='$date' WHERE id=$id";
   if (mysqli_query($con, $sql)) {
    header('location:display.php');
   }else{
    echo"Data Insertion Unsuccessful";
   }
}
   $query = "SELECT * FROM `simple` WHERE id=$id";
   $result = mysqli_query($con, $query);
   $row = mysqli_fetch_assoc($result);
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
            <label >Enter Your Name*</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <div>
            <label> Department Name</label>
            <input type="text" name="dept" value="<?php echo $row['dept']; ?>">
        </div>

        <div>
            <label > Admission Date</label>
            <input type="date" name="date" value="<?php echo $row['date']; ?>">
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>
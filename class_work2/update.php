
<?php

include'connect.php';

$id =$_GET['updateid'];


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $country = $_POST['country'];
    $jersey = $_POST['jersey'];

    $sql = "UPDATE `class2` SET name='$name', country='$country', jersey='$jersey' WHERE id=$id";

    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class Work</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>



    <div class="container py-5">
        <h1 class="text-center text-info ">Update Page </h1>
       
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Country Name</label>
                <select name="country">
                    <option value="Argentina">Argentina</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Bangladesh">Bangladesh</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">jersey Number</label>
                <input type="text" name="jersey" class="form-control">
            </div>


            <button type="submit" name="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
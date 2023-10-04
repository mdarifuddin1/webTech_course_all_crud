<?php
include 'connect.php';

session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $country = $_POST['country'];
    $jersey = $_POST['jersey'];

    $sql = "INSERT INTO class2(name, country, jersey)
            VALUES ('$name', '$country', '$jersey')";

    if (mysqli_query($con, $sql)) {

        echo "Data insertion Successful";
    } else {
        echo "Data insertion unsuccessful";
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

    <header>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="display.php">Player Info</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="user.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="display.php">Show Date</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="container py-5">
        <h1 class="text-center text-info ">Class Work 2 </h1>
       
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
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
<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];

    $my_date = date('Y-m-d', strtotime($date));
    // echo $my_date;

    $sql = "INSERT INTO student(name, dept, gender, `date`) VALUES ('$name', '$dept', '$gender', '$my_date')";


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
                <a class="navbar-brand" href="display.php">Student Date</a>
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
        <h1 class="text-center text-info ">Class Work </h1>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Department Name</label>
                <input type="text" name="dept" class="form-control">
            </div>
            <div>
                <label class="form-label">Select The Gender</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" name="gender" type="radio" value="male">
                <label class="form-check-label">Male</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" name="gender" type="radio" value="female">
                <label class="form-check-label">Female</label>
            </div>
            <div class="mb-3">
                <label class="form-label">Admission Date</label>
                <input type="date" name="date" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Search Single Data from Database </h1>
        <h4 class="text-center">Retrieve /Search/fetch/ data from database </h4>
        <div>
            <form action="" method="post">
                <input type="text" name="id" placeholder="Enter Student ID ">
                <input type="submit" name="search" value="SEARCH BY ID">
            </form>
            <table class="table mt-4">
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Father Name</td>
                    <td>Phone</td>
                </tr>
                <?php

                $con = mysqli_connect('localhost', 'root', '', 'crudcode');

                if (isset($_POST['search'])) {
                    $id = $_POST['id'];

                    $sql = "SELECT * FROM `employee` Where id='$id'";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                           <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td>
                                <?php echo $row['fname']; ?>
                            </td>
                            <td>
                                <?php echo $row['lname']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['father']; ?>
                            </td>
                            <td>
                                <?php echo $row['phone']; ?>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
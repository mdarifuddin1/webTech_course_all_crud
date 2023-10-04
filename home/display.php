<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta sl1="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
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

    <h1 class="text-center" >Show Data</h1>

        <table class="table">
            <thead>
                <tr>
                   
                    <th scope="col">Arif</th>
                    <th scope="col">Nizam</th>
                    <th scope="col">Tanzir</th>
                    <th scope="col">Date</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `home`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $sl1 = $row['sl1'];
                        $sl2 = $row['sl2'];
                        $sl3 = $row['sl3'];
                        $date = $row['date'];

                        echo ' <tr>
                          <td>' . $sl1 . '</td>
                          <td>' . $sl2 . '</td>
                          <td>' . $sl3 . '</td>
                          <td>' . $date . '</td>
                          
                     </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>

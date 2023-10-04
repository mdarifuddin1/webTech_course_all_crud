<?php
include 'connect.php';
if (isset($_POST[''])) {
    
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

          <form action="" method="post" >
                <input type="text" name="id" placeholder="Enter Your Id">
                <input type="submit" name="search" value="Search Data">
          </form>  
        <table class="table" >
            <thead >
                <tr >
                    <th scope="col">ID</th>
                    <th scope="col">Player Name</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Jersey Number</th>
                    <th scope="col">Opereation</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `class2`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $country = $row['country'];
                        $jersey = $row['jersey'];

                        echo ' <tr>
                          <th scope="row">' . $id . '</th>
                          <td>' . $name . '</td>
                          <td>' . $country . '</td>
                          <td>' . $jersey. '</td>
                          <td>
                          <button name="update" type="button" class="btn btn-primary">
                          <a class="text-light " href="update.php? updateid='.$id.'">Update</a>
                          </button>
                          <button name="delete" type="button" class="btn btn-danger">
                          <a class="text-light " href="delete.php? id='.$id.'">Delete</a>
                          </button>
                </td>
                          
                     </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>

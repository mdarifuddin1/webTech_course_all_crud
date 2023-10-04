<?php
include 'connect.php';
if (isset($_POST[''])) {
    $country = $_POST['country'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <div class="mb-3">
            <form action="" method="post" class="py-5">
                <label class="form-label">Country Name</label>
                <div>
                    <?php
                        $options = array('Argentina','Brazil','Portugal','Bangladesh');
                        
                       echo "<select>";
                        foreach($options as $option){
                          echo"<option value='$option'>$option</option>";
                        }
                       echo "</select>";

                       $sql = "SELECT * FROM `class2`";
                       if($result = mysqli_query($con, $sql)) {
                        if (mysqli_num_rows($result)> 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['$class'];
                            }
                        }  
                       }
                    ?>
                </div>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
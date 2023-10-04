<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database To Html</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container py-5">

        <!-- <table class="table">
            <thead>
                <tr>
                    <th scope="col">Channel Name</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `database_html`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // $id = $row['id'];
                        $channel = $row['channel'];
                        // $dept = $row['reporter'];
                        // $gender = $row['gender'];
                        // $date = $row['date'];
                
                        echo ' <tr>
                          <th scope="row">' . $channel . '</th>   
                     </tr>';
                    }
                }
                ?>

            </tbody>
        </table> -->
        <label >Choose a Channel:</label>
        <?php
                $sql = "SELECT * FROM `database_html`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                         $id = $row['id'];
                        $channel = $row['channel'];
                        // $dept = $row['reporter'];
                        // $gender = $row['gender'];
                        // $date = $row['date'];
                
                       
                     echo '<select >
                            <option > '. $id . '</option>
                            <option > '. $channel . '</option>  
                           </select>';
                     
                    }
                }
                ?>
    </div>
</body>

</html>
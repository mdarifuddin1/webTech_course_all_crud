<?php
include "connect.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <td scope="col-1">ID</td>
                    <td scope="col-1">Name</td>
                    <td scope="col-1">Department</td>
                    <td scope="col-1">Admissinon Date</td>
                    <td scope="col-1">Action</td>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT *FROM `simple`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $dept = $row['dept'];
                        $date = $row['date'];

                        echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $dept . '</td>
                        <td>' . $date . '</td>
                        <td>
                        <button name="update" type="button">
                        <a  href="update.php? updateid=' . $id . '">Update</a>
                        </button>
                        <button name="delete" type="button">
                        <a href="delete.php? id=' . $id . '">Delete</a>
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
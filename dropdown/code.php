<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "crudcode");
if (isset($_POST['save_selected'])) {
    $n = $_POST['name'];
    $g = $_POST['gender'];

    $query = "INSERT INTO `drop` (name, gender) VALUES ('$n', '$g')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Insert Successfully";
        header('Location: selectbox.php');
    } else {
        $_SESSION['status'] = "Insert Failed";
        header('Location: selectbox.php');
    }
}
?>

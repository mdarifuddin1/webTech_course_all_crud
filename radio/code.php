<?php 
session_start();
$con =mysqli_connect("localhost", "root", "","practicedb");
    if (isset($_POST['save_radio'])) {
        $n = $_POST['name'];
        $g = $_POST['gander'];

        $quary = "INSERT INTO radio (name, gender) values('$n','$g')";
        $quary_run = mysqli_query($con, $quary);
        
        if ($quary_run) {
            $_SESSION['status'] = "Insert Successfully";
            header('Location:radio.php');
        }else {
            $_SESSION['status'] = "Insert Successfully";
            header('Location:radio.php');
        }
    }
?>
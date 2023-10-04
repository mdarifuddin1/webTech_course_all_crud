<?php
$con = new mysqli('localhost', 'root', '', 'crudcode');
if (!$con) {
    die(mysqli_error($con));
}

?>
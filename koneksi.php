<?php
$servername = "localhost";
$user = "root";
$password = "";
$database = "multiuser";

$conn = mysqli_connect($servername, $user, $password, $database) or die(mysqli_error($conn));

<?php
$conn= new mysqli("localhost", "femisams_femius", "femisams_pass", "femisams_femidb");
// $conn= new mysqli("localhost", "username", "password", "db name");
if(mysqli_connect_errno()){
    printf("connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

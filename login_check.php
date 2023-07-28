<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "froxy555_log/reg_7/27";

$check = mysqli_connect($servername, $username, $password, $dbname);

if ($check) {
} else {
    echo "not ok";
}

$email = $_POST["Email"];
$password = $_POST["Password"];

$data = "SELECT * FROM registration WHERE Email = '$email' && Password = '$password'";
$execute = mysqli_query($check, $data);
$count = mysqli_num_rows($execute);

if ($count >= 1) {
    echo "Welcome to my site";
} else {
    $_SESSION["error_message"] = "Wrong email or password";
    echo "<script>window.location.href = 'index.html';</script>";
    exit();
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "froxy555_log/reg_7/27";
$con = mysqli_connect($servername, $username, $password, $dbname);

if ($con) {
    echo "Connection OK";
} else {
    echo "Connection Failed: " . mysqli_error();
}

$name = $_POST["Username"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$Password_confirm = $_POST["Password_confrim"];

$query = "INSERT INTO registration VALUES('', '$name', '$Email', '$Password', '$Password_confirm')";
$data = mysqli_query($con, $query);

if ($data) {
    header("location:index.html");
} else {
    echo "data is not sent";
}
?>

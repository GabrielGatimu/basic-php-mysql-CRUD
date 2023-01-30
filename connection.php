<?php
$host = "localhost";
$username = "gabu";
$password = "########";
$dbName = "CRUD";

$conn = mysqli_connect($host,$username,$password,$dbName);

if (!$conn) {
    # code...
    die("Connection failed".mysqli_connect_error($conn));
}
//mysqli_close($conn);
?>

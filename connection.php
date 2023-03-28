<?php
$host = "localhost";
$username = "gabu";
<<<<<<< HEAD
$password = "########";
=======
$password = "gusr#ADM2023";
>>>>>>> 552b385 (fixed a few errors)
$dbName = "CRUD";

$conn = mysqli_connect($host,$username,$password,$dbName);

if (!$conn) {
    # code...
    die("Connection failed".mysqli_connect_error($conn));
}
//mysqli_close($conn)
?>
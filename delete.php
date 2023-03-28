<?php
include 'connection.php';

if(isset($_GET['deleteId'])){
        $studentId = mysqli_real_escape_string($conn,  $_GET['deleteId']);

        $sql = "DELETE FROM Students WHERE id = $studentId";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
        //echo "Record Deleted Successfully";
        header('location: index.php');
        }else
        {
        die(mysqli_error($conn));
        }

}

?>
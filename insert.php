<?php
include("connection.php");

//check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //Escaping form data to prevent sql injection
$nameColumn = mysqli_real_escape_string($conn, $_POST['name']);
$ageColumn = mysqli_real_escape_string($conn, $_POST['age']);

//Insert record
$sql = "INSERT INTO Students (name,age) VALUES ('$nameColumn', $ageColumn)";

if (mysqli_query($conn, $sql)) {
  	header('Location:index.php');    
}
else{
   echo "Error inserting record:".mysqli_error($conn);
}

//closing db connection
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Add new student </title>
</head>

<body>
    <h1>Add New Record</h1>
    <form action="insert.php" method="post">
        <fieldset>
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>
            <label>Age:</label>
            <input type="tel" name="age" required><br>

            <button type="submit" class="buttons" id="addBtn">Insert</button>
            <a type="submit" class="buttons" id="toIndexBtn" href="index.php">Back</a>
        </fieldset>
    </form>
</body>

</html>
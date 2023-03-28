<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "UPDATE Students SET name = '$name', age = $age 
             WHERE id = $studentId";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "record updated successfully";
        header('location: index.php');
    }
    else{
        echo "Error:". mysqli_error($conn);
    }       
    mysqli_close($conn);
}
elseif 
(isset($_GET['editId'])) {
   $studentId =  $_GET['editId'];
    $sql = "SELECT* FROM Students WHERE id = $studentId";
    $result = mysqli_query($conn, $sql);
        
        if ($result) {        
        
        while ($row = mysqli_fetch_assoc($result)) {
        $studentId =  $row['id'];
        $name = $row['name'];
        $age = $row['age'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Update Record </title>
</head>

<body>
    <h1>Edit Record</h1>
    <form action="edit.php" method="post">
        <fieldset>
            <input type="hidden" name="studentId" value="<?php echo $studentId;?>">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $name;?>" required><br>
            <label>Age:</label>
            <input type="tel" name="age" value="<?php echo $age;?>" required><br>

            <button type="submit" class="buttons">Update</button>
            <a type="submit" class="buttons" id="toIndexBtn" href="index.php">Cancel</a>
        </fieldset>
    </form>
</body>

</html>

<?php }} }?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <title>View Records</title>
    </head>

    <body>
        <h1>View Records</h1>

        <a class="buttons" id="addLink" href="./insert.php">Add Record</a>

        <div id="table-container">
            <table>
                <thead>
                    <tr>
                        <th> Student-Id </th>
                        <th> Name</td>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                </tbody>

                <?php
                   include("connection.php");

                    //fetching all records in Students table
                    $sql = "SELECT* FROM Students";
                    $result = mysqli_query($conn, $sql);  

                    //Printing the results
                    if ($result) {
                       
                    while ($row = mysqli_fetch_assoc($result)) { 
                   
                      $studentId = $row['studentId'];
                      $name = $row['name'];
                      $age = $row['age'];

                        echo '<tr>
                        <td>'.$studentId.'</td>
                        <td>'.$name.'</td>
                        <td>'.$age.'</td>
                        <td>
                                <a class="buttons" id="editLink" href="./edit.php?editId='.$studentId.'; ">Edit</a>
                                <a class="buttons" id="deleteLink" href="./delete.php?deleteId='.$studentId.'; ">Delete</a>
                         </td>
                        </tr>'; 
                    }
                    
                    }
                    
                ?>

                </tbody>
            </table>
        </div>

    </body>

    </html>
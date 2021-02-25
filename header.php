<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book"; //import ไฟล์ดdb ก่อนนะครับ

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


    <?php

    if (isset($_POST['addEmp'])) {
        
        $query1 = "INSERT INTO `employee`(`EmployeeID`, `FirstName`, `LastName`, `BirthDate`, `Salary`) 
        VALUES ('" . $_POST['EmployeeID'] . "','" . $_POST['FirstName'] . "','" . $_POST['LastName'] . "','" . $_POST['BirthDate'] . "','" . $_POST['Salary'] . "')";
        $result = mysqli_query($conn, $query1);

        if ($result) {
            unset($_POST['addEmp']);
        } else {
            unset($_POST['addEmp']);
        }
    }

    
    if (isset($_POST['editEmp'])) {
       
        $query1 = "UPDATE `employee` SET `FirstName`='".$_POST['FirstName']."',`LastName`='".$_POST['LastName']."',`BirthDate`='".$_POST['BirthDate']."',`Salary`='".$_POST['Salary']."' WHERE `EmployeeID`='".$_POST['EmployeeID']."'";
        $result = mysqli_query($conn, $query1);
        
        if ($result) {
            unset($_POST['editEmp']);
        } else {
            unset($_POST['editEmp']);
        }
    }

    if (isset($_POST['delete'])) {
       
        $query1 = "DELETE FROM `employee` WHERE `EmployeeID`='".$_POST['delete']."'";
        $result = mysqli_query($conn, $query1);
        
        if ($result) {
            unset($_POST['delete']);
        } else {
            unset($_POST['delete']);
        }
    }
    ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="post">
                    <div class="modal-body">
                        <b> Confirm Add New Employee !!!</b>
                        <div class="form-group">
                            <label for="exampleInputPassword1">EmployeeID</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="EmployeeID" placeholder="EmployeeID" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">FirstName</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="FirstName" placeholder="FirstName" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">LastName</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="LastName" placeholder="LastName" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">BirthDate</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" name="BirthDate" placeholder="BirthDate" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Salary</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="Salary" placeholder="Salary" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="addEmp" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    $query = "SELECT * FROM `employee`";
    $result = mysqli_query($conn, $query);
    $l = 1;
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <!-- Modal -->
        <div class="modal fade" id="edit<?= $l ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="#" method="post">
                        <div class="modal-body">
                            Confirm Edit Employee !!!
                            <hr>
                            <div class="form-group">
                                <label for="exampleInputPassword1">EmployeeID</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="EmployeeID" value="<?=$row['EmployeeID']?>" placeholder="EmployeeID">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">FirstName</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="FirstName" value="<?=$row['FirstName']?>" placeholder="FirstName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">LastName</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="LastName" value="<?=$row['LastName']?>" placeholder="LastName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">BirthDate</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="BirthDate" value="<?=$row['BirthDate']?>" placeholder="BirthDate">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Salary</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="Salary" value="<?=$row['Salary']?>" placeholder="Salary">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="editEmp" >Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="delete<?= $l ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <form action="#" method="post">
               <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Confirm Delete Employee !!!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-danger" name="delete" value="<?=$row['EmployeeID']?>">Delete</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    <?php
        $l++;
    }
    ?>
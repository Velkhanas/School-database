<?php

use LDAP\Result;

include 'condb.php';
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditTeacher</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<?php include 'navbar.php';?>
<div class="container">
<div class="row">
    <div class="col-sm-6">
<div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert"> แก้ไขคะแนนพฤติกรรม </div>
    <form method="POST" action="editdemelit.php">
        <label>รหัสประจำตัวนักเรียน:</label>
        <input type="text" name="Student_id" class="form-control" readonly value=<?=$id?> ><br>
        <label>คะแนนที่เหลือ:</label>
        <input type="text" name="Point" class="form-control" type="text" ?><br>
        <label>คะแนนที่หัก:</label>
        <input type="text" name="demelitpoint" class="form-control" type="text" ><br>
        <label>เหตุผล:</label>
        <input type="text" name="reason" class="form-control" type="text" ><br>
        <input type="Submit" value="submit" class="btn btn-success mb-3 mt-3">
        <a href="demeliter.php" class="btn btn-danger mb-3 mt-3">Cancel</a>
    </form>
    </div>
    </div>
</div>
</body>
</html>
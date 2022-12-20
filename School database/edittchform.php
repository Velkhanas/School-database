<?php

use LDAP\Result;

include 'condb.php';
$id=$_GET['id'];
$sql="SELECT * FROM teacher WHERE Teacher_id ='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
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
<div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert"> แก้ไขข้อมูลอาจารย์ </div>
    <form method="POST" action="edittch.php">
        <label>รหัสอาจารย์:</label>
        <input type="text" name="Teacher_id" class="form-control" readonly value=<?=$row['Teacher_id']?> ><br>
        <label>ชื่อ-นามสกุล:</label>
        <input type="text" name="Teacher_name" class="form-control" value=<?=$row['Teacher_name']?> ><br>
        <label>เบอร์ติดต่อ:</label>
        <input type="text" name="Phone" class="form-control" type="text" value=<?=$row['Phone']?> ><br>
        <label>อีเมลติดต่อ:</label>
        <input type="text" name="Email" class="form-control" type="text" value=<?=$row['Email']?>><br>
        <label>วันเดือนปีเกิด:</label>
        <input type="text" name="วันเดือนปีเกิด" class="form-control" type="text" value=<?=$row['DOB']?>><br>
        <label>ที่อยู่:</label>
        <input type="text" name="Inhabited" class="form-control" type="text" value=<?=$row['Inhabited']?>><br>
        <input type="Submit" value="Update" class="btn btn-success mb-3 mt-3">
        <a href="showallteacher.php" class="btn btn-danger mb-3 mt-3">Cancel</a>
    </form>
    </div>
    </div>
</div>
</body>
</html>
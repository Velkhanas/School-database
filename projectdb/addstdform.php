<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddStudent</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<?php include 'navbar.php';?>
<div class="container">
<div class="row">
    <div class="col-sm-6">
<div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert"> เพิ่มนักเรียนใหม่ </div>
    <form method="POST" action="addstd.php">
        <label>ชื่อ-นามสกุล:</label>
        <input type="text" name="Student_name" class="form-control" type="text" placeholder="ไม่ต้องมีคำนำหน้าชื่อ" aria-label="name" required><br>
        <label>เบอร์ติดต่อ:</label>
        <input type="text" name="Phone" class="form-control" type="text" placeholder="0XX-XXX-XXXX" aria-label="Phone" required><br>
        <label>อีเมลติดต่อ:</label>
        <input type="text" name="Email" class="form-control" type="text" placeholder="email@email.com" aria-label="email@email.com" required><br>
        <label>วันเดือนปีเกิด:</label>
        <input type="text" name="วันเดือนปีเกิด" class="form-control" type="text" placeholder="dd/mm/yyyy" aria-label="birthdate" required><br>
        <label>ที่อยู่:</label>
        <input type="text" name="Inhabited" class="form-control" type="text" placeholder="บ้านเลขที่, ซอย, หมู่, ถนน, แขวง/ตำบล, อำเภอ, จังหวัด" aria-label="address" required><br>
        <label>ห้องเรียน:</label>
        <input type="text" name="Class" class="form-control" type="text" placeholder="101" required><br>
        <input type="Submit" value="submit" class="btn btn-success mb-3 mt-3">
        <a href="showallstudentallclass.php" class="btn btn-danger mb-3 mt-3">Cancel</a>
    </form>
    </div>
    </div>
</div>
</body>
</html>
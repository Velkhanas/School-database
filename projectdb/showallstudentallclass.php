<?php 
include('condb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllStudent</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
    <div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert">นักเรียนทั้งหมด</div>
    <a href="addstdform.php" class="btn btn-success mb-3">เพิ่มนักเรียนใหม่</a> <a href="demeliter.php" class="btn btn-warning mb-3">ปรับคะแนนพฤติกรรม</a> <a href="delstdform.php" class="btn btn-danger mb-3">ลบรายชื่อนักเรียน</a>
    <table class="table table-info table-striped">
        <tr>
            <th>รหัสประจำตัวนักเรียน</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ห้องเรียน</th>
        </tr>
        <?php
            $sql = "SELECT Student_id, Student_name, Class_id FROM student NATURAL JOIN class_student" ;
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$row["Student_id"]?></td>
            <td><?=$row["Student_name"]?></td>
            <td><?=$row["Class_id"]?></td>    
        </tr>
        <?php
            }
            mysqli_close($conn);
        ?>
    </table>
    </div>
</body>
</html>

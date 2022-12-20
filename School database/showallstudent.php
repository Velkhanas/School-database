<?php 
include('condb.php');
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
    <div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert">สมาชิกในห้อง <?php echo $id;?> </div> 
    <table class="table table-info table-striped">
        <tr>
            <th>รหัสประจำตัวนักเรียน</th>
            <th>ชื่อ-นามสกุล</th>
            <th>เบอร์ติดต่อ</th>
            <th>อีเมลติดต่อ</th>
            <th>วันเดือนปีเกิด</th>
            <th>ที่อยู่</th>
        </tr>
        <?php
            $sql = "SELECT Student_id ,Student_name,Phone,Email,DOB,Inhabited   FROM student NATURAL JOIN class_student WHERE Class_id = $id";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$row["Student_id"]?></td>
            <td><?=$row["Student_name"]?></td>
            <td><?=$row["Phone"]?></td>
            <td><?=$row["Email"]?></td>
            <td><?=$row["DOB"]?></td>
            <td><?=$row["Inhabited"]?></td>
            
        </tr>
        <?php
            }
            mysqli_close($conn);
        ?>
    </table>
    </div>
</body>
</html>
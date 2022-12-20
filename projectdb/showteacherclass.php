<?php 
include('condb.php');
$tid = $_GET["tid"];
$sid = $_GET["sid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeacherOfSubject</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
    <div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert">อาจารย์ประจำวิชา <?php echo $sid;?></div>
    <table class="table table-info table-striped">
        <tr>
            <th>รหัสอาจารย์</th>
            <th>ชื่อ-นามสกุล</th>
            <th>เบอร์ติดต่อ</th>
            <th>อีเมลติดต่อ</th>
            <th>วันเดือนปีเกิด</th>
            <th>ที่อยู่</th>
        </tr>
        <?php
            $sql = "SELECT * FROM teacher NATURAL JOIN sub WHERE Teacher_id = $tid";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$row["Teacher_id"]?></td>
            <td><?=$row["Teacher_name"]?></td>
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

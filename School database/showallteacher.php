<?php 
include('condb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllTeacher</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
    <table class="table table-info table-striped">
    <div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert">อาจารย์ผู้สอน</div>
    <a href="addtchform.php" class="btn btn-success mb-3">เพิ่มอาจารย์</a>

        <tr>
            <th>รหัสอาจารย์</th>
            <th>ชื่อ-นามสกุล</th>
            <th>เบอร์ติดต่อ</th>
            <th>อีเมลติดต่อ</th>
            <th>วันเดือนปีเกิด</th>
            <th>ที่อยู่</th>
            <th>แก้ไขรายละเอียด</th>
            <th>ลบรายชื่ออาจารย์</th>
        </tr>
        <?php
            $sql = "SELECT Teacher_id ,Teacher_name,Phone,Email,DOB,Inhabited   FROM teacher";
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
            <td><a href="edittchform.php?id=<?=$row["Teacher_id"]?>" class="btn btn-warning mb-3">Edit</a></td>
            <td><a href="deltch.php?id=<?=$row["Teacher_id"]?>" class="btn btn-danger mb-3" onclick="Del(This.href);return false";>Delete</a></td>
            
        </tr>
        <?php
            }
            mysqli_close($conn);
        ?>
    </table>
    </div>
</body>
</html>
<script language="Javascript">
    function Del(mypage){
        var agree=confirm("คุณต้องการลบรายชื่อนี้หรือไม่")
        if(agree){
            window.location=mypage;
        }
    }
</script>
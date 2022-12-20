<?php
session_start();
include('condb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllClass</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
    <div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert">แสดงข้อมูลชั้นเรียนทั้งหมด</div> 
    <table class="table table-info table-striped">
        <tr>
            <th>รหัสห้อง</th>
            <th>ปีการศึกษา</th>
            <th>วิชาเรียน</th>
        </tr>
        <?php
            $class = "SELECT Class_id,Class_year FROM  class ";
            $result = mysqli_query($conn, $class);
            while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><a href="showallstudent.php?id=<?=$row["Class_id"]?>"><?=$row["Class_id"]?></a></td>
            <td><?=$row["Class_year"]?></td>
            <td><a href="showallsubject.php?id=<?=$row["Class_id"]?>">คลิก</a></td>
            

        </tr>
        <?php
            }
            mysqli_close($conn);
        ?>
    </table>
    </div>
</body>
</html>
<?php 
include('condb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DemelitPage</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
    <div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert">จัดการคะแนนความประพฤติ</div> 
    <table class="table table-info table-striped">
    <form method="post"> 
        <label>กรอกรหัสประจำตัวนักเรียน</label>
        <input type="text" name="searchid">
        <input type="submit" name="submit" class="btn btn-success mb-2" >
    </form>
        <tr>
            <th>รหัสประจำตัวนักเรียน</th>
            <th>คะแนนพฤติกรรม</th>
            <th>แต้มที่ถูกหัก</th>   
            <th>เหตุผล</th>
        </tr>
        
        <?php if (isset($_POST["submit"])){ $str = $_POST["searchid"];}?>
        <a href="editdemelitform.php?id=<?=$str?>" class="btn btn-warning mb-2 ">Edit</a>
        <?php
            if (isset($_POST["submit"])){
                $str = $_POST["searchid"];
                $class = "SELECT Student_id,point,demelitpoint,reason FROM  demelit NATURAL JOIN student WHERE Student_id='$str' ";
                $result = mysqli_query($conn, $class);
                while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$row["Student_id"]?></td>
            <td><?=$row["point"]?></td>
            <td><?=$row["demelitpoint"]?></td>
            <td><?=$row["reason"]?></td>
        </tr>
        <?php
            }}
            mysqli_close($conn);
        ?>
    </table>
    </div>
</body>
</html>
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
    <title>class</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container">
    <div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert">วิชาเรียนประจำห้อง <?php echo $id;?></div>
    <a href="addsubform.php?cid=<?=$id?>" class="btn btn-success mb-3">เพิ่มวิชาห้อง<?php echo $id;?></a> 
    <table class="table table-info table-striped">
        <tr>
            <th>รหัสวิชา</th>
            <th>ชื่อวิชา</th>
            <th>ครูผู้สอน</th>
            <th>ลบวิชา</th>
        </tr>
        <?php
            $sql = "SELECT Subject_id, Subject_name, Teacher_id FROM sub NATURAL JOIN class_subject  WHERE Class_id = $id";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$row["Subject_id"]?></td>
            <td><?=$row["Subject_name"]?></td>
            <td><a href="showteacherclass.php?tid=<?=$row["Teacher_id"]?>&sid=<?=$row["Subject_id"]?>"><?=$row["Teacher_id"]?></a></td>
            <td><a href="delsub.php?sid=<?=$row["Subject_id"]?>&cid=<?=$id?>" class="btn btn-danger mb-3" onclick="Del(This.href);return false";>Delete</a></td>
            
        
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
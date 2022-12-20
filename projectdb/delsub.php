<?php 
include('condb.php');
$cid=$_GET['cid'];
$sid=$_GET['sid'];
$sql = "DELETE FROM sub WHERE Subject_id ='$sid';";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='showallsubject.php?id=$cid';</script>";}
else{
    echo "<script>alert('ลบข้อมูลไม่สำเร็จ');</script>";}
mysqli_close($conn);
?>
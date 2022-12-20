<?php 
include('condb.php');
$id =$_GET['id'];
$sql = "DELETE FROM teacher WHERE Teacher_id ='$id';";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='showallteacher.php';</script>";}
else{
    echo "<script>alert('ลบข้อมูลไม่สำเร็จ');</script>";}
mysqli_close($conn);
?>
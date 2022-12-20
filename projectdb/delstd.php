<?php 
include('condb.php');
$id =$_POST['id'];
$sql = "DELETE FROM student WHERE Student_id ='$id';";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='showallstudentallclass.php';</script>";}
else{
    echo "<script>alert('ลบข้อมูลไม่สำเร็จ');</script>";}
mysqli_close($conn);
?>
<?php 
include('condb.php');
$studentid = $_POST['Student_id'];
$point = $_POST['Point'];
$minuspoint = $_POST['demelitpoint'];
$reason = $_POST['reason'];
$sql1 ="INSERT INTO demelit(Student_id,point,demelitpoint,reason) VALUES ('$studentid','$point','$minuspoint','$reason');" ;
$result1 = mysqli_query($conn,$sql1);
if($result1){
    echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='demeliter.php';</script>";
}else{
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";}
mysqli_close($conn);
?>
    
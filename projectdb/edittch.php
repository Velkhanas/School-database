<?php 
include('condb.php');
$id = $_POST['Teacher_id'];
$name = $_POST['Teacher_name'];
$phone = $_POST['Phone'];
$mail = $_POST['Email'];
$dob = $_POST['วันเดือนปีเกิด'];
$inhab = $_POST['Inhabited'];
$sql1 ="UPDATE teacher set Teacher_name ='$name', Phone='$phone', Email='$mail', DOB='$dob', Inhabited='$inhab' WHERE Teacher_id ='$id' ";
$result1 = mysqli_query($conn,$sql1);
if($result1){
    echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='showallteacher.php';</script>";

}else{
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";}
mysqli_close($conn);
?>
    
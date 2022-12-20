<?php 
include('condb.php');
$name = $_POST['Teacher_name'];
$phone = $_POST['Phone'];
$mail = $_POST['Email'];
$dob = $_POST['วันเดือนปีเกิด'];
$inhab = $_POST['Inhabited'];
$sql1 ="INSERT INTO teacher(Teacher_name,Phone,Email,DOB,Inhabited) VALUES ('$name','$phone','$mail','$dob','$inhab');" ;$last_id = mysqli_insert_id($conn);
$result1 = mysqli_query($conn,$sql1);
$last_id = mysqli_insert_id($conn);
if($result1){
    echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='showallteacher.php';</script>";

}else{
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";}
mysqli_close($conn);
?>
    
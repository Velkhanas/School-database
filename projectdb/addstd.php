<?php 
include('condb.php');
$name = $_POST['Student_name'];
$phone = $_POST['Phone'];
$mail = $_POST['Email'];
$dob = $_POST['วันเดือนปีเกิด'];
$inhab = $_POST['Inhabited'];
$cid = $_POST['Class'];
$sql1 ="INSERT INTO student(Student_name,Phone,Email,DOB,Inhabited) VALUES ('$name','$phone','$mail','$dob','$inhab');" ;$last_id = mysqli_insert_id($conn);
$result1 = mysqli_query($conn,$sql1);
$last_id = mysqli_insert_id($conn);
$sql2 ="INSERT INTO demelit(Student_id,point,demelitpoint,reason) VALUES ('$last_id',100,0,'คะแนนเริ่มต้น');";
$sql3 ="INSERT INTO class_student(Student_id,Class_id) VALUES ('$last_id','$cid');"; 
$result2 = mysqli_query($conn,$sql2);
$result3 = mysqli_query($conn,$sql3);
if($result3){
    echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='showallstudentallclass.php';</script>";

}else{
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";}
mysqli_close($conn);
?>

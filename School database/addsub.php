<?php 
include('condb.php');
$classid = $_POST['Class_id'];
$subid = $_POST['Sub_id'];
$subname = $_POST['Sub_name'];
$teacherid = $_POST['Teacher_id'];
$sql1 ="INSERT INTO sub(Subject_id,Subject_name,Teacher_id) VALUES ('$subid','$subname','$teacherid');";
$result1 = mysqli_query($conn,$sql1);
$sql2 ="INSERT INTO class_subject(Class_id,Subject_id) VALUES ('$classid','$subid');";
$result2 = mysqli_query($conn,$sql2);
if($result2){
    echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='showallsubject.php?id=$classid';</script>";

}else{
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";}
mysqli_close($conn);
?>

<?php 
    session_start();
    include('condb.php');
    $success = array();
    $errors = array();

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $usercheck = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $query = mysqli_query($conn, $usercheck);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // เช็คว่าชื่่อซ้ำไหม
            if ($result['username'] == $username) {
                echo "<script>alert('Username already existed');</script>";
                echo "<script>window.location='addadminform.php';</script>";
            }
        }
if (count($errors) == 0) {
            $password = md5($password);
            $sql = "INSERT INTO user (username,password) VALUES ('$username','$password')";
            $second= mysqli_query($conn, $sql);
            if($second){
                echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
                echo "<script>window.location='addadminform.php';</script>";
            }else{
                echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
                echo "<script>window.location='addadminform.php';</script>";}

       
    }
     }
    
    
?>
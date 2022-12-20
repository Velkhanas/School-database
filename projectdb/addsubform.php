<?php 
$id =$_GET['cid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addsubject</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<?php include 'navbar.php';?>
<div class="container">
<div class="row">
    <div class="col-sm-6">
<div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert"> เพิ่มวิชาห้อง<?php echo $id;?> </div>
    <form method="POST" action="addsub.php">
        <label>รหัสห้อง:</label>
        <input type="text" name="Class_id" class="form-control" readonly value=<?=$id?> ><br>
        <label>รหัสวิชา:</label>
        <input type="text" name="Sub_id" class="form-control" type="text" placeholder="math-101" required><br>
        <label>ชื่อวิชา:</label>
        <input type="text" name="Sub_name" class="form-control" type="text" placeholder="คณิตศาสตร์ 1"  required><br>
        <label>รหัสครูผู้สอน:</label>
        <input type="text" name="Teacher_id" class="form-control" type="text" required><br>
        <input type="Submit" value="submit" class="btn btn-success mb-3 mt-3">
        <a href="showallsubject.php?id=<?=$id?>" class="btn btn-danger mb-3 mt-3">Cancel</a>
    </form>
    </div>
    </div>
</div>
</body>
</html>
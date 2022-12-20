<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeleteStudent</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<?php include 'navbar.php';?>
<div class="container">
<div class="row">
    <div class="col-sm-6">
<div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert"> ขออนุญาติไล่ออก </div>
    <form method="POST" action="delstd.php">
        <label>เลขที่ต้องการไล่ออก:</label>
        <input type="text" name="id" class="form-control" type="text" placeholder="กรุณากรอกเลขประจำตัวนักเรียน" required><br>
        <input type="Submit" value="submit" class="btn btn-danger mb-3 mt-3">
        <a href="showallstudentallclass.php" class="btn btn-success mb-3 mt-3">Cancel</a>
    </form>
    </div>
    </div>
</div>
</body>
</html>

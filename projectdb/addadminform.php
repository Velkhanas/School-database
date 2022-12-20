<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddAdmin</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<?php include 'navbar.php';?>
<div class="container">
<div class="row">
    <div class="col-sm-6">
<div class="h5 text-center alert alert-primary mb-3 mt-3" role="alert"> เพิ่มแอดมิน </div>
<div class="container">
    <table class="table table-info table-striped">
    <form action="addadmin.php" method = "Post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                        echo $_SESSION['error'];
                        unset ($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username:</label>
            <input type="text" name = "username" class="form-control">
        </div>
        <div class="input-group">
            <label for="password">Password :</label>
            <input type="password" name = "password" class="form-control">
        </div>
        <div class="input-group">
            <button for="submit" name = "submit" class = "btn btn-success mb-3">Submit</button>
        </div>
    </form>   
    </table>
    </div>

</body>
</html>
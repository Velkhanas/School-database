<?php 

    session_start();
    include('condb.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <div class=" h5 text-center alert alert-primary mb-3 mt-3" role="alert">Login</div> 
    <table class="table table-info table-striped">
    <form action="logindb.php" method = "Post">
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

        
        <div class="position-absolute top-35 start-50 translate-middle-x" >
        <div class="input-group">
            <label for="username" class="col-form-label">Username:</label>
            <input type="text" name = "username" class="form-control col-form-label mb-2 ">
        </div>
        <div class="input-group">
            <label for="password" class="col-form-label">Password :</label>
            <input type="password" name = "password" class="form-control col-form-label mb-2 me-10">
        </div>
        <div class="input-group">
            <button for="submit" name = "login_user" class = "btn btn-success mb-3">Login</button>
        </div>
        </div>



    </form>   
    </table>
    </div>


</body>
</html>

<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
        <table class="table">
            <h1>Create New account</h1>
            <tr>
                <td>Name</td>
                <td><input type="text" name="txtname" class="form-control"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="txtemail" class="form-control"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="txtpassword" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="Create New Account" class="btn btn-primary">
                    <a href="login.php" class="btn btn-success">Login</a>
            </td>
            </tr>
        </table>
        </form>
        <?php 
            if(isset($_POST["btn"]))
            {
                $name = $_POST["txtname"];
                $email = $_POST["txtemail"];
                $password = $_POST["txtpassword"];
                
                $i = mysqli_query($con,"insert into regestertb (name,email,password)
                values ('$name','$email','$password')");

                header("location:login.php");
            }

        ?>
    </div>
</body>
</html>
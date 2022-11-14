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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>View All Record</h1>
        <h4><a href="create.php"> Create New Record</a></h4>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php 
                $fetch = mysqli_query($con,"select * from student");
                while($row = mysqli_fetch_array($fetch))
                {
                    echo '
                    <tr>
                        <td>'.$row[0].'</td>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        <td>
                        <a href="edit.php?editID='.$row[0].'" class="btn btn-primary">Edit</a> | 
                        <a href="viewRecord.php?deleteId='.$row[0].'"class="btn btn-danger">Delete</a> |
                        <a href="detail.php?detailID='.$row[0].'" class="btn btn-info">Detail</a>  
                        </td>
                    </tr>
                    ';
                }
            ?>
        </table>

        <?php 
            if(isset($_GET["deleteId"]))
            {
                $id = $_GET["deleteId"];
                $deleteq = mysqli_query($con,"delete from student where id='$id'");
                echo "<script>window.location.reload()</script>";
            }
        
        ?>
    </div>
</body>
</html>
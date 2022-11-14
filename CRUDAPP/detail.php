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
<style>
    body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
</style>
</head>
<body>
    <div class="container">
        <h1>View All Record</h1>
        <h4><a href="create.php"> Student Detail</a></h4>
        <table class="table table-hover">
       
            <?php 
                if(isset($_GET["detailID"]))
                {
                    $did = $_GET["detailID"];
                    $fetch = mysqli_query($con,"select * from student where id='$did'");
                    while($row = mysqli_fetch_array($fetch))
                {
                    
               
                
                
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
 <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <img src="images/<?php echo $row[4] ?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <h4>
                            <?php echo $row[1] ?></h4>
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $row[2] ?>
                            <br />
                            
                            <i class="glyphicon glyphicon-gift"></i><?php echo $row[3] ?></p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
</body>
</html>
<?php }} ?>
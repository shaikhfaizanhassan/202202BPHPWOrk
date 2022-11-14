<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>User Operator Table</h1></center>
    <form action="" method="POST">
        <table style="margin: auto;">
            <tr>
                <td>Enter Table Number</td>
                <td><input type="text" name="txtno"></td>
            </tr>
            <tr>
                <td>Enter Table Range</td>
                <td><input type="text" name="txtrange"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST["btn"]))
        {
            $number = $_POST["txtno"];
            $range = $_POST["txtrange"];

            for ($i=1; $i<=$range ; $i++) { 
                echo "<h3 style='text-align:center'>" . $number . "X" .  $i . "=" . $number * $i ."<br></h3>";
            }
        }





    
    
    
    ?>
</body>
</html>
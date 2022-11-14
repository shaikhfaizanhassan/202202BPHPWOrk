<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Contact Us Form</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="txtemail" id=""></td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td><input type="text" name="txtsubject" id=""></td>
                </tr>
                <tr>
                    <td>Messaage</td>
                    <td>
                        <textarea name="txtmsg" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn" value="Send Message"></td>
                </tr>
            </table>
        </form>

        <?php 
            if(isset($_POST["btn"]))
            {
                $to = $_POST["txtemail"];
                $subject = $_POST["txtsubject"];
                $msg = $_POST["txtmsg"];
                $form = "sfh8881212@gmail.com";
                $headers = "From:" . $form;
                if (mail($to, $subject, $msg, $headers)) {
                    echo "Message Send";
                }
                else {
                    echo "failed Message";
                }

            }
        ?>
    </center>
</body>
</html>
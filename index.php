<?php
    echo "<h1 style='text-align:center'>Welcome To PHP<h1>";
    $name = "Shaikh Faizan Hassan";
    $email = "f@gmail.com";
    $password = "123";
    $age = 27;
    $gender = "MALE";


    echo "Employee Name " . $name . "<br> 
    Employee Email " . $email . "<br>
    Password " . $password . "<br>
    Gender" . $gender . "<br>Age" . $age  . "<br>";
    echo "========Arthematic Operator============<br>";
    
    $num1 = 50;
    $num2 = 60;

    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;

    echo "Addition is " . $sum . "<br>";
    echo "Substraction is " . $sub . "<br>";
    echo "Multiplocation is " . $mul . "<br>";
    echo "Division is " . $div . "<br>";
    echo "========Logical Operator============<br>";
    if($email=="ff@gmail.com" || $password=="123")
    {
        echo "Login Done <br>";
    }
    else
    {
        echo "Failed";
    }
    echo "========Relational Operator======<br>";
    if($num1 <=$num2)
    {
        echo "No $num1 is Greater Then $num2";
    }
    else
    {
        echo "No $num1 is not Greater Then $num2";
    }

    

    
    
?>
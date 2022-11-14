
<?php 
//my work is done
//my name is faizan my work is done
echo "Index Array<br>";
$number = array(1,2,3,4,5);
$count= count($number);
//echo $number[4];
for($i=0;$i<$count;$i++)
{
    echo "Index Value is " . $number[$i] . "<br>";
}
echo "Assocative Array<br>";
$age = array("faizan"=>"27","noman"=>"21","hassan"=>"26","kamran"=>"32");
//echo $age["faizan"];
foreach ($age as $key => $value) {
    echo "Key Is " . $key . "Value is " . $value . "<br>";
}
echo "Multideminal Array<br>";
$num = array(
    array(1,2,3),
    array(4,5,6),
    array(7,9,8)

);
//echo $num[2][2];
for($row=0;$row<3;$row++)
{
    echo $row ."<br>";
    for($col=0;$col<3;$col++)
    {
     
        echo $num[$row][$col] . "<br>";
    }
    echo" <br>";
}


?>

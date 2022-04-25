<?php
$x=10;
$y=10;
if ($x == $y )
$sum= ($x + $y)*3;
else 
$sum=$x+$y;

echo "task 3 result===". $sum."<br>";


$x=10;
$y=30;
if ($x == 30|| $y==30 )
$res= true;
else 
$res=false;

echo "task 4 result===". $res."<br>";



$x=3;
 
if ($x%3==0|| $x%7==0 )
$res= true;
else 
$res=false;

echo "task 5 result===". $res."<br>";






$x=50;
 
if (($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50) )
$res= true;
else 
$res=false;

echo "task 6 result===". $res."<br>";




$x=1;
$z=9;
$y=6;
$max = $x;

if ($x >= $y && $x >= $z)
  $max = $x;
if ($y >= $x && $y >= $z)
  $max = $y;
if ($z >= $x && $z >= $y)
  $max = $z;
 

echo "task 7 result===". $max."<br>";



$age = 19;
if ($age >= 18) {
     $vote = " you Are Eligible For Vote";
} else {
     $vote = " you are not eligible for vote. ";
}
echo "task 8 result===". $vote."<br>";







$num = -3; 
if ($num > 0)  
{
    $msg = " is a positive number";
} else if ($num < 0) 
{
    $msg = " is a negative number ";
} else if ($num == 0) 
{
    $msg = "You have entered zero";
} else {
    $msg = " please enter a numeric value";
}
echo "task 9 result===". $msg."<br>";





$first_num =10;
$second_num = 90;
$operator = "/";
$result = '';

    switch ($operator) {
        case "+":
           $result = $first_num + $second_num;
            break;
        case "-":
           $result = $first_num - $second_num;
            break;
        case "*":
            $result = $first_num * $second_num;
            break;
        case "/":
            $result = $first_num / $second_num;
    }

    echo "task 10 result===". $result."<br>";



    $grade =88;
 
$results = '';

if ($grade <60)  
{
    $results = " F";
} else if ($grade < 70) 
{
    $results = "D";
} else if ($grade <80) 
{
    $results = "C";
} else if ($grade <90) 
$results = "b";
else if ($grade <100) 
$results = "a";

else {
    $results = " please enter a numeric value";
}



    echo "task 10 result===". $results."<br>";


?>
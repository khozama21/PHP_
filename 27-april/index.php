<?php


// Ex 1

print("<h1>". "EX 1" . "</h1>"."<br>");
 function isPrime($num){
if($num%3==0)
{
    print($num. "  Is a Prime Number");
}else 
print($num. "  Is Not a  Prime Number");

 }

$num=2;
isPrime($num);





print ("<br>");
print ("<br>");
print ("<br>");


// end of EX 1


// Ex 2

print("<h1>". "EX 2" . "</h1>"."<br>");


$str="Hello, World!";
print ("Original String is:  ".$str. "   Reversed string is:   ".strrev($str));







print ("<br>");
print ("<br>");
print ("<br>");

// end of EX 2



// Ex 3



print("<h1>". "EX 3" . "</h1>"."<br>");

// function islowercase($str){
// if (ctype_lower($str)){
//     print($str. " Is Lower case");

// }else 
// {
//     print($str. " Is Not Lower case");

// }
// }

$str2="hello";
if (ctype_lower($str2))
    print($str2. " Is Lower case");

else 
    print($str2. " Is Not Lower case");


// islowercase($str2);






print ("<br>");
print ("<br>");
print ("<br>");
// end of EX 3





// Ex 4



print("<h1>". "EX 4" . "</h1>"."<br>");

 function swapnum($x,$y){
    $temp = $x;
    $x = $y;
    $y = $temp;
    print("The numbers after: ");
    print($x." and ".$y);
 }
$x = 5;
$y = 99;
 
echo "The numbers before: ";
echo $x." and ".$y."<br>";
swapnum($x,$y);
 




print ("<br>");
print ("<br>");
print ("<br>");
// end of EX 4



// Ex 6



print("<h1>". "EX 6" . "</h1>"."<br>");

 

function armstrongnum($number) {
    $len = strlen($number);
    $sum = 0;
    $number = (string)$number;
    for ($i = 0; $i < $len; $i++) {
      $sum = $sum + pow((string)$number{$i},$len);
    }
    if ((string)$sum == (string)$number) {
      return "True";
    } else {
      return "False";
    }
  }

  echo armstrongnum(407);


print ("<br>");
print ("<br>");
print ("<br>");
// end of EX 6










// Ex 7

print("<h1>". "EX 7" . "</h1>"."<br>");

function ispali($str){
    if ($str==strrev($str))
    echo $str. " Is a palindrome";
    else 
    echo $str. " Is not a palindrome";

}

$str="dad";

ispali($str);






print ("<br>");
print ("<br>");
print ("<br>");

// end of EX 7




// Ex 8

print("<h1>". "EX 8" . "</h1>"."<br>");

$arr=['lolo','soso','momo','soso','lolo','hoho'];
print_r( $arr );
print('<br>');
print_r( array_unique($arr));






print ("<br>");
print ("<br>");
print ("<br>");

// end of EX 8











?> 
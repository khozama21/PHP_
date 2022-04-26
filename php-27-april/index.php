<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <h1>Required Tasks</h1>
    <hr>

    <?php

$sum=0;

for ($n=0;$n<30;$n++){
    $sum+=$n;
}
 print('Exercise No. 1 => ');
print($sum);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$x = 5;
$y = 1;
for($i=1;$i<=$x-1;$i++)
{
 $y*=($i+1); 
}

print('Exercise No. 2 => ');
echo "The factorial of  $x = $y";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



$n1 = 0;
$n2 = 1;
$n3 = 20;

print('Exercise No. 3 => ');
echo $n1;
echo '<br/>';
echo $n2;
echo '<br/>';

for($i = 1; $i <= $n3; $i++) {
    $n4 = $n1 + $n2;
    $n1 = $n2;
    $n2 = $n4;
    echo $n4 ."     "; 
}


echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
 



print('Exercise No. 4 => ');

echo '<br>';

$x = 5; 
$count = 1;
for ($i = $x; $i > 0; $i--) 
{
  for ($j = $i; $j < $x + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>";
   }
 
?>
 


  </body>
</html>

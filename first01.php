<?php
$a=4000;
$b=4000;
$c=$a+$b;
$d=$c;
if($c>5000)
{
    $d=$d-$d*10/100;
    echo "Cart price = $d";
}
else
{
   echo  "$c";
}
?>
<html>
    <form method='POST'>
        <input type="textfield" name="num1">
</form>
<?php
$a=$_POST['num1'];
if($a<5000)
{
    echo "Fitness level : Your are a beginner";
}
elseif ($a>=5000 and $a<=10000)
{
    echo "Fitnes level : Intermediate";
}
elseif ($a>10000)
{
    echo "Fitness level : Advanced";
}
?>
        
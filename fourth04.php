<html>
    <body>
        <form method='POST'>
            <input type="textfield" name="num1">
</form>
</body>
</html>
<?php
$a=$_POST['num1'];
if ($a>90)
{
    echo "Grade: A";
}
elseif($a<=90 and $a>=81)
{
    echo "Grade: B";
}
elseif($a<=80 and $a>=71)
{
    echo "Grade: C";
}
elseif($a<=70 and $a>=60)
{
    echo "Grade: D";
}
elseif($a<60)
{
    echo "Grade: F";
}
?>
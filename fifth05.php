<html>
    <form method="POST">
        <body bgcolor="grey">
            <h2> ONLINE STORE </h2>
        <input type="text field" name="num1"><br><br>
        <input type="text field" name="num2"><br><br>
        <input type="text field" name="num3"><br><br>
        <input type="text field" name="num4"><br><br>
        <input type="submit" value="ok"><br>
</body>
</form>
</html>
<?php
$a=$_POST['num1'];
$b=$_POST['num2'];
$c=$_POST['num3'];
$d=$_POST['num4'];
$e=$a+$b+$c+$d;
if($e>=1000)
{
    echo "!!You can avail Discount !! Amount: $e";
}
else
{
    echo "OOPS !!";
    echo "can't avail discount";
}
?>
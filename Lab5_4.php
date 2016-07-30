<!Doctype html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Principal (PV): <input type='text' name='PV'><br>

interest rate (r): <input type='text' name='interest'><br>

number of Payment (n): <input type='text' name='nop'><br>

<input type= "submit" value="Calculate">
</form>

<?php
if ($_POST)
{

$PV=$_POST["PV"];
$r = $_POST["interest"] / 100;
$n = $_POST["nop"];

$x = 1;
$i = 1;

while ($i <=$n)
{
$x *= (1+$r);
$i++;
}

$FV = $PV * $x;

echo "Total loan payment is  \$$FV<br />";



$x =1;
for ($i = 1;$i<= $n; $i++)
{
$x *= (1+$r);
}



$x=1/$x;

$x= 1-$x;

$x= $r /$x;
$M = $PV *$x;

echo "Monthly payment is \$$M<br>";

}
?>

</body>
</html>
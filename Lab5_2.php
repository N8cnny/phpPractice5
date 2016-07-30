<!Doctype html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Enter an integer: 
<input type="text" name="n1">
<input type="submit" value="Check"</form><br>

<?php
if ($_POST)
{
$n = $_POST["n1"];

$f = 1;

for ($i = 1; $i < $n; $i++)
{
$f *= $i;
}

echo "factorial ($n!) = $f<br>";

$h=0;
$i=1;

while ($i <= $n)
{
$h += 1/$i;
$i++;
}

echo "Sum of harmonic numbers (&#8721;1/n) = $h<br>";

$s = 0;
$i = 1;

do
{
$s += $i * $i;
$i++;
}
while ($i <= $n);
echo " sm of the first n squares: &#8721:n^n) = $s<br>";
}
?>

</body>
</html>
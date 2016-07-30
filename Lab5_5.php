<!Doctype html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
How many Drawings? <input type= 'text' name='draw'>

<input type= "submit" value="check">

</form>

<?php
if ($_POST)
{
$draw= $_POST["draw"];

$i= 0;

while ($i < $draw)
{
 $n1 = rand(1,49);
 $n2 = rand(1,49);

while($n2 == $n1)
{
$n2 = rand(0,49);
}

 $n3 = rand(1,49);

while ($n3 == $n1 || $n3 == $n2)
{
$n3 = rand(1,49);
}

$n4 = rand(1,49);

while ($n4 ==$n1 || $n4 == $n2 || $n4 == $n3)
{
$n4 = rand(0,49);
}

$n5 = rand(0,49);

While($n5 == $n1 || $n5 ==$n2 || $n5 == $n3 || $n5 == $n4)
{
$n5 = rand(0,49);
}

$mega = rand(1,27);

echo "$n1 $n2 $n3 $n4 $n5 mega: $mega<br>";
$i++;

}

}
?>
</body>
</html>
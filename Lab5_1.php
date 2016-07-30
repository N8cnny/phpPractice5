<!Doctype html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Begin number:
<Input type="text" name="begin" size= 4><br />

End number:
<Input type="text" name="end" size= 4><br />

increment by:
<Input type="text" name="inct" size= 4><br />

<input type="submit" value="check">
</form>

<?php 
if ($_POST)
{
$begin= $_POST["begin"];
$end = $_POST["end"];
$inct = $_POST["inct"];


echo "<table border = '1'><tr>",
     "<th><i>for</i> loop </th>",
     "<th><i>while</i> loop</th>",
     "<th><i>do..while</i> loop</th></tr>";

echo "<tr><td>";

for($i=$begin; $i<=$end; $i +=$inct)
{ echo "$i<br />";
} 

echo "</td><td>";

$i = $begin;

do
{
echo "$i<br />";
$i += $inct;
}  while ($i <= $end);

echo "</td></tr></table>";
}

?>
</body>
</html>

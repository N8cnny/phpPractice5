<!Doctype html>
<html>
<body>

<?php

echo"<table border='1' cellspacing='0'<tr>";

for ($r=1; $r <=10; $r++)
{
echo"<td>";

 for ($c=1; $c<=10; $c++)
{
  echo $r . "x" . $c . "=" . $r * $c. "<br>";
}

echo "</td>";
}

echo"</tr></table>";

echo "<hr size ='2'>";

echo "<table border= '1' cellspacing='0'><tr>";

$r =1;

while($r<=10)
{
echo"<td>";

$c=1;
  while($c<=10)
{ 
 echo $r. "x" . $c . "=" . $r * $c . "<br>";

 $c++;
}

$r++;
 echo "</td>";
}

echo "</tr></table>";

echo "<hr size='2'>";

echo "<table border='1' cellspacing='0'><tr>";

$r=1;

do
{
echo "<td>";

$c =1;

do
{
echo $r . "x" . $c. "=" . $r * $c . "<br>";

$c++;
} while ($c<=10);

$r++;
echo"</td>";
}
while ($r<=10);

echo "</tr></table>";
?>
</body>
</html>
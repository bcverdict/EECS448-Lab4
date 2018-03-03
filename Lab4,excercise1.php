<?php
function sum($a, $b)
{
  return($a+$b);
}
function multiply($c,$d)
{
  return($c*$d);
}
echo "<table>";
for($i = 1; $i<101;$i++)
{
  echo "<tr>";
  for($j = 1; $j<101;$j++)
  {
    echo "<td>". multiply($i,$j) ."<td>";
  }
  echo "</tr>";
}
echo "</table>";
?>

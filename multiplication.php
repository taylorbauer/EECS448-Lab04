<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<p>Multiplication Table Generated with PHP<br>By Taylor Bauer</p><table><tr><td></td>";

for ($column = 1; $column < 101; $column ++)
{
  echo "<td>" .(string)$column . "</td>";
}
echo "</tr>";

for ($row = 1; $row < 101; $row ++)
{
  echo "<tr><td>$row</td>";
  for ($column = 1; $column < 101; $column ++)
  {
    echo "<td>" . (string)($column * $row) . "</td>";
  }
  echo "</tr>";
}

echo "</table>";

?>


<?php

function displayTable($data, $tableHeaders, $deleteAttribute, $deleteValue) {
  echo "<table width='1800' class='content-table'>";
  echo "<thead>";
  echo "<tr class='first_row'>";
  foreach ($tableHeaders as $header) {
    echo "<th>" . $header . "</th>";
  }
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  if (count($data) > 0) {
    foreach ($data as $row) {
      echo "<tr>";
      foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
      }
      echo "</tr>";
    }
  }
  echo "</tbody>";
  echo "</table>";
}
?>

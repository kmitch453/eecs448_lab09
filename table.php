
<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  //table function
    var $i, $j;
    echo "<table style="width:100%">";
    for($i=0; $i<=10; $i++) {
      echo "<tr>";
      for($j=0; $j<=10; $j++) {
        echo "<td>" . $i*$j . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  ?>

<?php
echo "<h1>Data Filters</h1>\n<table>\n<tr>\n";
echo "<td><strong>Filter ID</strong></td>\n";
echo "<td><strong>Filter Name</strong></td>\n</tr>";
foreach(filter_list() as $id =>$filter) {
  echo "<tr><td>$filter</td><td>".filter_id($filter)."</td></tr>\n";
}
echo "</table>\n";
?>
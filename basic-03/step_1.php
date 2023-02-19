<?php

$rows = 8;

$row = 1;
$col = 1;

while ($row <= $rows) {
    while ($col <= $row) {
        echo "*";
        $col++;
    }
    echo "<br/>";
    $col = 1;
    $row++;
}
?>
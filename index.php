<?php

$rows = 5;
$cols = 10;

$table = '<table border="0";>';

for ($tr=1; $tr<=5; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=10; $td++){
        $table .= '<td style="color:black;background-color:pink;">'. rand(10, 99) .'</td>';
    }

        $table .='</tr>';
}
$table .= '</table>';
echo $table;

?>

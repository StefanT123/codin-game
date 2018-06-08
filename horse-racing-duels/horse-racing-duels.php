<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);

$Pi = [];
$d = 0;
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d", $Pi[$i]);
}

$val = max($Pi);
sort($Pi);
for ($x = 0; $x < $N; $x++) {
    $d = abs($Pi[$x] - $Pi[$x+1]);
    if ($d < $val) {
        $val = $d;
    }
}

echo $val . "\n";



// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

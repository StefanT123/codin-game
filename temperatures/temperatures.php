<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(
    STDIN,
    "%d",
    $n // the number of temperatures to analyse
);
$temps = stream_get_line(STDIN, 256 + 1, "\n"); // the n temperatures expressed as integers ranging from -273 to 5526
$array = explode(' ', $temps);
sort($array);

if ($n == 0) {
    echo "0";
} else {
    for ($i = 0; $i < $n; $i++) {
        if ($array[$i] > 0) {
            $positive = $array[$i];
            break;
        }

        if (($array[$i] < 0) && $array[$i] > $array[$i-1]) {
            $negative = $array[$i];
        }
    }
    if ($positive && $negative) {
        if (abs($positive) < abs($negative)) {
            $closest = $positive;
        } elseif (abs($positive) == abs($negative)) {
            $closest = $positive;
        }
    } elseif ($negative) {
        echo $negative . "\n";
    } elseif ($positive) {
        echo $positive . "\n";
    }
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo $closest . "\n";

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(
    STDIN,
    "%s",
    $LON
);
fscanf(
    STDIN,
    "%s",
    $LAT
);
fscanf(
    STDIN,
    "%d",
    $N //num of defibrilators
);

$LON = (double) str_replace(',', '.', $LON);
$LAT = (double) str_replace(',', '.', $LAT);

$d = [];
for ($i = 0; $i < $N; $i++) {
    $DEFIB = stream_get_line(STDIN, 256 + 1, "\n");
    $st = explode(';', $DEFIB);
    $name = $st[1];
    $lon = $st[4];
    $lon = str_replace(',', '.', $lon);
    $lon = (double)$lon;
    $lat = $st[5];
    $lat = str_replace(',', '.', $lat);
    $lat = (double)$lat;
    $x = ($LON - $lon) * cos(($LAT + $lat)/2);
    $y = ($LAT - $lat);
    $d[$name] = sqrt(($x*$x)+($y*$y))*6371;
}

asort($d);

foreach ($d as $key => $value) {
    echo $key."\n";
    break;
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

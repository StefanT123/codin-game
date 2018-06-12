<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(
    STDIN,
    "%d",
    $L
);
fscanf(
    STDIN,
    "%d",
    $H
);
$T = stream_get_line(STDIN, 256 + 1, "\n");
$chars = preg_split('//', $T, -1, PREG_SPLIT_NO_EMPTY);

for ($i = 0; $i < $H; $i++) {
    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
    $text = '';
    foreach ($chars as $key) {
        $order = ord(strtoupper($key)) - ord('A');
        if ($order < 0) {
            $num = 104;
        } else {
            $num = $order * $L;
        }
        for ($y=0; $y < $L; $y++) {
            $text .= $ROW[$num + $y];
        }
    }
    echo $text."\n";
}

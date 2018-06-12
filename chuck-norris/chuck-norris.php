<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$MESSAGE = stream_get_line(STDIN, 100 + 1, "\n");
$text = str_split($MESSAGE);
$binary = "";

foreach ($text as $char) {
    $binary .= str_pad(decbin(ord($char)), 7, 0, STR_PAD_LEFT);
}

$len = strlen($binary);
$array = str_split($binary);
$code = "";

for ($i=0; $i < $len; $i++) {
    if ($array[$i] == 1 && $array[$i-1] == 0) {
        $code .= "0 ";
    }
    if ($array[$i] == 0 && $array[$i-1] != $array[$i]) {
        $code .= "00 ";
    }
    while ($array[$i] == 1 || $array[$i] == 0) {
        $code .= "0";
        break;
    }
    if ($array[$i+1] != $array[$i] && $i < $len-1) {
        $code .= " ";
    }
}

echo($code."\n");

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(
    STDIN,
    "%d",
    $N // Number of elements which make up the association table.
);
fscanf(
    STDIN,
    "%d",
    $Q // Number Q of file names to be analyzed.
);

$array = [];
for ($i = 0; $i < $N; $i++) {
    fscanf(
        STDIN,
        "%s %s",
        $EXT, // file extension
        $MT // MIME type.
    );
    $EXT = strtolower($EXT);
    $array[$EXT] = $MT;
}

for ($i = 0; $i < $Q; $i++) {
    $FNAME = stream_get_line(STDIN, 500 + 1, "\n"); // One file name per line.
    $file = substr($FNAME, strrpos($FNAME, '.') + 1);
    $file = strtolower($file);
    if ($array[$file]) {
        echo $array[$file]."\n";
    } else {
        echo "UNKNOWN\n";
    }
}

// For each of the Q filenames, display on a line the corresponding MIME type. If there is no corresponding type, then display UNKNOWN.

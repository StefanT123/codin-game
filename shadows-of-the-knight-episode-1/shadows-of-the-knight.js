/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

var inputs = readline().split(' ');
var W = parseInt(inputs[0]); // width of the building.
var H = parseInt(inputs[1]); // height of the building.
var N = parseInt(readline()); // maximum number of turns before game over.
var inputs = readline().split(' ');
var X0 = parseInt(inputs[0]);
var Y0 = parseInt(inputs[1]);

let startX = 0;
let startY = 0;

let endX = W - 1;
let endY = H - 1;

// game loop
while (true) {
    var bombDir = readline(); // the direction of the bombs from batman's current location (U, UR, R, DR, D, DL, L or UL)

    if (bombDir.indexOf('D') !== -1) {
        startY = Y0;

        Y0 = directionGoing(Y0, endY, 'positive');
    }

    if (bombDir.indexOf('R') !== -1) {
        startX = X0;

        X0 = directionGoing(X0, endX, 'positive');
    }

    if (bombDir.indexOf('U') !== -1) {
        endY = Y0 - 1;

        Y0 = directionGoing(Y0, startY, 'negative');
    }

    if (bombDir.indexOf('L') !== -1) {
        endX = X0 - 1;

        X0 = directionGoing(X0, startX, 'negative');
    }

    X0 = Math.ceil(X0);
    Y0 = Math.ceil(Y0);

    // the location of the next window Batman should jump to.
    print(X0, Y0);
}

function directionGoing(curentPosition, lastStopingPosition, direction) {
    if (direction === 'positive') {
        return (curentPosition + 1 + lastStopingPosition) / 2;
    }

    return (curentPosition - 1 + lastStopingPosition) / 2;
}

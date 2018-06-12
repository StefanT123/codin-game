/**
 * Don't let the machines win. You are humanity's last hope...
 **/

var width = parseInt(readline()); // the number of cells on the X axis
var height = parseInt(readline()); // the number of cells on the Y axis
let grid = [];
let result;

for (var i = 0; i < height; i++) {
    var line = readline(); // width characters, each either 0 or .

    grid.push(line);
}

for (let y = 0; y < height; y++) {
    for (let x = 0; x < width; x++) {
        if (grid[y][x] === '0') {
            result = `${x} ${y} `;
            result += findNextNode(x, y, 'right');
            result += findNextNode(x, y, 'down');
            print(result);
        }
    }
}

function findNextNode(x, y, position) {
    if (position === 'right') {
        for (let rightNode = x + 1; rightNode < width; rightNode++) {
            if (grid[y][rightNode] === '0') {
                return `${rightNode} ${y} `;
            }
        }
    } else if (position === 'down') {
        for (let bottomNode = y + 1; bottomNode < height; bottomNode++) {
            if (grid[bottomNode][x] === '0') {
                return `${x} ${bottomNode} `;
            }
        }
    }

    return '-1 -1 ';
}

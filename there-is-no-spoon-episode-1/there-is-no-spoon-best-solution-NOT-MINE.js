var w = +readline(); // the number of cells on the X axis
var h = +readline(); // the number of cells on the Y axis

var a = [];
for (var i = 0; i < h; i++) {
    a.push(readline().split('')); // width characters, each either 0 or .
}

var lastX = new Array(h).fill("-1 -1");
var lastY = new Array(w).fill("-1 -1");

for (var y = h-1; y >= 0; y--)
    for(var x = w-1; x >= 0; x--)
        if (a[y][x] == "0"){
            print(`${x} ${y} ${lastX[y]} ${lastY[x]}`);
            lastX[y] = lastY[x] = `${x} ${y}`;
        }

// THIS IS NOT MY SOLUTION, BUT IT IS SO BRILLIANT THAT I COULDN'T
// RESIST NOT SHARING IT WITH OTHERS

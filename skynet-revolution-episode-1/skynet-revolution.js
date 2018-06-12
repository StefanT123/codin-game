/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

var inputs = readline().split(' ');
var N = parseInt(inputs[0]); // the total number of nodes in the level, including the gateways
var L = parseInt(inputs[1]); // the number of links
var E = parseInt(inputs[2]); // the number of exit gateways

let links = [];
let exits = [];
let severed = [];

for (var i = 0; i < L; i++) {
    var inputs = readline().split(' ');
    var N1 = parseInt(inputs[0]); // N1 and N2 defines a link between these nodes
    var N2 = parseInt(inputs[1]);

    if (links[N1] === undefined) links[N1] = [];
    if (links[N2] === undefined) links[N2] = [];

    links[N1].push(N2);
    links[N2].push(N1);
}

for (var i = 0; i < E; i++) {
    var EI = parseInt(readline()); // the index of a gateway node
    exits[i] = EI;
}

// game loop
while (true) {
    var SI = parseInt(readline()); // The index of the node on which the Skynet agent is positioned this turn

    let sharedNode = links[SI].filter(node => exits.includes(node));
    if (severed[sharedNode] === undefined) severed[sharedNode] = [];

    closeLink(sharedNode, SI);
}

function closeLink(node, agentNode) {
    if (node.length > 0) {
        if (nodeIsSevered(node, agentNode)) {
            let nodesToCut = links[agentNode].filter(a => ! severed[node].includes(a) && a !== node[0]);
            return print(agentNode, nodesToCut[nodesToCut.length - 1]);
        }
        severed[node].push(agentNode);
        return print(node, agentNode);
    }

    return print(links[agentNode][0], agentNode);
}

function nodeIsSevered(node, agentNode) {
    return severed[node].includes(agentNode);
}

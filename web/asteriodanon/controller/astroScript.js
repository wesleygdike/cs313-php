
var map = {};
$(document).ready(function(){
    $(document).keydown(function(event){ 
        keyChanged(event);
    });
    $(document).keyup(function(event){ 
        keyChanged(event);
    });
});

function keyChanged(event) {
map[event.key] = event.type == 'keydown';
$("#fireValue").text(map[' ']);
$("#boosterValue").text(map['w']);
var turn = 0;
if (map['a']) {
    turn -= 1;
}
if (map['d']) {
    turn += 1;
}
$("#turnValue").text(turn);
}
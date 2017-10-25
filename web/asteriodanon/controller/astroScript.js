
var map = {};
$(document).ready(function(){
    $(document).keydown(function(event){ 
        keyChanged(event);
    });
    $(document).keyup(function(event){ 
        keyChanged(event);
    });
    $("#testerBTN").click(function(){
        $.get("../controller/operations/clearUsers.php", function(data, status){
           //alert("Status of clearUser call: " + status); 
        });
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


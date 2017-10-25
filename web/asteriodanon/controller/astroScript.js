
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
$("#fireValue").text("W Key: " + map['w'] + " -  E Key: " + map['e']);
}
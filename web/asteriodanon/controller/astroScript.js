
var map = {}; //keep track of keys pressed
$(document).ready(function(){
    $(document).keydown(changeKeyValue(event));
    $(document).keyup(changeKeyValue(event));
});



function changeKeyValue(e){
    e = e || event; // to deal with IE
    map[e.keyCode] = e.type === 'keydown';
}

var map = {}; //keep track of keys pressed
$(document).ready(function(){
    $(document).keydown(changeKeyValue(event));
    $(document).keyup(changeKeyValue(event));
});



function changeKeyValue(e){
    map[e.keyCode] = e.type === 'keydown';
}
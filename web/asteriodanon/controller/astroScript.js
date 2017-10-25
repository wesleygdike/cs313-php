
   
$(document).ready(function(){
    $(document).keypress(function(event){
        $("#fireValue").text(event.keyCode);
    });
});
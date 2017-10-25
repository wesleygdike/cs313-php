
   
$(document).ready(function(){
    $(document).keypress(function(e){
        $("#fireValue").text(e.keys().toString());
    });
});
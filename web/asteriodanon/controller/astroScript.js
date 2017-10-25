

function removeUsers() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     //document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/web/asteriodanon/controller/operations/clear-table.php", true);
  xhttp.send();
}
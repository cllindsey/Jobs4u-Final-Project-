
function loadXMLDoc() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
        }
    }
    xmlhttp.open("GET","sessionKill.php",true);
    xmlhttp.send();
}
        
    
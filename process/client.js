var xmlHttp;
function stateChanged(){
    if(xmlHttp.readyState==4)
        document.getElementById("txtHint").innerHTML=xmlHttp.responseText;
    }
function showHint(str){
    if(str.length==0){
        document.getElementById("txtHint").innerHTML="";
        return;
    }

xmlHttp=new XMLHttpRequest();
if(xmlHttp==null){
    alert("Your browser does not support AJAX!");
    return;
}
var url="process/server.php";
var parameters = "q="+str+"&sid="+Math.random();
xmlHttp.open("POST",url,true);
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.send(parameters);
xmlHttp.onreadystatechange=stateChanged;
}
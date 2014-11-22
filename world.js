window.onload=function (){
    var textbox = $("term");
    var start = $("lookup");
    start.onclick = search;
    function search() {
        var text = textbox.value;
        var allcheck = $("allcheck");
        var ajaxreq = new XMLHttpRequest();
        ajaxreq.open("GET","world.php?lookup=" + text,false);
        ajaxreq.send();
        response = ajaxreq.responseText;
        alert(response);
        $("result").innerHTML = response;
        if (allcheck.checked==true){
            all();
        }
    };
    function all() {
        var ajaxreq = new XMLHttpRequest();
        ajaxreq.open("GET","world.php?all=true",false);        
        ajaxreq.send();
        response = ajaxreq.responseText;
        alert(response);
        $("result").innerHTML = response;
    }
};
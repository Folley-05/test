
var b1=document.getElementById('b1');
var b2=document.getElementById('b2');
var b3=document.getElementById('b3');

function toogle1()
{
    var offres=document.getElementById('offres');
    var etp=document.getElementById('entreprise');
    etp.style="display: none;";
    offres.style="display: block;";
    b1.style="background-color: rgb(0, 134, 29); border: none; color: white;";
    b2.style="margin-right: 0%; margin-left: -5px; border-left: 0px; border: solid 1px rgb(200, 200, 200); color: rgb(100, 100, 100); background-color: white;";
    return 0;
}
function toogle2()
{
    
    var offres=document.getElementById('offres');
    var etp=document.getElementById('entreprise');
    etp.style="display: block;";
    offres.style="display: none;";
    b2.style="margin-left: -5px; background-color: rgb(0, 134, 29); border: none; color: white;";
    b1.style="margin-right: 0%; margin-left: 0px; border-right: 0px; border: solid 1px rgb(200, 200, 200); color: rgb(100, 100, 100); background-color: white;";
    return 0;
}
function un()
{
    var etp=document.getElementById('entreprise');
    etp.style="display: flex;";
    alert('yo');
}

b1.addEventListener('click', function(){ toogle1(); }, false);
b2.addEventListener('click', function(){ toogle2(); }, false);
b3.addEventListener('click', function(){ un(); }, false);




// etp.style="position: absolute; top: 0px;";
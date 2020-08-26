import {MonInterface} from './MonInterface.js'

function ajouter() {
    var body=document.querySelector('.body');
    var taskadd=document.querySelector('#taskadd');
    var value=document.querySelector('#task');  
    body.style="background-color: rgba(0, 0, 0, 0.4);";
    value.value='';
    taskadd.className="formadd";

}

function enregistrer(){
    var body=document.querySelector('.body');
    var taskadd=document.querySelector('#taskadd');
    var value=document.querySelector('#task');  
    body.style="";
    taskadd.className="notdisplay";
    var n=localStorage.length+1;
    localStorage.setItem(n , value.value+' f');
    //alert(document.querySelector('#task').value);
    MonInterface();

}

function annulation(){
    var body=document.querySelector('.body');
    var taskadd=document.querySelector('#taskadd');
    var value=document.querySelector('#task');  
    body.style="";
    value.value='';
    taskadd.className="notdisplay";
}

function clear(){
    if(confirm("vider la liste ?")){
        localStorage.clear();
        MonInterface();
    }
}
function checkalls() {
    
    for(var y=0; y<localStorage.length; y++){
        var item=localStorage.getItem(localStorage.key(y));
        var nom=item.split(" ");
        nom[1]='v';
        localStorage.setItem(localStorage.key(y), nom[0]+" "+nom[1]);
    }
    MonInterface();
}

function uncheckalls() {
    for(var y=0; y<localStorage.length; y++){
        var item=localStorage.getItem(localStorage.key(y));
        var nom=item.split(" ");
        nom[1]='f';
        localStorage.setItem(localStorage.key(y), nom[0]+" "+nom[1]);
    }
    MonInterface();
}

export { ajouter, enregistrer, annulation, clear, checkalls, uncheckalls};
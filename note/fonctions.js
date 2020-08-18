var body=document.getElementsByTagName('body');
var taskadd=document.querySelector('#taskadd');
var value=document.querySelector('#task'); 

function preparation() {
    document.querySelector('#principale').textContent="";
    if(localStorage.length==0){
        var text=document.createTextNode("vous n'avez aucune tache");
        var message=document.createElement('h2');
        message.appendChild(text);
        
        document.getElementById('principale').appendChild(message);
    } 
    else{
        for(var i=0; i<localStorage.length; i++){
            var check=document.createElement("input");
            check.type="checkbox";
            var libelle=document.createTextNode(localStorage.getItem(i));
            var label=document.createElement('label');
            var btSup=document.createElement('button');
            btSup.textContent='X';
            btSup.className='btSup';
            btSup.name=localStorage.key(i);
            label.appendChild(check);
            label.appendChild(libelle);
            label.appendChild(btSup);
            document.querySelector('#principale').appendChild(label);
        }
    }
}
function test(){ alert("c'est"); }

function ajouter() {
    body[0].style="background-color: rgba(0, 0, 0, 0.4);";
    value.value='';
    taskadd.className="formadd";

}

function enregistrer(){
    body[0].style="";
    taskadd.className="notdisplay";
    
    localStorage.setItem(localStorage.length++ , value.value);
    //alert(document.querySelector('#task').value);
    preparation();
    return n;

}

function clear(){
    if(confirm("vider la liste ?")){
        localStorage.clear();
        preparation();
    }
}

function checkalls() {
    checks=document.getElementsByTagName('input');
    for(var box=0; box<checks.length; box++){
        if(checks[box].type=='checkbox'){
            checks[box].checked=true;
        }
    }
}

function supprimerTache(e){
    alert(e);
    localStorage.removeItem(e);
    preparation();
}

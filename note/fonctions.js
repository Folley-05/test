var body=document.getElementsByTagName('body');
var taskadd=document.querySelector('#taskadd');
var value=document.querySelector('#task'); 

function preparation(element)
{
    if(localStorage.length==0)
    {
        element.textContent="vous n'avez aucune tache"
    }
    else{
        element.innerHTML='';
        for(var i=0; i<localStorage.length; i++){
            var checkbox=document.createElement('input'),
            label=document.createElement('label'),
            bouton=document.createElement('button');
            var tache=document.createElement('div');
            tache.className='tache';
            tache.appendChild(checkbox);
            tache.appendChild(label);
            tache.appendChild(bouton);
            checkbox.type='checkbox';
            checkbox.className='check';
            label.className='lab';
            bouton.name=localStorage.key(i);
            bouton.className='btSup';
            bouton.textContent='X';
            bouton.onclick=function(){ supprimerTache(this.name)};
            element.appendChild(tache);
            //contenu des elements
            checkbox.name=localStorage.key(i)
            nom=localStorage.getItem(checkbox.name).split(' ');
            if(nom[1]=='v'){
                checkbox.checked=true;
            }
            label.textContent=nom[0];
            bouton.name=localStorage.key(i);
        }
    }
}

function ajouter() {
    body[0].style="background-color: rgba(0, 0, 0, 0.4);";
    value.value='';
    taskadd.className="formadd";

}

function enregistrer(){
    body[0].style="";
    taskadd.className="notdisplay";
    var n=localStorage.length+1;
    localStorage.setItem(n , value.value+' f');
    //alert(document.querySelector('#task').value);
    preparation(document.querySelector('#principale'));

}

function supprimerTache(e){
    localStorage.removeItem(e);
    preparation(document.querySelector('#principale'));

}

function clear(){
    if(confirm("vider la liste ?")){
        localStorage.clear();
        preparation(document.querySelector('#principale'));
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

function uncheckalls() {
    checks=document.getElementsByTagName('input');
    for(var box=0; box<checks.length; box++){
        if(checks[box].type=='checkbox'){
            checks[box].checked=false;
        }
    }
}

function checker(e){
    nom=localStorage.getItem(e.name).split(' ');
    if(e.checked){
        nom[1]='v';
    }
    else{
        nom[1]='f'
    }
    localStorage.setItem(e.name, nom[0]+' '+nom[1]);
}

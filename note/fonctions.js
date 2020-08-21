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
            checkbox.name=localStorage.key(i);
            checkbox.onclick=function(){ checker(this)};
            nom=localStorage.getItem(checkbox.name).split(' ');
            if(nom[1]=='v'){
                checkbox.checked=true;
                tache.className='tachev';
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

function annulation(){
    body[0].style="";
    value.value='';
    taskadd.className="notdisplay";
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
    
    for(var y=0; y<localStorage.length; y++){
        var item=localStorage.getItem(localStorage.key(y));
        var nom=item.split(" ");
        nom[1]='v';
        localStorage.setItem(localStorage.key(y), nom[0]+" "+nom[1]);
    }
    preparation(document.querySelector('#principale'));
}

function uncheckalls() {
    for(var y=0; y<localStorage.length; y++){
        var item=localStorage.getItem(localStorage.key(y));
        var nom=item.split(" ");
        nom[1]='f';
        localStorage.setItem(localStorage.key(y), nom[0]+" "+nom[1]);
    }
    preparation(document.querySelector('#principale'));
}

function checker(e){
    nom=localStorage.getItem(e.name).split(' ');
    if(e.checked){
        nom[1]='v';
        e.parentNode.className='tachev';
    }
    else{
        nom[1]='f'
        e.parentNode.className='tache';
    }
    localStorage.setItem(e.name, nom[0]+' '+nom[1]);
}

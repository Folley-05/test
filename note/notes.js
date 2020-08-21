var taches=document.querySelector('#principale');
preparation(taches); 


var ajout=document.querySelector('.ajout');
var ok=document.querySelector('.ok');
var checkall=document.querySelector('.checkall');
var uncheckall=document.querySelector('.uncheckall');
var vider=document.querySelector('.vider'); 
var btsups=document.querySelectorAll('.btSup'); 
var checks=document.querySelectorAll('input');
var annuler=document.querySelector('.annuler');

ajout.addEventListener('click', function(){ ajouter(); }, false);
ok.addEventListener('click', function() { enregistrer(); }, false);
checkall.addEventListener('click', function() { checkalls(); }, false);
uncheckall.addEventListener('click', function() { uncheckalls(); }, false);
annuler.addEventListener('click', function() { annulation();}, false);
vider.addEventListener('click', function() { clear(); }, false);

for(var i=0; i<btsups.length; i++){
    
    btsups[i].addEventListener('click', function (e) { supprimerTache(e.target.name) });
}

for(var i=0; i<checks.length; i++){
    if(checks[i].type=="checkbox"){
        checks[i].addEventListener('click', function (e) { checker(e.target); });
    }
}



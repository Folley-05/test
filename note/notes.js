preparation(); 


var ajout=document.querySelector('.ajout');
var ok=document.querySelector('.ok');
var checkall=document.querySelector('.checkall');
var vider=document.querySelector('.vider');
var btsup=document.querySelectorAll('.btSup');

ajout.addEventListener('click', function(){ ajouter(); }, false);
ok.addEventListener('click', function() { enregistrer(); }, false);
checkall.addEventListener('click', function() { checkalls(); }, false);
vider.addEventListener('click', function() { clear(); }, false);

for(i=0; i<btsup.length; i++){
    
    btsup[0].addEventListener('click', function (e) { alert(e.target.name); }, false);
}
alert(btsup[0]);

/*for(i=0; i<btsup.length; i++){
    
    btsup[0].addEventListener('click', function (e) { supprimerTache(e.target.name) });
}*/
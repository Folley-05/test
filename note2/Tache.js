// module de gestion de l'affichage d'une tache

import {supprimerTache, checker} from './TacheCmd.js'; // import du module des commandes d'une tache

function Tache(key, nom) {
    // etape de preparation de la tache
    var check=document.createElement('input');
    var label=document.createElement('label');
    var bouton=document.createElement('button');
    check.type='checkbox';
    check.className='check';
    check.name=key;
    check.onclick=function(){ checker(this)};
    bouton.name=key;
    bouton.className='btSup';
    bouton.textContent='x';
    bouton.onclick=function() { supprimerTache(this.name)};
    label.textContent=nom.split(' ')[0];
    label.className='lab';

    function isChecked(a) { // fonction qui verifie si la tache est effectuée ou pas
        var nom=a.split(' ');
        if (nom[1]=='v') {
            return true;
        }
        else {
            return false;
        }
    }
    var inserer=function() { // fonction qui insere une tache
        var princ=document.querySelector('#principale');
        var div=document.createElement('div');
        if(isChecked(localStorage.getItem(check.name))){
            check.checked=true;
            div.className='tachev';
        }
        else {
            div.className='tache';
        }
        div.appendChild(check);
        div.appendChild(label);
        div.appendChild(bouton);
        princ.appendChild(div);
        
    };
    inserer(); //affichage de la tache

}
export {Tache}; 
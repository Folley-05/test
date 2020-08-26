// module de parametrage des differentes commande d'une tache

import {MonInterface} from './MonInterface.js'; // import du module de gestion de l'interface
function supprimerTache(e){ // fonction qui supprime une tache
    localStorage.removeItem(e);
    MonInterface();

}

function checker(e){// fonction qui coche et decoche une tache
    var nom=localStorage.getItem(e.name).split(' ');
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
export{supprimerTache, checker};
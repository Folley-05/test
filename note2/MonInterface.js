// module de gestion de l'interface de l'application
import {Tache} from './Tache.js' // on importe le module d'affichage des taches
function MonInterface (){// fonction de gestion de l'information
    var princ=document.querySelector('#principale');
    const preparation= function () { 
        princ.textContent='';
        princ.className='';
        if(localStorage.length==0)
        {
            princ.textContent="vous n'avez aucune tache";
            princ.className='vide';
        }
        else{
            for(var i=0; i<localStorage.length; i++){
                Tache(localStorage.key(i), localStorage.getItem(localStorage.key(i)));
            }
            
        }
    };
    preparation();
}

export {MonInterface}



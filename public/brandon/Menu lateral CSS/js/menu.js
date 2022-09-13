let abierto = false;

function asignar_eventos()
{
    let menu = document.getElementById('iconoMenu');
    menu.addEventListener('click', Animar);
}

function Animar(){
    let menu = document.getElementById('menuP');
    if(abierto){
        menu.classList.remove("maximizar");
        menu.classList.add("minimizar");
    }else{
        menu.classList.remove("minimizar");
        menu.classList.add("maximizar");
    }
    abierto = !abierto;
}

window.onload=asignar_eventos;
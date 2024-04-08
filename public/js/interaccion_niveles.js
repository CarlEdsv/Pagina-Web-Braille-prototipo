var numero_niveles_actuales = 3; //A más niveles esto aumentará, en un futuro será automático
//Función para ir al siguiente nivel
function siguiente_nivel(nivel) {
    if (nivel >= 1 & nivel < numero_niveles_actuales){
        window.location.href = 'Nivel'+(nivel + 1)+'.html';
    }else{
        console.log("No hay más niveles por el momento");
    }
}

//Función para ir al nivel anterior
function nivel_anterior(nivel) {
    if (nivel >= 2 & nivel <= numero_niveles_actuales){
        window.location.href = 'Nivel'+(nivel - 1)+'.html';
    }else{
        console.log("No existe un nivel cero por el momento");
    }
}

function volverMain() {
    window.location.href = '../main.html';  // Sube un nivel para ir a la carpeta principal
}
var usuario1 = "YoSoyLuis"

var contraseña1 = "12345678"

function sesion(){
    var usuario = (document.getElementById("usuario")).value;
    var contraseña = (document.getElementById("contraseña")).value;
    if(usuario1 == usuario && contraseña1 == contraseña){
        alert("sesion iniciada");
        window.location.href = "main.html";
    }
    else{
        alert("Error en las credenciales");
    }
}


function cerrarSesion(){
    window.location.href = "login.html";
}

//Función para abrir los niveles en el selector de niveles
function ir_al_nivel(nivel){
    window.location.href = 'niveles/Nivel' + nivel + '.html';
}

//Función para ir al siguiente nivel
function siguiente_nivel(nivel) {
    window.location.href = 'Nivel'+(nivel + 1)+'.html';
}
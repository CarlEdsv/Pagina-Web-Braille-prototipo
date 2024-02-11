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
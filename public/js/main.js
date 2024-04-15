
document.addEventListener("DOMContentLoaded", function() {
    var UsuarioActivo = localStorage.getItem("UsuarioActivo");
    if (UsuarioActivo) {
        document.getElementById("nombreUsuario").textContent = "¡Hola, " + UsuarioActivo + "!";
    }
});

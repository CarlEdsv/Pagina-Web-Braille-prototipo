document.addEventListener("DOMContentLoaded", function() {
    var UsuarioActivo = localStorage.getItem("UsuarioActivo");

    const showLoginButton = document.getElementById('show-login-button');

    const TextUsuario = document.getElementById('pepeElDinoSaurio');

    if (UsuarioActivo) {
        // Obtener datos del usuario activo
        ObtenerDatos('usuarios', UsuarioActivo)
            .then((usuarioObtenido) => {
            // Actualizar el contenido de TextUsuario con el saludo personalizado  
            TextUsuario.textContent = "¡Hola, " + usuarioObtenido + "!";
            })
            .catch((error) => {
                console.error("Error al obtener datos:", error);
            });

            showLoginButton.textContent = "Cerrar Sesion";

    } else {
        showLoginButton.textContent = "Iniciar sesion";
    }
    


    const loginContainer = document.querySelector('.login-container');
    const loginBox = document.querySelector('.login-box');

    showLoginButton.addEventListener('click', () => {
        if(UsuarioActivo){
            localStorage.removeItem('UsuarioActivo');
            window.location.reload();
        }
        else{
            loginContainer.classList.remove('hidden');
            loginBox.classList.remove('hidden');
        }
    });


    const BotonCerrar = document.getElementById("Cerrar");
    BotonCerrar.addEventListener('click', () => {
        loginContainer.classList.add('hidden');
        loginBox.classList.add('hidden');
    });

});

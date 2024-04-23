
document.addEventListener("DOMContentLoaded", function() {
    var UsuarioActivo = localStorage.getItem("UsuarioActivo");
    const showLoginButton = document.getElementById('show-login-button'); // Botón para mostrar el login

    if (UsuarioActivo) {
        ObtenerDatos('usuarios', UsuarioActivo)
  .then((usuarioObtenido) => {
    showLoginButton.textContent = "¡Hola, " + usuarioObtenido + "!";
  })
  .catch((error) => {
      console.error("Error al obtener datos:", error);
  });
        
    }


    const loginContainer = document.querySelector('.login-container');
    const loginBox = document.querySelector('.login-box');
    

    showLoginButton.addEventListener('click', () => {
        loginContainer.classList.remove('hidden');
        loginBox.classList.remove('hidden');
    });










});

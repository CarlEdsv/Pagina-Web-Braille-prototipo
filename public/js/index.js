const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

const botonSesion = document.getElementById("botonSesion");

 botonSesion.addEventListener("click",()=>{
    event.preventDefault();
    var usuario = (document.getElementById("usuario")).value;
    var contraseña = (document.getElementById("contraseña")).value;
    IniciarSesion(usuario,contraseña);
});

const botonRegistrar = document.getElementById("botonRegistrar");
 botonRegistrar.addEventListener("click",()=>{
    event.preventDefault();
    var correo = (document.getElementById("usuarioR")).value;
    var contraseña = (document.getElementById("contraseñaR")).value;
    var usuario = (document.getElementById("nombre")).value;
    registrar(correo,contraseña,usuario);
});
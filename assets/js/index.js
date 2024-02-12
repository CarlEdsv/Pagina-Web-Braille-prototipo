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
    buscar(usuario,contraseña);
});

const botonRegistrar = document.getElementById("botonRegistrar");
 botonRegistrar.addEventListener("click",()=>{
    event.preventDefault();
    var usuario = (document.getElementById("usuarioR")).value;
    var contraseña = (document.getElementById("contraseñaR")).value;
    registrar(usuario,contraseña);
});
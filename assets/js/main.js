const BotonCerrar = document.getElementById("BotonCerrar");

BotonCerrar.addEventListener("click",()=>{
    window.location.href = "index.html";
});

//Función para abrir los niveles en el selector de niveles
function ir_al_nivel(nivel){
    window.location.href = 'Niveles/Nivel' + nivel + '.html';
}
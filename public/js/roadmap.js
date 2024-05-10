let Progreso = 0;
let tope = 3;

function avanzarNivel() {
    if (Progreso < tope) {
        Progreso++;
        actualizarBarraProgreso();

        if (Progreso === tope) {
            document.getElementById('mensajeLeccionCompletada1').style.display = 'block';
            document.getElementById('boton1').style.display = 'none';
            document.getElementById('barraP1').style.display = 'none';
            Progreso = 0;
            document.getElementById('mensajeLeccionCompletada2').style.display = 'none';
            document.getElementById('candado2').style.display = 'none';
            document.getElementById('boton2').style.display = 'block';
            document.getElementById('barraP2').style.display = 'block';
        }
    }
}

function actualizarBarraProgreso() {
    const porcentajeAvance = (Progreso / tope) * 100;
    document.getElementById('barraAvance').style.width = porcentajeAvance + '%';
}

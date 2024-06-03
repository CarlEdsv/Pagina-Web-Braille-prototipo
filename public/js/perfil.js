document.addEventListener("DOMContentLoaded", function() {
    const saveB = document.getElementById('saveBiografia');
    const saveR = document.getElementById('saveRedes');

    var UsuarioActivo = localStorage.getItem("UsuarioActivo");

        Leer('biografia', function(dato) {
            document.getElementById("textB").value = dato;
        });

        Leer('X', function(dato) {
            document.getElementById("textX").value = dato;
        });
        Leer('Facebook', function(dato) {
            document.getElementById("textF").value = dato;
        });
        Leer('Instagram', function(dato) {
            document.getElementById("textI").value = dato;
        });
        

    saveB.addEventListener("click",()=>{
        event.preventDefault();

        var texto = (document.getElementById("textB")).value;
        agregar('biografia',texto);
    });

    saveR.addEventListener("click",()=>{
        event.preventDefault();
        
        var texto = (document.getElementById("textX")).value;
        agregar('X',texto);

        var texto2 = (document.getElementById("textF")).value;
        agregar('Facebook',texto2);

        var texto3 = (document.getElementById("textI")).value;
        agregar('Instagram',texto3);
    });
});

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Roadmap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="{{asset('imagenes\icono.png')}}">
    <!--Hoja de estilos -->
    <link rel="stylesheet" href="{{asset('css/roadmap.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('imagenes/icono.png')}}" alt="Bootstrap" width="30" height="24">
            </a>
            <p id="pepeElDinoSaurio"></p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jugar Ahora</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Actualizaciones</a>
                    </li>
                        <a class="nav-link" href="roadmap">Prácticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Capacitaciones Pro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ver Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a id="show-login-button" class="btn btn-primary" role="button" aria-disabled="true">Iniciar
                            Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <button onclick="avanzarNivel()">Avanzar</button>

    <div class="boletines"> 
        <div class="boletin">
          <h3> Nivel 1</h3>
          <a id="boton1" href="/leccion" class="btn btn-primary" style="  margin: 5px;">Ir a la lección</a>

          <div id="barraP1" class="barra-progreso">
            <div class="barra-avance" id="barraAvance"></div>
        </div>
        
        <div id="mensajeLeccionCompletada1" style="display: none;">
            Lección completada!!
        </div>
        </div>
      

        <div class="boletin">
          <h3> Nivel 2</h3>
          <button id="candado2" class="boton-candado"></button>
          <a id="boton2" href="/leccion2" class="btn btn-primary" style="margin: 5px; display: none;">Ir a la lección</a>

          <div id="barraP2" class="barra-progreso" style="display: none;">
            <div class="barra-avance" id="barraAvance"></div>
        </div>
        
        <div id="mensajeLeccionCompletada2" style="display: none;">
            Lección completada!!
        </div>
        </div>
        
       
        <div class="boletin">
          <h3> Nivel 3</h3>
          <button class="boton-candado"></button>
        </div>
      
        <div class="boletin">
          <h3> Nivel 4</h3>
          <button class="boton-candado"></button>
        </div>
      
        <div class="boletin">
          <h3>Nivel 5</h3>
          <button class="boton-candado"></button>
        </div>
       
        <div class="boletin">
          <h3> Nivel 6</h3>
          <button class="boton-candado"></button>
        </div>

        <div class="boletin">
            <h3> Nivel 7</h3>
            <button class="boton-candado"></button>
          </div>
        
          <div class="boletin">
            <h3> Nivel 8</h3>
            <button class="boton-candado"></button>
          </div>
         
          <div class="boletin">
            <h3> Nivel 9</h3>
            <button class="boton-candado"></button>
          </div>
    </div>
      

    <script src="{{asset('js/roadmap.js')}}"></script>
</body>
</html>
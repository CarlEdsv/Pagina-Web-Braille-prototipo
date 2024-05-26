<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--Tipo de letra -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Icono -->
    <link rel="icon" href="{{asset('imagenes\icono.png')}}">
    <!--Hoja de estilos -->
    <link rel="stylesheet" href="{{asset('css/home.css')}}">///
</head>
<body>
    <!-- navbar -->
    
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
    <!--Sección 1-->
    <div class="container caja mt-3">
        <div class="row">
            <!--Sección de Logo-->
            <div class="col-sm-4 text-center">
                <img src="{{asset('imagenes\icono.png')}}" class="logo">
            </div>
            <!--Sección de presentación-->
            <div class="col-sm-8">
                <div class="row-2">
                    <h1 class="titulo">Braillearn</h1>
                </div>
                <div class="row-4">
                    <h3 id="frase">"-El ajolote, con su sonrisa eterna, nos enseña la importancia de adaptarse y prosperar"</h3>
                </div>
                <div class="row-6">
                    <p class="descripcion">
                        El objetivo del proyecto es proporcionar una plataforma educativa innovadora, atractiva y accesible 
                        para enseñar Braille de manera efectiva. Dirigido a aquellos interesados en aprender el sistema táctil 
                        de lectoescritura, este proyecto busca eliminar barreras educativas y promover la inclusión.
                    </p>

                    
                </div>
            </div>
        </div>
        <div class="row">
            <p class="descripcion">
                El proyecto se centra en desarrollar una plataforma en línea que ofrezca lecciones interactivas
                y ejercicios prácticos. La plataforma estará disponible de forma gratuita para asegurar su 
                accesibilidad global. Además, se contempla la posibilidad de integrar funcionalidades adicionales, 
                 como interacción en tiempo real con instructores y comunidad de aprendices.
            </p>
            <p class="descripcion">
                Este proyecto aspira a ser un catalizador para la democratización del aprendizaje de Braille, 
                proporcionando a individuos de todas las edades y conocimientos la oportunidad de adquirir esta 
                habilidad de manera efectiva y atractiva.
            </p>
        </div>
    </div>

    <!--Sección 2-->
    <div class="container bases">
        <div class="row">
            <div class="col-md-4 caja mt-3 text-center" id="base-izquierda">
                <div class="row titulo">
                    <h1 class="">Innovación</h1>
                </div>
                <img src="{{asset('imagenes\innovacion.png')}}" alt="Imagen" class="imagen">
                <p class="descripcion">
                    Aprende Braille con un enfoque moderno e interactivo, mejora tu retención y comprensión.
                </p>
            </div>
            <div class="col-md-4 caja mt-3 text-center" id="base-medio">
                <div class="row titulo">
                    <h1 class="">Accesibilidad</h1>
                </div>
                <img src="{{asset('imagenes\accesibilidad.png')}}" alt="Imagen" class="imagen">
                <p class="descripcion">
                    Aprender no tiene límites, accede a nuestras lecciones
                    en todo momento y en cualquier lugar.
                </p>  
            </div>
            <div class="col-md-4 caja mt-3 text-center" id="base-derecha">
                <div class="row titulo">
                    <h1 class="">Interactividad</h1>
                </div>
                <img src="{{asset('imagenes\interactividad.png')}}" alt="Imagen" class="imagen">
                <p class="descripcion">
                    Nuestros Minijuegos harán de tu aprendizaje algo divertido y motivador.
                    Sigue tu progreso, mejora tus habilidades y comparte con otros usuarios.
                </p>  
            </div>
        </div>
    </div>

        <!--Sección 3-->
    <div class="container caja mt-3">
        <div class="row">
            <!--Plan básico-->
            <div class="col plan mt-5">
                <!--Tipo de plan-->
                <div class="row  text-center tipo-plan mt-3">
                    <h2 class="titulo">BÁSICO</h2>
                </div>
                <!--Precio-->
                <div class="row text-center">
                    <h2 id="precio">GRATIS</h2>
                </div>
                <!--Características-->
                <div class="row">
                    <div class="col">
                         <ul class="caracteristicas"> 
                            <li><img src="{{asset('imagenes\cheque-rosa.png')}}" alt="Cheque" class="cheque"> Minijuegos</li>
                            <li><img src="{{asset('imagenes\cheque-rosa.png')}}" alt="Cheque" class="cheque"> Lecciones</li>
                        </ul>                    
                    </div>
                </div>
            </div>

            <!--Plan empresarial-->
            <div class="col plan mt-5">
                <!--Tipo de plan-->
                <div class="row  text-center tipo-plan mt-3">
                    <h2 class="titulo">EMPRESARIAL</h2>
                </div>
                <!--Precio-->
                <div class="row text-center">
                    <h2 id="precio">$4.99 / MES</h2>
                </div>
                <!--Características-->
                <div class="row">
                    <div class="col">
                         <ul class="caracteristicas"> 
                            <li><img src="{{asset('imagenes\cheque-rosa.png')}}" alt="Cheque" class="cheque"> Minijuegos</li>
                            <li><img src="{{asset('imagenes\cheque-rosa.png')}}" alt="Cheque" class="cheque"> Lecciones</li>
                            <li><img src="{{asset('imagenes\cheque-rosa.png')}}" alt="Cheque" class="cheque"> Capacitaciones especiales</li>
                            <li><img src="{{asset('imagenes\cheque-rosa.png')}}" alt="Cheque" class="cheque"> Capacidad de hasta 5 personas</li>
                        </ul>                    
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <h1 class="titulo">Escoge tu plan</h1>
        </div>
    </div>

    <!------------------ login ------------------->

<div class="login-container hidden">
    <div class="login-box hidden">
        <div class="bodyLogin">
            <div class="containerLogin" id="container">
                <div class="form-container sign-up-container">
                    <form class="formLogin" action="#">
                        <h1 class="h1Login">Crea una cuenta</h1>
                        <!-- enlaces que voy a utilizar cuando implemente otro tipos de inicio de sesion-->
                        <div class="social-container">
                            <a href="#" class="social aLogin"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social aLogin"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social aLogin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <!-- Toda la parte del registro -->
                        <span class="spanLogin">O utiliza tu correo electrónico para registrarte</span>
                        <input class="inputLogin"  type="text" id="nombre" placeholder="Nombre" />
                        <input class="inputLogin" id="usuarioR" type="email" placeholder="Correo" />
                        <input class="inputLogin" id="contraseñaR" type="password" placeholder="Contraseña" />
                        <button class="ghost buttonLogin" id="botonRegistrar">InscribirseR</button>
                    </form>
                    
                </div>
                <div class="form-container sign-in-container">
                    <form class="formLogin" action="#">
                        <h1>Iniciar sesión</h1>
                        <!-- enlaces que voy a utilizar cuando implemente otro tipos de inicio de sesion-->
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span class="spanLogin">O usa tu correo</span>
                        <!-- toda la parte del inicio de sesion-->
                        <input class="inputLogin" id="usuario" type="email" placeholder="Correo" />
                        <input class="inputLogin" id="contraseña" type="password" placeholder="Contraseña" />
                        <a class="aLogin" href="#">¿Olvidaste tu contraseña?</a>
                        <button class="ghost buttonLogin" id="botonSesion">Iniciar sesión</button>
                    </form>
                </div>
                <!-- la parte de las animaciones y el texto :D -->
                <div class="overlay-container">
                    <div class="overlay">
        
                        <div class="overlay-panel overlay-left">
                            <h1 class="h1Login">¿Ya tienes una Cuenta?</h1>
                            <img src="{{asset('imagenes\ajolote.gif')}}" alt="" style="height:40% ">
                            <p class="pLogin">Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                            <button class="ghost buttonLogin" id="signIn">Iniciar sesión</button>
                        </div>
        
                        <div class="overlay-panel overlay-right">
                            <h1 class="h1Login">¿No estas Registrado?</h1>
                            <img src="{{asset('imagenes\ajolote.gif')}}" style="height:40%">
                            <p class="pLogin">Introduce tus datos personales y comienza tu viaje con nosotros.</p>
                            <button class="ghost buttonLogin " id="signUp">Inscribirse</button>
                        </div>
        
                    </div>
              
                </div>
               
            </div>
            <button class="ghost buttonLogin" id="Cerrar">Cerrar</button>
        </div>
        
    </div>
  </div>
  
  <footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p>Derechos Reservados &copy; 2024</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100074249683271" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


  <!------------------ fin login ------------------->

      <script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-compat.js"></script>
      <script src="{{ asset('js/firebase.js') }}"></script>
      <script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-auth-compat.js"></script>
      <script src="{{ asset('js/login.js') }}"></script>
      <script src="{{ asset('js/home.js') }}"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">




</body>
</html>
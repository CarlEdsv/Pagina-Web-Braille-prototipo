<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">
    <link rel="icon" href="{{asset('imagenes\icono.png')}}">
    <title>Registro</title>
</head>

<body class="body">

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Crea una cuenta</h1>
                <!-- enlaces que voy a utilizar cuando implemente otro tipos de inicio de sesion-->
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <!-- Toda la parte del registro -->
                <span>O utiliza tu correo electrónico para registrarte</span>
                <input  type="text" id="nombre" placeholder="Nombre" />
                <input id="usuarioR" type="email" placeholder="Correo" />
                <input id="contraseñaR" type="password" placeholder="Contraseña" />
                <button id="botonRegistrar">InscribirseR</button>
            </form>
            
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Iniciar sesión</h1>
                <!-- enlaces que voy a utilizar cuando implemente otro tipos de inicio de sesion-->
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>O usa tu correo</span>
                <!-- toda la parte del inicio de sesion-->
                <input id="usuario" type="email" placeholder="Correo" />
                <input id="contraseña" type="password" placeholder="Contraseña" />
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button id="botonSesion">Iniciar sesión</button>
            </form>
        </div>
        <!-- la parte de las animaciones y el texto :D -->
        <div class="overlay-container">
            <div class="overlay">

                <div class="overlay-panel overlay-left">
                    <h1>¿Ya tienes una Cuenta?</h1>
                    <img src="{{asset('imagenes\ajolote.gif')}}" alt="" style="height:40% ">
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">Iniciar sesión</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>¿No estas Registrado?</h1>
                    <img src="{{asset('imagenes\ajolote.gif')}}" style="height:40%">
                    <p>Introduce tus datos personales y comienza tu viaje con nosotros.</p>
                    <button class="ghost" id="signUp">Inscribirse</button>
                </div>

            </div>
        </div>
    </div>

   <!--  <footer>
        <p>
           pagina en desarrollo

    </footer>
    -->
    <!-- iniciar conexion con firebase-->
	<script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-compat.js"></script>
    <script src="{{ asset('js/firebase.js') }}"></script>
    

	<!-- utilizar firebase authentication-->
	<script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-auth-compat.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
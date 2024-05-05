<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">
    <link rel="icon" href="{{asset('imagenes\icono.png')}}">
    <title>Registro</title>
</head>

<body>
    <div class="bodyLogin">
    <div class="container" id="container">
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
                <button class="buttonLogin" id="botonRegistrar">InscribirseR</button>
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
                <button class="buttonLogin" id="botonSesion">Iniciar sesión</button>
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
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
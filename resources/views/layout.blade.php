<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>@yield('title', 'Home')</title>
    <!-- Tipo de letra -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Icono -->
    <link rel="icon" href="{{ asset('imagenes/icono.png') }}">
    <!-- Hoja de estilos específica -->
    @yield('stylesheet')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('imagenes/icono.png') }}" alt="Bootstrap" width="30" height="24">
            </a>
            <p id="pepeElDinoSaurio"></p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('roadmap') }}">Prácticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile') }}">Ver Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a id="show-login-button" class="btn btn-primary" role="button" aria-disabled="true">Iniciar
                            Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido específico de cada página -->
    <div class="container mt-5 pt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <div id="app">
    <footer-component></footer-component>
    </div>
    <!-- Login Modal -->
    <div class="login-container hidden">
        <div class="login-box hidden">
            <div class="bodyLogin">
                <div class="containerLogin" id="container">
                    <div class="form-container sign-up-container">
                        <form class="formLogin" action="#">
                            <h1 class="h1Login">Crea una cuenta</h1>
                            <div class="social-container">
                                <a href="#" class="social aLogin"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social aLogin"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="social aLogin"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <span class="spanLogin">O utiliza tu correo electrónico para registrarte</span>
                            <input class="inputLogin" type="text" id="nombre" placeholder="Nombre" />
                            <input class="inputLogin" id="usuarioR" type="email" placeholder="Correo" />
                            <input class="inputLogin" id="contraseñaR" type="password" placeholder="Contraseña" />
                            <button class="ghost buttonLogin" id="botonRegistrar">InscribirseR</button>
                        </form>
                    </div>
                    <div class="form-container sign-in-container">
                        <form class="formLogin" action="#">
                            <h1>Iniciar sesión</h1>
                            <div class="social-container">
                                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <span class="spanLogin">O usa tu correo</span>
                            <input class="inputLogin" id="usuario" type="email" placeholder="Correo" />
                            <input class="inputLogin" id="contraseña" type="password" placeholder="Contraseña" />
                            <a class="aLogin" href="#">¿Olvidaste tu contraseña?</a>
                            <button class="ghost buttonLogin" id="botonSesion">Iniciar sesión</button>
                        </form>
                    </div>
                    <div class="overlay-container">
                        <div class="overlay">
                            <div class="overlay-panel overlay-left">
                                <h1 class="h1Login">¿Ya tienes una Cuenta?</h1>
                                <img src="{{ asset('imagenes/ajolote.gif') }}" alt="" style="height:40%">
                                <p class="pLogin">Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                                <button class="ghost buttonLogin" id="signIn">Iniciar sesión</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h1 class="h1Login">¿No estas Registrado?</h1>
                                <img src="{{ asset('imagenes/ajolote.gif') }}" style="height:40%">
                                <p class="pLogin">Introduce tus datos personales y comienza tu viaje con nosotros.</p>
                                <button class="ghost buttonLogin" id="signUp">Inscribirse</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="ghost buttonLogin" id="Cerrar">Cerrar</button>
            </div>
        </div>
    </div>
    <!-- Fin Login Modal -->

    <!-- Scripts -->
    <script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-compat.js"></script>
    <script src="{{ asset('js/firebase.js') }}"></script>
    <script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-auth-compat.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>

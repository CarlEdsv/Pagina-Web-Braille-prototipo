<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('imagenes\icono.png')}}">
    <link rel="stylesheet" href="{{ asset('css\main.css') }}">
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Principal</title>
</head>
<body>

  <!------------------ navbar ------------------->
  <nav class="navbar navbar-expand-lg bg-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <img src="{{asset('imagenes\icono.png')}}" alt="Bootstrap" width="30" height="24"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="navbar-nav"></li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Jugar Ahora</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Actualizaciones</a>
              </li>

              <li class="nav-item">
                <a id="show-login-button" class="btn btn-primary" role="button" aria-disabled="true">Iniciar Sesion </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
<!------------------ fin navbar ------------------->



<!------------------ login ------------------->

<div class="login-container hidden">
  <div class="login-box hidden">

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
  </div>
</div>

<!------------------ fin login ------------------->


<section class="panfleto">  

  <div>

  <h3>Brailern</h3>

  <h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue risus lectus, in fringilla enim bibendum ac. Vivamus arcu ante, 
    fringilla id sagittis ac, pulvinar vitae ante. Phasellus vel imperdiet neque. Nam eu bibendum ligula, et blandit ante. Suspendisse vitae
     mi aliquam, mollis lacus in, interdum odio. Pellentesque dapibus nunc turpis, non lacinia nisl pharetra ac. Integer ac molestie risus.
 </h2>

  <p>
    Cras fringilla velit vitae nisi iaculis, a cursus sapien consequat. Phasellus a tellus a neque egestas pretium. Sed euismod egestas eros, 
    in euismod eros condimentum vitae. Morbi bibendum erat eros, sed fringilla massa ultricies quis. In venenatis nulla nec condimentum accumsan. 
    Maecenas finibus elit elit, nec ultricies tellus commodo id. Donec quis vehicula tellus. Vivamus tincidunt, quam sed aliquam gravida, 
    magna urna faucibus turpis, viverra ullamcorper mauris sapien nec lorem. Nullam sed leo a ipsum consectetur volutpat ut quis nisi. 
    Etiam eget tortor nisl. Aliquam rhoncus maximus risus sit amet imperdiet. Ut sollicitudin eget tellus nec tincidunt. Etiam in 
    tellus eget arcu convallis imperdiet. Nunc nec augue ipsum.
  </p>
</div>

  <img src="{{asset('imagenes\icono.png')}}" alt="" style="width: 100%">

</section>


<section class="boletines"> 

  <div class="boletin">
    <h3> Lorem ipsum dolor sit amet</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue risus lectus, in fringilla enim bibendum ac.
  </div>

  <div class="boletin">
    <h3> Lorem ipsum dolor sit amet</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue risus lectus, in fringilla enim bibendum ac.
  </div>
 
  <div class="boletin">
    <h3> Lorem ipsum dolor sit amet</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue risus lectus, in fringilla enim bibendum ac.
  </div>

  <div class="boletin">
    <h3> Lorem ipsum dolor sit amet</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue risus lectus, in fringilla enim bibendum ac.
  </div>

  <div class="boletin">
    <h3> Lorem ipsum dolor sit amet</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue risus lectus, in fringilla enim bibendum ac.
  </div>
 
  <div class="boletin">
    <h3> Lorem ipsum dolor sit amet</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue risus lectus, in fringilla enim bibendum ac.
  </div>

</section>

















      <!-- iniciar conexion con firebase-->
	    <script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-compat.js"></script>
      <script src="{{ asset('js/firebase.js') }}"></script>
  

      <!-- utilizar firebase authentication-->
      <script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-auth-compat.js"></script>
      <script src="{{ asset('js/index.js') }}"></script>

      <script src="{{asset('js\main.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
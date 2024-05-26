<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('imagenes\icono.png')}}">
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <title>Perfil de usuario</title>
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
                        <a class="nav-link" href="#">Ver Perfil</a>
                    </li>

              <li class="nav-item">
                <a id="show-login-button" class="btn btn-primary" role="button" aria-disabled="true">Iniciar Sesion </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
<!------------------ fin navbar ------------------->    

<!------------------ User Profile -------------------> 
<div class="profile-container">
        <div class="left-section">
            <div class="profile-image">
                <img id="profilePicture" src="default-profile.png" alt="Foto de perfil">
                <input type="file" id="upload" class="upload-btn" accept="image/*" onchange="loadFile(event)">
            </div>
            <div class="achievements">
                <div class="stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <div class="stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
            </div>
        </div>
        <div class="right-section">
            <div class="bio">
                <textarea rows="5" style="width: 100%;" placeholder="Escribe tu biografía aquí..."></textarea>
            </div>
            <div class="social-links">
                <a href="#" class="facebook">Facebook</a>
                <a href="#" class="twitter">Twitter</a>
                <a href="#" class="instagram">Instagram</a>
            </div>
            <div class="more-details">
                <a href="profile-details.html">Ver más detalles</a>
            </div>
        </div>
    </div>

<script>
        function loadFile(event) {
            var image = document.getElementById('profilePicture');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    </script>

</body>
</html>
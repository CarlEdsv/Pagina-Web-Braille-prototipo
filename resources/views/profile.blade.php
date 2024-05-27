<!-- resources/views/home.blade.php -->
@extends('layout')

@section('title', 'Perfil')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/user.css')}}">
@endsection

@section('content')

<!------------------ User Profile -------------------> 

<div class="container">
    <div class="left-column">
        <div class="profile-photo">
            <img id="profileImage" src="https://via.placeholder.com/150" alt="Foto de Perfil" width="150" height="150">
            <br>
            <input type="file" id="fileInput">
            <label for="fileInput">Subir Foto</label>
        </div>
        <div class="ratings-progress">
            <div class="stars">
                <span>★★★★★</span>
                <span>★★★★★</span>
                <span>★★★★★</span>
            </div>
            <div class="levels-progress">
                <h4>Niveles Completados</h4>
                <p>5/10</p>
                <h4>Progreso de Actividades</h4>
                <div class="progress-bar">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-column">
        <div class="bio-section">
            <h4>Biografía</h4>
            <textarea id="bioInput" placeholder="Escribe tu biografía aquí..."></textarea>
            <button onclick="saveBio()">Guardar Biografía</button>
        </div>
        <div class="social-buttons">
            <a href="https://twitter.com" class="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://facebook.com" class="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://linkedin.com" class="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://instagram.com" class="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>

<script>
    const fileInput = document.getElementById('fileInput');
    const profileImage = document.getElementById('profileImage');

    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                profileImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    function saveBio() {
        const bioInput = document.getElementById('bioInput').value;
        alert('Biografía guardada: ' + bioInput);
        // Aquí puedes agregar el código necesario para guardar la biografía en tu backend o localStorage
    }
@endsection
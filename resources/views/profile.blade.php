<!-- resources/views/home.blade.php -->
@extends('layout')

@section('title', 'Perfil')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/user.css')}}">
@endsection

@section('content')

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
@endsection
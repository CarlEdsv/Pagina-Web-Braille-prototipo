<!-- resources/views/home.blade.php -->
@extends('layout')

@section('title', 'Perfil')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/user.css')}}">
@endsection

@section('content')

<!------------------ User Profile -------------------> 

<div class="container principal">
        <div class="left-section">
            <div class="profile-pic"></div>
            <div class="progress-text">Progreso: 50%</div>
            <div class="progress-bar">
                <div></div>
            </div>
            <div class="stars">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
            </div>
        </div>
        <div class="right-section">
            <div class="bio">
                <textarea id="textB" placeholder="Escribe tu biografía aquí..."></textarea>
                <button id="saveBiografia" class="save-button">Guardar Biografía</button>
            </div>
            <div class="socials">
                <input id="textX" type="text" class="social-input" placeholder="Twitter">
                <input id="textF" type="text" class="social-input" placeholder="Facebook">
                <input id="textI" type="text" class="social-input" placeholder="Instagram">
                <button id="saveRedes" class="save-button">Guardar Redes Sociales</button>
            </div>
        </div>
    </div>

<script src="{{ asset('js/perfil.js') }}"></script>
@endsection
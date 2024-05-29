<!-- resources/views/home.blade.php -->
@extends('layout')

@section('title', 'Leccion 1')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/lecciones.css')}}">
@endsection

@section('content')

    <!--principal-->
    <div class="container principal mt-3">
        <!--parte 1-->
        <div class="row mt-3">
            <!--imagen-->
            <div class="col-4 text-center">
                <img src="{{asset('imagenes\Historia1.jpeg')}}" class="imagen">
            </div>
            <!--texto-->
            <div class="col-8 d-flex align-items-center historia">
                <p class="">
                En el corazón de un hermoso lago cristalino, vivía un ajolote llamado Axel. Axel era un ajolote curioso 
                y amigable, siempre interesado en aprender cosas nuevas y hacer amigos. Aunque disfrutaba mucho explorando 
                su hogar submarino, tenía un gran sueño: quería comunicarse con otros seres fuera del lago.
                </p>
            </div>
        </div>
        <!--parte 2-->
        <div class="row mt-3">
            <divc class="col-8 d-flex align-items-center historia">
                <p class="">
                Un día, Axel conoció a una niña llamada Elena, que vivía cerca del lago. Elena era una niña con mucha 
                energía en imaginación. Ella había perdido la vista cuando era muy pequeña y aprendió a leer y escribir 
                usando braille.
                </p>
            </divc>
            <!--imagen-->
            <div class="col-4 text-center">
                <img src="{{asset('imagenes\Historia2.jpeg')}}" class="imagen">
            </div>
        </div>
        <!--parte 3-->
        <div class="row mt-3 historia">
            <p class="">
                Axel se dio cuenta de que Elena tenía un cuaderno con muchos puntos en relieve. 
                Fascinado, quiso saber más sobre esos puntos y cómo podía aprender a comunicarse con ellos.
            </p>
            <p class="">
                Empezaron por aprender las primeras letras del alfabeto:
            </p>
            <p class="">
                A es un solo punto en la parte superior izquierda
            </p>
            <!--tabla-->
            <div class="row">
                <div class="col-4 text-center">
                    <h1>A</h1>
                </div>
                <div class="col-8 text-center">
                        <!-- Plantilla de letra en Braille -->
                        <div class="container braille mt-2">
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Primer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Segundo punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Tercer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Cuarto punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Quinto punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Sexto punto -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <p class="">
            E tiene dos puntos, uno se mantiene arriba y el otro se deja ca-Eee-r
            </p>
            <div class="row">
                <div class="col-4 text-center">
                    <h1>E</h1>
                </div>
                <div class="col-8 text-center">
                        <!-- Plantilla de letra en Braille -->
                        <div class="container braille mt-2">
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Primer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Segundo punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Tercer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Cuarto punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Quinto punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Sexto punto -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <p class="">
                En cambio la I comienza más abajo, para luego subIiiir
            </p>
            <div class="row">
                <div class="col-4 text-center">
                    <h1>I</h1>
                </div>
                <div class="col-8 text-center">
                        <!-- Plantilla de letra en Braille -->
                        <div class="container braille mt-2">
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Primer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Segundo punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Tercer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Cuarto punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Quinto punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Sexto punto -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <p class="">
                A la letra letra O le gusta el "zig zag"
            </p>
            <div class="row">
                <div class="col-4 text-center">
                    <h1>O</h1>
                </div>
                <div class="col-8 text-center">
                        <!-- Plantilla de letra en Braille -->
                        <div class="container braille mt-2">
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Primer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Segundo punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Tercer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Cuarto punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Quinto punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Sexto punto -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <p class="">
                La U es parecida a la O, pero deja caer el punto de la derecha
            </p>
            <div class="row">
                <div class="col-4 text-center">
                    <h1>U</h1>
                </div>
                <div class="col-8 text-center">
                        <!-- Plantilla de letra en Braille -->
                        <div class="container braille mt-2">
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Primer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Segundo punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Tercer punto -->
                                </div>
                                <div class="col">
                                    <div class="dot empty"></div> <!-- Cuarto punto -->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Quinto punto -->
                                </div>
                                <div class="col">
                                    <div class="dot filled"></div> <!-- Sexto punto -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <p class="">
                ¡Listo, ahora reforzemos lo aprendido!
            </p>
            <button class="boton" > Jugar </button>
        </div>
        
    </div>

@endsection
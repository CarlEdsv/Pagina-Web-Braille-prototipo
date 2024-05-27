<!-- resources/views/home.blade.php -->
@extends('layout')

@section('title', 'Home')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')

    <!--Sección 1-->
    <div class="container caja">
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
@endsection
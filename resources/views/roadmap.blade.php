<!-- resources/views/home.blade.php -->
@extends('layout')

@section('title', 'Prácticas')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/roadmap.css')}}">
@endsection

<button onclick="avanzarNivel()">Avanzar</button>

    <div class="boletines"> 
        <div class="boletin">
          <h3> Nivel 1</h3>
          <a id="boton1" href="{{url('leccion-1')}}" class="btn btn-primary" style="  margin: 5px;">Ir a la lección</a>

          <div id="barraP1" class="barra-progreso">
            <div class="barra-avance" id="barraAvance"></div>
        </div>
        
        <div id="mensajeLeccionCompletada1" style="display: none;">
            Lección completada!!
        </div>
        </div>
      

        <div class="boletin">
          <h3> Nivel 2</h3>
          <button id="candado2" class="boton-candado"></button>
          <a id="boton2" href="/leccion2" class="btn btn-primary" style="margin: 5px; display: none;">Ir a la lección</a>

          <div id="barraP2" class="barra-progreso" style="display: none;">
            <div class="barra-avance" id="barraAvance"></div>
        </div>
        
        <div id="mensajeLeccionCompletada2" style="display: none;">
            Lección completada!!
        </div>
        </div>
        
       
        <div class="boletin">
          <h3> Nivel 3</h3>
          <button class="boton-candado"></button>
        </div>
      
        <div class="boletin">
          <h3> Nivel 4</h3>
          <button class="boton-candado"></button>
        </div>
      
        <div class="boletin">
          <h3>Nivel 5</h3>
          <button class="boton-candado"></button>
        </div>
       
        <div class="boletin">
          <h3> Nivel 6</h3>
          <button class="boton-candado"></button>
        </div>

        <div class="boletin">
            <h3> Nivel 7</h3>
            <button class="boton-candado"></button>
          </div>
        
          <div class="boletin">
            <h3> Nivel 8</h3>
            <button class="boton-candado"></button>
          </div>
         
          <div class="boletin">
            <h3> Nivel 9</h3>
            <button class="boton-candado"></button>
          </div>
    </div>
      

    <script src="{{asset('js/roadmap.js')}}"></script>

@section('content')
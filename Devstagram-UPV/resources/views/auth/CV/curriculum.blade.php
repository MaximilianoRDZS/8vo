@extends('layouts.app')
<!-- Mandar titulo al contenedor de app -->
@section('titulo')
    Curriculum
@endsection

@section('Acerca_de_mi')
        <h2>Acerca de mi</h2>
        <div class="avatar" style="background-image: url('img/image.png')"></div>
        <p class="short">Hola soy Maximliano Rodríguez, tengo 20 años, soy estudiante de la carrera de Ing.Tecnologias de la Información, me gusta el desarrollo Web,
            estoy apriendo acerca de este mundo del desarrollo web y quiero saber más sobre este mundo para poder aprender lo que me falta para llegar a
            mi meta.</p>
@endsection
@section('Donde_estudiastes') 
        <h2>Donde Estudiastes</h2>
        <p>Escuela Primaria Heroes de Nacozari</p>
        <p>Secundaria General No°4 Profr.José Santos Valdés Salazar</p>
        <p>Centro de Bachillerato Tecnologico industrial y de servicios N°236</p>
@endsection

@section('Habilidades')
        <h2>Habilidades</h2>
                <div   class="dev" style="background-image: url('img/html-5.png')"></div>
                <div  class="dev" style="background-image: url('img/css-3.png')"></div>
                <div  class="dev" style="background-image: url('img/js.png')"></div>
                <div  class="dev" style="background-image: url('img/bootstrap-logo.png')"></div>
                <div  class="dev" style="background-image: url('img/php.png')"></div>      
@endsection

@section('Cursos')
        <h2>Cursos</h2>
        <p>Udemy-Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL</p>
        <p>Udemy-CCNA 200-301</p>
@endsection


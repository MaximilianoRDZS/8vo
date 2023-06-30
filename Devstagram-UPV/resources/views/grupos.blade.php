@extends('layouts.app')
<!-- Mandar titulo al contenedor de app -->
@section('titulo')
    Tabla de Grupos
@endsection
@section('contenido')

<!-- tabla para ver las publicaciones -->
<div class="container grid px-6 mx-auto">
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full mx-auto my-8">
                <thead>
                  <tr>
                    <th class="px-6 py-4 bg-gray-200 text-gray-700 border-b">ID</th>
                    <th class="px-6 py-4 bg-gray-200 text-gray-700 border-b">Nombre del grupo</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($grupos as $grupo)
                  <tr class="bg-white">
                    <td class="px-6 py-4 border-b text-center">{{ $grupo->id }}</td>
                    <td class="px-6 py-4 border-b text-center">{{ $grupo->grupo }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>                          
        </div>
    </div>
</div>

<!-- Formulario de registro -->
<div class="flex flex-col justify-center items-center">
    <div class="md:w-6/12 p-6 shadow-lg bg-white rounded-md">
        <form action="{{route('grupos')}}" method="POST" novalidate>
        @csrf
            <div class="mb-5">
                <label for="grupo" class="mb-2 black uppercase text-gray-500 font-bold">Nombre del Grupo</label>
                <input id="grupo" name="grupo" type="text" placeholder="Nombre del Grupo" class="border p-3 w-full rounded tg
                @error('grupo')
                    border-red-500
                @enderror"
                value="{{old('grupo')}}"
                />
                <!-- Mostrar directiva de nombre obligatorio-->
                @error('grupo')
                    <p class="bg-red-500 text-white my-2 rounded-lg textsm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
        <input type="submit" value="Registrar grupo" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rownded-lg"/>
        </form>
    </div>
</div>
@endsection
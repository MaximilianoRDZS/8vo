@extends('layouts.app')
<!-- Mandar titulo al contenedor de app -->
@section('titulo')
    Tabla de Alumnos
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
                    <th class="px-6 py-4 bg-gray-200 text-gray-700 border-b">Nombre</th>
                    <th class="px-6 py-4 bg-gray-200 text-gray-700 border-b">Apellidos</th>
                    <th class="px-6 py-4 bg-gray-200 text-gray-700 border-b">Fecha de nacimiento</th>
                    <th class="px-6 py-4 bg-gray-200 text-gray-700 border-b">Grupo</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($alumnos as $alumno)
                  <tr class="bg-white">
                    <td class="px-6 py-4 border-b text-center">{{ $alumno->id }}</td>
                    <td class="px-6 py-4 border-b text-center">{{ $alumno->nombre }}</td>
                    <td class="px-6 py-4 border-b text-center">{{ $alumno->apellido }}</td>
                    <td class="px-6 py-4 border-b text-center">{{ $alumno->fecha_nacimiento }}</td>
                    <td class="px-6 py-4 border-b text-center">{{ $alumno->grupo_id }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
        </div>
    </div>
</div>

<!-- Formulario de registro de alumnos -->
<div class="flex flex-col justify-center items-center">
    <div class="md:w-6/12 p-6 shadow-lg bg-white rounded-md">
        <form action="{{route('alumnos')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="nombre" class="mb-2 black uppercase text-gray-500 font-bold">Nombre</label>
                <input id="nombre" name="nombre" type="text" placeholder="Tu Nombre" class="border p-3 w-full rounded tg
                @error('nombre')
                    border-red-500
                @enderror"
                value="{{old('nombre')}}"
                />
                <!-- Mostrar directiva de nombre obligatorio-->
                @error('nombre')
                    <p class="bg-red-500 text-white my-2 rounded-lg textsm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="apellido" class="mb-2 black uppercase text-gray-500 font-bold">Apellido</label>
                    <input id="apellido" name="apellido" type="text" placeholder="Tu Apellido" class="border p-3 w-full rounded tg
                        @error('apellido')
                            border-red-500
                        @enderror"
                        value="{{old('apellido')}}"
                        />
                        <!-- Mostrar directiva de username obligatorio-->
                        @error('apellido')
                            <p class="bg-red-500 text-white my-2 rounded-lg textsm p-2 text-center">{{$message}}</p>
                        @enderror
            </div>

            <div class="mb-5">
                <label for="fecha_nacimiento" class="mb-2 black uppercase text-gray-500 font-bold">Fecha de Nacimiento</label>
                <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" placeholder="Tu Fecha de Nacimiento" class="border p-3 w-full rounded tg
                @error('fecha_nacimiento')
                    border-red-500
                @enderror"
                value="{{old('fecha_nacimiento')}}"
                />
                <!-- Mostrar directiva de email obligatorio-->
                @error('fecha_nacimiento')
                    <p class="bg-red-500 text-white my-2 rounded-lg textsm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="grupo_id" class="mb-2 black uppercase text-gray-500 font-bold">Grupo</label>
                <select id="grupo_id" name="grupo_id" class="border p-3 w-full rounded tg
                    @error('grupo_id')
                        border-red-500
                    @enderror">
                    <option value="">Seleccione el grupo</option>
                    @foreach ($grupos as $grupo)
                        <option value="{{$grupo->id}}">{{$grupo->grupo}}</option>
                    @endforeach
                </select>
                <!-- Mostrar directiva de password obligatorio-->
                @error('grupo_id')
                    <p class="bg-red-500 text-white my-2 rounded-lg textsm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
                <input type="submit" value="Registrar alumno" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rownded-md"/>
        </form>
    </div>
</div>
@endsection
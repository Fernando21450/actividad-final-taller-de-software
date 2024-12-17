@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Crear Nuevo Usuario</h1>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
            <input type="text" name="name" id="name" 
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
                   value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label for="lastname" class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
            <input type="text" name="lastname" id="lastname" 
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
                   value="{{ old('lastname') }}" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" name="email" id="email" 
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
                   value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
            <input type="password" name="password" id="password" 
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
        </div>

        <div class="mb-4">
            <label for="rol_id" class="block text-gray-700 text-sm font-bold mb-2">Rol</label>
            <select name="rol_id" id="rol_id" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
                <option value="">Seleccionar Rol</option>
                @foreach($roles as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear Usuario
            </button>
            <a href="{{ route('users.index') }}" class="text-gray-600 hover:text-gray-900">Cancelar</a>
        </div>
    </form>
</div>
@endsection
@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
  <h1>En esta página puedes crear los cursos</h1>
  <form action="{{route('cursos.store')}}" method="post">
    @csrf
    <label for="name">Nombre:</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br>
    @error('name')
        <small>*{{$message}}</small><br>
    @enderror

    <label for="descripcion">Descripción:</label><br>
    <textarea name="descripcion" rows="5">{{ old('descripcion') }}</textarea><br>
    @error('descripcion')
        <small>*{{$message}}</small><br>
    @enderror

    <label for="categoria">Categoria:</label><br>
    <input type="text" name="categoria" value="{{ old('categoria') }}"><br>
    @error('categoria')
        <small>*{{$message}}</small><br><br>
    @enderror

    <input type="submit" value="Enviar">
  </form>
@endsection

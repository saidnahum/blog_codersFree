@extends('layouts.plantilla')

@section('title', 'Cursos Edit')

@section('content')
  <h1>En esta página puedes actualizar los cursos</h1>
  <form action="{{route('cursos.update', $curso)}}" method="post">
    @csrf
    @method('PUT')

    <label for="name">Nombre:</label><br>
    <input type="text" name="name" value="{{old('name', $curso->name)}}"><br>
    @error('name')
      <small>*{{$message}}</small><br>
    @enderror

    <label for="descripcion">Descripción:</label><br>
    <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea><br>
    @error('descripcion')
      <small>*{{$message}}</small><br>
    @enderror

    <label for="categoria">Categoria:</label><br>
    <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}"><br><br>
    @error('categoria')
      <small>*{{$message}}</small><br>
    @enderror

    <input type="submit" value="Actualizar">
  </form>
@endsection
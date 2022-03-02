@extends('layouts.plantilla')
@section('title','Cursos')
@section('content')
    <h1>Bienvenido a la pagina cursos</h1>
    {{-- <a href="cursos/create">Crear Curso</a> --}}
        <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            {{-- <li>{{$curso->name}}</li> --}}
            <li>
            {{-- <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a> --}}
            <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a> 
            {{-- <br>
            {{route('cursos.show', $curso)}}  --}}
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection


@extends('layouts.dashboard')
@section('title', 'INICIO PRODUCTO')
@section('subtitulo', 'INICIO PRODUCTO')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio productos</h1>
    <a href="#">Crear producto</a>
    <ul>
        @foreach ($productos as $producto)
            <li>
                <a href="{{route('productos.detalle', $producto->id)}}">{{$producto->nombre}}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection

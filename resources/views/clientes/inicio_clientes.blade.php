@extends('layouts.dashboard')
@section('title', 'INICIO CLIENTE')
@section('subtitulo', 'INICIO CLIENTE')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio Cliente</h1>
    <a href="">Crear cliente</a>
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <a href="{{route('clientes.detalle', $cliente->id)}}">{{$cliente->nombres}}</a>
            </li>
        @endforeach
    </ul>

</div>  
@endsection
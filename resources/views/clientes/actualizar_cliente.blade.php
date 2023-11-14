@extends('layouts.dashboard')
@section('title', 'Actualizar cliente')
@section('subtitulo', 'ACTUALIZAR CLIENTE')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Actualizar Cliente: </h1>
    <fieldset>
        <form action="{{route('clientes.actualizar_reg_cliente', $cliente)}}" method="POST">

            @csrf

            @method('put')

            <label>
                Nombres:</br>
                <input type="text" name="nombres" value="{{$cliente->nombres}}">
            </label>

            <label>
                Apellido paterno:</br>
                <input type="text" name="ap_paterno" value='{{$cliente->ap_paterno}}'>
            </label>

            <label>
                Apellido materno:</br>
                <input type="text" name="ap_materno" value='{{$cliente->ap_materno}}'>
            </label>

            <label>
                Telefono:</br>
                <input type="number" name="telefono" min="10" value='{{$cliente->telefono}}'>
            </label>

            <label>
                Correo electronico:</br>
                <input type="email" name="email" value='{{$cliente->email}}'>
            </label>

            <label>
                Direccion;</br>
                <input type="text" name="direccion" value='{{$cliente->direccion}}'>
            </label>

            <label>
                RFC:</br>
                <input type="text" name="rfc" value='{{$cliente->rfc}}'>
            </label>

            <label>
                Descripcion:</br>
                <textarea type="text" name="descripcion">{{$cliente->descripcion}}
                </textarea>
            </label></br>
            <button type="submit">Actualizar cliente</button>
        </form>
    </fieldset>
</div>
@endsection

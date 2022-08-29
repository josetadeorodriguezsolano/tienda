@extends('layouts.general')

@section('title', 'Tienda en Linea')

@section("encabezado")
    <h1>TIENDA EN LINEA</h1>
    <h2>Proceso de pago</h2>
@endsection

@section('contenido')
    @include('components.proceso_pago')
@endsection
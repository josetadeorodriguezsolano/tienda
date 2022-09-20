@extends('layouts.general')

@section('title', 'Tienda en Linea')

@section('encabezado')
    <h2>PRODUCTOS DESTACADOS</h2>
@endsection
@section('contenido')
    @include('components.tarjetaProductos')
@endsection

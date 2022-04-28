@extends('layouts.general')

@section('title', 'Tienda en Linea')

@section("encabezado")
    <h1>TIENDA EN LINEA</h1>
    <h2>PRODUCTOS DESTACADOS</h2>
@endsection

@section('contenido')
    @include('components.tarjetaProductos')
@endsection

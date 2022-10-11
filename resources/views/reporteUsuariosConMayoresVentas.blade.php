@extends('layouts.general')

@section('title', 'Tienda en Linea')

@section("encabezado")
    <h1>TIENDA EN LINEA</h1>
    <h2>Reporte Ventas</h2>
@endsection

@section('contenido')
    @include('components.reportes.usuariosConMayoresVentas')
@endsection

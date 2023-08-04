@extends('adminlte::page')

@section('content_header')
    <h1>Bodegas <i class="fas fa-warehouse"></i></h1>
@stop

@section('content')
    @livewire('admin.stocktaking.warehouses.show-warehouses')
@stop

@section('footer')
    <div class="d-flex justify-content-end">
        <b>Version</b> 1.3
    </div>
    <strong>Sistema de Puntos de Venta. Todos los derechos reservados © 2022 - {{ date('Y') }}. </strong>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
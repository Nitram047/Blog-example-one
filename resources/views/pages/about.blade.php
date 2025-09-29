@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>Bienvenido a mi blog, esto es el about</h1>
    <p>Donde hay sobre about.</p>
@endsection

{{-- Estilos específicos solo para esta página --}}
@push('styles')
    <style>
        h1 { color: #dc3469ff; }
    </style>
@endpush

{{-- Scripts específicos solo para esta página --}}
@push('scripts')
    <script>
        console.log('Página de about cargada');
    </script>
@endpush
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido a mi blog</h1>
    <p>Esta es la página principal.</p>
@endsection

{{-- Estilos específicos solo para esta página --}}
@push('styles')
    <style>
        h1 { color: #3490dc; }
    </style>
@endpush

{{-- Scripts específicos solo para esta página --}}
@push('scripts')
    <script>
        console.log('Página de inicio cargada');
    </script>
@endpush

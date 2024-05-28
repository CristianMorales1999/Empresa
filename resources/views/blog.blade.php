@extends('layouts.master')

@section('content')
    <h1>Blog</h1>
    @if ($opcional)
        <p>Ésta es la página de {{ $opcional }} de ésta sección</p>
    @else
        <p>Ésta es la página principal de esta sección.</p>
    @endif
@endsection
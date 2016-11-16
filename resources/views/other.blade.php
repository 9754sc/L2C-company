@extends('master')

@section('title', $title)

@section('content')

    <h2>
        <span>Some other stufff</span>
    </h2>
    <h1>
        @yield('title', $title ?: 'xxxxxxxxxxxxxxxxxxxxx').
    </h1>
    <p>
        Cupcakes!
    </p>

@stop

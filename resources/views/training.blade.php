@extends('master')

@section('title', $title)

@section('content')

    <h2>
        <span>Another thing.</span>
    </h2>
    <h1>
        @yield('title', $title ?: 'xxxxxxxxxxxxxxxxxxxxx').
    </h1>
    <p>
        Armed with a magic crown and an icy heart, the Ice King has only one goal.<br>
        Armed with a magic crown and an icy heart, the Ice King has.<br>
        Armed with a magic crown and an icy heart, the Ice.
    </p>

@stop

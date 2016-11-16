@extends('master')

@section('title', $title)

@section('content')

    <h2>
        <span>These are words.</span>
    </h2>
    <h1>
        @yield('title', $title ?: 'xxxxxxxxxxxxxxxxxxxxx').
    </h1>
    <p>
        As a millionaire nerd enthusiast, Princess Bubblegum immerses herself in every branch.<br>
        As a millionaire nerd enthusiast, Princess Bubblegum immerses herself.<br>
        As a millionaire nerd enthusiast, Princess Bubblegum.
    </p>

@stop

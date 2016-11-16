@extends('master')

@section('title', $title)

@section('content')

    <h2>
        <span>Hi. We’re Tilde.</span>
    </h2>
    <h1>
        @yield('title', $title ?: 'xxxxxxxxxxxxxxxxxxxxx').
    </h1>
    <p>
        <span>We're a small team of developers who are passionate about crafting great software.</span>
        <span>We're some of the faces behind Ember.js, Ruby on Rails, jQuery and more.</span>
        <span>We're here to help you build the products and tools of the future.</span>
    </p>


@stop

@extends('master')

@section('title', $title)

@section('content')

    <h2>
        <span>Much image.</span>
    </h2>
    <h1>
        @yield('title', $title ?: '').
    </h1>
    <p>
        <span>Cupcake Ipsum.</span>
    </p>

@stop

@section('pictures')

    @forelse($images as $img)
        <div class="imgContainer">
            <img src=" {{ asset( $img ) }} " alt="pic"">
        </div>
    @empty
        <p>Nothing to show. Go home, citizen!</p>
{{--        {{ html::image($img, 'pic') }}--}}
    @endforelse

        {{--<div class="imgContainer">--}}
            {{--<img src=" {{ URL::asset('img/consulting.png') }} " alt="pic"">--}}
        {{--</div>--}}
        {{--<div class="imgContainer">--}}
            {{--<img src=" {{ URL::asset('img/engagements.png') }} " alt="pic">--}}
        {{--</div>--}}
        {{--<div class="imgContainer">--}}
            {{--<img src=" {{ URL::asset('img/open-source.png') }} " alt="pic">--}}
        {{--</div>--}}

@stop

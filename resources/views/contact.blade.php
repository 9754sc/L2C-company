@extends('master')

@section('title', $title)

@section('content')

    <h2>
        <span>Write to us maybe.</span>
    </h2>
    <h1>
        @yield('title', $title ?: 'xxxxxxxxxxxxxxxxxxxxx').
    </h1>


    <P>We won't read it.</P>

    @include('partials.error')


    @if( session()->has('message') )

        @include('partials.message', [
            'message' => session('message'),
            'type' => 'success'])

    @endif



    {{ Form::open([ 'url' => 'contact', 'class' => 'contact-form' ]) }}

        {!! $errors->first('name', '<p>:message</p>' ) !!}
        {{ Form::label('name', 'Your name (required)') }}
        {{ Form::text('name') }}

        {!! $errors->first('email', '<p>:message</p>' ) !!}
        {{ Form::label('email', 'Your email (required)') }}
        {{ Form::email('email') }}

        {{ Form::label('message', 'Your message (not important)') }}
        {{ Form::textarea('message', null, ['cols'=>'40', 'rows'=>'10'] ) }}

        {{ Form::button('Send me!', ['type'=>'submit', 'class'=>'btn btn-white'] ) }}

    {{ Form::close() }}


    <!-- <form action="#" class="contact-form"> -->
        <!-- <label for="your-name">
            Your name (required)
            <input type="text" id="your-name" name="your-name">
        </label>

        <label for="your-email">
            Your email (required)
            <input type="email" id="your-email" name="your-email">
        </label>

        <label for="your-message">
            Your message
            <textarea id="your-message" name="your-message" cols="40" rows="10"></textarea>
        </label> -->

        <!-- <button class="btn btn-white">Send</button> -->
    <!-- </form> -->

@stop

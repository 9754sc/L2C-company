<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $title ?: 'xxxxxxxxxxxxxxxxxxxxx') ~ Tilde</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:300&amp;subset=latin,latin-ext">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700&amp;subset=latin,latin-ext">
    {{--<link rel="stylesheet" href="css/normalize.css">--}}
    {{--<link rel="stylesheet" href="css/style.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#res-menu').on('click', function(e){
                e.preventDefault();
                $('header nav').slideToggle('slow');
            });
        });
    </script>
</head>

{{--<body class="home">--}}
<body class="{{ Request::segment(1) ?: 'home' }}">
    
<header>
    @include('nav')
</header>

<main>
    <section id="sec-1">

        <div class="content">

            @yield('content')

            <div id="team">
                <div><a href="">@yield('title')</a></div>
            </div>
            {{--<img src="img/team.png" alt="Nas uzasny tim" id="photo-team">--}}
            <img src=" {{ URL::asset('img/team.png') }} " alt="Nas uzasny tim" id="photo-team">

        </div>
    </section>


    <section id="sec-0">
        @yield('pictures')
    </section>

    @include('aside')

    @include('aside2')

</main>
<footer>
    @include('footer')
</footer>
</body>
</html>
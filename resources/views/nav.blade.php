
<div class="content clearfix">
    <h1>
        <a href="#"><img src="img/logo.png" alt="Logo"></a>
    </h1>
    <a href="#" id="res-menu">Menu</a>
    <nav>
        <!-- <ul>
            <li><a href="{{ url('/') }}" class="active">About us</a></li>
            <li><a href="{{ url('/consulting') }}">Consulting</a></li>
            <li><a href="{{ url('/training') }}">Training</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <br>
        <ul>
            @foreach( Route::getroutes() as $route )
            <li><a href=" {{ URL::to( $route->getpath() ) }} ">
                    {{ $route->getpath() }}
                </a></li>
            @endforeach
        </ul> -->

        <ul>
        @foreach ( $nav_links as $path => $name )
            <li>
                @if ( trim( $path, '/') == Request::segment(1) )
                <!-- @ if ( $path === Request::segment(1) || ($path === '/' && empty( Request::segment(1) ) ) ) -->
                    <strong>{{ $name }}</strong>
                @else
                    <!-- <a href="{{ $path }}"> {{ $name }}</a> -->
                    {!! link_to($path, $name ) !!}
                @endif
            </li>
        @endforeach
        </ul>
    </nav>
</div>


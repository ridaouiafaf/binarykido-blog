<!DOCTYPE html>
<html>
    {{-- CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    {{-- Logo  --}} 
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">

    
    <body style="background-color: #343A40">
        <nav class="navbar navbar-expand navbar-dark float-right col-md-12" style="background: linear-gradient(45.34deg, #8AA2BD 5.66%, #C789AC 50.01%, #D2B7B0 94.35%);">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" style="font-size: 21px" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" style="font-size: 21px" href="{{route('about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" style="font-size: 21px" href="{{route('articles')}}">Articles</a></li>
            </ul>    
        </nav> <br>
        @yield('content')
    </body>
</html>
<script src="{{ asset('js/app.js') }}"></script>

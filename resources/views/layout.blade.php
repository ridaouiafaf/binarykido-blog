<!DOCTYPE html>
<html>
    {{-- CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
    {{-- Logo  --}} 
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">

    <body>
        <nav class="navbar navbar-expand col-md-12">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">الصفحة الرئيسية</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">نبذة</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('articles')}}">المقالات</a></li>
            </ul>    
        </nav> <br>
        @yield('content')
    </body>
</html>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://use.fontawesome.com/6c41c6b61c.js"></script>

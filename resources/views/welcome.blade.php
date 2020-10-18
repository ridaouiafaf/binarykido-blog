@extends('layout')
@section('content')
<div class="container-fluid float-right">
    <ul style="padding: 50px" class="list-group">
        <li class="list-group-item col-md-12" style="background-color: #2F353A">
            <img class="col-md-6" src="{{asset('img/LOGO.png')}}" alt="LOGO">
            <p class="paragraph float-right text-white col-md-6 rtl text-center" style="direction : rtl;padding: 60px;font-size: 80px;font-family: 'Lalezar', cursive;">
                مرحبا بيك !<br>
                نتمنى تستافد(ي) من مقالاتي المتواضعة
            </p>
        </li>
    </ul>
</div>

@endsection
@extends('layout')
@section('content')
<div class="container-fluid float-right">
    <ul style="padding: 50px" class="list-group">
        <li class="list-group-item col-md-12" style="background-color: #2F353A;">
            <img class="col-md-4 float-right" src="{{asset('img/articles.png')}}" alt="articles">
            <div class="col-md-8" style="padding: 50px">
                <h5 class="text-dark text-center">
                    <a class="text-dark btn btn-light btn-article" href="{{route('firstart')}}">
                        ستة الأسباب علاش عمرني نتعلم البرمجة ؟
                    </a>
                </h5>
                <h5 class="text-dark text-center">
                    <a class="text-dark btn btn-light btn-article" href="{{route('secondart')}}">
                        كيفاش نظم وقتي ونكون أكثر إنتاجية؟
                    </a>
                </h5> 
                <h5 class="text-dark text-center">
                    <a class="text-dark btn btn-light btn-article" href="{{route('thirdart')}}">
                        بغيت نبدا البرمجة ومعرفتش باش نبدا
                    </a>
                </h5>
            </div>
        </li>
    </ul>
</div>
@endsection
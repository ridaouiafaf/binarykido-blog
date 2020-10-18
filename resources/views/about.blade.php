@extends('layout')
@section('content')
<div class="container-fluid float-right">
    <ul style="padding: 50px" class="list-group">
        <li class="list-group-item col-md-12" style="background-color: #2F353A">
                <img style="float: right" src="{{asset('img/me.png')}}" alt="me">
                <p style="text-align: justify">
                    <h1 class="col-md-8 text-center paragraph" style=" color:#C789AC; font-size: 72px"><b>WHO AM I ?</b></h1>
                    <h5 class="col-md-7 rounded text-center" style="background-color:#D2B7B0;color:black; font-size: 34px"><b>BIO</b></h5>
                    <p class="text-white col-md-7" style="text-align: justify; font-size: 18px;">
                        My name is <span style="color: #8AA2BD">Afaf Ridaoui</span>, a 19 years old web developer from Morocco, 
                        who is passionate & ambitious while creating web sites & apps.<br>
                        I love volunteering projects, that's why I'm a graphic designer and assistant organizer in 
                        both GDG & WTM Casablanca (google tech clubs) and a team member in Geeksblabla (Moroccan Tech Podcast). 
                    </p>
                    <h5 class="col-md-7 rounded text-center" style="background-color:#8AA2BD;color: black; font-size: 34px"><b>Why this blog ?</b></h5>
                    <p class="col-md-7" style="font-family: 'Cutive Mono', monospace;">
                        <p class="text-white col-md-7" style="font-size: 18px; text-align: justify">
                            This blog is made to share my humble knowledge and love to the IT field with other developers out there. 
                            I might commit mistakes as well as I might help a lot of beginners so that they don't waste time on confusing things as I did before, 
                            not forgetting to warn them from getting trapped in the same mistakes like I did.
                            In addition, this will help me also to master skills I'm learning or already learned.
                        </p>
                    </p>
                </p>
        </li>
    </ul>
</div>
@endsection
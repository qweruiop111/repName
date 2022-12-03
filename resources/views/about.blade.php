@extends('layouts.app')

@section('content')
<div class="container">
    <p> about </p>
    <div class="row">
        <div class="col">
            <img src="img/logo.svg">
        </div>
        <div class="col">
            <p> девиз компании</p>
        </div>
    </div>

    <section class="lastfive">
        <h2 class="text-center"> loop!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h2>
        <div class="row">
            @foreach ($arr as $elem)
            <div class="col-md-3">
                <div class="card card-full mt-5">
                    <img src=" {{$elem->imgsource}} " class="card-img-top card-img-catalog" alt="{{$elem->id}}">
                    <div class="card-body card-catalog-body">
                        <h5 class="card-title">{{$elem->antagonist}}</h5>
                        <p>{{$elem->publisher}}</p>
                        <p class="card-text"><small class="text-muted">{{$elem->datadrop}}</small></p>
                        <a href="comic/{{$elem->id}}" class="btn btn-primary">{{$elem->price}} ₽</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>


</div>
@endsection
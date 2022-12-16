@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <img src="img/logo.svg">
        </div>
        <div class="col">
            <p> девиз компании</p>
        </div>
    </div>


    <section class="lastfive">
        <h2 class="text-center mt-5 mb-5">Последние 5 новинок</h2>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($arr as $elem)
                @if ($loop->first)
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{$elem->imgsource}}" class="card-img-top card-img-catalog" alt="{{$elem->id}}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="last-5-name">{{$elem->name}}</h5>
                    </div>
                </div>
                @else
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{$elem->imgsource}}" class="card-img-top card-img-catalog" alt="{{$elem->id}}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="last-5-name">{{$elem->name}}</h5>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </section>






</div>
@endsection
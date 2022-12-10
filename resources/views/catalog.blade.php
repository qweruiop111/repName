@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-2"> Каталог </h2>
    <a href="/public/catalog">
        <h4 class="text-center mt-3">сбросить фильтры</h4>
    </a>

    <div class="row">
        <div class="col">
            <p class="text-center catalog-sort">Сортировать по:</p>
            <div class="row">
                <div class="col text-center">
                    <a href="/public/catalog/yearorder">Году производства</a>
                </div>
                <div class="col text-center">
                    <a href="/public/catalog/name">Наименованию</a>
                </div>
                <div class="col text-center">
                    <a href="/public/catalog/price">Цене</a>
                </div>
            </div>
        </div>
        <div class="col">
            <p class="text-center catalog-filtr">Фильтр по:</p>
            <div class="row">
                <div class="col text-center">
                    <a href="/public/catalog/marvel">Marvel</a>
                </div>
                <div class="col text-center">
                    <a href="/public/catalog/dc">DC</a>
                </div>
                <div class="col text-center">
                    <a href="/public/catalog/other">Другие</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($arr as $elem)
        <div class="col-md-3">
            <div class="card card-full mt-5">
                <img src="/public/{{$elem->imgsource}} " class="card-img-top card-img-catalog" alt="{{$elem->id}}">
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

</div>
</div>
@endsection
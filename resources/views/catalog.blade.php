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
                    <a href="/public/catalog/datadrop/asc">Году производства (раньше)</a>
                </div>
                <div class="col text-center">
                    <a href="/public/catalog/datadrop/desc">Году производства (позже)</a>
                </div>
                <div class="col text-center">
                    <a href="/public/catalog/name/asc">Наименованию (А-Я)</a>
                </div>
                <div class="col text-center">
                    <a href="/public/catalog/name/desc">Наименованию (Я-А)</a>
                </div>
                <div class="col text-center">
                    <a href="/public/catalog/price/asc">Цене (возрастание)</a>
                </div>
                <div class="col text-center">
                    <a href="/public/catalog/price/desc">Цене (убывание)</a>
                </div>
            </div>
        </div>
        <div class="col">
            <p class="text-center catalog-filtr">Фильтр по:</p>
            <div class="row">
                @foreach($categories as $obCat)
                <div class="col text-center">
                    <a href="/public/catalog/{{$obCat->id}}">{{$obCat->name}}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($arr as $elem)
        @if ($elem->stock > 0 )
        <div class="col-md-3">
            <div class="card card-full mt-5">
                <img src="/public/{{$elem->imgsource}} " class="card-img-top card-img-catalog" alt="{{$elem->id}}">
                <div class="card-body card-catalog-body">
                    <h5 class="card-title">{{$elem->name}}</h5>
                    <p>{{$elem->publish->name}}</p>
                    <p class="card-text"><small class="text-muted">{{$elem->datadrop}}</small></p>
                    <a href="comic/{{$elem->id}}" class="btn btn-primary">{{$elem->price}} ₽</a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

</div>
</div>
@endsection
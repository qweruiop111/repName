@extends('layouts.app')

@section('content')
<div class="container">
    <p> catalog </p>

    <div class="row">
        <div class="col">
            <div class="container">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg пример">
                    <option selected>Упорядочить</option>
                    <option value="1">Год производства</option>
                    <option value="2">По наименованию</option>
                    <option value="3">По цене</option>
                </select>
            </div>
        </div>

        <div class="col">
            <div class="container">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg пример">
                    <option selected>Фильтр</option>
                    <option value="1">Marvel</option>
                    <option value="2">DC</option>
                    <option value="3">Другие</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($arr as $elem)
        <div class="col-md-3">
        <div class="card card-full mt-5">
            <img src=" {{$elem->imgsource}} " class="card-img-top card-img-catalog" alt="{{$elem->id}}">
            <div class="card-body card-catalog-body">
                <h5 class="card-title">{{$elem->antagonist}}</h5>
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
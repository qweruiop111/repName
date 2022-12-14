@extends('layouts.app')

@section('content')

<div class="container">
    <p> Подробнее о товаре </p>

    <div class="row">
        <div class="col">

            <h3>{{$elem->name}}</h3>
            <br>
            <img src="/public/{{$elem->imgsource}}" style="max-width: 400px;" alt="Комикс {{$elem->antagonist}}">

        </div>
        <div class="col">

            <h5>{{$elem->price}} ₽</h5>
            <br>
            <p>

                {{$elem->categ->name}}
            </p>
            <br>
            <p>{{$elem->publish->name}}</p>

        </div>
    </div>


    <br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
@endsection
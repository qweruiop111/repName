@extends('layouts.app')

@section('content')
<div class="container">
    <p> Подробнее о товаре </p>

    @foreach ($arr as $elem)
    <h3>{{$elem->antagonist}}</h3>
    <br>
    <img src="/public/{{$elem->imgsource}}" alt="Комикс {{$elem->antagonist}}">
    <br>
    <h5>{{$elem->price}} ₽</h5>
    <br>
    <p>{{$elem->publisher}}</p>
    @endforeach

    <br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
@endsection
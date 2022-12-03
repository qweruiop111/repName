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
        <div class="col">
            <div class="card mt-5">
                <img src="img/1.jpg" class="card-img-top card-img-catalog" alt="1">
                <div class="card-body card-catalog-body">
                    <h5 class="card-title">Заголовок карточки</h5>
                    <p class="card-text"><small class="text-muted">12.03.2014</small></p>
                    <a href="#" class="btn btn-primary">Цена</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mt-5">
                <img src="..." class="card-img-top card-img-catalog" alt="1">
                <div class="card-body card-catalog-body">
                    <h5 class="card-title">Заголовок карточки</h5>
                    <p class="card-text"><small class="text-muted">12.03.2014</small></p>
                    <a href="#" class="btn btn-primary">Цена</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mt-5">
                <img src="..." class="card-img-top card-img-catalog" alt="1">
                <div class="card-body card-catalog-body">
                    <h5 class="card-title">Заголовок карточки</h5>
                    <p class="card-text"><small class="text-muted">12.03.2014</small></p>
                    <a href="#" class="btn btn-primary">Цена</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col">
            <div class="card mt-5">
                <img src="..." class="card-img-top card-img-catalog" alt="1">
                <div class="card-body card-catalog-body">
                    <h5 class="card-title">Заголовок карточки</h5>
                    <p class="card-text"><small class="text-muted">12.03.2014</small></p>
                    <a href="#" class="btn btn-primary">Цена</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mt-5">
                <img src="..." class="card-img-top card-img-catalog" alt="1">
                <div class="card-body card-catalog-body">
                    <h5 class="card-title">Заголовок карточки</h5>
                    <p class="card-text"><small class="text-muted">12.03.2014</small></p>
                    <a href="#" class="btn btn-primary">Цена</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mt-5">
                <img src="..." class="card-img-top card-img-catalog" alt="1">
                <div class="card-body card-catalog-body">
                    <h5 class="card-title">Заголовок карточки</h5>
                    <p class="card-text"><small class="text-muted">12.03.2014</small></p>
                    <a href="#" class="btn btn-primary">Цена</a>
                </div>
            </div>
        </div>

    </div>



</div>
@endsection
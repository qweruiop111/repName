@extends('layouts.app')

@section('content')
<div class="container">
    <p> about </p>
    <div class="row">
        <div class="col">
            <img src="img/logo.png">
        </div>
        <div class="col">
            <p> девиз компании</p>
        </div>
    </div>

    <section class="reviews mt-5 mb-5">
        <div class="container">
            <h2 class="text-center mb-5 fontfamRobotoSlab">Новинки компании</h2>
            <div id="carouselExampleDark" class="carousel carousel-dark slide justify-content-center"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/1.jpg" class="img-fluid rounded-start review-img-width" alt="first">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body card-body-about">
                                        <h5 class="card-title card-title-name">бетмен</h5>
                                        <p class="card-text card-review-text">бетмен)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/2.jpg" class="img-fluid rounded-start review-img-width"
                                        alt="SecondReviewPic">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body card-body-about">
                                        <h5 class="card-title card-title-name">чорний ужас!</h5>
                                        <p class="card-text card-review-text">стращилки хихихихихи
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/4.jpg" class="img-fluid rounded-start review-img-width"
                                        alt="ThirdReviewPic">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body card-body-about">
                                        <h5 class="card-title card-title-name">удивительный человек бензопила</h5>
                                        <p class="card-text card-review-text">абалдеть японский манга впервие в
                                            магазине!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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
        </div>
    </section>

</div>
@endsection
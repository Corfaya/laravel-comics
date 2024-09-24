@extends('layouts.app')

@section("content")
<div class="bg-hero">
    <button class="btn main-btn text-uppercase fw-bolder text-white rounded-0 position-relative d-none d-md-block">Current Series</button>
</div>
<div class="bg-color pt-5">
    <div class="container">
        <div class="row">
            @foreach ($comicList as $comic)
            <div class="col-6 col-md-4 col-xl-2 mx-auto">
                <div class="cover-box">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="img-fluid">
                </div>
                <p class="text-uppercase text-white ">{{$comic['series']}}</p>
            </div>
            @endforeach

            <div class="col-12">
                <div class="d-flex justify-content-center my-4">
                    <button class="btn btn-sm text-uppercase fw-bolder text-white rounded-0">Load More</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner py-5">
    <div class="d-flex align-items-center justify-content-around blue-section">
        <div class="d-flex align-items-center">
            <a class="w_square me-3 d-flex align-items-center" href="">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
            </a>
            <p class="d-none d-lg-block m-0 text-uppercase text-white">Digital Comics</p>
        </div>
        <div class="d-flex align-items-center">
            <a class="w_square me-3 d-flex align-items-center" href="">
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
            </a>
            <p class="d-none d-lg-block m-0 text-uppercase text-white">Dc Merchandise</p>
        </div>
        <div class="d-flex align-items-center">
            <a class="w_square me-3 d-flex align-items-center" href="">
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
            </a>
            <p class="d-none d-lg-block m-0 text-uppercase text-white">Subscription</p>
        </div>
        <div class="d-flex align-items-center">
            <a class="w_square me-3 d-flex align-items-center" href="">
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
            </a>
            <p class="d-none d-lg-block m-0 text-uppercase text-white">Comic Shop Locator</p>
        </div>
        <div class="d-flex align-items-center">
            <a class="w_square me-3 d-flex align-items-center" href="">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
            </a>
            <p class="d-none d-lg-block m-0 text-uppercase text-white">Dc Power Visa</p>
        </div>
    </div>
</div>
@endsection
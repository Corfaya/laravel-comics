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
@endsection
@extends('layouts.comic')

@section('content')
    <div class="comic_img">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
    </div>
    <div class="bg_blu">

    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 my-5">
                <div class="my-5">
                    <h2 class="text-uppercase text-primary">{{ $comic['title'] }}</h2>
                </div>
                <div class="bg_green d-flex ">
                    <div class="d-flex justify-content-between w-75 border p-3 border-dark">
                        <div class="text-white"><span class="text_green">U.S. Price:</span> {{ $comic['price'] }}</div>
                        <div class="text_green">AVAILABLE</div>
                    </div>
                    <div class="w-25 text-white text-center border border-dark p-3">Check Availability
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <p class="mt-3">{{ $comic['description'] }}</p>
            </div>
            <div class="col-4 mt-5">
                <div class="text-end text-secondary mt-5 fw-bold"> ADVERTISEMENT</div>
                <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="" class="w-100 h-75">
            </div>
        </div>
    </div>
@endsection

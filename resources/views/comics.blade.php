@extends('layouts.comic')

@section('content')
    <div class="container position-relative">
        <div class="current">
            CURRENT SERIES
        </div>
    </div>
    <main>
        <div class="bg_black">
            <div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <div class="my_card">
                                <a href="{{ route('details', ['param' => $comic['id']]) }}">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                                    <div class="title">{{ $comic['series'] }}</div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <button>LOAD MORE</button>
                </div>

            </div>
        </div>
    </main>
    <div class="bg_blue">
        <div class="container">
            <ul>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="digital-comics">
                        <span class="uppercase">
                            digital comics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="digital-comics">
                        <span class="uppercase">
                            dc merchandise
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="digital-comics">
                        <span class="uppercase">
                            subscription
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="digital-comics">
                        <span class="uppercase">
                            comic shop locator
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="digital-comics">
                        <span class="uppercase">
                            dc power visa
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection

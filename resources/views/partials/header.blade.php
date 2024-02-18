<div class="bg-primary">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <ul class="list-unstyled text-white d-flex my-0 justify-content-end gap-3">
                    <li class="fw-semibold fs-6 me-5">DC POWER <span class="small">sm</span> VISA <i
                            class="fa-regular fa-registered" style="color: #fff;"></i></li>
                    <li class="fw-semibold fs-6">ADDICTIONAL DC SITES <i class="fa-solid fa-caret-down"
                            style="color: #fff;"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo">
                </div>
                <div class="menu">
                    <ul>
                        <li class="uppercase ">
                            <a href="" class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">
                                characters
                            </a>
                        </li>
                        <li class="uppercase ">
                            <a href="{{ route('comics') }}"
                                class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">
                                comics
                            </a>
                        </li>
                        <li class="uppercase ">
                            <a href="" class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">
                                movies
                            </a>
                        </li>
                        <li class="uppercase ">
                            <a href="" class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">
                                tv
                            </a>
                        </li>
                        <li class="uppercase">
                            <a href="" class=" {{ Route::currentRouteName() === 'games' ? 'active' : '' }}">
                                games
                            </a>
                        </li>
                        <li class="uppercase ">
                            <a href=""
                                class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">
                                collectibles
                            </a>
                        </li>
                        <li class="uppercase ">
                            <a href="" class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">
                                videos
                            </a>
                        </li>
                        <li class="uppercase ">
                            <a href="" class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">
                                fans
                            </a>
                        </li>
                        <li class="uppercase ">
                            <a href="" class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">
                                news
                            </a>
                        </li>
                        <li class="uppercase ">
                            <a href="" class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">
                                shop <i class="fa-solid fa-caret-down" style="color: #0282F9;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="search">
                    <div class="d-flex justify-content-end border_blue">
                        <input type="text" value="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

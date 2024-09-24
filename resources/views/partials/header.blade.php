<header>
    <div class="bg-primary mb-3">
        <div class="container">
        
            <div class="row">
                <div class="col-12">
                    <ul class="d-flex justify-content-end list-unstyled text-white fw-bold py-2 m-0">
                        <li class="text-uppercase">DC Power&#8480; Visa&reg;</li>
                        <li class="text-uppercase nav-item dropdown ms-5">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">Additional Dc Sites</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Item</a></li>
                                <li><a class="dropdown-item" href="#">Another item</a></li>
                              </ul>
                        </li>
                    </ul>
    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg p-0">
                    {{-- <div class="d-flex justify-content-between align-items-center py-4"> --}}
                    <a href="{{route('homepage')}}"><img class="img-fluid" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Comics"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-0 d-none d-lg-flex">
                        <li class="px-2 fw-bolder">
                            <a class="text-decoration-none text-uppercase text-dark active" href="">Characters</a>
                        </li>
                        <li class="px-2 fw-bolder">
                            <a class="text-decoration-none text-uppercase text-dark" href="">Comics</a>
                        </li>
                        <li class="px-2 fw-bolder">
                            <a class="text-decoration-none text-uppercase text-dark" href="">Movies</a>
                        </li>
                        <li class="px-2 fw-bolder">
                            <a class="text-decoration-none text-uppercase text-dark" href="">Tv</a>
                        </li>
                        <li class="px-2 fw-bolder">
                            <a class="text-decoration-none text-uppercase text-dark" href="">Games</a>
                        </li>
                        <li class="px-2 fw-bolder">
                            <a class="text-decoration-none text-uppercase text-dark" href="">Collectibles</a>
                        </li>
                        <li class="px-2 fw-bolder">
                            <a class="text-decoration-none text-uppercase text-dark" href="">Videos</a>
                        </li>
                        <li class="px-2 fw-bolder">
                            <a class="text-decoration-none text-uppercase text-dark" href="">Fans</a>
                        </li>
                        <li class="px-2 fw-bolder">
                            <a class="text-decoration-none text-uppercase text-dark" href="">News</a>
                        </li>
                        <li class="px-2 fw-bolder dropdown">
                            <a class="text-decoration-none text-uppercase text-dark dropdown-toggle shop-custom-dropdown" role="button" data-bs-toggle="dropdown" href="">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Item</a></li>
                                <li><a class="dropdown-item" href="#">Another item</a></li>
                              </ul>
                        </li>
                    </ul>
                    </div>
                    <form class="d-none d-lg-flex" role="search">
                        <input class="border-top-0 border-start-0 border-end-0 text-end" type="search" placeholder="Search" aria-label="Search">
                        <a href="#" class="d-flex align-items-center search"><i class="bi bi-search text-dark"></i></a>
                      </form>
                    </nav>
            </div>
        </div>
    </div>
</header>
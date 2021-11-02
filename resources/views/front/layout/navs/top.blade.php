<nav class="navbar navbar-expand navbar-dark bg-dark top-nav">
    <a class="navbar-brand logo-text" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" id="top-search" data-toggle="modal" data-target="#search-modal">
                    <i class="fa fa-search top-nav-icons" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-4 btn-cart" href=""><i class="fa fa-shopping-cart top-nav-icons"
                        aria-hidden="true"></i> <span class="badge badge-secondary cart-count flex-center">10</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-4" href="#" id="showProfile">
                    <i class="fa fa-ellipsis-v top-nav-icons" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="profile bg-dark hide">
        @guest
            <div class="prof-pic flex-center my-3">
                <img src="{{ asset('img/icon/use.png') }}" alt="" class="rounded-circle img-fluid" srcset="">
            </div>
            <div class="prof-pic-captions text-center mb-4">
                <h6>Guest Mode</h6>
            </div>
            <ul class=" nav profile-links d-flex flex-row justify-content-center">
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link btn btn-link" style="color:#fff; margin-right: 10px"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link  btn btn-link" style="color:#fff; margin-left: 10px"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            </ul>
        @else
            <div class="prof-pic">
                <a href="/profile">
                    <img src="{{ asset(Auth::User()->img) }}" alt="" class="rounded-circle img-fluid" srcset="">
                </a>
            </div>
            <div class="prof-pic-captions text-center">
                <h6>{{ Auth::User()->fname . ' ' . Auth::User()->lname }}</h6>
                <p>{{ Auth::User()->pno }}</p>
            </div>
        @endguest

</nav>

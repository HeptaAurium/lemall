<nav class="navbar navbar-expand navbar-light top-nav shadow">
    {{-- <a class="navbar-brand logo-text" href="#">{{ config('app.name') }}</a> --}}
    <button class="btn sidebar-toggler d-lg-none"><i class="fa fa-bars" aria-hidden="true"></i></button>
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
        <div class="prof-pic">
            <a href="/profile">
                <img src="{{ asset(Auth::User()->img) }}" alt="" class="rounded-circle img-fluid" srcset="">
            </a>
        </div>
        <div class="prof-pic-captions text-center">
            <h6>{{ Auth::User()->fname . ' ' . Auth::User()->lname }}</h6>
            <p>{{ Auth::User()->pno }}</p>
        </div>
</nav>

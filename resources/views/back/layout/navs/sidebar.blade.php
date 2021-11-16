<div class="sidebar shadow">
    <button class="btn sidebar-toggler d-lg-none"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
    <div class="top flex-center flex-column">
        <a class="logo-text flex-center" href="/">{{ config('app.name') }}</a>
    </div>

    <ul class="nav flex-column vertical-nav">
        <li class="nav-item">
            <a href="/home" class="nav-link"> <i class="fa fa-home icon shadow-sm" aria-hidden="true"></i>
                Dashboard</a>
        </li>
        <li class="nav-item" data-toggle="tooltip" title="Students">
            <a class="accordion-heading nav-link" data-toggle="collapse" data-target="#orders">
                <i class="fas fa-user-tie  icon  "></i>
                Orders
            </a>
            <ul class="nav nav-list collapse drop" id="orders">
                <li class="nav-item">
                    <a class="nav-link" href="/members/create">
                        <span class="side-mini-text pl-3"> Delivered <span class="badge badge-success">12</span>
                        </span>
                    </a>
                    <a class="nav-link" href="/members/create">
                        <span class="side-mini-text pl-3"> Pending <span class="badge badge-warning">12</span>
                        </span>
                    </a>
                    <a class="nav-link" href="/members/create">
                        <span class="side-mini-text pl-3"> In Transit <span class="badge badge-danger">12</span>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item mt-1">
            <hr class="w-75 mx-auto">
            <h6 class="text-uppercase text-xs font-weight-bolder text-muted pl-5">User Management</h6>
            <hr class="w-75 mx-auto">
        </li>
        <li class="nav-item" data-toggle="tooltip" title="Students">
            <a class="accordion-heading nav-link" data-toggle="collapse" data-target="#vendors">
                <i class="fas fa-user-tie  icon  "></i>
                Vendors
            </a>
            <ul class="nav nav-list collapse drop" id="vendors">
                <li class="nav-item">
                    <a class="nav-link" href="/members/create">
                        <span class="side-mini-text pl-3"> Active <span class="badge badge-success">12</span>
                        </span>
                    </a>
                    <a class="nav-link" href="/members/create">
                        <span class="side-mini-text pl-3"> Pending <span class="badge badge-warning">12</span>
                        </span>
                    </a>
                    <a class="nav-link" href="/members/create">
                        <span class="side-mini-text pl-3"> Suspended <span class="badge badge-danger">12</span>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item mt-1">
            <hr class="w-75 mx-auto">
            <h6 class="text-uppercase text-xs font-weight-bolder text-muted pl-5">System Management</h6>
            <hr class="w-75 mx-auto">
        </li>
        <li class="nav-item" data-toggle="tooltip" title="System Management">
            <a class="accordion-heading nav-link" data-toggle="collapse" data-target="#system">
                <i class="fas fa-cogs  icon  "></i>
                System
            </a>
            <ul class="nav nav-list collapse drop" id="system">
                <li class="nav-item">
                    <a class="nav-link" href="/members/create">
                        <span class="side-mini-text pl-3"> Categories <span class="badge badge-success">12</span>
                        </span>
                    </a>
                    <a class="nav-link" href="/members/create">
                        <span class="side-mini-text pl-3"> Brands <span class="badge badge-warning">12</span>
                        </span>
                    </a>
                    <a class="nav-link" href="/members/create">
                        <span class="side-mini-text pl-3"> Suspended <span class="badge badge-danger">12</span>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<div class="app-header1 header py-1 d-flex">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="{{route('home.page')}}">
                <img src="{{asset('public/backend/assets/images/brand/logo.png')}}" class="header-brand-img" alt="Classiffied">
            </a>
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
            <div class="header-navicon">
                <a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown d-none d-md-flex" >
                    <a  class="nav-link icon full-screen-link">
                        <i class="fe fe-maximize-2"  id="fullscreen-button"></i>
                    </a>
                </div>
                <div class="dropdown ">
                    <a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
                        <img src="{{ asset('public/backend/assets/images/faces/male/25.jpg') }}" alt="profile-img" class="avatar avatar-md brround">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                        <a class="dropdown-item" href="{{route('user.logout')}}">
                            <i class="dropdown-icon icon icon-power"></i> logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

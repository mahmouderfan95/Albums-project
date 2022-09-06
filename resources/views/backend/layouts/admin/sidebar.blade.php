<aside class="app-sidebar doc-sidebar">
    <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body">
            <div>
                <img src="{{ asset('public/backend/assets/images/faces/male/25.jpg') }}" alt="user-img" class="avatar avatar-lg brround">
            </div>
                <div class="user-info">
                    <h2>{{auth('web')->user()->name}}</h2>
                    <span>Website {{auth('web')->user()->name}}</span>
                </div>
        </div>
    </div>
    <ul class="side-menu">
        <!-- albums -->
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Albums</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="{{route('albums.index')}}" class="slide-item">All Albums</a>
                </li>
                <li>
                    <a href="{{route('albums.create')}}" class="slide-item">Create New Album</a>
                </li>
            </ul>
        </li>
        <!-- images -->
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Images</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="{{route('images.index')}}" class="slide-item">All Images</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

<nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top nav-bg border-bottom mt-lg-n5">
    <div class="container">
        <a class="navbar-brand text-white" href="/"><h2>DRB</h2></a>
        {{-- <div class="search-custom-margin">
            <form action="{{route('search')}}" method="GET">
                <div class="input-group">
                    <input class="form-control border-secondary search-border border border-secondary search-width" type="search" value="" name="search" placeholder=" Search by keyword">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-warning search-btn-border border border-secondary search-btn-width" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div> --}}
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @php
                    $menus = App\Menu::whereNull('parent_menu_id')->orderBy('created_at', 'DESC')->get();
                @endphp
                @foreach($menus as $menu)
                    @php
                        $sub_menus = App\Menu::where('parent_menu_id', $menu->id)->orderBy('created_at', 'DESC')->get();
                    @endphp
                    @if(count($sub_menus)>0)
                    <li class="nav-item dropdown nav-custom-margin-top">
                        <a class="nav-link dropdown-toggle font-weight-bold text-white" href="{{ $menu->page ? $menu->page->slug : "#" }}"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <small class="font-weight-bold nav-item-custom-size">{{$menu->title}}</small>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach($sub_menus as $menu)
                                <a class="dropdown-item" href="{{ $menu->page ? $menu->page->slug : "#" }}">
                                    <small class="font-weight-bold nav-item-custom-size">{{$menu->title}}</small>
                                </a>
                            @endforeach
                        </div>
                    </li>
                    @else
                        <li class="nav-item nav-custom-margin-top">
                            <a class="nav-link font-weight-bold text-white" href="{{ $menu->page ? $menu->page->slug : "#" }}" >
                                <small class="font-weight-bold nav-item-custom-size">{{$menu->title}}</small>
                            </a>
                        </li>
                    @endif
                @endforeach
                <li class="nav-item dropdown nav-custom-margin-top">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small class="font-weight-bold nav-item-custom-size">COMPANY</small>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('finance-info-all')}}">
                            <small class="font-weight-bold nav-item-custom-size">Financial Statement</small>
                        </a>
                    </div>
                </li>

                <li class="nav-item nav-custom-margin-top">
                    <a class="nav-link font-weight-bold text-white" href="/news" >
                        <small class="font-weight-bold nav-item-custom-size">NEWS</small>
                    </a>
                </li>


                {{-- <li class="nav-item dropdown nav-custom-margin-top">
                    <a class="nav-link font-weight-bold text-white" href="{{route('visualize.index')}}">
                        <small class="font-weight-bold nav-item-custom-size">CHART</small>
                    </a>
                </li> --}}
                <li class="nav-item dropdown nav-custom-margin-top">
                    <a class="nav-link font-weight-bold text-white" href="{{route('visualize.data-matrix')}}">
                        <small class="font-weight-bold nav-item-custom-size">DATA MATRIX</small>
                    </a>
                </li>

                
               
                <form class="form-inline my-2 my-lg-0">
                    @if(Auth::check())
                        @if(Auth::user()->type == 'admin')
                            <button class="btn btn-warning btn-sm my-2 my-sm-0 mx-1" type="submit"><a href="/admin/menu">Admin Panel</a></button>
                        @else
                            <button class="btn btn-warning btn-sm my-2 my-sm-0 mx-1" type="submit"><a href="/invoice-user">Admin Panel</a></button>
                        @endif
                        <button class="btn btn-warning btn-sm my-2 my-sm-0 mx-1" type="submit"><a href="{{route('logout')}}"> Sign Out</a></button>
                    @else
                        <button class="btn btn-warning btn-sm my-2 my-sm-0 mx-1" type="submit"><a href="{{route('register')}}"> Sign Up</a></button>
                        <button class="btn btn-outline-warning btn-sm my-2 my-sm-0 text-white mx-1" type="submit"><a href="{{route('login')}}"> Sign In</a></button>
                    @endif
                </form>
            </ul>
        </div>
    </div>

    @if (Request::is('/'))
        @if(App\Announcment::where('is_published', true)->first())
            <div class="alert alert-info border-0 announcement" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Announcement! </strong>{{ App\Announcment::where('is_published', true)->first()->text }}</<strong>
            </div>
        @endif
    @endif
</nav>
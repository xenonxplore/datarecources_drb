<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header">
        <a href="{{route('home')}}"><h4>Data Resources BD</h4></a>
    </div>

    <ul class="list-unstyled components">
        <li class="{{ request()->url() == route('menu.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('menu.index')}}">Menu</a>
        </li>
        <li class="{{ request()->url() == route('page.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('page.index')}}">Page</a>
        </li>
        <li class="{{ request()->url() == route('sector.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('sector.index')}}">Sector</a>
        </li>
        <li class="{{ request()->url() == route('company.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('company.index')}}">Company</a>
        </li>
        <li class="{{ request()->url() == route('announcment.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('announcment.index')}}">Announcment</a>
        </li>
        <li class="{{ request()->url() == route('subscriptionplan.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('subscriptionplan.index')}}">Subscription Plan</a>
        </li>
        <li class="{{ request()->url() == route('survey.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('survey.index')}}">Survey</a>
        </li>
        {{-- <li class="{{ request()->url() == route('surveyquestion.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('surveyquestion.index')}}">Survey Question</a>
        </li> --}}
        {{-- <li class="{{ request()->url() == route('configuration.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('configuration.index')}}">Configuration</a>
        </li> --}}
        {{-- <li class="{{ request()->url() == route('surveyansweroption.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('surveyansweroption.index')}}">Survey Answer Option</a>
        </li> --}}
        <li class="{{ request()->url() == route('user.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('user.index')}}">User</a>
        </li>
        <li class="{{ request()->url() == route('stockinfo.index') ? 'sidebar-active' : '' }}">
            <a href="{{route('stockinfo.index')}}">Stock Info</a>
        </li>
        {{-- <li >
            <a href="#">About</a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li> --}}
    </ul>
</nav>

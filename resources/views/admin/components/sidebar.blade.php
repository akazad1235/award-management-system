<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('admin/img/find_user.png')}}" class="user-image img-responsive"/>
            </li>


            <li>
                <a class="{{request()->is('dashboard') ? 'active-menu' : ''}}"  href="{{url('dashboard')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
            <li>
                <a class="{{request()->is('admin/award/*')? 'active-menu': ''}}"  href="{{route('award.list')}}"><i class="fa fa-desktop fa-3x"></i>Award Register</a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>
        </ul>

    </div>

</nav>

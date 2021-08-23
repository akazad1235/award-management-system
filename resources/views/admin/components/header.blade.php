<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
    </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">welcome, {{Auth()->user()->name}} <a class="btn btn-danger square-btn-adjust" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a> </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
{{--    <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>--}}
</nav>

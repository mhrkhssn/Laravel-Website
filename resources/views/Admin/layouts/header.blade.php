<div class="navbar navbar-expand nav-top-bar1 nav-bar-fixed">
    <div class="top-bar-menu collapse navbar-collapse" id="mobile-navbar">
        <ul class="navbar-nav">
            <li class="nav-toggle-btn d-none d-lg-block">
                <button class="btn-icon" id="dsy-aside-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </li>
            <li class="nav-toggle-btn d-lg-none">
                <button class="btn-icon sidebar-toggle-mobile">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </li>
            <b style="color: gray;font-size: x-large">
                Alligiant Services
            </b>
        </ul>
        <ul class="navbar-nav">
            <li class="navbar-item dropdown nav-admin">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    {{--<img src="" alt="">--}}
                    {!! auth()->user()->name !!}<i
                        class="flaticon-null-16"></i></a>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="sign-btn">

                        <a class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

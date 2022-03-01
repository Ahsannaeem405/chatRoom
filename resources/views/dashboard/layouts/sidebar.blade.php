<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                    <div class=""></div>
                    <h1 class="text-center font-weight-bold m-auto">Logo</h1>
                    {{-- <img src="{{asset('image/ARAB-FASHION-WEEK-X-D3-LOGO_white-150x150.png')}}" style="width: 90%;background-color: black"> --}}
                </a></li>
            <li class="nav-item nav-toggle" style="position: absolute;margin-left: 195px"><a
                    class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <li class=" {{ Request::is('admin/index')? 'active' : '' }}">
                <a href="{{ url('admin/index') }}"><i class="feather icon-home"></i><span
                        class="menu-title" data-i18n="Dashboard">Dashboard</span></a>



            <li class=" {{ Request::is('#')? 'active' : '' }}"><a href="{{ url('#') }}"><i class="fa fa-cog"></i><span
                        class="menu-title" data-i18n="Dashboard">Social Login Setting</span></a></li>
            <li class=" {{ Request::is('admin/radio')? 'active' : '' }}"><a href="{{ url('/admin/radio') }}"><i class="fa fa-cog"></i><span
                        class="menu-title" data-i18n="Dashboard">Radio Setting</span></a></li>

            <li class="@yield('Social') {{ Request::is('admin/clearchat')? 'active' : '' }}"><a href="{{ url('/admin/clearchat') }}"><i class="fa fa-comment"></i><span
                        class="menu-title" data-i18n="Dashboard">Clear Chat</span></a></li>
            <li class="@yield('Social') {{ Request::is('admin/clearguest')? 'active' : '' }}"><a href="{{ url('/admin/clearguest') }}"><i class=" fa fa-user"></i><span
                        class="menu-title" data-i18n="Dashboard">Clear Guest Users</span></a></li>
            <li class="@yield('Social') {{ Request::is('admin/users')? 'active' : '' }}"><a href="{{ url('/admin/users') }}"><i class=" fa fa-group"></i><span
                        class="menu-title" data-i18n="Dashboard">User Roles</span></a></li>
            <li class="@yield('Social') {{ Request::is('employee/attendance_history')? 'active' : '' }}"><a href="{{ url('#') }}"><i class="far fa-smile"></i><span
                        class="menu-title" data-i18n="Dashboard">Stickers</span></a></li>
            <li class="@yield('Social') {{ Request::is('admin/appearance')? 'active' : '' }}"><a href="{{ url('admin/appearance') }}"><i class="fa fa-presentation"></i><span
                        class="menu-title" data-i18n="Dashboard">Appearance</span></a></li>
            <li class="@yield('Social') {{ Request::is('admin/header')? 'active' : '' }}"><a href="{{ url('/admin/header') }}"><i class=" fa fa-user"></i><span
                        class="menu-title" data-i18n="Dashboard">Header</span></a></li>
            <li class="@yield('Social') {{ Request::is('admin/Ip')? 'active' : '' }}"><a href="{{ url('/admin/Ip') }}"><i class="fa fa-signal"></i><span
                        class="menu-title" data-i18n="Dashboard">IP/BAN</span></a></li>
            <li class="@yield('Social') {{ Request::is('admin/setting')? 'active' : '' }}"><a href="{{ url('/admin/setting') }}"><i class="fa fa-cog"></i><span
                        class="menu-title" data-i18n="Dashboard">Setting</span></a></li>

        </ul>
    </div>
</div>

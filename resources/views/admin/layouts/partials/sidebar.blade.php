<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('admin.dashboard.index') }}">管理後台</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }}管理員 <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-dropdown-link>
                    </form>
{{--                    <a href="{{ route('admin.logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>--}}

                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-fw fa-dashboard"></i> 主控台</a>
            </li>
            <li >
                <a href="{{ route('admin.rings.index') }}"><i class="fa fa-fw fa-edit"></i> 戒指樣式管理</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

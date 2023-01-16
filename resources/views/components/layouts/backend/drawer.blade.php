<!-- Side Header Start -->
<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                @can('Dashboard')
                <li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Dashboard</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="index.html"><span>E-commerce (Default)</span></a></li>
                        <li><a href="index-crypto.html"><span>Cryptocurrency</span></a></li>
                    </ul>
                </li>
                @endcan
                <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Manage Role</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('backend.roles.index') }}"><span>Role & Permission</span></a></li>
                        <li><a href="{{ route('backend.employees.create') }}"><span>Create Employee</span></a></li>
                        <li><a href="{{ route('backend.employees.index') }}"><span>List Employee </span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div><!-- Side Header End -->

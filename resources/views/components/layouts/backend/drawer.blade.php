<!-- Side Header Start -->
<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Dashboard</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="index.html"><span>E-commerce (Default)</span></a></li>
                        <li><a href="index-crypto.html"><span>Cryptocurrency</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Manage Role</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('backend.roles.index') }}"><span>Role & Permission</span></a></li>
                        <li><a href="{{ route('backend.users.index') }}"><span>User</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Product</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('backend.categories.index') }}"><span>Category</span></a></li>
                        <li><a href="{{ route('backend.subCategories.index') }}"><span>sub Category</span></a></li>
                        <li><a href="{{ route('backend.products.index') }}"><span>Product</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div><!-- Side Header End -->

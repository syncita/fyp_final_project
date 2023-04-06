<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name"></span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Master
                        Entry</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('company.index') }}">Company Setup</a></li>
                    <li><a class="nav-link" href="{{ route('category.index') }}">Category</a></li>
                    <li><a class="nav-link" href="{{ route('paymentcategory.index') }}">Payment Category</a></li>
                    <li><a class="nav-link" href="{{ route('type.index') }}">Type</a></li>
                </ul>
            </li>

            <li class="dropdown">
            <li><a class="nav-link" href="{{ route('user.index') }}"><i data-feather="user"></i> <span>User</span></a></li>
            <li><a class="nav-link" href="{{ route('sales') }}"><i class="fa-solid fa-money-bill"></i><span>Transactions</span></a></li>
            <li><a class="nav-link" href="{{ route('about.index') }}"><i data-feather="copy"></i> <span>About Page</span></a></li>
            <li><a class="nav-link" href="{{ route('post.index') }}"><i data-feather="plus"></i> <span>New Product</span></a></li>
          </li>
            
    </aside>
</div>

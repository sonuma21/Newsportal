<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html"> <span class="logo-name">Hello!!</span>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown {{ Request::routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown {{ Request::routeIs('admin.company*') ? 'active' : '' }}">
            <a href="{{ route('admin.company.index') }}" class="nav-link"><i
                    class="fas fa-building"></i><span>Company</span></a>
        </li>
        <li class="dropdown {{ Request::routeIs('admin.category*') ? 'active' : '' }}">
            <a href="{{ route('admin.category.index') }}" class="nav-link"><i
                    class="fas fa-tags"></i><span>Category</span></a>
        </li>
        <li class="dropdown {{ Request::routeIs('admin.article*') ? 'active' : '' }}">
            <a href="{{ route('admin.article.index') }}" class="nav-link"><i
                    class="fas fa-newspaper"></i><span>Article</span></a>
        </li>

        <li class="dropdown {{ Request::routeIs('admin.advertise*') ? 'active' : '' }}">
            <a href="{{ route('admin.advertise.index') }}" class="nav-link"><i
                    class="fas fa-bullhorn"></i><span>Advertise</span></a>
        </li>


    </ul>
</aside>

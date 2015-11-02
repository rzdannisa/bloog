<header class="app-bar fixed-top navy" data-role="appbar">
    <link href="metro-icons.css" rel="stylesheet">
    <div class="container">
        <a href="/" class="app-bar-element branding"><span class="mif-paw">  King Blog's</a>

        <ul class="app-bar-menu small-dropdown">
            @if(Auth::check())
            <li>
                <a href="#" class="dropdown-toggle"><span class="mif-database"></span> Master</a>
                <ul class="d-menu" data-role="dropdown" data-no-close="true">
                    <li>
                        <a href="" class="dropdown-toggle"><span class="mif-file-text"> Artikel</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="/artikel"><span class="mif-list2"></span> Semua Artikel</a></li>
                            <li><a href="artikel/add"><span class="mif-plus"></span> Tambah Baru</a></li>
                        </ul>
                    </li>
                    </ul>
                    </li>
                <li>
                    <a href="{{ url('auth/logout') }}">
                        <span class="mif-user"></span>Sign Out
                    </a>
                </li>
            @else

                <li>
                    <a href="{{ url('auth/login') }}">
                        <span class="mif-user"></span>Sign In
                    </a>
                </li>

                <li>
                    <a href="{{ url('auth/register') }}">
                        <span class="mif-user"></span>Sign Up
                    </a>
                </li>

            @endif
                </ul>
                    
</header>
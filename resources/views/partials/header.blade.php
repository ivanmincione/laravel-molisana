<header>
    <div id="logo-header">
        <img src=" {{ asset("images/logo-molisana.png") }} " alt="logo La Molisana">
    </div>
    <div class="menu-header">
        <ul>
                <li>
                    <a
                        class="{{ Request::route()->getName() == 'home-page' ? 'active' : '' }}"
                        href="{{ route('home-page') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a
                        class="{{ Request::route()->getName() == 'page-products' ? 'active' : '' }}"
                        href="{{ route('page-products') }}">
                        Prodotti
                    </a>
                </li>
                <li>
                    <a
                        class="{{ Request::route()->getName() == 'page-news' ? 'active' : '' }}"
                        href="{{ route('page-news') }}">
                        News
                    </a>
                </li>
            </ul>
    </div>
</header>

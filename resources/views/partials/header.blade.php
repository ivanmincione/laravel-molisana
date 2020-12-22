<header>
    <div id="logo-header">
        <img src=" {{ asset("images/logo-molisana.png") }} " alt="logo La Molisana">
    </div>
    <div class="menu-header">
        <ul>
            <li>
                <a href=" {{url("/")}} ">HOME</a> {{-- si usa url perchè non è definito il nome --}}
            </li>
            <li>
                <a href=" {{route("page-products")}} ">PRODOTTI</a>
            </li>
            <li>
                <a href=" {{route("page-news")}} ">NEWS</a>
            </li>
        </ul>
    </div>
</header>

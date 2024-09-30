<nav class="navbar_content">
    <div class="logo_navbar">
        <x-icons path="logo.svg" />
    </div>
    <ul class="navbar container">
        <div class="navbar_scroll">
            <x-icons path="logoNavbar.svg" />
        </div>
        <li class="item_navbar">
            <a class="link_navbar" href="{{ route('home') }}">Home</a>
        </li>
        <li class="item_navbar">
            <a class="link_navbar" href="{{ route('sobre') }}">Quem Somos</a>
        </li>
        <li class="item_navbar">
            <a class="link_navbar dropdown_toggle">Encontrar gatinhos</a>
            <ul class="dropdown_menu">
                <li class="dropdown_item"><a href="{{ route('encontrar-gatinhos') }}">Lorem Ipsum</a></li>
                <li class="dropdown_item"><a href="{{ route('encontrar-gatinhos') }}">Lorem Ipsum</a></li>
                <li class="dropdown_item"><a href="{{ route('encontrar-gatinhos') }}">Lorem Ipsum</a></li>
                <li class="dropdown_item showMenu menu_toogle"><a href="{{ route('encontrar-gatinhos') }}">Lorem
                        Ipsum</a>

                </li>
                <ul class="drop_menu">
                    <li><a href="{{ route('encontrar-gatinhos') }}">Lorem Ipsum</a></li>
                    <li><a href="{{ route('encontrar-gatinhos') }}">Lorem Ipsum</a></li>
                </ul>
            </ul>
        </li>
        <li class="item_navbar">
            <a class="link_navbar" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="item_navbar">
            <a class="link_navbar" href="{{ route('contato') }}">Contato</a>
        </li>

        <li class="item_navbar">
            <label class="switch">
                <div class="sun">
                    <x-icons path="sun.svg" />
                </div>
                <div class="moon">
                    <x-icons path="moon.svg" />
                </div>
                <input id="dark-mode-toggle" class="toogle_dark" type="checkbox">
                <span class="slider round">
                </span>
            </label>
        </li>

        <li class="item_navbar">
            <button class="btn_adotar">Quero Adotar um gatinho
                <x-icons path="paw.svg" />
            </button>
        </li>
    </ul>

</nav>
<nav class="navbar navbar_mobile bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <x-icons path="logoNavbar.svg" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <LogoTinieBird />
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <li class="item_navbar">
                    <a class="link_navbar" href="{{ route('home') }}">Home</a>
                </li>
                <li class="item_navbar">
                    <a class="link_navbar" href="{{ route('sobre') }}">Quem Somos</a>
                </li>
                <li class="item_navbar">
                    <a href="{{ route('encontrar-gatinhos') }}" class="link_navbar dropdown_toggle">Encontrar
                        gatinhos</a>
                </li>
                <li class="item_navbar">
                    <a href="{{ route(name: 'blog') }}" class="link_navbar" href="#">Blog</a>
                </li>
                <li class="item_navbar">
                    <a href="{{ route(name: 'contato') }}" class="link_navbar" href="#">Contato</a>
                </li>

                <li class="item_navbar">
                    <label class="switch">
                        <div class="sun">
                            <x-icons path="sun.svg" />
                        </div>
                        <div class="moon">
                            <x-icons path="moon.svg" />
                        </div>
                        <input id="dark-mode-toggle" class="toogle_dark" type="checkbox">
                        <span class="slider round">
                        </span>
                    </label>
                </li>

                <li class="item_navbar">
                    <button class="btn_adotar">Quero Adotar um gatinho
                        <x-icons path="paw.svg" />
                    </button>
                </li>
            </div>
        </div>
    </div>
</nav>
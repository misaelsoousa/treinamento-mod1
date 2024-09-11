<nav class="navbar_content">
    <div class="logo_navbar">
        <x-icons path="logo.svg" />
    </div>
    <ul class="navbar container">
        <div class="navbar_scroll">
            <x-icons path="logoNavbar.svg" />
        </div>
        <li class="item_navbar">
            <a class="link_navbar" href="#">Home</a>
        </li>
        <li class="item_navbar">
            <a class="link_navbar" href="#">Quem Somos</a>
        </li>
        <li class="item_navbar">
            <a class="link_navbar dropdown_toggle">Encontrar gatinhos</a>
            <ul class="dropdown_menu">
                <li class="dropdown_item"><a href="#">Lorem Ipsum</a></li>
                <li class="dropdown_item"><a href="#">Lorem Ipsum</a></li>
                <li class="dropdown_item"><a href="#">Lorem Ipsum</a></li>
                <li class="dropdown_item showMenu menu_toogle"><a href="#">Lorem Ipsum</a>

                </li>
                <ul class="drop_menu">
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                </ul>
            </ul>
        </li>
        <li class="item_navbar">
            <a class="link_navbar" href="#">Blog</a>
        </li>
        <li class="item_navbar">
            <a class="link_navbar" href="#">Contato</a>
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
<nav class="navbar_content">
    <div class="logo_navbar">
        <x-icons path="logo.svg" />
    </div>
    <div class="navbar_scroll">
        <x-icons path="logoNavbar.svg" />
    </div>
    <ul class="navbar container">
        <li class="item_navbar">
            <a href="#">Home</a>
        </li>
        <li class="item_navbar">
            <a href="#">Quem Somos</a>
        </li>
        <li class="item_navbar dropdown_item">
            <a href="#" class="navbar_link">Encontrar gatinhos</a>
            <ul class="dropdown">
                <li>
                    1
                </li>
                <li>
                    2
                </li>
                <li>
                    3
                </li>
                <li>
                    4
                </li>

            </ul>
        </li>
        <li class="item_navbar">
            <a href="#">Blog</a>
        </li>
        <li class="item_navbar">
            <a href="#">Contato</a>
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
            <button>Quero Adotar um gatinho
                <x-icons path="paw.svg" />
            </button>
        </li>
    </ul>
</nav>
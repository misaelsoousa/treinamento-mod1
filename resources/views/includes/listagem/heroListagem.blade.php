<div class="hero_listagem">
    <div class="text_hero">
        <x-hero-text>
            Escolha um gatinho
        </x-hero-text>
        <h2>Encontrar gatinhos</h2>
        <x-cat-area />
    </div>
    <div class="hero_image">
        <img src="img/listagemHero.png" />
    </div>
    <div class="listagem">
        <div class="adocao_transparent">
            <x-icons path="adocao.svg" />
        </div>
        <div class="detail_banner">
            <x-icons path="detailBanner.svg" />
        </div>

        <div class="listagem_content container ">
            <div class="text_content">
                <h2>Escolha por raça</h2>
                <p>Lorem ipsum dolor sit amet,<span> consectetur adipiscing elit,</span> sed do eiusmod </br> tempor
                    incididunt ut labore et dolore magna aliqua. </p>
            </div>


            <div class="swiper swiper_listagem">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat1.png" alt="">
                                <h2>Ragdoll</h2>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat2.png" alt="">
                                <h2>Singapura</h2>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat3.png" alt="">
                                <h2>Maine Coon</h2>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat4.png" alt="">
                                <h2>Siamês</h2>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat5.png" alt="">
                                <h2>Persa</h2>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat1.png" alt="">
                                <h2>Siamês</h2>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat2.png" alt="">
                                <h2>Ragdoll</h2>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat3.png" alt="">
                                <h2>Siamês</h2>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat4.png" alt="">
                                <h2>Ragdoll</h2>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="circle_cat">
                            <a href="{{ route('detalhes') }}">
                                <img src="img/listagemCat5.png" alt="">
                                <h2>Siamês</h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="bottom_listagem">
            <img src="img/bottomListagem.png" alt="">
        </div>

        <div class="bottom_listagem2">
            <img src="img/bottomListagem2.png" alt="">
        </div>
    </div>
</div>
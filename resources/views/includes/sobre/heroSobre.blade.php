<div class="hero_sobre">
    <div class="hero_image">
        <img src="img/heroSobreImage.png" />
    </div>
    <div class="inicio">
        <div class="detail_banner">
            <x-icons path="detailBanner.svg" />
        </div>
        <div class="inicio_content container ">
            <div class="container">
                <div class="text_content ">
                    <h2>O Começo</h2>
                    <p>Existem muitos gatos a espera de um lar e com muito amor para oferecer. Nós fazemos essa ponte
                        para
                        que
                        você
                        adote um amigo e faça a diferença na vida de um animal carente.</p>
                    <x-button>
                        Quero adotar
                    </x-button>
                </div>
            </div>

            <div class="video_container">
                <div class="thumb" id="thumb">
                    <img src="img/thumb.png" alt="Gatos">
                    <div class="play_button">
                        <x-icons path="playButton.svg" />
                    </div>
                    <button class="youtube">
                        <p>Assistir no</p>
                        <x-icons path="Youtube.svg" />
                    </button>
                </div>
                <div id="player" style="display: none;">
                    <iframe width="715" height="467" src="https://www.youtube.com/embed/zEOUaLQQNRQ"
                        title="✨ASMR | Meus gatos fizeram esse asmr - no talking✨" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>


            <div class="circles_hero">
                <div class="circle circle1">
                    <h2>10</h2>
                    <p>Anos</p>
                </div>
                <div class="circle circle2">
                    <h2>1.7k</h2>
                    <p>Resgates</p>
                </div>
                <div class="circle circle3">
                    <h2>1.5k</h2>
                    <p>Adoções</p>
                </div>
                <div class="circle circle4">
                    <h2>40</h2>
                    <p>Voluntários</p>
                </div>
                <div class="circle circle5">
                    <h2>22</h2>
                    <p>Cidades</p>
                </div>
            </div>

        </div>
        <script>function playVideo() {
                // Exibe o iframe e oculta a imagem da miniatura
                document.querySelector('.video-thumbnail').style.display = 'none';
                var iframe = document.getElementById('youtube-video');
                iframe.style.display = 'block';

                // Usar a API do YouTube para iniciar o vídeo
                var videoSrc = iframe.src;
                iframe.src = videoSrc + "&autoplay=1"; // Adiciona autoplay à URL do vídeo
            }</script>
    </div>
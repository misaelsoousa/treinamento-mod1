<div class="footerGeral">
    <div class="clip_path"></div>
    <div class="top_footer">
        <x-icons path="topFooter.svg" />
    </div>
    <div class="footer_content container">

        <div class="footer_card">
            <div class="email card_content">
                <x-icons path="email.svg" />
                <h2>Por e-mail</h2>
                <p>Uma central de atendimento com total controle para melhor atende-los</p>
                <span>
                    contato@ongtiniebird.com
                </span>
            </div>
            <div class="whats card_content">
                <x-icons path="whats.svg" />
                <h2>POR WHATSAPP</h2>
                <p>Fale conosco agora mesmo!
                    nossos atendentes retornará o seu contato.</p>
                <x-button>
                    00.<span>0000-0000</span>
                </x-button>
            </div>
            <div class="redes card_content">
                <x-icons path="heart.svg" />
                <h2>Redes sociais</h2>
                <p>Utilize nossas redes para entrar
                    em contato conosco! </p>
            </div>
        </div>
        <div class="footer_tips">
            <img src="img/footerDetalhe.png" alt="">
            <div class="footer_mobile">
                <h2>
                    RECEBA </br>
                    NOSSAS DICAS
                </h2>
                <p>
                    Receba em primeira mão </br>
                    as dicas e novidades da ong.
                </p>
            </div>
            <div class="footer_input">
                <input type="text" placeholder="DIGITE AQUI SEU E-MAIL:" />
                <x-button>
                    Inscreva-se
                </x-button>
            </div>
        </div>
        <div class="foot">

            <div class="foot_left">
                <div>
                    <h2>SOBRE NÓS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra tellus ut erat consequat
                        auctor integer nulla nunc.</p>
                </div>
                <div>
                    <h2>ACESSE</h2>
                    <div>
                        <x-icons path="arrowLink.svg" />
                        <a href="{{ route('home') }}">Home</a>
                    </div>
                    <div>
                        <x-icons path="arrowLink.svg" />
                        <a href="{{ route('sobre') }}">Quem somos</a>
                    </div>
                    <div>
                        <x-icons path="arrowLink.svg" />
                        <a href="{{ route('blog') }}">Blog</a>
                    </div>
                    <div>
                        <x-icons path="arrowLink.svg" />
                        <a href="{{ route('encontrar-gatinhos') }}">Encontrar gatinhos</a>
                    </div>
                    <div>
                        <x-icons path="arrowLink.svg" />
                        <a href="{{ route('contato') }}">Contato</a>
                    </div>
                </div>
            </div>
            <div class="foot_right">
                <div>
                    <h2>ONDE ESTAMOS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div>
                    <h2>HORÁRIO DE ATENDIMENTO</h2>
                    <p>Seg a Sex de 08h às 18h
                        Sábado de 08h às 14h</p>
                    <img class="footerHorario" src="img/footerHorario.png" alt="">

                </div>
            </div>
            <div class="catLogoFooter">
                <x-icons path="catLogoFooter.svg" />
            </div>
        </div>
        <div class="arrow_topo">
            <a href="#">
                <x-icons path="arrowTopo.svg" />
                <p>TOPO</p>
            </a>
        </div>
    </div>
</div>
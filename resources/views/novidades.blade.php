@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container__top">
        <div class="full_center">
            <div class="seo_description"><img src="{{asset('assets/imagens/glass-logo-peq.jpg')}}" /></div></br>
            <h1>NOVIDADES</h1>
        </div>
    </div>

    <div class="redesign__footer" v-once="">
        <div class="redesign__footer__top">
            <div class="center clearfix footer__flex">
                <div id="interface">
                    <section id="corpo">
                        <div class="footer__block">

                            <article id="noticia-principal">
                                <header id="cabecalho-artigo">
                                    <hgroup>
                                        <h3>Tecnologia > Inovações</h3>
                                        <h1>Saiba tudo sobre o Google Glass</h1>
                                        <h2>por Engº Catchipa</h2>
                                        <h3 class="direita">SUL ÓPTICA LDA</h3>
                                    </hgroup>
                                </header>


                                <h2>O que é</h2>
                                <p>O <span style="font-weight: 900;">Google Glass</span> é
                                    um dispositivo semelhante a um par de óculos, que fixados em um dos olhos,
                                    disponibiliza uma pequena tela acima do campo de visão. A pequena tela
                                    apresenta ao seu utilizador mapas, opções de música, previsão do tempo,
                                    rotas de mapas, e além disso, também é possível efetuar chamadas de vídeo ou
                                    tirar fotos de algo que se esteja a ver e compartilhar imediatamente através
                                    da internet.</p> <br>
                                <video id="movie1" controls="controls" poster="{{asset('assets/imagens/Introdução.png')}}">
                                    <source src="media/Introduction to Google Glass.mp4" type="video/mp4" />
                                </video> <br>

                                <p>O Projeto vinha sendo mantido pelos escritórios do Google X pelo menos
                                    desde 2006 até dia 4 de abril de 2012, o Google Glass ainda era um projeto
                                    secreto da Google. Atualmente, o Google X conta com o apoio de especialistas
                                    em alta tecnologia como Richard W. DeVaul e Babak Parviz. O visual do Google
                                    Glass é sofisticado e futurista, mas não possui lentes dos dois lados.</p>
                                <br>
                                <figure class="foto-legenda">
                                    <img src="{{asset('assets/imagens/glass-quadro-homem-mulher.jpg')}}" />
                                    <figcaption>
                                        <h3>Google Glass</h3>
                                        <p>Uma nova maneira de ver o mundo.</p>
                                    </figcaption>
                                </figure> <br>

                                <h2>Data de lançamento</h2>
                                <p>A data específica e oficial do seu lançamento em Angola, será no dia 12 de
                                    Julho de 2023, que estará disponível em todas lojas da SUL ÓPTICA LDA, isto
                                    na província da Huíla e Namibe, só depois que iremos expandir nas demais
                                    províncias do país aonde se encontra disponível os nossos serviços.</p> <br>

                                <p>Quem quiser adquirir um Google Glass quando disponível, pode se dirigir na
                                    nossa loja mais próxima da sua cidade, ou também, podes falar conosco e
                                    fazer o seu pedido de obtenção a partir do nosso site "Tudo Sobre Google
                                    Glass", fazendo uma compra online.</p>

                                <h2>Especificações Técnicas</h2>
                                <table id="tabelaspec">
                                    <caption>Tabela Técnica do Google Glass <span>Mar/2023</span></caption>

                                    <tr>
                                        <td class="ce">Tela</td>
                                        <td class="cd">Resolução equivalente a tela de 25"</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="ce">Camera</td>
                                        <td class="cd">5MP para fotos</td>
                                    </tr>
                                    <tr>
                                        <td class="cd">720p para vídeos</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="ce">Conectividade</td>
                                        <td class="cd">Wi-Fi</td>
                                    </tr>
                                    <tr>
                                        <td class="cd">Bluetooth</td>
                                    </tr>
                                    <tr>
                                        <td class="ce">Memória Interna</td>
                                        <td class="cd">12GB</td>
                                    </tr>
                                </table>

                                <h2>Como funciona</h2>
                                <p>Os óculos contam com uma pequena tela de LCD ou AMOLED na parte superior e em
                                    frente aos olhos do usuário. Com o uso de uma câmera e GPS, você pode se
                                    situar, assim como selecionar opções com o movimento da cabeça.</p>

                                <h2>O que você pode fazer com o Google Glasses</h2>
                                <p>O vídeo de divulgação do Google mostra que você pode se transformar em uma
                                    espécie de “super<wbr/>humano”, já que o aparelho pode indicar a quantos metros você está de seu destino, se o metrô está aberto ou fechado, mostrar o clima, agenda e até mesmo permitir que você marque encontros apenas com comandos de voz.
                                </p>
                                <video id="movie2" controls="controls" poster="{{asset('assets/imagens/video-mini01.jpg')}}">
                                    <source src="media/one-day.mp4" type="video/mp4" />
                                </video>

                            </article>
                    </section>

                    <aside id="lateral">
                        <h1>Outras Notícias</h1>
                        <h2>Vídeo mais recente</h2>
                        <video id="movie3" controls="controls" poster="{{asset('assets/imagens/video-mini02.jpg')}}">
                            <source src="media/how-it-feels.mp4" type="video/mp4" />
                        </video>



                        <h2>Novidades no Glass</h2>
                        <p>O Google enfim revelou as especificações completas do Google Glass, e com ele uma
                            surpresa ainda inédita no mercado: a gigante das buscas usa um sistema de áudio
                            baseado na transdução por condução. Através das hastes dos óculos, o som é
                            transmitido para o ouvido do usuário por meio de microvibrações em determinados
                            ossos de sua cabeça, sem usar nenhum tipo de alto-falante.</p> <br>

                        <p>Além da surpresa do áudio, a tela montada a frente do olho do usuário também chamou
                            atenção. São 640 x 360 pixels de resolução que, em proporção, equivaleria a um
                            monitor de 25 polegadas de alta definição colocado a 2,5 metros de distância do
                            espectador.</p>
                        <h2>Testagem do Glass</h2>




                </div>
            </div>
        </div>
        </aside>
        <div class="redesign__footer__bottom">
            <div class="center">
                <div class="item__list clearfix">
                    <div class="texts">
                        <h2 style="text-align: center"> <span>Telefones: 2612-25225/2642-67123</span>
                            <span>Telefax: 2642-67123/2612-25226</span>
                        </h2>
                    </div>

                </div>
                <div class="item__list clearfix">
                    <div class="texts">
                        <p style="text-align: center"> Copyright © 2023 <a href="htp://email"
                                target="_blank">suloptica@live.com.pt</a> Lubango-Namibe-Angola</p>
                    </div>
                </div>
            </div>
            <div class="back_to_top" v-once="" style="display: none;">
                <img class=" ls-is-cached lazyloaded"
                    data-src="/website-templates/themes/motoshopv2/assets/dist/images/sprite-svg-2ad0fc24ec3bfcb08e97742d11d00ef3.svg#arrow-up-black-usage"
                    alt="Back To Top"
                    src="./900+ Responsive Website Templates - MotoCMS_files/sprite-svg-2ad0fc24ec3bfcb08e97742d11d00ef3(7).svg">
            </div>
            <div id="mobile-indicator"></div>
            <div id="tablet-indicator"></div>

            <script type="text/javascript">
                window.__moto__ = { "motoUid": "120bde0526027cc2374251ef7f03bca5", "enhancedEcommerce": { "pageDetail": { "countClickAdd": 0, "oldValue": [], "globalListViewProduct": [], "globalListViewPromobanner": [] } }, "cart": { "full": { "countItems": 0, "totalPrice": 0, "totalRegularPrice": 0, "totalDiscountPrice": 0 }, "shoppingCartUid": "120bde0526027cc2374251ef7f03bca5", "order": { "countItems": 0, "totalPrice": 0, "totalRegularPrice": 0, "totalDiscountPrice": 0 } }, "js": { "currentTimeStamp": 1672790984, "currentDateTime": "2023-01-03 19:09:44", "hasInitChat": 1 }, "geo": [], "page": { "controller": "template", "action": "viewbytype" }, "locale": { "id": 3, "code": "en", "visibleName": "English" }, "currency": { "id": 0, "code": "USD", "rate": 0, "symbol": "$" }, "bt": { "email": "jan2023_1672790677_bt_noreply@motocms.com", "hash": "a0a771b292d36677898453fd76c56a30", "needReassign": false, "reassignParams": [], "pullTasks": [] }, "fbqParams": { "id": 0 }, "bundleDiscount": [{ "offers": [529, 530, 531, 609, 600, 601, 602, 605], "discountTemplate": 10, "discountOffer": 15, "minCountMathOffer": 2 }] };
            </script>
            <script type="text/javascript"></script>
            <script>if ('serviceWorker' in navigator) { window.addEventListener('load', function () { navigator.serviceWorker.register("/website-templates/sw.js").then(function (reg) { }).catch(function (error) { console.log('Registering failed ' + error); }); }); }</script>
            <script>window._motoLoadCss = function () { var el = document.getElementById('critical-css'); if (el !== null) { el.textContent = ''; } }</script>
            <link rel="stylesheet"
                href="./900+ Responsive Website Templates - MotoCMS_files/catalog-b4123f98abb1ce9a24e7.css"
                as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;;window._motoLoadCss();">
            <!--[if IE]><!-->
            <link rel="stylesheet"
                href="./900+ Responsive Website Templates - MotoCMS_files/catalog-b4123f98abb1ce9a24e7.css"
                onload="window._motoLoadCss();">
            <script type="text/javascript"
                id="">var head = document.getElementsByTagName("head")[0], script = document.createElement("script"); script.async = !0; script.src = "https://web.webpushs.com/js/push/434c57a140bc4f34f3022836e7d02f2d_1.js"; head.appendChild(script);</script>
            <!--<![endif]-->
            <noscript>
                <link rel="stylesheet"
                    href="/website-templates/themes/motoshopv2/assets/dist/css/catalog-b4123f98abb1ce9a24e7.css">
            </noscript>
            <script
                src="./Free Website Templates Download - Responsive MotoCMS Builder_files/bundle-landing_free.js"
                async="async"></script>

            <script type="text/javascript"
                id="">(function (b, c, e, f, d) { b[d] = b[d] || []; var g = function () { var a = { ti: "5223675" }; a.q = b[d]; b[d] = new UET(a); b[d].push("pageLoad") }; var a = c.createElement(e); a.src = f; a.async = 1; a.onload = a.onreadystatechange = function () { var b = this.readyState; b && "loaded" !== b && "complete" !== b || (g(), a.onload = a.onreadystatechange = null) }; c = c.getElementsByTagName(e)[0]; c.parentNode.insertBefore(a, c) })(window, document, "script", "//bat.bing.com/bat.js", "uetq");</script>
            <noscript>
                <img src="//bat.bing.com/action/0?ti=5223675&amp;Ver=2" alt="BING_REMARKETING_CODE" height="0"
                    width="0" style="display:none; visibility: hidden;">
            </noscript>
            <script type="text/javascript"
                id="">!function (b, e, f, g, a, c, d) { b.fbq || (a = b.fbq = function () { a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments) }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d)) }(window, document, "script", "//connect.facebook.net/en_US/fbevents.js");
                    "undefined" !== typeof fbq && (fbq("init", "1454828164843464"), fbq("track", "PageView"), "undefined" !== typeof window && "undefined" !== typeof window.__moto__ && "undefined" !== typeof window.__moto__.fbqParams && ("undefined" !== typeof window.__moto__.fbqParams.viewContent && fbq("track", "ViewContent", window.__moto__.fbqParams.viewContent), "undefined" !== typeof window.__moto__.fbqParams.search && fbq("track", "Search", { search_string: window.__moto__.fbqParams.search.search_string })));</script>
            <noscript>
                <script type="text/javascript"
                    id="">var elementsBtnFb = document.querySelectorAll("._fb_event_btn_click"); "undefined" !== typeof elementsBtnFb && null !== elementsBtnFb && 0 < elementsBtnFb.length && Array.prototype.forEach.call(elementsBtnFb, function (a, c) { a.addEventListener("click", function (b) { b = a.getAttribute("data-button_name"); "undefined" !== typeof fbq && null !== elementsBtnFb && "undefined" !== typeof window && "undefined" !== typeof window.location && "undefined" !== typeof window.location.href && fbq("trackCustom", "Button Clicks", { content_name: b, page: window.location.href }) }) });</script>
                <div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon67971474483">
                    <img style="width:0px; height:0px; display:none; visibility:hidden;"
                        id="batBeacon648841036977" width="0" height="0" alt=""
                        src="./900+ Responsive Website Templates - MotoCMS_files/0">
                </div>
                <script type="text/javascript"
                    id="">"undefined" !== typeof fbq && fbq("trackCustom", "Scroll Tracking", { "Scroll Depth": google_tag_manager["GTM-NL3492"].macro(12), "Scroll Time": google_tag_manager["GTM-NL3492"].macro(13), page: google_tag_manager["GTM-NL3492"].macro(14) });</script>
                <div id="chat-widget-container"
                    style="opacity: 1; visibility: visible; z-index: 2147483639; position: fixed; bottom: 55px; width: 84px; height: 84px; max-width: 100%; max-height: calc(100% - 55px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; right: 30px; transition: none 0s ease 0s !important;">
                    <iframe
                        allow="autoplay; microphone *; camera *; display-capture *; picture-in-picture *; fullscreen *;"
                        src="./900+ Responsive Website Templates - MotoCMS_files/open_chat.html"
                        allowtransparency="true" id="chat-widget" name="chat-widget"
                        title="LiveChat chat widget" scrolling="no"
                        style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; position: absolute; inset: 0px; transition: none 0s ease 0s !important; display: none;"></iframe><iframe
                        allowtransparency="true" id="chat-widget-minimized" name="chat-widget-minimized"
                        title="LiveChat chat widget" scrolling="no"
                        style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; display: block;"
                        src="./900+ Responsive Website Templates - MotoCMS_files/saved_resource.html"></iframe>
                </div>
                <script type="text/javascript"
                    id="">"undefined" !== typeof fbq && fbq("trackCustom", "Scroll Tracking", { "Scroll Depth": google_tag_manager["GTM-NL3492"].macro(19), "Scroll Time": google_tag_manager["GTM-NL3492"].macro(20), page: google_tag_manager["GTM-NL3492"].macro(21) });</script>
                <script type="text/javascript"
                    id="">"undefined" !== typeof fbq && fbq("trackCustom", "Scroll Tracking", { "Scroll Depth": google_tag_manager["GTM-NL3492"].macro(25), "Scroll Time": google_tag_manager["GTM-NL3492"].macro(26), page: google_tag_manager["GTM-NL3492"].macro(27) });</script>
                <script type="text/javascript"
                    id="">"undefined" !== typeof fbq && fbq("trackCustom", "Scroll Tracking", { "Scroll Depth": google_tag_manager["GTM-NL3492"].macro(31), "Scroll Time": google_tag_manager["GTM-NL3492"].macro(32), page: google_tag_manager["GTM-NL3492"].macro(33) });</script>
</div>
</div>
@endsection

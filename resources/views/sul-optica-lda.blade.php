@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container__top">
        <div class="full_center">
            <h1>VISITE-NOS</h1>
        </div>
    </div>

    <div class="redesign__footer" v-once="">
        <div class="redesign__footer__top">
            <div class="center clearfix footer__flex">
                <div id="interface">
                    <section id="corpo">
                        <div class="footer__block">
                            <div class="footer__block__title">
                                <figure class="foto-mapa">

                                    &nbsp;&nbsp;&nbsp; <img src="{{asset('assets/imagens/transferir.png')}}" alt="Mapa">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                    <form method="POST" id="fLoja" action="mailto:suloptica@live.com.pt">
                                        <fieldset id="contactenos">
                                            <legend style="font-weight: bold;">Contacte-nos</legend>
                                            <p><label for="cNome">Nome:</label> <input type="text" name="tNome"
                                                    id="cNome" size="20" maxlength="30"
                                                    placeholder="Nome Completo" /></p>
                                            <p><label for="cMail">E-mail:</label> <input type="email"
                                                    name="tMail" id="cMail" size="20" maxlength="40"
                                                    placeholder="correio electronico" /></p>
                                            <p><label for="cMsg">Assunto</label><br>
                                                <textarea name="tMsg" id="cMsg" cols="35" rows="5"
                                                    placeholder="Deixe aqui a sua mensagem"></textarea>
                                            </p>
                                        </fieldset>
                                        <input type="image" name="tEnviar" src="{{asset('assets/imagens/botao-enviar.png')}}">
                                        </from>
                                        </ul>
                                </figure>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container__top">
        <div class="full_center">
            <h1>AS NOSSAS MARCAS</h1></br>
            <p>Na Sul Óptica LDA encontras a maior seleção de óculos das mais conceituadas marcas, que
                primam pela inovação, <br> qualidade e design, com a garantia de autencidade. Adquira já os
                seus óculos preferidos, indo a uma loja mais <br> próxima de si!</p>
        </div>
    </div>

    <div class="redesign__footer" v-once="">
        <div class="redesign__footer__top">
            <div class="center clearfix footer__flex">
                <div id="interface">
                    <section id="corpo">
                        <div class="footer__block">
                            <div class="footer__block__title">
                                <figure class="oculos-sol">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{asset('assets/images/1024x413_2_1.png')}}" />
                                    <p> <span style="font-weight: bold;"><br><br><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ÓCULOS DE SOL</span></br> <span
                                            style="font-weight: bold;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DESFRUTA
                                            OS MODELOS</span></br> <span style="font-weight: bold;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DE ÓCULOS DE SOL</span></br> <span
                                            style="font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXCLUSIVOS</span>
                                    </p></br>
                                </figure>
                                <figure class="armacoes-marcas">
                                    <p> <span style="font-weight: bold;"><br><br><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ARMAÇÕES</span></br>
                                        <span
                                            style="font-weight: bold;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GARANTE
                                            A COLECÇÃO</span></br> <span style="font-weight: bold;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DE
                                            MODELOS DE</span></br> <span
                                            style="font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GRANDES
                                            MARCAS</span></p></br><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                        src="{{asset('assets/images/1024x413.png')}}" />
                                </figure>
                                </ul>
                                </ul>
                    </section>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

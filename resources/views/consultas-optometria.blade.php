@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container__top">
        <div class="full_center">
            <div class="seo_description"><img src="{{asset('assets/images/saude-ocular.png')}}" /></div></br>
            <h1>AO SERVIÇO DA SAÚDE OCULAR</h1></br>
            <p style="text-align: justify;">A nossa equipa é constituída por profissionais de elevado nível
                técnico, ético e humano. Apostamos em equipamentos, tecnologia de ponta e numa equipa</br>
                de técnicos especialistas, que permitem a Sul Óptica LDA proporcionar serviços deferenciados
                e merecer a confiança de quem nos procura.</p>
        </div>
    </div>

    <div class="redesign__footer" v-once="">
        <div class="redesign__footer__top">
            <div class="center clearfix footer__flex">
                <div id="interface">
                    <section id="corpo">
                        <div class="footer__block">
                            <div class="footer__block__title">
                                <article id="noticia-optometria">
                                    <h1>OPTOMETRIA</h1></br>
                                    <p>A consulta de Optometria serve sobretudo para detectar eventuais
                                        defeitos refractivos (miopia, hipermetropia, astigmatismo,
                                        presbiopia) e consequentemente a necessidade de usar óculos pela
                                        primeira vez, ou de mudar os seus óculos atuais, identificando a
                                        graduação exacta.</p></br>
                                    <p>A consulta inclui ainda uma avaliação geral do estado de saúde dos
                                        seus olhos, permitindo a detecção precoce de doenças oculares, como
                                        a degeneração macular ou o glaucoma, para que possa prevenir o
                                        aparecimento de sintomas mais graves.</p></br>
                                    <p>A consulta de Optometria deve ser realizada, pelo menos, de dois em
                                        dois anos. No entanto, o seu Optometrista pode aconselhá-lo a fazer
                                        uma vigilância mais regular.</p></br>
                                    <p style="font-weight: bold;">As consultas de Optometria são realizadas
                                        em todos as lojas da Sul Óptica LDA, não necessita de efectuar
                                        marcação prévia, o atendimento é realizado por ordem de chegada.</p>

                                    </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

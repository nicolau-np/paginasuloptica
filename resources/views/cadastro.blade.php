@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container__top">
        <div class="full_center">
            <h1>MARCAÇÕES DE CONSULTAS</h1>
        </div>
    </div>

    <div class="redesign__footer" v-once="">
        <div class="redesign__footer__top">
            <div class="center clearfix footer__flex">
                <div id="interface">
                    <section id="corpo">
                        <div class="footer__block">
                            <div class="footer__block__title">
                                <form method="post" id="fMarcacoes" action="mailto:suloptica@live.com.pt">
                                    <fieldset id="consulta">
                                        <legend style="font-weight: bold;">MARQUE A SUA CONSULTA</legend>
                                        <P>Preencha o formulário para marcação e serás contactado via telefone
                                        </P> <br>
                                        <p><label for="cNome">Nome:</label> <input type="text" name="tNome"
                                                id="cNome" size="20" maxlength="30"
                                                placeholder="Nome Completo" /></p>
                                        <p><label for="cMail">E-mail:</label> <input type="email" name="tMail"
                                                id="cMail" size="20" maxlength="40"
                                                placeholder="correio electronico" /></p>
                                        <p><label for="cEspec">Especialidade</label>
                                            <select name="tEspec" id="cEspec">
                                                <option value="Opt">OPTOMETRIA</option>
                                                <option value="Oft">OFTALMOLOGIA</option>
                                            </select>
                                        </p>
                                        <p><label for="cLocal">Localidade</label> <input type="text"
                                                name="tLocal" id="cLocal" size="20" maxlength="30"
                                                placeholder="Bairro/Rua" /></p>
                                        <p><label for="cTel">Telefone</label> <input type="numero" name="tTel"
                                                id="cTel" size="16" maxlength="16" placeholder="16 dígitos"></p>
                                    </fieldset>
                                    <br>
                                    <input type="image" name="tEnviar" src="imagens/botao-enviar.png" />
                                </form>
                                </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

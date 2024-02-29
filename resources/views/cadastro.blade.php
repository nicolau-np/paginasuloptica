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
                                <div class="messagem">
                                    @if (session('message'))
                                        <h6>{{ session('message') }}</h6>
                                    @endif
                                </div>
                                <div class="footer__block__title">
                                    <form method="post" id="fMarcacoes" action="/cadastro">
                                        @method('POST')
                                        @csrf
                                        <fieldset id="consulta">
                                            <legend style="font-weight: bold;">MARQUE A SUA CONSULTA</legend>
                                            <P>Preencha o formulário para marcação e serás contactado via telefone
                                            </P> <br>
                                            <p><label for="cNome">Nome:</label> <input type="text" name="tNome"
                                                    id="cNome" size="20" maxlength="30"
                                                    placeholder="Nome Completo" />
                                                @if ($errors->has('tNome'))
                                                    <span>{{ $errors->first('tNome') }}</span>
                                                @endif
                                            </p>
                                            <p><label for="cMail">E-mail:</label> <input type="email" name="tMail"
                                                    id="cMail" size="20" maxlength="40"
                                                    placeholder="correio electronico" />
                                                @if ($errors->has('tMail'))
                                                    <span>{{ $errors->first('tMail') }}</span>
                                                @endif
                                            </p>
                                            <p><label for="cEspec">Especialidade</label>
                                                <select name="tEspec" id="cEspec">
                                                    <option value="Opt">OPTOMETRIA</option>
                                                    <option value="Oft">OFTALMOLOGIA</option>
                                                </select>
                                                @if ($errors->has('tEspec'))
                                                    <span>{{ $errors->first('tEspec') }}</span>
                                                @endif
                                            </p>
                                            <p><label for="cLocal">Localidade</label> <input type="text" name="tLocal"
                                                    id="cLocal" size="20" maxlength="30" placeholder="Bairro/Rua" />
                                                @if ($errors->has('tLocal'))
                                                    <span>{{ $errors->first('tLocal') }}</span>
                                                @endif
                                            </p>
                                            <p><label for="cTel">Telefone</label> <input type="numero" name="tTel"
                                                    id="cTel" size="16" maxlength="16" placeholder="16 dígitos">
                                                @if ($errors->has('tTel'))
                                                    <span>{{ $errors->first('tTel') }}</span>
                                                @endif
                                            </p>
                                        </fieldset>
                                        <br>
                                        <button type="submit">Salvar</button>
                                    </form>
                                    </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

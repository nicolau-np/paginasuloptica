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
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="footer__block__title">
                                    <form method="post" id="fMarcacoes" action="/cadastro">
                                        @method('POST')
                                        @csrf
                                        <fieldset id="consulta">
                                            <legend style="font-weight: bold;">MARQUE A SUA CONSULTA</legend>
                                            Preencha o formulário para marcação e serás contactado via telefone
                                            <br>
                                            <div class="row">
                                                <div class="col-md-8 mb-2">
                                                    <label for="cNome">Nome: <span class="text-danger">*</span></label> <input type="text" name="tNome"
                                                        id="cNome" size="20" maxlength="30"
                                                        placeholder="Nome Completo" class="form-control" />
                                                    @if ($errors->has('tNome'))
                                                        <span class="text-danger">{{ $errors->first('tNome') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-md-8 mb-2">
                                                    <label for="cMail">E-mail: <span class="text-danger">*</span></label> <input type="email"
                                                        name="tMail" id="cMail" size="20" maxlength="40"
                                                        placeholder="Correio Electronico" class="form-control" />
                                                    @if ($errors->has('tMail'))
                                                        <span class="text-danger">{{ $errors->first('tMail') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-8 mb-2">
                                                    <label for="cEspec">Especialidade <span class="text-danger">*</span></label>
                                                    <select name="tEspec" id="cEspec" class="form-control">
                                                        <option value="" hidden>Especialidade</option>
                                                        <option value="OPTOMETRIA">OPTOMETRIA</option>
                                                        <option value="OFTALMOLOGIA">OFTALMOLOGIA</option>
                                                    </select>
                                                    @if ($errors->has('tEspec'))
                                                        <span class="text-danger">{{ $errors->first('tEspec') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-md-8 mb-2">
                                                    <label for="data">Data <span class="text-danger">*</span></label>
                                                    <input type="date" name="data" id=""
                                                        class="form-control" />
                                                    @if ($errors->has('data'))
                                                        <span class="text-danger">{{ $errors->first('data') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-8 mb-2">
                                                    <label for="cLocal">Localidade <span class="text-danger">*</span></label> <input type="text"
                                                        name="tLocal" id="cLocal" size="20" maxlength="30"
                                                        placeholder="Bairro/Rua" class="form-control" />
                                                    @if ($errors->has('tLocal'))
                                                        <span class="text-danger">{{ $errors->first('tLocal') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-8 mb-4">
                                                    <label for="cTel">Telefone <span class="text-danger">*</span></label> <input type="numero"
                                                        name="tTel" id="cTel" size="16" maxlength="16"
                                                        placeholder="16 dígitos" class="form-control">
                                                    @if ($errors->has('tTel'))
                                                        <span class="text-danger">{{ $errors->first('tTel') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                                </div>
                                            </div>

                                        </fieldset>

                                    </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

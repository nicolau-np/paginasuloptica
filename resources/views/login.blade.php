@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container__top">
            <div class="full_center">
                <h1>INICIAR SESSÃO</h1>
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
                                        <div class="alert alert-danger">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="footer__block__title">
                                    <form method="post" id="fMarcacoes" action="/login">
                                        @method('POST')
                                        @csrf
                                        <fieldset id="consulta">

                                            <div class="row">
                                                <div class="col-md-8 mb-2">
                                                    <label for="cNome">Email: <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" id="cNome" size="20"
                                                        maxlength="30" placeholder="Email" class="form-control" />
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-md-8 mb-4">
                                                    <label for="cMail">Palavra-Passe: <span
                                                            class="text-danger">*</span></label> <input type="password"
                                                        name="password" id="cMail" size="20" maxlength="40"
                                                        placeholder="Palavra-Passe" class="form-control" />
                                                    @if ($errors->has('password'))
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
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

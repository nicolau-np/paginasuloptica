@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container__top">
            <div class="full_center">
                <h1>CONSULTAS MARCADAS</h1>
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Email</th>
                                                        <th>Telefone</th>
                                                        <th>Localidade</th>
                                                        <th>Data da Consulta</th>
                                                        <th>Especialidade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($consultas as $consulta)
                                                    <tr>
                                                        <td>{{ $consulta->nome }}</td>
                                                        <td>{{ $consulta->email }}</td>
                                                        <td>{{ $consulta->telefone }}</td>
                                                        <td>{{ $consulta->local }}</td>
                                                        <td>{{ $consulta->data }}</td>
                                                        <td>{{ $consulta->especialidade }}</td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title ">
            <i class="fas fa-shopping-cart pe-2"></i> <span class="fw-bold">Dados do Carrinho</span>
        </h4>

        @foreach ($carrinhos as $carrinho)
            <hr>
            <div class="card-body">
                <div class="row">
                    {{-- Pacotes --}}
                    <div class="border col-12 col-md-8">
                        {{-- Pacote viagem --}}
                        @if ($this->buscarPacoteViagem($carrinho->id_pacote_viagems))
                            <div class="row bg-dark text-light mb-4 p-3">
                                @php
                                    $pacoteViagem = $this->buscarPacoteViagem($carrinho->id_pacote_viagems);
                                @endphp
                                <div class="col text-center">
                                    <span class="h4">
                                        <i class="fas fa-plane-departure pe-2"></i>
                                        {{ $pacoteViagem->titulo_pacote }}
                                    </span>
                                </div>
                                <div class="container border p-4">
                                    <div class="row">
                                        <div class="col-12 col-md-6 border pt-3 pb-3">
                                            <strong>Descrição:</strong>
                                            <div class="col bg-light text-dark p-2">
                                                {{ $pacoteViagem->desc_pacote }}
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 border pt-3 pb-3">
                                            <strong>Preço:</strong>
                                            <div class="col bg-light text-dark p-2">
                                                {{ number_format($pacoteViagem->preco_pacote, 2, ',', '.') }} kz
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container border p-4">
                                    <div class="row">
                                        <div class="col-12 col-md-6 border pt-3 pb-3">
                                            <strong>Destino:</strong>
                                            <div class="col bg-light text-dark p-2">
                                                @php
                                                    $id_destino = $pacoteViagem->id_destino;
                                                    $destino = $this->buscarDestino($id_destino);
                                                @endphp
                                                {{ $destino->nome_destino }}
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 border pt-3 pb-3">
                                            <strong>Tipo de Viagem:</strong>
                                            <div class="col bg-light text-dark p-2">
                                                @php
                                                    $id_tipoViagem = $pacoteViagem->id_tipoviagem;
                                                    $tipoViagem = $this->buscarTipoViagem($id_tipoViagem);
                                                @endphp
                                                {{ $tipoViagem->nome_tipoViagem }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Pacote hospedagem --}}
                        @if ($this->buscarPacoteHospedagem($carrinho->id_pacotehospedagems))
                            <div class="row bg-dark text-light mb-4 p-3">
                                @php
                                    $pacoteHospedagem = $this->buscarPacoteHospedagem($carrinho->id_pacotehospedagems);
                                @endphp
                                <div class="col text-center">
                                    <span class="h4">
                                        <i class="fas fa-bed pe-2"></i> {{ $pacoteHospedagem->titulo_pacoteHospedagem }}
                                    </span>
                                </div>
                                <div class="container border p-4">
                                    <div class="row">
                                        <div class="col-12 col-md-4 border pt-3 pb-3">
                                            <strong>Descrição:</strong>
                                            <div class="col bg-light text-dark p-2">
                                                {{ $pacoteHospedagem->desc_pacoteHospedagem }}
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 border pt-3 pb-3">
                                            <strong>Preço:</strong>
                                            <div class="col bg-light text-dark p-2">
                                                {{ number_format($pacoteHospedagem->preco_pacoteHospedagem, 2, ',', '.') }}
                                                kz
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 border pt-3 pb-3">
                                            <strong>Máximo de Pessoas:</strong>
                                            <div class="col bg-light text-dark p-2">
                                                {{ $pacoteHospedagem->max_qtd_pessoas }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Pacote refeição --}}
                        @if ($this->buscarPacoteRefeicao($carrinho->id_pacoterefeicaos))
                            <div class="row bg-dark text-light mb-4 p-3">
                                @php
                                    $pacoteRefeicao = $this->buscarPacoteRefeicao($carrinho->id_pacoterefeicaos);
                                @endphp
                                <div class="col text-center">
                                    <span class="h4">
                                        <i class="fas fa-bed pe-2"></i> {{ $pacoteRefeicao->titulo_pacoteRefeicao }}
                                    </span>
                                </div>
                                <div class="container border p-4">
                                    <div class="row">
                                        <div class="col-12 col-md-6 border pt-3 pb-3">
                                            <strong>Descrição:</strong>
                                            <div class="col bg-light text-dark p-2">
                                                {{ $pacoteRefeicao->desc_pacoteRefeicao }}
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 border pt-3 pb-3">
                                            <strong>Preço:</strong>
                                            <div class="col bg-light text-dark p-2">
                                                {{ number_format($pacoteRefeicao->preco_pacoteRefeicao, 2, ',', '.') }}
                                                kz
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    {{-- Viagem --}}
                    @if ($this->buscarViagem($carrinho->id_viagem))
                        <div class="col-12 col-md-4">
                            @php
                                $viagem = $this->buscarViagem($carrinho->id_viagem);
                            @endphp
                            <div class="h3 text-primary text-center">
                                <b>{{$viagem->titulo_viagem}}</b>
                            </div>
                            <div class="bg-light text-dark p-3 mb-2">
                                <strong>Descrição da Viagem:</strong> {{$viagem->desc_viagem}}
                            </div>
                            <div class="bg-light text-dark p-3 mb-2">
                                @php
                                    $dificuldade = $this->buscarDificuldade($viagem->cod_dificuldade);
                                @endphp
                                <strong>Nível de Dificuldade:</strong> {{$dificuldade->nome_dificuldadeViagem}}
                            </div>
                            <div class="bg-light text-dark p-3 mb-2">
                                <strong>Duração:</strong> {{$viagem->duracao_viagem}} dia(s)
                            </div>
                            <div class="bg-light text-dark p-3 mb-2">
                                <strong>Vagas Ocupadas:</strong> {{$viagem->vagas_viagem}}
                            </div>
                            <div class="bg-light text-dark p-3 mb-2">
                                <strong>Preço:</strong> {{number_format($viagem->preco_viagem, 2, ",", ".")}} Kz
                            </div>
                            <div class="bg-light text-dark p-3 mb-2">
                                <strong>Data da Viagem:</strong> {{ $this->formatarData($viagem->data_viagem)}}
                            </div>
                        </div>
                    @endif

                    <div class="col-12 pt-4 ">
                        <button style="min-height: 40px" class="btn btn-success btn-sm me-2" {{--  wire:click.prevent='confirmar({{ $carrinho->id }})' --}}>
                            Confirmar <i class="fas fa-check"></i>
                        </button>
                        <button style="min-height: 40px" class="btn btn-danger btn-sm" {{--  wire:click.prevent='cancelar({{ $carrinho->id }})' --}}>
                            Cancelar <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</div>

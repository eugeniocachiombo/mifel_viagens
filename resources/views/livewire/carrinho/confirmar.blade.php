<div class="main-panel pt-3">
    <div class="content-wrapper">
        <h4 class="card-title">
            <i class="fas fa-shopping-cart pe-2"></i> <span class="fw-bold">Listagem de Itens do Carrinho</span>
        </h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                @foreach ($carrinhos as $carrinho)
                    <thead class="bg-dark text-light">
                        <tr class="text-center">
                            <th>Pacote de Viagem</th>
                            <th>Pacote de Hospedagem</th>
                            <th>Pacote de Refeição</th>
                            <th>Total da Reserva</th>
                            <th>Acção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border">
                            <td class="border">
                                <div class="card mb-2 animate__animated animate__fadeIn">
                                    <div class="card-body">
                                        <h5 class="card-title"><i
                                                class="fas fa-plane-departure pe-2"></i>{{ $carrinho->buscarReserva->buscarPacoteViagem->titulo_viagem }}
                                        </h5>
                                        <p class="card-text">
                                            {{ $carrinho->buscarReserva->buscarPacoteViagem->desc_viagem }}
                                        </p>
                                        <h6 class="text-success">
                                            Preço:
                                            {{ number_format($carrinho->buscarReserva->buscarPacoteViagem->preco_viagem, 2, ',', '.') }}
                                            kz
                                        </h6>
                                    </div>
                                </div>
                            </td>
                            <td class="border">
                                <div class="card mb-2 animate__animated animate__fadeIn">
                                    <div class="card-body">
                                        <h5 class="card-title"><i
                                                class="fas fa-bed pe-2"></i>{{ $carrinho->buscarPacoteHospedagem->titulo_pacoteHospedagem }}
                                        </h5>
                                        <p class="card-text">
                                            {{ $carrinho->buscarPacoteHospedagem->desc_pacoteHospedagem }}
                                        </p>
                                        <h6 class="text-success">
                                            Preço:
                                            {{ number_format($carrinho->buscarPacoteHospedagem->preco_pacoteHospedagem, 2, ',', '.') }}
                                            kz
                                        </h6>
                                    </div>
                                </div>
                            </td>
                            <td class="border">
                                <div class="card mb-2 animate__animated animate__fadeIn">
                                    <div class="card-body">
                                        <h5 class="card-title"><i
                                                class="fas fa-utensils pe-2"></i>{{ $carrinho->buscarPacoteRefeicao->titulo_pacoteRefeicao }}
                                        </h5>
                                        <p class="card-text">{{ $carrinho->buscarPacoteRefeicao->desc_pacoteRefeicao }}
                                        </p>
                                        <h6 class="text-success">
                                            Preço:
                                            {{ number_format($carrinho->buscarPacoteRefeicao->preco_pacoteRefeicao, 2, ',', '.') }}
                                            kz
                                        </h6>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center border">
                                <h6 class="text-dark">
                                    @php
                                        $preco_viagem = $carrinho->buscarReserva->buscarPacoteViagem->preco_viagem;
                                        $preco_hospedagem = $carrinho->buscarPacoteHospedagem->preco_pacoteHospedagem;
                                        $preco_refeicao = $carrinho->buscarPacoteRefeicao->preco_pacoteRefeicao;
                                        $totalReserva = $preco_viagem + $preco_hospedagem + $preco_refeicao;
                                    @endphp
                                    <b> {{ number_format($totalReserva, 2, ',', '.') }} kz</b>
                                </h6>
                            </td>
                            <td class="text-center border">
                                <div class="d-flex flex-column justify-content-center">
                                    <center>
                                        <button type="button" class="btn btn-success btn-lg me-2 p-3"
                                            data-bs-toggle="modal" data-bs-target="#pagamentoModal"
                                            wire:click.prevent='escolherReserva({{ $carrinho->id }})'>
                                            Confirmar <i class="fas fa-check"></i>
                                        </button> <br> <br>

                                        <button class="btn btn-danger btn-lg p-3"
                                            wire:click.prevent='cancelar({{ $carrinho->id }})'>
                                            Cancelar <i class="fas fa-times"></i>
                                        </button>
                                    </center>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <!-- Modal para Login -->
            @include('livewire.carrinho.inclusao.modal-pagamento')
            @if (count($carrinhos) == 0)
                <h1 class="alert alert-danger text-dark display-1 fw-bold">Nenhuma informação no carrinho</h1>
            @endif
        </div>


    </div>
</div>

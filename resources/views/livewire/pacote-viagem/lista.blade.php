<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Pacotes de Viagem</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Título do Pacote</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Destino</th>
                        <th>Tipo de Viagem</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacotesViagem as $pacote)
                        <tr class="border">
                            <td class="border">{{ $pacote->titulo_pacote }}</td>
                            <td class="border">{{ $pacote->desc_pacote }}</td>
                            <td class="border">{{ number_format($pacote->preco_pacote, 2, ',', '.') }} Kz</td>
                            <td class="border">{{ $this->getDestino($pacote->id_destino)->nome_destino ?? 'N/A' }}</td>
                            <td class="border">{{ $this->getTipoViagem($pacote->id_tipoviagem)->nome_tipoViagem ?? 'N/A' }}</td>
                            <td class="text-center border">
                                @if ($pacote->status_pacote)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>
                            <td class="text-center border">
                                <a href="{{ route('pacote.viagem.actualizar', $pacote->id) }}">
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fas fa-pen"></i> Editar
                                    </button>
                                </a>
                                &nbsp;
                                <button class="btn btn-danger btn-sm" wire:click.prevent='eliminar({{ $pacote->id }})'>
                                    <i class="fas fa-trash"></i> Excluir
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

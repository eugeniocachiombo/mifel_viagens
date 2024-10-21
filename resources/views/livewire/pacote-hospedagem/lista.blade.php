<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Pacotes de Hospedagem</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Título do Pacote de Hospedagem</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Máx. Pessoas</th>
                        <th>Status</th>
                        @if (Auth::user()->id_acesso == 1)
                            <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacoteHospedagems as $pacoteHospedagem)
                        <tr class="border">
                            <td class="border">{{ $pacoteHospedagem->titulo_pacoteHospedagem }}</td>
                            <td class="border">{{ $pacoteHospedagem->desc_pacoteHospedagem }}</td>
                            <td class="border">
                                {{ number_format($pacoteHospedagem->preco_pacoteHospedagem, 2, ',', '.') }} Kz</td>
                            <td class="border">{{ $pacoteHospedagem->max_qtd_pessoas ?? 'N/A' }}</td>
                            <td class="text-center border">
                                @if ($pacoteHospedagem->status_pacoteHospedagem)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>
                            @if (Auth::user()->id_acesso == 1)
                                <td class="text-center border">
                                    <a href="{{ route('pacote.hospedagem.actualizar', $pacoteHospedagem->id) }}">
                                        <button style="min-height: 40px" class="btn btn-warning btn-sm">
                                            <i class="fas fa-pen"></i> Editar
                                        </button>
                                    </a>
                                    &nbsp;
                                    <button style="min-height: 40px" class="btn btn-danger btn-sm"
                                        wire:click.prevent='eliminar({{ $pacoteHospedagem->id }})'>
                                        <i class="fas fa-trash"></i> Excluir
                                    </button>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

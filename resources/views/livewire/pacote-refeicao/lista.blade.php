<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-utensils pe-2"></i> Listagem de Pacotes de Refeição</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Título do Pacote de Refeição</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Status</th>
                        @if (Auth::user()->id_acesso == 1)
                            <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacoteRefeicaos as $pacoteRefeicao)
                        <tr class="border">
                            <td class="border">{{ $pacoteRefeicao->titulo_pacoteRefeicao }}</td>
                            <td class="border">{{ $pacoteRefeicao->desc_pacoteRefeicao }}</td>
                            <td class="border">
                                {{ $pacoteRefeicao->preco_pacoteRefeicao ? number_format($pacoteRefeicao->preco_pacoteRefeicao, 2, ',', '.') . ' Kz' : 'Gratuito' }}
                            </td>
                            <td class="text-center border">
                                @if ($pacoteRefeicao->status_pacoteRefeicao)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>
                            @if (Auth::user()->id_acesso == 1)
                                <td class="text-center border">
                                    <a href="{{ route('pacote.refeicao.actualizar', $pacoteRefeicao->id) }}">
                                        <button style="min-height: 40px" class="btn btn-warning btn-sm">
                                            <i class="fas fa-pen"></i> Editar
                                        </button>
                                    </a>
                                    &nbsp;
                                    <button style="min-height: 40px" class="btn btn-danger btn-sm"
                                        wire:click.prevent='eliminar({{ $pacoteRefeicao->id }})'>
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

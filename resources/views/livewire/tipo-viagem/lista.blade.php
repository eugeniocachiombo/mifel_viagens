<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Tipos de Viagem</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Nome do Tipo de Viagem</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tipoviagems as $tipoViagem)
                        <tr class="border">
                            <td class="border">{{ $tipoViagem->nome_tipoViagem }}</td>
                            <td class="border">{{ $tipoViagem->desc_tipoViagem }}</td>
                            <td class="text-center border">
                                @if ($tipoViagem->status_tipoViagem)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>
                            <td class="text-center border">
                                <a href="{{ route('tipo.viagem.actualizar', $tipoViagem->id) }}">
                                    <button style="min-height: 40px" class="btn btn-warning btn-sm">
                                        <i class="fas fa-pen"></i> Editar
                                    </button>
                                </a>
                                &nbsp;
                                <button style="min-height: 40px" class="btn btn-danger btn-sm" wire:click.prevent='eliminar({{ $tipoViagem->id }})'>
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

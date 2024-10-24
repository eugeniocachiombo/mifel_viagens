<div class="main-panel pt-3">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Actividades</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Imagem</th>
                        <th>Nome da Actividade</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actividades as $actividade)
                        <tr class="border">
                            <td class="text-center border">
                                <a href="{{ asset('storage/' . $actividade->img_actividade) }}">
                                    <img
                                        src="{{ asset('storage/' . $actividade->img_actividade) }}"
                                        alt="{{ $actividade->nome_actividade }}" style="width: 100px; height: 100px">
                                </a>
                            </td>
                            <td class="border text-center">{{ $actividade->nome_actividade }}</td>
                            <td class="border" style="white-space: pre-wrap">{{ $actividade->desc_actividade }}</td>
                            <td class="text-center border">
                                @if ($actividade->status_actividade)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>
                            <td class="text-center border">
                                <a href="{{ route('actividades.actualizar', $actividade->id) }}">
                                    <button style="min-height: 40px" class="btn btn-warning btn-sm">
                                        <i class="fas fa-pen"></i> Editar
                                    </button>
                                </a>
                                &nbsp;
                                <button style="min-height: 40px" class="btn btn-danger btn-sm" wire:click.prevent='eliminar({{ $actividade->id }})'>
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

<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Destinos</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Imagem</th>
                        <th>Nome do Destino</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($destinos as $destino)
                        <tr class="border">
                            <td class="text-center border">
                                <a href="{{ asset('storage/' . $destino->img_destino) }}"> 
                                    <img
                                        src="{{ asset('storage/' . $destino->img_destino) }}"
                                        alt="{{ $destino->nome_destino }}" style="width: 100px; height: 100px">
                                </a>
                            </td>
                            <td class="border text-center">{{ $destino->nome_destino }}</td>
                            <td class="border" style="white-space: pre-wrap">{{ $destino->desc_destino }}</td>
                            <td class="text-center border">
                                @if ($destino->status_destino)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>
                            <td class="text-center border">
                                <a href="{{route("destino.actualizar", $destino->id )}}">
                                    <button style="min-height: 40px" class="btn btn-warning btn-sm"> <i class="fas fa-pen"></i> Editar</button>
                                </a> &nbsp;
                                <button  style="min-height: 40px"class="btn btn-danger btn-sm" wire:click.prevent='eliminar({{ $destino->id }})'><i class="fas fa-trash"></i> Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

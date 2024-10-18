<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Destinos</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Nome do Destino</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($destinos as $destino)
                        <tr>
                            <td>{{ $destino->nome_destino }}</td>
                            <td>{{ $destino->desc_destino }}</td>
                            <td>
                                <a href="{{ asset('storage/' . $destino->img_destino) }}"> 
                                    <img
                                        src="{{ asset('storage/' . $destino->img_destino) }}"
                                        alt="{{ $destino->nome_destino }}" style="width: 100px;">
                                </a>
                            </td>
                            <td>{{ $destino->status_destino ? 'Ativo' : 'Inativo' }}</td>
                            <td>
                                <a href="{{route("destino.actualizar", $destino->id )}}"><button class="btn btn-warning btn-sm">Editar</button></a>
                                <button class="btn btn-danger btn-sm" wire:click.prevent='eliminar({{ $destino->id }})'>Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


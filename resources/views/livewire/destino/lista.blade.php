<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Destinos</h4>
        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead>
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
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

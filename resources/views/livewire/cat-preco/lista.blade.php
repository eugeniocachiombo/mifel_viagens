<div class="main-panel pt-3">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Categorias de Preço</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Nome da Categoria</th>
                        <th>Descrição</th>
                        <th>Faixa de Idade</th>
                        <th>Preço</th>
                        <th>Status</th>
                        @if (Auth::user()->id_acesso == 1)
                            <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catprecos as $catPreco)
                        <tr class="border">
                            <td class="border text-center">{{ $catPreco->nome_catPreco }}</td>
                            <td class="border" style="white-space: pre-wrap">{{ $catPreco->desc_catPreco }}</td>
                            <td class="border text-center">{{ $catPreco->faixa_idade }}</td>
                            <td class="border text-center">
                                {{ $catPreco->preco_catPreco ? number_format($catPreco->preco_catPreco, 2, ',', '.') . ' Kz ' : 'N/A' }}
                            </td>
                            <td class="text-center border">
                                @if ($catPreco->status_catPreco)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>
                            @if (Auth::user()->id_acesso == 1)
                                
                            <td class="text-center border">
                                <a href="{{ route('cat.preco.actualizar', $catPreco->id) }}">
                                    <button style="min-height: 40px" class="btn btn-warning btn-sm"><i
                                            class="fas fa-pen"></i> Editar</button>
                                </a> &nbsp;
                                <button style="min-height: 40px" class="btn btn-danger btn-sm"
                                    wire:click.prevent='eliminar({{ $catPreco->id }})'><i class="fas fa-trash"></i>
                                    Excluir</button>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

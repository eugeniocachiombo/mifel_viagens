<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Pacotes de Viagens</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Título da Viagem</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Dificuldade</th>
                        <th>Status</th>
                        @if (Auth::user()->tipo_acesso == 1)
                            <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viagens as $viagem)
                        <tr class="border">
                            <td class="border">{{ $viagem->id }}</td>
                            <td class="border">{{ $viagem->titulo_viagem }}</td>
                            <td class="border" style="white-space: pre-wrap">{{ $viagem->desc_viagem }}</td>
                            <td class="border">{{ number_format($viagem->preco_viagem, 2, ',', '.') }} Kz</td>
                            <td class="border">
                                {{ $this->buscarDificuldade($viagem->cod_dificuldade)->nome_dificuldadeViagem }}</td>
                            <td class="text-center border">
                                @if ($viagem->status_viagem)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>

                            @if (Auth::user()->tipo_acesso == 1)
                                <td class="text-center border">
                                    <button style="min-height: 40px" class="btn btn-danger btn-sm"
                                        wire:click.prevent='eliminar({{ $viagem->id }})'>
                                        <i class="fas fa-trash"></i> Eliminar
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

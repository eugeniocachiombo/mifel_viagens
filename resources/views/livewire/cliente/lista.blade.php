<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-users pe-2"></i> Listagem de Clientes</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                        <th>Número</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clientes as $cliente)
                        <tr class="border">
                            <td class="border">{{ $cliente->nome_cliente }}</td>
                            <td class="border">{{ $cliente->sobrenome_cliente }}</td>
                            <td class="border">{{ $this->dadosUser($cliente->id_usuario)->email }}</td>
                            <td class="border">{{ $this->dadosUser($cliente->id_usuario)->telefone }}</td>
                            <td class="text-center border">
                                <span class="badge {{ $cliente->estado_cliente ? 'bg-success' : 'bg-danger' }}">
                                    {{ $cliente->estado_cliente ? 'Ativo' : 'Inativo' }}
                                </span>
                            </td>
                            <td class="text-center border">
                                <button style="min-height: 40px" class="btn btn-danger btn-sm" wire:click.prevent='eliminar({{ $cliente->id }})'>
                                    <i class="fas fa-trash"></i> Excluir
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center border">Nenhum cliente cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


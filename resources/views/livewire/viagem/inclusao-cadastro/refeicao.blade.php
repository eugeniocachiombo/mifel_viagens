<div class="row g-3">
    <div class="col-12 bg-dark text-white">
        <label><i class="fas fa-hotel pe-2"></i> Pacotes de Refeição</label>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="pacoteHospId"><i class="fas fa-tags pe-2"></i> Selecionar Pacote</label>
            <select class="form-control" id="pacoteRefId" wire:model="pacoteRefId" wire:change="pacoteRefListar">
                <option class="d-none">Selecione um Pacote</option>
                <option value="">Nenhum</option>
                @foreach ($pacotesRefeicao as $pacote)
                    <option value="{{ $pacote->id }}">{{ $pacote->titulo_pacoteRefeicao }}</option>
                @endforeach
            </select>
            @error('pacoteRefId')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div>
@if ($pacoteRefeicaoEscolhido)
    <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Pacotes de Refeicao</h4>
    <div class="table-responsive mt-4">
        <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
            <thead class="bg-dark text-light">
                <tr class="text-center">
                    <th>Título do Pacote</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border">{{ $pacoteRefeicaoEscolhido->titulo_pacoteRefeicao }}</td>
                    <td class="border">{{ $pacoteRefeicaoEscolhido->desc_pacoteRefeicao }}</td>
                    <td class="border">
                        {{ number_format($pacoteRefeicaoEscolhido->preco_pacoteRefeicao, 2, ',', '.') }} Kz</td>
                </tr>
            </tbody>
        </table>
    </div>
@endif
</div>

<div class="row g-3">
    <div class="col-12 bg-dark text-white">
        <label><i class="fas fa-hotel pe-2"></i> Pacotes de Hospedagem</label>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="pacoteHospId"><i class="fas fa-tags pe-2"></i> Selecionar Pacote</label>
            <select class="form-control" id="pacoteHospId" wire:model="pacoteHospId"
                wire:change="pacoteHospListar">
                <option class="d-none">Selecione um Pacote</option>
                <option value="">Nenhum</option>
                @foreach ($pacotesHospedagem as $pacote)
                    <option value="{{ $pacote->id }}">{{ $pacote->titulo_pacoteHospedagem }}</option>
                @endforeach
            </select>
            @error('pacoteHospId')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div>
@if ($pacoteHospedagemEscolhido)
    <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Pacotes de Hospedagem</h4>
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
                    <td class="border">{{ $pacoteHospedagemEscolhido->titulo_pacoteHospedagem }}</td>
                    <td class="border">{{ $pacoteHospedagemEscolhido->desc_pacoteHospedagem }}</td>
                    <td class="border">
                        {{ number_format($pacoteHospedagemEscolhido->preco_pacoteHospedagem, 2, ',', '.') }} Kz</td>
                </tr>
            </tbody>
        </table>
    </div>
@endif
</div>

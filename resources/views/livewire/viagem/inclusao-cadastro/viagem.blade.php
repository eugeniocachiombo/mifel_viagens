<div class="row g-3">
    <div class="col-12 bg-dark text-white">
        <label><i class="fas fa-tag pe-2"></i> Viagem</label>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="titulo_viagens"><i
                    class="fas fa-tag pe-2"></i> Título da
                Viagem</label>
            <input type="text" class="form-control"
                id="titulo_viagens" wire:model="titulo_viagens"
                placeholder="Título da Viagem">
            @error('titulo_viagens')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="desc_viagens"><i
                    class="fas fa-info-circle pe-2"></i> Descrição
                da Viagem</label>
            <textarea class="form-control" id="desc_viagens" wire:model="desc_viagens" placeholder="Descrição da Viagem"
                rows="4"></textarea>
            @error('desc_viagens')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="cod_dificuldade"><i
                    class="fas fa-list-alt pe-2"></i>
                Dificuldade</label>
            <select class="form-control" id="cod_dificuldade"
                wire:model="cod_dificuldade">
                <option class="d-none">Selecione a Dificuldade
                </option>
                @foreach ($dificuldades as $dificuldade)
                    <option value="{{ $dificuldade->id }}">
                        {{ $dificuldade->nome_dificuldadeViagem }}
                    </option>
                @endforeach
            </select>
            @error('cod_dificuldade')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="duracao_viagem"><i
                    class="fas fa-clock pe-2"></i> Duração
                (dias)</label>
            <input type="number" class="form-control"
                id="duracao_viagem" wire:model="duracao_viagem"
                placeholder="Duração da Viagem" min="1">
            @error('duracao_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="vagas_viagens"><i
                    class="fas fa-users pe-2"></i> Vagas</label>
            <input type="number" class="form-control"
                id="vagas_viagens" wire:model="vagas_viagens"
                placeholder="Número de Vagas" min="1">
            @error('vagas_viagens')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="preco_viagem"><i
                    class="fas fa-money-bill-wave pe-2"></i>
                Preço</label>
            <input type="text" class="form-control"
                id="preco_viagem" wire:model="preco_viagem"
                placeholder="Preço da Viagem" step="0.01">
            @error('preco_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
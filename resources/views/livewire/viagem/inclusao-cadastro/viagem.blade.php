<div class="row g-3">
    <div class="col-12 bg-dark text-white">
        <label><i class="fas fa-plane pe-2"></i> Viagem</label> <!-- Ícone para Viagem -->
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="titulo_viagem"><i class="fas fa-heading pe-2"></i> Título da Viagem</label>
            <input type="text" class="form-control"
                id="titulo_viagem" wire:model="titulo_viagem"
                placeholder="Título da Viagem">
            @error('titulo_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="desc_viagem"><i class="fas fa-info-circle pe-2"></i> Descrição da Viagem</label>
            <textarea class="form-control pt-2" id="desc_viagem" wire:model="desc_viagem"
             placeholder="Descrição da Viagem"></textarea>
            @error('desc_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="cod_dificuldade"><i class="fas fa-star pe-2"></i> Dificuldade</label>
            <select class="form-select" id="cod_dificuldade"
                wire:model="cod_dificuldade">
                <option class="d-none">Selecione a Dificuldade</option>
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
            <label for="duracao_viagem"><i class="fas fa-calendar-alt pe-2"></i> Duração (dias)</label>
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
            <label for="vagas_viagem"><i class="fas fa-users pe-2"></i> Vagas</label>
            <input type="number" class="form-control"
                id="vagas_viagem" wire:model="vagas_viagem"
                placeholder="Número de Vagas">
            @error('vagas_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="preco_viagem"><i class="fas fa-money-bill-wave pe-2"></i> Preço</label>
            <input type="text" class="form-control"
                id="preco_viagem" wire:model="preco_viagem"
                placeholder="Preço da Viagem" 
                onkeydown="formatarCampoPreco(this.value)">
            @error('preco_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>


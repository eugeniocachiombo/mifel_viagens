<div class="row g-3">
    <div class="col-12 bg-dark text-white">
        <label><i class="fas fa-suitcase pe-2"></i> Viagem</label>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="titulo_viagem"><i class="fas fa-heading pe-2"></i> Título da
                Viagem</label>
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
            <label for="desc_viagem"><i class="fas fa-info-circle pe-2"></i> Descrição
                da Viagem</label>
            <textarea class="form-control" id="desc_viagem" wire:model="desc_viagem" placeholder="Descrição da Viagem"
                rows="4"></textarea>
            @error('desc_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="cod_dificuldade"><i class="fas fa-star pe-2"></i>
                Dificuldade</label>
            <select class="form-select" id="cod_dificuldade"
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
            <label for="duracao_viagem"><i class="fas fa-calendar-alt pe-2"></i> Duração
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
            <label for="vagas_viagem"><i class="fas fa-users pe-2"></i> Vagas</label>
            <input type="number" class="form-control"
                id="vagas_viagem" wire:model="vagas_viagem"
                placeholder="Número de Vagas" min="1" max="{{$numMaxVaga}}"
                oninput="validateInput(this, {{$numMaxVaga}})">
            @error('vagas_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <script>
                function validateInput(input, max) {
                    if (input.value > max) {
                        input.value = max; 
                    }
                }
            </script>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="preco_viagem"><i class="fas fa-tag pe-2"></i>
                Preço</label>
            <input type="text" class="form-control"
                id="preco_viagem" wire:model="preco_viagem"
                placeholder="Preço da Viagem" step="0.01" disabled>
            @error('preco_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-12 bg-dark text-white">
        <label><i class="fas fa-calendar-alt pe-2"></i> Data da Viagem</label>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="data_viagem"><i class="fas fa-calendar-alt pe-2"></i> Data da viagem</label>
            <input type="date" class="form-control"
                id="data_viagem" wire:model="data_viagem"
                placeholder="Data da Viagem" min="1">
            @error('data_viagem')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
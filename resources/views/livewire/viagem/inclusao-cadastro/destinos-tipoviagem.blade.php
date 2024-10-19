<div class="row">
    {{-- Destinos --}}
    <div class="col-12 col-md-6">
        <div class="col bg-dark text-white mb-3">
            <label class="ps-2 "><i class="fas fa-tag"></i> Destino
                da
                Viagem</label>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="cod_destino"><i class="fas fa-map-marker-alt pe-2"></i>
                    Selecionar Destino</label>
                <select class="form-select" id="cod_destino" wire:model="cod_destino" wire:change="mudarPrecario">
                    <option class="d-none">Selecione um Destino
                    </option>
                    @foreach ($destinos as $destino)
                        <option value="{{ $destino->id }}">
                            {{ $destino->nome_destino }}</option>
                    @endforeach
                </select>
                @error('cod_destino')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Tipo de viagem --}}
    <div class="col-12 col-md-6">
        <div class="col bg-dark text-white mb-3">
            <label class="ps-2"><i class="fas fa-tag"></i> Tipo de
                Viagem</label>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="cod_tipoviagem"><i class="fas fa-flag pe-2"></i> Selecionar
                    Tipo de Viagem</label>
                <select class="form-select" id="cod_tipoviagem" wire:model="cod_tipoviagem" wire:change="mudarPrecario">
                    <option class="d-none">Selecione um Tipo de
                        Viagem</option>
                    @foreach ($tipoviagens as $tipoviagem)
                        <option value="{{ $tipoviagem->id }}">
                            {{ $tipoviagem->nome_tipoViagem }}
                        </option>
                    @endforeach
                </select>
                @error('cod_tipoviagem')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
</div>

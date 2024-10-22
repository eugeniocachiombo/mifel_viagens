<div class="row g-3">
    <div class="col-12 bg-dark text-white">
        <label><i class="fas fa-route pe-2"></i> Itinerário</label>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="dia_itinerario"><i class="fas fa-calendar-alt pe-2"></i> Dia do
                Itinerário</label>
            <input type="number" class="form-control"
                id="dia_itinerario" wire:model="dia_itinerario"
                placeholder="Dia do Itinerário" min="1">
            @error('dia_itinerario')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="desc_itinerario"><i class="fas fa-pencil-alt pe-2"></i> Descrição
                do Itinerário</label>
            <textarea class="form-control pt-2" id="desc_itinerario" wire:model="desc_itinerario" placeholder="Descrição do Itinerário"
                rows="4"></textarea>
            @error('desc_itinerario')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

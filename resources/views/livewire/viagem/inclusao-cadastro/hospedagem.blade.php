<div class="row g-3">
    <div class="col-12 bg-dark text-white">
        <label><i class="fas fa-tag pe-2"></i> Local Hospedagem</label>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="dia_itinerario"><i
                    class="fas fa-calendar-day pe-2"></i> Dia do
                Itinerário</label>
            <input type="number" class="form-control"
                id="dia_itinerario" wire:model="dia_itinerario"
                placeholder="Dia do Itinerário" min="1">
            @error('dia_itinerario')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="desc_itinerario"><i
                    class="fas fa-info-circle pe-2"></i> Descrição
                do Itinerário</label>
            <textarea class="form-control" id="desc_itinerario" wire:model="desc_itinerario" placeholder="Descrição do Itinerário"
                rows="4"></textarea>
            @error('desc_itinerario')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
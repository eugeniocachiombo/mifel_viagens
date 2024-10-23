<div class="row">
    <div class="col-12 bg-dark text-white">
        <label><i class="fas fa-bookmark pe-2"></i> Reserva</label>
    </div>


    <div class="row g-3">

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="data_resevada"><i class="fas fa-calendar pe-2"></i> Data Reservada</label>
                <input type="date" class="form-control" id="data_resevada" wire:model="data_resevada">
                @error('data_resevada')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="num_viajantes"><i class="fas fa-users pe-2"></i> Número de Viajantes</label>
                <input type="number" class="form-control" id="num_viajantes" wire:model="num_viajantes" min="1"
                    max="{{ $numMaxVaga }}" oninput="validateInput(this, {{ $numMaxVaga }})">
                @error('num_viajantes')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <script>
                function validateInput(input, max) {
                    if (input.value > max) {
                        input.value = max;
                    }
                }
            </script>
        </div>
    </div>
</div>

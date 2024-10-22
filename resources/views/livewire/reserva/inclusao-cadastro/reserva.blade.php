<div class="row">

    <form class="forms-sample" wire:submit.prevent="reservar">
        <div class="row g-3">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="cod_viagem"><i class="fas fa-plane pe-2"></i> Código da Viagem</label>
                    <input type="text" class="form-control" id="cod_viagem" wire:model="cod_viagem"
                        placeholder="Código da Viagem">
                    @error('cod_viagem')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

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
                    <input type="number" class="form-control" id="num_viajantes" wire:model="num_viajantes"
                        min="1" value="1">
                    @error('num_viajantes')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="total_reserva"><i class="fas fa-dollar-sign pe-2"></i> Total da Reserva</label>
                    <input type="number" class="form-control" id="total_reserva" wire:model="total_reserva"
                        step="0.01">
                    @error('total_reserva')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </form>
</div>

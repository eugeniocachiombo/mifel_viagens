<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="container-scroller d-flex justify-content-center" style="min-height: 100vh;">
                                <div class="container d-flex justify-content-center">
                                    <div class="col-10 col-md-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"><i class="fas fa-calendar-check pe-2"></i> Reservar Viagem</h4>
                                                <p class="card-description">Preencha os dados da reserva</p>

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
                                                                <input type="number" class="form-control" id="num_viajantes" wire:model="num_viajantes" min="1" value="1">
                                                                @error('num_viajantes')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="total_reserva"><i class="fas fa-dollar-sign pe-2"></i> Total da Reserva</label>
                                                                <input type="number" class="form-control" id="total_reserva" wire:model="total_reserva" step="0.01">
                                                                @error('total_reserva')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="status_reservas"><i class="fas fa-toggle-on pe-2"></i> Status da Reserva</label>
                                                                <select class="form-control" id="status_reservas" wire:model="status_reservas">
                                                                    <option class="d-none">Selecione</option>
                                                                    <option value="Pendente">Pendente</option>
                                                                    <option value="Reservado">Reservado</option>
                                                                    <option value="Finalizada">Finalizada</option>
                                                                </select>
                                                                @error('status_reservas')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-5">
                                                            <button type="submit" class="btn btn-primary text-light p-3" style="width: 100%;">Reservar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


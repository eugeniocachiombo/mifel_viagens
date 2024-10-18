<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-plane pe-2"></i> Actualizar Dificuldade de Viagem</h4>
        <div class="card mt-4">
            <div class="card-body">
                <form class="forms-sample" wire:submit.prevent="actualizar">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="nome_dificuldadeViagem"><i class="fas fa-tag pe-2"></i> Nome da Dificuldade de Viagem</label>
                                <input type="text" class="form-control" id="nome_dificuldadeViagem" wire:model="nome_dificuldadeViagem" placeholder="Nome da Dificuldade de Viagem">
                                @error('nome_dificuldadeViagem')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="desc_dificuldadeViagem"><i class="fas fa-info-circle pe-2"></i> Descrição da Dificuldade de Viagem</label>
                                <input type="text" class="form-control" id="desc_dificuldadeViagem" wire:model="desc_dificuldadeViagem" placeholder="Descrição da Dificuldade de Viagem">
                                @error('desc_dificuldadeViagem')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="status_dificuldadeViagem"><i class="fas fa-toggle-on pe-2"></i> Status da Dificuldade de Viagem</label>
                                <select class="form-control" id="status_dificuldadeViagem" wire:model="status_dificuldadeViagem">
                                    <option class="d-none">Selecione</option>
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>
                                @error('status_dificuldadeViagem')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary text-light" style="width: 100%;">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

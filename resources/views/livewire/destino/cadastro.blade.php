<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="container-scroller d-flex  justify-content-center"
                                style="min-height: 100vh; border: 1px solid #ddd;">
                                <div class="container d-flex justify-content-center ">
                                    <div class="col-10 col-md-12 grid-margin stretch-card">
                                        <div class="card mt-4">
                                            <div class="card-body">
                                                <h4 class="card-title"><i class="fas fa-map-marker-alt pe-2"></i> Cadastro de Destino</h4>
                                                <p class="card-description">Preencha os dados do destino</p>

                                                <form class="forms-sample " wire:submit.prevent="cadastrar">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="nome_destino"><i class="fas fa-globe pe-2"></i> Nome do Destino</label>
                                                                <input type="text" class="form-control" id="nome_destino" wire:model="nome_destino"
                                                                    placeholder="Nome do Destino">
                                                                @error('nome_destino')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="desc_destino"><i class="fas fa-info-circle pe-2"></i> Descrição do Destino</label>
                                                                <input type="text" class="form-control" id="desc_destino" wire:model="desc_destino"
                                                                    placeholder="Descrição do Destino">
                                                                @error('desc_destino')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="img_destino"><i class="fas fa-image pe-2"></i> Imagem do Destino</label>
                                                                <input type="file" class="form-control" id="img_destino" wire:model="img_destino">
                                                                @error('img_destino')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="status_destino"><i class="fas fa-toggle-on pe-2"></i> Status do Destino</label>
                                                                <select class="form-control" id="status_destino" wire:model="status_destino">
                                                                    <option class="d-none">Selecione</option>
                                                                    <option value="1">Ativo</option>
                                                                    <option value="0">Inativo</option>
                                                                </select>
                                                                @error('status_destino')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <button type="submit" class="btn btn-primary text-light" style="width: 100%;">Cadastrar</button>
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

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
                                                <h4 class="card-title"><i class="fas fa-clipboard-list pe-2"></i> Cadastro de Actividade</h4>
                                                <p class="card-description">Preencha os dados da actividade</p>

                                                <form class="forms-sample" wire:submit.prevent="cadastrar">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="nome_actividade"><i class="fas fa-edit pe-2"></i> Nome da Actividade</label>
                                                                <input type="text" class="form-control" id="nome_actividade" wire:model="nome_actividade" placeholder="Nome da Actividade">
                                                                @error('nome_actividade')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="desc_actividade"><i class="fas fa-info-circle pe-2"></i> Descrição da Actividade</label>
                                                                <input type="text" class="form-control" id="desc_actividade" wire:model="desc_actividade" placeholder="Descrição da Actividade">
                                                                @error('desc_actividade')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="img_actividade"><i class="fas fa-image pe-2"></i> Imagem da Actividade</label>
                                                                <input type="file" class="form-control" id="img_actividade" wire:model="img_actividade">
                                                                @error('img_actividade')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="status_actividade"><i class="fas fa-toggle-on pe-2"></i> Status da Actividade</label>
                                                                <select class="form-control" id="status_actividade" wire:model="status_actividade">
                                                                    <option class="d-none">Selecione</option>
                                                                    <option value="1">Ativo</option>
                                                                    <option value="0">Inativo</option>
                                                                </select>
                                                                @error('status_actividade')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-5">
                                                            <button type="submit" class="btn btn-primary text-light p-3" style="width: 100%;">Cadastrar</button>
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

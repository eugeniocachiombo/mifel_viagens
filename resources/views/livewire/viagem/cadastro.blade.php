<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="container-scroller d-flex align-items-center justify-content-center" style="min-height: 100vh; border: 1px solid #ddd;">
                                <div class="container d-flex justify-content-center align-items-center">
                                    <div class="col-10 col-md-8 grid-margin stretch-card">
                                        <div class="card mt-4">
                                            <div class="card-body">
                                                <h4 class="card-title"><i class="fas fa-plane pe-2"></i> Cadastro de Viagem</h4>
                                                <p class="card-description">Preencha os dados da viagem</p>

                                                <form class="forms-sample" wire:submit.prevent="cadastrar">
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="titulo_viagens"><i class="fas fa-tag pe-2"></i> Título da Viagem</label>
                                                                <input type="text" class="form-control" id="titulo_viagens" wire:model="titulo_viagens" placeholder="Título da Viagem">
                                                                @error('titulo_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="desc_viagens"><i class="fas fa-info-circle pe-2"></i> Descrição da Viagem</label>
                                                                <textarea class="form-control" id="desc_viagens" wire:model="desc_viagens" placeholder="Descrição da Viagem" rows="4"></textarea>
                                                                @error('desc_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="cod_dificuldade"><i class="fas fa-list-alt pe-2"></i> Dificuldade</label>
                                                                <select class="form-control" id="cod_dificuldade" wire:model="cod_dificuldade">
                                                                    <option class="d-none">Selecione a Dificuldade</option>
                                                                    @foreach($dificuldades as $dificuldade)
                                                                        <option value="{{ $dificuldade->id }}">{{ $dificuldade->nome_dificuldadeViagem }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('cod_dificuldade')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="em_destaque"><i class="fas fa-star pe-2"></i> Em Destaque</label>
                                                                <select class="form-control" id="em_destaque" wire:model="EmDestaque_viagens">
                                                                    <option class="d-none">Selecione</option>
                                                                    <option value="0">Não</option>
                                                                    <option value="1">Sim</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="duracao_viagens"><i class="fas fa-clock pe-2"></i> Duração (dias)</label>
                                                                <input type="number" class="form-control" id="duracao_viagens" wire:model="duracao_viagens" placeholder="Duração da Viagem" min="1">
                                                                @error('duracao_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="vagas_viagens"><i class="fas fa-users pe-2"></i> Vagas</label>
                                                                <input type="number" class="form-control" id="vagas_viagens" wire:model="vagas_viagens" placeholder="Número de Vagas" min="1">
                                                                @error('vagas_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="preco_viagens"><i class="fas fa-money-bill-wave pe-2"></i> Preço</label>
                                                                <input type="text" class="form-control" id="preco_viagens" wire:model="preco_viagens" placeholder="Preço da Viagem" step="0.01">
                                                                @error('preco_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="status_viagens"><i class="fas fa-toggle-on pe-2"></i> Status</label>
                                                                <select class="form-control" id="status_viagens" wire:model="status_viagens">
                                                                    <option class="d-none">Selecione</option>
                                                                    <option value="1">Ativo</option>
                                                                    <option value="0">Inativo</option>
                                                                </select>
                                                                @error('status_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="row g-3">
                                                        <h1>Etinerários</h1>
                                                    </div>

                                                    <hr>
                                                    <div class="row g-3">
                                                        <h1>Tipo de viagem</h1>
                                                    </div>

                                                    <hr>
                                                    <div class="row g-3">
                                                        <h1>Destino</h1>
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary text-light" style="width: 100%;">Cadastrar</button>
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

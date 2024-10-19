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
                                                <h4 class="card-title"><i class="fas fa-plane pe-2"></i> Cadastro de Dificuldade de Viagem</h4>
                                                <p class="card-description">Preencha os dados da dificuldade de viagem</p>

                                                @if (session()->has('mensagem'))
                                                    <div class="alert alert-success">{{ session('mensagem') }}</div>
                                                @endif

                                                <form class="forms-sample" wire:submit.prevent="cadastrar">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="nome_dificuldadeViagem"><i class="fas fa-tag pe-2"></i> Nome da Dificuldade de Viagem</label>
                                                                <input type="text" class="form-control" id="nome_dificuldadeViagem" wire:model="nome_dificuldadeViagem"
                                                                    placeholder="Nome da Dificuldade de Viagem">
                                                                @error('nome_dificuldadeViagem')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="desc_dificuldadeViagem"><i class="fas fa-info-circle pe-2"></i> Descrição da Dificuldade de Viagem</label>
                                                                <input type="text" class="form-control" id="desc_dificuldadeViagem" wire:model="desc_dificuldadeViagem"
                                                                    placeholder="Descrição da Dificuldade de Viagem">
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

                                                        <div class="">
                                                            <div class="col-4">
                                                                <button type="submit" class="btn btn-primary text-light" style="width: 100%;">Cadastrar</button>
                                                            </div>
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

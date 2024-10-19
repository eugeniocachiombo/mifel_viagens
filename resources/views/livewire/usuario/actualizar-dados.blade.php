<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="container-scroller d-flex justify-content-center"
                                style="min-height: 100vh; ">
                                <div class="container d-flex justify-content-center ">
                                    <div class="col-10 col-md-12 grid-margin stretch-card">
                                        <div class="card ">
                                            <div class="card-body">
                                                <h4 class="card-title"><i class="fas fa-user-edit pe-2"></i>
                                                    Actualização de Dados</h4>
                                                <p class="card-description">Actualize suas informações</p>

                                                <form class="forms-sample" wire:submit.prevent="actualizar">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="nome"><i class="fas fa-user pe-2"></i>
                                                                    Nome</label>
                                                                <input type="text" class="form-control"
                                                                    id="nome" wire:model="nome"
                                                                    placeholder="Seu Nome">
                                                                @error('nome')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="sobrenome"><i class="fas fa-user pe-2"></i>
                                                                    Sobrenome</label>
                                                                <input type="text" class="form-control"
                                                                    id="sobrenome" wire:model="sobrenome"
                                                                    placeholder="Seu Sobrenome">
                                                                @error('sobrenome')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="email"><i
                                                                        class="fas fa-envelope pe-2"></i> Email</label>
                                                                <input type="email" class="form-control"
                                                                    id="email" wire:model="email"
                                                                    placeholder="Seu Email">
                                                                @error('email')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="telefone"><i class="fas fa-phone pe-2"></i>
                                                                    Telefone</label>
                                                                <input type="text" class="form-control"
                                                                    id="telefone" wire:model="telefone"
                                                                    placeholder="Seu Telefone">
                                                                @error('telefone')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-8 col-md-4 ">
                                                            <button type="submit" class="btn btn-primary text-light p-3"
                                                                style="width: 100%;">Actualizar</button>
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

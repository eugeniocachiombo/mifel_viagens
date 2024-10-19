<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="container-scroller d-flex justify-content-center" style="min-height: 100vh; border: 1px solid #ddd;">
                                <div class="container d-flex justify-content-center ">
                                    <div class="col-10 col-md-6 grid-margin stretch-card">
                                        <div class="card mt-4">
                                            <div class="card-body">
                                                <h4 class="card-title"><i class="fas fa-lock pe-2"></i> Alterar Senha</h4>
                                                <p class="card-description">Preencha os campos abaixo para alterar sua senha</p>
                                            
                                                <form class="forms-sample" wire:submit.prevent="alterarSenha">
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="senhaAtual"><i class="fas fa-key pe-2"></i> Senha Atual</label>
                                                                <input type="password" class="form-control" id="senhaAtual" wire:model="senhaAtual"
                                                                    placeholder="Sua Senha Atual">
                                                                @error('senhaAtual')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                            
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="novaSenha"><i class="fas fa-lock pe-2"></i> Nova Senha</label>
                                                                <input type="password" class="form-control" id="novaSenha" wire:model="novaSenha"
                                                                    placeholder="Sua Nova Senha">
                                                                @error('novaSenha')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                            
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="confirmarSenha"><i class="fas fa-lock pe-2"></i> Confirmar Nova Senha</label>
                                                                <input type="password" class="form-control" id="confirmarSenha" wire:model="confirmarSenha"
                                                                    placeholder="Confirme Sua Nova Senha">
                                                                @error('confirmarSenha')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                            
                                                        <div class="col-6">
                                                            <button type="submit" class="btn text-white btn-primary p-3" style="width: 100%;">Alterar Senha</button>
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


<div class="container-scroller d-flex align-items-center justify-content-center"
    style="min-height: 100vh; border: 1px solid #ddd;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-user-plus pe-2"></i> Cadastro</h4>
                    <p class="card-description">Preencha seus dados</p>

                    <form class="forms-sample" wire:submit.prevent="cadastrar">
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="nome"><i class="fas fa-user pe-2"></i> Nome</label>
                                    <input type="text" class="form-control" id="nome" wire:model="nome"
                                        placeholder="Seu Nome" >
                                    @error('nome')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="sobrenome"><i class="fas fa-user pe-2"></i> Sobrenome</label>
                                    <input type="text" class="form-control" id="sobrenome" wire:model="sobrenome"
                                        placeholder="Seu Sobrenome" >
                                    @error('sobrenome')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="email"><i class="fas fa-envelope pe-2"></i> Email</label>
                                    <input type="email" class="form-control" id="email" wire:model="email"
                                        placeholder="Seu Email" >
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="telefone"><i class="fas fa-phone pe-2"></i> Telefone</label>
                                    <input type="text" class="form-control" id="telefone" wire:model="telefone"
                                        placeholder="Seu Telefone" >
                                    @error('telefone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="senha"><i class="fas fa-key pe-2"></i> Senha</label>
                                    <input type="password" class="form-control" id="senha" wire:model="password"
                                        placeholder="Sua Senha" >
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center">
                    <i class="fas fa-user-plus"></i> <a href="{{ route('usuario.logar') }}"
                        style="text-decoration: none">Já tem uma conta?</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-scroller d-flex align-items-center justify-content-center" style="min-height: 100vh; border: 1px solid #ddd;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-user-plus pe-2"></i> Cadastro</h4>
                    <p class="card-description">
                        Preencha seus dados
                    </p>
                    <form class="forms-sample" wire:submit.prevent="cadastrar">
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name"><i class="fas fa-user pe-2"></i> Nome</label>
                                    <input type="text" class="form-control" id="name" wire:model="name" placeholder="Seu Nome" required>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="sobrenome"><i class="fas fa-user pe-2"></i> Sobrenome</label>
                                    <input type="text" class="form-control" id="sobrenome" wire:model="sobrenome" placeholder="Seu Sobrenome" required>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="email"><i class="fas fa-envelope pe-2"></i> Email</label>
                                    <input type="email" class="form-control" id="email" wire:model="email" placeholder="Seu Email" required>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="telefone"><i class="fas fa-phone pe-2"></i> Telefone</label>
                                    <input type="text" class="form-control" id="telefone" wire:model="telefone" placeholder="Seu Telefone" required>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="senha"><i class="fas fa-key pe-2"></i> Senha</label>
                                    <input type="password" class="form-control" id="senha" wire:model="password" placeholder="Sua Senha" required>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="tipo"><i class="fas fa-user-shield pe-2"></i> Tipo de Acesso</label>
                                    <select class="form-control" id="tipo" wire:model="id_acesso" required>
                                        <option value="1">Cliente</option>
                                        <option value="2">Admin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-6" id="dados_cliente" style="display:none;">
                                <div class="form-group">
                                    <label for="nome_cliente"><i class="fas fa-user pe-2"></i> Nome do Cliente</label>
                                    <input type="text" class="form-control" id="nome_cliente" wire:model="nome_cliente" placeholder="Nome do Cliente">
                                </div>
                            </div>

                            <div class="col-12 col-md-6" id="sobrenome_cliente" style="display:none;">
                                <div class="form-group">
                                    <label for="sobrenome_cliente"><i class="fas fa-user pe-2"></i> Sobrenome do Cliente</label>
                                    <input type="text" class="form-control" id="sobrenome_cliente" wire:model="sobrenome_cliente" placeholder="Sobrenome do Cliente">
                                </div>
                            </div>

                            <div class="col-12 col-md-6" id="dados_admin" style="display:none;">
                                <div class="form-group">
                                    <label for="nome_admin"><i class="fas fa-user pe-2"></i> Nome do Admin</label>
                                    <input type="text" class="form-control" id="nome_admin" wire:model="nome_admin" placeholder="Nome do Admin">
                                </div>
                            </div>

                            <div class="col-12 col-md-6" id="sobrenome_admin" style="display:none;">
                                <div class="form-group">
                                    <label for="sobrenome_admin"><i class="fas fa-user pe-2"></i> Sobrenome do Admin</label>
                                    <input type="text" class="form-control" id="sobrenome_admin" wire:model="sobrenome_admin" placeholder="Sobrenome do Admin">
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center">
                    <i class="fas fa-user-plus"></i> <a href="{{route('usuario.logar')}}" style="text-decoration: none">Já tem uma conta</a>
                </div>
            </div>
        </div>
    </div>
</div>

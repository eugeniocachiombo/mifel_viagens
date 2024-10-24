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
                                                <h4 class="card-title"><i class="fas fa-tag pe-2"></i> Actualizar Categoria de Preço</h4>
                                                <p class="card-description">Preencha os dados da categoria de preço</p>

                                                <form class="forms-sample" wire:submit.prevent="actualizar">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="nome_catPreco"><i class="fas fa-tag pe-2"></i> Nome da Categoria</label>
                                                                <input type="text" class="form-control" id="nome_catPreco" wire:model="nome_catPreco" placeholder="Nome da Categoria">
                                                                @error('nome_catPreco')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="desc_catPreco"><i class="fas fa-info-circle pe-2"></i> Descrição da Categoria</label>
                                                                <input type="text" class="form-control" id="desc_catPreco" wire:model="desc_catPreco" placeholder="Descrição da Categoria">
                                                                @error('desc_catPreco')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="faixa_idade"><i class="fas fa-child pe-2"></i> Faixa de Idade</label>
                                                                <input type="text" class="form-control" id="faixa_idade" wire:model="faixa_idade" placeholder="Faixa de Idade">
                                                                @error('faixa_idade')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="preco_catPreco"><i class="fas fa-money-bill pe-2"></i> Preço</label>
                                                                <input type="text" 
                                                                    class="form-control" id="preco_catPreco"
                                                                    wire:model="preco_catPreco"
                                                                    onkeydown="formatarCampoPreco(this.value)"
                                                                    placeholder="Preço">
                                                                @error('preco_catPreco')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <script>
                                                                function formatarCampoPreco(valor) {
                                                                    $(document).ready(function() {
                                                                        $('#preco_catPreco').mask('000.000.000.000.000,00', {
                                                                            reverse: true
                                                                        });
                                                                    });
                                                                }
                                                            </script>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="status_catPreco"><i class="fas fa-toggle-on pe-2"></i> Status da Categoria</label>
                                                                <select class="form-control" id="status_catPreco" wire:model="status_catPreco">
                                                                    <option class="d-none">Selecione</option>
                                                                    <option value="1">Ativo</option>
                                                                    <option value="0">Inativo</option>
                                                                </select>
                                                                @error('status_catPreco')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="col-5">
                                                                <button type="submit" class="btn btn-primary text-light p-3" style="width: 100%;">Actualizar</button>
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

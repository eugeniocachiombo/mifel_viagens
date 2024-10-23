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
                                                <h4 class="card-title"><i class="fas fa-utensils pe-2"></i> Cadastro de Pacote de Refeição</h4>
                                                <p class="card-description">Preencha os dados do pacote de refeição</p>

                                                <form class="forms-sample" wire:submit.prevent="cadastrar">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="titulo_pacoteRefeicao"><i class="fas fa-tag pe-2"></i> Título do Pacote de Refeição</label>
                                                                <input type="text" class="form-control" id="titulo_pacoteRefeicao" wire:model="titulo_pacoteRefeicao"
                                                                    placeholder="Título do Pacote de Refeição">
                                                                @error('titulo_pacoteRefeicao')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="desc_pacoteRefeicao"><i class="fas fa-info-circle pe-2"></i> Descrição do Pacote de Refeição</label>
                                                                <input type="text" class="form-control" id="desc_pacoteRefeicao" wire:model="desc_pacoteRefeicao"
                                                                    placeholder="Descrição do Pacote de Refeição">
                                                                @error('desc_pacoteRefeicao')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="preco_pacoteRefeicao"><i class="fas fa-money-bill pe-2"></i> Preço do Pacote de Refeição</label>
                                                                <input onkeydown="formatarCampoPreco(this.value)" type="text" class="form-control" id="preco_pacoteRefeicao" wire:model="preco_pacoteRefeicao"
                                                                    placeholder="Preço do Pacote de Refeição">
                                                                @error('preco_pacoteRefeicao')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <script>
                                                                function formatarCampoPreco(valor) {
                                                                    $(document).ready(function() {
                                                                        $('#preco_pacoteRefeicao').mask('000.000.000.000.000,00', {
                                                                            reverse: true
                                                                        });
                                                                    });
                                                                }
                                                            </script>
                                                        </div>

                                                        <div>
                                                            <div class="col-5">
                                                                <button type="submit" class="btn btn-primary text-light p-3" style="width: 100%;">Cadastrar</button>
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

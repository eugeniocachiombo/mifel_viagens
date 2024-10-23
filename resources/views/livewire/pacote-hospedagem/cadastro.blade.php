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
                                                <h4 class="card-title"><i class="fas fa-plane pe-2"></i> Cadastro de
                                                    Pacote de Hospedagem</h4>
                                                <p class="card-description">Preencha os dados do pacote de hospedagem
                                                </p>

                                                <form class="forms-sample" wire:submit.prevent="cadastrar">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="titulo_pacoteHospedagem"><i
                                                                        class="fas fa-heading pe-2"></i> Título do Pacote de
                                                                    Hospedagem</label>
                                                                <input type="text" class="form-control"
                                                                    id="titulo_pacoteHospedagem"
                                                                    wire:model="titulo_pacoteHospedagem"
                                                                    placeholder="Título do Pacote de Hospedagem">
                                                                @error('titulo_pacoteHospedagem')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="desc_pacoteHospedagem"><i
                                                                        class="fas fa-info-circle pe-2"></i> Descrição
                                                                    do Pacote de Hospedagem</label>
                                                                <input type="text" class="form-control"
                                                                    id="desc_pacoteHospedagem"
                                                                    wire:model="desc_pacoteHospedagem"
                                                                    placeholder="Descrição do Pacote de Hospedagem">
                                                                @error('desc_pacoteHospedagem')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="preco_pacoteHospedagem"><i
                                                                        class="fas fa-money-bill pe-2"></i> Preço do
                                                                    Pacote de Hospedagem</label>
                                                                <input type="text" 
                                                                    class="form-control" id="preco_pacoteHospedagem"
                                                                    wire:model="preco_pacoteHospedagem"
                                                                    onkeydown="formatarCampoPreco(this.value)"
                                                                    placeholder="Preço do Pacote de Hospedagem">
                                                                @error('preco_pacoteHospedagem')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <script>
                                                                function formatarCampoPreco(valor) {
                                                                    $(document).ready(function() {
                                                                        $('#preco_pacoteHospedagem').mask('000.000.000.000.000,00', {
                                                                            reverse: true
                                                                        });
                                                                    });
                                                                }
                                                            </script>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="max_qtd_pessoas"><i
                                                                        class="fas fa-users pe-2"></i> Máxima Quantidade
                                                                    de Pessoas</label>
                                                                <input type="number" class="form-control"
                                                                    id="max_qtd_pessoas" wire:model="max_qtd_pessoas"
                                                                    placeholder="Máxima Quantidade de Pessoas">
                                                                @error('max_qtd_pessoas')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-5">
                                                            <button type="submit"
                                                                class="btn btn-primary text-light p-3"
                                                                style="width: 100%;">Cadastrar</button>
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

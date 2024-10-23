<div class="main-panel">
    <div class="content-wrapper">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-plane pe-2"></i> Actualizar Pacote de Hospedagem</h4>
                <form class="forms-sample" wire:submit.prevent="actualizar">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="titulo_pacoteHospedagem"><i class="fas fa-heading pe-2"></i> Título do Pacote de
                                    Hospedagem</label>
                                <input type="text" class="form-control" id="titulo_pacoteHospedagem"
                                    wire:model="titulo_pacoteHospedagem" placeholder="Título do Pacote de Hospedagem">
                                @error('titulo_pacoteHospedagem')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="desc_pacoteHospedagem"><i class="fas fa-info-circle pe-2"></i> Descrição do
                                    Pacote de Hospedagem</label>
                                <input type="text" class="form-control" id="desc_pacoteHospedagem"
                                    wire:model="desc_pacoteHospedagem" placeholder="Descrição do Pacote de Hospedagem">
                                @error('desc_pacoteHospedagem')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="preco_pacoteHospedagem"><i class="fas fa-money-bill pe-2"></i> Preço do
                                    Pacote de Hospedagem</label>
                                <input onkeydown="formatarCampoPreco(this.value)" type="text" 
                                    class="form-control" id="preco_pacoteHospedagem" wire:model="preco_pacoteHospedagem"
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
                                <label for="max_qtd_pessoas"><i class="fas fa-users pe-2"></i> Máxima Quantidade de
                                    Pessoas</label>
                                <input type="number" class="form-control" id="max_qtd_pessoas"
                                    wire:model="max_qtd_pessoas" placeholder="Máxima Quantidade de Pessoas">
                                @error('max_qtd_pessoas')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="status_pacoteHospedagem"><i class="fas fa-toggle-on pe-2"></i> Status do
                                    Pacote de Hospedagem</label>
                                <select class="form-control" id="status_pacoteHospedagem"
                                    wire:model="status_pacoteHospedagem">
                                    <option class="d-none">Selecione</option>
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>
                                @error('status_pacoteHospedagem')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary text-light"
                                    style="width: 100%;">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

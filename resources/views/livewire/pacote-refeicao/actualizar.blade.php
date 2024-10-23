<div class="main-panel">
    <div class="content-wrapper">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-utensils pe-2"></i> Actualizar Pacote de Refeição</h4>
                <form class="forms-sample" wire:submit.prevent="actualizar">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="titulo_pacoteRefeicao"><i class="fas fa-heading pe-2"></i> Título do Pacote de Refeição</label>
                                <input type="text" class="form-control" id="titulo_pacoteRefeicao" wire:model="titulo_pacoteRefeicao" placeholder="Título do Pacote de Refeição">
                                @error('titulo_pacoteRefeicao')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="desc_pacoteRefeicao"><i class="fas fa-info-circle pe-2"></i> Descrição do Pacote de Refeição</label>
                                <input type="text" class="form-control" id="desc_pacoteRefeicao" wire:model="desc_pacoteRefeicao" placeholder="Descrição do Pacote de Refeição">
                                @error('desc_pacoteRefeicao')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="preco_pacoteRefeicao"><i class="fas fa-money-bill pe-2"></i> Preço do Pacote de Refeição</label>
                                <input 
                                onkeydown="formatarCampoPreco(this.value)"
                                type="text" class="form-control" id="preco_pacoteRefeicao" wire:model="preco_pacoteRefeicao" placeholder="Preço do Pacote de Refeição">
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

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="status_pacoteRefeicao"><i class="fas fa-toggle-on pe-2"></i> Status do Pacote de Refeição</label>
                                <select class="form-control" id="status_pacoteRefeicao" wire:model="status_pacoteRefeicao">
                                    <option class="d-none">Selecione</option>
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>
                                @error('status_pacoteRefeicao')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary text-light" style="width: 100%;">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

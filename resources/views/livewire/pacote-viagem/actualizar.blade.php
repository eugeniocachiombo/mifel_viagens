<div class="main-panel">
    <div class="content-wrapper">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-plane pe-2"></i> Actualizar Pacote de Viagem</h4>
                <form class="forms-sample" wire:submit.prevent="actualizar">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="titulo_pacote"><i class="fas fa-tag pe-2"></i> Título do Pacote</label>
                                <input type="text" class="form-control" id="titulo_pacote" wire:model="titulo_pacote" placeholder="Título do Pacote">
                                @error('titulo_pacote')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="desc_pacote"><i class="fas fa-info-circle pe-2"></i> Descrição do Pacote</label>
                                <input type="text" class="form-control" id="desc_pacote" wire:model="desc_pacote" placeholder="Descrição do Pacote">
                                @error('desc_pacote')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="preco_pacote"><i class="fas fa-money-bill pe-2"></i> Preço do Pacote</label>
                                <input type="number" step="0.01" class="form-control" id="preco_pacote" wire:model="preco_pacote" placeholder="Preço do Pacote">
                                @error('preco_pacote')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="id_destino"><i class="fas fa-map pe-2"></i> Destino</label>
                                <select class="form-control" id="id_destino" wire:model="id_destino">
                                    <option value="">Selecione um Destino</option>
                                    @foreach ($destinos as $destino)
                                        <option value="{{ $destino->id }}">{{ $destino->nome_destino }}</option>
                                    @endforeach
                                </select>
                                @error('id_destino')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="id_tipoviagem"><i class="fas fa-plane pe-2"></i> Tipo de Viagem</label>
                                <select class="form-control" id="id_tipoviagem" wire:model="id_tipoviagem">
                                    <option value="">Selecione um Tipo de Viagem</option>
                                    @foreach ($tiposViagem as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->nome_tipoViagem }}</option>
                                    @endforeach
                                </select>
                                @error('id_tipoviagem')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="status_pacote"><i class="fas fa-toggle-on pe-2"></i> Status do Pacote</label>
                                <select class="form-control" id="status_pacote" wire:model="status_pacote">
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>
                                @error('status_pacote')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="max_qtd_pessoas"><i class="fas fa-users pe-2"></i> Máxima Quantidade de Pessoas</label>
                                <input type="number" class="form-control" id="max_qtd_pessoas" wire:model="max_qtd_pessoas" placeholder="Máxima Quantidade de Pessoas">
                                @error('max_qtd_pessoas')
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


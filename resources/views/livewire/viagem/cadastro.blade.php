<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="container-scroller d-flex align-items-center justify-content-center"
                                style="min-height: 100vh; ">
                                <div class="container d-flex justify-content-center align-items-center">
                                    <div class="col-10 col-md-12 grid-margin ">
                                        <div class="card bg-dark text-light">
                                            <div class="card-body">
                                                <h1 class="text-center"><i class="fas fa-tag pe-2"></i> Pacotes</h1>
                                                <h2 class="text-center mt-5 mb-5">Escolha o seu pacote de viagens ideal
                                                </h2>

                                                {{--Pacote Viagem --}}
                                                <div class="d-flex">
                                                    <div class="col-6">
                                                        <div class="col bg-dark text-white mb-3">
                                                            <label class="ps-2 "><i class="fas fa-tag"></i> Pacotes de
                                                                Viagem</label>
                                                        </div>
    
                                                        <div class="form-group">
                                                            <label for="pacoteEscolhido"><i class="fas fa-tag pe-2"></i>
                                                                Selecionar Pacote</label>
                                                            <select class="form-control" id="pacoteEscolhido"
                                                                wire:model="pacoteEscolhido" wire:change="autoPreencher">
                                                                <option class="d-none">Selecione um Pacote</option>
                                                                @foreach ($pacotesViagem as $item)
                                                                    <option value="{{$item->id}}">
                                                                    {{$item->titulo_pacote}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('pacoteEscolhido')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
    
                                                    <div class="col-6 d-flex justify-content-center align-items-center" style="font-size: 30px">
                                                        Preço: {{ number_format($precoFinal, 2, ',', '.') }} kz
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Formulario --}}
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <form class="forms-sample" wire:submit.prevent="cadastrar">
                                                    <div class="row">
                                                        {{-- Destinos --}}
                                                        <div class="col-6">
                                                            <div class="col bg-dark text-white mb-3">
                                                                <label class="ps-2 "><i class="fas fa-tag"></i> Destino
                                                                    da
                                                                    Viagem</label>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="cod_destino"><i
                                                                            class="fas fa-map-marker-alt pe-2"></i>
                                                                        Selecionar Destino</label>
                                                                    <select class="form-select" id="cod_destino"
                                                                        wire:model="cod_destino">
                                                                        <option class="d-none">Selecione um Destino
                                                                        </option>
                                                                        @foreach ($destinos as $destino)
                                                                            <option value="{{ $destino->id }}">
                                                                                {{ $destino->nome_destino }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('cod_destino')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Tipo de viagem --}}
                                                        <div class="col-6">
                                                            <div class="col bg-dark text-white mb-3">
                                                                <label class="ps-2"><i class="fas fa-tag"></i> Tipo de
                                                                    Viagem</label>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="cod_tipoviagem"><i
                                                                            class="fas fa-flag pe-2"></i> Selecionar
                                                                        Tipo de Viagem</label>
                                                                    <select class="form-select"
                                                                        id="cod_tipoviagem"
                                                                        wire:model="cod_tipoviagem">
                                                                        <option class="d-none">Selecione um Tipo de
                                                                            Viagem</option>
                                                                        @foreach ($tipoviagens as $tipoviagem)
                                                                            <option value="{{ $tipoviagem->id }}">
                                                                                {{ $tipoviagem->nome_tipoViagem }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('cod_tipoviagem')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="row g-3">
                                                        <div class="col-12 bg-dark text-white">
                                                            <label><i class="fas fa-tag pe-2"></i> Itinerário</label>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="dia_etinerario"><i
                                                                        class="fas fa-calendar-day pe-2"></i> Dia do
                                                                    Itinerário</label>
                                                                <input type="number" class="form-control"
                                                                    id="dia_etinerario" wire:model="dia_etinerario"
                                                                    placeholder="Dia do Itinerário" min="1">
                                                                @error('dia_etinerario')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="desc_etinerario"><i
                                                                        class="fas fa-info-circle pe-2"></i> Descrição
                                                                    do Itinerário</label>
                                                                <textarea class="form-control" id="desc_etinerario" wire:model="desc_etinerario"
                                                                    placeholder="Descrição do Itinerário" rows="4"></textarea>
                                                                @error('desc_etinerario')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="row g-3">
                                                        <div class="col-12 bg-dark text-white">
                                                            <label><i class="fas fa-tag pe-2"></i> Viagem</label>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="titulo_viagens"><i
                                                                        class="fas fa-tag pe-2"></i> Título da
                                                                    Viagem</label>
                                                                <input type="text" class="form-control"
                                                                    id="titulo_viagens" wire:model="titulo_viagens"
                                                                    placeholder="Título da Viagem">
                                                                @error('titulo_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="desc_viagens"><i
                                                                        class="fas fa-info-circle pe-2"></i> Descrição
                                                                    da Viagem</label>
                                                                <textarea class="form-control" id="desc_viagens" wire:model="desc_viagens" placeholder="Descrição da Viagem"
                                                                    rows="4"></textarea>
                                                                @error('desc_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="cod_dificuldade"><i
                                                                        class="fas fa-list-alt pe-2"></i>
                                                                    Dificuldade</label>
                                                                <select class="form-control" id="cod_dificuldade"
                                                                    wire:model="cod_dificuldade">
                                                                    <option class="d-none">Selecione a Dificuldade
                                                                    </option>
                                                                    @foreach ($dificuldades as $dificuldade)
                                                                        <option value="{{ $dificuldade->id }}">
                                                                            {{ $dificuldade->nome_dificuldadeViagem }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                @error('cod_dificuldade')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="duracao_viagens"><i
                                                                        class="fas fa-clock pe-2"></i> Duração
                                                                    (dias)</label>
                                                                <input type="number" class="form-control"
                                                                    id="duracao_viagens" wire:model="duracao_viagens"
                                                                    placeholder="Duração da Viagem" min="1">
                                                                @error('duracao_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="vagas_viagens"><i
                                                                        class="fas fa-users pe-2"></i> Vagas</label>
                                                                <input type="number" class="form-control"
                                                                    id="vagas_viagens" wire:model="vagas_viagens"
                                                                    placeholder="Número de Vagas" min="1">
                                                                @error('vagas_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="preco_viagens"><i
                                                                        class="fas fa-money-bill-wave pe-2"></i>
                                                                    Preço</label>
                                                                <input type="text" class="form-control"
                                                                    id="preco_viagens" wire:model="preco_viagens"
                                                                    placeholder="Preço da Viagem" step="0.01">
                                                                @error('preco_viagens')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary text-light"
                                                            style="width: 100%;">Cadastrar</button>
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

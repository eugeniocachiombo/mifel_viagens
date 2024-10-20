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
                                        <div class="card bg-dark text-light" style="height: auto">
                                            <div class="card-body">
                                                <h1 class="text-center"><i class="fas fa-tag pe-2"></i> Pacotes</h1>
                                                <h2 class="text-center mt-5 mb-5">Escolha o seu pacote de viagens ideal
                                                </h2>

                                                {{-- Pacote Viagem --}}
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="col bg-dark text-white mb-3">
                                                            <label class="ps-2 "><i class="fas fa-tag"></i> Pacotes de
                                                                Viagem</label>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="pacoteEscolhido"><i class="fas fa-tag pe-2"></i>
                                                                Selecionar Pacote</label>
                                                            <select class="form-control" id="pacoteEscolhido"
                                                                wire:model="pacoteEscolhido"
                                                                wire:change="autoPreencher">
                                                                <option class="d-none">Selecione um Pacote</option>
                                                                @foreach ($pacotesViagem as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->titulo_pacote }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('pacoteEscolhido')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center"
                                                        style="font-size: 30px">
                                                        Preço: {{ number_format($precoFinal, 2, ',', '.') }} kz
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Formulario --}}
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <form class="forms-sample" wire:submit.prevent="cadastrar">
                                                
                                                    @include('livewire/viagem/inclusao-cadastro/destinos-tipoviagem')
                                                    <hr>
                                                    @include('livewire/viagem/inclusao-cadastro/itinerario')
                                                    <hr>
                                                    @include('livewire/viagem/inclusao-cadastro/hospedagem')
                                                    <hr>
                                                    @include('livewire/viagem/inclusao-cadastro/refeicao')
                                                    <hr>
                                                    @include('livewire/viagem/inclusao-cadastro/viagem')

                                                    <div class="col-6 col-md-3 mt-2">
                                                        <button type="submit" class="btn btn-primary text-light p-3 animated-button"
                                                            style="width: 100%; font-size: 16px">Cadastrar</button>
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

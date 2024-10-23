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
                                                <h1 class="text-center"><i class="fas fa-plane pe-2"></i> Formulário de viagem</h1>
                                                <h2 class="text-center mt-5 mb-5">Criar pacote de viagem</h2>
                                            </div>
                                        </div>

                                        {{-- Formulario --}}
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <form class="forms-sample" wire:submit.prevent="cadastrar">

                                                    @include('livewire/viagem/inclusao-cadastro/viagem')
                                                    <hr>
                                                    @include('livewire/viagem/inclusao-cadastro/destinos-tipoviagem')
                                                    <hr>
                                                    @include('livewire/viagem/inclusao-cadastro/itinerario')

                                                    <div class="col-12 col-md-3 mt-2">
                                                        <button type="submit"  class="btn btn-primary text-light p-3 animated-button"
                                                            style="width: 100%; font-size: 16px"> <i class="mdi mdi-cart d-none"></i> Cadastrar Viagem</button>
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

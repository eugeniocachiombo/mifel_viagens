<div class="main-panel">
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
        @livewire('pagina-inicial.classificacao')

        <div class="cd-flex justify-content-center flex-column bg-dark text-light p-5 shadow-lg">
            <div class="col-12">
                <h4 style="font-family: 'Arial', sans-serif;"></h4>
            </div>
            <div class="col d-flex justify-content-center mb-4">
                <h1 class="font-weight-bold d-none d-md-flex" style="font-family: 'Arial', sans-serif;">
                    <i class="fas fa-plane me-2"></i>
                    Conheça o Destino...
                </h1>

                <h2 class="font-weight-bold d-flex d-md-none" style="font-family: 'Arial', sans-serif;">
                    <i class="fas fa-plane me-2"></i>
                    Conheça o Destino...
                </h2>
            </div>

            @if (Auth::user() && Auth::user()->id_acesso == 1)
                <div class="col d-flex justify-content-center button-container">
                    <a href="{{ route('viagem.cadastrar') }}">
                        <button class="btn btn-primary text-white  ">
                            <i class="fas fa-tag me-2"></i>Criar Pacote
                        </button>
                    </a>
                </div>
            @else
                <div class="col d-flex justify-content-center button-container">
                    <a href="{{ route('reserva.reservar') }}">
                        <button class="btn btn-success text-white  ">
                            <i class="fas fa-bookmark me-2"></i> Reservar Pacote
                        </button>
                    </a>
                </div>
            @endif
        </div>

        <div class="col-12 bg-primary text-white text-center p-4 mb-4">
            <h1 style="font-family: fantasy; font-size: 2.5rem;">Destinos turísticos</h1>
            <p style="font-size: 1.2rem;">Explore as melhores opções para sua viagem!</p>
        </div>

        <div class="container mb-4">
            <div class="row p-2 ">
                @foreach ($destinos as $destino)
                    <div class="col-6 col-md-3 p-2 d-flex justify-content-center">
                        <div class="card" style="width: 12rem;">
                            <a href="{{ asset('storage/' . $destino->img_destino) }}">
                                <img src="{{ asset('storage/' . $destino->img_destino) }}"
                                    alt="{{ $destino->nome_destino }}" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <label class="card-title">{{ $destino->nome_destino }}</label>
                                <p class="card-text">{{ $destino->desc_destino }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-12 bg-primary text-white text-center p-4 mb-4">
        <h1 style="font-family: fantasy; font-size: 2.5rem;">Nossos Serviços</h1>
        <p style="font-size: 1.2rem;">Explore as melhores opções de serviço que temos
            disponíveis para si</p>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-6 col-md-3 p-2 d-flex justify-content-center">
                <div class="card text-center">
                    <i class="fas fa-plane-departure fa-3x p-3"></i>
                    <div class="card-body">
                        <h5 class="card-title">Reservas de Voos</h5>
                        <p class="card-text">Reserve seu voo facilmente.</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 p-2 d-flex justify-content-center">
                <div class="card text-center">
                    <i class="fas fa-hotel fa-3x p-3"></i>
                    <div class="card-body">
                        <h5 class="card-title">Hotéis</h5>
                        <p class="card-text">Encontre o hotel perfeito para sua estadia.</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 p-2 d-flex justify-content-center">
                <div class="card text-center">
                    <i class="fas fa-map fa-3x p-3"></i>
                    <div class="card-body">
                        <h5 class="card-title">Guias de Viagem</h5>
                        <p class="card-text">Explore as melhores dicas e roteiros.</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 p-2 d-flex justify-content-center">
                <div class="card text-center">
                    <i class="fas fa-suitcase fa-3x p-3"></i>
                    <div class="card-body">
                        <h5 class="card-title">Pacotes de Viagem</h5>
                        <p class="card-text">Pacotes exclusivos para você.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção Categoria de Preços -->
    <div class="bg-danger text-light text-center p-4 mt-4 mb-4">
        <h2 style="font-family: fantasy;">Categoria de Preços</h2>
        <p>Encontre opções para todos os orçamentos.</p>
    </div>

    <div class="mb-4 d-table d-md-flex col-12 bg-secondary p-4 ">
        <div class=" col-md-4 p-2">
            <div class="card text-center">
                <i class="fas fa-dollar-sign fa-3x p-3 text-danger"></i>
                <div class="card-body">
                    <h5 class="card-title text-danger">Econômico</h5>
                    <p class="card-text">Opções acessíveis para todos.</p>
                </div>
            </div>
        </div>

        <div class=" col-md-4 p-2">
            <div class="card text-center">
                <i class="fas fa-star fa-3x p-3 text-danger"></i>
                <div class="card-body">
                    <h5 class="card-title text-danger">Intermediário</h5>
                    <p class="card-text">Experiências confortáveis.</p>
                </div>
            </div>
        </div>

        <div class=" col-md-4 p-2">
            <div class="card text-center">
                <i class="fas fa-crown fa-3x p-3 text-danger"></i>
                <div class="card-body">
                    <h5 class="card-title text-danger">Luxo</h5>
                    <p class="card-text">Viva o melhor da vida.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card {
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card i {
        color: #007bff;
        /* Cor dos ícones */
    }

    .animated-button {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        transition: background-color 0.3s, transform 0.3s;
        animation: bounce 1.5s infinite;
    }

    .animated-button:hover {
        transform: scale(1.1);
        /* Aumenta um pouco ao passar o mouse */
    }

    @keyframes bounce {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    .button-container {
        display: flex;
        gap: 15px;
        /* Espaçamento entre os botões */
    }
</style>

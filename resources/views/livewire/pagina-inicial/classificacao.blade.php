<div class="row bg-secondary">
    @if(Auth::user())
    <div class="col-sm-12 d-flex flex-wrap justify-content-between mt-4">
        <div class="statistics-card">
            <i class="mdi mdi-map-marker icon"></i>
            <p class="statistics-title">Destinos</p>
            <h3 class="rate-percentage">{{ count($this->destinos) }}</h3>
            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
        </div>

        @if (Auth::user()->id_acesso == 1)
        <div class="statistics-card">
            <i class="mdi mdi-account icon"></i>
            <p class="statistics-title">Clientes</p>
            <h3 class="rate-percentage">{{ count($this->clientes) }}</h3>
            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
        </div>
        @endif

        <div class="statistics-card">
            <i class="mdi mdi-airplane icon"></i>
            <p class="statistics-title">Pacotes Disponíveis</p>
            <h3 class="rate-percentage">{{ count($this->viagens) }}</h3>
            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
        </div>

        <div class="statistics-card ">
            <i class="mdi mdi-bookmark icon"></i>
            <p class="statistics-title">Reservas</p>
            <h3 class="rate-percentage">{{ count($this->reservas) }}</h3>
            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.8%</span></p>
        </div>
    </div>
    @endif
</div>

<style>
    .statistics-card {
        background-color: rgba(25, 0, 255, 0.719); /* Fundo escuro */
        color: #fff; /* Texto branco */
        border-radius: 10px; /* Bordas arredondadas */
        padding: 20px; /* Espaçamento interno */
        margin: 10px; /* Margem externa */
        flex: 1; /* Flexível */
        text-align: center; /* Centralizar texto */
        transition: transform 0.3s; /* Efeito de transição */
    }

    .statistics-card:hover {
        transform: translateY(-5px); /* Levantar ao passar o mouse */
    }

    .statistics-title {
        font-size: 1.2rem; /* Tamanho do título */
        margin-bottom: 10px; /* Espaçamento abaixo do título */
    }

    .rate-percentage {
        font-size: 2rem; /* Tamanho da porcentagem */
        font-weight: bold; /* Negrito */
    }

    .text-success {
        color: #28a745; /* Cor para aumento */
    }

    .text-danger {
        color: #dc3545; /* Cor para diminuição */
    }
    
    .icon {
        font-size: 1.5rem; /* Tamanho dos ícones */
        margin-bottom: 10px; /* Espaçamento abaixo do ícone */
    }
</style>
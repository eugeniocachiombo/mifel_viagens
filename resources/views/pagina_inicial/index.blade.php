@include('inclusao.head')
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

<div class="container-scroller">
    @include('inclusao.header')
    <div class="container-fluid page-body-wrapper">
        @include('inclusao.menu')
        @livewire('pagina-inicial.conteudo-principal')
    </div>
    @include('inclusao.footer')
</div>

@include('inclusao.foot')

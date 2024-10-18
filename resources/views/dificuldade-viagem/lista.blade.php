@include('inclusao.head')

<div class="container-scroller">
    @include('inclusao.header')
    <div class="container-fluid page-body-wrapper">
        @include('inclusao.menu')
        @livewire('dificuldade-viagem.lista')
    </div>
    @include('inclusao.footer')
</div>

@include('inclusao.foot')

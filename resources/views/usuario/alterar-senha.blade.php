@include('inclusao.head')
<style>
    body{
        background: #cbcbcc;
    }
</style>

<div class="container-scroller">
    @include('inclusao.header')
    <div class="container-fluid page-body-wrapper">
        @include('inclusao.menu')
        @livewire('usuario.alterar-senha')
    </div>
    @include('inclusao.footer')
</div>

@include('inclusao.foot')
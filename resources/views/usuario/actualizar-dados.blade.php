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
        @livewire('usuario.actualizar-dados', ["id" => $id])
    </div>
    @include('inclusao.footer')
</div>

@include('inclusao.foot')
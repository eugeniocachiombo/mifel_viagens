@include('inclusao.head')
<style>
    body {
        background: #cbcbcc;
    }
</style>

<div class="container-scroller">
    <div class="container d-flex justify-content-center align-items-center page-body-wrapper">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                @livewire('usuario.login')
            </div>
        </div>
    </div>
</div>

@include('inclusao.foot')

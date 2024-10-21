<div class="row">
    <div class="col-sm-12">
        <div class="statistics-details d-flex align-items-center justify-content-between">
            <div>
                <p class="statistics-title">Destinos</p>
                <h3 class="rate-percentage">{{ count($this->destinos) }}</h3>
                <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
            </div>
            @if (Auth::user()->id_acesso == 1)
                <div>
                    <p class="statistics-title">Clientes</p>
                    <h3 class="rate-percentage">{{ count($this->clientes) }}</h3>
                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                </div>
            @endif
            <div>
                <p class="statistics-title">Viagens</p>
                <h3 class="rate-percentage">{{ count($this->viagens) }}</h3>
                <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
            </div>
            <div class="d-none d-md-block">
                <p class="statistics-title">Reservas</p>
                <h3 class="rate-percentage">{{ count($this->reservas) }}</h3>
                <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
            </div>
        </div>
    </div>
</div>

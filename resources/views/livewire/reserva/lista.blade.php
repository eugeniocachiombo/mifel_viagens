<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-list pe-2"></i> Listagem de Reservas</h4>
        <div class="table-responsive mt-4">
            <table id="minhaTabela" class="table table-bordered datatablePT table-hover">
                <thead class="bg-dark text-light">
                    <tr class="text-center">
                        <th>Cliente</th>
                        <th>Código da Reserva</th>
                        <th>Status</th>
                        <th>Pacote de Viagem</th>
                        <th>Data da Reserva</th>
                        <th>Valor Total</th>
                        @if (Auth::user()->id_acesso == 1)
                            <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservas as $reserva)
                        @php
                            $usuario = Auth::user();
                            $pacoteViagem = $this->buscarViagem($reserva->cod_viagem);
                            $data = $this->formatarData($reserva->data_resevada);
                        @endphp
                        <tr class="border text-center">
                            <td class="border">{{ $usuario->name }}</td>
                            <td class="border">{{ $reserva->cod_reserva }}</td>
                            <td class="border">{{ $reserva->status_reservas }}</td>
                            <td class="border">{{ $pacoteViagem->titulo_viagem }}</td>
                            <td class="border">{{ $data }}</td>
                            <td class="border">
                                <h6 class="text-dark">
                                    <b>{{ number_format($reserva->total_reserva, 2, ',', '.') }} kz</b>
                                </h6>
                            </td>
                            @if (Auth::user()->id_acesso == 1)
                                <td class="text-center border">
                                    <button class="btn btn-success btn-sm"
                                        wire:click.prevent='confirmar({{ $reserva->id }})'>
                                        <i class="fas fa-check"></i> Confirmar
                                    </button>
                                    &nbsp;
                                    <button class="btn btn-danger btn-sm"
                                        wire:click.prevent='cancelar({{ $reserva->id }})'>
                                        <i class="fas fa-times"></i> Cancelar
                                    </button>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
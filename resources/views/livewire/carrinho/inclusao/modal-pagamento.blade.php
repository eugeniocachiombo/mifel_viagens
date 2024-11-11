<div class="modal fade" id="pagamentoModal" tabindex="-1" aria-labelledby="pagamentoModalLabel" aria-hidden="true"
    wire:ignore>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="text-end border d-flex justify-content-between align-items-center">
                <span class="text-primary ps-3">@include('inclusao.logo')</span>
                <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <form class="">
                        <div class="row g-3">
                            <div class="col-12 text-primary">
                                <h3><i class="fas fa-credit-card"></i> Validação System-Bank</h3>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="numero"><i class="fas fa-keyboard"></i> Número: </label>
                                    <input type="text" class="form-control" id="numero" wire:model="numero"
                                        placeholder="Digite o número do cartão">
                                    @error('numero')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="codigo"><i class="fas fa-lock pe-2"></i>Código:</label>
                                    <input type="password" class="form-control" id="codigo" wire:model="codigo"
                                        placeholder="Digite o código">
                                    @error('codigo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col">
                                <button class="btn btn-primary btn-lg me-2 p-3"
                                    wire:click.prevent='confirmar({{ $carrinho->id }})'>
                                    Confirmar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

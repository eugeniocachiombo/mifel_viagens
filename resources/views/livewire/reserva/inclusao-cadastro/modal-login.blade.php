<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" wire:ignore>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="text-end border d-flex justify-content-between align-items-center">
                <span class="text-primary ps-3">@include('inclusao.logo')</span>
                <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    @include('livewire/reserva/inclusao-cadastro/login')
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function() {
        Livewire.on('fecharModal', function(data) {
            $('#loginModal').modal('hide');
        });
    });
</script>

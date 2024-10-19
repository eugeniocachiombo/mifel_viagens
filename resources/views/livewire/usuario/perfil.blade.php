<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="card-title"><i class="fas fa-user pe-2"></i> Dados do Usuário</h4>
        <div class="card mt-4">
            <div class="card-body">
                <div class="text-center mb-3">
                    @if ($foto)
                        <a href="{{ asset('storage/' . $foto) }}">
                            <img src="{{ asset('storage/' . $foto) }}" alt="Foto de Perfil"
                                class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        </a>
                    @else
                        <img class="img-fluid rounded-circle" style="width: 150px; height: 150px;"
                            src="{{ asset('assets/images/faces/empty.jpg') }}" alt="Foto de Perfil">
                    @endif

                    <!-- Ícone de Carregar Foto -->
                    <div class="mt-2">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadPhotoModal">
                            <i class="fas fa-upload"></i> Carregar Foto
                        </button>
                    </div>
                </div>

                <!-- Modal para Carregar Foto -->
                <div class="modal fade" id="uploadPhotoModal" tabindex="-1" aria-labelledby="uploadPhotoModalLabel"
                    aria-hidden="true" wire:ignore>
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="uploadPhotoModalLabel">Carregar Foto de Perfil</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if (session()->has('message'))
                                    <div class="alert alert-success">{{ session('message') }}</div>
                                @endif
                                <form wire:submit.prevent="uploadPhoto">
                                    <div class="mb-3">
                                        <input type="file" class="form-control" wire:model="novaFoto"
                                            accept="image/*" required>
                                        @error('novaFoto')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row mb-2">
                    <div class="col-3"><strong>Nome Completo:</strong></div>
                    <div class="col-9">{{ $nome }} {{ $sobrenome }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-3"><strong>Email:</strong></div>
                    <div class="col-9">{{ $email }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-3"><strong>Telefone:</strong></div>
                    <div class="col-9">{{ $telefone }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-3"><strong>Tipo de Usuário:</strong></div>
                    <div class="col-9">{{ $tipoUsuario }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

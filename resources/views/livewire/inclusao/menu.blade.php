<div style="background: #f4f5f7" class="border">
    <nav style="background: #f4f5f7" class="sidebar sidebar-offcanvas pt-4" id="sidebar" >
        <ul class="nav" >
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Painel</span>
                </a>
            </li>
    
            <li class="nav-item nav-category">Dados Pessoais</li>
            @if (Auth::user())
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-account"></i>
                        <span class="menu-title">Perfil</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('usuario.perfil', Auth::user()->id) }}">Ver
                                    Perfil</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('usuario.actualizar.dados', Auth::user()->id) }}">Actualizar Dados</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('usuario.alterar.senha') }}">Alterar
                                    Senha</a>
                            </li>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('usuario.sair') }}">Sair</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-account"></i>
                        <span class="menu-title">Usuário</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('usuario.logar') }}">Logar</a>
                            </li>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('usuario.cadastrar') }}">Cadastrar</a>
                </li>
            @endif
        </ul>
        </li>
    
        @if (Auth::user())
            @if (Auth::user()->id_acesso == 1)
                <li class="nav-item nav-category">Pacotes</li>
    
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#viagens" aria-expanded="false"
                        aria-controls="viagens">
                        <i class="menu-icon mdi mdi-earth"></i>
                        <span class="menu-title">Pacote de Viagem</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="viagens">
                        <ul class="nav flex-column sub-menu">
    
                            <li class="nav-item"><a class="nav-link" href="{{ route('viagem.cadastrar') }}">Criar Pacote</a>
                            </li>
    
                            <li class="nav-item"><a class="nav-link" href="{{ route('viagem.lista') }}">Listar</a></li>
                        </ul>
                    </div>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#pacoterefeicao" aria-expanded="false"
                        aria-controls="pacoterefeicao">
                        <i class="menu-icon mdi mdi-food"></i>
                        <span class="menu-title">Pacote de Refeição</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="pacoterefeicao">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('pacote.refeicao.cadastrar') }}">Criar
                                    Pacote</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('pacote.refeicao.lista') }}">Listar</a>
                            </li>
                        </ul>
                    </div>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#pacotehospedagem" aria-expanded="false"
                        aria-controls="pacotehospedagem">
                        <i class="menu-icon mdi mdi-hotel"></i>
                        <span class="menu-title">Pacote de Hospedagem</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="pacotehospedagem">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('pacote.hospedagem.cadastrar') }}">Criar Pacote</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('pacote.hospedagem.lista') }}">Listar</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
    
            <!-- Novos itens com submenus CRUD -->
            <li class="nav-item nav-category">Actividades e Viagens</li>
            @if (Auth::user()->id_acesso == 1)
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#clientes" aria-expanded="false"
                        aria-controls="clientes">
                        <i class="menu-icon mdi mdi-account-group"></i>
                        <span class="menu-title">Clientes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="clientes">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('cliente.lista') }}">Listar</a></li>
                        </ul>
                    </div>
                </li>
            @endif
            
            @if (Auth::user()->id_acesso == 2)
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#reservas" aria-expanded="false"
                    aria-controls="reservas">
                    <i class="menu-icon mdi mdi-calendar-check"></i>
                    <span class="menu-title">Reservas</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="reservas">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{ route('reserva.reservar') }}">Reservar</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('reserva.lista') }}">Listar</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
    
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#actividades" aria-expanded="false"
                    aria-controls="actividades">
                    <i class="menu-icon mdi mdi-format-list-bulleted"></i>
                    <span class="menu-title">Actividades</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="actividades">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('actividades.cadastrar') }}">Adicionar</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('actividades.lista') }}">Listar</a>
                        </li>
                    </ul>
                </div>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#catpreco" aria-expanded="false"
                    aria-controls="catpreco">
                    <i class="menu-icon mdi mdi-tag"></i>
                    <span class="menu-title">Categoria de Preço</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="catpreco">
                    <ul class="nav flex-column sub-menu">
                        @if (Auth::user()->id_acesso == 1)
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('cat.preco.cadastrar') }}">Cadastrar</a>
                            </li>
                        @endif
                        <li class="nav-item"><a class="nav-link" href="{{ route('cat.preco.lista') }}">Listar</a>
                        </li>
                    </ul>
                </div>
            </li>
    
            @if (Auth::user()->id_acesso == 1)
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#tipoViagem" aria-expanded="false"
                        aria-controls="tipoViagem">
                        <i class="menu-icon mdi mdi-airplane-takeoff"></i>
                        <span class="menu-title">Tipo de Viagem</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tipoViagem">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('tipo.viagem.cadastrar') }}">Cadastrar</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('tipo.viagem.lista') }}">Listar</a>
                            </li>
                        </ul>
                    </div>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#destinoviagem" aria-expanded="false"
                        aria-controls="destinoviagem">
                        <i class="menu-icon mdi mdi-airplane-landing"></i>
                        <span class="menu-title">Destino da Viagem</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="destinoviagem">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('destino.cadastrar') }}">Cadastrar</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('destino.lista') }}">Listar</a>
                            </li>
                        </ul>
                    </div>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#dificuldadeviagem" aria-expanded="false"
                        aria-controls="dificuldadeviagem">
                        <i class="menu-icon mdi mdi-airplane-off"></i>
                        <span class="menu-title">Dificuldade da Viagem</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="dificuldadeviagem">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('dificuldade.viagem.cadastrar') }}">Cadastrar</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('dificuldade.viagem.lista') }}">Listar</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
    
            @if (Auth::user()->id_acesso == 1)
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#galeriaviagens" aria-expanded="false"
                        aria-controls="galeriaviagens">
                        <i class="menu-icon mdi mdi-image"></i>
                        <span class="menu-title">Galeria de Viagens</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="galeriaviagens">
                        <ul class="nav flex-column sub-menu">
                        </ul>
                    </div>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#mapaviagem" aria-expanded="false"
                        aria-controls="mapaviagem">
                        <i class="menu-icon mdi mdi-map"></i>
                        <span class="menu-title">Mapa da Viagem</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="mapaviagem">
                        <ul class="nav flex-column sub-menu">
                        </ul>
                    </div>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#perguntasfrequentes" aria-expanded="false"
                        aria-controls="perguntasfrequentes">
                        <i class="menu-icon mdi mdi-help-circle"></i>
                        <span class="menu-title">Perguntas Frequentes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="perguntasfrequentes">
                        <ul class="nav flex-column sub-menu">
                        </ul>
                    </div>
                </li>
            @endif
            </ul>
        @endif
    </nav>
</div>

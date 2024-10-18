<nav class="sidebar sidebar-offcanvas pt-4"  id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Painel</span>
            </a>
        </li>
        <li class="nav-item nav-category">Dados Pessoais</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-account"></i>
                <span class="menu-title">Perfil</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Ver Perfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/dropdowns.html">Editar Dados</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Estado da conta</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Novos itens com submenus CRUD -->
        <li class="nav-item nav-category">Atividades e Viagens</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#atividades" aria-expanded="false"
                aria-controls="atividades">
                <i class="menu-icon mdi mdi-format-list-bulleted"></i>
                <span class="menu-title">Atividades</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="atividades">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="atividades/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="atividades/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="atividades/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="atividades/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#dificuldadeviagem" aria-expanded="false"
                aria-controls="dificuldadeviagem">
                <i class="menu-icon mdi mdi-map"></i>
                <span class="menu-title">Dificuldade da Viagem</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dificuldadeviagem">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route("dificuldade.viagem.cadastrar")}}">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route("dificuldade.viagem.lista")}}">Listar</a></li> 
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#viagens" aria-expanded="false" aria-controls="viagens">
                <i class="menu-icon mdi mdi-airplane"></i>
                <span class="menu-title">Viagens</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="viagens">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="viagens/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="viagens/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="viagens/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="viagens/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#actividadesviagem" aria-expanded="false"
                aria-controls="actividadesviagem">
                <i class="menu-icon mdi mdi-timeline"></i>
                <span class="menu-title">Atividades da Viagem</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="actividadesviagem">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="actividadesviagem/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="actividadesviagem/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="actividadesviagem/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="actividadesviagem/deletar.html">Deletar</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="catpreco/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="catpreco/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="catpreco/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="catpreco/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#clientes" aria-expanded="false"
                aria-controls="clientes">
                <i class="menu-icon mdi mdi-account-group"></i>
                <span class="menu-title">Clientes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="clientes">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="clientes/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="clientes/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="clientes/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="clientes/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#comentariospost" aria-expanded="false"
                aria-controls="comentariospost">
                <i class="menu-icon mdi mdi-comment-text-outline"></i>
                <span class="menu-title">Comentários</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="comentariospost">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="comentariospost/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="comentariospost/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="comentariospost/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="comentariospost/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#destinos" aria-expanded="false"
                aria-controls="destinos">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Destinos</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="destinos">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route("destino.cadastrar")}}">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route("destino.lista")}}">Listar</a></li>
                </ul>
            </div>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#etinerarioviagem" aria-expanded="false"
                aria-controls="etinerarioviagem">
                <i class="menu-icon mdi mdi-road"></i>
                <span class="menu-title">Itinerário da Viagem</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="etinerarioviagem">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="etinerarioviagem/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="etinerarioviagem/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="etinerarioviagem/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="etinerarioviagem/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#favoritos" aria-expanded="false"
                aria-controls="favoritos">
                <i class="menu-icon mdi mdi-heart"></i>
                <span class="menu-title">Favoritos</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="favoritos">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="favoritos/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="favoritos/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="favoritos/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="favoritos/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#galeriaviagens" aria-expanded="false"
                aria-controls="galeriaviagens">
                <i class="menu-icon mdi mdi-image"></i>
                <span class="menu-title">Galeria de Viagens</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="galeriaviagens">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="galeriaviagens/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeriaviagens/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeriaviagens/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeriaviagens/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#inclusoes" aria-expanded="false"
                aria-controls="inclusoes">
                <i class="menu-icon mdi mdi-check-circle"></i>
                <span class="menu-title">Inclusões</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="inclusoes">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="inclusoes/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="inclusoes/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="inclusoes/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="inclusoes/deletar.html">Deletar</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="mapaviagem/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="mapaviagem/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="mapaviagem/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="mapaviagem/deletar.html">Deletar</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="pacotehospedagem/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="pacotehospedagem/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="pacotehospedagem/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="pacotehospedagem/deletar.html">Deletar</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="pacoterefeicao/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="pacoterefeicao/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="pacoterefeicao/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="pacoterefeicao/deletar.html">Deletar</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="perguntasfrequentes/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="perguntasfrequentes/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="perguntasfrequentes/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="perguntasfrequentes/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#reservas" aria-expanded="false"
                aria-controls="reservas">
                <i class="menu-icon mdi mdi-calendar-check"></i>
                <span class="menu-title">Reservas</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="reservas">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="reservas/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservas/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservas/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservas/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tag" aria-expanded="false" aria-controls="tag">
                <i class="menu-icon mdi mdi-tag-outline"></i>
                <span class="menu-title">Tag</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tag">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="tag/criar.html">Criar</a></li>
                    <li class="nav-item"><a class="nav-link" href="tag/listar.html">Listar</a></li>
                    <li class="nav-item"><a class="nav-link" href="tag/editar.html">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="tag/deletar.html">Deletar</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tipoviagem" aria-expanded="false"
                aria-controls="tipoviagem">
                <i class="menu-icon mdi mdi-briefcase"></i>
                <span class="menu-title">Tipo de Viagem</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tipoviagem">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route("tipo.viagem.cadastrar")}}">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route("tipo.viagem.lista")}}">Listar</a></li> </ul>
            </div>
        </li>
        
    </ul>
</nav>

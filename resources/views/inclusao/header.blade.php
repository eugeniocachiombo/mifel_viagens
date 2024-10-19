<nav style="padding-bottom: 10px"
    class="navbar default-layout col-lg-12 col-12 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>

        <div>
            <a class="navbar-brand brand-logo" href="/">
                @include('inclusao.logo')
            </a>
            <a class="navbar-brand brand-logo-mini" href="/">
                <i class="menu-icon mdi mdi-airplane"></i>
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-lg-block ms-0">
                @php
                    use App\Models\Cliente;
                    use App\Models\User;
                    $user = Auth::user();
                    $cliente = Cliente::where('id_usuario', $user->id)->first();
                @endphp

                <h1 class="welcome-text d-none d-lg-block">Olá, <span
                        class="text-black fw-bold">{{ $cliente->nome_cliente }} {{ $cliente->sobrenome_cliente }}</span>
                </h1>
                <p class="d-lg-none"> <span class="text-black fw-bold">{{ $cliente->nome_cliente }}
                        {{ $cliente->sobrenome_cliente }}</span></p>
                <h3 class="welcome-sub-text"></h3>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">

            <li class="nav-item">
                <form class="search-form" action="#">
                    <i class="icon-search"></i>
                    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                </form>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                    <i class="icon-mail icon-lg"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="icon-bell"></i>
                    <span class="count"></span>
                </a>
            </li>
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                @if ($user->foto)
                    <a href="{{ asset('storage/' . $user->foto) }}">
                        <img class="img-xs rounded-circle" src="{{ asset('storage/' . $user->foto) }}"
                            alt="Profile image">
                    </a>
                @else
                    <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/empty.jpg') }}"
                        alt="Profile image">
                @endif
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

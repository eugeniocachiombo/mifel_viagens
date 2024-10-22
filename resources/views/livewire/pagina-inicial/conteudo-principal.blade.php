<div class="main-panel">
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
        @livewire('pagina-inicial.classificacao')

        <div class="cd-flex justify-content-center flex-column bg-dark text-light p-5 shadow-lg">
            <div class="col-12">
                <h4 style="font-family: 'Arial', sans-serif;"></h4>
            </div>
            <div class="col d-flex justify-content-center mb-4">
                <h1 class="font-weight-bold d-none d-md-flex" style="font-family: 'Arial', sans-serif;">
                        <i class="fas fa-plane me-2"></i> 
                    Conheça o Destino...
                </h1>

                <h2 class="font-weight-bold d-flex d-md-none" style="font-family: 'Arial', sans-serif;">
                        <i class="fas fa-plane me-2"></i> 
                    Conheça o Destino...
                </h2>
            </div>

            <div class="col d-flex justify-content-center button-container">
                <a href="{{ route('viagem.cadastrar') }}">
                    <button class="btn btn-primary text-white animated-button">
                        <i class="fas fa-tag me-2"></i>Pacotes de viagem
                    </button>
                </a>
                <a href="{{ route('reserva.reservar') }}">
                    <button class="btn btn-success text-white animated-button">
                        <i class="fas fa-bookmark me-2"></i> Pacote de Reserva
                    </button>
                </a>
            </div>
        </div>

        <div class="col-12 bg-primary text-white text-center p-4 mb-4">
            <h1 style="font-family: fantasy; font-size: 2.5rem;">Destinos turísticos</h1>
            <p style="font-size: 1.2rem;">Explore as melhores opções para sua viagem!</p>
        </div>

        <div class="container">
            <div class="row p-2">
                @foreach ($destinos as $destino)
                    <div class="col-6 col-md-3 p-2">
                        <div class="card" style="width: 12rem;">
                            <a href="{{ asset('storage/' . $destino->img_destino) }}">
                                <img src="{{ asset('storage/' . $destino->img_destino) }}"
                                    alt="{{ $destino->nome_destino }}" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <label class="card-title">{{ $destino->nome_destino }}</label>
                                <p class="card-text">{{ $destino->desc_destino }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row bg-primary text-white text-center p-4 mb-4">
        <h1 style="font-family: fantasy; font-size: 2.5rem;">Nossos Serviços</h1>
        <p style="font-size: 1.2rem;">Explore as melhores opções de serviço que temos
            disponíveis para si</p>
    </div>

    <div class="row ">
        <div class="col-6 col-md-3 p-2">
            <div class="card text-center">
                <i class="fas fa-plane-departure fa-3x p-3"></i>
                <div class="card-body">
                    <h5 class="card-title">Reservas de Voos</h5>
                    <p class="card-text">Reserve seu voo facilmente.</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3 p-2">
            <div class="card text-center">
                <i class="fas fa-hotel fa-3x p-3"></i>
                <div class="card-body">
                    <h5 class="card-title">Hotéis</h5>
                    <p class="card-text">Encontre o hotel perfeito para sua estadia.</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3 p-2">
            <div class="card text-center">
                <i class="fas fa-map fa-3x p-3"></i>
                <div class="card-body">
                    <h5 class="card-title">Guias de Viagem</h5>
                    <p class="card-text">Explore as melhores dicas e roteiros.</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3 p-2">
            <div class="card text-center">
                <i class="fas fa-suitcase fa-3x p-3"></i>
                <div class="card-body">
                    <h5 class="card-title">Pacotes de Viagem</h5>
                    <p class="card-text">Pacotes exclusivos para você.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção Categoria de Preços -->
    <div class="row bg-danger text-light text-center p-4 mt-4 mb-4">
        <h2 style="font-family: fantasy;">Categoria de Preços</h2>
        <p>Encontre opções para todos os orçamentos.</p>
    </div>

    <div class="row mb-4 bg-primary p-4">
        <div class="col-4 col-md-4 p-2">
            <div class="card text-center">
                <i class="fas fa-dollar-sign fa-3x p-3 text-danger"></i>
                <div class="card-body">
                    <h5 class="card-title text-danger">Econômico</h5>
                    <p class="card-text">Opções acessíveis para todos.</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-4 p-2">
            <div class="card text-center">
                <i class="fas fa-star fa-3x p-3 text-danger"></i>
                <div class="card-body">
                    <h5 class="card-title text-danger">Intermediário</h5>
                    <p class="card-text">Experiências confortáveis.</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-4 p-2">
            <div class="card text-center">
                <i class="fas fa-crown fa-3x p-3 text-danger"></i>
                <div class="card-body">
                    <h5 class="card-title text-danger">Luxo</h5>
                    <p class="card-text">Viva o melhor da vida.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 d-none">
        <div class="col-lg-8 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Performance Line
                                        Chart</h4>
                                    <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is
                                        simply dummy text of the printing</h5>
                                </div>
                                <div id="performance-line-legend"></div>
                            </div>
                            <div class="chartjs-wrapper mt-5">
                                <canvas id="performaneLine"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-primary card-rounded">
                        <div class="card-body pb-0">
                            <h4 class="card-title card-title-dash text-white mb-4">Status
                                Summary</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1">Closed Value</p>
                                    <h2 class="text-info">357</h2>
                                </div>
                                <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                        <canvas id="status-summary"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                        <div class="circle-progress-width">
                                            <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                        </div>
                                        <div>
                                            <p class="text-small mb-2">Total Visitors</p>
                                            <h4 class="mb-0 fw-bold">26.80%</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="circle-progress-width">
                                            <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                        </div>
                                        <div>
                                            <p class="text-small mb-2">Visits per day</p>
                                            <h4 class="mb-0 fw-bold">9065</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 d-none">
        <div class="col-lg-8 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Market Overview</h4>
                                    <p class="card-subtitle card-subtitle-dash">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit</p>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                            type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"> This month </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another
                                                action</a>
                                            <a class="dropdown-item" href="#">Something
                                                else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated
                                                link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                    <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                    <h4 class="me-2">USD</h4>
                                    <h4 class="text-success">(+1.37%)</h4>
                                </div>
                                <div class="me-3">
                                    <div id="marketing-overview-legend"></div>
                                </div>
                            </div>
                            <div class="chartjs-bar-wrapper mt-3">
                                <canvas id="marketingOverview"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded table-darkBGImg">
                        <div class="card-body">
                            <div class="col-sm-8">
                                <h3 class="text-white upgrade-info mb-0">
                                    Enhance your <span class="fw-bold">Campaign</span> for
                                    better outreach
                                </h3>
                                <a href="#" class="btn btn-info upgrade-btn">Upgrade
                                    Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Pending Requests
                                    </h4>
                                    <p class="card-subtitle card-subtitle-dash">You have 50+
                                        new requests</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i
                                            class="mdi mdi-account-plus"></i>Add
                                        new member</button>
                                </div>
                            </div>
                            <div class="table-responsive  mt-1">
                                <table class="table select-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check form-check-flat mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            aria-checked="false"><i class="input-helper"></i></label>
                                                </div>
                                            </th>
                                            <th>Customer</th>
                                            <th>Company</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-flat mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            aria-checked="false"><i class="input-helper"></i></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex ">
                                                    <img src="images/faces/face1.jpg" alt="">
                                                    <div>
                                                        <h6>Brandon Washington</h6>
                                                        <p>Head admin</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Company name 1</h6>
                                                <p>company type</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                        <p class="text-success">79%</p>
                                                        <p>85/162</p>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 85%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-opacity-warning">In
                                                    progress</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-flat mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            aria-checked="false"><i class="input-helper"></i></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <img src="images/faces/face2.jpg" alt="">
                                                    <div>
                                                        <h6>Laura Brooks</h6>
                                                        <p>Head admin</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Company name 1</h6>
                                                <p>company type</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                        <p class="text-success">65%</p>
                                                        <p>85/162</p>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-opacity-warning">In
                                                    progress</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-flat mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            aria-checked="false"><i class="input-helper"></i></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <img src="images/faces/face3.jpg" alt="">
                                                    <div>
                                                        <h6>Wayne Murphy</h6>
                                                        <p>Head admin</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Company name 1</h6>
                                                <p>company type</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                        <p class="text-success">65%</p>
                                                        <p>85/162</p>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 38%" aria-valuenow="38" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-opacity-warning">In
                                                    progress</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-flat mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            aria-checked="false"><i class="input-helper"></i></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <img src="images/faces/face4.jpg" alt="">
                                                    <div>
                                                        <h6>Matthew Bailey</h6>
                                                        <p>Head admin</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Company name 1</h6>
                                                <p>company type</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                        <p class="text-success">65%</p>
                                                        <p>85/162</p>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-opacity-danger">Pending
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-flat mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            aria-checked="false"><i class="input-helper"></i></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <img src="images/faces/face5.jpg" alt="">
                                                    <div>
                                                        <h6>Katherine Butler</h6>
                                                        <p>Head admin</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>Company name 1</h6>
                                                <p>company type</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                        <p class="text-success">65%</p>
                                                        <p>85/162</p>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="badge badge-opacity-success">
                                                    Completed</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body card-rounded">
                            <h4 class="card-title  card-title-dash">Recent Events</h4>
                            <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                        Change in Directors
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                        Other Events
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                        Quarterly Report
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                        Change in Directors
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list align-items-center pt-3">
                                <div class="wrapper w-100">
                                    <p class="mb-0">
                                        <a href="#" class="fw-bold text-primary">Show
                                            all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4 class="card-title card-title-dash">Activities</h4>
                                <p class="mb-0">20 finished, 5 remaining</p>
                            </div>
                            <ul class="bullet-line-list">
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span>
                                            assign you a task</div>
                                        <p>Just now</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Oliver Noah</span>
                                            assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Jack William</span>
                                            assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Leo Lucas</span>
                                            assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Thomas Henry</span>
                                            assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span>
                                            assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span>
                                            assign you a task</div>
                                        <p>1h</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="list align-items-center pt-3">
                                <div class="wrapper w-100">
                                    <p class="mb-0">
                                        <a href="#" class="fw-bold text-primary">Show
                                            all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-title card-title-dash">Todo list</h4>
                                        <div class="add-items d-flex mb-0">
                                            <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                            <button
                                                class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i
                                                    class="mdi mdi-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="list-wrapper">
                                        <ul class="todo-list todo-list-rounded">
                                            <li class="d-block">
                                                <div class="form-check w-100">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is
                                                        simply dummy text of the printing <i
                                                            class="input-helper rounded"></i>
                                                    </label>
                                                    <div class="d-flex mt-2">
                                                        <div class="ps-4 text-small me-3">24
                                                            June 2020</div>
                                                        <div class="badge badge-opacity-warning me-3">
                                                            Due tomorrow</div>
                                                        <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div class="form-check w-100">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is
                                                        simply dummy text of the printing <i
                                                            class="input-helper rounded"></i>
                                                    </label>
                                                    <div class="d-flex mt-2">
                                                        <div class="ps-4 text-small me-3">23
                                                            June 2020</div>
                                                        <div class="badge badge-opacity-success me-3">
                                                            Done</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check w-100">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is
                                                        simply dummy text of the printing <i
                                                            class="input-helper rounded"></i>
                                                    </label>
                                                    <div class="d-flex mt-2">
                                                        <div class="ps-4 text-small me-3">24
                                                            June 2020</div>
                                                        <div class="badge badge-opacity-success me-3">
                                                            Done</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="border-bottom-0">
                                                <div class="form-check w-100">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is
                                                        simply dummy text of the printing <i
                                                            class="input-helper rounded"></i>
                                                    </label>
                                                    <div class="d-flex mt-2">
                                                        <div class="ps-4 text-small me-3">24
                                                            June 2020</div>
                                                        <div class="badge badge-opacity-danger me-3">
                                                            Expired</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title card-title-dash">Type By Amount
                                        </h4>
                                    </div>
                                    <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                    <div id="doughnut-chart-legend" class="mt-5 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="card-title card-title-dash">Leave Report
                                            </h4>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                    type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                    <h6 class="dropdown-header">week Wise</h6>
                                                    <a class="dropdown-item" href="#">Year Wise</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <canvas id="leaveReport"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="card-title card-title-dash">Top
                                                Performer</h4>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div
                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face1.jpg"
                                                    alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Brandon
                                                        Washington</p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                        <div
                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face2.jpg"
                                                    alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Wayne Murphy
                                                    </p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                        <div
                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face3.jpg"
                                                    alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Katherine
                                                        Butler</p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                        <div
                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face4.jpg"
                                                    alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Matthew Bailey
                                                    </p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="images/faces/face5.jpg"
                                                    alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Rafell John
                                                    </p>
                                                    <small class="text-muted mb-0">Alaska,
                                                        USA</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                                1h ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<style>
    .card {
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card i {
        color: #007bff;
        /* Cor dos ícones */
    }

    .animated-button {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        transition: background-color 0.3s, transform 0.3s;
        animation: bounce 1.5s infinite;
    }

    .animated-button:hover {
        transform: scale(1.1);
        /* Aumenta um pouco ao passar o mouse */
    }

    @keyframes bounce {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    .button-container {
        display: flex;
        gap: 15px;
        /* Espaçamento entre os botões */
    }
</style>

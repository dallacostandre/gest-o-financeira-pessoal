<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}">
    <title>
        Controle Financeiro Pessoal
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('componentes.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('/assets/img/team-2.jpg') }}"
                                                    class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('/assets/img/small-logos/logo-spotify.svg') }}"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-4">
            <div class="col-lg-12  mb-4">
                <div class="card">
                    <div class="mx-5 my-5">
                        <form
                            action="{{ isset($transacao) ? route('transacoes.update', $transacao->id) : route('transacoes.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($transacao))
                                @method('PUT')
                            @endif
                            <div class="row mb-3">
                                <label for="descricao" class="col-sm-2 col-form-label">Descrição</label>
                                <div class="col-sm-10">
                                    <input type="text" name="descricao" class="form-control form-control-sm"
                                        required id="descricao" value="{{ $transacao->descricao ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
                                <div class="col-sm-10">
                                    <select name="categoria" class="form-select form-select-sm" id="categoria"
                                        required>
                                        <option value="alimentacao"
                                            {{ isset($transacao) && $transacao->categoria === 'alimentacao' ? 'selected' : '' }}>
                                            Alimentação</option>
                                        <option value="moradia"
                                            {{ isset($transacao) && $transacao->categoria === 'moradia' ? 'selected' : '' }}>
                                            Moradia</option>
                                        <option value="transporte"
                                            {{ isset($transacao) && $transacao->categoria === 'transporte' ? 'selected' : '' }}>
                                            Transporte</option>
                                        <option value="saude"
                                            {{ isset($transacao) && $transacao->categoria === 'saude' ? 'selected' : '' }}>
                                            Saúde</option>
                                        <option value="educacao"
                                            {{ isset($transacao) && $transacao->categoria === 'educacao' ? 'selected' : '' }}>
                                            Educação</option>
                                        <option value="entretenimento"
                                            {{ isset($transacao) && $transacao->categoria === 'entretenimento' ? 'selected' : '' }}>
                                            Entretenimento</option>
                                        <option value="vestuario"
                                            {{ isset($transacao) && $transacao->categoria === 'vestuario' ? 'selected' : '' }}>
                                            Vestuário</option>
                                        <option value="emprestimo"
                                            {{ isset($transacao) && $transacao->categoria === 'emprestimo' ? 'selected' : '' }}>
                                            Empréstimo Banco</option>
                                        <option value="telefonia"
                                            {{ isset($transacao) && $transacao->categoria === 'telefonia' ? 'selected' : '' }}>
                                            Telefonia</option>
                                        <option value="emprestimo-familiar"
                                            {{ isset($transacao) && $transacao->categoria === 'emprestimo-familiar' ? 'selected' : '' }}>
                                            Empréstimo Familiar</option>
                                        <option value="cartao-de-credito"
                                            {{ isset($transacao) && $transacao->categoria === 'cartao-de-credito' ? 'selected' : '' }}>
                                            Cartão de Crédito</option>
                                        <option value="outras"
                                            {{ isset($transacao) && $transacao->categoria === 'outras' ? 'selected' : '' }}>
                                            Outras</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
                                <div class="col-sm-10">
                                    <select name="tipo" class="form-select" id="tipo" required>
                                        <option value="fixa"
                                            {{ isset($transacao) && $transacao->tipo === 'fixa' ? 'selected' : '' }}>
                                            Fixa</option>
                                        <option value="variavel"
                                            {{ isset($transacao) && $transacao->tipo === 'variavel' ? 'selected' : '' }}>
                                            Variável</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-select" id="status" required>
                                        <option value="01"
                                            {{ isset($transacao) && $transacao->status === 01 ? 'selected' : '' }}>
                                            Pago</option>
                                        <option value="02"
                                            {{ isset($transacao) && $transacao->status === 02 ? 'selected' : '' }}>
                                            Pendente</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="vencimento" class="col-sm-2 col-form-label">Vencimento</label>
                                <div class="col-sm-10">
                                    <input type="date" name="vencimento" class="form-control form-control-sm"
                                        required id="vencimento" value="{{ $transacao->vencimento ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pagamento" class="col-sm-2 col-form-label">Pagamento</label>
                                <div class="col-sm-10">
                                    <input type="date" name="pagamento" class="form-control form-control-sm"
                                        id="pagamento" value="{{ $transacao->pagamento ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="receita_despesa" class="col-sm-2 col-form-label">Categoria</label>
                                <div class="col-sm-10">
                                    <select name="receita_despesa" class="form-select" id="receita_despesa" required>
                                        <option value="01"
                                            {{ isset($transacao) && $transacao->receita_despesa === 01 ? 'selected' : '' }}>
                                            Receita</option>
                                        <option value="02"
                                            {{ isset($transacao) && $transacao->receita_despesa === 02 ? 'selected' : '' }}>
                                            Despesa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="valor" class="col-sm-2 col-form-label">Valor</label>
                                <div class="col-sm-10">
                                    <input type="text" name="valor" class="form-control form-control-sm money2"
                                        required id="valor" value="{{ $transacao->valor ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3 d-flex justify-content-end">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3 fixed-top">
            <div class="container col-8 position-fixed top-0 end-0">
                <!-- Exibindo o tooltip se houver uma mensagem de sucesso -->
                @if (session('success'))
                    <div id="success-tooltip"
                        class="alert alert-success alert-dismissible fade show alert-sm custom-tooltip"
                        role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                <!-- Exibindo o tooltip se houver uma mensagem de erro -->
                @if (session('error'))
                    <div id="error-tooltip"
                        class="alert alert-danger alert-dismissible fade show alert-sm custom-tooltip" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </footer>
        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="{{ asset('/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/js/plugins/jquery.mask.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->

    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>

    <script>
        $(document).ready(function() {

            $('.money2').mask("#.##0,00", {
                reverse: true,
                maxlength: false
            });

        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fazer o tooltip desaparecer após 3 segundos
        window.setTimeout(function() {
            var successTooltip = document.getElementById('success-tooltip');
            if (successTooltip) {
                successTooltip.classList.remove('show');
                successTooltip.addEventListener('transitionend', function() {
                    successTooltip.parentNode.removeChild(successTooltip);
                });
            }

            var errorTooltip = document.getElementById('error-tooltip');
            if (errorTooltip) {
                errorTooltip.classList.remove('show');
                errorTooltip.addEventListener('transitionend', function() {
                    errorTooltip.parentNode.removeChild(errorTooltip);
                });
            }
        }, 3000);
    </script>
</body>

</html>
'

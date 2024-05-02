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

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JavaScript (popper.js é necessário para modais) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <style>
        .custom-tooltip {
            max-width: 500px;
            position: fixed;
            top: 0;
            right: 0;
            z-index: 9999;
        }
    </style>
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
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Entrada do Mês</p>
                                        <h5 class="font-weight-bolder">
                                            {{ number_format($totalEntrada, 2, ',', '.') }}
                                        </h5>
                                        <p class="mb-0" style="font-size: 12px">
                                            *mês atual
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Saídas do Mês</p>
                                        <h5 class="font-weight-bolder">
                                            {{ number_format($totalSaida, 2, ',', '.') }}
                                        </h5>
                                        <p class="mb-0" style="font-size: 12px">
                                            *mês atual - <span data-toggle="modal" data-target="#modalDetalhes"><a
                                                    href="#"> Despesas</a></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">

                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Pendências</p>
                                        <h5 class="font-weight-bolder">
                                            {{ number_format($totalFalta, 2, ',', '.') }}
                                        </h5>
                                        <p class="mb-0" style="font-size: 12px">
                                            *mês atual - <span data-toggle="modal" data-target="#modalDetalhes2"><a
                                                    href="#"> Outras</a></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Balanço</p>
                                        <h5 class="font-weight-bolder">
                                            @if ($saldoFinal < 0)
                                                <span style="color: red">
                                                    {{ number_format($saldoFinal, 2, ',', '.') }}
                                                </span>
                                            @else
                                                {{ number_format($saldoFinal, 2, ',', '.') }}
                                            @endif
                                        </h5>
                                        <p class="mb-0" style="font-size: 12px">
                                            *mês atual
                                        </p>
                                    </div>
                                </div>

                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="card ">
                        <div class="table-responsive">
                            <table class="table align-items-center ">
                                <thead>
                                    <tr>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Vencimento</th>
                                        <th scope="col">Pagamento</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lancamentos as $lancamento)
                                        <tr>
                                            <td class="w-20">
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        <strong>{{ strtoupper($lancamento->descricao) }}</strong>
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $lancamento->categoria }}</p>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="ms-4">
                                                    @if ($lancamento->status == 1)
                                                        <span class="badge bg-success">Pago</span>
                                                    @elseif($lancamento->status == 2)
                                                        <span class="badge bg-danger">Pendente</span>
                                                    @endif
                                                </div>
                                            </td>

                                            <td class="align-middle text-sm">
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ \Carbon\Carbon::parse($lancamento->vencimento)->format('d/m/Y') }}
                                                        @if (\Carbon\Carbon::parse($lancamento->vencimento)->isPast() && $lancamento->status == 2)
                                                            <i class="fas fa-exclamation-circle text-danger"></i>
                                                        @endif
                                                    </p>
                                                </div>
                                            </td>


                                            <td class="align-middle text-sm">
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        @if ($lancamento->status === 01)
                                                            {{ \Carbon\Carbon::parse($lancamento->pagamento)->format('d/m/Y') }}
                                                        @else
                                                            -
                                                        @endif
                                                    </p>

                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="ms-4">
                                                    @if ($lancamento->receita_despesa == '01')
                                                        <p class="text-xs font-weight-bold mb-0 text-success"><strong>
                                                                R$ {{ number_format($lancamento->valor, 2, ',', '.') }}
                                                        </p> </strong>
                                                    @else
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            R$ {{ number_format($lancamento->valor, 2, ',', '.') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="align-center text-sm col-1">
                                                <div class="btn-group" role="group" aria-label="Editar e Excluir">
                                                    <a type="button" class="btn btn-primary btn-sm"
                                                        href="{{ route('transacoes.edit', $lancamento->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('transacoes.destroy', $lancamento->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Tem certeza que deseja excluir esta transação?')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalDetalhes" tabindex="-1" role="dialog"
                aria-labelledby="modalDetalhesLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalDetalhesLabel">Despesas Fixas e Variáveis</h5>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>Empréstimo Itaú</li>
                                <li>Aluguel Apartamento</li>
                                <li>Creche</li>
                                <li>Condomínio</li>
                                <li>Rosa - Colchão</li>
                                <li>Supergás Brás</li>
                                <li>Cartão de Crédito Itaú - Click</li>
                                <li>Sem Parar</li>
                                <li>Vivo - Celulares</li>
                                <li>Luz - Copel</li>
                                <li>Pós Unicuritiba</li>
                                <li>Seguro Saúde</li>
                                <li>Internet (Oi)</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalDetalhes2" tabindex="-1" role="dialog"
                aria-labelledby="modalDetalhesLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalDetalhesLabel">Despesas Fixas e Variáveis</h5>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>Mei André - R$ 600,00</li>
                                <li>Positivo Débora - R$ </li>
                                <li>Nubank Débora - R$ 3.000,00</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
                            class="alert alert-danger alert-dismissible fade show alert-sm custom-tooltip"
                            role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </footer>



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


            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
            <script>
                // Ativar todos os tooltips da página
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })

                // Fazer o tooltip desaparecer após 3 segundos
                window.setTimeout(function() {
                    var tooltip = document.getElementById('success-tooltip');
                    if (tooltip) {
                        tooltip.parentNode.removeChild(tooltip);
                    }
                }, 3000);
            </script>


        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="{{ asset('/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Ativar todos os tooltips da página
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

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
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
'

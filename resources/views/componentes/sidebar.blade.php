<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('dashboard.index') }}">
            <img src="{{ asset('/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">CF - Pessoal</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active"href="{{ route('dashboard.index') }}">
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="nav-link-text ms-1">Relatorio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="nav-link-text ms-1" data-toggle="modal" data-target="#modalDetalhes2">Dívidas <span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('transacoes.create') }}">
                    <span class="nav-link-text ms-1"> + Adicionar Lançamento</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<!-- Modal -->
<div class="modal fade" id="modalDetalhes2" tabindex="-1" role="dialog" aria-labelledby="modalDetalhesLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetalhesLabel">Despesas Fixas e Variáveis</h5>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Mei André</li>
                    <li>Positivo Débora</li>
                    <li>Nubank Débora</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

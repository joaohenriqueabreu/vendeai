<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href="\">
                    <img class="custom-micro-image" src="{{ asset('img/logo/logo-mini.png') }}">
                    <span class="custom-brand-white-small">Vende aí</span>
                </a>
            </li>

            <?php $user = Auth::user(); ?>

            <li align="left">
                <a href="{{ route('pages.profile') }}">
                    <i class="fa fa-user"></i>
                    {{ $user->name }}
                </a>
            </li>

            {{-- Configurações para o menu de fornecedores --}}
            <?php

            if (isset($user)) {
                $allow_provider_access = isset($user->provider);
            }

            ?>

            @if($allow_provider_access)
                <li class="active">
                    <a href="#"><i class="fa fa-sitemap"></i> Área do Fornecedor <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('providers.products.create', $user->provider->id) }}"><i class="fa fa-check"></i> Novo produto </a>
                        </li>

                        <li>
                            <a href="{{ route('providers.products.index', $user->provider->id) }}">
                                <i class="fa fa-tags"></i>
                                Vendas
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('providers.products.index', $user->provider->id) }}">
                                <i class="fa fa-table"></i>
                                Lista de Produtos
                            </a>
                        </li>
                    </ul>
                </li>
            @endif


            {{-- Configurações para o menu de revendedores --}}
            <?php

            if (isset($user)) {
                $allow_reseller_access = isset($user->reseller);
            }

            ?>

            @if($allow_reseller_access)
                <li class="active">
                    <a href="#"><i class="fa fa-share-square"></i> Área do Revendedor <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('resellers.products.search', [$user->reseller->id, null]) }}"> <i class="fa fa-search"></i> Encontrar produtos
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('resellers.products.index', $user->reseller->id) }}"><i
                                        class="fa fa-shopping-cart"></i> Gerenciar loja </a>
                        </li>

                        <li>
                            <a href="{{ route('resellers.sales.index', $user->reseller->id) }}"> <i
                                        class="fa fa-bar-chart-o"></i> Relatório </a>
                        </li>


                    </ul>
                </li>
            @endif

            {{-- Configurações para o menu de administração --}}
            <?php

            if (isset($user)) {
                $allow_admin_access = isset($user->admin);
            }

            ?>

            @if($allow_admin_access)
                <li class="active">
                    <a href="#"><i class="fa fa-cog"></i> Administração <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('providers.index') }}"><i class="fa fa-sitemap"></i>Fornecedores</a>
                        </li>
                        <li>
                            <a href="{{ route('resellers.index') }}"><i class="fa fa-share-square"></i>Revendedores</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.index') }}"><i class="fa fa-users"></i>Usuários</a>
                        </li>

                        <li>
                            <a href="{{ route('admin.mvp.info') }}"><i class="fa fa-globe"></i>MVP</a>
                        </li>
                    </ul>
                </li>
            @endif

            <li>
                <a type="submit" href="{{ route('pages.account') }}"><i class="fa fa-key"></i> Conta </a>
            </li>

            <li>
                <a type="submit" href="{{ route('pages.logout') }}"><i class="fa fa-unlock"></i> Sair</a>
            </li>
        </ul>

    </div>

</nav>
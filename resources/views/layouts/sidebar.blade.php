<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href="\"><i class="fa fa-dashboard"></i> Home </a>
            </li>

            {{-- Configurações para o menu de fornecedores --}}
            <?php
            $user = Auth::user();

            if (isset($user)) {
                $allow_provider_access = isset($user->provider);
            }

            ?>

            @if($allow_provider_access)
                <li class="active">
                    <a href="#"><i class="fa fa-sitemap"></i> Fornecedores <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('products.create') }}"><i class="fa fa-bookmark-o"></i> Novo produto </a>
                        </li>

                        <li>
                            <a href="{{ route('providers.products', $user->provider->id) }}"> Vendas </a>
                        </li>

                        <li>
                            <a href="{{ route('providers.products', $user->provider->id) }}">Lista de Produtos</a>
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
                            <a href="{{ route('resellers.products.search', $user->reseller->id) }}"> <i class="fa fa-search"></i> Encontrar produtos
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('resellers.products', $user->reseller->id) }}"><i
                                        class="fa fa-shopping-cart"></i> Gerenciar loja </a>
                        </li>

                        <li>
                            <a href="{{ route('resellers.products', $user->reseller->id) }}"> <i
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
                            <a href="{{ route('providers.index') }}">Fornecedores</a>
                        </li>
                        <li>
                            <a href="{{ route('providers.create') }}">Revendedores</a>
                        </li>
                        <li>
                            <a href="{{ route('providers.create') }}">Administradores</a>
                        </li>
                    </ul>
                </li>
            @endif

            <li>
                <a type="submit" href="{{ route('pages.account') }}"><i class="fa fa-user"></i> Conta </a>
            </li>

            <li>
                <a type="submit" href="{{ route('pages.logout') }}"><i class="fa fa-unlock"></i> Sair</a>
            </li>
        </ul>

    </div>

</nav>
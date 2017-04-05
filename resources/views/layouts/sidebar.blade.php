<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href="\"><i class="fa fa-dashboard"></i> Home </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Fornecedores <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('providers.index') }}">Lista</a>
                    </li>
                    <li>
                        <a href="{{ route('providers.create') }}">Cadastrar</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-users"></i> Revendedores <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('resellers.index') }}">Lista</a>
                    </li>
                    <li>
                        <a href="{{ route('resellers.create') }}">Cadastrar</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-beer"></i> Produtos <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('products.index') }}">Lista</a>
                    </li>
                    <li>
                        <a href="{{ route('products.create') }}">Cadastrar</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> Conta <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('providers.index') }}">Lista</a>
                    </li>
                    <li>
                        <a href="{{ route('providers.create') }}">Cadastrar</a>
                    </li>
                </ul>
            </li>

            <li>
                <a type="submit" href="{{ route('page.logout') }}"><i class="fa fa-unlock"></i> Sair</a>
            </li>
        </ul>

    </div>

</nav>
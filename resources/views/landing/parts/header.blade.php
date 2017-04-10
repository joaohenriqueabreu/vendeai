<div class="header header-sticky custom-padding-20">
<!--    <div layout="row" class="container collapse navbar-collapse mega-menu navbar-responsive-collapse">-->
    <div layout="row">
        <div flex layout="row">
            <a class="custom-brand" href="{{ route('pages.landing') }}" layout="row" layout-align="center center">
<!--                <img class="logo" src="assets/img/logo/logo-mini.png" alt="Logo"> <span class="custom-brand">&nbsp;&nbsp;&nbsp;VITRINET</span>-->
                <img class="logo" src="{{ asset('img/logo/logo3.png') }} " alt="Logo"> <span class="custom-brand">&nbsp;&nbsp;&nbsp;Vende aí</span>
<!--                <img class="logo" src="assets/img/icons/cube.png" alt="Logo"> <span class="custom-brand">&nbsp;&nbsp;&nbsp;VITRINET</span>-->
            </a>

        </div>
        <div flex layout="row" layout-align="end center" hide-xs hide-sm show-gt-sm>
<!--            <a href="/revendedor" layout-align="center center"-->
<!--               class="btn-u rounded-5x custom-border-green custom-hover-bg-dark-blue custom-hover-color-white btn-u-lg"-->
<!--               type="button">-->

                    <a href="{{ route('pages.reseller') }}" layout-align="center center"
                       class="custom-header-text custom-color-dark-blue custom-border-dark-blue rounded-5x custom-padding-20 custom-hover-color-white custom-hover-bg-dark-blue">
                        <strong>Quero montar meu negócio</strong>
                    </a>
<!--                <h3 class="custom-hover-color-white"><strong>Quero montar meu-->
<!--                        negócio</strong></h3>-->
<!--            </a>-->
            &nbsp;&nbsp;&nbsp;&nbsp;
<!--            <a href="/parceiro"-->
<!--               class="btn-u btn-brd rounded-5x btn-u-custom-green custom-hover-bg-green custom-hover-color-white btn-u-lg"-->
<!--               type="button">-->
<!--                <h3 class="custom-color-green custom-hover-bg-green custom-hover-color-white "><strong>Quero aumentar as-->
<!--                        vendas</strong></h3>-->
<!--            </a>-->
            <a href="{{ route('pages.provider') }}" layout-align="center center"
               class="custom-header-text custom-color-green custom-border-green rounded-5x custom-padding-20 custom-hover-color-white custom-hover-bg-green">
                <strong>Quero ser fornecedor</strong>
            </a>

        </div>
    </div>
</div>
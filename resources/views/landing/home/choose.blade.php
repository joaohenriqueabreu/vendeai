<?php $route = "/revendedor" ?>
<section id="revendedor">
    <div layout-gt-sm="row" layout-xs="column" layout-sm="column">
        <div flex="50" class="custom-bg-dark-blue custom-section" layout-gt-sm="column" layout-xs="column"
             layout-sm="column" layout-align-xs="center center" layout-align-sm="center center">

            <div layout="center center" layout-align="center center" class="custom-padding-20">
                <img class="custom-home-image" src="{{ asset('img/icons/online-shop.png') }}">
            </div>

            <div layout="column" layout-align="center center">
                <div class="custom-home-text">
                    <h2 align="center" class="custom-color-white custom-padding-20">
                        <strong> Abrir seu negócio <br> virtual </strong>
                    </h2>

                    <p align="justify" class="custom-color-white"><strong>
                            Na <span class="custom-brand-white-small">Vende aí</span> você escolhe produtos dos nossos
                            parceiros e recebe uma loja virtual completa.
                            <br><br> Divulgue, venda e receba comissões.
                            <br><br>
                        </strong>
                    </p>
                </div>
            </div>

            <br>

            <div layout="column" layout-align="center center">
                <a hide-xs hide-sm href="{{ route('pages.reseller') }}" class="btn-u rounded-5x btn-u-custom-green custom-bg-white custom-color-dark-blue custom-padding-20 custom-hover-bg-white custom-hover-color-dark-blue btn-u-lg custom-header-text"
                   type="button">
                    <strong>Quero vender</strong>
                </a>

                <a hide-gt-sm href="{{ route('pages.reseller') }}" class="btn-u rounded-5x btn-u-custom-green custom-bg-white custom-color-dark-blue custom-mobile-padding-20 custom-hover-bg-white custom-hover-color-dark-blue btn-u-lg custom-header-text"
                   type="button">
                    <strong>Quero vender</strong>
                </a>
            </div>

            <br><br><br><br><br>
        </div>

        <div flex="50" class="custom-bg-white custom-section" layout-gt-sm="column" layout-xs="column"
             layout-sm="column" layout-align-xs="center center" layout-align-sm="center center">

            <div layout="center center" layout-align="center center" class="custom-padding-20">
                <img class="custom-home-image" src="{{ asset('img/icons/online-shop2.png') }}">
            </div>

            <div layout="column" layout-align="center center">
                <div class="custom-home-text">
                    <h2 align="center" class="custom-color-green custom-padding-20">
                        <strong> Você já possui um negócio? </strong>
                    </h2>

                    <p align="justify" class="custom-color-green"><strong>

                            Na <span class="custom-brand-green-small">Vende aí</span> seus produtos serão
                            ofertados por nossa rede de revendedores espalhados por todo o país.

                            <br><br> Disponibilize os produtos e comece a receber pedidos.
                            <br><br>
                        </strong>
                    </p>
                </div>
            </div>

            <br>

            <div layout="column" layout-align="center center">
                <a hide-xs hide-sm href="{{ route('pages.provider') }}"
                   class="btn-u rounded-5x btn-u-custom-green custom-bg-green custom-color-white custom-padding-20 custom-hover-bg-green custom-hover-color-white btn-u-lg custom-header-text"
                   type="button">
                    <strong>Quero disponibilizar produtos</strong>
                </a>

                <a hide-gt-sm href="{{ route('pages.provider') }}"
                   class="btn-u rounded-5x btn-u-custom-green custom-bg-green custom-color-white custom-mobile-padding-20 custom-hover-bg-green custom-hover-color-white btn-u-lg custom-header-text"
                   type="button">
                    <strong>Quero disponibilizar produtos</strong>
                </a>
            </div>
        </div>

    </div>
</section>
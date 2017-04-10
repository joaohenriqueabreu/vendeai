<?php $route = "/revendedor" ?>
<section id="revendedor">
    <div class="custom-bg-dark-blue custom-super-section" layout-gt-sm="row" layout-xs="column"
         layout-sm="column" layout-align-xs="center center" layout-align-sm="center center">

        <div flex="30" layout="center center" layout-align="center center" class="custom-padding-40">
            <img src="{{ asset('img/icons/online-shop.png') }}">
        </div>

        <div flex="70" layout="column" layout-align="center center">
            <h2 align="left" class="custom-color-white">
                <strong>
                    Abrir um negócio?
                </strong>
            </h2>
            <h6 class="custom-color-white">
                Você está pensando em montar um negócio próprio, mas não sabe bem por onde começar? Esta a procura de renda ou de um complemento?
                Está buscando alternativas de renda extra? Você tem receio de investir e não quer se expor ao risco de um novo negócio convencional?
            </h6>
            <a href="<?php echo $route ?>"
               class="btn-u rounded-5x btn-u-custom-green custom-bg-white custom-color-dark-blue custom-padding-20 custom-hover-bg-white custom-hover-color-dark-blue btn-u-lg custom-header-text"
               type="button">
                <strong>Conheça a <span class="custom-brand-small">Vende aí!</span></strong>
            </a>
        </div>
    </div>
</section>
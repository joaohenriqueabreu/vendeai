<?php $route = "/parceiro" ?>

<section id="parceiro">

    <div class="custom-bg-green custom-section" layout-align="center center" layout-gt-sm="row" layout-xs="column"
         layout-sm="column" layout-align-xs="center center" layout-align-sm="center center">

        <img class="custom-mini-image" src="{{ asset('img/icons/pointing-right.png') }}" hide-xs hide-sm> &nbsp;

        <h1 class="custom-color-white custom-padding-20" align="center">
            <strong>Fornecedor, quer disponibilizar seus
                produtos na nossa rede?</strong>
        </h1>
    </div>


    <div class="equal-height-columns custom-super-section" layout-gt-sm="row" layout-xs="column"
         layout-sm="column" layout-align-xs="center center" layout-align-sm="center center">

        <div flex="30" layout="center center" layout-align="center center" hide-gt-sm>
            <img src="{{ asset('img/icons/online-shop2.png') }}">
        </div>

        <div flex="70" layout="column" layout-align="center center">
            <h2 class="custom-color-green custom-padding-20"><strong>
                    Está com <span class="custom-palavra-chave-green">dificuldades para aumentar</span> as vendas do seu
                    produto? <br><br>

                    Já pensou em ter <span class="custom-palavra-chave-green">pessoas vendendo</span> seus produtos em
                    todo o Brasil? <br><br>

                    Já imaginou tudo isso <span class="custom-palavra-chave-green">sem aumentar seus custos</span> ?
                    Gastando somente com vendas concluídas? <br><br>

                    Nós podemos te ajudar.
                    <br><br>

                </strong>
            </h2>

            <a href="<?php echo $route ?>"
               class="btn-u rounded-5x btn-u-custom-green custom-bg-green
                    custom-color-white custom-padding-20 btn-u-lg custom-header-text"
               type="button">
                <strong>Conheça a <span class="custom-brand-white-small">Vende aí!</span></strong>
            </a>

        </div>

        <div flex="30" layout="center center" layout-align="center center" hide-xs hide-sm>
            <img src="{{ asset('img/icons/online-shop2.png') }}">
        </div>
    </div>

</section>
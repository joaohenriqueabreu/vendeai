<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" ng-app="selladd"> <!--<![endif]-->
<head>
    <title>Vende aí!</title>

    <!-- Meta -->
    @include('parts.landing.parts.meta')

    <!-- Favicon -->
    <link rel="shortcut icon" href="logo-mini.png">

    @include('landing.parts.styles')

</head>

<!--<body ng-cloak>-->
<!--<body class="header-fixed header-fixed-space-default" ng-cloak>-->
<body class="header-fixed header-fixed-space-default">

<div class="wrapper" ng-controller="master" ng-cloak>

    <!--    Cabeçalho -->
    @include('landing.parts.header')

    <!--    <div class="coming-soon-v2" style="margin-top: 100px;">-->
    <!--    <div class="" style="margin-top: 100px;">-->
    <div class="" style="">

        <iframe
            src="https://docs.google.com/forms/d/e/1FAIpQLScVYlLKkdshbajyySCpqX_5bWOCwdhCirHCEKD8Qu1Qq0SnOA/viewform?embedded=true"
            width="100%" height="1000px;" frameborder="0" marginheight="0" marginwidth="0">Carregando…
        </iframe>


    </div>

    <!--    Rodapé  -->
    @include('landing.parts.footer')

</div>

<!--</div>&lt;!&ndash;/container&ndash;&gt;-->
<!--=== End Content Part ===-->

@include('landing.parts.scripts')
</body>
</html>

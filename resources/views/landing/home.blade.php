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
    @include('landing.parts.meta')

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo/logo3.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo/logo-mini.png') }}">

    @include('landing.parts.styles')

</head>

<body class="header-fixed header-fixed-space-default">

<div class="wrapper" ng-controller="master" ng-cloak>

    <!--    Cabeçalho -->
    @include('landing.parts.header')

    <div class="" style="">

        @include('landing.home.main')
        @include('landing.home.choose')
{{--        @include('landing.home.revendedor')--}}
{{--        @include('landing.home.fornecedor')--}}

    </div>

    <!--    Rodapé  -->
    @include('landing.parts.footer')

</div>

<!--</div>&lt;!&ndash;/container&ndash;&gt;-->
<!--=== End Content Part ===-->

@include('landing.parts.scripts')
</body>
</html>

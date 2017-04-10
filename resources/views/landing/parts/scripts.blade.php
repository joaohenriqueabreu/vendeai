<!-- JS Global Compulsory -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}">></script>
<script src="{{ asset('plugins/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- JS Implementing Plugins -->
<script src="{{ asset('plugins/back-to-top.js') }}"></script>
<script src="{{ asset('plugins/smoothScroll.js') }}"></script>
<script src="{{ asset('plugins/countdown/jquery.plugin.js') }}"></script>
<script src="{{ asset('plugins/countdown/jquery.countdown.js') }}"></script>
<script src="{{ asset('plugins/backstretch/jquery.backstretch.min.js') }}"></script>

<!-- JS Page Level -->
<script src="{{ asset('js/landing.app.js') }}"></script>
<script src="{{ asset('js/plugins/style-switcher.js') }}"></script>
<script src="{{ asset('js/pages/page_coming_soon.js') }}"></script>

<script src="{{ asset('plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/owl-carousel.js') }}"></script>

<script src="{{ asset('plugins/wow/dist/wow.min.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

<!-- Angular Material Library -->
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

<script>
    var angular = angular.module('selladd', ['ngMaterial', 'ngMessages']);
</script>

<script src="{{ asset('js/angular/master.js') }}"></script>

<script>
    jQuery(document).ready(function () {
        App.init();
        OwlCarousel.initOwlCarousel();
        new WOW().init();
//        PageComingSoon.initPageComingSoon();

        $(".coming-soon-v2-left").backstretch([
            '{{ asset('img/bg/info2.png') }}',
            '{{ asset('img/bg/info1.png') }}',
            '{{ asset('img/bg/info3.png') }}'
        ], {duration: 3000, fade: 1000});

//        $('body').css('margin-top', Number($(document).height() - $('.coming-soon-v2').height()) / 2);
//        $(window).resize(function () {
//            $('body').css('margin-top', Number($(document).height() - $('.coming-soon-v2').height()) / 2);
//        });
    });
</script>

<!-- Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-96582868-1', 'auto');
    ga('send', 'pageview');

</script>


<!--[if lt IE 9]>
<script src="{{ asset('plugins/respond.js') }}"></script>
<script src="{{ asset('plugins/html5shiv.js') }}"></script>
<script src="{{ asset('plugins/placeholder-IE-fixes.js') }}"></script>
<![endif]-->
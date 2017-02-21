<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    @yield('meta')
    @include('front.styles')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/gif" href="/img/FAV.gif">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92155036-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
    <div class="wrapper">
        <div class="tent"></div>
        @yield('content')

        @include('front.footer')
        @yield('footer')
    </div>
    @include('front.scripts')
    @yield('scripts')
    @include('front.popups.discuss')
    @include('front.popups.discuss_type')
    @include('front.popups.thank')
    <div class="hide">
        @yield('discuss')
        @yield('discuss_type')
        @yield('thank')
    </div>
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/mobile.css">
    <div class="hide">
        <a href="#thanks" class="thank"></a>
    </div>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter42874564 = new Ya.Metrika({
                        id       : 42874564, clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true,
                        trackHash: true
                    });
                } catch (e) {
                }
            });
            var n   = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
                n.parentNode.insertBefore(s, n);
            };
            s.type  = "text/javascript";
            s.async = true;
            s.src   = "https://mc.yandex.ru/metrika/watch.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks"); </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/42874564" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>
@yield('styles')

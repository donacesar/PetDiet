<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{--    Запрет на индексирование поисковыми роботами --}}
    {{--    На проде вместо "none" будет "all" --}}
    <meta name="robots" content="{{ env('LOG_LEVEL') == 'debug' ? 'none' : 'all' }}"/>

    <!--metatextblock-->
    <meta name="description" content="Ветеринарный диетолог"/>
    <meta property="og:url" content="{{ env('APP_URL') }}"/>
    <meta property="og:title" content="{{ env('APP_NAME') }}"/>
    <meta property="og:description" content="Ветеринарный диетолог"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{!! asset('img/main_screen_dog.jpg') !!}"/>
    <!--/metatextblock-->

    <link rel="canonical" href="{{ env('APP_URL') }}">
    <title>{{ env('APP_NAME') }}</title>

    <!-- ASSETS -->
    <link rel="stylesheet" href="{{ asset('css/grid-3.0.min.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset("css/main.css") }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset("css/blocks-2.14.css") }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/animation-1.0.min.css') }}" type="text/css"/>

    {{--    Стили при выводе на печать --}}
    {{--<link rel="stylesheet" href="https://static.tildacdn.info/css/tilda-menusub-1.0.min.css" type="text/css"
          media="print" onload="this.media='all';" onerror="this.loaderr='y';"/>--}}


    {{--    <noscript>--}}
    {{--        <link rel="stylesheet" href="https://static.tildacdn.info/css/tilda-menusub-1.0.min.css" type="text/css"--}}
    {{--              media="all"/>--}}
    {{--    </noscript>--}}

    <link rel="stylesheet" href="{{ asset('css/forms-1.0.min.css') }}" type="text/css"/>
    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/scripts-3.0.min.js') }}"></script>
    <script src="{{ asset('js/blocks-2.7.js') }}"></script>

    <script src="{{ asset('js/lazyload-1.3.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('js/animation-1.0.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('js/cover-1.0.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('js/events-1.0.min.js') }}" charset="utf-8" async></script>

    {{--<script src="https://static.tildacdn.info/js/tilda-menusub-1.0.min.js" charset="utf-8" async
            onerror="this.loaderr='y';"></script>
    <script src="https://static.tildacdn.info/js/tilda-forms-1.0.min.js" charset="utf-8" async
            onerror="this.loaderr='y';"></script>
    <script src="https://static.tildacdn.info/js/masonry-imagesloaded.min.js" charset="utf-8" async
            onerror="this.loaderr='y';"></script>--}}


    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script>
    <script type="text/javascript">
        (function () {
                if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof (sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y' && document.visibilityState) {
                    var style = document.createElement('style');
                    style.type = 'text/css';
                    style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
                    document.getElementsByTagName('head')[0].appendChild(style);

                    function t_setvisRecs() {
                        var alr = document.querySelectorAll('.t-records');
                        Array.prototype.forEach.call(alr, function (el) {
                            el.classList.add("t-records_animated");
                        });
                        setTimeout(function () {
                            Array.prototype.forEach.call(alr, function (el) {
                                el.classList.add("t-records_visible");
                            });
                            sessionStorage.setItem("visited", "y");
                        }, 400);
                    }

                    document.addEventListener('DOMContentLoaded', t_setvisRecs);
                }
            }
        )();
    </script>


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


</head>
<body class="t-body" style="margin:0;">

<div id="allrecords" class="t-records">
    @include('includes.main-header')
    @include('includes.start')
    @include('includes.questions')
    @include('includes.about')
    @include('includes.how')
    @include('includes.callback')
    @include('includes.main-services')
    @include('includes.full-price')
    @include('includes.blog')
    @include('includes.main-footer')
</div>
</body>
</html>

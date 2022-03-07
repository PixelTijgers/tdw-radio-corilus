<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('favicon/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @yield('meta')

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amiko:wght@400;600;700&family=Crete+Round:ital@0;1&display=swap">
    <link rel="stylesheet" href="{{ URL::asset('plugins/flag-icons/css/flag-icons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/mmenu-js/dist/mmenu.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/mburger-css/dist/mburger.css') }}">
    <link rel="stylesheet" href="{{ URL::asset(mix('css/front/front.css')) }}">

    <!-- Scripts -->
    <script src="{{ URL::asset(mix('js/front/front.js')) }}"></script>
    <script src="{{ URL::asset('plugins/mmenu-js/dist/mmenu.js') }}"></script>
    <script src="{{ URL::asset('plugins/mburger-css/dist/mburger.js') }}" type="module"></script>
    <script src="{{ URL::asset('plugins/sticky-js/dist/sticky.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/single-page-nav/jquery.singlePageNav.min.js') }}"></script>


    <!-- Page styles -->
    @stack('styles')

    <!-- Page scripts -->
    @stack('js')

</head>

<body>

    <div id="page-container">

        @include('front.layouts.header')

        {{ $slot }}

        @include('front.layouts.footer')

    </div>

    <nav id="mobile-menu">

        <ul>
            <li><a href="#home" class="active">{{ __('Home') }}</a></li>
            <li><a href="#hosts">{{ __('Hosts') }}</a></li>
            <li><a href="#info">{{ __('Information') }}</a></li>
            <li><a href="mailto:help@radiocorilus.be" class="ignore">{{ __('Help') }}</a></li>
            <li><a href="{{ route('change.language', $language) }}" class="switcher ignore"><span class="fi fi-{{ $countryFlag }}"></span></a></li>
        </ul>

    </nav>

    <script>

        var sticky = new Sticky('header');

        document.addEventListener(
            'DOMContentLoaded', () => {
                new Mmenu('#mobile-menu', {
                    'pageScroll': {
                        'scroll': true,
                        'update': true
                    },
                    'offCanvas': {
                        'page': {
                            'selector': '#page-container'
                        }
                    }
                });
            }
        );
    </script>

</body>
</html>

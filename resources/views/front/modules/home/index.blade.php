@section('meta')
<title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="{{ config('app.name') }}">
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="" />
    <meta property="og:locale" content="" />
    <meta property="og:image" content="" />
@endsection

@pushOnce('styles')
@endPushOnce

@pushOnce('scripts')
@endPushOnce

<x-front-layout>

        <main class="{{ $cssNs }} max-w-screen-lg mx-auto">

            <div id="home" class="mt-16">

                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/674862479?h=e87783cd30&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="HARVEY NASH GROUP RADIO"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

            </div>

            <div id="hosts">

                <h3 class="clr-green-300 text-5xl text-center mt-10">{{ __('Hosts') }}</h3>

                <div class="lg:flex mt-16">

                    <div class="w-full lg:w-5/12">

                        <figure class="pr-5 lg:p-0">

                            <img src="{{ URL::asset('img/Gaetan-Bortosz.png') }}" alt="Gaetan-Bortosz"/>

                        </figure>

                    </div>

                    <div class="w-full lg:w-7/12 lg:text-right px-5 lg:px-0">

                        <h4 class="clr-sea-300 text-3xl mt-10 lg:mt-0 mb-3">{{ __('Host 1 Name') }}</h4>
                        <p class="lg:pl-10">{{ __('Host 1 Bio') }}</p>

                    </div>

                </div>

                <div class="flex flex-col flex-col-reverse lg:flex-row mt-16">

                    <div class="w-full lg:w-7/12 text-right lg:text-left px-5 lg:px-0">

                        <h4 class="clr-green-300 text-3xl mt-10 lg:mt-0 mb-3">{{ __('Host 2 Name') }}</h4>
                        <p class="lg:pr-10">{{ __('Host 2 Bio') }}</p>

                    </div>

                    <div class="w-full lg:w-5/12">

                        <figure class="pl-5 lg:p-0">

                            <img src="{{ URL::asset('img/Dorien-Leyers.png') }}" alt="Dorien-Leyers"/>

                        </figure>

                    </div>

                </div>

            </div>

            <div id="info" class="mt-16">

                <h3 class="clr-sea-300 text-5xl text-center">{{ __('Information') }}</h3>

                <p class="flex mt-10 px-5 lg:px-0">{{ __('Information Text') }}</p>

            </div>

        </main>

        <footer class="max-w-screen-lg mx-auto mt-10 py-5">

            <div class="flex flex-col lg:flex-row lg:justify-between w-full">

                <p class="flex justify-center lg:justify-start lg:w-1/2">&#169; {{ config('app.name') }} {{ date('Y') }}. {{ __('All Rights Reserved') }}.</p>

                <ul class="flex justify-center lg:justify-end lg:w-1/2">

                    <li><a href="#">{{ __('Disclaimer') }}</a></li>

                </ul>

            </div>

        </footer>

</x-front-layout>

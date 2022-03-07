            <nav class="{{ $cssNs }} max-w-screen-xl mx-auto hidden md:flex md:justify-between">

                <div class="flex">

                    <a href="{{ url('/') }}">

                        <figure>

                            <img src="{{ URL::asset('img/logo-radio-corilus.png') }}" alt="Logo: Radio Corilus"/>

                        </figure>

                    </a>

                </div>

                <div class="flex items-center justify-end">

                    <nav>

                        <ul class="flex" id="nav-desktop">

                            <li><a href="#home" class="active">{{ __('Home') }}</a></li>
                            <li><a href="#hosts">{{ __('Hosts') }}</a></li>
                            <li><a href="#info">{{ __('Information') }}</a></li>
                            <li><a href="mailto:help@radiocorilus.be" class="ignore">{{ __('Help') }}</a></li>
                            <li><a href="{{ route('change.language', $language) }}" class="switcher ignore"><span class="fi fi-{{ $countryFlag }}"></span></a></li>

                        </ul>

                    </nav>

                </div>

            </nav>

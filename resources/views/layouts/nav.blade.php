
<nav class="navbar navbar-expand-md" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="assets/img/Coat-of-arms-of-Yemen.png" alt="" data-aos="fade-down"
                data-aos-duration="1200">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down"
                        data-aos-duration="400" data-aos-delay="50">{{ trans('home_trans.About the Sector') }}</a>
                </li>
                <li class="nav-item">
                    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down"
                        data-aos-duration="400" data-aos-delay="50">{{ trans('home_trans.Sector Management') }}</a>
                </li>
                <li class="nav-item">
                    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down"
                        data-aos-duration="400" data-aos-delay="50">{{ trans('home_trans.Human Resources') }}</a>
                </li>
                <li class="nav-item">
                    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down"
                        data-aos-duration="400" data-aos-delay="50">{{ trans('home_trans.Studies') }}</a>
                </li>
                <li class="nav-item">
                    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down"
                        data-aos-duration="400" data-aos-delay="50">{{ trans('home_trans.Specializations') }}</a>
                </li>
                <li class="nav-item">
                    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down"
                        data-aos-duration="400" data-aos-delay="50">{{ trans('home_trans.Monitoring') }}</a>
                </li>
                <li class="nav-item">
                    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down"
                        data-aos-duration="400" data-aos-delay="50">{{ trans('home_trans.Planning') }}</a>
                </li>
                <li class="nav-item">
                    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down"
                        data-aos-duration="400" data-aos-delay="50">{{ trans('home_trans.Finance') }}</a>
                </li>
                <li class="nav-item">
                    <a data-scroll data-easing="easeInQuint" href="#beranda" data-aos="fade-down"
                        data-aos-duration="400" data-aos-delay="50">{{ trans('home_trans.Contract Farming') }}</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-globe"></i>
                    </a>
                    <ul class="dropdown-menu" data-aos="fade-down" data-aos-duration="400" data-aos-delay="50">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <i class="fas fa-flag"></i>
                                {{ $properties['native'] }}
                            </a>
                        @endforeach

                    </ul>
                </li>

                {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div> 
                            </li> --}}
            </ul>
        </div>
    </div>
</nav>

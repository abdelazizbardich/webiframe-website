<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ (config('app.locale') == 'ar')?'rtl':'ltr' }}" @if (config("app.locale") == 'ar') class="rtl" @endif>
<head>

    <!-- Meta datas -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
        <meta name="description" content="{{ __('front.'.config('info.APP_DESCRIPTION')) }}">

    <!-- / SEO -->

    <!-- Title -->
        <title>@yield('title') - {{ __('front.'.config('app.name')) }}</title>
    <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('images/logo.webp') }}" type="image/x-icon">
    <!--
         All css
    -->
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
</head>
<body>
    <header class="shadow-sm">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-auto">
                    <div class="logo-holder">
                        <a href="{{ route('home') }}"><img width="150" height="45" src="{{ asset('images/logo.webp')}}" class="img-fluid" alt="{{ config('app.name') }} logo"></a>
                    </div>
                </div>
                <div class="col nav p-0">
                    <nav>
                        <ul class="col-12 col-md-auto">
                            <li class="col-12 col-md-auto"><a data-current="@yield('title')" data-title="{{ __('front.home') }}" href="{{ route('home') }}/#home">@lang('front.home')</a></li>
                            <li class="col-12 col-md-auto"><a data-current="@yield('title')" data-title="{{ __('front.Presentation') }}" href="{{ route('home') }}/#presentation">{{ __('front.Presentation')}}</a></li>
                            <li class="col-12 col-md-auto"><a data-current="@yield('title')" data-title="{{ __('front.Services') }}" href="{{ route('home') }}/#services">{{ __('front.Services')}}</a></li>
                            <li class="col-12 col-md-auto"><a data-current="@yield('title')" data-title="{{ __('front.Projects') }}" href="{{ route('projects') }}">{{ __('front.Projects')}}</a></li>
                            <li class="col-12 col-md-auto"><a data-current="@yield('title')" data-title="{{ __('front.demos') }}" href="{{ route('demos') }}">{{ __('front.demos')}}</a></li>
                            <li class="col-12 col-md-auto"><a data-current="@yield('title')" data-title="{{ __('front.Pricing') }}" href="{{ route('home') }}/#offers">{{ __('front.Pricing')}}</a></li>
                            <li class="col-12 col-md-auto"><a data-current="@yield('title')" data-title="{{ __('front.Contact us') }}" href="{{ route('contact') }}">{{ __('front.Contact us')}}</a></li>
                            <li class="col-12 d-flex d-md-none justify-content-center">
                                <span class="lang-btn {{ (config('app.locale') == 'en')?'active':'' }}"><a href="{{ route('set-lang','en',Route::current()->getName()) }}">{{ __('front.lang_en') }}</a></span>
                                <span class="lang-btn {{ (config('app.locale') == 'fr')?'active':'' }}"><a href="{{ route('set-lang','fr',Route::current()->getName()) }}">{{ __('front.lang_fr') }}</a></span>
                                <span class="lang-btn {{ (config('app.locale') == 'ar')?'active':'' }}"><a href="{{ route('set-lang','ar',Route::current()->getName()) }}">{{ __('front.lang_ar') }}</a></span>
                            </li>
                            @if(false)
                                <li><a data-current="@yield('title')" data-title="{{ __('front.Blog') }}" href="{{ route('blog.home') }}">{{ __('front.Blog')}}</a></li>
                                <li><a data-current="@yield('title')" data-title="{{ __('front.Free Audit') }}" href="{{ route('home') }}/#audit" class="client-area btn btn-lg btn-success">{{ __('front.Free Audit')}}</a></li>
                                <li><a data-current="@yield('title')" data-title="{{ __('front.Client area') }}" href="https://client.webiframe.com/" rel="nofollow" class="client-area btn btn-lg btn-warning">{{ __('front.Client area') }}</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-lg-auto text-right s-col">
                    <ul>

                        <li class="d-none d-lg-block lang-btn {{ (config('app.locale') == 'en')?'active':'' }}"><a href="{{ route('set-lang','en',Route::current()->getName()) }}">{{ __('front.lang_en') }}</a></li>
                        <li class="d-none d-lg-block lang-btn {{ (config('app.locale') == 'fr')?'active':'' }}"><a href="{{ route('set-lang','fr',Route::current()->getName()) }}">{{ __('front.lang_fr') }}</a></li>
                        <li class="d-none d-lg-block lang-btn {{ (config('app.locale') == 'ar')?'active':'' }}"><a href="{{ route('set-lang','ar',Route::current()->getName()) }}">{{ __('front.lang_ar') }}</a></li>
                        
                        @if(false)
                            <li class="header-s">
                                <i class="fa fa-search"></i>
                                <div class="s-box">
                                    <form action="./search.php" method="GET">
                                        <input placeholder="{{ __('front.Keyword') }}..." type="search" name="s" class="s-inp">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </li>
                        @endif

                        <li>
                            <div class="show-m-nav">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <section id="f-about" class="pt-5 pb-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-3">
                        <h2 class="mt-0 h4">{{ __('front.About') }}</h2>
                        <p>{{ __('front.We focus on the needs of small and medium businesses to improve and increase their performance') }}.</p>
                        <ul>
                            <li><a href="{{ config('info.FACEBOOK_LINK') }}" style="color: #3B5998;"><i class="fab fa-facebook display-4"></i></a></li>
                            <li><a href="{{ config('info.FACEBOOK_INSTAGRAM') }}" style="color: #e91e63;"><i class="fab fa-instagram display-4"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- <section id="copyrights" class="text-center p-5"> -->
            <p class="text-center text-gray small">© {{ date('Y') }} — {{ __('front.'.config('app.name')) }}. {{ __('front.All rights reserved') }}.</p>
        <!-- </section> -->
    </footer>
    <!--
        All scripts
     -->
    <!-- Script js -->
    <script defer src="{{ asset('js/script.js')}}"></script>
</body>
</html>
 
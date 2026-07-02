<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/script.js') }}" defer></script>

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('dashboard.home') }}">{{ config('app.name', '') }}</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-0 mb-2 mb-lg-0">
                    <li class="nav-item d-block d-md-none"><a href="{{ route('dashboard.home') }}" class="nav-link">{{ __('back.Dashboard') }}</a></li>
                    <li class="nav-item d-block d-md-none"><a href="{{ route('dashboard.posts.all') }}" class="nav-link">{{ __('back.Posts') }}</a></li>
                    <li class="nav-item d-block d-md-none"><a href="{{ route('dashboard.categories.all') }}" class="nav-link">{{ __('back.categories') }}</a></li>
                    <li class="nav-item d-block d-md-none"><a href="{{ route('dashboard.project.all') }}" class="nav-link">{{ __('back.Projects') }}</a></li>
                    <li class="nav-item d-block d-md-none"><a href="{{ route('dashboard.demo.all') }}" class="nav-link">{{ __('back.Demos') }}</a></li>
                    <li class="nav-item d-block d-md-none"><a href="{{ route('dashboard.orders.all') }}" class="nav-link">{{ __('back.Orders') }}</a></li>
                    <li class="nav-item d-block d-md-none"><a href="{{ route('dashboard.quotations.all') }}" class="nav-link">{{ __('back.Quotations') }}</a></li>
                    <li class="nav-item d-block d-md-none"><a href="{{ route('dashboard.contacts.all') }}" class="nav-link">{{ __('back.Contacts') }}</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ @Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto p-0" style="position: sticky;top: 0;">
                        <div class="d-none d-md-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                            <a href="{{ route('dashboard.home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                              <span class="fs-4">{{ __('back.Dashboard') }}</span>
                            </a>
                            <hr>
                            <ul class="nav nav-pills flex-column mb-auto">
                              <li><a href="{{ route('dashboard.posts.all') }}" class="nav-link text-white">{{ __('back.Posts') }}</a></li>
                              <li><a href="{{ route('dashboard.categories.all') }}" class="nav-link text-white">{{ __('back.categories') }}</a></li>
                              <li><a href="{{ route('dashboard.project.all') }}" class="nav-link text-white">{{ __('back.Projects') }}</a></li>
                              <li><a href="{{ route('dashboard.demo.all') }}" class="nav-link text-white">{{ __('back.Demos') }}</a></li>
                              <li><a href="{{ route('dashboard.orders.all') }}" class="nav-link text-white">{{ __('back.Orders') }}</a></li>
                              <li><a href="{{ route('dashboard.quotations.all') }}" class="nav-link text-white">{{ __('back.Quotations') }}</a></li>
                              <li><a href="{{ route('dashboard.contacts.all') }}" class="nav-link text-white">{{ __('back.Contacts') }}</a></li>

                            </ul>
                          </div>
                    </div>
                    <div class="col p-5">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

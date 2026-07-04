<!doctype html>
<html lang="{{ config('app.locale') }}" dir="{{ (config('app.locale') == 'ar')?'rtl':'ltr' }}" @if (config("app.locale") == 'ar') class="rtl" @endif>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}" defer></script>

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @if(config('app.locale') == 'ar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.rtl.min.css" integrity="sha384-CfCrinSRH2IR6a4e6fy2q6ioOX7O6Mtm1L9vRvFZ1trBncWmMePhzvafv7oIcWiW" crossorigin="anonymous">
@endif
</head>
<body class="dashboard-layout">
    @php
      $dashboardLinks = [
        ['label' => __('back.Posts'), 'route' => 'dashboard.posts.all', 'active' => 'dashboard.posts.*', 'icon' => 'fas fa-newspaper'],
        ['label' => __('back.categories'), 'route' => 'dashboard.categories.all', 'active' => 'dashboard.categories.*', 'icon' => 'fas fa-sitemap'],
        ['label' => __('back.Projects'), 'route' => 'dashboard.project.all', 'active' => 'dashboard.project.*', 'icon' => 'fas fa-briefcase'],
        ['label' => __('back.Orders'), 'route' => 'dashboard.orders.all', 'active' => 'dashboard.orders.*', 'icon' => 'fas fa-shopping-cart'],
        ['label' => __('back.Quotations'), 'route' => 'dashboard.quotations.all', 'active' => 'dashboard.quotations.*', 'icon' => 'fas fa-file-signature'],
        ['label' => __('back.Contacts'), 'route' => 'dashboard.contacts.all', 'active' => 'dashboard.contacts.*', 'icon' => 'fas fa-address-book'],
      ];
    @endphp
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light dashboard-topbar">
            <div class="container-fluid">
          <a class="dashboard-brand" href="{{ route('dashboard.home') }}">
          <span class="brand-pill">Admin</span>
          {{ config('app.name', '') }}
          </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-0 mb-2 mb-lg-0">
            <li class="nav-item d-block d-md-none">
              <a href="{{ route('dashboard.home') }}" class="nav-link {{ request()->routeIs('dashboard.home') ? 'active' : '' }}"><i class="fas fa-th-large me-2" aria-hidden="true"></i>{{ __('back.Dashboard') }}</a>
            </li>
            @foreach($dashboardLinks as $link)
              <li class="nav-item d-block d-md-none">
                <a href="{{ route($link['route']) }}" class="nav-link {{ request()->routeIs($link['active']) ? 'active' : '' }}"><i class="{{ $link['icon'] }} me-2" aria-hidden="true"></i>{{ $link['label'] }}</a>
              </li>
            @endforeach
                  <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <div class="container-fluid dashboard-shell">
                <div class="row">
                  <div class="col-auto d-none d-md-block">
                    <div class="sidebar-wrap">
                      <div class="sidebar-panel dashboard-animate-panel">
                        <a href="{{ route('dashboard.home') }}" class="sidebar-title d-block text-decoration-none">
                          <i class="fas fa-th-large me-2" aria-hidden="true"></i>{{ __('back.Dashboard') }}
                        </a>
                        <ul class="list-unstyled mb-0">
                          @foreach($dashboardLinks as $link)
                            <li>
                              <a href="{{ route($link['route']) }}" class="dashboard-nav-link {{ request()->routeIs($link['active']) ? 'active' : '' }}"><i class="{{ $link['icon'] }} me-2" aria-hidden="true"></i>{{ $link['label'] }}</a>
                            </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                    </div>
                  <div class="col">
                    <div class="content-panel dashboard-animate-content">
                      @yield('content')
                    </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

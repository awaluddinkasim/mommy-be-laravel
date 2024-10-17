<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
                <img src="./static/logo.svg" width="110" height="32" alt="LOGO" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm"
                        style="background-image: url({{ asset('static/avatar.png') }})"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ auth()->user()->nama }}</div>
                        <div class="mt-1 small text-secondary">Admin</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Account</a>
                    <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    @foreach (config('menu') as $menu)
                        @isset($menu['submenu'])
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        {!! $menu['icon'] !!}
                                    </span>
                                    <span class="nav-link-title">
                                        {{ $menu['label'] }}
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    @foreach ($menu['submenu'] as $submenu)
                                        <a class="dropdown-item"
                                            href="{{ isset($submenu['route']) ? route($submenu['route']) : '#' }}"
                                            rel="noopener">
                                            {{ $submenu['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ isset($menu['route']) ? route($menu['route']) : '#' }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        {!! $menu['icon'] !!}
                                    </span>
                                    <span class="nav-link-title">
                                        {{ $menu['label'] }}
                                    </span>
                                </a>
                            </li>
                        @endisset
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>

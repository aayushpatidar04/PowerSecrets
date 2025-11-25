<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    @yield('styles')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('blogs') }}">Blogs</a>
                                    <a class="dropdown-item" href="{{ route('services') }}">Services</a>
                                    <a class="dropdown-item" href="{{ route('queries') }}">Queries</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @php
            $alerts = [];

            if (session('success')) {
                $alerts[] = ['type' => 'success', 'message' => session('success')];
            }

            if (session('error')) {
                $alerts[] = ['type' => 'error', 'message' => session('error')];
            }

            if ($errors->any()) {
                $alerts[] = [
                    'type' => 'error',
                    'message' => '<ol>' . collect($errors->all())->map(fn($e) => "<li>$e</li>")->implode('') . '</ol>',
                    'isHtml' => true,
                ];
            }
        @endphp

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const alertTypes = {
                    success: 'alert-solid-success border border-success',
                    error: 'alert-solid-danger border border-danger'
                };

                const container = document.getElementById('alert-container');

                @foreach ($alerts as $alert)
                    (function() {
                        const alertHtml = `
                    <div class="card border-0 mb-2 fade-in">
                        <div class="alert ${alertTypes["{{ $alert['type'] }}"]} mb-0 p-3">
                            <div class="d-flex align-items-start">
                                <div class="text-fixed-white w-100">
                                    <div class="d-flex justify-content-between">
                                        <span>{!! $alert['isHtml'] ?? false ? $alert['message'] : e($alert['message']) !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;

                        const tempDiv = document.createElement('div');
                        tempDiv.innerHTML = alertHtml;
                        const alertElement = tempDiv.firstElementChild;
                        container.appendChild(alertElement);

                        setTimeout(() => {
                            alertElement.classList.add('fade-out');
                            setTimeout(() => alertElement.remove(), 500);
                        }, 5000);
                    })();
                @endforeach
            });
        </script>
        <main class="py-4">
            @yield('content')
        </main>

    </div>

    <div id="alert-container" class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050;"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>

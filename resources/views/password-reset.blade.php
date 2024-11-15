<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password | {{ config('app.name') }}</title>

    <link href="{{ asset('assets/css/tabler.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-flags.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-payments.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-vendors.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.min.css?1692870487') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            @if (Session::has('success'))
                <div class="text-center">
                    <img src="{{ asset('assets/img/LOGO.png') }}" alt="" width="300">

                    <h4>{{ Session::get('success') }}</h4>
                </div>
            @else
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark">
                        <img src="{{ asset('assets/img/LOGO.png') }}" width="110" height="32" alt="LOGO"
                            class="navbar-brand-image">
                    </a>
                </div>
                <div class="card card-md">
                    <div class="card-body">
                        <form action="{{ route('password.update') }}" method="post" autocomplete="off">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="email" value="{{ request()->get('email') }}">
                            <div class="mb-3">
                                <label class="form-label">
                                    Password Baru
                                </label>
                                <div class="input-group input-group-flat">
                                    <input type="password" class="form-control" name="password" id="passwordInput"
                                        placeholder="Masukkan password Anda" required>
                                    <span class="input-group-text">
                                        <a href="#" class="link-secondary" title="Show password" id="toggleShow"
                                            data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                <path
                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary w-100">Ganti Password</button>
                            </div>
                        </form>
                    </div>

                </div>
            @endif
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/tabler.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/js/demo.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
        $('#toggleShow').on('click', function() {
            if ($('#passwordInput').attr('type') == 'password') {
                $('#passwordInput').attr('type', 'text')
            } else {
                $('#passwordInput').attr('type', 'password')
            }
        })
    </script>

    @if (Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ Session::get('success') }}',
            })
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ Session::get('error') }}',
            })
        </script>
    @endif
</body>

</html>

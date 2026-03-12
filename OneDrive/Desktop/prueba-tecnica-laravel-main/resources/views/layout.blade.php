<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.6/css/dataTables.dataTables.min.css">
    <script src="//cdn.datatables.net/2.1.6/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #f0f2f5;
            min-height: 100vh;
        }
        .sidebar {
            background: linear-gradient(180deg, #1a1a2e 0%, #16213e 60%, #0f3460 100%);
            min-height: 100vh;
            border-radius: 12px;
            padding: 0;
            position: sticky;
            top: 16px;
        }
        .sidebar-logo {
            padding: 24px 16px 16px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            text-align: center;
        }
        .sidebar-logo img {
            filter: brightness(0) invert(1);
            width: 120px;
        }
        .sidebar-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            color: rgba(255,255,255,0.35);
            text-transform: uppercase;
            padding: 20px 20px 6px;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.65);
            font-size: 13.5px;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 2px 10px;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: #fff;
        }
        .sidebar .nav-link.active {
            background: #0d6efd;
            color: #fff;
        }
        .sidebar .nav-link i {
            font-size: 16px;
            width: 20px;
            text-align: center;
        }
        .main-content {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            min-height: 80vh;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-3 py-3">
        <div class="row g-3">
            <div class="col-md-2">
                @include('main')
            </div>
            <div class="col-md-10">
                <div class="main-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    {{-- Notificaciones SweetAlert2 --}}
    @if (session('alert-success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '{!! session('alert-success') !!}',
                confirmButtonColor: '#0d6efd',
                timer: 3000,
                timerProgressBar: true,
            });
        </script>
    @endif
    @if (session('alert-error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: '¡Error!',
                text: '{!! session('alert-error') !!}',
                confirmButtonColor: '#dc3545',
            });
        </script>
    @endif

</body>

</html>

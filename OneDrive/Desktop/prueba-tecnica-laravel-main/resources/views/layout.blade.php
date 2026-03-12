<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.bootstrap5.min.css') }}">
    <script src="{{ asset('js/dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
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

        /* DataTables custom styles */
        table.dataTable thead th {
            background: linear-gradient(135deg, #1a1a2e, #0f3460);
            color: #fff;
            font-weight: 600;
            font-size: 12px;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            border-color: rgba(255,255,255,0.1) !important;
            white-space: nowrap;
        }
        table.dataTable thead th.sorting::after,
        table.dataTable thead th.sorting_asc::after,
        table.dataTable thead th.sorting_desc::after {
            color: rgba(255,255,255,0.6) !important;
        }
        table.dataTable tbody tr:hover td {
            background-color: #f0f5ff !important;
        }
        table.dataTable tbody tr td {
            vertical-align: middle;
            font-size: 14px;
        }
        div.dt-container .dt-search input {
            border-radius: 8px;
            border: 1px solid #dee2e6;
            padding: 6px 12px;
            font-size: 13px;
        }
        div.dt-container .dt-search input:focus {
            outline: none;
            border-color: #0d6efd;
            box-shadow: 0 0 0 3px rgba(13,110,253,.15);
        }
        div.dt-container select {
            border-radius: 8px;
            border: 1px solid #dee2e6;
            padding: 4px 28px 4px 10px;
            font-size: 13px;
            appearance: auto;
            -webkit-appearance: auto;
            background-image: none !important;
        }
        div.dt-container .dt-info {
            font-size: 13px;
            color: #6c757d;
        }
        div.dt-container .dt-paging .page-link {
            font-size: 13px;
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

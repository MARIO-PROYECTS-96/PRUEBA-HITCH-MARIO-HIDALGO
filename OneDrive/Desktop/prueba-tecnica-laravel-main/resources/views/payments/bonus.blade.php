@extends('layout')
@section('content')
    <div class="p-4">
        <h4 class="text-uppercase">Punto Extra: REST API</h4>
        <hr>
        <div class="col-md-12 mt-2">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">NOMBRE</th>
                        <th class="text-center">EMAIL</th>
                        <th class="text-center">TELÉFONO</th>
                        <th class="text-center">COMPAÑÍA</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- aquí se mostrarán los usuarios de la API --}}
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $('#table').DataTable({
            language: {
                url: '{{ asset('js/es-ES.json') }}'
            }
        });
    </script>
@endsection

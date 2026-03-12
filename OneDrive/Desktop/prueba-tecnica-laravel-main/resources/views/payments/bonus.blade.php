@extends('layout')
@section('content')
    <div class="p-4">
        <div class="row">
            <div class="col-md-9">
                <h4 class="text-uppercase">Punto Extra: REST API</h4>
            </div>
            <div class="col-md-3 text-end">
                <a href="{{ route('extra-point-instrucciones') }}" class="btn btn-secondary">Ver Instrucciones</a>
            </div>
        </div>
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
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script>
        const dt = $('#table').DataTable({
            language: {
                url: '{{ asset('js/es-ES.json') }}'
            }
        });

        axios.get('https://jsonplaceholder.typicode.com/users')
            .then(function (response) {
                response.data.forEach(function (user) {
                    dt.row.add([
                        user.id,
                        user.name,
                        user.email,
                        user.phone,
                        user.company.name
                    ]).draw(false);
                });
            })
            .catch(function () {
                Swal.fire({
                    icon: 'error',
                    title: '¡Error!',
                    text: 'No se pudo obtener los datos de la API.',
                    confirmButtonColor: '#dc3545',
                });
            });
    </script>
@endsection

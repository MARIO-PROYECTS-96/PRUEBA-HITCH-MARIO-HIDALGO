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
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ $user['id'] }}</td>
                            <td class="text-center">{{ $user['name'] }}</td>
                            <td class="text-center">{{ $user['email'] }}</td>
                            <td class="text-center">{{ $user['phone'] }}</td>
                            <td class="text-center">{{ $user['company']['name'] }}</td>
                        </tr>
                    @endforeach
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

@extends('layout')
@section('content')
    <div class="row p-4">
        <div class="col-md-9">
            <h4 class="text-uppercase">Editar Pago</h4>
        </div>
        <div class="col-md-3 text-end">
            <a href="{{ route('payments') }}" class="btn btn-secondary">Volver a Pagos</a>
        </div>
        <br>
        <br>
        <hr>
        <div class="col-md-12">
            <form action="{{ route('payments-update', $payment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" name="description" id="description"
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="descripcion..." value="{{ old('description', $payment->description) }}">
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" name="price" id="price"
                                class="form-control @error('price') is-invalid @enderror"
                                placeholder="precio..." value="{{ old('price', $payment->price) }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 p-2 text-center">
                        <button class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: '¡Error de validación!',
                html: '{!! implode('<br>', $errors->all()) !!}',
                confirmButtonColor: '#dc3545',
            });
        </script>
    @endif
@endsection

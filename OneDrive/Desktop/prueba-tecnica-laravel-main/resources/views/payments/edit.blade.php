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
                            <label for="price_display">Precio (CLP)</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" id="price_display"
                                    class="form-control @error('price') is-invalid @enderror"
                                    placeholder="0" autocomplete="off"
                                    value="{{ number_format(old('price', $payment->price), 0, ',', '.') }}">
                                <input type="hidden" name="price" id="price" value="{{ old('price', $payment->price) }}">
                            </div>
                            @error('price')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
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

    <script>
        const display = document.getElementById('price_display');
        const hidden  = document.getElementById('price');

        display.addEventListener('input', function () {
            let raw = this.value.replace(/\D/g, '');
            hidden.value = raw;
            this.value = raw ? parseInt(raw).toLocaleString('es-CL') : '';
        });

        // Confirmación al salir sin guardar
        let formModified = false;
        document.querySelector('form').addEventListener('input', () => formModified = true);
        document.querySelector('form').addEventListener('submit', () => formModified = false);

        document.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function (e) {
                if (!formModified) return;
                e.preventDefault();
                const href = this.href;
                Swal.fire({
                    title: '¿Salir sin guardar?',
                    text: 'Tienes cambios sin guardar que se perderán.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Sí, salir',
                    cancelButtonText: 'Quedarme',
                }).then((result) => {
                    if (result.isConfirmed) window.location.href = href;
                });
            });
        });
    </script>
@endsection

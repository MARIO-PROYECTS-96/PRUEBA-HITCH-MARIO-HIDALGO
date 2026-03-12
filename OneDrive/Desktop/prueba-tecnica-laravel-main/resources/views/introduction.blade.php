@extends('layout')
@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center text-center py-5 px-4"
        style="min-height: 80vh;">

        <div class="mb-4" style="display:inline-flex;align-items:center;justify-content:center;width:88px;height:88px;background:linear-gradient(135deg,#1a1a2e,#0f3460);border-radius:24px;box-shadow:0 8px 32px rgba(13,110,253,.25);">
            <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2" y="6" width="28" height="20" rx="4" stroke="white" stroke-width="2"/>
                <path d="M2 12h28" stroke="white" stroke-width="2"/>
                <rect x="6" y="17" width="6" height="3" rx="1" fill="white"/>
                <circle cx="24" cy="18.5" r="2.5" fill="#60a5fa"/>
                <circle cx="18" cy="18.5" r="2.5" fill="rgba(255,255,255,0.4)"/>
            </svg>
        </div>

        <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold px-3 py-2 mb-3"
            style="font-size: 13px; letter-spacing: 1px;">
            PRUEBA TÉCNICA · LARAVEL
        </span>

        <h1 class="display-4 fw-bold mb-2" style="color: #1a1a2e;">Mario Hidalgo</h1>
        <p class="text-muted fs-5 mb-5">Implementación CRUD de Pagos con Laravel & MySQL</p>

        <div class="row g-3 justify-content-center w-100" style="max-width: 700px;">
            <div class="col-sm-6">
                <a href="{{ route('instrucciones') }}"
                    class="d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none border"
                    style="background:#f8f9ff; transition: box-shadow .2s;"
                    onmouseover="this.style.boxShadow='0 4px 16px rgba(13,110,253,.15)'"
                    onmouseout="this.style.boxShadow='none'">
                    <div class="rounded-2 d-flex align-items-center justify-content-center"
                        style="width:44px;height:44px;background:#e7f0ff;flex-shrink:0;">
                        <i class="bi bi-file-text fs-5 text-primary"></i>
                    </div>
                    <div class="text-start">
                        <div class="fw-semibold text-dark" style="font-size:14px;">Instrucciones</div>
                        <div class="text-muted" style="font-size:12px;">Ver pasos de la prueba</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('payments') }}"
                    class="d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none border"
                    style="background:#f8f9ff; transition: box-shadow .2s;"
                    onmouseover="this.style.boxShadow='0 4px 16px rgba(13,110,253,.15)'"
                    onmouseout="this.style.boxShadow='none'">
                    <div class="rounded-2 d-flex align-items-center justify-content-center"
                        style="width:44px;height:44px;background:#e7f0ff;flex-shrink:0;">
                        <i class="bi bi-credit-card fs-5 text-primary"></i>
                    </div>
                    <div class="text-start">
                        <div class="fw-semibold text-dark" style="font-size:14px;">Listado de Pagos</div>
                        <div class="text-muted" style="font-size:12px;">Gestionar pagos del sistema</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('extra-point-instrucciones') }}"
                    class="d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none border"
                    style="background:#f8f9ff; transition: box-shadow .2s;"
                    onmouseover="this.style.boxShadow='0 4px 16px rgba(13,110,253,.15)'"
                    onmouseout="this.style.boxShadow='none'">
                    <div class="rounded-2 d-flex align-items-center justify-content-center"
                        style="width:44px;height:44px;background:#e7f0ff;flex-shrink:0;">
                        <i class="bi bi-journal-code fs-5 text-primary"></i>
                    </div>
                    <div class="text-start">
                        <div class="fw-semibold text-dark" style="font-size:14px;">Instrucciones Punto Extra</div>
                        <div class="text-muted" style="font-size:12px;">REST API externa</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('extra-point') }}"
                    class="d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none border"
                    style="background:#f8f9ff; transition: box-shadow .2s;"
                    onmouseover="this.style.boxShadow='0 4px 16px rgba(13,110,253,.15)'"
                    onmouseout="this.style.boxShadow='none'">
                    <div class="rounded-2 d-flex align-items-center justify-content-center"
                        style="width:44px;height:44px;background:#fff3cd;flex-shrink:0;">
                        <i class="bi bi-star fs-5 text-warning"></i>
                    </div>
                    <div class="text-start">
                        <div class="fw-semibold text-dark" style="font-size:14px;">Punto Extra</div>
                        <div class="text-muted" style="font-size:12px;">Consumo de API pública</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

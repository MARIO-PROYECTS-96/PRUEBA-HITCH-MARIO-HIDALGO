<div class="sidebar">
    <div class="sidebar-logo">
        <div style="display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;background:rgba(255,255,255,0.12);border-radius:16px;margin-bottom:8px;">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2" y="6" width="28" height="20" rx="4" stroke="white" stroke-width="2"/>
                <path d="M2 12h28" stroke="white" stroke-width="2"/>
                <rect x="6" y="17" width="6" height="3" rx="1" fill="white"/>
                <rect x="6" y="17" width="6" height="3" rx="1" fill="white"/>
                <circle cx="24" cy="18.5" r="2.5" fill="#60a5fa"/>
                <circle cx="18" cy="18.5" r="2.5" fill="rgba(255,255,255,0.4)"/>
            </svg>
        </div>
        <div style="color:rgba(255,255,255,0.9);font-size:13px;font-weight:700;letter-spacing:0.5px;">Gestión de Pagos</div>
        <div style="color:rgba(255,255,255,0.35);font-size:11px;">Laravel CRUD</div>
    </div>

    <div class="sidebar-label">General</div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i> Inicio
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('instrucciones') }}" class="nav-link {{ request()->routeIs('instrucciones') ? 'active' : '' }}">
                <i class="bi bi-file-text"></i> Instrucciones
            </a>
        </li>
    </ul>

    <div class="sidebar-label">Pagos</div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('payments') }}" class="nav-link {{ request()->routeIs('payments*') ? 'active' : '' }}">
                <i class="bi bi-credit-card"></i> Listado de Pagos
            </a>
        </li>
    </ul>

    <div class="sidebar-label">Punto Extra</div>
    <ul class="nav flex-column pb-3">
        <li class="nav-item">
            <a href="{{ route('extra-point-instrucciones') }}" class="nav-link {{ request()->routeIs('extra-point-instrucciones') ? 'active' : '' }}">
                <i class="bi bi-journal-code"></i> Instrucciones
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('extra-point') }}" class="nav-link {{ request()->routeIs('extra-point') ? 'active' : '' }}">
                <i class="bi bi-star"></i> Punto Extra
            </a>
        </li>
    </ul>
</div>
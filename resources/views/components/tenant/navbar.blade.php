<div class="d-flex align-items-center gap-3">
    <button class="btn-toggle" id="sidebarToggle">
        <i class="bi bi-list"></i>
    </button>

    <div class="topbar-brand-mobile">
        <i class="bi bi-house-door-fill text-primary-emerald me-2"></i>
        MyKost
    </div>
</div>

<div class="topbar-actions d-flex align-items-center gap-2 ms-auto">
    <button class="btn-icon position-relative">
        <i class="bi bi-bell-fill"></i>
        <span class="badge bg-danger rounded-pill">1</span>
    </button>

    <div class="dropdown">
        <button class="btn dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown">
            <div class="avatar" style="background: linear-gradient(135deg, #1e293b, #475569);">P</div>
            <div class="d-none d-md-block text-start">
                <div class="fw-semibold small">Penghuni</div>
                <div class="text-muted" style="font-size: 0.75rem;">Kamar 101</div>
            </div>
            <i class="bi bi-chevron-down small text-muted"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius: 0.75rem;">
            <li><a class="dropdown-item py-2" href="#"><i class="bi bi-person me-2"></i> Profil</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item py-2 text-danger">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
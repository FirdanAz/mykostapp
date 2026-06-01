<div class="sidebar-brand">
    <i class="bi bi-house-door-fill"></i>
    <span class="sidebar-text">MyKost</span>
</div>

<<nav class="sidebar-nav">
    <div class="nav-item">
        <a href="#" class="nav-link {{ request()->routeIs('tenant.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid-1x2-fill"></i>
            <span class="sidebar-text">Dashboard</span>
        </a>
    </div>

    <div class="nav-item">
        <a href="#" class="nav-link {{ request()->routeIs('tenant.room') ? 'active' : '' }}">
            <i class="bi bi-door-open-fill"></i>
            <span class="sidebar-text">Info Kamar</span>
        </a>
    </div>

    <div class="nav-item">
        <a href="#" class="nav-link {{ request()->routeIs('tenant.bills.*') ? 'active' : '' }}">
            <i class="bi bi-receipt-cutoff"></i>
            <span class="sidebar-text">Tagihan</span>
        </a>
    </div>

    <div class="nav-item">
        <a href="#" class="nav-link {{ request()->routeIs('tenant.payments.*') ? 'active' : '' }}">
            <i class="bi bi-credit-card-fill"></i>
            <span class="sidebar-text">Pembayaran</span>
        </a>
    </div>
    </nav>

    <div class="sidebar-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link w-100 border-0 bg-transparent" style="cursor: pointer;">
                <i class="bi bi-box-arrow-right"></i>
                <span class="sidebar-text">Logout</span>
            </button>
        </form>
    </div>
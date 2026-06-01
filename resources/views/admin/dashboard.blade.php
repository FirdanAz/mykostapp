@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Dashboard</h4>
            <p class="text-muted mb-0">Selamat datang kembali, Admin Kost</p>
        </div>
        <div class="text-muted small">
            <i class="bi bi-calendar3 me-1"></i> {{ now()->format('l, d F Y') }}
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-6 col-xl-3">
            <div class="mk-stat-card">
                <div class="stat-icon bg-primary-soft">
                    <i class="bi bi-door-open-fill"></i>
                </div>
                <div class="stat-value">24</div>
                <div class="stat-label">Total Kamar</div>
                <div class="stat-trend up">
                    <i class="bi bi-arrow-up-short"></i> 100%
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="mk-stat-card">
                <div class="stat-icon bg-success-soft">
                    <i class="bi bi-person-check-fill"></i>
                </div>
                <div class="stat-value">18</div>
                <div class="stat-label">Kamar Terisi</div>
                <div class="stat-trend up">
                    <i class="bi bi-arrow-up-short"></i> 75%
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="mk-stat-card">
                <div class="stat-icon bg-warning-soft">
                    <i class="bi bi-door-closed-fill"></i>
                </div>
                <div class="stat-value">6</div>
                <div class="stat-label">Kamar Kosong</div>
                <div class="stat-trend down">
                    <i class="bi bi-arrow-down-short"></i> 25%
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="mk-stat-card">
                <div class="stat-icon bg-primary-soft">
                    <i class="bi bi-cash-stack"></i>
                </div>
                <div class="stat-value">Rp 12.5jt</div>
                <div class="stat-label">Total Pemasukan</div>
                <div class="stat-trend up">
                    <i class="bi bi-arrow-up-short"></i> +12%
                </div>
            </div>
        </div>
    </div>

    <!-- Content Placeholder -->
    <div class="mk-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="bi bi-activity me-2"></i>Aktivitas Terbaru</span>
            <button class="btn btn-sm btn-outline-primary">Lihat Semua</button>
        </div>
        <div class="card-body">
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="bi bi-inbox"></i>
                </div>
                <div class="empty-title">Belum ada aktivitas</div>
                <div class="empty-desc">Data aktivitas akan muncul setelah sistem berjalan penuh.</div>
            </div>
        </div>
    </div>
@endsection
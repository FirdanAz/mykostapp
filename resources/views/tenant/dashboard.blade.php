@extends('layouts.tenant')

@section('title', 'Dashboard Penghuni')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Dashboard Penghuni</h4>
            <p class="text-muted mb-0">Selamat datang di MyKostApp</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-6">
            <div class="mk-card">
                <div class="card-header">
                    <i class="bi bi-door-open-fill me-2"></i>Informasi Kamar
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stat-icon bg-primary-soft me-3">
                            <i class="bi bi-house-fill"></i>
                        </div>
                        <div>
                            <div class="fw-bold fs-5">Kamar 101</div>
                            <div class="text-muted">Lantai 1 • Tipe Standar</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between text-muted small border-top pt-3">
                        <span><i class="bi bi-calendar-check me-1"></i> Masuk: 1 Jan 2024</span>
                        <span class="badge bg-success">Aktif</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mk-card">
                <div class="card-header d-flex justify-content-between">
                    <span><i class="bi bi-receipt-cutoff me-2"></i>Tagihan Aktif</span>
                    <span class="badge bg-danger">2 Tagihan</span>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-3 mb-2">
                        <div>
                            <div class="fw-semibold">Tagihan Juni 2024</div>
                            <div class="text-muted small">Jatuh tempo: 10 Jun 2024</div>
                        </div>
                        <div class="text-end">
                            <div class="fw-bold text-danger">Rp 1.500.000</div>
                            <span class="badge bg-warning">Belum Lunas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
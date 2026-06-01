@extends('layouts.guest')

@section('title', 'Verifikasi Email')

@section('content')
<div class="auth-card bg-white p-4 p-md-5 text-center">
    <div class="mb-3">
        <i class="bi bi-envelope-check-fill text-primary-emerald" style="font-size: 3rem;"></i>
    </div>
    <h4 class="fw-bold mb-1">Verifikasi Email Anda</h4>
    <p class="text-muted small mb-4">Terima kasih telah mendaftar! Silakan cek email dan klik link verifikasi.</p>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success rounded-3 mb-4 d-flex align-items-center justify-content-center">
            <i class="bi bi-check-circle-fill me-2"></i>
            <div>Link verifikasi baru telah dikirim.</div>
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}" class="d-inline">
        @csrf
        <button type="submit" class="auth-btn mb-3">
            <i class="bi bi-arrow-repeat"></i> Kirim Ulang Link
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-link text-decoration-none small text-muted">
            <i class="bi bi-box-arrow-right me-1"></i> Logout
        </button>
    </form>
</div>
@endsection
@extends('layouts.guest')

@section('title', 'Lupa Password')

@section('content')
<div class="auth-card bg-white p-4 p-md-5">
    <div class="text-center mb-4">
        <div class="mb-3">
            <i class="bi bi-shield-lock-fill text-primary-emerald" style="font-size: 3rem;"></i>
        </div>
        <h4 class="fw-bold mb-1">Lupa Password?</h4>
        <p class="text-muted small">Masukkan email dan kami akan kirimkan link reset password.</p>
    </div>

    <x-auth-session-status class="mb-3" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-4">
            <label class="form-label fw-semibold small text-muted text-uppercase" style="letter-spacing: 0.05em;">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="auth-input" placeholder="nama@email.com" required autofocus autocomplete="email">
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <button type="submit" class="auth-btn mb-3">
            <i class="bi bi-envelope"></i> Kirim Link Reset
        </button>

        <div class="text-center small text-muted">
            <a href="{{ route('login') }}" class="auth-link">
                <i class="bi bi-arrow-left me-1"></i>Kembali ke Login
            </a>
        </div>
    </form>
</div>
@endsection
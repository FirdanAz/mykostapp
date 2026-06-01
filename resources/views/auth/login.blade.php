@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="auth-card bg-white p-4 p-md-5">
        <div class="text-center mb-4">
            <h4 class="fw-bold mb-1">Selamat Datang Kembali</h4>
            <p class="text-muted small">Masuk ke akun MyKostApp Anda</p>
        </div>

        <x-auth-session-status class="mb-3" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold small text-muted text-uppercase"
                    style="letter-spacing: 0.05em;">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="auth-input" placeholder="nama@email.com"
                    required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <label class="form-label fw-semibold small text-muted text-uppercase mb-0"
                        style="letter-spacing: 0.05em;">Password</label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="small auth-link">Lupa?</a>
                    @endif
                </div>
                <input type="password" name="password" class="auth-input" placeholder="••••••••" required
                    autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <div class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        style="border-color: #d1d5db;">
                    <label class="form-check-label small text-muted" for="remember">Ingat saya di perangkat ini</label>
                </div>
            </div>

            <button type="submit" class="auth-btn mb-3">
                <i class="bi bi-box-arrow-in-right"></i> Masuk
            </button>

            @if (Route::has('register'))
                <div class="text-center small text-muted">
                    Belum punya akun? <a href="{{ route('register') }}" class="auth-link">Daftar sekarang</a>
                </div>
            @endif
        </form>
    </div>
@endsection
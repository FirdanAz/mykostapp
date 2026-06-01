@extends('layouts.guest')

@section('title', 'Daftar Akun')

@section('content')
    <div class="auth-card bg-white p-4 p-md-5">
        <div class="text-center mb-4">
            <h4 class="fw-bold mb-1">Buat Akun Baru</h4>
            <p class="text-muted small">Daftar untuk mulai mengelola kost Anda</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold small text-muted text-uppercase" style="letter-spacing: 0.05em;">Nama
                    Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" class="auth-input" placeholder="John Doe" required
                    autofocus autocomplete="name">
                <x-input-error :messages="$errors->get('name')" class="mt-1" />
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold small text-muted text-uppercase"
                    style="letter-spacing: 0.05em;">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="auth-input" placeholder="nama@email.com"
                    required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold small text-muted text-uppercase"
                    style="letter-spacing: 0.05em;">Password</label>
                <input type="password" name="password" class="auth-input" placeholder="Minimal 8 karakter" required
                    autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold small text-muted text-uppercase"
                    style="letter-spacing: 0.05em;">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="auth-input" placeholder="Ulangi password"
                    required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
            </div>

            <button type="submit" class="auth-btn mb-3">
                <i class="bi bi-person-plus"></i> Daftar
            </button>

            <div class="text-center small text-muted">
                Sudah punya akun? <a href="{{ route('login') }}" class="auth-link">Masuk</a>
            </div>
        </form>
    </div>
@endsection
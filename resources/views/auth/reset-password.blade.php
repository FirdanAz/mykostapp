@extends('layouts.guest')

@section('title', 'Reset Password')

@section('content')
<div class="auth-card bg-white p-4 p-md-5">
    <div class="text-center mb-4">
        <h4 class="fw-bold mb-1">Reset Password</h4>
        <p class="text-muted small">Buat password baru untuk akun Anda</p>
    </div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="mb-3">
            <label class="form-label fw-semibold small text-muted text-uppercase" style="letter-spacing: 0.05em;">Email</label>
            <input type="email" name="email" value="{{ old('email', $request->email) }}" class="auth-input" required autofocus autocomplete="email">
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold small text-muted text-uppercase" style="letter-spacing: 0.05em;">Password Baru</label>
            <input type="password" name="password" class="auth-input" placeholder="Minimal 8 karakter" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold small text-muted text-uppercase" style="letter-spacing: 0.05em;">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="auth-input" placeholder="Ulangi password baru" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
        </div>

        <button type="submit" class="auth-btn">
            <i class="bi bi-check-circle"></i> Reset Password
        </button>
    </form>
</div>
@endsection
@extends('layouts.guest')

@section('title', 'Konfirmasi Password')

@section('content')
    <div class="auth-card bg-white p-4 p-md-5">
        <div class="text-center mb-4">
            <h4 class="fw-bold mb-1">Konfirmasi Password</h4>
            <p class="text-muted small">Area aman. Konfirmasi password untuk melanjutkan.</p>
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="mb-4">
                <label class="form-label fw-semibold small text-muted text-uppercase"
                    style="letter-spacing: 0.05em;">Password</label>
                <input type="password" name="password" class="auth-input" placeholder="••••••••" required
                    autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <button type="submit" class="auth-btn">
                <i class="bi bi-shield-check"></i> Konfirmasi
            </button>
        </form>
    </div>
@endsection
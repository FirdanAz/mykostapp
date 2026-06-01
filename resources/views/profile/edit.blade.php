@extends('layouts.admin')

@section('title', 'Profil Saya')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Profil Saya</h4>
            <p class="text-muted mb-0">Kelola informasi akun dan keamanan password Anda</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-6">
            <div class="mk-card">
                <div class="card-header">
                    <i class="bi bi-person-gear me-2"></i>Informasi Profil
                </div>
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mk-card">
                <div class="card-header">
                    <i class="bi bi-shield-lock me-2"></i>Update Password
                </div>
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mk-card" style="border-top: 3px solid #ef4444;">
                <div class="card-header text-danger border-0 bg-transparent">
                    <i class="bi bi-trash3 me-2"></i>Hapus Akun
                </div>
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
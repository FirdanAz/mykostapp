@extends('layouts.app')

@section('title', 'Beranda - MyKostApp')

@section('content')
    <div class="text-center py-5">
        <h1 class="display-4 fw-bold text-primary">Selamat Datang di MyKostApp</h1>
        <p class="lead text-muted">Sistem Informasi Manajemen Kost berbasis Laravel 12</p>
        <div class="mt-4">
            {{-- <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2"> --}}
                <i class="bi bi-box-arrow-in-right me-2"></i>Login
            </a>
        </div>
    </div>
@endsection
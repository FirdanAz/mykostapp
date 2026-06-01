<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Authentication') | MyKostApp</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <style>
        .auth-split {
            min-height: 100vh;
        }

        .auth-brand-panel {
            background: linear-gradient(135deg, #166534 0%, #22C55E 100%);
            position: relative;
        }

        .auth-brand-panel::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle at 2px 2px, rgba(255, 255, 255, 0.12) 1px, transparent 0);
            background-size: 28px 28px;
        }

        .auth-card {
            border: none;
            border-radius: 1.25rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
        }

        .auth-input {
            height: 3rem;
            border-radius: 0.75rem;
            border: 1.5px solid #E5E7EB;
            padding: 0 1rem;
            font-size: 0.9375rem;
            transition: all 0.2s;
            width: 100%;
        }

        .auth-input:focus {
            border-color: #22C55E;
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.1);
            outline: none;
        }

        .auth-btn {
            height: 3rem;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            background: linear-gradient(135deg, #166534, #22C55E);
            border: none;
            color: white;
            transition: all 0.2s;
            width: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .auth-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(22, 101, 52, 0.3);
        }

        .auth-link {
            color: #166534;
            text-decoration: none;
            font-weight: 600;
        }

        .auth-link:hover {
            color: #14532d;
            text-decoration: underline;
        }
    </style>

    @stack('styles')
</head>

<body>
    <div class="auth-split row g-0">
        <!-- Brand Panel (Desktop) -->
        <div
            class="col-lg-7 auth-brand-panel text-white d-none d-lg-flex flex-column justify-content-center align-items-center p-5">
            <div class="position-relative text-center" style="max-width: 480px;">
                <div class="mb-4">
                    <i class="bi bi-house-door-fill" style="font-size: 4rem; opacity: 0.9;"></i>
                </div>
                <h1 class="display-5 fw-bold mb-3">MyKostApp</h1>
                <p class="lead opacity-75 mb-5">Sistem Informasi Manajemen Kost Modern. Kelola kost Anda dengan mudah,
                    cepat, dan profesional.</p>
                <div class="d-flex gap-4 justify-content-center opacity-75">
                    <div class="text-center">
                        <div class="fw-bold fs-4">100%</div>
                        <div class="small">Digital</div>
                    </div>
                    <div class="vr opacity-50"></div>
                    <div class="text-center">
                        <div class="fw-bold fs-4">24/7</div>
                        <div class="small">Akses</div>
                    </div>
                    <div class="vr opacity-50"></div>
                    <div class="text-center">
                        <div class="fw-bold fs-4">Real-time</div>
                        <div class="small">Laporan</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Panel -->
        <div class="col-12 col-lg-5 d-flex align-items-center justify-content-center p-4 bg-white">
            <div class="w-100" style="max-width: 420px;">
                <div class="text-center mb-4 d-lg-none">
                    <i class="bi bi-house-door-fill text-primary-emerald" style="font-size: 3rem;"></i>
                    <h4 class="fw-bold mt-2 text-primary-emerald">MyKostApp</h4>
                </div>

                @yield('content')
            </div>
        </div>
    </div>

    @stack('scripts')
</body>

</html>